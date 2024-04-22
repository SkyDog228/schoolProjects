<?php
if (empty($_GET['isbn']) || empty($_GET['amount'])) {
    return;
}
session_start();
if (empty($_SESSION['log'])) return;
if (empty($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = [];
}
$add = false;
// summa ilosci
for ($i = 0; count($_SESSION['koszyk']) > $i; $i++) {
    if ($_SESSION['koszyk'][$i]['isbn'] == $_GET['isbn']) {
        $_SESSION['koszyk'][$i]['amount'] += $_GET['amount'];
        $add = true;
    }
}
if (!$add) {
    array_push($_SESSION['koszyk'], ['isbn' => $_GET['isbn'], 'amount' => $_GET['amount']]);
}

header("Location:/ts2/29_01_24/zakupy.php");
