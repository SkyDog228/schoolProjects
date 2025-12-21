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
    <?php
        session_start();
        if(isset($_SESSION["login"])) {
            echo "<p>Zalogowany</p>";
            echo "<h2>Witaj {$_SESSION['login']} w naszym sklepie</h2>";
            echo "<a href='wylogowanie.php'>wyloguj</a>";
        } else {
            echo "<p>Nie zalogowany</p>";
            echo "<a href='logowanie.php'>logowanie</a>";
        }
    ?>
    <a href="strona1.php">strona 1</a>
    <a href="strona2.php">strona 2</a>
</body>
<?php
    mysqli_close($conn);
?>
</html>