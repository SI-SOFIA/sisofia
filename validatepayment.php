<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Validate Payment Confirmation </h2>
	<hr>
	</div>
	<div class="row">

	<div class="col-sm-offset-3 col-sm-6">
		<form name="validatepayment" method="post">
			<div class="form-group">
				<label>Booking No.</label>
				<input type="text" class="form-control" name="bookingno">
			</div>
		<div class="form-group">
			<label>Phone Number</label>
			<input type="text" placeholder="Enter Phone Number Here.." class="form-control">
		</div>		
		<div class="form-group">
			<label>Email Address</label>
			<input type="text" placeholder="Enter Email Address Here.." class="form-control">
		</div>
		<button type="submit" name="register" class="btn btn-m">Submit</button>
		</form>

	</div>
</div>

<?php include('footer.php'); ?>