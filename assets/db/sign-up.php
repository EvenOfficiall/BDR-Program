<?php

    session_start();
    require_once 'connect.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");
        $_SESSION['message'] = 'Реєстрація пройшла успішно';
        header('Location: ../../authorization.php');

    } else {

        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../../registration.php');
        
    }

?>