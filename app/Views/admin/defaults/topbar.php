<?php

helper('text');


$this->site = new \App\Models\SiteModel();
$this->footer = new \App\Models\FooterModel();
$this->notification = new \App\Models\NotificationModel();
$this->orders = new \App\Models\OrdersModel();
$this->user = new \App\Models\UserModel();
$this->products = new \App\Models\ProductsModel();
$this->store = new \App\Models\StoreModel();
$this->cart_order = new \App\Models\CartOrderModel();
$this->news = new \App\Models\NewsModel();

?>

<div class="col-md-12 m-0 topbar shadow-sm">
  <div class="row m-0 pe-3 p-0 nav">

    <div class="col-md-2 p-4 m-0 p-0 me-auto collapse-menu" onclick="sidebarE()">
      <i class="fas fa-bars"></i>
    </div>

    <div class="col-md-3 m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-md-1 m-0 p-4 notification" onclick="mode()" style="text-align: center;">
          <?php
          $mode = $this->site->GetSite("mode");
          // Light Mode
          if ($mode == 1) {
            $icon_mode = "<i class='fas fa-moon'></i>";
          }

          // Dark Mode
          if ($mode == 2) {
            $icon_mode = "<i class='bi bi-brightness-high-fill'></i>";
          }
          ?>
          <a class="p-2 mode"><?= $icon_mode ?></a>
        </div>
        <div class="col-md-1 m-0 p-4 notification">
          <a class="p-2 mode"><i class="fas fa-bell"></i></a>
        </div>
        <div class="col-md-1 m-0 p-4 notification">
          <a class="p-2 mode"><i class="fas fa-bell"></i></a>
        </div>
        <div class="col-md-5 m-0 p-1 user mx-auto" id="dropUserB">
          <div class="row m-0 p-0">
            <div class="col col-md-5 m-0 p-1">
              <img src="<?= $this->session->get('profile_image'); ?>" class="img-fluid rounded-circle profile-img">
            </div>
            <div class="col col-md-6 mt-2 m-0 p-1">
              <h6>
                <?= $this->session->get('username'); ?>
                <br>
                <small>Admin</small>
              </h6>
            </div>
          </div>
          <div class="col-md-12 m-0 p-0 drop-user shadow" id="dropUserC" style="opacity: 0;display: none">
            <div class="p-4 username">
              <h6>Admin</h6>
              <h5>
                <?= $this->session->get('username'); ?>
              </h5>
            </div>
            <div class="pb-2 p-4">
              <a href="<?= base_url("admin/settings/profile") ?>">Edit Profile</a>
            </div>
            <div class="pt-2 p-4">
              <a href="<?= base_url("login/logout") ?>">Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>

<script type="text/javascript">

  var dropUserC = document.getElementById('dropUserC');

  $("#dropUserB").hover(
      function () {
        dropUserC.style.opacity = "1";
        dropUserC.style.display = "block";

      },
      function () {
        dropUserC.style.display = "none";
        dropUserC.style.opacity = "0";
      }
    );


</script>