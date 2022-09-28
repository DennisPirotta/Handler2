<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- PWA  -->
    <meta name="theme-color" content="#212529"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Must -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="description" content="Handler">
    <meta name="keywords" content="Handler">

    <!-- Android  -->
    <meta name="theme-color" content="#212529">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- iOS -->
    <meta name="apple-mobile-web-app-title" content="Handler">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Windows  -->
    <meta name="msapplication-navbutton-color" content="#212529">
    <meta name="msapplication-TileColor" content="white">
    <meta name="msapplication-TileImage" content="{{ asset('images/app/weed.png') }}">
    <meta name="msapplication-config" content="browserconfig.xml">

    <!-- Pinned Sites  -->
    <meta name="application-name" content="Handler">
    <meta name="msapplication-tooltip" content="handler">
    <meta name="msapplication-starturl" content="/">

    <!-- Tap highlighting  -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- UC Mobile Browser  -->
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">

    <!-- Disable night mode for this page  -->
    <meta name="nightmode" content="enable/disable">

    <!-- imagemode - show image even in text only mode  -->
    <meta name="imagemode" content="force">

    <!-- Orientation  -->
    <meta name="screen-orientation" content="portrait">
</head>
<body class="bg-dark bg-opacity-75" style="margin-bottom: 55px">
    @auth
        <x-navbar></x-navbar>
    @endauth
    <main>
        @yield('content')
    </main>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>
</html>
