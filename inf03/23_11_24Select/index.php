<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nasi czytelnicy:</h1>
    <ol>
    <?php
        $id = mysqli_connect("localhost","root","","biblioteka");
       
        $res = mysqli_query($id, "SELECT czytelnicy.imie, czytelnicy.nazwisko FROM czytelnicy ORDER BY czytelnicy.nazwisko ASC;");
 
        while($row = mysqli_fetch_assoc($res)){
            // echo "<li>{$row['imie']} {$row['nazwisko']}</li>\n";
            var_dump($mysqli_fetch_assoc($res));
            echo '<br>';
        }
 
        mysqli_close($id);
    ?>
    </ol>
</body>
</html>