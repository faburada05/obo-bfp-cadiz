<?php
	main_header(['dashboard']);	
?>
<!-- ############ PAGE START-->
<link rel="stylesheet" href="<?= base_url()?>assets/css/global.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/tables.css" type="text/css" />
<div class="padding">	
	<div class="p-a indigo-400 lt box-shadow">
		<div class="row">
			<div class="col-sm-6">
				<h5 class="m-b-0 _300"><i class="fa fa-cubes"></i> DASHBOARD </h5>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class='box p-a'>
		<div class="row">								
		</div>			
	</div>
</div>
<!-- page end -->
<?php
	main_footer();
?>
<script src="<?php echo base_url()?>/assets/js/dashboard/index.js"></script>