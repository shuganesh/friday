<!DOCTYPE html>
<html>
<head>
	<?= view('meta') ?>
	<title>Dahsboard | <?= $sitename ?></title>
	<link rel="shortcut icon" type="image/png" href="<?= $sitelogo ?>"/>

	<!-- Bootsrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<!-- /Bootsrap -->
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap-icons/font/bootstrap-icons.css">
	<!-- /Bootstrap Icon -->

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
								<h3>Welcome, <?= $this->session->get('username'); ?></h3>
								<p>All systems are running smoothly! You have <a href="<?= base_url("admin/alerts") ?>"><?= $this->notification->Count($this->session->get('id')) ?> unread alerts</a></p>
							</div>
						</div>
					</div>

					<div class="col col-md-9 mt-4 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-3 p-3 rounded-20 top-info memory-div shadow-sm">
								<div class="col col-md-5 m-0 p-3 icon memory rounded-20 text-center">
									<i class="fas fa-memory"></i>
								</div>
								<div class="col col-md-12 mt-3 m-0 p-0 text-start">
									<h6>Memory</h6>
									<h3 class="mt-4 mb-4 memory-text"><?= $sysInfo['RamMemory'] ?></h3>
									<div class="progress" style="height: 10px">
										<div class="progress-bar" role="progressbar" style="width: <?= $sysInfo['RamMemory'] ?>;"></div>
									</div>
								</div>
							</div>

							<div class="col col-md-3 ms-3 p-3 rounded-20 top-info disk-div shadow-sm">
								<div class="col col-md-5 m-0 p-3 icon disk rounded-20 text-center">
									<i class="fas fa-hdd"></i>
								</div>
								<div class="col col-md-12 mt-3 m-0 p-0 text-start">
									<h6>Disk</h6>
									<h3 class="mt-4 mb-4 disk-text"><?= $sysInfo['FreeDiskSpaceP'] ?></h3>
									<div class="progress" style="height: 10px">
										<div class="progress-bar" role="progressbar" style="width: <?= $sysInfo['FreeDiskSpaceP'] ?>;"></div>
									</div>
								</div>
							</div>

							<div class="col col-md-3 ms-3 p-3 rounded-20 top-info cpu-div shadow-sm">
								<div class="col col-md-5 m-0 p-3 icon cpu rounded-20 text-center">
									<i class="fas fa-microchip"></i>
								</div>
								<div class="col col-md-12 mt-3 m-0 p-0 text-start">
									<h6>CPU Load</h6>
									<h3 class="mt-4 mb-4 cpu-text"><?= $sysInfo['CPULoadP'] ?></h3>
									<div class="progress" style="height: 10px">
										<div class="progress-bar" role="progressbar" style="width: <?= $sysInfo['CPULoadP'] ?>;"></div>
									</div>
								</div>
							</div>

							<div class="col col-md-3 ms-3 p-3 rounded-20 top-info network-div shadow-sm">
								<div class="col col-md-5 m-0 p-3 icon network rounded-20 text-center">
									<i class="fas fa-microchip"></i>
								</div>
								<div class="col col-md-12 mt-3 m-0 p-0 text-start">
									<h6>Network Speed</h6>
									<h5 class="mt-4 mb-4 network-text" id="networkSpeed"><?= $sysInfo['CPULoadP'] ?></h5>
								</div>
							</div>

						</div>
					</div>
					<div class="col col-md-3 mt-4 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-12 p-3 rounded-20 shadow-sm bg-gradient storage-sd">
								<div class="row m-0 p-0">
									<div class="col col-md-12 m-0 p-0">
										<canvas id="disk"></canvas>
									</div>
									<div class="col col-md-12 m-0 p-2">
										<h6>Storage Used : <?php 
										$used = $sysInfo['TotalDiskSpace'] - $sysInfo['FreeDiskSpace'] ;
										$si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
										$base = 1024;
										$class = min((int)log($used , $base) , count($si_prefix) - 1);
										$used = sprintf('%1.2f' , $used / pow($base,$class)) . ' ' . $si_prefix[$class];
										echo $used;
										?></h6>
										<h6>Storage Free : <?= $sysInfo['FreeDiskSpaceU'] ?></h6>
										<h6>Storage Total : <?= $sysInfo['TotalDiskSpaceU'] ?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-md-12 mt-4 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-12 p-4 rounded-20 shadow-sm bg-gradient extension">
								<h4 class="mb-3">Server Configuration</h4>
								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">Server Software : <?= apache_get_version(); ?></p>
									
								</div>

								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">PHP Version : <?= phpversion() ?></p>
								</div>

								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">MYSQL Version : 
										<?php
										$mysqlConnect = new mysqli("localhost", "root", "");
										$mysqlVersion = $mysqlConnect->server_info;
										echo $mysqlVersion;
										mysqli_close($mysqlConnect);
										?>
									</p>
								</div>

								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">Page rendered in {elapsed_time} seconds</p>
								</div>

								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">Environment: <?= ENVIRONMENT ?></p>
								</div>

								<div class="col col-md-12 m-0 p-0">
									<p class="fw-normal">Site Version: <?= $this->site->GetSite("siteversion") ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-md-6 mt-4 m-0 p-0">
						<div class="row m-0 p-0">
							<div class="col col-md-12 p-3 rounded-20 shadow-sm bg-gradient extension">
								<div class="row m-0 p-0">
									<h4 class="mb-3">Extension Installed</h4>
									<?php 
									$extensions = get_loaded_extensions();

									if ($extensions) {
										foreach ($extensions as $extensions) {
											?>
											<div class="col col-md-4"><i class="fas fa-puzzle-piece"></i> <?= $extensions ?></div>
											<?php
										}
									}

									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-md-6 mt-4 m-0 ps-3 p-0">
						<div class="col col-md-12 p-4 rounded-20 shadow-sm bg-gradient extension">
							<h4 class="mb-3">Virtual Host</h4>

							<div class="col col-md-12 m-0 p-0">
								<div class="row m-0 p-0">

									<?php
										// var_dump($virtualHost);
									$dir = new DirectoryIterator("../../");
									foreach ($virtualHost['ServerName'] as $key => $value) {
											// echo $key;
										?>
										<div class="col col-md-6"><a target="_blank" href="http://<?= $key ?>"><i class="fas fa-folder"></i> <?= $key ?></a></div>
										<?php
									}
									?>					
								</div>
							</div>
						</div>

						<div class="col col-md-12 mt-4 p-4 rounded-20 shadow-sm bg-gradient extension">
							<h4 class="mb-3">Projects</h4>

							<div class="col col-md-12 m-0 p-0">
								<div class="row m-0 p-0">

									<?php
									$dir = new DirectoryIterator("../../");
									foreach ($dir as $fileinfo) {
										if ($fileinfo->isDir() && !$fileinfo->isDot()) {
											if (
												$fileinfo->getFilename() != "dashboard" AND 
												$fileinfo->getFilename() != "assets" AND
												$fileinfo->getFilename() != "img" AND
												$fileinfo->getFilename() != "wampthemes" AND
												$fileinfo->getFilename() != "wamplangues" AND
												$fileinfo->getFilename() != "Friday"
											) {

												?>
												<div class="col col-md-6"><a target="_blank" href="http://localhost/<?= $fileinfo->getFilename() ?>"><i class="fas fa-folder"></i> <?= $fileinfo->getFilename() ?></a></div>
												<?php
											}
										}
									}
									?>					
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-md-6 mt-3 m-0 ps-3 p-0">
					<div class="row m-0 p-0">

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

