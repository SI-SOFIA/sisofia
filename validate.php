<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$connect = mysql_connect("localhost","root","") or die ("Connection Error");
$selectdb = mysql_select_db("sisofia", $connect);
$id = $_GET["id"];
mysql_query("UPDATE `booking` SET `status` = 'paid' WHERE `booking`.`id` = '$id';",$connect);

header("Location: validatepayment.php");
mysql_close($connect);
?>
</body>
</html>