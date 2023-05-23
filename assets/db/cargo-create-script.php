<?php 

    session_start();
    require_once 'connect.php';

    $date = $_POST['date'];
    $from_where = $_POST['from_where'];
    $to_where = $_POST['to_where'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $contacts = $_POST['contacts'];

    mysqli_query($connect, "INSERT INTO `cargo` (`id`, `date`, `from_where`, `to_where`, `info`, `price`, `contacts`) VALUES (NULL, '$date', '$from_where', '$to_where', '$info', '$price', '$contacts')");

    header('Location: ../../cargo-table.php');

?>