<?php include('head.php'); ?>
<?php include('navigation.php'); ?>

<?php include('database.php');  

	$bookingno = $_POST["bookingno"];
	$status = "Paid (Wait for Response)";

	$sql = "UPDATE booking SET status='".$status."' WHERE id=".$bookingno;

	if ($conn->query($sql) === TRUE) {
	    
	} else {
	    echo "Error updating record: " . $conn->error;
	}


	include('closedatabase.php');
?>

<!-- Header -->
<header class="bg2">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="font-size: 20px; text-align: center;">Terima kasih atas kepercayaan anda, <br>silahkan menunggu konfirmasi dari kami.</div>

        </div>
    </div>
</header>

<?php include('footer.php'); ?>