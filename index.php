<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Et ole kirjautunut sisään";
	}
?>


</body>
</html>