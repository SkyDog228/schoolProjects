<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <?php 
        include("menu.html");
        echo "<br>";
        ?>
    </nav>
    <main>
        <br>
        <?php if(!count($_FILES)){
            echo "proszę załącz plik pdf";
        ?>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="plik"><br> <br>
                <input type="submit" value="Wyślij"> <br>
            </form>
    
    <?php
    } else{
            $pliki = $_FILES['plik'];
            if($pliki['type'] == "application/pdf") {move_uploaded_file($pliki["tmp_name"], "pdf/{$pliki['name']}"); 
        }
        else {
            echo "<br>błędny rodzaj pliku, proszę załączyć pdf. <br>";
        }
    }
    
    ?>
    </main>
    <footer>
        
        <?php 
        echo "<br>";
        include("stopka.html");
        ?>
    </footer>
</body>
</html>