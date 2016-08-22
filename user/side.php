<h2>Welcome <?php
    $conns=mysqli_connect('localhost', 'akshay', 'mummypapa', 'meriSlam');
    $qq="select * from table_signup where user_id=$_SESSION[user_id]";
    $rr=$conns->query($qq);
    $ress= mysqli_fetch_array($rr);
    echo $ress[1];
?></h2>
<p><a href="changep.php">Change Password</a></p>
<p><a href="signout.php">Sign Out</a></p>
