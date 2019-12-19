<?php

namespace App;
use Session;

class Cart {
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct() {
        // if($oldCart) {
        //     $this->items = $oldCart->items;
        //     $this->totalQty = $oldCart->totalQty;
        //     $this->totalPrice = $oldCart->totalPrice;
        // }
        $this->items = Session('cart') ? Session('cart'):[];
        $this->totalPrice = $this->get_total_price();
        $this->totalQty = $this->get_total_quantity();
    }

    //add cart
    public function add($book, $quantity = 1) {
        // $cart = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];
        // if($this->items) {
        //     if(array_key_exists($id, $this->items)) {
        //         $cart = $this->items[$id];
        //     }
        // }
        // $cart['qty']++;
        // if($item->sale_price == 0) {
        //     $cart['price'] = $item->price * $cart['qty'];
        //     $this->totalPrice += $item->price;
        // } else {
        //     $cart['price'] = $item->sale_price * $cart['qty'];
        //     $this->totalPrice += $item->sale_price;
        // }

        // $this->items[$id] = $cart;
        // $this->totalQty++;
        $item = [
            'id' => $book->id,
            'name' => $book->name,
            'price' => $book->sale_price ? $book->sale_price : $book->price,
            'image' => $book->img,
            'quantity' => $quantity
        ];
        if(isset($this->items[$book->id])) {
            $this->items[$book->id]['quantity'] += $quantity;
        } else {
            $this->items[$book->id] = $item;
        }
        Session(['cart' => $this->items]);
    }

    public function remove($id) {
        if(isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        Session(['cart' => $this->items]);
    }
    public function update($id, $quantity = 1) {
        if(isset($this->items[$id])) {
            $this->items[$id]['quantity'] = $quantity;
        }
        Session(['cart' => $this->items]);
    }
    public function clear() {
        Session(['cart' => '']);
    }

    //delete
    // public function delete($id) {
    //     $this->totalQty -= $this->items[$id]['qty'];
    //     $this->totalPrice -= $this->items[$id]['price'];
    //     unset($this->items[$id]);
    // } 
    private function get_total_price() {
        $price = 0;
        foreach($this->items as $item) {
            $price += $item['price']*$item['quantity'];
        }
        return $price;
    }
    private function get_total_quantity() {
        $qty = 0;
        foreach($this->items as $item) {
            $qty += $item['quantity'];
        }
        return $qty;
    }
}