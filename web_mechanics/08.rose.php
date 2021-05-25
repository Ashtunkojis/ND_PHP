<!-- Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.  -->
<?php

if(empty($_POST)) {
    header('Location: http://localhost/nd/web_mechanics/08.pink.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
</head>
<body style = "background-color:#ff007f">
<!-- <form method = "post"> 
  
  <button type="submit" name="post">GO TO PINK post</button>

  
</form> -->
</body>
</html>