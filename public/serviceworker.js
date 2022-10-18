// noinspection JSUnresolvedVariable

let staticCacheName = "pwa-v" + new Date().getTime()
let iconsToCache = []

fetch('/images/pwa/icons.json')
    .then((response) => response.json())
    .then((json) => {
        for (let i = 0; i < Object.keys(json.icons).length; i++)
            iconsToCache.push('images/pwa/' + json.icons[i].src)
        console.log(iconsToCache)
    })

let filesToCache = [
    '/offline',
    '/'
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache.concat(iconsToCache));
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});