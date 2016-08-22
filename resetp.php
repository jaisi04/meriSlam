<?php 
include 'core/header.php';
?>

                <h2>Reset Password</h2>
                <form>
                <input type="email" name="emailc_txt" placeholder="enter your email/username">
                <input class="btn" type="submit" name="sub_resetp" value="reset"></form>

<?php 
if(!empty($_REQUEST[emailc_txt])){
    $e=$_REQUEST['emailc_txt'];
}
if(isset($_REQUEST['sub_resetp'])&&!isset($_SESSION['user_id'])){
    $conn=  mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $qs="select email_user from table_signup";
     $res= $conn->query($qs);
                                $f=0;
                                while($r=mysqli_fetch_array($res)){
                                    if($r[0]==$e){
                                        $f=1;
                                        break;
                                    }
                                }
    if($f){
        if($conn->query("update table_signup set password_user='abcd' where email_user='$e'")===TRUE){
            echo "Your password to reset to 'abcd'. Change it when you sign in next time!";
        }
        
    } else {
        echo "User does not exist!";
    }
}else if(isset($_REQUEST['sub_resetp'])) {
      echo" YOU CAN'T RESET NOW! <br>TRY CHANGE PASSWORD!";
}
include 'core/footer.php';?>