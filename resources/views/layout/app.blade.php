<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Cannabis Zealot</title>

        <!-- Favicon -->
        <link rel="icon" href="/img/core-img/favicon.ico">

        <!-- Core Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="/css/responsive/responsive.css" rel="stylesheet">

    </head>
    <body>
        @component('components.loading')@endcomponent
        <!-- Background Pattern Swither -->
        <div id="pattern-switcher">
            Bg Pattern
        </div>
        <div id="patter-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        @component('components.topheader')@endcomponent
        @component('components.header')@endcomponent
            
        @yield('content')
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
