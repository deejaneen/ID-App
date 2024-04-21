@extends('layout.loginlayout')

@section('loginform')
    <div class="container centered">
        <img src="{{asset('images\SLSULOGO.png')}}" alt="" class="login-image" anchor="login-container">
        <div class="login-container" id="login-container">
            <h1 style="text-align: center">LOGIN</h1>
            <input type="text" placeholder="Enter your email here">
            <input type="text" placeholder="Enter your password here">
            <button type="button" class="btn-primary btn-lg btn-login">Login</button>
        </div>
    </div>
@endsection
