@extends('main.layout.index')
@section('content')
<div class="container first-content cart-section">
  <form action="cart" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
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

        <tr>
          <td class="product-remove">
            <a href="" class="remove">X
            </a>
          </td>
          <td class="product-image">
            <a href="">
              <img src="img/Y5idy_bestsell-1.jpg" alt="">
            </a>
          </td>
          <td class="product-name">
            <a href="">a spy: a novel</a>
          </td>
          <td class="product-price">
              $<span>21.99</span>
            </span>
          </td>
          <td class="product-quantity">
            <div class="quantity">
              <input class="quantity-input" type="number" step="1" min="1" value="1" size="4" inputmode="numeric">
            </div>
          </td>
          <td id="total" class="product-total">$
            <span>21.99</span></td>
        </tr>
        <tr>
          <td class="product-remove">
            <a href="" class="remove">X
            </a>
          </td>
          <td class="product-image">
            <a href="">
              <img src="img/bestsell-2.jpg" alt="">
            </a>
          </td>
          <td class="product-name">
            <a href="">a brief history of time</a>
          </td>
          <td class="product-price">
              $<span>19.99</span>
            </span>
          </td>
          <td class="product-quantity">
            <div class="quantity">
              <input class="quantity-input" type="number" step="1" min="1" value="1" size="4" inputmode="numeric">
            </div>
          </td>
          <td class="product-total">$<span>19.99</span></td>
        </tr>

        <tr>
          <th colspan="4">
            <div class="coupon">
              <input type="text" placeholder="Coupon Code">
              <button type="submit">APPLY COUPON</button>
            </div>
          </th>
          <th colspan="2">
            <button type="submit">UPDATE CART</button>
          </th>
        </tr>
      </tbody>
    </table>
  </form>

  <div class="cart-collateral">
    <form action="checkout" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <table>
        <tbody>
          <tr>
            <th>Subtotal</th>
            <td>
              <span>$53.02</span>
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
              <span>$53.02</span>
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

@section('script')
  $(document).ready(function(){
    $('.quantity-input').change(function(){
      $price = $(this).parents('.product-quantity').prev().children('span').text();
      $quantity = $(this).val();
      $total = $price * $quantity;
      $(this).parents('.product-quantity').next().text($total);
    })
  })


@endsection