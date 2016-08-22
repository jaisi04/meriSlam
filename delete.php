<?php 
$id=$_REQUEST['id'];
$h=@mysqli_connect("localhost","akshay","mummypapa","meriSlam") or die("error in database");
$h->query("select ");
$h->query("delete from table_slam where slam_id=$id");
header("location:viewslambook.php");
?>