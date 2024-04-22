<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styl3.css">
    <title>Twoje BMI</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="./wzor.png" alt="wzór BMI">
        </div>
        <div id="baner">
            <h1>Oblicz swoje BMI</h1>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Interpretacja BMI</th>
                    <th>Wartość minimalna</th>
                    <th>Wartość maksymalna</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $id = mysqli_connect('localhost','root','','egzamin');

                    $q = mysqli_query($id, "SELECT informacja, wart_min, wart_max FROM bmi;");
                    
                    while($row = mysqli_fetch_assoc($q)){
                        echo '<tr>';
                        echo "<td>{$row['informacja']}</td>";
                        echo "<td>{$row['wart_min']}</td>";
                        echo "<td>{$row['wart_max']}</td>";
                        echo '</tr>';
                    }

                    mysqli_close($id);
                ?>
            </tbody>
        </table>
    </main>
    <div class="sekc">
        <div class="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form action="" method="post">
            <label for="wag">Waga:</label>
            <input type="number" name="waga" id="wag"><br>
            <label for="wzrost">Wzrost w cm:</label>
            <input type="number" name="wzrost" id="wzrost" min="1"><br>
            <input type="submit" value="Oblicz i zapamiętaj wynik">
        </form>
        <?php
            $id = mysqli_connect('localhost','root','','egzamin');
            if(!empty($_POST['waga']) && !empty($_POST['wzrost'])){
                $waga = $_POST['waga'];
                $wzrost = $_POST['wzrost'];
                $bmi = $waga / ($wzrost*$wzrost)*10000;
                echo "Twoja waga: {$waga}; Twój wzrost:
                {$wzrost} <br> BMI wynosi: {$bmi}";

                if($bmi < 19){
                    $bmi_id = 1;
                }
                else if($bmi > 18 && $bmi < 26){
                    $bmi_id = 2;
                }
                else if($bmi > 25 && $bmi < 31){
                    $bmi_id = 3;
                }
                else if($bmi > 30){
                    $bmi_id = 4;
                }

                $q = mysqli_query($id, "INSERT INTO wynik (bmi_id, data_pomiaru, wynik) VALUES ({$bmi_id}, NOW(), {$bmi});");
            }
            mysqli_close($id);
        ?>
        </div>
        <div class="prawy">
            <img src="./rys1.png" alt="ćwiczenia">
        </div>
    </div>
    <footer>
            Autor: 00000000000
            <a href="./kwerendy.txt">Zobacz kwerendy Antona</a>
    </footer>
</body>

</html>