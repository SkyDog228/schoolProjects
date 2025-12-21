<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = mysqli_connect('Localhost', 'root', '', 'logowanie2tsgr2');
    if (empty($_POST['login']) || empty($_POST['pas']) || empty($_POST['pas2'])) {
        header("Location:rejestracja.php/?error=Wpisz dane!");
        return;
    }
    $log = strtolower($_POST['login']);

    $pas = $_POST['pas'];
    $pas2 = $_POST['pas2'];

    if ($pas != $pas2) {
        header("Location:rejestracja.php/?error=hasła się różnią");
        return;
    }

    if(!preg_match("/^[a-z0-9_]{6,20}$/", $log)){
        header("Location:rejestracja.php/?error=login nie pasuje");
        return;
    }
    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $pas)){
        header("Location:rejestracja.php/?error=Hasło nie pasuje");
        //    
        return;
    }
    $dane = mysqli_query($id, "SELECT * FROM users WHERE users.login = '$log'");
    if(mysqli_num_rows($dane) > 0){
        header("Location:rejestracja.php/?error=Login jest zajęty");
        return;
    } 

    mysqli_query($id, "INSERT INTO users(users.login, users.password) VALUES ('$log', '$pas');");
    ?>
    <p>Form is send</p>
</body>

</html>