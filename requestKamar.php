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

	    	$jenisKamar = $row["jenis_kamar"];
	    	$hargaKamar = $row["harga_kamar"];

	    	$jenisKamar = ucfirst($jenisKamar);
	    	$hargaKamar = number_format($hargaKamar, 0, ',', '.');

			echo '<form name="book" method="post" action="processbooking.php">';
	    	echo '<div class="row">';
	    		echo '<div class="col-sm-3">';
	    			echo '<img src="http://blog.laterooms.com/wp-content/uploads/2011/10/LuxuryUpgrade.jpg" width="240" height="150">';
	    		echo '</div>';
	    		echo '<div class="col-sm-4">';
	    			echo '<p><label> '.$jenisKamar.' ( Room '.$row["id_ruangan"].' )</label></p>';
	    			echo '<b>Description </b><br /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.';
	    		echo '</div>';
	    		echo '<div class="col-sm-3">';
	    			//use jquery to update price
	    			echo ' <br /> <br /><b>Price</b> <br /> Rp '.$hargaKamar.'/night<br /><br />';
	    			echo '<b>Quantity</b> <br />';
	    			echo '<select>
	    				<option value="1"> 1 </option>
	    				</select>';
	    		echo '</div>';
	    		echo '<div class="col-sm-2">';
	    			//processbooking
	    			echo ' <br /> <br /><button type="submit" class="btn btn-m" name="book"> Book </button>';
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