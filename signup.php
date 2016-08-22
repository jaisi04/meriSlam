<?php include 'core/header.php';?>

            <h2>Signup</h2>
            <form method="post" >
                <input type ="text" name="name_txt" placeholder="full name" value="<?php 
                echo $_REQUEST['name_txt']; ?>" required><br>
                <input type="email" name="email_txt" placeholder="email" value="<?php 
                echo $_REQUEST['email_txt']; ?>" required><br>
                <input type="password" name="pass_txt" placeholder="password" value="<?php
                echo $_REQUEST['pass_txt']; ?>" required><br>
                <input type="password" name="pass_confirm_txt" placeholder="confirm password*" 
                       value="<?php echo $_REQUEST['pass_confirm_txt']; ?>" required>
                <br>
                <input class='btn' type="submit" name="btn_signup" value="SignUp"></form>
	<?php
	if(isset($_REQUEST['btn_signup'])&&!isset($_SESSION['user_id'])){
			if($_REQUEST['pass_txt']===$_REQUEST['pass_confirm_txt']){

				
				$conn=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
				$q1="  INSERT INTO `table_signup` (`user_id`, `name_user`, `email_user`, `password_user`, `active_user`, `dob_user`, `gender_user`, `about_user`, `rstatus_user`, `mobile_user`, `occu_user`, `address_user`) VALUES (NULL, '$_REQUEST[name_txt]','$_REQUEST[email_txt]','$_REQUEST[pass_txt]', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
                                $qs="select email_user from table_signup";
                                $res= $conn->query($qs);
                                $f=1;
                                while($r=mysqli_fetch_array($res)){
                                    if($r[0]==$_REQUEST['email_txt']){
                                        $f=0;
                                        break;
                                    }
                                }
                               if($f){ 
                                $r=$conn->query($q1);
				if(mysqli_affected_rows($conn)>0){
                                        
					header('Location:redirect.php');
                                        
				}
				else
                                echo "error";}
                                else {
                                 echo "email already exists";   
                                 }
				mysqli_close($conn);
			}
			else
				echo "passwords didn't match!";
	}else if(isset($_SESSION['user_id']))
            echo" YOU CAN'T CREATE A NEW ACCOUT NOW!";
        ?>
 
<?php include 'core/footer.php';?>

           