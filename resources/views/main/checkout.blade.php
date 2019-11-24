@extends('main.layout.index')
@section('content')
<div class="container default-margin  first-content">
    <div class="woocommerce">
        <div class="checkout-form-option">
            <div class="checkout-form-option--header">
                <div class="woocommerce-info">
                    Returning customer? <a href="#" class="showlogin">Click here to login</a>
                </div>
            </div>

            <!--checkout-form-option content: khi click để login -->
        </div>


        <div class="checkout-form-option">
            <div class="checkout-form-option--header">
                <div class="woocommerce-info">
                    Have a coupon?<a href="#" class="showcoupon">Click here to enter your code</a>
                </div>
            </div>
            <div class="checkout-form-option--content"></div>
        </div>

        <form name="checkout" method="POST" class="checkout woocommerce-checkout" action="">
            <div class="col2-set" id="customer_details">
                <div class="col1">
                    <div class="woocommerce-billing-fields">
                        <h3>Billing details</h3>
                        <div class="woocommerce-billing-fields__field-wrapper">
                            <p class="form_row form-row-first validate-required" id="billing_first_name_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder="First name" value autocomplete="given-name">
                                </span>
                            </p>
                            <p class="form_row form-row-last validate-required" id="billing_last_name_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_last_name" id="billing_first_name" placeholder="Lastname" value autocomplete="family-name">
                                </span>
                            </p>
                            <p class="form_row form-row-wide" id="billing_company_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_company" id="billing_first_name" placeholder="Company name" value autocomplete="organization">
                                </span>
                            </p>

                            <!--start input chọn đất nước-->
                            <p class="form_row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">

                                <span class="woocommerce-input-wrapper">

                                    <select name="billing_country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                                        <option value="">Select a country…</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="PW">Belau</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo (Brazzaville)</option>
                                        <option value="CD">Congo (Kinshasa)</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="CI">Ivory Coast</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao S.A.R., China</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PS">Palestinian Territory</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="ST">São Tomé and Príncipe</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="SX">Saint Martin (Dutch part)</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom (UK)</option>
                                        <option value="US">United States (US)</option>
                                        <option value="UM">United States (US) Minor Outlying Islands</option>
                                        <option value="UY" selected="selected">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VG">Virgin Islands (British)</option>
                                        <option value="VI">Virgin Islands (US)</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                        <option value="">Select a country…</option>
                                        <option value="">Select a country…</option>
                                        <option value="">Select a country…</option>
                                        <option value="">Select a country…</option>
                                        <option value="">Select a country…</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width:100%">
                                        <span selection>
                                            <span class="select2-selection select2-selection--single">
                                                <span class="select2-selection__rendered" id="select2-billing_country-container" title="Vietnam">Vietnam</span>
                                                <span class="select2-selection__arrow">
                                                    <b role="presentation"></b>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </span>


                            </p>
                            <!--end input chọn đất nước-->
                            <p class="form_row form-row-wide address-field validate-required" id="billing_address_1_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value autocomplete="address-line1">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field" id="billing_address_2_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value autocomplete="address-line2">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field validate-required" id="billing_city_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_city" id="billing_city" placeholder="Town / City" value autocomplete="address-level2">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field validate-required" id="billing_state_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_state" id="billing_state" placeholder="State / Country">
                                </span>
                            </p>
                            <p class="form_row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_postcode" id="billing_postcode" placeholder="Postcode / ZIP" value autocomplete="address-level2">
                                </span>
                            </p>
                            <p class="form_row form-row-wide validate-required validate-phone" id="billing_phone_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_phone" id="billing_phone" placeholder="Phone" value autocomplete="tel">
                                </span>
                            </p>
                            <p class="form_row form-row-wide validate-required validate-email" id="billing_email_field">
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text" name="billing_email" id="billing_email" placeholder="Email address" value autocomplete="email username">
                                </span>
                            </p>

                        </div>
                    </div>
                    <div class="woocommerce-account-fields">
                        <p class="form_row form-row-wide create-account woocommerce-validated">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1">
                                <span>Create an account?</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="col2">
                    <div class="woocommerce-shipping-fields">
                        <h3 id="ship-to-different-address">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1">
                                <span>Ship to a different address?</span>
                            </label>
                        </h3>
                    </div>
                    <div class="woocommerce-additional-fields">
                        <div class="woocommerce-additional-fields__field-wrapper">
                            <p class="form_row notes" id="order_comments_field">
                                <label for="order_comments">
                                    Order notes&nbsp;
                                    <span class="optional">(optional)</span>
                                </label>
                                <span class="woocommerce-input-wrapper">
                                    <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-review-container">
                <h3 id="order_review_heading">Your order</h3>
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <table class="shop_table woocommerce-checkout-review-order-table">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="product-name">
                                    12 Rules for Life: An Antidote to Chaos
                                    <strong class="product-quantity">× 1</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>9.95
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>9.95
                                    </span>
                                </td>
                            </tr>
                            <tr class="woocommerce-shipping-totals shipping">
                                <th>Shipping</th>
                                <td data-title="Shipping">
                                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                                        <li>
                                            <label for="shipping_method_0_free_shipping">Free shipping</label>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <strong>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>9.95
                                        </span>
                                    </strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    <h2 id="payment_method_heading">Payment method</h2>
                    <div id="payment" class="woocommerce-checkout-payment">
                        <ul class="wc_payment_methods payment_methods methods">
                            <li class="wc_payment_method payment_method_paypal">
                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" checked="checked">
                                <label for="payment_method_paypal">PayPal</label>
                                <div class="payment_box payment_method_paypal">
                                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" alt="PayPal acceptance mark">
                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account. SANDBOX ENABLED. You can use sandbox testing accounts only. See the <a href="https://developer.paypal.com/docs/classic/lifecycle/ug_sandbox/">PayPal Sandbox Testing Guide</a> for more details.</p>
                                </div>
                            </li>
                            <!-- <li class="wc_payment_method payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs">
                                        <label for="payment_method_bacs">Direct bank transfer</label>
                                    </li>
                                    <li class="wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                                        <label for="payment_method_bacs">Check payments</label>
                                    </li>
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod">
                                        <label for="payment_method_bacs">Cash on delivery</label>
                                    </li> -->
                        </ul>
                        <div class="form_row place-order">
                            <div class="woocommerce-terms-and-conditions-wrapper">
                                <p class="form_row validate-required">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                        <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms">
                                        <span class="woocommerce-terms-and-conditions-checkbox-text">
                                            I have read and agree to the website
                                            <a href="https://demo.kaliumtheme.com/bookstore/terms-and-conditions/" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a>
                                        </span>

                                    </label>
                                </p>
                            </div>
                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order">Proceed to PayPal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div>
@endsection