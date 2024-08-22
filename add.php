<?php
include_once("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')

$first_name= $_POST['first_name'];
$last_name=$_POST['last_name'];
{
    $result=mysqli_query($mysqli,"INSERT INTO student(first_name,last_name)VALUES('$first_name','$last_name')");
    echo"<font color='green'>Data Success</font>";
	echo"<a href='table.php'>view</a>";
}
?>