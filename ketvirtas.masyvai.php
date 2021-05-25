<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 ND masyvai</title>
    <link rel="stylesheet" href="./css/ketvirtas.css">
</head>
<?php
echo '<pre>';
?>
<body>
<div>
<H2>Pirma uzduotis</H2>
<div>
<?php 


// pirmas array su random elementais
$a1 = array();
for($i = 0;$i < 30;$i++) {
    $a1[] = rand(5, 25);
}
print_r($a1);
echo '<br> ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------';
?>
</div>
</div>
<div class="antras">
<h2>Antra uzduotis</h2>
<div>
<?php
$biggerCount = 0;
// skaiciuojam didesnius nei 10
foreach ($a1 as $bigger) {
    if ($bigger > 10){
        $biggerCount++;
    }
}
echo '<br>a) Reiksmiu didesniu nei 10 yra: ' . $biggerCount;
$biggest = 0;
for ($i = 0; $i < 30; $i++) {
    if ($a1[$i] > $biggest){
        $biggest = $a1[$i];
    }
}
// randam didziausia masyve
echo '<br>b) Didziausia reiksme yra: ' . $biggest;
$sum = 0;
for ($i = 0; $i < 30; $i++){
    $sum += $a1[$i];
}
echo '<br>c) Suma yra: ' . $sum;
// naujas arary su reiksmemis - index reiksme;
$a2 = array();
for($i = 0;$i < 30;$i++) {
    $a2[] = $a1[$i] - $i;
}
?>
<div class="antras-d">
<?php echo '<br>d)  ';
print_r($a2); 
?>
</div>
<?php
// pridedam prie a2
for($i = 30;$i < 40;$i++) {
    $a2[$i] = rand(5, 25);
}

?>
<div class="antras-e">
<?php echo '<br>e)  ';
print_r($a2); 

$a2even = array();
$a2odd = array();
for($i = 0; $i < 40; $i++) {
    if ($i % 2 == 0){
        $a2even[] += $a2[$i];
    } else {
        $a2odd[] += $a2[$i];
    }
}
echo '<br>f) Array is poriniu reiksmiu ';
print_r($a2even); 
echo '<br>Array is neporiniu reiksmiu ';
print_r($a2odd);


foreach ($a2even as $key => $value){
    if ($a2even[$key] > 15){
        $a2even[$key] = 0;
    }
    
}
echo '<br>g) Array is poriniu reiksmiu, kai didesni nei 15 pakeisti i 0 ';
print_r($a2even); 
// h uzduotis
foreach ($a2even as $key => $value){
    if ($a2even[$key] > 10){
        echo 'h) Pirmas elementas didesnis uz 10: '. $key;
        break;
    }
    
}
foreach ($a2even as $key){
    if ($key % 2 == 0){
        unset($a2even[$key]);
    }
}
echo '<br>g) Array istrynus porinius indeksus ';
print_r($a2even);

?>

</div>
</div>
<div>
<h2>Trecia uzduotis</h2>
<div>
<?php
// ABC array, trecia uzduotis
$a3 = array();
$Acount = 0;
$Bcount = 0;
$Ccount = 0;
$Dcount = 0;

