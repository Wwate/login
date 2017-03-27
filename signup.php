<?php
	include 'header.php';
?>

<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if (strpos($url, 'error=empty')!== false){
		echo "Täytä tyhjät kentät!";
	}
	elseif (strpos($url, 'error=username')!== false){
		echo "Käyttäjätunnus on jo käytössä!";
	}
	
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "<p class='pCenter'>Et ole kirjautunut sisään!</p>";
	}
?>

<br><br><br>
<?php
	if (isset($_SESSION['id'])) {
			echo "<p class='pCenter'>Olet jo kirjautunut sisään!</p>";
		} else {
			echo "<form action='includes/signup.inc.php' method='POST'>
			<input type='text' name='first' placeholder='Etunimi'><br>
			<input type='text' name='last' placeholder='Sukunimi'><br>
			<input type='text' name='uid' placeholder='Käyttäjänimi'><br>
			<input type='password' name='pwd' placeholder='Salasana'><br>
			<button type='submit'>REKISTERÖIDY</button>
			
		</form>";
		}
?>

