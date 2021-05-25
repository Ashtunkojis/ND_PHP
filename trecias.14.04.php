<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND 03</title>
    <link rel="stylesheet" href="./trecias.css">
</head>
<body>
<div>
<h2>Pirma uzduotis</h2>
<!-- Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
 -->
<?php 
$y = 50; 
for ($x = 1; $x <= 400; $x++) {
?>
<div style = "display: inline-block;">*</div>
<?php 
    if ($x == $y){
    echo '<br>';
    $y += 50;
    }
}
echo '------------------------------------------------------------------------------------------------------------------------------------------------------------------------------';
?>
<div>
<h2>Antra uzduotis</h2>
<!-- Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos. -->
<?php 
$randN;
$bigger = 0;
for ($x = 1; $x <= 500; $x++) {  
    $randN = rand(0, 300);
    if ($randN > 275) {
        echo '<div style = "color: red; display: inline-block;">' . $randN .'</div>' . " ";
    } else {
        echo '<div style = "display: inline-block;";>' . $randN .'</div>'. " ";
    }
    if ($randN > 150){
        $bigger++;
    }
}
?>
<br>
<br> Skaiciu didesniu nei 150 yra <b> <?php echo $bigger; ?> </b>
<br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</div>
<div>
<h2> Trecia uzduotis</h2>
<!-- Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. -->
<?php 
$until = rand(3000, 4000);
for ( $i = 0; $i <= $until; $i++){
    if ($i % 77 == 0){
        echo '<div style = "display: inline-block;";>'  . ", ". $i .'</div>';
    }

}
?>
<br>
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</div>
<h2> Ketvirta ir penkta uzduotys</h2>  
<div style="line-height: 7px">  
<!-- Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis. -->
<?php
$j = 100; 
$k = 1;
$l = 100;
for ($i = 1; $i <= 10000; $i++) {
    if ($i == $k){
        echo '<div style = "color: red; display: inline-block;">'.'*'.'</div>';
        $k += 101;
    } elseif ($i == $l){
        echo '<div style = "color: red; display: inline-block;">'.'*'.'</div>';
        $l += 99;
    } else echo '<div style = "display: inline-block;">*</div>';
    if ($i == $j){
    echo '<br>';
    $j += 100;
    }
}
?>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</div>
<h2>Sesta uzduotis</h2>
<div>
<?php


$herbasCount = 0;
echo "<br>"."A uzduotis: "."</br>";
do {
    $coin = rand(0,1);
     if ($coin == 0){
        echo '<div style = "display: inline-block;">H</div>';
    }
    else {
        echo '<div style = "display: inline-block;">S</div>';
    }
} while ($coin != 0);
echo "<br>"."B uzduotis: "."</br>";
do {

    $coin = rand(0,1);
      if ($coin == 0){
        echo '<div style = "display: inline-block;">H</div>';
        $herbasCount++;
    }
    else {
        echo '<div style = "display: inline-block;">S</div>';
    }
} while ($herbasCount != 3);
echo "<br>"."C uzduotis: "."</br>";
$prevToss;
$herbasInRow = 0;
do {
    $coin = rand(0,1);
      if ($coin == 0){
        echo '<div style = "display: inline-block;">H</div>';
        $prevToss = 0;
        if ($prevToss == 0){
            $herbasInRow++;
        }
        
    }
    else {
        echo '<div style = "display: inline-block;">S</div>';
        $prevToss = 1;
        if ($prevToss == 1){
            $herbasInRow = 0;
        }
    }
} while ($herbasInRow != 3);

?>
<br>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</div>
<h2>Septinta uzduotis</h2>
<!-- Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
 -->
<?php
    $PetrasTotal = 0;
    $KazysTotal = 0;
    $winner;
while ($KazysTotal <= 222 && $PetrasTotal <= 222) {
    $PetrasPts = rand(10, 20);
    $PetrasTotal += $PetrasPts;
    $KazysPts = rand(5, 25);
    $KazysTotal += $KazysPts;
    if ($PetrasTotal > $KazysTotal) {
        $winner = 'Petras';
    } else {
        $winner = 'Kazys';
    }
} 

echo "<br>". "Petras surinko: " . $PetrasTotal . " Kazys surinko: " . $KazysTotal . " Partija laimejo: " . $winner . "</br>";

?>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<H2>Astunta uzduotis</H2>
<div>
<?php


?>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<H2>Devinta uzduotis</H2>
<?php
$time1 = microtime();
for ($i = 0; $i <= 1000000; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$time2 = microtime();
$time3 = microtime();
for ($i = 0; $i <= 1000000; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$time4 = microtime();


echo "<br>"."Skaiciavimas su dvigubom kabutem uztruko: " . ($time2 - $time1) . " micro sek, Skaiciavimas su viengubom kabutem uztruko: " . ($time4 - $time3) . " micro sek."."</br>";

?>
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<h2>Desimta uzduotis</h2>
<?php
$usedNails1 = 0;
$nailLenght = 850;
$nailDepht = 0;
$hits1 = 0;
$hitsMissed = 0;
$hitsHit = 0;
$hit;

// Penki vinys mazais smugiais
do {
    do {
    $nailDepht += rand(5, 20);
    $hits1++;
    } while ($nailDepht <= $nailLenght);
    $usedNails1++;
} while ($usedNails1 != 5);

// // Penki vinys dideliais smugiais
do {

    do {
    $nailDepht += rand(20, 30);
    } while ($nailDepht <= $nailLenght);
    $usedNails2++;
} while ($usedNails2 != 5);

echo $hits1;
// echo "<br>" . $hits2;
?>
</div>
</body>
</html>