@extends('main.layout.index')
@section('content')
<div class="container first-content cart-section">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col">product</th>
          <th scope="col">price</th>
          <th scope="col">quantity</th>
          <th scope="col">total</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart->items as $item)
        <form action="{{route('updatecart',['id'=>$item['id']])}}" method="GET">
        <tr>
          <td class="product-remove">
            <a href="{{route('removecart',['id'=>$item['id']])}}" class="remove">X
            </a>
          </td>
          <td class="product-image">
            <a href="">
              <img src="img/{{$item['image']}}" alt="">
            </a>
          </td>
          <td class="product-name">
            <a href="">{{$item['name']}}</a>
          </td>
          <td class="product-price">
              $<span>{{$item['price']}}</span>
            </span>
          </td>
          
          <td class="product-quantity">
              <div class="quantity">
                <!-- <input class="quantity-input" type="number" step="1" min="1" value="1" size="4" inputmode="numeric"> -->
                <input class="quantity-input" name="quantity" type="number" value="{{$item['quantity']}}" size="4">
              </div>
          </td>
          <td id="total" class="product-total">$
            <span>{{$item['price']*$item['quantity']}}</span>
          </td>
          <td class="btn_update">
            <button type="submit" style="padding: 7px; line-height: 30px;">Update</button>
          </td>
        </tr>
      </form>
        @endforeach

        <tr>
          <th colspan="4">
            <div class="coupon">
              <input type="text" placeholder="Coupon Code">
              <button type="submit">APPLY COUPON</button>
            </div>
          </th>
          <!-- <th colspan="2">
            <a href=""><button type="submit">UPDATE CART</button></a>
          </th> -->
        </tr>
      </tbody>
    </table>


  <div class="cart-collateral">
    <form action="checkout" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <table>
        <tbody>
          <tr>
            <th>Subtotal</th>
            <td>
              <span>$ {{$cart->totalPrice}}</span>
            </td>
          </tr>
          <tr>
            <th>shipping</th>
            <td>
              <p>Free shipping</p>
              <p>Shipping to <b>Vietnam</b> </p>
            </td>
          </tr>
          <tr>
            <th>total</th>
            <td>
              <span>$ {{$cart->totalPrice}}</span>
            </td>
          </tr>
          <tr>
            <th colspan="2">
              <button type="submit">PROCEED TO CHECKOUT</button>
            </th>
          </tr>
        </tbody>
      </table>
    </form>

  </div>
</div>
<div class="clearfix"></div>
@endsection

<!-- @section('script')
  $(document).ready(function(){
    $('.quantity-input').change(function(){
      $price = $(this).parents('.product-quantity').prev().children('span').text();
      $quantity = $(this).val();
      $total = $price * $quantity;
      $(this).parents('.product-quantity').next().text($total);
    })
  })


@endsection -->