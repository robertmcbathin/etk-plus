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
    <div class="background" style="background-image: url('/images/backgrounds/bg-image.jpg');">
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
                            <small class="text-muted">Для активации карты Вам необходимо использовать адрес электронной почты, указанный при регистрации в личном кабинете ЕТК</small>
                        </div>
                        <form class="register-form">
                            <div class="form-group" id="email-verify-checker">
                                <input type="email" class="form-control text-center"  placeholder="Электронная почта" name="email" id="email-registration-input">
                            </div>
                          <input type="text" class="form-control text-center" minlength="9" maxlength="9" placeholder="Номер бонусной карты" name="card_number">
                          <input type="checkbox" name="acception" checked value="1">
                          Я ознакомлен(а) с <a href="#something">пользовательским соглашением</a>.

                          <button class="btn btn-fill btn-block">Активировать</button>
                      </form>
                      <div class="login">
                        <p>Уже активировали карту? Можете <a href="{{ route('login') }}">войти</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.small_footer')
</div>
</div>
@endsection
<script>
    var token = '{{ Session::token() }}';
    var emailRegistrationUrl = '{{route('ajax.check-email-on-exist')}}';
</script>