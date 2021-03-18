<!DOCTYPE html>
<html>
<head>
	<title>Configuring Framework</title>
	<meta charset="UTF-8">
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/install/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/install/form-validation.css">
</head>
<body class="bg-light">

	<div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="<?= base_url() ?>/assets/install/logo.png" alt="" width="72" >
				<h2>Configure Framework <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h2>
				<hr class="my-4">
			</div>

			<div class="col-md-6 mx-auto text-center">
				<h2 class="mb-4">Successful Configuration </h2>
				<h4 class="mb-3">Ready to start</h4>
				<a class="btn btn-primary" href="<?= base_url() ?>">Go to Home</a>
			</div>
		</main>

		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2010 – <?= date("Y") ?> V Global Networks</p>
		</footer>
	</div>
</body>
<script type="text/javascript" src="<?= base_url() ?>/assets/install/form-validation.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>