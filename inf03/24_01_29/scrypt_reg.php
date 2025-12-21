<?php
if (empty($_POST['login']) || empty($_POST['pass']) || empty($_POST['pass2'])   ) {
    header("Location:/ts2/29_01_24/rejestracja.php?error=Wprowadz+poprawne+dane");
    exit();
}
$log = strtolower($_POST['login']);
if ($_POST['pass'] != $_POST['pass2']) {
    header("Location:/ts2/29_01_24/rejestracja.php?error=Hasla+nie+sa+indentyczne");
    exit();
}

if(!preg_match("/^[a-z0-9_]{2,25}$/", $log) || strlen($_POST['pass']) < 4) {
    header("Location:/ts2/29_01_24/rejestracja.php?error=Wprowadz+poprawne+dane");
}

$pass = hash("sha256", $_POST['pass']);
$id = mysqli_connect('localhost', 'root', '', 'ksiegarniagr2');
if (mysqli_query($id, "SELECT hasla.login FROM hasla WHERE hasla.login = '$log';")) {
    header("Location:/ts2/29_01_24/rejestracja.php?error=Login+jest+zajenty");
    exit();
} 
else{
    mysqli_query($id, "INSERT INTO hasla(login, haslo) VALUES ('$log','$pass');");
    header("Location:/ts2/29_01_24/rejestracja.php?error=Jestes+zarejestrowany");
    exit();
}


mysqli_close($id);
?>