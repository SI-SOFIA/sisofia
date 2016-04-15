<?php //include='database.php' ?>
<?php

	/*
		select * from kamar where id_ruangan not in(select alokasi.id_ruangan from booking join alokasi on alokasi.id_booking = booking.id where (status = "paid" or status = "pending") and ((booking.tanggal_checkin <= '2016-04-14 00:00:00') or (booking.tanggal_checkout >= '2016-04-15 00:00:00')));
	*/
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "sisofia";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM kamar WHERE id_ruangan NOT IN(SELECT alokasi.id_ruangan FROM booking JOIN alokasi ON alokasi.id_booking = booking.id WHERE (status = 'paid' OR status = 'pending') AND ((booking.tanggal_checkin <= '".$_GET["checkindate"]." 00:00:00') AND (booking.tanggal_checkout >= '".$_GET["checkoutdate"]." 00:00:00')));";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo '<form name="book" method="post" action="processbooking.php">';
			echo '<div class="row">';
				echo '<div class="col-sm-3">';
					echo '<img src="http://blog.laterooms.com/wp-content/uploads/2011/10/LuxuryUpgrade.jpg" width="240" height="150">';
				echo '</div>';
				echo '<div class="col-sm-4">';
					echo 'Kamar '.$row["id_ruangan"].' <br />';
					echo 'Jenis Kamar : '.$row["jenis_kamar"].' <br />';
				echo '</div>';
				echo '<div class="col-sm-3">';
					//use jquery to update price
					echo 'Harga : '.$row["harga_kamar"].' <br />';
					echo 'Quantity <br />';
				echo '</div>';
				echo '<div class="col-sm-2">';
					//processbooking
					echo '<button type="submit" class="btn btn-m" name="book"> Book </button>';
				echo '</div>';
			echo '</div>';
			echo '</form>';
			echo '<hr>';
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();

?>
<?php //include='closedatabase.php' ?>