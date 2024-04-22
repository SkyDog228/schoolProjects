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
            <div class="statut">Koszyk</div>
            <div class="tresc">
                <?php
                    if(empty($_SESSION['koszyk'])){
                        $_SESSION['koszyk'] = [];
                        echo "<p>Koszyk jest pusty</p>";
                    }
                    foreach($_SESSION['koszyk'] as $row){
                        $id = mysqli_connect('localhost', 'root', '', 'ksiegarniagr2');
                        $q = mysqli_query($id,"SELECT * FROM ksiazki WHERE ksiazki.isbn = '{$row['isbn']}';");
                        $rw = mysqli_fetch_assoc($q);
                        foreach($rw as $key => $data){
                            echo "<p>$key: $data</p>";
                        }
                        echo "<p>Ilosc: {$row['amount']}</p>";
                        echo '<hr>';
                    }

                ?>
            </div>


    </main>
    <footer>
        <?php include("footer.html") ?>
    </footer>
</body>

</html>