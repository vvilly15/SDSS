<?php

session_start();

$mysqli = new mysqli('localhost','root','','sdss') or die (mysqli_error($mysqli));
 
if (isset($_POST['save'])) {
	$name_movie = $_POST['name_movie'];
	$director = $_POST['director'];
	$genre = $_POST['genre'];
	$rental_cost = $_POST['rental_cost'];

	$mysqli->query("INSERT INTO data (name_movie,director,genre,rental_cost) VALUES ('$name_movie','$director','genre','rental_cost')") or die ($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success!";

	header("location: adminindex.php");
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE id = $id") or die ($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "warning!";

	header("location: adminindex.php");
}

?>