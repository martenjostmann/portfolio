<?php

$name = "Undefined name";

if(isset($_POST['firstname'] && (isset($_POST['surname'] && (isset($_POST['email'] && (isset($_POST['message'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

$to_email = 'marten.jostmann@gmail.com';
$subject = 'Mail subject';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: Biloo <noreply@ydomain.com>';

mail($to_email, $subject, $message, implode("\r\n", $headers));

?>
