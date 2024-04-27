<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','se');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
// database insert SQL code
$sql = "INSERT INTO `fsd` ( `fIdName`,`fIdEmail`) VALUES ( '$txtName','$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>