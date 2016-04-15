<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<?php include('inputUser.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Booking Confirmation </h2>
	<hr>
	</div>
	<div class="row">
	
	<div class="col-sm-offset-3 col-sm-6 bg-fade-orange side-box">
			
			<p class="large text-muted"> Hi <?php echo $_POST["namaDepanUser"] ?>, This is your booking </p>
			<img src="<?php echo $_POST["imgsrc"] ?>" class="img-responsive" alt="" height="300" width="480">
			<p class="large"><?php echo $_POST["jenisRuangan"] . " ( Ruang " . $_POST["idRuangan"] . " )" ?></p>
			<?php echo $_POST["deskripsi"] ?> <br />
			Rp <?php echo $_POST["hargaString"] ?>,- <br />

			<button type="submit" name="register" class="btn btn-m">Confirm My Booking</button>
		</div>
	</div>
</div>

<hr>
<?php include('footer.php'); ?>