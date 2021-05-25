<?php

$vardas = "Antanas";
$pavarde = "Grazulis";
$gimimo_metai = 1973;
$sie_metai = 2221;
// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
echo "<h2>" . "Pirma uzduotis" . "</h2>";
echo "<br>". "Aš esu ".$vardas ." ". $pavarde. ". Man yra " .$sie_metai - $gimimo_metai. " metai(ų)."."</br>";
echo  "-------------------------------------------------------------------------------------------------------";

// Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$antra1 = rand(0, 4);
$antra2 = rand(0, 4);
$antra3;

if ($antra1 > 0 && $antra2 > 0) {
    if ($antra1 >= $antra2) {
        $antra3 = $antra1 / $antra2;
    } if ($antra1 < $antra2) {
        $antra3 = $antra2 / $antra1;
    }
} else {
    $antra3 = 0;
}
echo "<h2>". "Antra uzduotis" . "</h2>";
echo "<br>". "Padalinus skaicius, gauname: " . number_format($antra3,2) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";
// Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
$trecia1 = rand(0, 25);
$trecia2 = rand(0, 25);
$trecia3 = rand(0, 25);

echo "<h2>". "Trecia uzduotis" . "</h2>";
/*
<?php if(($trecia1 < $trecia2 && $trecia2 < $trecia3) || ($trecia3 < $trecia2 && $trecia2 < $trecia1)): ?>
<br>. $trecia2 . </br>
<?php elseif(($trecia2 < $trecia1 && $trecia1 < $trecia3) || ($trecia3 < $trecia1 $$ $trecia1 < $trecia2)): ?>
<br>. $trecia1 . </br>
<?php else(): ?>
<br>. $trecia3 . </br>
*/
echo "<br>". "Pirmas kintamasis: " . $trecia1 . ", antras kintamasis: " . $trecia2 . ", trecias kintamasis: " . $trecia3 . "</br>";
if (($trecia1 < $trecia2 && $trecia2 < $trecia3) || ($trecia3 < $trecia2 && $trecia2 < $trecia1)) {
    echo "<br>". "Kintamasis turintis vidurine reiksme: " . $trecia2 . "</br>";
} elseif (($trecia2 < $trecia1 && $trecia1 < $trecia3) || ($trecia3 < $trecia1 && $trecia1 < $trecia2)) {
    echo "<br>". "Kintamasis turintis vidurine reiksme: " . $trecia1 . "</br>";
} else {
    echo "<br>". "Kintamasis turintis vidurine reiksme: " . $trecia3 . "</br>";
}
echo  "-------------------------------------------------------------------------------------------------------";

// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "<h2>". "Ketvirta uzduotis" . "</h2>";
echo "<br>". "Gautos trikampio krastines: " . $a .  " ". $b. " ". $c. "</br>";

if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
echo "<br>". "Trikampi galima sudaryti :)"."</br>";
} else {
echo "<br>"."Trikampio sudaryti negalima :("."</br>";
}
echo  "-------------------------------------------------------------------------------------------------------";
// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
echo "<h2>". "Penkta uzduotis" . "</h2>";
$penktas1 = rand(0, 2);
$penktas2 = rand(0, 2);
$penktas3 = rand(0, 2);
$penktas4 = rand(0, 2);
$count0 = 0;
$count1 = 0;
$count2 = 0;
if ($penktas1 == 0){
    $count0++;
} elseif ($penktas1 == 1){
    $count1++;
} else {
    $count2++;
}
if ($penktas2 == 0){
    $count0++;
} elseif ($penktas2 == 1){
    $count1++;
} else {
    $count2++;
}
if ($penktas3 == 0){
    $count0++;
} elseif ($penktas3 == 1){
    $count1++;
} else {
    $count2++;
}
if ($penktas4 == 0){
    $count0++;
} elseif ($penktas4 == 1){
    $count1++;
} else {
    $count2++;
}
echo "<br>". "Gauti skaiciai: "."$penktas1"." ". "$penktas2"." ". "$penktas3". " " ."$penktas4"."</br>";
echo "<br>". "Nuliu yra: "."$count0"." "."vienetu yra: ". "$count1"." ". "dvejetu yra: ". "$count2"."</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>". "Sesta uzduotis" . "</h2>";
// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
$sestas = rand(1, 6);
if ($sestas == 1){
    echo "<h1>".$sestas."</h1>";
} elseif ($sestas == 2) {
    echo "<h2>".$sestas."</h2>";
} elseif ($sestas == 3) {
    echo "<h3>".$sestas."</h3>";
} elseif ($sestas == 4) {
    echo "<h4>".$sestas."</h4>";
} elseif ($sestas == 5) {
    echo "<h5>".$sestas."</h5>";
} elseif ($sestas == 6) {
    echo "<h6>".$sestas."</h6>";
}
echo  "-------------------------------------------------------------------------------------------------------";
// Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
echo "<h2>". "Septinta uzduotis" . "</h2>";
$septintas1 = rand(-10, 10); 
$septintas2 = rand(-10, 10); 
$septintas3 = rand(-10, 10); 

