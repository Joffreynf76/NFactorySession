<?php
$message = "";

$message .= "Nom :";
$message .= $_SESSION['Nom'];
$message .= "<br>";
$message .= "Prenom :";
$message .= $_SESSION['Prenom'];
$message .= "<br>";
$message .= "Age :";
$message .= $_SESSION['age'];
$message .= "<br>";

echo($message);

