<?php

    if(isset($_POST['email']) && $_POST['email'] !=''){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $userName= $_POST['name'];
            $userEmail= $_POST['email'];
            $userMessage= $_POST['message'];

            $to = "geralddiongzon12@gmail.com";
            $body="";

            $body.="From:".$userName."\r\n";
            $body.="Email:".$userEmail."\r\n";
            $body.="Message:".$userMessage."\r\n";

            mail($to,$userEmail,$body);
        }
    }
?>