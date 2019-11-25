@extends('main.layout.index')
@section('content')
<div class="container  first-content">
            <div class="login">
                <h1 class="title">Login or create an account</h1>
                <hr>
                <div class="row m-0">
                    <div class="col-md-6 p-0 pr-md-3">
                        <h2>New here</h2>
                        <div class="staticBlock newHere">
                            <p>Registration is free and easy!</p>
                            <ul>
                                <li>Faster checkout</li>
                                <li>Save multiple shipping addresses</li>
                                <li>View and track orders and more</li>
                                <li>Create your wishlist</li>
                            </ul>
                        </div>
                        <a href="{{route('register')}}" class="btn btn-primary btn-block col-md-6">Create an account</a>
                    </div>
                    <form class="col-md-6 p-0 pl-md3">
                        <h2>Log in here</h2>
                        <div class="small mb-2">If you have an account with us, please log in.</div>
                        <div class="form-group">
                            <label for="email">Email address *</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-link btn-block">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection