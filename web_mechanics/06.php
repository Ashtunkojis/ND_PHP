<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->
<?php

if ((!empty($_GET)) && (empty($_POST))) {
    $color = '00FF00'; //geltona;
} elseif (!empty($_POST)) {
    $color = 'FFD700'; //zalia;
}


// } 
print_r($_POST);
echo '<br>';
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#<?= $color ?>;">
    <form method="get">
        <!-- <input type="text" name="color" > -->
        <button type="submit" name="get">ZALIAI GET</button>
        <!-- <input type="text" name="color"> -->

    </form>
    <form method="post">
        <button type="submit" name="post">GELTONAI POST</button>
    </form>
</body>

</html>