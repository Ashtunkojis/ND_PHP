<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->
<?php
$color = 'fff';
if((!empty($_GET)) && (empty($_POST))){
    $color = '00FF00'; //geltona;
    
// } elseif (empty($_GET)) {
//     $color = 'FFD700';
} elseif (!empty($_POST)) {
    $color = 'FFD700';//zalia;
   
} 
// if (empty($_GET)) {
//     $color = 'FFD700';
    
    
// } 
// if (empty($_POST)) {
//     $color = '00FF00';
    
    
// } 
print_r ($_POST);
echo '<br>';
print_r ($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color:#<?= $color ?>;">
<form method = "get"> 
    <!-- <input type="text" name="color" > -->
    <button type="submit" name="get">ZALIAI GET</button>
    <!-- <input type="text" name="color"> -->
    
    </form>
    <form method = "post">
    <button type="submit" name="post">GELTONAI POST</button>
    </form>
<?php
if (!empty($_POST)) {
    // sleep (3);
    header('Location: http://localhost/nd/web_mechanics/07.php');
}
?>
    
</body>
</html>