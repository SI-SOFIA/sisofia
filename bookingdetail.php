<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Your Booking </h2>
	<hr>
	</div>
	<div class="row">
	
	<div class="col-sm-offset-3 col-sm-6 bg-fade-orange center-box">
		<div class = "row">
		<?php
		include('requestBookingDetail.php');
		echo '<p class="large text-muted"> Booking No. '. $bookingno. '</p>
		<table class="table-condensed">';
			echo '<tr>
				<td> <b>Name</b> </td>
				<td> : </td>
				<td> '. $nama . '</td>
			</tr>';

			echo '<tr>
				<td> <b>Telephone</b> </td>
				<td> : </td>
				<td>' . $noTelepon. '</td>
			
			</tr>';
			
			echo '<tr>
				<td> <b>Address</b> </td>
				<td> : </td>
				<td>'. $alamat. '</td>
			</tr>';
			
			echo '<tr>
				<td> <b>Booking Detail </b></td>
				<td> : </td>
				<td>  </td>
			</tr>
			</table>';

			echo '<img src="'.$imgsrc.'" class="img-responsive" alt="">';
			echo '<br /><b>Room Type</b> : '. $jenisKamar;
			echo '<br /><br /><b>Quantity</b>: '. $quantity. '<br />';
			echo '<br /><b>Check in</b> : ' . $checkin;
			echo '<br /><b>Check out</b> : '. $checkout . ' <br />';
			echo '<br /><b>Total</b> : Rp ' . number_format($totalharga, 0, ',', '.') .' <br />';
			echo '<br /><b>Status</b> : ' . $status .' <br />';
		?>
		
		</div>
	</div>
</div>
</div>
<?php include('footer.php'); ?>