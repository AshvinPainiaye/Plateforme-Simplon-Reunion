<?php
$to = "gui-l@hotmail.fr";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: simploners974@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
