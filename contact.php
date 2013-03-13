<?php

    $message = "<html><body>";
    $message .= "<h1>Customer: ".$_SERVER['REMOTE_ADDR']."</h1>";
    $message .= $_POST['email']."<br>";
    $message .= $_POST['message']."<br>";
    $message .= "</body></html>";

    $to = "russelltaylor05@gmail.com";
    $subject = "Paleo Contact (".$_SERVER['REMOTE_HOST'].")";
    $from = "someonelse@example.com";

    //$headers = "MIME-Version: 1.0rn"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1rn";
    $headers .= "From:" . $from;

    mail($to,$subject,$message,$headers);

?>