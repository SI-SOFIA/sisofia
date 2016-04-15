<?php

	include('database.php');

	$IDPelanggandb = 0;

	$sql = "INSERT INTO pelanggan (nama, alamat, email, nomor_hp)
	VALUES ('". $_POST["namaDepanUser"] ." ". $_POST["namaBelakangUser"] ."', '". $_POST["addressUser"] ."', '". $_POST["emailUser"] ."','". $_POST["phoneUser"] ."')";

	if ($conn->query($sql) === TRUE) {
		//Do Something Right
	} else {
	    //Do Something Wrong
	    echo "Failed to receive your data";
	}

	$sql = "SELECT * FROM pelanggan WHERE email = '".$_POST["emailUser"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$IDPelanggandb = $row["id"];
	    }
	} else {

	}

	include('closedatabase.php');

?>