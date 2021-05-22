<?php
/* watch the video for detailed instructions */
$to = "7904524980@email.uscc.net";
$from = "innovationtechnologiespvtltd@gmail.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
echo mail($to, '', $message, $headers);

?>
