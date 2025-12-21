<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <main>
        <div class="lewy">
            <h2>Menu</h2>
            <ol>
                <li><a href="./index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
                <li><a href="./znajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </div>
        <div class="prawy">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="" method="post">
                <label for="nazwa">Podaj nazwę miasta:</label>
                <input type="text" name="nazwa" id="nazwa">
                <input type="submit" value="SPRAWDŹ"> <br>
                <?php
                    $id = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
                    if(isset($_POST['nazwa'])){
                        $nazwa = $_POST['nazwa'];
                        $q = mysqli_query($id, "SELECT nazwa, ulica FROM kwiaciarnie WHERE kwiaciarnie.miasto='$nazwa';");
                        while($row = mysqli_fetch_assoc($q)){
                            echo "<h3>{$row['nazwa']}, {$row['ulica']}</h3>";
                        }
                    }
                ?>
            </form>
            <?php
                
            ?>
        </div>
    </main>
    <footer>
        <p>Stronę opracował:52345325</p>
    </footer>
</body>
</html>