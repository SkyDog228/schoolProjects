<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Organizer: SIERPIEN</h1>
        <form action="" method="post">
            <label for="n">Zapisz wydarzenie:</label>
            <input type="text" name="nazwa" id="n"><br>
            <input type="submit" value="Send">
        </form>
    </header>
    <main>
        <?php
            if(isset($_POST['nazwa'])) $nazwa = $_POST['nazwa'];
            $id = mysqli_connect('localhost', 'root', '', 'kalendarz');
            $zap1 = mysqli_query($id, "SELECT zadania.dataZadania, zadania.wpis FROM zadania WHERE zadania.miesiac = 'sierpien';");
            $zap2 = mysqli_query($id, "UPDATE zadania SET zadania.wpis = 'Wycieczka: Zalew Mietkowski' WHERE zadania.dataZadania = '2020-08-09';"); 

            while($row = mysqli_fetch_assoc($zap1)){
                echo "<div class='blok'>";
                echo "<h3>{$row['dataZadania']}</h3>";
                echo "<p>{$row['wpis']}</p>";
                echo "</div>";
            }
            mysqli_close($id);
        ?>
        
    </main>
</body>
</html>