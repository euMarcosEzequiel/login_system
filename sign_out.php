<?php
    session_start();
    unset($_SESSION['email'], $_SESSION['name']);
    header('Location: sign_in.php');
?>