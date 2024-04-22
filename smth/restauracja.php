<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
</head>
<body>
    <h2>Zarezerwuj stolik on-line</h2>
    <form action="#" method="post">
        <label for="data">Data (format rrrr-mm-dd):</label><br>
        <input type="text" name="data" id="data"><br>
        <label for="il">Ile osób? :</label><br>
        <input type="number" name="il" id="il"><br>
        <label for="tel">Twój numer telefonu:</label><br>
        <input type="text" name="tel" id="tel"><br>
        <input type="checkbox" name="zgdz" id="zgdz">
        <label for="zgdz">Zgadzam się na przetwarzanie moich danych osobowych</label><br>
        <input type="reset" value="WYCZYŚĆ"> 
        <input type="submit" value="REZERWUJ">
    </form>
</body>
</html>

<?php
if(!isset($_POST['data']) || !isset($_POST['il']) || !isset($_POST['tel']) || !isset($_POST['zgdz'])){
    echo "witaj, wypełnij formularz";
    return;
}
   
    $data = $_POST['data'];
    
    $ilosc = $_POST['il'];
    
    $datelta = $_POST['tel'];
    
    if (!isset($_POST['zgdz'])){
        echo "Brak zgody rodo";
    } 

    $wzorecdata = "/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/";
    if(!preg_match($wzorecdata, $data)){
        echo "podaj poprawną datę";
    }

    $wzorectel = "/^[0-9]{3}[-]?[0-9]{3}[-]?[0-9]{3}$/";
    if(!preg_match($wzorectel, $tel)){
        echo "błąd w numerze telefonu";
    }
    if(!($il > 0 && $il < 11)){
        echo "Błędna ilość osób";
    }
?>