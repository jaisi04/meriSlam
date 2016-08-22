<!doctype html>
<html>
    <?php include 'files/head.php';
    session_start();?>
   
    <body>
    <?php 
    if(isset($_SESSION['user_id']))
        include 'user/header.php';
    else
        include 'files/header.php';?>
        
        <div id="container">

<h2>Your Slambook</h2>

<?php 
if(isset($_SESSION['user_id'])){
    $connsl=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    echo "<table width=80% border=1><tr><th>My Sweet Name</th><th>Friends Call Me</th><th>My Sweet Home</th><th>Contact Me at</th><th>My BirthDay</th><th>Fav Book</th><th>Fav Movie</th><th>Fav Song</th><th>Fav Food</th><th>Fav Game</th><th>Action</th></tr>";
    $rsv=$connsl->query("select * from table_slam where user_id='$_SESSION[user_id])'");
    if(mysqli_affected_rows($connsl)){
        while($rrr=  mysqli_fetch_array($rsv)){
            echo "<tr><td>$rrr[2]</td><td>$rrr[3]</td><td>$rrr[4]</td><td>$rrr[5]</td><td>$rrr[6]</td><td>$rrr[7]</td><td>$rrr[8]</td><td>$rrr[9]</td><td>$rrr[10]</td><td>$rrr[11]</td><td><a href='delete.php?id=$rrr[0]'>Delete</a></td></tr>";
        }
    }  else {
        echo "<h3>OOPs!Empty Slambook</h3>";
    }
     echo "</table>";
}else {
    echo 'You have to sign in first!';
    
}

include 'core/footer.php';
?>