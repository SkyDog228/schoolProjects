<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Plik jest przesłany</h2>
    <?php
        $pliki = $_FILES['plik'];
        for( $i = 0; $i < count($pliki['name']); $i++){
            if($pliki['type'][$i] == "application/pdf") move_uploaded_file($pliki["tmp_name"][$i], "odczyt/".$pliki["name"][$i]); 
        }
    ?>
</body>
</html>