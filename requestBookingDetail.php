<?php //include='database.php' ?>
<?php

	/*
		select * from kamar where id_ruangan not in(select alokasi.id_ruangan from booking join alokasi on alokasi.id_booking = booking.id where (status = "paid" or status = "pending") and ((booking.tanggal_checkin <= '2016-04-14 00:00:00') or (booking.tanggal_checkout >= '2016-04-15 00:00:00')));
	*/
	include('database.php');

	$sql = "SELECT * FROM booking JOIN pelanggan ON booking.id_pelanggan = pelanggan.id WHERE booking.id = ".$_GET["bookingno"];
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    $row = $result->fetch_assoc();

    	$nama = $row["nama"];
    	$noTelepon = $row["nomor_hp"];
    	$alamat = $row["alamat"];
    	$status = $row["status"];

    	//$jenisKamar = ucfirst($jenisKamar);
    	//$hargaKamar = number_format($hargaKamar, 0, ',', '.');

    	echo '<table class="table-condensed">
		<tr>
			<td> Name </td>
			<td> : </td>
			<td> '.$nama;
		echo' </td>
		</tr>
		<tr>
			<td> Telephone </td>
			<td> : </td>
			<td> '.$noTelepon;
		echo' </td>
		</tr>
		<tr>
			<td> Address </td>
			<td> : </td>
			<td> '.$alamat;
		echo' </td>
		</tr>
		<tr>
			<td> Booking Detail </td>
			<td> : </td>
			<td> '.$status;

		if ($status != 'cancel') {
			$sql = "SELECT * FROM kamar WHERE id_ruangan IN(SELECT alokasi.id_ruangan FROM alokasi WHERE id_booking = ".$_GET["bookingno"].")";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$hargaKamar = $row["harga_kamar"];
			$hargakamar = number_format($hargaKamar, 0, ',', '.');

				 echo '</td>
			</tr>
			</table>
		</div>
		<div class="row">
			<table class="table-condensed">
				<tr>
					<td rowspan="3">
						<img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
					</td>
					<td><p class="large">Nomor ruangan : '.$row["id_ruangan"];
					echo'</p></td>
				</tr>
				<tr>
					<td> '."Kamar terbaik untuk anda dan pasangan.";
					echo' </td>
				</tr>
				<tr>
					<td> '.$hargaKamar;
					echo' </td>
				</tr>
			</table>

			</div>';
		} else {
			echo '</td>
			</tr>
			</table>
		</div>
		<div class="row">
			<table class="table-condensed">
				<tr>
					<td rowspan="3">
						<img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
					</td>
					<td><p class="large"></p></td>
				</tr>
				<tr>
					<td> </td>
				</tr>
				<tr>
					<td>
					</td>
				</tr>
			</table>

			</div>';
		}
	} else {
	    echo "0 results";
	}

	include('closedatabase.php');

?>
<?php //include='closedatabase.php' ?>