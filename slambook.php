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

<h2>Slambook Page</h2>

<form method="post">
    <table cellpadding="4"><tr>
   <td> <fieldset >
    <legend><h3>AboutMe!</h3></legend>
   
    <table border="0" width="100%" cellspacing="20" cellpadding="4">
            <tr>
                <td>Friend's Slam ID</td>
                <td><input type="text" name="sid"value="<?php
                    echo $_REQUEST['sid'];
                    ?>" placeholder="use when offline"></td>
            </tr>
            <tr>
                <td>Sweet Name</td>
                <td><textarea name="namearea" rows="2" cols="50"><?php
                        echo $_REQUEST['namearea'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>Friends Call Me</td>
                <td><textarea name="nickarea" rows="2" cols="50"><?php
                        echo $_REQUEST['nickarea'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>My Sweet Home</td>
                <td><textarea name="homearea" rows="2" cols="50"><?php
                        echo $_REQUEST['homearea'];
                ?></textarea></td>
            </tr>
            
            <tr>
                <td>Contact Me at</td>
                <td><textarea name="contactme" rows="2" cols="50"><?php
                        echo $_REQUEST['contactme'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>My BirthDay</td>
                <td><textarea name="bday" rows="2" cols="50"><?php
                        echo $_REQUEST['bday'];
                ?></textarea></td>
            </tr>
      </table>
       </fieldset></td>
       <td><fieldset >
    <legend><h3>My Favs!</h3></legend>
   
    <table border="0" width="100%" cellspacing="20" cellpadding="4">
            <tr>
                <td>Book</td>
                <td><textarea name="book" rows="2" cols="50"><?php
                        echo $_REQUEST['book'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>Movie</td>
                <td><textarea name="movie" rows="2" cols="50"><?php
                        echo $_REQUEST['movie'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>Song</td>
                <td><textarea name="song" rows="2" cols="50"><?php
                        echo $_REQUEST['song'];
                ?></textarea></td>
            </tr>
            
            <tr>
                <td>Food</td>
                <td><textarea name="food" rows="2" cols="50"><?php
                        echo $_REQUEST['food'];
                ?></textarea></td>
            </tr>
            <tr>
                <td>Sport</td>
                <td><textarea name="sport" rows="2" cols="50"><?php
                        echo $_REQUEST['sport'];
                ?></textarea></td>
            </tr>
      </table>
           </fieldset></td></tr>
        
</table>
    <input class="btn" type="submit" name="slam_sub" value="Done">
</form>

<?php 
if(isset($_SESSION['user_id'])&&isset($_REQUEST['slam_sub'])){
    if(!empty($_REQUEST['namearea'])||!empty($_REQUEST['nickarea'])||!empty($_REQUEST['homearea'])||!empty($_REQUEST['bday'])||!empty($_REQUEST['contactme'])||!empty($_REQUEST['book'])||!empty($_REQUEST['song'])||!empty($_REQUEST['food'])||!empty($_REQUEST['movie'])||!empty($_REQUEST['sports'])){
    $conn=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $q="insert into table_slam VALUES (NULL, '$_SESSION[user_id]','$_REQUEST[namearea]','$_REQUEST[nickarea]', '$_REQUEST[homearea]', '$_REQUEST[contactme]', '$_REQUEST[bday]', '$_REQUEST[book]', '$_REQUEST[movie]', '$_REQUEST[song]', '$_REQUEST[food]', '$_REQUEST[sport]')";
    $conn->query($q);
    if(mysqli_affected_rows($conn)>0){
        header('Location:viewslambook.php');
    }else
    echo 'error';}
    else{
        echo "Error:Empty Page!";
    }
}else if(!isset ($_SESSION['user_id'])){
    if(isset($_REQUEST['slam_sub'])&&!empty($_REQUEST['sid'])){
        if(!empty($_REQUEST['namearea'])||!empty($_REQUEST['nickarea'])||!empty($_REQUEST['homearea'])||!empty($_REQUEST['bday'])||!empty($_REQUEST['contactme'])||!empty($_REQUEST['book'])||!empty($_REQUEST['song'])||!empty($_REQUEST['food'])||!empty($_REQUEST['movie'])||!empty($_REQUEST['sports'])){
    $connp=mysqli_connect('localhost','akshay','mummypapa','meriSlam');
    $qz="insert into table_slam VALUES (NULL, '$_REQUEST[sid]','$_REQUEST[namearea]','$_REQUEST[nickarea]', '$_REQUEST[homearea]', '$_REQUEST[contactme]', '$_REQUEST[bday]', '$_REQUEST[book]', '$_REQUEST[movie]', '$_REQUEST[song]', '$_REQUEST[food]', '$_REQUEST[sport]')";
    $connp->query($qz);
    if(mysqli_affected_rows($connp)>0){
        header('Location:index.php');
    }else
        echo 'error';}
        else{
        echo "Error:Empty Page!";
    }
    }else if(isset($_REQUEST['slam_sub']))
        echo '<h3>You must be either signin or put a slam id</h3>';
}


include 'core/footer.php';?>
