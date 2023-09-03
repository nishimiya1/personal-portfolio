<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include 'index.html';
    if(isset($_POST['submit']) && $_POST['submit'] !=''){
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
           
            ?>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Message Sent'
                });

            </script>
            <?php
        }
    }
   
?>