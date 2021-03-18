<!DOCTYPE html>
<html>
<head>
	<?= view('meta') ?>
	<title>Github | <?= $sitename ?></title>
	<link rel="shortcut icon" type="image/png" href="<?= $sitelogo ?>"/>

	<!-- Bootsrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<!-- /Bootsrap -->
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
	<!-- /Bootstrap Icon -->

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/sweetalert2/dist/sweetalert2.css"/>

	<!-- Fontawsome -->
	<script src="https://kit.fontawesome.com/48305afe39.js" crossorigin="anonymous"></script>
	<!-- /Fontawsome -->
</head>

<body class="full-sidebar" id="body">

	<div class="row m-0 p-0" style="height: 100%;">

		
		<!-- Sidebar -->
		<?= view("admin/defaults/sidebar"); ?>
		<!-- /Sidebar -->
		<div class="main m-0 p-0" id="main">
			<!-- Topbar -->
			<?= view("admin/defaults/topbar"); ?>
			<!-- /Topbar -->

			<div class="col col-md-11 mt-4 m-0 p-1 mx-auto">
				<div class="row m-0 p-0 justify-content-between">
					<div class="col col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-6 m-0 p-0">
								<h3>GitHub</h3>
								<p>All systems are running smoothly! You have <a href="<?= base_url("admin/alerts") ?>"><?= $this->notification->Count($this->session->get('id')) ?> unread alerts</a></p>
							</div>
						</div>
					</div>
					<div class="col col-md-12 mt-4 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-12 p-4 rounded-20 shadow-sm extension">
								<h4 class="mb-3">Git Hub Repositories</h4>
								<div class="col col-md-12 m-0 p-0">
									<div class="row m-0 p-0" id="opensource-projects">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?= view("admin/defaults/footer") ?>
		<!-- /Footer -->
	</div>
</div>

</body>

<!-- Bootsrap -->
<script type="text/javascript" src="<?= base_url() ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- /Bootsrap -->
<script src="<?= base_url() ?>/node_modules/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<script src="<?= base_url() ?>/assets/javascript/git.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    loadRepositories("shuganesh");
  });
  </script>

  <script type="module">
</script>
</html>