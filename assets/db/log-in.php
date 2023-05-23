<?php

    session_start();
    require_once 'connect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    if(mysqli_num_rows($check_user) > 0 ) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];

        header('Location: ../../menu.php');

    } else {

        $_SESSION['message'] = 'Не правильний логін або пароль';
        header('Location: ../../authorization.php');
        
    }

?>

<pre>
    <?php
        print_r($check_user);
        print_r($user);
    ?>
</pre>