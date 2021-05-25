<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object ND</title>
</head>
<body>
<?php

include("./Pinigine.php");
include("./Stikline.php");
include("./Grybas.php");
include("./Krepsys.php");


$pinigine = new Pinigine;

$pinigine->ideti(1);
$pinigine->ideti(3);
$pinigine->ideti(10);



echo '<h1>'.'Pirma uzduotis'.'</h1>';
echo '<pre>';
print_r($pinigine);
echo '<br>';
echo 'Pinigines suma: ' .$pinigine->skaiciuoti();
echo '<br>';
echo 'monetos: '. $pinigine->monetos();
echo '<br>';
echo 'Banknotai: '. $pinigine->banknotai();

echo '<br>';
echo '<h1>'.'Antra uzduotis'.'</h1>';

$stikline1 = new Stikline;
$stikline1->setTuris(200);

$stikline2 = new Stikline;
$stikline2->setTuris(150);

$stikline3 = new Stikline;
$stikline3->setTuris(100);

$stikline1->ipilti(5000);

$stikline2->ipilti($stikline1->ispilti());
$stikline3->ipilti($stikline2->ispilti());

print_r($stikline1);
print_r($stikline2);
print_r($stikline3);

echo '<br>';
echo '<h1>'.'Trecia uzduotis'.'</h1>';

$krepsys = new Krepsys;

print_r($krepsys->eitiGrybauti($krepsys, 500));

?>
</body>
</html>