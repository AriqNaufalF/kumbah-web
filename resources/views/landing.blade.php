<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Required -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- Title -->
	<title>Landing Page | Kumbah</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/logo-kumbah.svg') }}">

	<!-- Fontawesome Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<!-- Login Css -->
	<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

</head>
<body>

	@include('sweetalert::alert')

	<main>
		<div class="big-wrapper">
			<header>
				<div class="container">
					<div class="logo">
						<img src="{{ asset('img/logo-kumbah.svg') }}" alt="Logo">
						<h3>Kumbah</h3>
					</div>

					<div class="links">
						<ul>
							<li>
								<a href="#">Features</a>
							</li>
							<li>
								<a href="#">Become Partner</a>
							</li>
							<li>
								<a href="{{ url('login') }}" class="btn">Sign Up</a>
							</li>
						</ul>
					</div>

					<div class="overlay"></div>

					<div class="hamburger-menu">
						<div class="bar"></div>
					</div>
				</div>
			</header>

			<div class="showcase-area">
				<div class="container">
					<div class="left">
						<div class="big-title">
							<h1>Laundry Now,</h1>
							<h1>or Naked Tomorrow.</h1>
						</div>
						<p class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="cta">
							<a href="{{ url('login') }}" class="btn">Get Started</a>
						</div>
					</div>

					<div class="right">
						<img src="{{ asset('img/person.png') }}" alt="Person Image" class="person-image">
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Fontawesome Js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

	<!-- Login Js -->
	<script src="{{ asset('js/landing.js') }}"></script>
	
</body>
</html>