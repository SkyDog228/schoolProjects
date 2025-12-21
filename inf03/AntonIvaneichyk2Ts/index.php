<!DOCTYPE html> 
<html lang="pl"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Dane osobowe</title> 
</head> 
<body> 
    <header id="header"> 
        <h1 id="text">Dane osobowe pracowników</h1> 
    </header> 
    <main> 
        <div class="lewy"> 
            <ol> 
                <li><a href="./index.php">Wyświetl dane </a></li> 
                <li><a href="./formularz.php">Wpisz dane</a></li> 
            </ol> 
        </div> 
        <div class="prawy"> 
            <h2>Dane osobowe</h2> 
            <?php 
                // $id = mysqli_connect('localhost', 'root', '', 'firma'); 
                // $q = mysqli_query($id, "SELECT id, nazwisko, imie, PESEL FROM pracownicy;"); 
                // // var_dump($q); 
                // echo "<table> 
                // <thead> 
                // <tr> 
                // <th>Id</th> 
                // <th>Nazwisko</th> 
                // <th>Imię</th> 
                // <th>PESEL</th> 
                // </tr> 
                // </thead>"; 
                 
 
                // foreach(mysqli_fetch_assoc($q) as $row){ 
                //     for($i = 0; $i<4; $i++){ 
                //     //     var_dump($row); 
                //     //     echo "<tr> 
                //     //     <td>$row</td> 
                //     //     <td>$row</td> 
                //     //     <td>$row</td> 
                //     //     <td>$row</td> 
                //     //     </tr>"; 
                //     } 
                     
                // } 
                // echo "</table>"; 
                // mysqli_close($id); 
            ?> 
        </div> 
    </main> 
    <footer> 
        <h5>AUTOR strony: Anton Ivaneichyk</h5> 
    </footer> 
    <script> 
        const header = document.getElementById('header'); 
        const text = document.getElementById('text'); 
        let i = 0; 
        if(i%2 == 1){ 
            header.addEventListener("onclick", ()=>{ 
            text.style.color = 'black'; 
            i++; 
        }) 
        } 
        if(i%2 == 0){ 
            header.addEventListener("onclick", ()=>{ 
            text.style.color = 'white'; 
            i++; 
        }) 
        } 
         
    </script> 
</body> 
</html>