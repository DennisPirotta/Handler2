<!-- Web Application Manifest -->
<link rel="manifest" href="{{ route('laravelpwa.manifest') }}">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="{{ config('laravelpwa.manifest.theme_color') }}">
<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="{{ config('laravelpwa.manifest.display') === 'standalone' ? 'yes' : 'no' }}">
<meta name="application-name" content="{{ config('laravelpwa.manifest.short_name') }}">
@php($icons = config('laravelpwa.manifest.icons'))
<link rel="icon" sizes="{{ data_get(end($icons), 'sizes') }}"
      href="{{ data_get(end($icons), 'path') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="{{ config('laravelpwa.manifest.display') === 'standalone' ? 'yes' : 'no' }}">
<meta name="apple-mobile-web-app-status-bar-style" content="{{  config('laravelpwa.manifest.status_bar') }}">
<meta name="apple-mobile-web-app-title" content="{{ config('laravelpwa.manifest.short_name') }}">
<link rel="apple-touch-icon" href="{{ data_get(end($icons), 'path') }}">

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="{{ config('laravelpwa.manifest.background_color') }}">
<meta name="msapplication-TileImage" content="{{ data_get(end($icons), 'path') }}">

<script type="text/javascript">

    $(()=>{
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('./serviceworker.js')
                .then(function(registration) {
                    console.log("Service Worker Registered", registration);
                })
                .catch(function(err) {
                    console.log("Service Worker Failed to Register", err);
                })
        }
    })

</script>