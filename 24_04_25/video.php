<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Video On Demand</title>
</head>

<body>
    <header>
        <div class="lewy">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </div>
        <div class="prawy">
            <table>
                <thead>
                    <tr>
                        <th>Kryminal</th>
                        <th>Horror</th>
                        <th>Przygodowy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20</td>
                        <td>30</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </header>
    <main>
        <div class="polecamy">
            <h3>Polecamy</h3>
            <div class="cont_filmy">
                <?php
                $id = mysqli_connect('localhost', 'root', '', 'dane3');
                $q = mysqli_query($id, "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id = 18 OR id = 22 OR id = 23 OR id = 25;");
                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<div class='film'>
                            <h4>{$row['id']}.{$row['nazwa']}</h4>
                            <img src='{$row['zdjecie']}' alt='film'> <br>
                            <p>{$row['opis']}</p>
                        </div>";
                }
                mysqli_close($id);
                ?>
            </div>
        </div>
        <div class="filmy_fantastyczne">
            <h3>Filmy fantastyczne</h3>
            <div class="cont_filmy">
            <?php
                $id = mysqli_connect('localhost', 'root', '', 'dane3');
                $q = mysqli_query($id, "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;");
                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<div class='film'>
                            <h4>{$row['id']}.{$row['nazwa']}</h4>
                            <img src='{$row['zdjecie']}' alt='film'> <br>
                            <p>{$row['opis']}</p>
                        </div>";
                }
                mysqli_close($id);
                ?>
            </div>
        </div>
    </main>
    <footer>
        <form action="" method="post">
            <label for="usun">Usuń film nr.: </label>
            <input type="number" name="usun" id="usun">
            <input type="submit" value="Usuń film">
        </form>
        <?php
            if(!empty($_POST['usun'])){
                $id = mysqli_connect('localhost', 'root', '', 'dane3'); 
                mysqli_query($id, "DELETE FROM produkty WHERE id = {$_POST['usun']};");
            }
        ?>
        Stronę wykonał: 00000000000
    </footer>
</body>

</html>