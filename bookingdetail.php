<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Your Booking </h2>
	<hr>
	</div>
	<div class="row">
	
	<div class="col-sm-offset-2 col-sm-8 bg-fade-orange center-box">
		<div class = "row">
		<p class="large text-muted"> Booking No </p>
		<?php 
        	include('requestBookingDetail.php');
    	?>
		</div>
	</div>
</div>
</div>
<?php include('footer.php'); ?>