<?php
 require_once "config.php";

  $sid=$_POST['sid'];

  $stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


$sql= "UPDATE  student SET sname='{$stu_name}',saddress='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' WHERE sid='{$sid}'";

$result = mysqli_query($con,$sql) or die("query failed");
header("location: index.php");
?>