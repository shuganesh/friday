

<style type="text/css">
	.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
</style>
<?php

$this->session = \Config\Services::session();

if ($this->session->getFlashdata('success')) {
?>

<div aria-live="polite" aria-atomic="true" class="position-relative">
  <div class="toast-container position-absolute top-0 end-0 p-3">

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
      <div class="toast-header">
      	<svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
        <strong class="me-auto">Success</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?= $this->session->getFlashdata('success') ?>
      </div>
    </div>
  </div>
</div>

<?php
}

if ($this->session->getFlashdata('error')) {
?>

<div aria-live="polite" aria-atomic="true" class="position-relative">
  <div class="toast-container position-absolute top-0 end-0 p-3">

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
      <div class="toast-header">
      	<svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#800000"></rect></svg>
        <strong class="me-auto">Error</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?= $this->session->getFlashdata('error') ?>
      </div>
    </div>
  </div>
</div>
	
<?php
}
?>

<script type="text/javascript" src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./../node_modules/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="./../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	var option = {
		animation: true,
		delay: 10000,
	};
	var toastHTMLElement = document.getElementById("toast");
	var toastElement = new bootstrap.Toast( toastHTMLElement, option );
	toastElement.show();
</script>