<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>TAONU GALLERY</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
  <div class="header">
  	<h2>TAONU GALLERY Register</h2>
  </div>
	
  <form method="post" action="register_db.php">
  	<div class="input-group">
  	  <label for="username">Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label for="email">Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label for="password_1">Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label for="password_2">Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>