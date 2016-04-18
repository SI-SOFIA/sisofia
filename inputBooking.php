<?php

	include("database.php");

	$sql = "INSERT INTO booking (id_pelanggan, status, tanggal_pemesanan, tanggal_checkin, tanggal_checkout, jumlah, jenis, total_harga) VALUES (". $IDPelanggandb .",'pending', CURRENT_TIMESTAMP, '". $_POST["checkin"] ."', '". $_POST["checkout"] ."', 1, '". $_POST["jenisRuangan"] ."', ". $_POST["hargaFloat"] .")";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}

	include("closedatabase.php");

?>