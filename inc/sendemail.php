<?php



    $to = "khamuqbil@gmail.com";

    $from = $_REQUEST['email'];

    $name = $_REQUEST['name'];

    $headers = "From: $from";

    $subject = "You have a message from your wibsite";



    $fields = array();

    $fields{"Fname"}    = "First Name";

    $fields{"email"}    = "Email";

    $fields{"subject"}  = "Subject";

    $fields{"message"}   = "Message";





    $body = "Here is the message you got:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }



    $send = mail($to, $subject, $body, $headers);



?>

