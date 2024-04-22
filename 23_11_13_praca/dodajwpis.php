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
    <form action="" method="get">
        <textarea name="wpis" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Przesłać">
    </form>
    <?php
        $wzorecwpis = "/^{2-50}$/";
        if(isset($_GET['wpis']) && !preg_match($wzorecwpis, $_GET['wpis'])){
            $wpis = strip_tags($_GET['wpis']);
            $otwWpisy = fopen("wpisy.txt", "a");
            fwrite($otwWpisy, "<p>{$wpis}</p><hr>\n");
            fclose($otwWpisy);
            echo "Dziękuje za przesłanie komentarza <br> <p>Zobacz wszystkie wpisy <a href='./ksiegagosci.php'>Księga</a></p>";
            
        }
        else {
            echo "<p>wpisz komentarz do księgi gości</p>";
        }
    ?>
    <footer>
        <?php include("stopka.html") ?>
    </footer>
    
</body>
</html>