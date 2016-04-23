<?php

	include("database.php");

	$sql = "INSERT INTO booking (id_pelanggan, status, tanggal_pemesanan, tanggal_checkin, tanggal_checkout, jumlah, jenis, total_harga) VALUES (". $_POST["idpelanggan"] .",'pending', CURRENT_TIMESTAMP, '". $_POST["checkin"] ."', '". $_POST["checkout"] ."',". $_POST["quantity"] .", '". $_POST["jenisRuangan"] ."', ". $_POST["totalharga"] .")";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
		$idbooking = $conn->insert_id;
		if ($_POST["jenisRuangan"] == 'single' || $_POST["jenisRuangan"] == 'executive' || $_POST["jenisRuangan"] == 'double')
			$query = "SELECT * FROM kamar WHERE jenis_kamar='".$_POST["jenisRuangan"]."' AND id_ruangan NOT IN(SELECT alokasi.id_ruangan FROM booking JOIN alokasi ON alokasi.id_booking = booking.id WHERE (status = 'paid' OR status = 'pending') AND ((booking.tanggal_checkin <= '".$_POST["checkin"]."') AND (booking.tanggal_checkout >= '".$_POST["checkout"]."'))) LIMIT ". $_POST["quantity"];
		else
			$query = "SELECT * FROM ruang_pertemuan WHERE id_ruangan NOT IN(SELECT alokasi.id_ruangan FROM booking JOIN alokasi ON alokasi.id_booking = booking.id WHERE (status = 'paid' OR status = 'pending') AND ((booking.tanggal_checkin <= '".$_POST["checkin"]."') AND (booking.tanggal_checkout >= '".$_POST["checkout"]."'))) LIMIT 1";
		

		$execute = $conn->query($query);

		if ($execute->num_rows >0){
	    // output data of each row
		    while($row = $execute->fetch_assoc()) {
				$insert = "INSERT INTO alokasi (id_booking, id_ruangan) VALUES (".$idbooking.", ".$row["id_ruangan"].")";
				$alocate = $conn->query($insert);
			}
		}
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