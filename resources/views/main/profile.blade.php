@extends('main.layout.index')
@section('content')
<div class="container default-margin  first-content">
    <div class="woocommerce" style="width: 60%; margin: 0 auto">
        <form name="checkout" method="POST" class="checkout woocommerce-checkout" action="profile">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="" style="margin: 0 auto" id="customer_details">
                <div>
                    <div class="woocommerce-billing-fields">
                        <h3>Edit Profile</h3>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif

                        <div class="woocommerce-billing-fields__field-wrapper">
                            <p class="form_row form-row-first validate-required" id="billing_first_name_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="user_name" id="billing_first_name" value="{{Auth::user()->user_name}}">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field">
                                <span class="woocommerce-input-wrapper">
                                    <textarea rows="3" type="text" class="input-text" name="address" id="billing_postcode">{{Auth::user()->address}}</textarea>
                                </span>
                            </p>
                            <p class="form_row form-row-wide validate-required validate-phone" id="billing_phone_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="phone_number" id="billing_phone" value="{{Auth::user()->phone_number}}">
                                </span>
                            </p>
                            <p class="form_row form-row-wide validate-required validate-email" id="billing_email_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="email" id="billing_email" value="{{Auth::user()->email}}">
                                </span>
                            </p>

                        </div>
                    </div>
                    <div class="woocommerce-account-fields" style="margin-top: 10px; text-align: right">
                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order">Edit Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div>
@endsection