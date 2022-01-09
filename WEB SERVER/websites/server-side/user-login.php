<?php session_start(); error_reporting(0); if ($_SESSION['Username']) {header("location:dashboard");} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NILANGSIS | Server Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../../assets/images/logo/title-logo.png"/>
	<link rel="stylesheet" type="text/css" href="../../assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../assets/login/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 animated fadeIn">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../assets/login/images/img-01.png" alt="Nilangsis Login">
				</div>
				<?php include 'process/go-login.php'; ?>
				<form method="POST" class="login100-form" autocomplete="OFF">
					<span class="login100-form-title">NILANGSIS SERVER</span>
					<div class="wrap-input100">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btn-login">
							Login
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="../server-side/">
							Back to splash screen
							<i class="fa fa-arrow-circle-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../../assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/login/vendor/select2/select2.min.js"></script>
	<script src="../../assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="../../assets/vendors/alerts/sweetalert2.all.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="../../assets/login/js/main.js"></script>
</body>
</html>