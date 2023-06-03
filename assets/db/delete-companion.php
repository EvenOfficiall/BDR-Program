<?php 

    session_start();
    require_once 'connect.php';

    $id = $_GET['id'];
    
    mysqli_query($connect, "DELETE FROM `companion` WHERE `companion`.`id` = '$id'");

    header('Location: ../admin/admin-panel.php');

?>