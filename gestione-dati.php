<?php
// testo dell'utente
$testo = $_POST['paragrafo'];
// lunghezza testo
$lunghezzaTesto = strlen($testo);
$parola = $_POST['parola'];

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
    <p><?php echo $parola ?></p>
</body>
</html>