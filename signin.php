
<?php 
session_start();
include 'core/header.php';?>

<?php
    if(isset($_REQUEST['btn_signin'])){
        $u=$_REQUEST[uname_txt];
        $p=$_REQUEST[upass_pas];
        $conn=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
        $ql="select user_id from table_signup where email_user='$u' and password_user='$p'";
        $rl=$conn->query($ql);
        if(mysqli_affected_rows($conn)>0){
             $r=mysqli_fetch_array($rl);
             $user_id= $r[0];
             $_SESSION['user_id']=$r[0];
             header('Location:index.php');
        }
        else{
            echo "either user doesn't exist or wrong password";
        }
        mysqli_close($conn);
    }else
        echo 'you have to signin first!';
?>

<?php include 'core/footer.php';?>

