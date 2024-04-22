<?php
if (empty($_POST['login']) || empty($_POST['pass'])) {
    header("Location:/ts2/29_01_24/logowanie.php?error=Wprowadz+dane");
    exit();
}

$log = strtolower($_POST['login']);
if(!preg_match("/^[a-z0-9_]{2,25}$/", $log) || strlen($_POST['pass']) < 4) {
    header("Location:/ts2/29_01_24/logowanie.php?error=Wprowadz+poprawne+dane");
}

$pass = hash("sha256", $_POST['pass']);
$id = mysqli_connect('localhost', 'root', '', 'ksiegarniagr2');

if (
    mysqli_query($id, "SELECT hasla.login FROM hasla WHERE hasla.login = '$log' AND hasla.haslo = '$pass';")
) {
    session_start();
    $_SESSION['log'] = $log;
    header("Location:/ts2/29_01_24/index.php");
}
else{
    header("Location:/ts2/29_01_24/logowanie.php?error=Login+albo+haslo+jest+nie+poprawne");
    exit();
}
mysqli_close($id);
?>