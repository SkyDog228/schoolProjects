<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $conn = mysqli_connect("localhost","root","","logowanie2tsgr2");
?>
<body>
    <form action="" method="post">
        login: <input type="text" name="login" id="" required> <br>
        hasło: <input type="password" name="password" id="" required><br>
        <input type="submit" value="zaloguj">
    </form>
    <?php
        session_start();
        $isUser = false;
        if(isset($_SESSION["login"])) {
            header('Location:strona1.php');
        }
        if(isset($_POST["login"])){
            $login = $_POST["login"];
            $password = $_POST["password"];
            $res = mysqli_query($conn,"SELECT * FROM users WHERE users.login = '$login' AND users.password = '$password';");
            $isUser = mysqli_num_rows($res) > 0;
            $_SESSION["login"] = $login;
            header('Location:strona1.php');
        }
    ?>
</body>

<?php
    mysqli_close($conn);
?>
</html>