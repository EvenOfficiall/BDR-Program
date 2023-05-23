<?php

    session_start();
    require_once 'connect.php';
    unset($_SESSION['user']);
    header('Location: ../../main-page.html');

?>