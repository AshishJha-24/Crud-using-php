<?php
require_once "config.php";

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];


$sql= "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($con,$sql) or die("Query Unsuccessful. ");


header("location: index.php");
 ?>