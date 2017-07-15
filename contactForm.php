<?php 
if(isset($_POST['submit'])){
    $to = "Nathalie.Kranich@Gmail.com"; // this is your Email address
    $from = $_POST['e-mail']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject =$_POST['subject'];
    $message = $_POST['message'];

    mail($to,$subject,$message);
    }
?>