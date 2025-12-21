<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $low = $_POST['low'];
        $data = $_POST['data'];
        $sdz = $_POST['sdz'];
        $id = mysqli_connect('localhost', 'root', '', 'wedkarstwo22');
        mysqli_query($id, "INSERT INTO zawody_wedkarskie(zawody_wedkarskie.Karty_wedkarskie_id, zawody_wedkarskie.Lowisko_id, zawody_wedkarskie.data_zawodow, zawody_wedkarskie.sedzia) VALUES (0, $low,'$data','$sdz');");
        mysqli_close($id);
    ?>
</body>
</html>