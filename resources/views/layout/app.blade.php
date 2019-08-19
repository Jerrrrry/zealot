<html>
    <head>
        <meta charset="UTF-8">
        <title>Cannabis Zealot</title>
        <link rel="shortcut icon" href="/images/fav_icon.png" type="image/x-icon">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css'>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/cards.css">

    </head>
    <body>
        @component('layout.nav')@endcomponent
        <div class="container">
            
            @yield('content')
        </div>
    </body>
</html>
