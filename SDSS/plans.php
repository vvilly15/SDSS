<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
 .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 15px;
  width: 280px;
  }

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container select[name=plans], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container select[name=plans]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }

  div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
 body {
 		background-image: url("pexels7.jpg");
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;	
		background-attachment: fixed;
	}

</style>
</head>
<body>

<h2>Enjoy Movies at affordable price!</h2>
<p>Experience movies at the minimal price.</p>

<div class="gallery">
  <a target="_blank" href="pinoyf.jpg">
    <img src="pinoyf.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="asianf.jpg">
    <img src="asianf.jpg" alt="Forest" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="hollywoodf.jpg">
    <img src="hollywoodf.jpg" alt="Northern Lights" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="tvseriesf.jpg">
    <img src="tvseriesf.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="hollywoodf1.jpg">
    <img src="hollywoodf1.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="hollywoodf2.jpg">
    <img src="hollywoodf2.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>

<div class="gallery">
  <a target="_blank" href="holllywoodf2.jpg">
    <img src="holllywoodf2.jpg" alt="Mountains" width="600" height="400">
  </a>
</div>

<button class="open-button" onclick="openForm()">Open Form</button>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Select your Plan</h1>

    <label for="email"><b>Payment</b></label>
    <input type="text" placeholder="Enter Payment" name="Payment" required>

    <label for="plans"><b>Plans</b><label>
    	<select name="plans" id="plans">
    		<option value = "Pinoy Movies"> Pinoy Movies </option>
    		<option value = "Asian Movies"> Asian Movies </option>
    		<option value = "Hollywood Movies"> Hollywood Movies </option>
    		<option value = "TV Series"> TV Series </option>
    	</select>
    	<br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Subscribe</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>

  
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
