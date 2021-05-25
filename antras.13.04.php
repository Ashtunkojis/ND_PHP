<?php 
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

echo "<h2>" . "Pirma uzduotis, surandam trumpesni string" . "</h2>";

$pirmasName = "Christian";
$pirmasSurn = "Bale";

echo "<br>". "Aktoriaus vardas: ". "<b>". $pirmasName .  "</b>". ", ". "aktoriaus pavarde: ". "<b>". $pirmasSurn .  "</b>" ."</br>";
echo "Spausdinam trumpesni: ";
if (strlen($pirmasName) < strlen($pirmasSurn)) {
    echo "<br>". $pirmasName . "</br>";
} else {
    echo "<br>". $pirmasSurn . "</br>";
}
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Antra uzduotis, string didziosiomis ir mazosomis" . "</h2>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$antrasName = "Christian";
$antrasSurn = "Bale";

echo "<br>". "Aktoriaus vardas: ". "<b>". strtoupper($antrasName) .  "</b>". ", ". "aktoriaus pavarde: ". "<b>". strtolower($antrasSurn) .  "</b>" ."</br>";

echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Trecia uzduotis, stringas is pirmuju vardo ir pav raidziu" . "</h2>";

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$treciasName = "Christian";
$treciasSurn = "Bale";

echo "<br>". substr($treciasName, 0, 1) . substr($treciasSurn, 0, 1) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Ketvirta uzduotis, string is triju paskutiniu vardo ir pavardes raidziu" . "</h2>";
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$ketvirtasName = "Christian";
$ketvirtasSurn = "Bale";


echo "<br>". substr($ketvirtasName, -3) . substr($ketvirtasSurn, -3) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Penkta uzduotis, keiciam string simbolius" . "</h2>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$penktas1 = "An American in Paris";
$pattern = "/A/i";
$replace = "*";

echo "<br>". preg_replace($pattern, "*", $penktas1) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Sesta uzduotis, skaiciuojam a ir A" . "</h2>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$sestas1 = "An American in Paris";

echo "<br>" . (substr_count($sestas1, "a") + substr_count($sestas1, "A"))  . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Septinta uzduotis, trinam balses" . "</h2>";
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
$septintas1 = "An American in Paris";
$septintas2 = "Breakfast at Tiffany's";
$septintas3 = "2001: A Space Odyssey";
$septintas4 = "It's a Wonderful Life";
$vows = "#[aeiou\s]+#i";

echo "<br>". "Pradinis pavadinimas: " . "<b>" . $septintas1 . "</b>". " pavadinimas istrynus balses: " . "<b>" .  preg_replace($vows, "", $septintas1) . "</b>". "</br>";
echo "<br>". "Pradinis pavadinimas: " . "<b>" .$septintas2 . "</b>"." pavadinimas istrynus balses: " . "<b>". preg_replace($vows, "", $septintas2) . "</b>". "</br>";
echo "<br>". "Pradinis pavadinimas: " . "<b>" .$septintas3 . "</b>"." pavadinimas istrynus balses: " . "<b>". preg_replace($vows, "", $septintas3) . "</b>". "</br>";
echo "<br>". "Pradinis pavadinimas: " . "<b>" .$septintas4 . "</b>"." pavadinimas istrynus balses: " . "<b>". preg_replace($vows, "", $septintas4) . "</b>". "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Astunta uzduotis, spausdinam epizodo nr" . "</h2>";
// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
$movieName = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9);


echo "<br>" . $movieName . "</br>";
echo "<br>" . "Epizodo nr: " . filter_var($movieName, FILTER_SANITIZE_NUMBER_INT) .  "</br>";
echo  "-------------------------------------------------------------------------------------------------------";

echo "<h2>" . "Devinta uzduotis, ieskom trumpu zodziu" . "</h2>";
// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
$devintas1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$devintas2 = "Tik nereikia gasdinti Pietų Centro, geriant sultis pas save kvartale";
$wordLength = "(\w{6,99})";
$result1 = preg_replace($wordLength, "", $devintas1);
$result2 = preg_replace($wordLength, "", $devintas2);

echo "<br>" . "Pirmame sakinyje trumpu zodziu yra: " .str_word_count($result1) . "</br>";
echo "<br>" . "Antrame sakinyje trumpu zodziu yra: " .str_word_count($result2) . "</br>";
echo  "-------------------------------------------------------------------------------------------------------";


echo "<h2>" . "Desimta uzduotis, generuojam random stringa" . "</h2>";
// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
$letters = "abcdefghijklmnopqrstuvwxyz";
// ismaisom visas abeceles raides ir paliekam tik tris is ju
$randomString = substr(str_shuffle($letters), 23);

echo "<br>" . $randomString . "</br>";

echo  "-------------------------------------------------------------------------------------------------------";
?>