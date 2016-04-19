<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<?php include('inputUser.php'); 
	  include('inputBooking.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Booking Confirmation </h2>
	<hr>
	</div>
	<div class="row">
	

	<div class="col-sm-offset-3 col-sm-6 bg-fade-orange center-box">

			<table class="table-condensed">
			<tr>
				<td> <b>Name</b> </td>
				<td> : </td>
				<td> Jessica Handayani </td>
			</tr>
			<tr>
				<td> <b>Telephone</b> </td>
				<td> : </td>
				<td> +6281287156165 </td>
			</tr>
			<tr>
				<td> <b>Address</b> </td>
				<td> : </td>
				<td> Jalan Cisitu Indah V </td>
			</tr>
			<tr>
				<td> <b>Booking Detail </b></td>
				<td> : </td>
				<td>  </td>
			</tr>
			</table>

			<img src="img/room/single.png" class="img-responsive" alt="">
			<br /><b>Room Type : Single </b>
			<br /> <br /> <b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.
			<br /><br /><b>Quantity</b> : 1 <br />
			<br /><b>Check in</b> : 04/17/2016 <br />
			<br /><b>Check out</b> : 04/20/2016 <br />
			<hr>
			<h3>TOTAL : Rp 600.000,- </h3><br />


	<div class="col-sm-offset-3 col-sm-6 bg-fade-orange side-box">
			
			<p class="large text-muted"> Hi <?php echo $_POST["namaDepanUser"] ?>, This is your booking </p>
			<img src="<?php echo $_POST["imgsrc"] ?>" class="img-responsive" alt="" height="300" width="480">
			<p class="large"><?php echo $_POST["jenisRuangan"] . " ( Ruang " . $_POST["idRuangan"] . " )" ?></p>
			<?php echo $_POST["deskripsi"] ?> <br />
			Rp <?php echo $_POST["hargaString"] ?>,- <br />



			<button type="submit" name="register" class="btn btn-m">Confirm My Booking</button>

			<form>
				<?php echo '<input type="text" value="'.$_POST["idRuangan"].'" style="display:none;" name="idRuangan">' ?>
				<button type="submit" name="register" class="btn btn-m">Confirm My Booking</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>