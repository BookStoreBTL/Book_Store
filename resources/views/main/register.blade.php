@extends('main.layout.index')
@section('content')
<div class="container  first-content">
    <div class="register">
        <h1 class="title">Create an account</h1>
        <hr>
        <div class="row m-0">
            <form class="col-md-5 p-0 pr-md-3">
                <div class="small mb-2">Please enter the following information to create your account.</div>
                <div class="form-group">
                    <label for="firstName">Fist Name*</label>
                    <input type="text" id="firstName" name="firstName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name *</label>
                    <input type="text" id="lastName" name="lastName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email address *</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password *</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" id="newsletter" name="newsletter" class="form-check-input">
                    <label for="newsletter" class="form-check-label">Sign up to receive emails</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" id="privacyPolice" name="privacyPolice" class="form-check-input">
                    <label for="privacyPolice" class="form-check-label">
                        Accept <a href="#">Privacy Policy</a>
                    </label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" id="termAndConditions" name="termAndConditions" class="form-check-input">
                    <label for="termAndConditions" class="form-check-label">
                        Accept <a href="#">Terms & Conditions</a>
                    </label>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
            <div class="col-md-7 p-0 pl-md-3">
                <div class="box mb-3">
                    <h2>After registration</h2>
                    <div class="staticBlock afterRegistration">
                        <ul>
                            <li>Don’t forget to sign up to receive our emails!</li>ting blogs and information from the literary <li>Not only will you receive exciworld, you’ll get <strong>exclusive access</strong> to our sales and promotions before anyone else!</li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection