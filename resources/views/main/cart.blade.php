@extends('main.layout.index')
@section('content')
<div class="container first-content">
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
              <img src="bestsell-1.jpg" alt="">
            </a>
          </td>
          <td class="product-name">
            <a href="">a spy: a novel</a>
          </td>
          <td class="product-price"><span>
              $21.51
            </span>
          </td>
          <td class="product-quantity">
            <div class="quantity">
              <input type="number" step="1" min="0" value="1" size="4" inputmode="numeric">
            </div>
          </td>
          <td class="product-total">$21.51</td>
        </tr>
        <tr>
          <td class="product-remove">
            <a href="" class="remove">X
            </a>
          </td>
          <td class="product-image">
            <a href="">
              <img src="bestsell-2.jpg" alt="">
            </a>
          </td>
          <td class="product-name">
            <a href="">a brief history of time</a>
          </td>
          <td class="product-price"><span>
              $21.51
            </span>
          </td>
          <td class="product-quantity">
            <div class="quantity">
              <input type="number" step="1" min="0" value="1" size="4" inputmode="numeric">
            </div>
          </td>
          <td class="product-total">$21.51</td>
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