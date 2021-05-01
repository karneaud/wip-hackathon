<!doctype html>
<html lang="en">
<head>
    @include('layout.head')
	@stack('styles')
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    @include('layout.body')
    @include('layout.footer')
	@stack('scripts')
</body>