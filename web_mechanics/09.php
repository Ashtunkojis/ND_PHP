<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->
<?php
if (isset($_POST['raidesAr'])) {
    echo "<body style='background-color:white'>";
    echo 'Pasirinkta raidziu: ';
    print_r(count($_POST['raidesAr']));
    echo "<form style= 'display: none';'>";
}
if (!empty($_POST)) {
    echo "<body style='background-color:white'>";
}
print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
</head>

<body style="background-color: green">
    <form method="post">
        <?php
        $rand = rand(3, 10);
        $raide = range('A', 'Z');

        for ($i = 0; $i < $rand; $i++) {
            echo '<input  type="checkbox" id="raide" name = "raidesAr[]" value = ' . $raide[$i] . '>
    <label style = "color : white" for="raide"> ' . $raide[$i] . ' </label><br>';
        }
        ?>
        <button type="submit"> MYGTUKAS POST </button>
    </form>

</body>

</html>