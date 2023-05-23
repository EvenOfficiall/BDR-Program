<?php

    session_start();
    require_once 'connect.php';
    
    $id = $_POST['id'];
    $email = $_GET['email'];
    // $users_id = $_GET['id'];
    // $email = $_GET['email'];
    $old_email = $_POST['old_email'];
    $new_email = $_POST['new_email'];

    if ($email === $old_email) {

        mysqli_query($connect, "UPDATE `users` SET `email` = '$new_email' WHERE `users`.`id` = '$id'");
        $_SESSION['message'] = 'Пошту успішно змінено';
        header('Location: ../../profile.php');

    } else {

        $_SESSION['message'] = 'Пошти не співпадають';
        header('Location: ../../profile.php');
        
    }

?>