<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function isUserExist($login, $id){
            return mysqli_num_rows(mysqli_query($id, "SELECT * FROM uzytkownicy WHERE uzytkownicy.login = '$login';")) > 0;
        }
        function checkCreds($input, $id){
            if(!isset($_POST['log']) || !isset($_POST['pas']) || !isset($_POST['ppas'])) return 1;
            $login = strtolower($input['log']);
            $haslo = $input['pas'];
            $phaslo = $input['ppas'];
            if(!preg_match("/^[a-zA-Z0-9]{5,50}$/", $login)) return 2;
            if(!preg_match("/^[a-zA-Z0-9_#%]{5,50}$/", $haslo)) return 3;
            if($haslo != $phaslo) return 4;
            if(isUserExist($login, $id)) return 5;
            return 0;
        }
    ?>
    <h2>Zapisz się</h2>
    <form action="" method="post">
        <label for="log">Login</label>
        <input type="text" name="log" id="log" required value="<?php if(isset($_POST['log'])) echo $_POST['log'] ?>"><br>
        <label for="pas">Password</label>
        <input type="text" name="pas" id="pas" required value="<?php if(isset($_POST['pas'])) echo $_POST['pas'] ?>"><br>
        <label for="ppas">Repeat password</label>
        <input type="text" name="ppas" id="ppas" required value="<?php if(isset($_POST['ppas'])) echo $_POST['ppas'] ?>"><br>
        <input type="submit" value="Send">
    </form>
    <?php
        $id = mysqli_connect('localhost', 'root', '', 'psy');

        $error_code = ['OK', 'Wpisz dane!', 'Błędny login!', 'Błędne hasło!', 'Hasła nie są indetyczne!', 'Taki użytkowik już istmieje!'];

        $code = checkCreds($_POST, $id);

        echo "<p>$error_code[$code]</p>";

        if($code == 0){
            $login = $_POST['log'];
            $haslo = hash("sha256", $_POST['pas']);
            mysqli_query($id, "INSERT INTO uzytkownicy(uzytkownicy.login, uzytkownicy.haslo) VALUES ('$login','$haslo');");
            echo "Dane są wyslane";
        }
        
        mysqli_close($id);
    ?>
</body>
</html>