<?php

	include('database.php');

	$sql = "INSERT INTO pelanggan (nama, alamat, email, nomor_hp)
	VALUES ('". $_POST["namaDepanUser"] ." ". $_POST["namaBelakangUser"] ."', '". $_POST["addressUser"] ."', '". $_POST["emailUser"] ."','". $_POST["phoneUser"] ."')";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}

	$conn->close();

?>