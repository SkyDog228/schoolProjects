<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <?php include("menu.html") ?>
    </nav>
    <main>
        <br>
       <?php
            $folder = opendir("pdf");
            $n = readdir($folder);
            $n = readdir($folder);
            while($n = readdir($folder)){
                $name = explode(".", $n)[0];
                echo "<a href='pdf/$n'>$name</a> <br>";
            }
       ?>
    </main>
    <footer>
        <?php include("stopka.html")?>
    </footer>
</body>
</html>