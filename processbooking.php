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
		<?php
			echo '<input type="text" value="'.$_POST["jenisRuangan"].'" style="display:none;" name="jenisRuangan">'; 
			echo '<input type="text" value="'.$_POST["deskripsi"].'" style="display:none;" name="deskripsi">';
			echo '<input type="text" value="'.$_POST["imgsrc"].'" style="display:none;" name="imgsrc">';
			echo '<input type="text" value="'.$_POST["checkin"].'" style="display:none;" name="checkin">';
			echo '<input type="text" value="'.$_POST["checkout"].'" style="display:none;" name="checkout">'; 
			echo '<input type="text" value="'.$_POST["quantity"].'" style="display:none;" name="quantity">';
			$days = (strtotime($_POST["checkout"]) - strtotime($_POST["checkin"])) / (60 * 60 * 24);
			$totalharga = ($_POST["quantity"] * $days * $_POST["hargaFloat"]);
			$totalhargastring = number_format($totalharga, 0, ',', '.');
			echo '<input type="text" value="'.$totalharga.'" style="display:none;" name="totalharga">';
			echo '<input type="text" value="'.$totalhargastring.'" style="display:none;" name="totalhargastring">';
		?>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label>First Name</label>
				<input type="text" placeholder="Enter First Name Here.." class="form-control" name="namaDepanUser" required>
			</div>
			<div class="col-sm-6 form-group">
				<label>Last Name</label>
				<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="namaBelakangUser" required>
			</div>
		</div>					
		<div class="form-group">
			<label>Address</label>
			<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="addressUser" required></textarea>
		</div>	
		<div class="form-group">
			<label>Phone Number</label>
			<input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phoneUser" required>
		</div>		
		<div class="form-group">
			<label>Email Address</label>
			<input type="text" placeholder="Enter Email Address Here.." class="form-control" name="emailUser" required>
		</div>
		<button type="submit" name="register" class="btn btn-m">Submit</button>
		</form>
	</div>

	<div class="col-sm-offset-1 col-sm-4 bg-fade-orange side-box">
		
		<?php
			echo '<h3> Your Booking </h3>';
			echo '<img src="'.$_POST["imgsrc"].'" class="img-responsive" alt="">';
			echo '<br /><b>Room Type : '.ucfirst($_POST["jenisRuangan"]).' </b>';
			echo '<br /> <br /> <b>Description </b><br /> '.$_POST["deskripsi"];
			echo '<br /><br /><b>Quantity</b> : '.$_POST["quantity"].' <br />';
			echo '<br /><b>Check in</b> : '.$_POST["checkin"].'<br />';
			echo '<br /><b>Check out</b> : '.$_POST["checkout"].'<br />';
			echo '<hr>';
			echo '<h3>TOTAL : Rp '.$totalhargastring.',- </h3><br />';

		?>


		</div>
	</div>
</div>

<hr>
<?php include('footer.php'); ?>