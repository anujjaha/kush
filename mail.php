<?php
 $to = "anuj_jaha@yahoo.com";
 $subject = "AnuJ Jaha";
 $message = "hello Sir Did you get your mail by Your Id ? ?";
 $from = "sv.2k12@gmail.com";
 $headers = "From:" . $from;
 mail($to,$subject,$message,$headers);
 echo "Mail Sent.";
 ?>