if($septintas1 < 0 ){
    echo "<br style='color:green;'>".$septintas1."</br>";
} elseif ($septintas1 == 0) {
    echo "<br style='color:red;'>".$septintas1."</br>";
} else {
    echo "<br style='color:blue;'>".$septintas1."</br>";
}
if($septintas2 < 0 ){
    echo "<br style='color:green;'>".$septintas2."</br>";
} elseif ($septintas2 == 0) {
    echo "<br style='color:red;'>".$septintas2."</br>";
} else {
    echo "<br style='color:blue;'>".$septintas2."</br>";
}
if($septintas3 < 0 ){
    echo "<br style='color:green;'>".$septintas3."</br>";
} elseif ($septintas3 == 0) {
    echo "<br style='color:red;'>".$septintas3."</br>";
} else {
    echo "<br style='color:blue;'>".$septintas3."</br>";
}
echo  "-------------------------------------------------------------------------------------------------------";
// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
echo "<h2>". "Astunta uzduotis" . "</h2>";
$candle = rand(5, 3000);
$candlePrice;
if ($candle <= 1000){
    $candlePrice = $candle;
} elseif ($candle > 1000){
    $candlePrice = (97 * $candle) / 100;
} elseif ($candle > 2000){
    $candlePrice = (96 * $candle) / 100;
}
echo "<br>". "Pirkta zvakiu: " . $candle . " "."sumoketa: " . $candlePrice. " Eur"."</br>";
echo  "-------------------------------------------------------------------------------------------------------";
// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
echo "<h2>". "Devinta uzduotis" . "</h2>";
$devintas1 = rand(0, 100);
$devintas2 = rand(0, 100);
$devintas3 = rand(0, 100);
$aver1 = ($devintas1 + $devintas2 + $devintas3) / 3;
$tempSum = 0;
$tempCount = 0;
if ( $devintas1 > 10 && $devintas1 < 90) {
    $tempSum  += $devintas1;
    $tempCount++;
}
if ( $devintas2 > 10 && $devintas2 < 90) {
    $tempSum += $devintas2;
    $tempCount++;
}
if ( $devintas3 > 10 && $devintas3 < 90) {
    $tempSum  += $devintas3;
    $tempCount++;
}
if ($tempCount == 0){
    $tempCount++;
}

$aver2 = $tempSum / $tempCount;
echo "<br>" . "Pirmas skaicius: " . "$devintas1" . " antras skaicius: " . $devintas2 . " ". "trecias skaicius: " . $devintas3 . "</br>";
echo "<br>" . "Skaiciu vidurkis: " . number_format($aver1,0) . ", ". "skaiciu vidurkis be mazu ir dideliu skaiciu: " . number_format($aver2,0) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";
echo "<h2>". "Desimta uzduotis" . "</h2>";
// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
$hours1 = rand(0, 23);
$mins1 = rand(0, 59);
$sec1 = rand(0, 59);
$hours2 = $hours1;
$mins2 = $mins1;
$sec2 = $sec1;
$randSec = rand(0, 300);
$randSecTemp = $randSec;

if ($randSec == 60) {
    $mins2++;
} if ($randSec < 60 ){
    $sec2 += $randSec;
} if ($randSec > 60 && $randSec < 120){
    $mins2++;
    $randSec -= 60;
    $sec2 += $randSec;
} if ($randSec == 120) {
    $mins2 += 2;
} if ($randSec > 120 && $randSec < 180){
    $mins2 += 2;
    $randSec -= 120;
    $sec2 += $randSec;
} if ($randSec == 180) {
    $mins2 += 3;
} if ($randSec == 240) {
    $mins2 += 4;
} if ($randSec == 300) {
    $mins2 += 5;
} if ($randSec > 180 && $randSec < 240){
    $mins2 += 3;
    $randSec -= 180;
    $sec2 += $randSec;
} if ($randSec > 240 && $randSec < 300){
    $mins2 += 4;
    $randSec -= 240;
    $sec2 += $randSec;
} if ($sec2 == 60) {
    $mins2++;
    $sec2 = 0;
} if ($mins2 == 60) {
    $hours2++;
    $mins2 = 0;
} if ($hours2 == 24) {
    $hours2 = 0;
} if ($sec2 > 60) {
    $mins2++;
    $sec2 -= 60;
} if ($mins2 > 60) {
    $hours2++;
    $mins2 -= 60;
}

echo "<br>" . "Laikrodis: " . $hours1 . " h " . $mins1 . " min " . $sec1 . " sec" . "</br>";
echo "<br>" . "Papildomas laikas: " . $randSecTemp . " sec". "</br>";
echo "<br>" . "Naujas laikrodis po prideto laiko: " . $hours2 . " h " . $mins2 . " min " . $sec2 . " sec" . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";
?>