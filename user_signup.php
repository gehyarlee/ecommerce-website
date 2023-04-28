<?php
    // import database connection file
    require('db_connection.php');

    //get all submitted values
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // get current date and time in timestamp format
    $created = time();

    // submitted values validations
    if (empty($email)) {
	   header("Location:signup.php?error=User is required");
    }
    if (empty($password)) {
	      header("Location:signup.php?error=Registration number is required");
    }
    if (empty($password)) {
	      header("Location:signup.php?error=Registration number is required");
    }


    $unique_email= "SELECT * FROM user_account WHERE email= '".$email."';";
        $data = mysqli_query($con, $unique_email);
           $email_exist = mysqli_fetch_assoc($data);
           //print_r($email_exist);die;
    if (!empty($email_exist)) {
	    $count = count($email_exist);
    }else{
	       $count = 0;
    }

    if($count > 0 ){
 	    $error_message = 'Oops! User with email: '.$email.' already exist';
 	        header("Location:signup.php?error=$error_message");
    }else{
 	    // insert user details in db
 	    $insert_query = "INSERT INTO `user_account` (`email`,`password`,`repeat_passwoed`,`created_date`) VALUES ('$email','$password','$passwoed','$created');";

 	    if(mysqli_query($con, $insert_query)) {
 		    header('Location:signup.php?success=User Account Created');
 	    }else{
 		    header('Location:signup.php?error='.mysqli_error($con));
 	    }
 		    mysqli_close($con);
    }
 
?>