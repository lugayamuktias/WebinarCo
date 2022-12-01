<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
<!-- Custom styles for this template-->
    <link href="<?= base_url();?>/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="<?= base_url();?>/home.html">WEBINARCO</a></h1>
			<ul>
				<li class="active"><a href="home.html">HOME</a></li>
				<li><a href="<?= base_url();?>/Webinar.html">Webinar</a></li>
				<li><a href="<?= base_url();?>/about.html">ABOUT</a></li>
				<li><a href="<?= base_url();?>/sign in.html">Sign in</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>SELAMAT DATANG DI WEBINARCO</h2>
	</section>

	<!-- about -->
	<section class="Webinar">
		<div class="container">
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>