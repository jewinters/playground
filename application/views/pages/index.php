<? $this->load->view('layout/header'); ?>

<div class="row">
	<div class="col-lg-11 col-lg-offset-1">
		<h2>This is the default home page</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-11 col-lg-offset-1">
		<ul>
			<li><a href="<?= base_url('edit'); ?>">View/Edit Widgets</a></li>
			<li><a href="<?= base_url('character_sheet'); ?>">Character Sheet</a></li>
		</ul>
	</div>
</div>
<? $this->load->view('layout/footer'); ?>