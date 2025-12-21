<!DOCTYPE html>
<html lang="plz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <?php
    $id = mysqli_connect('localhost', 'root', '', 'egzamin');
    ?>
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <div class="bloki">
        <div class="lewy">
            <form action="" method="post">
                <select name="select" id="">
                    <option value="1">Bramkarze</option>
                    <option value="2">Obrońcy</option>
                    <option value="3">Pomocnicy</option>
                    <option value="4">Napastnicy</option>
                </select>
                <input type="submit" value="Zobacz">
            </form>
            <img src="zad2.png" alt="piłka">
            <p>Autor:00000000000</p>
        </div>
        <div class="prawy">
            <ol>
                <?php
                //skrypt 1
                if (isset($_POST['select'])) {
                    $select = $_POST['select'];
                    $zap = mysqli_query($id, "SELECT imie, nazwisko FROM zawodnik WHERE zawodnik.pozycja_id = '$select';");
                    while ($row = mysqli_fetch_assoc($zap)) {
                        echo "<li>{$row['imie']} {$row['nazwisko']}</li>";
                    }
                }
                ?>
            </ol>
        </div>
    </div>
    <main>
        <h3>Liga mistrzów</h3>
    </main>
    <div class="liga">
        <?php
        //skrypt 2  
        $q = mysqli_query($id, "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;");
        while($row = mysqli_fetch_assoc($q)){
            echo "<div class='info'>
            <h2>{$row['zespol']}</h2>
            <h1>{$row['punkty']}</h1>
            <p>grupa: {$row['grupa']}</p>
            </div>";
        }
        
        ?>
    </div>
</body>

</html>