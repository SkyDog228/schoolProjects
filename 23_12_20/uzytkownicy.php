<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
</head>

<body>
    <form action="" method="post">
        Login: <input type="text" name="login" id=""><br>
        Password: <input type="password" name="pass" id=""><br>
        <input type="submit" value="Zaloguj się">
    </form>
    <div class="wizytowka">
        <?php
            $id = mysqli_connect('localhost', 'root', '', 'portal');
            if (!empty($_POST['login']) && !empty($_POST['pass'])) {
                $login = $_POST['login'];
                $pass = sha1($_POST['pass']);
                if (!mysqli_num_rows(mysqli_query($id, "SELECT * FROM uzytkownicy WHERE uzytkownicy.login = '$login';"))) {
                    header("Location:/ts2/20_12_23/uzytkownicy.php/?error=taki użytkownik nie istnieje");
                    mysqli_close($id);
                    return;
                }
                if (!mysqli_num_rows(mysqli_query($id, "SELECT * FROM uzytkownicy WHERE uzytkownicy.login = '$login' AND uzytkownicy.haslo = '$pass';"))) {
                    header("Location:/ts2/20_12_23/uzytkownicy.php/?error=haslo mie jest poprawne");
                    mysqli_close($id);
                    return;
                }
                header("Location:/ts2/20_12_23/uzytkownicy.php/?error=OK");
            }
            mysqli_close($id);
        ?>
    </div>
    <div class="error">
        <?php
            echo $_GET['error'] ?? '';
        ?>

    </div>
</body>

</html>