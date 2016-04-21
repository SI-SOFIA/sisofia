<?php

	include("database.php");

	$sql = "INSERT INTO booking (id_pelanggan, status, tanggal_pemesanan, tanggal_checkin, tanggal_checkout, jumlah, jenis, total_harga) VALUES (". $_POST["idpelanggan"] .",'pending', CURRENT_TIMESTAMP, '". $_POST["checkin"] ."', '". $_POST["checkout"] ."',". $_POST["quantity"] .", '". $_POST["jenisRuangan"] ."', ". $_POST["totalharga"] .")";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
		header("Location: index.php");
	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}

	include("closedatabase.php");

?>