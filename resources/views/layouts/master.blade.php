<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
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
    @include('modal.sign-in')
    @include('modal.sign-up')
</div>
<!-- Bootstrap core JavaScript==================================================-->
<script type="text/javascript" src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset("js/simpleCart.min.js") }}"></script>
<!-- cart -->
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
