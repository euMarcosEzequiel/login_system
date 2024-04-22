<?php

    session_start();
    include_once('connection.php');
    
    $btn = filter_input(INPUT_POST, 'btn-login', FILTER_UNSAFE_RAW);

    if($btn){
        $email = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);
        $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

        $query = "select * from user where email = '$email'";
        
        $result = $conn->query($query);

        if($result){
            $row = $result->fetch_assoc();

            if(!empty($row)){
                if($password == $row['password']){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    header('Location: index.php');
                }
                else{
                    $_SESSION['msg'] = "Invalid password!";
                    header('Location: sign_in.php');
                }
            }
            else{
                $_SESSION['msg'] = "Email not registered!";
                header('Location: sign_in.php');
            }
        }
        else{
            header('Location: sign_in.php');
        }
    }
    else{
        header('Location: sign_in.php');
    }
?>