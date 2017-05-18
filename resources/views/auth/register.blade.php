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
                        <div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">
                            <div class="info info-horizontal">
                                <div class="icon">
                                    <i class="fa fa-percent"></i>
                                </div>
                                <div class="description">
                                    <h3> Скидки </h3>
                                    <p>Получайте скидки у партнеров программы</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="description">
                                    <h3> Бонусы </h3>
                                    <p>Накапливайте бонусы и расплачивайтесь ими</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon">
                                    <i class="fa fa-ruble"></i>
                                </div>
                                <div class="description">
                                    <h3> Кэшбэк </h3>
                                    <p>Ну и, конечно же, возвращайте часть денег себе!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="demo-card">
                                <h3 class="title text-center">Активация карты</h3>

                                <div class="division">
                                    <div class="line l"></div>
                                    <div class="line r"></div>
                                </div>
                                <form class="register-form">
                                    <input type="text" class="form-control" minlength="9" maxlength="9" placeholder="Номер транспортной карты">

                                    <input type="text" class="form-control" minlength="9" maxlength="9" placeholder="Номер бонусной карты">


                                    <button class="btn btn-fill btn-block">Активировать</button>
                                </form>
                                <div class="login">
                                    <p>Уже активировали карту? Можете <a>войти</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            @include('includes.small_footer')
        </div>
    </div>
@endsection
