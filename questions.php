<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','se');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$txtNumber = $_POST['txtNumber'];
$txtScore =$_POST['txtScore'];
// database insert SQL code
$sql = "INSERT INTO `fsd` ( `fldName`, `fldEmail`, `fldPhone`, `fldMessage`,`fIdNumber`,`fIdScore`) VALUES ( '$txtName', '$txtEmail', '$txtPhone', '$txtMessage','$txtNumber','$txtScore')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>