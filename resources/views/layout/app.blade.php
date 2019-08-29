<html>
    <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>@yield('title')|Cannabis Zealot|Marijuana Know How</title>
        <meta name="description" content="@yield('title')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="DC.title" content="@yield('title')">


        <!-- Favicon -->
        <link rel="icon" href="/img/core-img/favicon.ico">

        <!-- Core Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="/css/responsive/responsive.css" rel="stylesheet">

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141574056-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-141574056-1');
        </script>


    </head>
    <body>
        @component('components.loading')@endcomponent
        @component('components.topheader')@endcomponent
        @component('components.header')@endcomponent
            
        @yield('content')
        @component('components.footer')@endcomponent
        <!-- Jquery-2.2.4 js -->
        <script src="/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="/js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap-4 js -->
        <script src="/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins JS -->
        <script src="/js/others/plugins.js"></script>
        <!-- Active JS -->
        <script src="/js/active.js"></script>
        
    </body>
</html>
