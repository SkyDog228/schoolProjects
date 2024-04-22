<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MySql</h1>
    <?php
    $mysql = mysqli_connect("localhost", "root", "", "kalendarz");
    $zap = "SELECT zadania.dataZadania, zadania.wpis FROM zadania WHERE zadania.miesiac = 'sierpien';";
    var_dump(mysqli_query($mysql, $zap));
    mysqli_close($mysql)  
    ?>
</body>
</html>