<?php include 'header.php'; ?>
<?php 
require_once "config.php";

$sid=$_POST['sid'];

$sql= "DELETE FROM student WHERE sid = '{$sid}'";
$result=mysqli_query($con,$sql) or die("Query failed");

header("location: index.php");
mysqli_close($con);
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
