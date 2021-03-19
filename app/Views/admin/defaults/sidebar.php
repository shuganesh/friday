<nav class="col-md-2 d-md-block sidebar p-0 pb-3" id="sidebar">
	<div class="col-md-12 logo p-2 pb-2">
		<div class="m-0 p-0 mx-auto">
			<a href="https://vgnet.biz" target="_blank"><img src="<?= base_url("assets/install/logo.png") ?>" class="img-fluid"></a>
		</div>
	</div>

	<?php
	$uri = current_url(true);
	$dashboard = "";
	$github = "";
	$settings = "";

	?>


	<div class="col-md-11 mx-auto m-0 sidebar-nav p-2">
		<ul class="nav flex-column">
			<?php if ($uri->getSegment(1) == 'admin' AND $uri->getSegment(2) == 'dashboard') { $dashboard = 'active';} ?>
			<li class="nav-item">

				<a class="nav-link <?= $dashboard ?> ps-4 p-2" aria-current="page" href="<?= base_url("admin/dashboard") ?>">
					<div class="col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-md-2 m-0 p-0 icon">
								<i class="fas fa-home"></i>
							</div>
							<div class="col-md-2 m-0 p-0 title">
								Dashboard
							</div>
						</div>
					</div>
				</a>
			</li>

			<?php if ($uri->getSegment(1) == 'admin' AND $uri->getSegment(2) == 'github') { $github = 'active';} ?>
			<li class="nav-item">
				<a class="nav-link <?= $github ?> ps-4 p-2" aria-current="page" href="<?= base_url('admin/github') ?>">
					<div class="col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-md-2 m-0 p-0 icon">
								<i class="fab fa-github"></i>
							</div>
							<div class="col-md-2 m-0 p-0 title">
								GitHub
							</div>
						</div>
					</div>
				</a>
			</li>

			<?php if ($uri->getSegment(1) == 'admin' AND $uri->getSegment(2) == 'settings') { $settings = 'active';} ?>
			<li class="nav-item">
				<a class="nav-link <?= $settings ?> ps-4 p-2" aria-current="page" href="<?= base_url('admin/settings') ?>">
					<div class="col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-md-2 m-0 p-0 icon">
								<i class="fas fa-cog"></i>
							</div>
							<div class="col-md-2 m-0 p-0 title">
								Settings
							</div>
						</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a target='_blank' class="nav-link ps-4 p-2" aria-current="page" href="<?= base_url('phpmyadmin') ?>">
					<div class="col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-md-2 m-0 p-0 icon">
								<i class="fas fa-database"></i>
							</div>
							<div class="col-md-8 m-0 p-0 title">
								PHPMYAdmin
							</div>
						</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a target='_blank' class="nav-link ps-4 p-2" aria-current="page" href="<?= base_url('phpinfo.php') ?>">
					<div class="col-md-12 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col-md-2 m-0 p-0 icon">
								<i class="fab fa-php"></i>
							</div>
							<div class="col-md-7 m-0 p-0 title">
								PHP Info
							</div>
						</div>
					</div>
				</a>
			</li>

		</ul>
	</div>

</nav>

<script type="text/javascript">
	var dropdown = document.getElementsByClassName("drop-menu");
	var i;
	
	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("show");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.classList.contains("show1")) {
	  	dropdownContent.classList.remove("show1");
		// dropdown[i].classList.remove("show");	  
	  } else {
	  
		// dropdown[i].classList.add("show");	  
	 	dropdownContent.classList.add("show1");
	  
	  }
	  });
	}


</script>