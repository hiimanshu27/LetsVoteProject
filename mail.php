<?php
    session_start();
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "anotherway1230@gmail.com";
    $email=$_SESSION['email'];
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
    echo "$email $fname $lname"; 
    $subject = "Welcome to LETS POLE.";
    $message = "Hello $fname $lname. Thanks for creating account with us lets not forget to vote this elections. Lets get our rights";
    $headers = "From:" . $from;
    mail($email,$subject,$message, $headers);
    echo "The email message was sent.";
    header('location:voteHere.php');
    exit;

?>
