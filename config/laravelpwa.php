<?php
try {
    $icons = json_decode(file_get_contents(asset('images/pwa/icons.json')), JSON_THROW_ON_ERROR, 512, JSON_THROW_ON_ERROR)['icons'];
} catch (JsonException){}

foreach($icons as $element) {
    $out[$element['sizes']] = ['path' => 'images/pwa/' . $element['src'],'sizes' => $element['sizes'],'purpose' => 'any maskable'];
}
return [
    'name' => 'pwa',
    'manifest' => [
        'name' => env('APP_NAME', 'Handler'),
        'short_name' => 'Handler',
        'start_url' => '/',
        'background_color' => '#1b1b1b',
        'theme_color' => '#1b1b1b',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black',
        'icons' => $out,
        'custom' => []
    ]
];
