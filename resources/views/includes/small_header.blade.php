    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

                <a href="{{ route('index') }}">
       <div class="logo-container">
        <div class="logo">
          <img src="/images/etkplus40.png" alt="ETKplus">
        </div>
        <div class="brand">
            <h6 class="logo-title">ЕТКплюс</h6>
        </div>
      </div>
    </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('about') }}" class="btn btn-simple">О проекте</a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav>