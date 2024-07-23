<?php
// testo dell'utente
$testo = $_POST['paragrafo'];
// parola da cambiare
$parola = $_POST['parola'];
// lunghezza testo
$lunghezzaTesto = strlen($testo);
// testo nuovo con parola da cambiare
$testoNuovo = str_replace($parola, '***', $testo);
$lunghezzaTestoNuovo = strlen($testoNuovo)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $testo ?></p>
    <p><?php echo $lunghezzaTesto ?></p>
    <p><?php echo $testoNuovo ?></p>
    <p><?php echo $lunghezzaTestoNuovo ?></p>
</body>
</html>