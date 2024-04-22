<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="log">Login</label>
        <input type="text" name="login" id="log"> <br>
        <label for="pas">Password</label>
        <input type="password" name="pas" id="pas"> <br>
        <input type="submit" value="SEND">
    </form>
    <?php
        if(isset($_GET['regOk'])) echo "Data is send";
        if(isset($_GET['dataIsWrong'])) echo "Data is wrong!";
        if(isset($_GET['inUse'])) echo "Login is already in use!";
        if(!isset($_POST['login']) || !isset($_POST['pas'])) return;
        $log = $_POST['login'];
        $log = strtolower($log);
        $wzorzeclog = "/^[a-z0-9_]{2,25}$/";
        $pas = $_POST['pas'];
        if(!preg_match($wzorzeclog, $log) || strlen($pas) < 4) {
            header("location:/ts2/17_11_23/?dataIsWrong");
        }

        $id = mysqli_connect('localhost', 'root', '', 'users17');
        $ile = mysqli_num_rows(mysqli_query($id, "SELECT * FROM dbusers WHERE dbusers.login = '$log';"));
        if($ile > 0){
            header("location:/ts2/17_11_23/?inUse");
        }
        else{
            mysqli_query($id, "INSERT INTO dbusers(dbusers.login, dbusers.password) VALUES ('$log','$pas');");
            mysqli_close($id);
            header("location:/ts2/17_11_23/?regOk");
        }
    ?>
</body>
</html>