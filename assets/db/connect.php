<?php

    $connect = mysqli_connect('localhost', 'root', '', 'TransConnect' );

    if (!$connect) {
        die('Error connect to database');
    }
    
?>