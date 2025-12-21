<?php
    if(isset($_SESSION['log'])){
        echo "ZALOGOWANY JAKO {$_SESSION['log']}";
        echo "<div> <a href='scrypt_wyloguj.php'>Wyloguj</a></div>";
    }
?>