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
           <?php include 'files/aside.php';?>
            

