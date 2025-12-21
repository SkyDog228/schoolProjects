<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
$id = mysqli_connect('localhost', 'root', '', 'baza_post');
?>

<body>
    <div class="spisok">
        <h1>ЭЛЕКТРОНИКА И РАЗЛИЧНЫЕ ГАДЖЕТЫ</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ЭЛЕКТРОНИКА И РАЗЛИЧНЫЕ ГАДЖЕТЫ';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>ОДЕЖДА И ОБУВЬ</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ОДЕЖДА И ОБУВЬ';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>ДЫМНАЯ ТЕМАТИКА</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ДЫМНАЯ ТЕМАТИКА';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>ЧАСЫ И АКСЕССУАРЫ</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ЧАСЫ И АКСЕССУАРЫ';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>ПАРФЮМЕРИЯ</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ПАРФЮМЕРИЯ';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>ЭКСКЛЮЗИВНЫЕ ТОВАРЫ(СЕЗОННЫЕ)</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Комментарий</th>
                    <th>Ссылка</th>
                    <th>Раздел</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap = mysqli_query($id, "SELECT * FROM postaw WHERE postaw.Раздел = 'ДЫМНАЯ ТЕМАТИКА';");
                while ($row = mysqli_fetch_assoc($zap)) {
                    echo "<tr>";
                    $i = 0;
                    foreach ($row as $data) {
                        if ($i == 3) {
                            echo "<td><a href='$data'>$data</a></td>";
                        } else {
                            echo "<td>$data</td>";
                        }
                        $i++;
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>
    <hr>
    <br>
    <div class="apps">
        <div class="taobao">
            1. Taobao
            <br>
            <img src="./img/taobao.webp" alt="Taobao img">
            <br>
            Ссылки на скачивание:
            IOS——> <a href="">https://apps.apple.com/by/app/%E6%B7%98%E5%AE%9D-%E5%A4%AA%E5%A5%BD%E9%80%9B%E4%BA%86%E5%90%A7/id387682726</a>
            <br>
            Android—><a href="">https://play.google.com/store/apps/details?id=com.taobao.taobao&hl=ru&gl=US</a>
            <br>
            <p>В данном приложении собраны множества товаров с лучшими ценами. К сожалению напрямую заказывать с данных оптовых рынков нельзя, поэтому в конце списка мы предоставим ссылки и контакты посредников, которые занимаются перевозкой товаров из Китая.</p>
        </div>
        <div class="1688">
            1. Taobao
            <br>
            <img src="./img/taobao.webp" alt="Taobao img">
            <br>
            Ссылки на скачивание:
            IOS——> <a href="">https://apps.apple.com/by/app/%E6%B7%98%E5%AE%9D-%E5%A4%AA%E5%A5%BD%E9%80%9B%E4%BA%86%E5%90%A7/id387682726</a>
            <br>
            Android—><a href="">https://play.google.com/store/apps/details?id=com.taobao.taobao&hl=ru&gl=US</a>
            <br>
            <p>В данном приложении собраны множества товаров с лучшими ценами. К сожалению напрямую заказывать с данных оптовых рынков нельзя, поэтому в конце списка мы предоставим ссылки и контакты посредников, которые занимаются перевозкой товаров из Китая.</p>
        </div>
        <div class="taobao">
            1. Taobao
            <br>
            <img src="./img/taobao.webp" alt="Taobao img">
            <br>
            Ссылки на скачивание:
            IOS——> <a href="">https://apps.apple.com/by/app/%E6%B7%98%E5%AE%9D-%E5%A4%AA%E5%A5%BD%E9%80%9B%E4%BA%86%E5%90%A7/id387682726</a>
            <br>
            Android—><a href="">https://play.google.com/store/apps/details?id=com.taobao.taobao&hl=ru&gl=US</a>
            <br>
            <p>В данном приложении собраны множества товаров с лучшими ценами. К сожалению напрямую заказывать с данных оптовых рынков нельзя, поэтому в конце списка мы предоставим ссылки и контакты посредников, которые занимаются перевозкой товаров из Китая.</p>
        </div>
    </div>
</body>
<?php
mysqli_close($id);
?>

</html>