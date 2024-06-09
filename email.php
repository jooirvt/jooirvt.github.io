<?php
if(isset($_POST['submit'])){
    $to = "jokoirvantoo@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $body= $_POST['isi'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>