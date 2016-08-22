 <aside>
     <?php 
     if(!isset($_SESSION['user_id']))include 'files/signin.php';
else {
    include 'user/side.php';
}?>
</aside>