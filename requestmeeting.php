<?php

	include('database.php');
	//TODO: RANGE WAKTU MASIH SALAH
	$sql = "SELECT * FROM ruang_pertemuan WHERE id_ruangan NOT IN(SELECT alokasi.id_ruangan FROM booking JOIN alokasi ON alokasi.id_booking = booking.id WHERE (status = 'paid' OR status = 'pending') AND ((booking.tanggal_checkin <= '".$_GET["checkindate"]."') AND (booking.tanggal_checkout >= '".$_GET["checkoutdate"]." 00:00:00')));";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$query = "SELECT * FROM paket_meeting_room ORDER BY harga DESC";
		$execute = $conn->query($query);

		if ($execute->num_rows >0){
	    // output data of each row
		    while($row = $execute->fetch_assoc()) {

		    	$jenisKamar = $row["paket"];
		    	$hargaKamar = $row["harga"];
		    	$hargaFloat = $hargaKamar;

		    	$hargaKamar = number_format($hargaKamar, 0, ',', '.');

		    	$imgsrc = "img/room/meeting.jpg";

		    	$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.";

		    	echo '<hr>';
				echo '<form name="book" method="post" action="processbooking.php">';
		    	echo '<div class="row">';
		    		echo '<div class="col-sm-3">';
		    			echo '<img src="'.$imgsrc.'" class="img-responsive" alt="">';
		    		echo '</div>';
		    		echo '<div class="col-sm-4">';
		    			echo '<input type="text" value="'.$jenisKamar.'" style="display:none;" name="jenisRuangan">';
		    			echo '<input type="text" value="'.$description.'" style="display:none;" name="deskripsi">';
		    			echo '<input type="text" value="'.$hargaKamar.'" style="display:none;" name="hargaString">';
		    			echo '<input type="text" value="'.$imgsrc.'" style="display:none;" name="imgsrc">';
		    			echo '<input type="text" value="'.$hargaFloat.'" style="display:none;" name="hargaFloat">';
		    			echo '<input type="text" value="'.$_GET["checkindate"].'" style="display:none;" name="checkin">';
		    			echo '<input type="text" value="'.$_GET["checkoutdate"].'" style="display:none;" name="checkout">';

		    			echo '<p><label class="uppercase"> '.$jenisKamar.' </label></p>';
		    			echo '<b>Description </b><br /> '.$description;
		    		echo '</div>';
		    		echo '<div class="col-sm-3">';
		    			//use jquery to update price
		    			echo ' <br /> <br /><b>Price</b> <br /> Rp '.$hargaKamar.',-/pax/day<br /><br />';
		    			echo '<b>Quantity</b> <br />';
		    			echo '<input type="text" size=3 class="form-control" name="quantity">';
		    		echo '</div>';
		    		echo '<div class="col-sm-2">';
		    			//processbooking
		    			echo ' <br /> <br /><button type="submit" class="btn btn-m"> Book </button>';
		    		echo '</div>';
		    	echo '</div>';
		    	echo '</form>';
	    	}
	    }
	} else {
	    echo "No results";
	}

	include('closedatabase.php');

?>