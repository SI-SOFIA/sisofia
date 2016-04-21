<?php

	include("database.php");

	$sql = "INSERT INTO booking (id_pelanggan, status, tanggal_pemesanan, tanggal_checkin, tanggal_checkout, jumlah, jenis, total_harga) VALUES (". $_POST["idpelanggan"] .",'pending', CURRENT_TIMESTAMP, '". $_POST["checkin"] ."', '". $_POST["checkout"] ."',". $_POST["quantity"] .", '". $_POST["jenisRuangan"] ."', ". $_POST["totalharga"] .")";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
		$idbooking = $conn->insert_id;
		include('head.php');
		include('minimalnavigation.php');
		echo '<div class="container">
				<div class="text-center">
					<hr><hr><hr>
					<h2 class="section-heading"> Thank you! </h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6 bg-fade-orange center-box">';
		echo '<center><p class="large text-muted"> Your Booking Request Has Been Submitted Successfully </p>';
		echo '<h3><b> Your Booking No. : '.$idbooking.'</h3>';
		echo '<p class="text-muted"> Please keep this number to check your booking </p></center>';

	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}

	include("closedatabase.php");

?>