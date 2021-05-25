<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->



<?php

// if (isset($_GET['color'])) {
//     echo "<body style=\"background-color:#" . $_GET['color'] ."\"
// </body>";
// }
// elseif($_GET['color'] == 'ff1234'){
//     echo '<body style="background-color:ff1234;"></body>';
// }
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    
} 
//elseif (!isset($_GET['color'])) {
//     echo 'Nieko nesuvedei';
// 

// } else
//     echo 'Spalva nesuvesta!';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web 02 ir 03</title>
</head>
<body style = "background-color:#<?= $color ?>;">
    <!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
    <!-- <a style = " color: black;" href="?color=1">Grey</a> -->
    <p> Color send form</p>
    <form> 
    <input type="text" name="color" placeholder="pvz ff1234">
    <button type="submit" name="send">Send</button>
    </form>
    
</body>
</html>