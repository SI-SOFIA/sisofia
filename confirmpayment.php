<?php include('head.php'); ?>
<?php include('navigation.php'); ?>

<?php include('database.php');  

	$bookingno = $_POST["bookingno"];
	$status = $_POST["paymenttype"];
	$nominal = $_POST["nominal"];

	$sql = "INSERT INTO konfirmasi (id_booking, jenis_pembayaran, nominal)
	VALUES (".$bookingno.", '".$status."', ".$nominal.")";

	if ($conn->query($sql) === TRUE) {?>

<header class="bg2">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="font-size: 20px; text-align: center;">Terima kasih atas kepercayaan anda, <br>silahkan menunggu konfirmasi dari kami.</div>

        </div>
    </div>
</header>

	<?php
	} else {?>

<header class="bg2">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="font-size: 20px; text-align: center;">Konfirmasi anda gagal, <br>silahkan coba kembali dalam beberapa saat.</div>
        </div>
    </div>
</header>

	<?php
	}


	include('closedatabase.php');
?>



<?php include('footer.php'); ?>