@extends('main.layout.index')
@section('content')
<div class="container default-margin  first-content">
    <div class="woocommerce" style="width: 60%; margin: 0 auto">
        <form name="checkout" method="POST" class="checkout woocommerce-checkout" action="changepassword">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="" style="margin: 0 auto" id="customer_details">
                <div>
                    <div class="woocommerce-billing-fields">
                        <h3>Change Password</h3>
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
                                    <input type="password" autofocus class="form-control" name="old_password" id="billing_first_name" placeholder="Old password">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="password" class="form-control" name="new_password" id="billing_first_name" placeholder="New password">
                                </span>
                            </p>
                            <p class="form_row form-row-wide validate-required validate-phone" id="billing_phone_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="password" class="form-control" name="cf_password" id="billing_phone" placeholder="Confirm password">
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