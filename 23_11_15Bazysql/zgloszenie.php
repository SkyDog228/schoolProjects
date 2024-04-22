<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lowisko = $_POST['low'];
        $data = $_POST['data'];
        $sedzia = $_POST['sdz'];

        $id = mysqli_connect("localhost", "root", "", "wedkarstwo");

        mysqli_query($id, "INSERT INTO zawody_wedkarskie 
        (zawody_wedkarskie.Karty_wedkarskie_id,
         zawody_wedkarskie.Lowisko_id,
         zawody_wedkarskie.data_zawodow,
         zawody_wedkarskie.sedzia)
         VALUES(0, '$lowisko', '$data', '$sedzia');");

        mysqli_close($id);
    ?>
</body>
</html>