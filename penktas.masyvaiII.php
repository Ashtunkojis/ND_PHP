<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 Masyvai II</title>
</head>
<?php
echo '<pre>';
?>
<body>
<div>
<div><h2>Pirmas uzduotis</h2></div>
<?php
// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
$a1 [][] = [] ;

for($i = 0;$i < 10; $i++) {
    for ($j = 0;$j < 5; $j++){
        $a1[$i][$j] = rand(5, 25);
    }
}
print_r($a1);
?>
</div>
<div>
<div><h2>Antra uzduotis</h2></div>
<?php
// a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$biggerThan10 = 0;
foreach ($a1 as $key => $value){
    foreach ($value as $key1 => $value1)
        if ($value1 > 10){
            $biggerThan10++;
        }
}
echo '<br>'.'a) Didesniu nei 10 yra: ' . $biggerThan10;

// b) Raskite didžiausio elemento reikšmę;
$biggest = 0;
foreach ($a1 as $key => $value){
    foreach ($value as $key1 => $value1)
        if ($value1 > $biggest) {
            $biggest = $value1;
        }
}
echo '<br>'.'b) Didziausias elementas yra: ' . $biggest;

// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<br>'.'c) Antro lygiop masyvu su vienodais indeksais sumos: ';
$suma = [0, 0, 0, 0, 0];
foreach ($a1 as $key => $value){
    foreach ($value as $key1 => $value1){
        $suma[$key1] += $value1;
    }
}
print_r($suma);

// d) Visus masyvus “pailginkite” iki 7 elementų

foreach ($a1 as $key => $value){
    foreach ($value as $key1 => $value1){
        do {
            $key1++;
            $a1[$key][$key1] = rand(5, 25);
        } while ($key1 > 4 && $key1 < 7 );
    
    }
}
echo '<br>'.'d) Naujas masyvas su 7 elementais: ';
print_r($a1);

// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
$a1_e = [];
foreach ($a1 as $key => $value){
    $sum2[$key] = 0;
    foreach ($value as $key1 => $value1){
        $sum2[$key] += $value1;
    }
    $a1_e += ($sum2);
} 
echo '<br>'.'e) Naujas masyvas iis pries tai buvusio masyvu sumu: ';
print_r($a1_e);
?>
</div>
<div>
<div><h2>Trecia uzduotis</h2></div>
<?php
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$alphabet = range('A', 'Z');  //sukuriam abecele
$a3[][] = []; //tuscias array uzdaviniui
for($i = 0;$i < 10; $i++) { 
    for ($j = 0;$j < rand(2, 20); $j++){ //ciklas su random elementu kiekiu
        $a3[$i][$j] = $alphabet[array_rand($alphabet)]; //paima random raide is alphabeto, pagal indexa, kuris random gaunamas is sugeneruoto alphabeto (rand grazina integer, jis patampa key)
        sort($a3[$i]);
    }
}
print_r($a3);
?>
</div>
<div>
<div><h2>Ketvirta uzduotis</h2></div>
<?php
// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų viršuje.

do {
	$swapped = false;
	for($i = 0, $c = count($a3) - 1; $i < $c; $i++){ 
        if($a3[$i] > $a3[$i+1]){
			list($a3[$i+1], $a3[$i]) = array($a3[$i], $a3[$i+1]);
		    $swapped = true;
			}
		}
} while($swapped);

print_r($a3);
?>
</div>
<div>
<div><h2>Penkta uzduotis</h2></div>
<?php
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

$a5 = [];
$a5_check = [];
do { 
    $user_id = rand(1, 1000000);
    $place_in_row = rand(0, 100);
    if (!in_array($user_id, $a5_check)){
        $a5[sizeof($a5)]['user_id'] = $user_id;
        $a5[sizeof($a5)-1]['place_in_row'] = $place_in_row;
        array_push($a5_check, $user_id);
    }
} while(sizeof($a5) < 30);
print_r($a5);


// =['user_id', 'place_in_row']

// $columns1 = array_column($users, 'user_id');

// array_multisort($columns1, SORT_ASC, $users);

