<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ile dni miedzy datami</h2>
    <?php
        $data = date("Y-m-d");
        echo $data;
        $data2 =  "2023-11-15";
        $dzis_obj = date_create($data);
        $dzis_obj2 = date_create($data2);
        $roznica = date_diff($dzis_obj2, $dzis_obj);
        var_dump($roznica) ;

        $dni = $roznica -> days;

        echo "<p>ILOSC DNI $dni</p>";
    ?>
</body>
</html>