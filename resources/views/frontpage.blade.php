<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="Kashif Raza" />
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('style.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/swiper.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/dark.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/font-icons.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/animate.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/responsive.css')}}" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Document Title -->
		<title>Business Live 4 U</title>
	</head>
	<body class="stretched">
		<!-- Document Wrapper -->
		<div id="wrapper" class="clearfix">
			<!-- Top Bar  -->
			@include('homepage.topnav')
			<!-- End Top Bar  -->

			<!-- Header -->
			@include('homepage.header')
			<!-- #header end -->
	
			<!-- Slider -->
			@include('homepage.slider')
			<!-- End Slider --->
<!-- Content -->
<section id="content">
<div class="content-wrap">
	<!-- Breaking news -->
		@include('homepage.breakingnews')
	<!-- end Breaking news -->

	<!-- welcome -->
	{{-- @include('homepage.fpintro') --}}
	<!-- end welcome -->

	<!-- fpv -->
	@include('homepage.fpv')
	<div class="clear"></div>
	<!-- end fpv -->

	<!-- about -->
	@include('homepage.fpaboutus')
	<!-- end about -->

	<!-- projects -->
	@include('homepage.fpprojects')
	<!-- end projects -->

	<!-- Products -->
	@include('homepage.fpproduct')
	<!-- end Products -->

	<!-- Ranks & Incentives -->
	@include('homepage.ranksnincentives')	
	<!-- end Ranks & Incentives -->

	<!-- footer top -->
	@include('homepage.footertop')
	<!-- end footer top -->

	<!-- clients say -->
	@include('homepage.clientssay')
	<!-- end clients say -->

</div>
</section>
<!-- #content end -->

<!-- Footer -->
<footer id="footer" class="dark">
<div class="container">
<!-- Footer Widgets -->
	@include('homepage.footer-widgets')
<!-- .footer-widgets-wrap end -->
</div>


<!-- Copyrights -->

@include('homepage.copyright')
<!-- #copyrights end -->

</footer>
<!-- #footer end -->
</div>
<!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
============================================= -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Footer Scripts
============================================= -->
<script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>