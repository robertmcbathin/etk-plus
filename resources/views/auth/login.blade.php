@extends('layouts.register')
@section('description')
@endsection
@section('keywords')
@endsection
@section('title')
Активация карты
@endsection
@section('content')
    <div class="wrapper">
        <div class="background" style="background-image: url('../assets/img/blue.jpg');">
            <div class="filter-black"></div>
            <div class="container">
                    <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="demo-card">
                                <h3 class="title">Добро пожаловать!</h3>
                                <form class="register-form">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email">

                                    <label>Пароль</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                    <button class="btn btn-danger btn-block">Войти</button>
                                </form>
                                <div class="forgot">
                                    <a href="#" class="btn btn-simple btn-danger" id="login-forgot-link">Забыли пароль?</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            @include('includes.small_footer')
        </div>
    </div>
@endsection
