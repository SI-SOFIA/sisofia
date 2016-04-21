<?php

	include('database.php');

	$IDPelanggandb = 0;

	$sql = "INSERT INTO pelanggan (nama, alamat, email, nomor_hp)
	VALUES ('". $_POST["namaDepanUser"] ." ". $_POST["namaBelakangUser"] ."', '". $_POST["addressUser"] ."', '". $_POST["emailUser"] ."','". $_POST["phoneUser"] ."')";

	if ($conn->query($sql) === TRUE) {
		$IDPelanggandb = $conn->insert_id;
		
	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}



	include('closedatabase.php');

?>