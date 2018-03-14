<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ibinex - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


    <!-- Le styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset("css/style.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/please-wait.css") }}" rel="stylesheet" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    {{--<link rel="shortcut icon" href="images/favicon.ico" />--}}
    {{--<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />--}}
    @stack('stylesheets')
</head>

<body class='@yield('body-class')-template'>
<div class='container-fluid'>
    <header id="fullscreen-hero" class="full-height" style="background: url({{ asset("img/")}}{{ "/" }}@yield('bg-img')) no-repeat center top">
        <section class="container">
            @include('layouts.navbar')
            @yield('header-content')
        </section>
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</div>
<!-- div container end-->


<!-- Le javascript
  ================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{--<script src="script.js"></script>--}}
<script>

    $(window).resize(function() {
        $('.faButton').css('height', $('.faButton').width());
    });

    $(document).ready(function() {
        $('.faButton').css('height', $('.faButton').width());
    });

</script>
<script type="text/javascript" src="{{ asset("js/please-wait.min.js") }}"></script>
<script type="text/javascript">
    var loading_screen = window.pleaseWait({
        logo: "{{ asset("img/logo.png") }}",
        backgroundColor: 'rgba(111, 77, 165, 0.95)',
        loadingHtml: "<div class=\"sk-spinner sk-spinner-chasing-dots\"><div class=\"sk-dot1\"></div><div class=\"sk-dot2\"></div></div>"
    });
    window.addEventListener('load', function() {
        loading_screen.finish();
    });
</script>
@stack('scripts')
</body>

</html>