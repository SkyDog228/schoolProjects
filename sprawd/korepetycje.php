<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 - obsługa formularzy w PHP</title>
</head>
<body>
    <main>
        <article>
            <header>
                <h1>Podsumowanie zamówienia korepetycji</h1>
            </header>

            <?php
                $imie = $_GET['imie'];
                
                $przedmiot = $_GET['przedmiot'];
                $il = $_GET['il'];

                if(isset($_GET['dod'])){
                    $dod = $_GET['dod'];
                }
                
                $data = $_GET['data'];
                $czas = $_GET['czas'];
                $miejsce = $_GET['miejsce'];
                $cena = ['polski' => 50, 'historia' => 60, 'wiedza' => 45];

                echo "<p>Imie: $imie</p>";
                echo "<p>Koszt jednej godziny zajęć: {$cena[$przedmiot]} zł</p>";
                echo "<p>Liczba godzin: $il</p>";
                if(isset($dod)){
                    echo "<p>Dodatkowe notatki: +5</p>";
                }
                echo "<p>Data: $data</p>";
                echo "<p>Czas: $czas</p>";
                echo "<p>Miejsce: $miejsce</p>";
            ?>
            
        </article>
    </main>
    
</body>
</html>