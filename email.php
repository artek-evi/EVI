<?php
$destinatario = 'ale@artek.com.ar';

$name = $_POST['name'];
$company = $_POST['company'];
$message = $_POST['message'];
$email = $_POST['email'];

$header = "Contact from EVI";
$mensajede = $company . "\nFrom: " . $name;

mail($destinatario, $name, $sendemail, $header);
echo "<script>alert('Email sent') </script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>"

?>