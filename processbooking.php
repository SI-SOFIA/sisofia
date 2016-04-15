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
		<?php echo '<input type="text" value="'.$_POST["idRuangan"].'" style="display:none;" name="idRuangan">' ?>
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
		
			<p class="large text-muted"> Your Booking </p>
			<img src="<?PHP echo $_POST["imgsrc"] ?>" class="img-responsive" alt="">
			<p class="large"><?php echo $_POST["jenisRuangan"] . " ( Ruang " . $_POST["idRuangan"] . " )" ?></p>
			<?php echo $_POST["deskripsi"] ?> <br />
			<?php echo "Total : Rp " . $_POST["hargaString"] . ",-" ?> <br />


		</div>
	</div>
</div>

<hr>
<?php include('footer.php'); ?>