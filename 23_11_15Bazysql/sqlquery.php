<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "wedkaratwo");

        mysqli_query($id, "INSERT INTO zawody_wedkarskie 
        (zawody_wedkarskie.Karty_wedkarskie_id,
         zawody_wedkarskie.Lowisko_id,
         zawody_wedkarskie.data_zawodow,
         zawody_wedkarskie.sedzia)
         VALUES(2, 4, '2021-09-28', 'Andrzej Nowak');");

        mysqli_query($id, "SELECT
        zawody_wedkarskie.id,
        zawody_wedkarskie.data_zawodow
        FROM
        zawody_wedkarskie
        WHERE
        zawody_wedkarskie.sedzia = 'Krzysztof Dobrowolski';");

        mysqli_query($id, "");
        
        mysqli_query($id, "");

        mysqli_close($id);
    ?>
</body>
</html>