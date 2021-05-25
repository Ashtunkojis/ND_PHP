<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>05 Funkcijos</title>
</head>
<body>
<h2>Pirma uzduotis</h2>
<!-- Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; -->
<?php

function first($text){
   echo '<h1>'.$text.'</h1>';
}

first('testas');
echo "<br>";
echo  "-------------------------------------------------------------------------------------------------------";
?>
<h2> Antra uzduotis</h2>
<?php
// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
function second($text, int $tagNumb){
    echo '<h'. $tagNumb.'>'.$text.'</h'. $tagNumb.'>';
}
second('testas2', 5);
echo "<br>";
echo  "-------------------------------------------------------------------------------------------------------";
?>
<h2>Trecia uzduotis</h2>
<?php
// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();

$string = md5(time());

function countLetters($matches) {
return "<h1>".$matches ."</h1>";
}
$input = $string;
$pattern = '!\d+!';
print_r(preg_replace_callback($pattern, function ($matches) {
return countLetters($matches[0]);
}, $input));



echo "<br>";
echo  "-------------------------------------------------------------------------------------------------------";
?>
<h2>Ketvirta uzduotis</h2>
<?php
// function fourth(int $numb){
//     if($numb == intval($numb)) {
//         static $divider = 2;
//         static $counter = 0;
//         while ($numb - 1 != $divider) {
//             if ($numb % $divider == 0){
//             $counter++;
//             }
//             $divider++;
//         } 
//     return $counter;
//     } else {
//     echo 'Argumentas nera sveikas numeris';
//     }
// }
function be_liekanu($arg){

    if($arg === intval($arg)) {

        $count = 0;

        for ($i=2; $i < $arg; $i++) { 

        if($arg % $i === 0){

             $count++;

        }

    }

     return $count;

    } else {

    return '<br>'. 'not whole number';

    }       

}
echo be_liekanu(1000);
echo "<br>";
echo  "-------------------------------------------------------------------------------------------------------";
?>
<h2>Penkta uzduotis</h2>
<?php
// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo '<pre>';
$a5 = [];

for ($i=0; $i<100; $i++){
    $a5[$i] = rand(33, 77);
}

usort($a5, function ($a, $b){
    return be_liekanu($a) <=> be_liekanu($b);
});
print_r($a5);
?>
<h2>Sesta uzduotis</h2>
<?php
$a6 = [];
// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
for ($i=0; $i<100; $i++){
    $a6[$i] = rand(333, 777);
    if (be_liekanu($a6[$i]) == 0){
    unset($a6[$i]);
    }
}
print_r($a6);
?>
<h2>Septinta uzduotis</h2>
<?php
// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

$a7 = [];
$times = rand(10, 30);
$a7 = generateArr($a7, $times);

function generateArr($arr, $times){
   $lenght = rand(10, 20);
   for ($i = 0; $i < $lenght - 1; $i++){
        $arr[] = rand(10, 20);
   }
   if ($times > 0){
       $arr[] = generateArr([], $times-1);
   } else {
       $arr[] = 0;
   }
   return $arr;
}
print_r($a7);


?>
<h2>Astunta uzduotis</h2>
<?php
// Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
$sum8 = 0;

function countSum($arr, $arrayTimes){
    $sum = 0;
    for ($i = 0; $i < $arrayTimes; $i++) {
        foreach ($arr as $key => $value){
        if (!is_array($value)){
            $sum += $value;
        }
    }
    }
    return $sum;
}

echo countSum($a7, $times);
?>
<h2>Desimta uzduotis</h2>
<?php
// Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
$a10 = [];
$sum10 = 0;
$aver10;

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $a10[$i][$j] = rand(1, 100);
    }
}

function suma ($array, $sum, $count) {
    $count = 0;
foreach ($arrayu as $key => $value) {
    foreach ($value as $key1 => $value1){
        if (be_liekanu($array[$key][$key1] == 0))
        $sum10 += $value1;
        $count++;
    }
}
    return $sum;
    return $count; 
}
function average($sum, $divider){
    $average = $sum / $divider;
    return $average;
}

function smallest($array){
    $min = 3;
    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $value1){
            if ($array[$key][$key1] < $min)
                $min = $value1;
        }
    }
    return array_search($min, $array);
    
    
}


print_r($a10);
echo smallest($a10);
// echo '<br>' . $sum10;
// echo '<br>' . 
// echo '<br>' . $aver10;

?>
</body>
</html>