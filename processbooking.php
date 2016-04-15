<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Your Booking Details </h2>
	<hr>
	</div>
	<div class="row">
	<div class="col-sm-7">
		<p class="large text-muted"> Your Personal Detail </p>
		<form name="personaldetail" method="post" action="confirmbooking.php">
		<div class="row">
			<div class="col-sm-6 form-group">
				<label>First Name</label>
				<input type="text" placeholder="Enter First Name Here.." class="form-control">
			</div>
			<div class="col-sm-6 form-group">
				<label>Last Name</label>
				<input type="text" placeholder="Enter Last Name Here.." class="form-control">
			</div>
		</div>					
		<div class="form-group">
			<label>Address</label>
			<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
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

	<div class="col-sm-offset-1 col-sm-4 bg-fade-orange side-box">
		
			<h3> Your Booking </h3>
			<img src="img/room/single.png" class="img-responsive" alt="">
			<br /><b>Room Type : Single </b>
			<br /> <br /> <b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.
			<br /><br /><b>Quantity</b> : 1 <br />
			<br /><b>Check in</b> : 04/17/2016 <br />
			<br /><b>Check out</b> : 04/20/2016 <br />
			<hr>
			<h3>TOTAL : Rp 600.000,- </h3><br />

		</div>
	</div>
</div>

<hr>
<?php include('footer.php'); ?>