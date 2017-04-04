<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href ="index.php">HOME</a></li>
			<?php
			if (isset($_SESSION['id'])) {
				echo "<form action='includes/logout.inc.php'>
					<button>KIRJAUDU ULOS</button>
				</form>";

			} else {
				echo "<form action='includes/login.inc.php' method='POST'>
				<input type='text' name='uid' placeholder='Käyttäjänimi'>
				<input type='password' name='pwd' placeholder='Salasana'>
				<button type='submit'>KIRJAUDU</button>
			</form>";
			}
			?>
			<li><a href ="signup.php">SIGNUP</a></li>
		</ul>
	</nav>	
</header>