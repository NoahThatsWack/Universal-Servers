<?php
header("content-type: text/html");
 $path = 'data.txt';
 if (isset($_POST['email_form'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['email_form'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>