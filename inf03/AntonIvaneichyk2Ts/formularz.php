<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dane osobowe</title>
</head>
<body>
    <header>
        <h1>Dane osobowe pracowników</h1>
    </header>
    <main>
        <div class="lewy">
            <ol>
                <li><a href="./index.php">Wyświetl dane </a></li>
                <li><a href="./formularz.php">Wpisz dane</a></li>
            </ol>
        </div>
        <div class="prawy">
            <h2>Podaj dane</h2>
            <form action="" method="post">
                <label for="nazwisko">Nazwisko</label><br>
                <input type="text" name="nazwisko" id="nazw"><br>
                <label for="imie">Imię</label><br>
                <input type="text" name="imie" id="imie"><br>
                <label for="pesel">PESEL</label><br>
                <input type="text" name="pesel" id="pesel"><br> <br>
                <input type="submit" value="Sprawdź i zapisz">

                <?php
                $id = mysqli_connect('localhost', 'root', '', 'firma');

                
                if(empty($_post['nazwisko'])){
                    echo "brak nazwiska";
                } else
                if(empty($_post['imie'])){
                    echo "brak imienia";
                } else 
                if(empty($_post['PESEL'])){
                    echo "brak numeru PESEL";
                } else {
                    $nazw = $_post['nazwisko'];
                    $im = $_post['imie'];
                    $pesel = $_POST['PESEL'];
                    // $cyfr = [1,3,7,9,1,3,7,9,1,3];
                    // $sum = 0;
                    // for($i=0; $i<strlen($pesel); $i++){
                    //     $sum = $sum + $_POST['PESEL'];
                    // }
                    mysqli_query($id, "INSERT INTO pracownicy(nazwisko, imie, PESEL) VALUES ('$nazw', '$im', '$pesel');");
                    echo "Zapisuję do bazy $nazw $im $pesel";
                }


                
                
                mysqli_close($id);
            ?>
            </form>
        </div>
    </main>
    <footer>
        <h5>AUTOR strony: Anton Ivaneichyk</h5>
    </footer>
</body>
</html>