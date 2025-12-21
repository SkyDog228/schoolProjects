<?php
    session_start();
    unset($_SESSION['log']);
    session_destroy();
    header("Location:/ts2/29_01_24/index.php");
?>