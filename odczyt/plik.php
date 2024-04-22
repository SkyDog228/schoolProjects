<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Odczyt folderu nazwa1</h2>
    <?php
        $odczyt1 = file("dane.txt");
        foreach($odczyt1 as $linia){
            echo "<div>$linia</div>";
        }

    ?>

<h2>FOTKI</h2>
<?php
       
    ?>
</body>
</html>