<?php include 'core/header.php';
?>
<form method="post">
<input type="password" name="olpass" placeholder="Old Password" required>
<br>
<input type="password" name="npass" placeholder="New Password" required>
<br>
<input type="password" name="npassc" placeholder="Confirm Password" required>
<br>

<input class="btn" type="submit" name="cpass_btn" value="change">
</form>
<?php 
if(isset($_SESSION['user_id'])){
if(!empty($_REQUEST['olpass'])&&!empty($_REQUEST['npass'])&&!empty($_REQUEST['npassc'])){
    $a=$_REQUEST['olpass'];
    $b=$_REQUEST['npass'];
    $c=$_REQUEST['npassc'];
}
if(isset($_REQUEST['cpass_btn'])){
    if($b!=$c){
        echo "passwords didn't match";
    }
    else{
        $conn=mysqli_connect('localhost','akshay', 'mummypapa', 'meriSlam');
        $r=$conn->query("select password_user from table_signup where user_id=$_SESSION[user_id]");
        $re= mysqli_fetch_array($r);
        if($re[0]==$a){
            if($conn->query("update table_signup set password_user='$b' where user_id=$_SESSION[user_id]")===TRUE)
                echo "Password has successfully Updated!";
            else {
                echo "ERROR!";
            }
        }  else {
            echo "You have entered Wrong Password!";
        }
    }
}}
 else {
    echo '<h3>Wait!You Have to Signin First in order to change the password!</h3>';
}
include 'core/footer.php';
?>