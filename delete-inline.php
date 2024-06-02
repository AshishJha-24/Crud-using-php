<?php
require_once "config.php";
$sid=$_GET['sid'];

$sql= "DELETE FROM student WHERE sid = '{$sid}'";
$result=mysqli_query($con,$sql) or die("Query failed");

header("location: index.php");
mysqli_close($con);