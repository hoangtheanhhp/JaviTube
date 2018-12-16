<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset("css/pignose.layerslider.css") }}" rel="stylesheet" type="text/css" media="all" />
<!-- //pignose css -->
<link href="{{ asset("css/style.css") }}" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
    @yield('content')
</div>
<!-- Bootstrap core JavaScript==================================================-->
<script type="text/javascript" src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
<!-- //js -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset("js/bootstrap-3.1.1.min.js") }}"></script>
<!-- //for bootstrap working -->
<script src="{{ asset("js/jquery.easing.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/pignose.layerslider.js") }}"></script>
<script src="{{ asset("js/easyResponsiveTabs.js") }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset("js/custom.js") }}"></script>
@yield('script')
</body>
</html>
