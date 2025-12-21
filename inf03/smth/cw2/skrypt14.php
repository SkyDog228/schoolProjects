<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>


<?php
    $imie = $_GET['imie'];
    $nazw = $_GET['nazwisko'];
    $tel = $_GET['telefon'];
    $uwagi = $_GET['uwagi'];
    if(isset($_GET['rodo'])){
        $rodo = true;
    } 
    else {
        $rodo = false;
    }

    $wzorzecimie = "/^[A-Z][a-z]{2,12}$/";
    $wzorzecnazw = "/^[A-Z][a-z]{2,12}$/";
    $wzorzectel = "/^[0-9]{3}[-]?[0-9]{3}[-]?[0-9]{3}$/";

    $ret = "";

    if(preg_match($wzorzecimie, $imie) && preg_match($wzorzecnazw, $nazw) && preg_match($wzorzectel, $tel) && strlen($uwagi) > 5 && $rodo == true){
        $ret = "<h2>Dziękujemy za przesłanie danych</h2>";
    }
    else {
        $ret = "<h1>Część danych jest błędna</h1>";
    }
    echo $ret;
?>