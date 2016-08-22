<?php 
 
session_start();
include 'core/header.php';
 
if(isset($_REQUEST['update_btn'])&&isset($_SESSION['user_id'])){
    $conn=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $qu="update table_signup set name_user='$_REQUEST[name_txt]',dob_user='$_REQUEST[dob_date]',gender_user='$_REQUEST[gen_txt]',about_user='$_REQUEST[abt_txt]',rstatus_user='$_REQUEST[rel_status]',mobile_user='$_REQUEST[mob_txt]',occu_user='$_REQUEST[prof_txt]',address_user='$_REQUEST[add_txt]' where user_id=$_SESSION[user_id]";
    echo $conn->query($qu);
    if($conn->query($qu)===TRUE)
        header ('Location:index.php');
}else if(isset($_REQUEST['update_btn'])&&!isset($_SESSION['user_id'])){
    echo 'You must signin first!';
    

 
}
if(isset($_SESSION['user_id'])){
     $conn=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $roww=  mysqli_fetch_array($conn->query("select * from table_signup where user_id=$_SESSION[user_id]"));
    $_REQUEST['name_txt']=$roww[1];
    $_REQUEST['dob_date']=$roww[5];
    $_REQUEST['gen_txt']=$roww[6];
    $_REQUEST['rel_status']=$roww[8];
    $_REQUEST['mob_txt']=$roww[9];
    $_REQUEST['prof_txt']=$roww[10];
    $_REQUEST['abt_txt']=$roww[7];
    $_REQUEST['add_txt']=$roww[11];
}
//"update table_signup set name_user='$_REQUEST[name_txt]' where user_id=$_SESSION[user_id]";
?>
<h2>Edit Profile</h2>
<form method="post">
<fieldset>
    <legend>Personal Information</legend>
    <table border="0" width="200px" cellspacing="20" cellpadding="4">
        <tr>
                <td><label>Name </label></td>
                <td><input type="text" name="name_txt" value="<?php
                    echo $_REQUEST['name_txt'];
                ?>" ></td>
                <td><label>Birthday </label></td>
                <td><input type="date" name="dob_date" value="<?php
                    echo $_REQUEST['dob_date'];
                ?>" placeholder="mm/dd/yyyy"></td>
            </tr>
            <tr>
                <td><label>Gender </label></td>
                <td><input type ="text" name="gen_txt" value="<?php
                    echo $_REQUEST['gen_txt'];
                ?>"></td>
                <td><label>Relationship Status</label></td>
                <td><input type="text" name="rel_status" value="<?php
                    echo $_REQUEST['rel_status'];
                ?>"></td>
            </tr>
            <tr>
                <td><label>Mobile </label></td>
                <td><input type="text" name="mob_txt" value="<?php
                    echo $_REQUEST['mob_txt'];
                ?>"></td>
                <td><label>Profession </label></td>
                <td><input type="text" name="prof_txt" value="<?php
                    echo $_REQUEST['prof_txt'];
                ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td colspan="3"><textarea name="add_txt" rows="4" cols="75"><?php
                    echo $_REQUEST['add_txt'];
                ?></textarea></td>
   
            </tr>
            <tr>
                <td>About You</td>
                <td colspan="3"><textarea name="abt_txt" rows="4" cols="75" ><?php
                    echo $_REQUEST['abt_txt'];
                ?></textarea></td>
                
            </tr>
    </table>
    <input class="btn" type="submit" name="update_btn" value="Update">
</fieldset>
</form>

<?php 
 
include 'core/footer.php';?>

