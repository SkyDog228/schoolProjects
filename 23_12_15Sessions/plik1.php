<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ciasteczka</h2>
    <?php
        if(!isset($_COOKIE['ciastko'])){
            setcookie('ciastko', 1, time()+3600*24);
            setcookie('timer', time(), time()+3600*24);
            echo $_COOKIE['ciastko']."<br>";
            echo $_COOKIE['timer'];
        }
        else{
            if(time() - $_COOKIE['timer'] >= 1){
                setcookie('ciastko', $_COOKIE['ciastko'] + 1, time()+3600*24);
                setcookie('timer', time(), time()+3600*24);
            }
            echo $_COOKIE['ciastko']."<br>";
            echo $_COOKIE['timer'];
        }
        
        

    ?>
    
</body>
</html>