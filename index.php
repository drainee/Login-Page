<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
	if(isset($_POST['submit'])){
		session_destroy();
		header('LOCATION:login.php'); die();
	}
	$dir_path = "folder/";
	$options = "";
	if(is_dir($dir_path))
	{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names
               $options = $options."<option>$file_name</option>";   
               
               // display the file names
               echo $file_name."<br>";
              }
          }
        }
}
}
?>
<html>
<head>
<title>Homepage</title>
</head>
<body style="font-family: monospace;">
	<style>A {text-decoration: none;} </style>
    <p> main </p>
	<br>
	<p>Congrats</p>
	
<br>
<form action="" method="post"><button type="submit" name="submit">Log Out</button></form>
</body>
</html>