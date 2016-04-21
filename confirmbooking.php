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
	

	<div class="col-sm-offset-3 col-sm-6 bg-fade-orange center-box">
	<?php
			echo '<table class="table-condensed">';
			echo '<tr>';
				echo '<td> <b>Name</b> </td>';
				echo '<td> : </td>';
				echo '<td> '. $_POST["namaDepanUser"]. ' '. $_POST["namaBelakangUser"] .' </td>';
			echo '</tr>';
			echo '<tr>';
				echo'<td> <b>Telephone</b> </td>';
				echo '<td> : </td>';
				echo '<td> '. $_POST["phoneUser"] .' </td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td> <b>Address</b> </td>';
				echo '<td> : </td>';
				echo '<td> '. $_POST["addressUser"] .'</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td> <b>Booking Detail </b></td>';
				echo '<td> : </td>';
				echo '<td>  </td>';
			echo '</tr>';
			echo '</table>';

			echo '<img src="'.$_POST["imgsrc"].'" class="img-responsive" alt="">';
			echo '<br /><b>Room Type : '. ucfirst($_POST["jenisRuangan"]) .'</b>';
			echo '<br /> <br /> <b>Description </b><br /> '.$_POST["deskripsi"];
			echo '<br /><br /><b>Quantity</b> : '.$_POST["quantity"].'<br />';
			echo '<br /><b>Check in</b> : '.$_POST["checkin"].' <br />';
			echo '<br /><b>Check out</b> : '.$_POST["checkout"].' <br />';
			echo '<hr>';
			echo '<h3>TOTAL : Rp '. $_POST["totalhargastring"] .',- </h3><br />';
	?>


			<form name="confirmBooking" method="post" action="inputBooking.php">
				<?php

				echo '<input type="text" value="'.$IDPelanggandb.'" style="display:none;" name="idpelanggan">';
				echo '<input type="text" value="'.$_POST["jenisRuangan"].'" style="display:none;" name="jenisRuangan">';
				echo '<input type="text" value="'.$_POST["quantity"].'" style="display:none;" name="quantity">';
				echo '<input type="text" value="'.$_POST["checkin"].'" style="display:none;" name="checkin">';
				echo '<input type="text" value="'.$_POST["checkout"].'" style="display:none;" name="checkout">';
				echo '<input type="text" value="'.$_POST["totalharga"].'" style="display:none;" name="totalharga">';
				
				?>
				<button type="submit" class="btn btn-m">Confirm My Booking</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>