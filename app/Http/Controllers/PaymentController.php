<?php

namespace App\Http\Controllers;

use App\Cart;
use Exception;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Http\Request;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Api\ResultPrinter;

class PaymentController extends Controller
{

    private $apiContext;
    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig(config('paypal.settings'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $payment_id = $request->session()->get('payment_id');
        $request->session()->forget('payment_id');

        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        $payment = Payment::get($payment_id, $this->apiContext);

        try {
            $result = $payment->execute($execution, $this->apiContext);
            if ($result->getState() == 'approved') {
                 $request->session()->flush();
                return redirect('book')->with('message', 'You have successfully placed an order. Your order will be delivered in up to 3 days.');
            }
        } catch (Exception $e) {
            echo "Failed";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cart $cart)
    {
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $items = array();
        foreach ($cart->items as $item) {
            $item1 = new Item();
            $item1->setName($item['name'])
                ->setCurrency('USD')
                ->setQuantity((int)$item['quantity'])
                ->setSku((string)mt_rand(100000, 999999)) // Similar to `item_number` in Classic API
                ->setPrice($item['price']);

            $items[] = $item1;
        }

        $itemList = new ItemList();
        $itemList->setItems($items);
        
        $details = new Details();
        $details->setShipping(1.2)
            ->setTax(1.3)
            ->setSubtotal($cart->totalPrice);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($cart->totalPrice + 2.5)
             ->setDetails($details);

        // ### Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        // ### Redirect urls
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.create'))
            ->setCancelUrl(route('payment.create'));

        // ### Payment
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            echo "Failed";
            exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();

        $request->session()->put('payment_id', $payment->id);
        return redirect()->to($approvalUrl);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
