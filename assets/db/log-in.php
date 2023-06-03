<?php

    session_start();
    require_once 'connect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($check_user);

    $check_admin = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `id_roles` = 2");
   
    if(mysqli_num_rows($check_user) > 0) {
       
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email'],
        ];

        if(mysqli_num_rows($check_admin) > 0) {
            header('Location: ../admin/admin-panel.php');
        } else {
            header('Location: ../../menu.php');
        }
            
    } else {

        $_SESSION['message'] = 'Неправильний логін або пароль';
        header('Location: ../../authorization.php');
        
    }

?>