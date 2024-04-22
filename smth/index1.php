<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>1 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Tokeny bezpieczeństwa SAFE - logowanie</h1>

			</header>
	
			<form action="index.php" method="post"> 
			
				<div>	
					<label>Login:
						<input type="text" name="login">
					</label>
				</div>	
				
				<div>
					<label>Hasło:
						<input type="password" name="haslo">
					</label>
				</div>

				<input type="submit" value="Zaloguj">
				
			</form>
<?php



function token($dlugosc = 10) {
    $znaki = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $znakiDlugosc = strlen($znaki);
    $randomString = '';
    for ($i = 0; $i < $dlugosc; $i++) {
        $randomString .= $znaki[rand(0, $znakiDlugosc - 1)];
    }
    return $randomString;
}


if(isset($_POST['login'])){
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	if($login == 'pawlo' && $haslo == 'napadnabank'){
		echo "<p>Witaj Pawel, weź się do roboty leniu xD</p>";
		echo "<p>Jednorazowy token dostępu do skarbca: " . token(10) . "</p>";
	}
	else if($login == 'gawlo' && $haslo == 'likeaboss'){
		echo "<p>Witaj Gawel, weź się do roboty leniu xD</p>";
		echo "<p>Jednorazowy token dostępu do skarbca: " . token(10) . "</p>";
	}
	else{
	echo "<p>Niepoprawy login lub haslo!</p><br>";
	}
}



?>

		</article>
		
	</main>
	
</body>
</html>