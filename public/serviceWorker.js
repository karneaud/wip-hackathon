var self = this;

var filesToCache = [
    '/',
    './assets/css/app.css',
    './assets/icon-192x192.png',
	'./assets/icon-512x512.png',
	'./assets/icon-384x384.png',
	'./assets/icon-256x256.png',
	'./assets/favicon-16x16.png',
	'./assets/favicon-32x32.png',
	'./assets/favicon.ico',
	'./assets/Checkermotoslogo.svg',
	'./assets/js/qr.js',
	'./assets/js/app.js'
];

self.addEventListener('install', function (e) {
    e.waitUntil(
        caches.open('app-name').then(function (cache) {
            return cache.addAll(filesToCache);
        })
    );
});
self.addEventListener('activate', function (event) {
    event.waitUntil(
        caches.keys().then(function (cacheNames) {
            return Promise.all(
                cacheNames.filter(function (cacheName) {
                }).map(function (cacheName) {
                    return caches.delete(cacheName);
                })
            );
        })
    );
});
self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.open('mysite-dynamic').then(function (cache) {
            return cache.match(event.request).then(function (response) {
                return response || fetch(event.request).then(function (response) {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});