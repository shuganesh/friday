<div class="col-md-12 mt-5 m-0 p-4 footer">
	<div class="row m-0 p-0">
		<div class="col col-md-4 m-0 p-0">
			<p><?= $this->footer->Getfooter('home', 'footer'); ?></p>
		</div>
		<div class="col col-md-4 m-0 p-0 text-center">
			<p>Page rendered in {elapsed_time} seconds</p>

			<p>Environment: <?= ENVIRONMENT ?></p>
		</div>
		<div class="col col-md-4 m-0 p-0 text-end">
			<p>Version <?= $this->site->GetSite("siteversion") ?></p>
			<p>Designed by <a href="https://vgnet.biz">V Global Networks</a></p>
		</div>
	</div>
</div>