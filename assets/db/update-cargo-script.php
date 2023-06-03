<?php 

    session_start();
    require_once 'connect.php';

    $id = $_POST['id'];
    $date = $_POST['date'];
    $from_where = $_POST['from_where'];
    $to_where = $_POST['to_where'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $contacts = $_POST['contacts'];

    mysqli_query($connect, "UPDATE `cargo` SET `date` = '$date', `from_where` = '$from_where', `to_where` = '$to_where', `info` = '$info', `price` = '$price', `contacts` = '$contacts' WHERE `cargo`.`id` = '$id'");

    header('Location: ../admin/admin-panel.php');

?>