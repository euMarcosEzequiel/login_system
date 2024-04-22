<?php
    session_start();
    if(empty($_SESSION['email'])){
        header('Location: sign_in.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login System</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            width: 100%;
            height: 100vh;
            background: #101010;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        h1{
            color: #f0f0f0;
            font-size: 48px;
        }

        p{
            color: #00ff00;
            font-size: 16px;
        }

        a{
            text-decoration: none;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 600;
            color: #101010;
            background: #f0f0f0;
            padding: 5px 10px;
            border-radius: 15px;
            gap: 5px;   
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>

    <p>Sign in success!</p>

    <a href="sign_out.php">
        <i class='bx bx-log-out'></i>
        Sign out
    </a>
</body>
</html>