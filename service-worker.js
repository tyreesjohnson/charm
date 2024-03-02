// service-worker.js
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('carmellow-cache').then((cache) => {
            return cache.addAll([
                '/',
                '/index.html',
                '/manifest.json',
                'images/apple-touch-icon.png',
                // Add more files and assets to cache as needed
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
