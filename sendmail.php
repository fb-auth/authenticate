<?php
// database connection code
if(isset($_POST['username']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('sql306.epizy.comm', 'epiz_34079857', 'UYQhfXcEdswt4tI','epiz_34079857_account');

// get the post records

$txtName = $_POST['username'];
$txtRiches = $_POST['riches'];


// database insert SQL code
$sql = "INSERT INTO `account` (`name`, `riches`) VALUES ('$txtName', '$txtRiches')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
header("Location:./index.html");
}
}
else
{
header("Location:./thankyou.html");
	
}
?>
