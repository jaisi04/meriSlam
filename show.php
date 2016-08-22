
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
    echo "<table width=80% border=1><tr><th>Name</th><th>Date Of Birth</th><th>Gender</th><th>Relationship Status</th><th>Occupation</th><th>About Me</th><th>Address</th></tr>";
    $rsv=$connsl->query("select * from table_signup");
    if(mysqli_affected_rows($connsl)){
        while($rrr=  mysqli_fetch_array($rsv)){
            echo "<tr><td>$rrr[1]</td><td>$rrr[5]</td><td>$rrr[6]</td><td>$rrr[8]</td><td>$rrr[10]</td><td>$rrr[7]</td><td>$rrr[11]</tr>";
        }
        echo "</table>";
    }  else {
        echo "ERROR!";
    }
}else {
    echo 'You have to sign in first!';
    
}

include 'core/footer.php';
?>