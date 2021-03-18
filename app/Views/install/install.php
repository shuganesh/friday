<!DOCTYPE html>
<html>
<head>
	<title>Configuring Framework</title>
	<meta charset="UTF-8">
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="./../assets/install/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./../assets/install/form-validation.css">
</head>
<body class="bg-light">
<?php
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$site_url = str_replace('index.php/install', '', $actual_link);
?>
	<div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="./../assets/install/logo.png" alt="" width="72" >
				<h2>Configure Framework <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h2>
				<hr class="my-4">
			</div>

			<form class="needs-validation" action="" method="POST" novalidate>
				<div class="row g-3 justify-content-end">
					<div class="col-md-6 pe-4">
						<h4 class="mb-3">Site Details</h4>
						<div class="row g-3">
							<div class="col-sm-6">
								<label for="siteName" class="form-label">Site name</label>
								<input type="text" class="form-control" id="siteName" placeholder="" value="" name="siteName" required>
								<div class="invalid-feedback">
									Valid site name is required.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="siteUrl" class="form-label">Site URL</label>
								<input type="url" class="form-control" id="siteUrl" placeholder="" value="<?= $site_url ?>" name="siteURL" required>
								<div class="invalid-feedback">
									Valid Site URL is required.
								</div>
							</div>

							<div class="col-12">
								<label for="email" class="form-label">Site Email </label>
								<input type="email" class="form-control" id="email" placeholder="you@example.com" name="siteEmail">
								<div class="invalid-feedback">
									Please enter a valid email address for shipping updates.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" placeholder="" value="" name="username" required>
								<div class="invalid-feedback">
									Valid Username is required.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" placeholder="" value="" name="password" required>
								<div class="invalid-feedback">
									Valid Password is required.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 ps-4">
						<h4 class="mb-3">Database Settings</h4>

						<div class="row g-3">
							<div class="col-sm-6">
								<label for="hostName" class="form-label">Host name</label>
								<input type="text" class="form-control" id="hostName" placeholder="" value="" name="hostName" required>
								<div class="invalid-feedback">
									Valid Host name is required.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="DBusername" class="form-label">Database Username</label>
								<input type="text" class="form-control" id="DBusername" placeholder="" value="" name="DBusername" required>
								<div class="invalid-feedback">
									Valid Database Username is required.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="DBpassword" class="form-label">Database Password </label>
								<input type="password" class="form-control" id="DBpassword" name="DBpassword">
								<div class="invalid-feedback">
									Valid Database Password is required.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="DBname" class="form-label">Database Name</label>
								<input type="text" class="form-control" id="DBname" placeholder="" value="" name="DBname" required>
								<div class="invalid-feedback">
									Valid Database Name is required.
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-4 text-end" style="left:auto">
						<button class="btn btn-primary btn-block" name="submit" type="submit">Configure</button>
					</div>
				</div>
			</form>
		</main>

		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2010 – <?= date("Y") ?> V Global Networks</p>
		</footer>
	</div>
</body>
<script type="text/javascript" src="./../assets/install/form-validation.js"></script>
<script type="text/javascript" src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="./../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>