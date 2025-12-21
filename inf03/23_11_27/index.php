<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>
</head>
<body>
    <h2>Wszytkie filmy</h2>
    <ul>
    <?php
        $id = mysqli_connect('localhost', 'root', '', 'dane');
        $zap1 = mysqli_query($id, "SELECT filmy.tytul,filmy.rok, filmy.ocena FROM filmy WHERE filmy.rezyserzy_id = 5;");
        $zap2 = mysqli_query($id, "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko FROM filmy JOIN rezyserzy ON filmy.rezyserzy_id = rezyserzy.id;");
        while($row = mysqli_fetch_assoc($zap2)){
            echo "<li>{$row['id']}. {$row['tytul']}, reżyseria: {$row['imie']} {$row['nazwisko']}</li>";
        }

    ?>
    </ul>
    <form action="" method="post">
        <select name="option" id="">
            <?php
                $zap_sel = mysqli_query($id, "SELECT gatunki.id, gatunki.nazwa FROM gatunki;");
                while($row = mysqli_fetch_assoc($zap_sel)){
                    echo "<option value='{$row['id']}'>{$row['nazwa']}</option>";
                }
            ?>
        </select>
        <input type="submit" value="Send">
    </form>
    <ul>
    <?php
        if(isset($_POST['option'])){
            $kind = $_POST['option'];
            $zap3 =mysqli_query($id, "SELECT filmy.tytul,filmy.rok, filmy.ocena FROM filmy WHERE filmy.gatunki_id = '$kind';");
            while($row = mysqli_fetch_assoc($zap3)){
                echo "<li>{$row['tytul']}, {$row['rok']}, {$row['ocena']}</li>";
            }
        }
        mysqli_close($id);
    ?>
    </ul>
</body>
</html>