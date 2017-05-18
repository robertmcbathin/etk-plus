<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>
    
    <!--  Social tags      -->
    <meta name="keywords" content="@yield('keywords')">

    <meta name="description" content="@yield('description')">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="ETKplus discount system">
    <meta itemprop="description" content="">


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/ct-paper.css" rel="stylesheet"/>
    <link href="/css/demo.css" rel="stylesheet" />
    <link href="/css/examples.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/themify-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

</head>
<body class="full-screen register">
@include('includes.small_header')
@yield('content')
</body>

    <script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="/js/bootstrap.js" type="text/javascript"></script>

    <!--  Plugins -->
    <script src="/js/ct-paper-checkbox.js"></script>
    <script src="/js/ct-paper-radio.js"></script>
    <script src="/js/bootstrap-select.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!--  Plugins for presentation page -->
    <script src="/js/presentation-page/atv-img-min.js"></script>
    <script src="/js/presentation-page/jquery.sharrre.js"></script>

    <!-- Paper kit Core Functions -->
    <script src="/js/ct-paper.js"></script>
    <script src="/js/demo.js"></script>

    <script type="text/javascript">
        $().ready(function(){
            atvImg();

            window_width = $(window).width();

            if (window_width >= 768) {
                $(window).on('scroll', demo.checkScrollForPresentationPage);
            }

            demo.initSharingButtons();
        });
    </script>
</html>
