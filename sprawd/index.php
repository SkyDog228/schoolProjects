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
                <h1>Zamów korepetycje online</h1>
            </header>
            <form action="./korepetycje.php" method="get">
                <label for="imie">Imie</label>
                <input type="text" name="imie" id="imie" require> <br>
                <select name = "przedmiot" require>
                    <option value="50">50zł Język polski</option>
                    <option value="historia">60zł Historia</option>
                    <option value="wiedza"> 45zł Wiedza o społeczeństwie</option>
                </select> <br>
                <label for="il">Ilość lekcij</label>
                <input type="number" name="il" id="il" require> <br>
                <label for="dod">Dodatkowe notatki +5zł</label>
                <input type="checkbox" name="dod" id="dod"><br>
                <label for="data">Data</label>
                <input type="date" name="data" id="data"> <br>
                <label for="czas">Czas</label>
                <input type="time" name="czas" id="czas"> <br>
                Zajęcia u Malwiny<input type="radio" name = "miejsce" value="zajęcia u malwiny" id="miejsce"> <br>
                Zajęcia u ucznia<input type="radio" name = "miejsce" value="zajęcia u ucznia" id="miejsce"> <br>
                Zajęcia zdalne<input type="radio" name = "miejsce" value="zajęcia zdalne" id="miejsce"> <br>

                <input type="submit" value="Go">

            </form>
        </article>
    </main>
    
</body>
</html>