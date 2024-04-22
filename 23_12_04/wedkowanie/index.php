<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
$id = mysqli_connect('localhost', 'root', '', 'wedkowanie');
$zap = mysqli_query($id, "SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia = 1;");
?>

<body>
    <table>
        <thead>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($zap)) {
                echo "<tr>";
                foreach ($row as $data) {
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>