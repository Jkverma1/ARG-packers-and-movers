<?php 

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $name = $_POST['your-name'];

        $service = $_POST['service'];

        $email = $_POST['email'];

        $distance = $_POST['distance'];

        $deliverycity = $_POST['delivery-city'];

        $message = $_POST['message'];

        $formcontent="From: $name \n Message: $message";

        $from = 'meeshalsharma164@gmail.com';

        $subject = "quotation information";

        $email_body = "User Name: $name.\n".
                            "User Email: $email.\n".
                                "phone no: $phone.\n".
                                    "$subject.\n".
                                        "$formcontent\n";

        $to = "argpackers@gmail.com";

        $headers = "From: $from \r\n";

        $headers .= "reply-to: $email \r\n";

        mail($to, $subject, $email_body, $headers);

        $message_sent = true;

}
}
?>