for($i = 0;$i < 199; $i++) {
    // 1 = A, 2 = B tt
    $raide = rand(1, 4);
    if ($raide == 1){
        $a3[$i] = 'A';
        $Acount++;
    } if ($raide == 2){
        $a3[$i] = 'B';
        $Bcount++;
    } if ($raide == 3) {
        $a3[$i] = 'C';
        $Ccount++;
    } if ($raide == 4) {
        $a3[$i] = 'D';
        $Dcount++;
    }
    
}
echo '<br>'. 'A raidziu: '. $Acount; 
echo '<br>'. 'B raidziu: '. $Bcount; 
echo '<br>'. 'C raidziu: '. $Ccount;
echo '<br>'. 'D raidziu: '. $Dcount;
?>
</div>
</div>
<div>
<h2>Ketvirta uzduotis</h2>
<div>
<?php
sort($a3);
print_r($a3);
?>
</div>
</div>
<div>
<h2>Penkta uzduotis</h2>
<div>
<?php
// penktos uzduoties array
$a5_1 = [];
$a5_2 = [];
$a5_3 = [];
$a5_merged = array();
// pirmas array
for($i = 0;$i < 199; $i++) {
    // 1 = A, 2 = B tt
    $raide = rand(1, 4);
    if ($raide == 1){
        $a5_1[$i] = 'A';
    } if ($raide == 2){
        $a5_1[$i] = 'B';
    
    } if ($raide == 3) {
        $a5_1[$i] = 'C';
  
    } if ($raide == 4) {
        $a5_1[$i] = 'D';

    }
    
}
// antras array
for($i = 0;$i < 199; $i++) {
    // 1 = A, 2 = B tt
    $raide = rand(1, 4);
    if ($raide == 1){
        $a5_2[$i] = 'A';
     
    } if ($raide == 2){
        $a5_2[$i] = 'B';
    
    } if ($raide == 3) {
        $a5_2[$i] = 'C';
  
    } if ($raide == 4) {
        $a5_2[$i] = 'D';

    }
    
}
// trecias array
for($i = 0;$i < 199; $i++) {
    // 1 = A, 2 = B tt
    $raide = rand(1, 4);
    if ($raide == 1){
        $a5_3[$i] = 'A';
     
    } if ($raide == 2){
        $a5_3[$i] = 'B';
    
    } if ($raide == 3) {
        $a5_3[$i] = 'C';
  
    } if ($raide == 4) {
        $a5_3[$i] = 'D';

    }
    
}


// sudedam visas reiksmes i nauja array
foreach ($a5_1 as $key => $value){
    $a5_merged[] = $a5_1[$key] . $a5_2[$key]. $a5_3[$key];
}
// skaiciuojam kiek unikaliu 
echo 'Unikaliu verciu: ' . count(array_unique($a5_merged));


?>
</div>
</div>
<div class="sestas">
<h2>Sesta uzduotis</h2>
<div class="sestas-left">
<?php

// du naujio masyvai
$a6_1 = [];
$a6_2 = [];
$counter6_1 = 0;
$counter6_2 = 0;
for($i = 0;$i <= 999; $i++) {
    // atsitiktine verte sestam uzdaviniui
    $value6 = rand(100, 999);
    if (!in_array($value6, $a6_1)){
        $a6_1[] += $value6;
        $counter6_1++;
        if ($counter6_1 == 100){
            break;
        }
    }
}
for($i = 0;$i <= 999; $i++) {
    // atsitiktine verte sestam uzdaviniui
    $value6 = rand(100, 999);
    if (!in_array($value6, $a6_2)){
        $a6_2[] += $value6;
        $counter6_2++;
        // tikrina kiek verciu idedama i nauja array, kai sudeda 100, nutraukia cikla (reikejo daryti su do while)
        if ($counter6_2 == 100){
            break;
        }
    }
}
echo '<b>Pirmas masyvas</b> <br>';
print_r($a6_1);
?>
</div>

<div class="sestas-right">
<?php
echo '<b>Antras masyvas</b>';
echo '<br>';
print_r($a6_2);
?>
</div>

</div>
<div>
<h2> Septinta uzduotis</h2>
<div>
<?php
$a7 = [];
foreach ($a6_1 as $key => $value){
    // einam per cikla, jei vertes pirmame cikle nera antrame cikle, prie naujojo ciklo pridedame pirmojo ciklo verte
    if (!in_array($value, $a6_2)){
        $a7[] += $a6_1[$key];
    }
}
print_r($a7);

?>
</div>
</div>
<div>
<h2>Astunta uzduotis</h2>
<div>
<?php
$a8 = [];
foreach ($a6_1 as $key => $value){
    if (in_array($value, $a6_2)){
        $a8[] += $a6_1[$key];
    }
}
foreach ($a6_2 as $key => $value){
    if (in_array($value, $a6_1)){
        $a8[] += $a6_2[$key];
    } 
}
print_r($a8);
?>
</div>
</div>
<div>
<h2>Devinta uzduotis</h2>
<div>
<?php
$a9 = [];

foreach ($a6_2 as $key => $value){
    $a9[$a6_1[$key]] = $value;
}
print_r($a9);
?>
</div>
</div>
<div>
<h2>Desimta uzduotis</h2>
<div>
<?php
$a10 = [];
$a10 = [0 => rand(0, 25), 1 => rand(0,25)];
for ($i = 2;$i <= 9; $i++){
    $a10[$i] = $a10[$i-2] + $a10[$i-1];
}
print_r($a10);

?>
</div>
</div>
</body>
</html>