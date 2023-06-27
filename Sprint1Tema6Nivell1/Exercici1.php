<?php

/* - Exercici 1

Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). 
El formulari ha de tenir com a action un document PHP. 
El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari 
mitjançant variables superglobals. */

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "Name: ".$name.'<br>';
echo "Age: ".$age.'<br>';
echo "e-mail: ".$email.'<br>';
echo "Subject: ".$subject.'<br>';
echo "Message: ".$message.'<br>';

?>