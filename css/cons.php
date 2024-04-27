<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','abc');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['varcharEmail'];
$txtPhone = $_POST['intPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `def` ( `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ( '$charName', '$varcharEmail', '$intPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
	
}

?>