<script type="text/javascript">
	data = {
		datasets: [{
			data: [<?= $sysInfo['FreeDiskSpace'] . ", " . $sysInfo['TotalDiskSpace'] ?>],
			backgroundColor:["#ff7750","#fff"],
			borderColor : ['#fff0']
		}],

    	// These labels appear in the legend and in the tooltips when hovering different arcs
    	labels: ['Free','Total'],
    	
    };
    var ctx = document.getElementById('disk').getContext('2d');
    var myDoughnutChart  = new Chart(ctx, {
	    // The type of chart we want to create
	    type: 'doughnut',

	    // The data for our dataset
	    data: data,

	    // Configuration options go here
	    options: {
	    	legend: {
	    		display: false,
	    	}
	    }
	});
	//JUST AN EXAMPLE, PLEASE USE YOUR OWN PICTURE!
	var imageAddr = "http://friday/assets/install/logo.png"; 
	var downloadSize = 4995374; //bytes

	function ShowProgressMessage(msg) {
		if (console) {
			if (typeof msg == "string") {
				console.log(msg);
			} else {
				for (var i = 0; i < msg.length; i++) {
					console.log(msg[i]);
				}
			}
		}

		var oProgress = document.getElementById("networkSpeed");
		if (oProgress) {
			var actualHTML = (typeof msg == "string") ? msg : msg.join("<br />");
			oProgress.innerHTML = actualHTML;
		}
	}

	function InitiateSpeedDetection() {
		ShowProgressMessage("Loading the image, please wait...");
		window.setTimeout(MeasureConnectionSpeed, 1);
	};    

	if (window.addEventListener) {
		window.addEventListener('load', InitiateSpeedDetection, false);
	} else if (window.attachEvent) {
		window.attachEvent('onload', InitiateSpeedDetection);
	}

	function MeasureConnectionSpeed() {
		var startTime, endTime;
		var download = new Image();
		download.onload = function () {
			endTime = (new Date()).getTime();
			showResults();
		}

		download.onerror = function (err, msg) {
			ShowProgressMessage("Invalid image, or error downloading");
		}

		startTime = (new Date()).getTime();
		var cacheBuster = "?nnn=" + startTime;
		download.src = imageAddr + cacheBuster;

		function showResults() {
			var duration = (endTime - startTime) / 1000;
			var bitsLoaded = downloadSize * 8;
			var speedBps = (bitsLoaded / duration).toFixed(2);
			var speedKbps = (speedBps / 1024).toFixed(2);
			var speedMbps = (speedKbps / 1024).toFixed(2);
			ShowProgressMessage([
				speedMbps + " Mbps"
				]);
		}
	}
</script>
</html>