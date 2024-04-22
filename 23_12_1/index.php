<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$id = mysqli_connect('localhost', 'root', '', 'biblioteka');
?>
<style>
    table{
        border-collapse: collapse;
        width: 100vw;
    }
    th{
        background-color:floralwhite;
        height: 2vh;
    }
    tr:nth-child(odd){
        background-color:azure;
    }
    tr:nth-child(even){
        background-color:ghostwhite;
    }
    td, th {
        border: 1px solid black;
    }
</style>

<body>
    <h2>Polecamy dzieła autorów:</h2>
    <table>
        <thead>
            <tr>
                <?php
                $zap = mysqli_query($id, "SELECT autorzy.imie, autorzy.nazwisko, ksiazki.tytul FROM autorzy JOIN ksiazki ON ksiazki.id_autor = autorzy.id;");
                $quer = mysqli_fetch_assoc($zap);
                foreach (array_keys($quer) as $key)
                    echo "<th>$key</th>";
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $zap = mysqli_query($id, "SELECT autorzy.imie, autorzy.nazwisko, ksiazki.tytul FROM autorzy JOIN ksiazki ON ksiazki.id_autor = autorzy.id;");
            while ($rowa = mysqli_fetch_assoc($zap)) {
                echo "<tr>";
                foreach ($rowa as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>

    <?php
echo 2^8;
    ?>
</body>

</html>