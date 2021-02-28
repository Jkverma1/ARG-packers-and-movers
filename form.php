<?php 
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $firstname = $_POST['first-name'];

        $lastname = $_POST['last-name'];

        $email = $_POST['email'];

        $depcity = $_POST['dep-city'];

        $delcity = $_POST['del-city'];

        $message = $_POST['message'];

        $formcontent="From: $name \n Message: $message";

        $from = 'meeshalsharma164@gmail.com';

        $subject = "quotation information";

        $email_body = "User Name: $firstname $lastname.\n".
                            "User Email: $email.\n".
                                "Departure city: $depcity.\n".
                                    "Delevered city: $delcity.\n".
                                            "User Message: $message.\n";

        $to = "argpackers@gmail.com";

        $headers = "From: $from \r\n";

        $headers .= "reply-to: $email \r\n";

        mail($to, $subject, $email_body, $headers);

        $message_sent = true;

}
}
?>