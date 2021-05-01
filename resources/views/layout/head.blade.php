<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="SAFE TT Taxi taxi qrcode scanner">
<title>{{ config('app.name') }} | @yield('title')</title>
<!-- Android  -->
<meta name="theme-color" content="black">
<meta name="mobile-web-app-capable" content="yes">
<!-- iOS -->
<link rel="manifest" href="{{ asset('assets/manifest.json', env('HTTPS', false) ) }}">
<meta name="apple-mobile-web-app-title" content="SAFE TT Taxi">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<link rel="canonical" href="/">
<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png',  env('HTTPS', false)) }}">
<link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/icon-192x192.png',  env('HTTPS', false)) }}">
<link rel="apple-touch-icon" sizes="256x256" href="{{ asset('assets/icon-256x256.png',  env('HTTPS', false)) }}">
<link rel="apple-touch-icon" sizes="384x384" href="{{ asset('assets/icon-384x384.png',  env('HTTPS', false)) }}">
<link rel="apple-touch-icon" sizes="512x512" href="{{ asset('assets/icon-512x512.png',  env('HTTPS', false)) }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png',  env('HTTPS', false)) }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png',  env('HTTPS', false)) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png',  env('HTTPS', false)) }}">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="mask-icon" href="{{ asset('assets/safari-pinned-tab.svg',  env('HTTPS', false)) }}" color="#fdb813">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preload" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="preload" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link type="text/css" href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@900&family=Open+Sans:wght@700&family=Roboto:wght@700&display=swap" rel="stylesheet">
@push('styles')
    <link rel="preload" as="style" type="text/css" href="{{ asset('assets/css/app.css',  env('HTTPS', false)) }}">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css', env('HTTPS', false)) }}">
@endpush
  	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-834435-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-834435-3');
</script>