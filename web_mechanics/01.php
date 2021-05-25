<?php

$color = !isset($_GET['color']) || 1 ==$_GET['color'] ? 'grey' : 'orange';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web 01</title>
</head>
<body style = "background-color:<?= $color ?>;">
    <!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
    <a style = " color: black;" href="?color=1">Grey</a>
    <a style = " color: black;" href="?color=2">Orange</a>


</body>
</html>