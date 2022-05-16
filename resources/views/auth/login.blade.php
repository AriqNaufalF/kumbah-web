<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Required -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- Title -->
	<title>Login | Kumbah</title>

	<!-- Favicon -->
	<link rel="stylesheet" href="{{ asset('img/logo-kumbah.svg') }}">

	<!-- Fontawesome Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<!-- Login Css -->
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

	@include('sweetalert::alert')

	<div class="container">
		<div class="auth-form">

			<!-- Login Form -->
			<form class="login-form" action="{{ url('loginp') }}" method="post">

				@csrf

				<h2 class="title">Sign In</h2>
				<div class="input-field">
					<i class="fas fa-envelope" id="icon"></i>
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="input-field">
					<i class="fas fa-lock" id="icon"></i>
					<input type="password" name="pass" placeholder="Password" required>
				</div>
				<input type="submit" name="login" class="btn" value="login">
				<p class="account-text">Don't have an account ? <a href="#" id="register-now">Register now</a></p>
			</form>

			<!-- Register Form -->
			<form class="register-form" action="{{ url('registerp') }}" method="post">

				@csrf

				<h2 class="title">Sign Up</h2>
				<div class="input-field">
					<i class="fas fa-user" id="icon"></i>
					<input type="text" name="name" placeholder="Full Name" required>
				</div>
				<div class="input-field">
					<i class="fas fa-envelope" id="icon"></i>
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="input-field">
					<i class="fas fa-phone" id="icon"></i>
					<input type="text" name="phone" placeholder="Phone Number" maxlength="13" onkeypress="return goodchars(event, '0123456789', this)" required>
				</div>
				<div class="input-field">
					<i class="fas fa-lock" id="icon"></i>
					<input type="password" name="pass" placeholder="Password" required>
				</div>
				<input type="submit" name="register" class="btn" value="register">
				<p class="account-text">Already have an account ? <a href="#" id="login-now">Login now</a></p>
			</form>

		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Apa itu Kumbah ?</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<button class="btn-outline" id="login-btn">Sign In</button>
				</div>
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>Apa itu Kumbah ?</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<button class="btn-outline" id="register-btn">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Sweetalert Js -->
	<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

	<!-- Fontawesome Js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

	<!-- Login Js -->
	<script src="{{ asset('js/login.js') }}"></script>
	
</body>
</html>