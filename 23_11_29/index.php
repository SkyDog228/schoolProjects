<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$id1 = mysqli_connect('localhost', 'root', '', 'biblioteka');
$id2 = mysqli_connect('localhost', 'root', '', 'sklep');
?>

<body>
    <h3>Polecamy działa autorów:</h3>
    <ol>
        <?php
        $zap1 = mysqli_query($id1, "SELECT autorzy.imie, autorzy.nazwisko FROM autorzy ORDER BY autorzy.nazwisko;");
        while ($row = mysqli_fetch_assoc($zap1)) {
            echo "<li>{$row['nazwisko']} {$row['imie']}</li>";
        }
        ?>
    </ol>
    <h2>Sprawdź cenę</h2>
    <form action="" method="post">
        <select name="towar" id="">
            <?php
            $zap2 = mysqli_query($id2, "SELECT towary.id, towary.cena, towary.nazwa FROM towary;");
            while ($row = mysqli_fetch_assoc($zap2)) {
                echo "<option value='{$row['id']}'>{$row['nazwa']}</option>";
            }
            ?>
        </select>
        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if(isset($_POST['towar'])){
        $idTowar = $_POST['towar'];
        $res = mysqli_query($id2, "SELECT towary.cena FROM towary WHERE towary.id = '$idTowar';");
        $res = mysqli_fetch_assoc($res);
        echo "<p>Cena regularna: {$res['cena']}</p>";
        echo "<p>Cena w promocji: ".$res['cena']*0.7."</p>";
    }
    ?>
</body>
<?php
mysqli_close($id1);
mysqli_close($id2);
?>

</html>