<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
@include('layouts.links')
</head>
<body>
@include('layouts.header')
<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
<div class="layer"></div>
@yield('styles')

<!-- Mobile menu overlay mask -->

@yield('content')
@include('layouts.widget')
@include('layouts.footer')

<!-- End footer -->
<div id="toTop"></div>
<!-- Back to top button -->
@include('layouts.scripts')
</body>
</html>


