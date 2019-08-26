var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
  '/offline',
  '/css/app.css',
  '/css/frontend/styles.css',
  '/css/frontend/responsive.css',
  '/css/frontend/assets/bootstrap.min.css',
  '/css/frontend/assets/ionicons.min.css',
  '/css/frontend/assets/owl.carousel.min.css',
  '/js/app.js',
  '/js/frontend/custom.js',
  '/js/frontend/assets/bootstrap.bundle.min.js',
  '/js/frontend/assets/jquery.easing.min.js',
  '/js/frontend/assets/jquery.magnific-popup.min.js',
  '/js/frontend/assets/jquery.min.js',
  '/js/frontend/assets/owl.carousel.min.js',
  '/js/frontend/assets/swiper.min.js',
  '/images/logo.png',
  '/images/dsc-logo.png',
  '/images/frontend/diversity.png',
  '/images/frontend/events/techwork.png',
  '/images/frontend/team/emmanueljet.png',
  '/images/frontend/team/fransunisoft.png',
  '/images/frontend/team/avatar.png',
  '/images/frontend/technologies/android.png',
  '/images/frontend/technologies/cloud.png',
  '/images/frontend/technologies/mi.png',
  '/images/frontend/technologies/web.png',
  '/images/icons/icon-72x72.png',
  '/images/icons/icon-96x96.png',
  '/images/icons/icon-128x128.png',
  '/images/icons/icon-144x144.png',
  '/images/icons/icon-152x152.png',
  '/images/icons/icon-192x192.png',
  '/images/icons/icon-384x384.png',
  '/images/icons/icon-512x512.png',
  '/images/icons/splash-640x1136.png',
  '/images/icons/splash-750x1334.png',
  '/images/icons/splash-1242x2208.png',
  '/images/icons/splash-1125x2436.png',
  '/images/icons/splash-828x1792.png',
  '/images/icons/splash-1242x2688.png',
  '/images/icons/splash-1536x2048.png',
  '/images/icons/splash-1668x2224.png',
  '/images/icons/splash-1668x2388.png',
  '/images/icons/splash-2048x2732.png'
];

// Cache on install
self.addEventListener("install", event => {
  this.skipWaiting();
  event.waitUntil(
    caches.open(staticCacheName)
    .then(cache => {
        return cache.addAll(filesToCache);
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
