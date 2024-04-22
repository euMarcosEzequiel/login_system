<?php
    session_start();
    if(!empty($_SESSION['email'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Sing in</title>

</head>
<body>
    <form action="verification.php" method="POST" id="form-login">

        <div id="form-header">
            
            <h1>Sign in</h1>

        </div>

        <div id="form-social">
            
            <img src="assets/img/facebook.png" alt="facebook logo">
            <img src="assets/img/google.png" alt="google logo">
            <img src="assets/img/github.png" alt="github logo">

        </div>

        <div id="form-inputs">

            <div class="input-box">
                <i class='bx bx-envelope'></i>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

        </div>

        <div id="form-message">
            <?php 
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </div>
        
        <input type="submit" id="btn-login" name="btn-login" value="Sign in">
        
        <a href="" id="forgot-password">Forgot password?</a>

    </form>

</body>
</html>