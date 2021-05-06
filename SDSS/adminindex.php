<?php include('connection.php'); 

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM data WHERE movie_id = $movie_id");
	$record = mysqli_fetch_array($rec);
	$name_movie = $record['name_movie'];
	$director = $record['director'];
	$genre = $record['genre'];
	$rental_cost = $record['rental_cost'];
	$movie_id = $record['movie_id'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
	<link rel = "stylesheet" type = "text/css" href="adminstyle.css">
</head>
<body>

	<?php if (isset($_SESSION['msg'])):  ?>
		<div class = "msg">
			<?php 
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			 ?>
		</div>
	<?php endif ?>
	<table>
		<thead>
			<tr>
				<th>Movie Name</th>
				<th>Director</th>
				<th>Genre</th>
				<th>Rental Cost</th>
				<th>Image</th>
				<th colspan = "2"> Action </th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['name_movie']; ?></td>
				<td><?php echo $row['director']; ?></td>
				<td><?php echo $row['genre']; ?></td>
				<td><?php echo $row['rental_cost']; ?></td>
				<td></td>
				<td>
					<a class = "edit_btn" href = "adminindex.php?edit=<?php echo $row['movie_id']; ?>"> Edit </a>
				</td>
				<td>
					<a class = "del_btn" href = "connection.php?del=<?php echo $row['movie_id']; ?>"> Delete </a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<form method = "post" action = "adminprocess.php">
		<input type="hidden" name="movie_id" value = "<?php echo $movie_id; ?>">
		<div class = "input-group">
			<label>Movie Name</label>
			<input type="text" name="name_movie" value = "<?php echo $name_movie; ?>">
		</div>
		<div class = "input-group">
			<label>Director</label>
			<input type="text" name="director" value = "<?php echo $director; ?>">
		</div>
		<div class = "input-group">
			<label>Genre</label>
			<input type="name" name="genre" value = "<?php echo $genre; ?>">
		</div>
		<div class = "input-group">
			<label>Rental Cost</label>
			<input type="number" name="rental_cost" value = "<?php echo $rental_cost; ?>">
		</div>
		<div class = "input-group">
			<?php if ($edit_state == false): ?>
				<button type = "submit" name = "save" class = "btn">Save</button>	
			<?php else: ?>
				<button type = "submit" name = "update" class = "btn">Update</button>
			<?php endif; ?>

		</div>
	</form>

</body>
</html>