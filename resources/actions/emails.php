<?php
$action = $_GET["action"];
$myText = $_POST["email_form"];

if($action = "save") {
  $targetFolder = "/resources/actions/data.txt";
  file_put_contents($targetFolder."data.txt", $myText);
}
?>  
