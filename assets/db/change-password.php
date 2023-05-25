<?php

    session_start();
    require_once 'connect.php';
    
    $id = $_POST['id'];
    $password = $_GET['password'];
    // $users_id = $_GET['id'];
    // $email = $_GET['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    if ($password === $old_password) {

        mysqli_query($connect, "UPDATE `users` SET `password` = '$new_password' WHERE `users`.`id` = '$id'");
        $_SESSION['message'] = 'Пароль успішно змінено';
        header('Location: ../../profile.php');

    } else {

        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../../profile.php');
        
    }

?>