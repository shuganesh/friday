<meta charset="UTF-8">
<meta name="description" content="The small framework with powerful features">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
<?php
$this->site = new \App\Models\SiteModel();
$mode = $this->site->GetSite("mode");
if ($this->session->get("id")) {
	// Light Mode
	if ($mode == 1) {
		echo view('style/lightmode');
	}

	// Dark Mode
	if ($mode == 2) {
		echo view('style/darkmode');
	}
}else{
	echo view('style/lightmode');
}
?>
<style type="text/css">

	html,
	body {
		height: 100%;
		font-family: "Nunito", sans-serif!important;
		-webkit-font-smoothing: antialiased!important;
	}

	h1{
		font-weight: 700!important;
	}

	h2{
		font-weight: 700!important;
	}

	h3{
		font-weight: 700!important;
	}

	h4{
		font-weight: 700!important;
	}

	h5{
		font-weight: 700!important;
	}

	h6{
		font-weight: 700!important;
	}

	p{
		font-weight: 700!important;
		font-size: 14px;
	}

	.editor , .editor p {
		background-color: #fff;
		color: #000!important;
	}

	.form-floating>label {
		padding: .5rem .75rem!important;
		font-size: 14px;
	}

	.form-floating>.form-control, .form-floating>.form-select {
		height: calc(2.5rem + 1px)!important;
		padding: .5rem!important;
	}

	/*Full sidebar*/

	.full-sidebar .sidebar{
		width: 16%!important;
	}

	.full-sidebar .sidebar .logo div{
		width: 16%;
		height: 57px!important;
	}

	.full-sidebar .main{
		width: 84%!important;
	}

	/*Mini Sidebar*/

	.mini-sidebar .sidebar {
		width: 6%!important;
	}

	.mini-sidebar .sidebar .logo div{
		width: 50%!important;
	}

	.mini-sidebar .sidebar .title{
		display: none!important;
	}

	.mini-sidebar .main{
		width: 94%!important;
	}


	/*Default*/

	.drop-container {

	  	/*height: 0px;*/
	  	padding-left: 8px;
	  	transition: all 0.26s ease;
	  	overflow: hidden;
    	flex-wrap: nowrap;
    	border-radius : 0px 0px 10px 10px!important;
	}

	.drop-container:not(.show1) {
    	display: none;
	}

	.drop-menu-nav .show{
		border-radius : 10px 10px 0px 0px!important;
	}

	.drop-menu{
		max-height: 100%;
		display: block;
    	padding: .5rem 1rem;
    	text-decoration: none;
    	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
	}

	.sidebar .sidebar-nav {
		padding-top: 24px;
	}

	.sidebar .nav-link {
		margin-top: 10px;
		border-radius: 10px
	}

	.sidebar .nav{
		/*height: 100%;*/
		transition: .5s;
	}

	.sidebar .nav li a{
		font-size: 15px;
	}

	.sidebar .nav li a i{
		font-size: 15px;
	}

	.main{
		transition: .5s;
	}

	.topbar {
		transition: .5s;
		height: 73px!important;
	}

	.topbar .nav {
		display: flex;
    	align-items: center;
    	height: 100%;
	}

	.topbar .collapse-menu, .clone_url {
		cursor: pointer;
	}

	.topbar .mode {
    	height: 35px;
    	width: 35px;
    	cursor: pointer;
	}

	.topbar .drop-user{
		position: absolute;
	    top: 74px;
	    right: 0;
	    left: 83%;
	    bottom: 0;
	    width: 200px;
	    height: fit-content;
	}

	.rounded-20{
		border-radius: 20px;
	}

	.top-info .icon{
		font-size: 22px;
    	text-shadow: 0 -1px 0 rgb(0 0 0 / 40%);
    	transition: all 1s;
	}

	.top-info .memory{
		color: #7f62fb!important;
		background-color: #4e37b233!important;
	}

	.memory-div .memory-text{
		color: #7f62fb!important;
	}

	.top-info .disk{
		color: #ff7750!important;
		background-color: #ff775233!important;
	}

	.disk-div .disk-text{
		color: #ff7750!important;
	}

	.top-info .cpu{
		color: #7f62fb!important;
		background-color: #4e37b233!important;
	}

	.cpu-div .cpu-text{
		color: #7f62fb!important;
	}

	.top-info .network{
		color: #ff7750!important;
		background-color: #ff775233!important;
	}

	.network-div .network-text{
		color: #ff7750!important;
	}

	.top-info{
		width: 23%!important;
	}

	.top-products, .top-stores{
		width: 32%!important;
	}

	.toast-body{
		color: #000;
	}

	@media only screen and (max-width: 1000px) {

		.notification, .user{
			max-width: 25%!important;
		}

		.topbar .drop-user{
			position: absolute!important;
		    top: 73px!important;
		    right: 0!important;
		    left: 466px!important;
		    bottom: 0!important;
		    width: 200px!important;
		    height: fit-content!important;
		}

		.topbar .collapse-menu{
			display: none!important;
		}

		.sidebar .title{

		}

		.sidebar .nav-link{
			padding-left: .5rem!important;
			text-align: center;
		}

		.sidebar .logo div{
			width: 45%!important;
		}

	}
</style>
<script type="text/javascript" src="<?= base_url("node_modules/jquery/dist/jquery.min.js") ?>"></script>

<script type="text/javascript">


	function sidebarE() {

		var body = document.getElementById("body");

		if (body.classList.contains("full-sidebar")) {
			
			body.classList.remove("full-sidebar");
			body.classList.add("mini-sidebar");

		}else{			

			body.classList.remove("mini-sidebar");
			body.classList.add("full-sidebar");
		}
	}

	function mode() {
		$.ajax({
			type: 'POST',
			url: '<?= base_url()?>/process/mode',
			success: function (variant) {
				location.reload();
			}
		});
	}

	function statusUpdate(id, status, table) {
		$.ajax({
			type: 'POST',
			url: '<?= base_url()?>/process/status',
			data: 'id=' + id + '&status=' + status + '&table=' + table,
			success: function (variant) {
				location.reload();
			}
		});
	}
</script>