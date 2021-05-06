<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sdss";
$edit_state = false;

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

$db = mysqli_connect('localhost','root','','sdss');

if (isset($_POST['save'])) {
	$name_movie = $_POST['name_movie'];
	$director = $_POST['director'];
	$genre = $_POST['genre'];
	$rental_cost = $_POST['rental_cost'];
	$movie_id = $_POST['movie_id'];

	$query = "INSERT INTO info (name_movie,director,genre,rental_cost) VALUES '$name_movie','$director','$genre','$rental_cost')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Added!";
	header('location: adminindex.php');
}

if (isset($_POST['update'])) {
	$name_movie = mysql_real_escape_string($_POST['name_movie']);
	$director = mysql_real_escape_string($_POST['director']);
	$genre = mysql_real_escape_string($_POST['genre']);
	$rental_cost = mysql_real_escape_string($_POST['rental_cost']);
	$movie_id = mysql_real_escape_string($_POST['movie_id']);

	mysqli_query($db, "UPDATE data SET name_movie = '$name_movie', director = '$director' , genre = '$genre', rental_cost = '$rental_cost' WHERE movie_id = $movie_id");
	$_SESSION['msg'] = "Updated!";
	header('location: adminindex.php');
}

if (isset($_GET['del'])) {
	$movie_id = $_GET['del'];
	mysqli_query($db, "DELETE FROM data WHERE movie_id = $movie_id");
	$_SESSION['msg'] = "Deleted!";
	header('location: adminindex.php');
}



 
$results = mysqli_query($db, "SELECT * FROM data");

?>