<nav class="navbar navbar-ct-danger navbar-fixed-top" role="navigation-demo" id="demo-navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://www.creative-tim.com">
       <div class="logo-container">
        <div class="logo">
          <img src="assets/img/new_logo.png" alt="Creative Tim Logo">
        </div>
        <div class="brand">
            <h5>ЕТК+</h5>
        </div>
      </div>
    </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="navigation-example-2">
    <ul class="nav navbar-nav navbar-right">
      <li>
      <a class="btn btn-danger btn-simple" href="presentation.html#components">О проекте</a>
      </li>
      <li class="dropdown">
                          <a href="#" class="dropdown-toggle btn btn-simple btn-warning" data-toggle="dropdown" aria-expanded="false">Партнерская сеть <b class="caret"></b></a>
<!--                                  You can add classes for different colours on the next element -->
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Dropdown header</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
      <li>
        <a href="{{ route('register') }}" class="btn btn-danger btn-fill"><i class="fa fa-superpowers"></i> Активировать карту</a>
      </li>
      <li>
        <a class="btn btn-danger btn-simple" href="presentation.html#examples">Личный кабинет</a>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-->
</nav>