<?php 
session_start();

  include 'core/header.php';

?>

<h2>Home</h2>
<h3>Profile</h3>
<?php 
if(isset($_SESSION['user_id'])){
    $conns=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $qq="select * from table_signup where user_id=$_SESSION[user_id]";
    $rr=$conns->query($qq);
    if(mysqli_affected_rows($conns)>0)
{
        $row= mysqli_fetch_array($rr);
echo "<table border=1 width=40%><tr><td>NAME</td><td>$row[1]</td></tr><tr><td>EMAIL/UNAME</td><td>$row[2]</td></tr><tr><td>Date of Birth</td><td>$row[5]</td></tr><tr><td>GENDER</td><td>$row[6]</td></tr><tr><td>RELATIONSHIP STATUS</td><td>$row[8]</td></tr><tr><td>MOBILE NO.</td><td>$row[9]</td></tr><tr><td>OCCUPATION</td><td>$row[10]</td></tr><tr><td>ABOUT YOU</td><td>$row[7]</td></tr><tr><td>ADDRESS</td><td>$row[11]</td></tr></table>";
}
    echo "<h3>Share slam_id=".$row[0]." for your slambook</h3><br>";

    $ress= mysqli_fetch_array($rr);
    $qs="select count(slam_id) from table_slam where user_id=$_SESSION[user_id]";
    $rss=$conns->query($qs);
    $resss= mysqli_fetch_array($rss);
    echo "YOU HAVE ".$resss[0]." Slampage(s).";

}
else{
    echo"MeriSlamBook is Online Salmbook for you and your friends!";
}
include 'core/footer.php';?>

