<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include("header.php") ?>
    </header>
    <main>
        <nav>
            <?php include("nav.html") ?>
        </nav>

        <div class="blok2">
            <div class="statut">LOGOWANIE</div>
            <div class="tresc">
                <form action="./scrypt_log.php" method="post">
                    <p>Login<input type="text" name="login" id=""></p><br>
                    <p>Password <input type="password" name="pass" id=""></p><br>
                  <p><input type="submit" value="Log"></p>
                </form>
                <?php
                    if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }
                ?>
            </div>
        </div>


    </main>
    <footer>
        <?php include("footer.html") ?>
    </footer>
</body>

</html>