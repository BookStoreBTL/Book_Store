<?php

namespace App;
use Session;

class Cart {
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    //add cart
    public function add($item, $id) {
        $cart = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $cart = $this->items[$id];
            }
        }
        $cart['qty']++;
        if($item->sale_price == 0) {
            $cart['price'] = $item->price * $cart['qty'];
            $this->totalPrice += $item->price;
        } else {
            $cart['price'] = $item->sale_price * $cart['qty'];
            $this->totalPrice += $item->sale_price;
        }

        $this->items[$id] = $cart;
        $this->totalQty++;
    }

    // public function update($id, $qty) {
    //     $cart = Session('cart')?Session::get('cart'):null;
    //     $cart->items['id']['qty'] = $qty;
    // }

    //delete
    public function delete($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    } 
}