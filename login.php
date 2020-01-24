<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:/'); die();
    }
	
	$dir = "images/";
	if ($opendir = opendir($dir))
	{
		//read dir
		while(($file = readdir($opendir)) != FALSE)
		{
			
		}
	}
?>
<!DOCTYPE html>
<html>
   <head>
     <title>Indiax Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="indiax.css?v=2">
   </head>
<body style="font-family: monospace;">
<h3>Indiax File Listing</h3>
<pre>
You do not have access to view this website.
Please log-in.
</pre>
  <div class="container">
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'ENTER USERNAME' && sha1($password) === 'INSERT SHA1 HASH'){
          $_SESSION['login'] = true; header('LOCATION:/'); die();
        } {
          echo "Incorrect Login.<br><br>";
        }

      }
    ?>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="root" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" placeholder="password" required>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
	<h5>Copyright © 1982-2018 Indiax Systems LTD</h5>
  </div>
</body>
</html>