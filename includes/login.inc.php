<?php
 session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM kayttaja WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Väärä käyttäjänimi tai salasana!";
} else {
	$_SESSION['id'] = $row['user_id'];
}
header("Location: ../index.php");
?>
