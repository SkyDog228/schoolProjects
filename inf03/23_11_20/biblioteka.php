<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    main{
        display: flex;
        height: 300px;
    }
    div{
        width: 3px;
    }
</style>
<body>
    <main>
        <?php
            for($i = 0; $i<=360; $i++){
                echo "<div style='background-color:hsl($i, 100%, 50%)'></div>";
            }
        ?>
    </main>
    <form action="" method="post">
        <p><label for="log">Imię: </label>
        <input type="text" name="name" id="log" required value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>"><br></p>
        <p><label for="naz">Nazwisko: </label>
        <input type="text" name="naz" id="naz" required value="<?php if(isset($_POST['naz'])) echo $_POST['naz'] ?>"><br></p>
        <p><label for="sym">Symbol: </label>
        <input type="number" name="sym" id="sym" required value="<?php if(isset($_POST['sym'])) echo $_POST['sym'] ?>"><br></p>
        <input type="submit" value="Dodaj">
    </form>

<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $naz = $_POST['naz'];
        $sym = $_POST['sym'];
        $id = mysqli_connect('localhost', 'root', '', 'biblioteka');
        mysqli_query($id, "INSERT INTO czytelnicy (czytelnicy.imie, czytelnicy.nazwisko, czytelnicy.kod) VALUES ('$name', '$naz', '$sym');");
        echo "Czytelnik $name $naz został(a) dodany do bazy danych";
        mysqli_close($id);
    }
    
?>
</body>
</html>