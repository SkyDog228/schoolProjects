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
    <?php
    if (empty($_SESSION['log'])) {
        header("Location:/ts2/29_01_24/logowanie.php?error=Zloguj+sie");
        exit();
    }
    ?>
    <main>
        <nav>
            <?php include("nav.html") ?>
        </nav>

        <div class="blok2">
            <div class="statut">Zakupy</div>
            <div class="tresc">
                <table>
                    <thead>
                        <tr>
                            <th>tytul</th>
                            <th>autor</th>
                            <th>isbn</th>
                            <th>cena (zl)</th>
                            <th>stan (sztuk)</th>
                            <th>Sztuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = mysqli_connect('localhost', 'root', '', 'ksiegarniagr2');
                        $zap = mysqli_query($id, "SELECT ksiazki.tytul, ksiazki.autor, ksiazki.isbn, ksiazki.cena, ksiazki.stan FROM ksiazki;");
                        while ($row = mysqli_fetch_assoc($zap)) {
                            echo "<tr>";
                            foreach ($row as $data) {
                                echo "<td>$data</td>";
                            }

                        ?>

                            <form action="scrypt_koszyk.php" method="get">
                                <td>
                                    <input type="number" name="amount" id="" style="width: 50px;">
                                    <input type="hidden" name="isbn" value="<?php echo "{$row['isbn']}"; ?>">
                                </td>
                                <td>
                                    <input type="submit" value="Wrzuc do koszyka">
                                </td>
                            </form>

                        <?php
                            echo  "</tr>";
                        }
                        ?>
                    </tbody>
                </table><br>



            </div>
        </div>


    </main>
    <footer>
        <?php include("footer.html") ?>
    </footer>
</body>

</html>