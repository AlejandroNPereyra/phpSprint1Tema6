<?php

/* - Exercici 2
Millora l’exercici anterior fent que es guardi l’username en una variable de sessió. 
S’haurà de mostrar l’username per pantalla mitjançant l’accés a aquesta variable de sessió. */

session_start();

$name = $_POST['name'];

$_SESSION['name'] = $name;

$age = $_POST['age'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "Name: ".$name.'<br>';
echo "Age: ".$age.'<br>';
echo "e-mail: ".$email.'<br>';
echo "Subject: ".$subject.'<br>';
echo "Message: ".$message.'<br>';

echo $_SESSION["name"];

?>