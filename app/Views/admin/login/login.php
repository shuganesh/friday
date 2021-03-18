<!DOCTYPE html>
<html>
<head>
	<?= view('meta') ?>
	<title>Login | <?= $sitename ?></title>
	<link rel="shortcut icon" type="image/png" href="<?= $sitelogo ?>"/>

	<!-- Bootsrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<!-- /Bootsrap -->
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
	<!-- /Bootstrap Icon -->
</head>
<?php

$time = date("H");

$timezone = date("e");

if ($time < "12" AND $time > "6") {
	// echo "Good Morning";
	$image = base_url("assets/images/background/morning.jpg");
} else

if ($time >= "12" && $time < "17") {
	// echo "Good Afternoon";
	$image = base_url("assets/images/background/afternoon.jpg");
} else

if ($time >= "17" && $time < "19") {
	// echo "Good Evening";
	$image = base_url("assets/images/background/evening.jpeg");
} else

if ($time >= "19" OR $time >= "00") {
	// echo "Good Night";
	$image = base_url("assets/images/background/night.jpg");
}?>
<style type="text/css">
	body{
		background-image: linear-gradient(to bottom, rgb(255 255 255 / 12%), #4388ef33),url(<?= $image ?>);
		background-repeat: no-repeat;
		background-size: cover;
		align-items: center;
		padding-top: 40px;
		padding-bottom: 40px;
	}
	.form-floating>label {
		padding: .5rem .75rem;
	}

	.form-floating>.form-control, .form-floating>.form-select {
		height: calc(2.5rem + 1px);
		padding: .5rem;
	}

	.login{
		padding-top: 0px;
	}

	@media only screen and (max-width: 800px) {
		.login{
			max-width: 345px;
		}

		.login .logo img {
			max-width: 50%;
		}

		.login .logo {
			text-align: center;
		}

	}
</style>

<body class="bg-light">
	<div class="login mx-auto">
		<div class="col-md-6 mt-4 pt-4 p-0 m-0 mx-auto">
			<div class="col-md-8 m-0 p-0 mx-auto bg-white border shadow rounded-20">
				<form action="/login" method="POST">
					<div class="row m-0 p-4">
						<div class="col-md-3 m-0 p-0 mx-auto logo">
							<img class="mb-4 img-fluid" src="<?= base_url() ?>/assets/install/logo.png" alt="<?= $sitename?>">
						</div>

						<div class="col-md-11 mx-auto mt-3 mb-2 m-0 p-0">
							<h2 class="text-center">Please sign in</h2>
						</div>

						<div class="col-md-8 mt-4 m-0 p-0 mx-auto">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" placeholder="Email address / Username" name="email" required="">
								<label for="floatingInput">Email address / Username</label>
							</div>
							<div class="form-floating">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required="">
								<label for="floatingPassword">Password</label>
							</div>

							<button class="mt-4 w-100 btn btn-sm btn-outline-primary" name="submit" type="submit">Sign in</button>
							<p class="mt-2"><a href="<?= base_url("admin/forgot") ?>">Forgot Password?</a></p>
							<p class="text-end mt-2 fw-bold">
								<?php
								$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
								if ($query && $query['status'] == 'success') {
									echo $query['city'] . ', ' . $query['country'];
								}
								?>
							</p>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

</body>

<!-- Bootsrap -->
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- /Bootsrap -->
</html>