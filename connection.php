<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'login_system';

    $conn = new mysqli($host, $user, $password, $dbname);

    header('Location: sign_in.php');
?>