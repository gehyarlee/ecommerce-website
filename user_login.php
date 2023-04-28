<?php
    session_start();
    require('db_connection.php');

    // Get submit loggin data 
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    //print $email.' '.$password;die;
    // Check if the user crendentials are in the database
    $check_credentials_query = "SELECT * FROM user_account WHERE email= '".$email."' AND password='".$password."' ;";
    $data = mysqli_query($con, $check_credentials_query);
    $current_user = mysqli_fetch_assoc($data);
    
    if (empty($current_user)) {
        header('Location:login.php?login=0');
    }else{
        $_SESSION['id'] = $current_user['id'];
        $_SESSION['email'] = $current_user['email'];
        
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
           //print $_SESSION['email'];die;
            header('Location:index.php');
        }
    }
?>