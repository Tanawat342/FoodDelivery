<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Basic Page Needs -->
        <base href="/public">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Food Delivery</title>

		<meta name="keywords" content="Food Delivery">
		<meta name="description" content="Food Delivery">

		<!-- Favicon -->
		<link rel="shortcut icon" href="home/img/favicon.png" type="image/png">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="home/libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="home/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="home/libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="home/libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="home/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="home/libs/slider-range/css/jslider.css">

		<!-- Template CSS -->
		<link rel="stylesheet" href="home/css/style.css">
		<link rel="stylesheet" href="home/css/reponsive.css">
	</head>

	<body class="home home-3">
		<div id="all">
			<!-- Header -->
            @include('home.header')


			<!-- Main Content -->
            @include('home.content')

			@include('home.product')

			<!-- Footer -->
            @include('home.footer')

			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>

			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script src="home/libs/jquery/jquery.js"></script>
		<script src="home/libs/bootstrap/js/bootstrap.js"></script>
		<script src="home/libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="home/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="home/libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="home/libs/slider-range/js/tmpl.js"></script>
		<script src="home/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="home/libs/slider-range/js/draggable-0.1.js"></script>
		<script src="home/libs/slider-range/js/jquery.slider.js"></script>
		<script src="home/libs/elevatezoom/jquery.elevatezoom.js"></script>

		<!-- Template CSS -->
		<script src="home/js/main.js"></script>
	</body>


</html>