// echo 'Išrūšiuotas masyvas pagal user_id didėjančia tvarka: <br>';

// print_r($users);



// $columns2 = array_column($users, 'place_in_row');

// array_multisort($columns2, SORT_DESC, $users);

// echo 'Išrūšiuotas masyvas pagal place_in_row mažėjančia tvarka: <br>';

// print_r($users);

?>
</div>
<div>
<div><h2> Sesta uzduotis</h2></div>
<?php
$columns1 = array_column($a5, 'user_id');

array_multisort($columns1, SORT_ASC, $a5);

echo 'Išrūšiuotas masyvas pagal user_id didėjančia tvarka: <br>';

print_r($a5);


$columns2 = array_column($a5, 'place_in_row');

array_multisort($columns2, SORT_DESC, $a5);

echo 'Išrūšiuotas masyvas pagal place_in_row mažėjančia tvarka: <br>';

print_r($a5);
?>
</div>
<div>
<div><h2>Septinta uzduotis</h2></div>
<?php



for ($i = 0;$i < 30; $i++){
    for ($j = 1;$j < 3; $j++){
        $randName = '';
        $randSurname = '';
        $randLenght1 = rand(5, 15);
        $randLenght2 = rand(5, 15);
        while (strlen($randName) !== $randLenght1){
            $randLetter = chr(rand(97, 122));
            $randName .= $randLetter;
        }
        while (strlen($randSurname) !== $randLenght2){
            $randLetter = chr(rand(97, 122));
            $randSurname .= $randLetter;
        }
        $a5[$i]['name'] = $randName;
        $a5[$i]['surname'] = $randSurname;
    }
}

print_r($a5);
?>
</div>
<div>
<div><h2>Astunta uzduotis</h2></div>
<?php
$a8 = [];
for($i = 0;$i < 10; $i++) {
    $randN = rand(0, 5);
    echo $randN . ' <br>';
    for($j = 0; $j <= $randN; $j++){
        if ($randN == 0){
        $a8[$i] = rand(0, 10);
        continue;
    }
    $a8[$i][$j] = rand(0, 10);
    }
}
print_r($a8);
?>
</div>
<div>
<div><h2>Devinta uzduotis</h2></div>
<?php
$sum9 = 0;

$a8_1 = [];

// jei verte, o ne array, suskaiciuojam suma ir isimam verte is array, ja idedam i nauja array
foreach ($a8 as $key => $value){
    if (!is_array($value)){
        $sum9 += $value;
        array_push($a8_1, $value);
        unset($a8[$key]);
    } 
}
foreach ($a8 as $key => $value){
    foreach ($value as $key1 => $value1){
        $sum9 += $value1;
    }
}
foreach ($a8 as $key => $value){
    
    array_push($a8_1, array_sum($value));
    
}
sort($a8_1);
echo 'Visu elementu suma: '. $sum9.'<br>';

print_r ($a8_1);
?>
</div>
<div>
<div><h2>Desimta uzduotis</h2></div>
<?php
$a10 = []; 
$symbols = '#%+*@裡';



for($i = 0;$i < 10; $i++) {
    for($j = 0;$j < 10; $j++)
        for ($k = 0;$k < 2; $k++){
        $randomColorPart1 = str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        $randomColorPart2 = str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        $randomColorPart3 = str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        $randomColor = '#' .$randomColorPart1 . $randomColorPart2 . $randomColorPart1;
        $a10[$i][$j]['value'] = substr(str_shuffle($symbols), -1);;
        $a10[$i][$j]['color'] = $randomColor;
    }
}
?> <div>
<?php

$br = 1;
for ($i = 0; $i < 10; $i++){
    for ($j = 0; $j < 10; $j++){
    echo '<div style = "color:'.$a10[$i][$j]['color']  .' ; display: inline-block; height: 20px; width: 20px;">' . $a10[$i][$j]['value'] . '</div>';
    if ($br == $i){
        echo '<br>';
        $br += 1;
    }
    }
}

?>
</div>
<?php
echo '<br>';
print_r($a10);
?>
</div>
</body>
</html>