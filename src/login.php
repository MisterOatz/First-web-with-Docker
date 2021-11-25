z<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>TAONU GALLERY</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
  <div class="header">
  	<h2>TAONU GALLERY Login</h2>
  </div>
	 
  <form method="post" action="login_db.php">
  <?php if (isset($_SESSION['error'])) : ?>
      <div class="error" >
      	<h3>
          <?php 
          	echo $_SESSION['error']; 
          	unset($_SESSION['error']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
  	<div class="input-group">
  		<label for="username">Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label for="password">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>