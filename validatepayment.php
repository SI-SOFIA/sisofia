<?php include('head.php'); ?>
<?php include('minimalnavigation.php'); ?>
<?php
	$connect = mysql_connect("localhost","root","") or die ("Connection Error");
	$selectdb = mysql_select_db("sofia", $connect);
?>
<div class="container">
	<div class="text-center">
	<hr><hr><hr>
	<h2 class="section-heading"> Validate Payment Confirmation </h2>
	<hr>
	</div>

		<div class="row">
			<table class="table-striped" style="margin:auto;">
				<thead> 
					<tr>
						<td class="padding-20"> No. </td>
						<td class="padding-20"> Booking No.</td>
						<td class="padding-20"> Nominal </td>
						<td colspan="2" class="padding-20"> Status </td>
					</tr>
				</thead>
				<tbody>
				<?php
					$query = "SELECT * FROM `konfirmasi` WHERE `id_booking` in (SELECT `id` FROM `booking` WHERE `status`='pending')";
					$data = mysql_query($query,$connect);
					$i = 1;
					if ($data){
						while($row = mysql_fetch_array($data)){
							echo '<tr>';
								echo '<td class="padding-20">'.$i.'</td>';
								echo '<td class="padding-20">'.$row[1].'</td>';
								echo '<td class="padding-20">'.$row[4].'</td>';
								echo '<td class="padding-20"> <a href=""> <i class="fa fa-remove text-danger"> </a></td>';
								echo '<td class="padding-20"> <a href="validate.php?id='.$row[1].'"> <i class="fa fa-check text-success"> </a></td>';
							echo '</tr>';
							$i++;
							
						}
					}
				?>

				</tbody>
			</table>
	</div>
</div>

<?php include('footer.php'); ?>