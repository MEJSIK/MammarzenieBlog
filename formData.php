<?php 

// $name=$_POST['name'];
// $email=$_POST['email'];
// $msg=$_POST['msg'];

$name="bartek";
$email="bartlomiej.walasik@miggroup.com";
$msg="hello";
$headers[] = 'Content-type: text/html; charset=utf-8';
    // send email
    mail("bartlomiej.walasik@miggroup.com",$name." - Quiz SizeerApp - ".$email, $msg,implode("\r\n", $headers));

?>