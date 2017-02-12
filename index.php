<?php
session_start();
$teamname = '';
if(isset($_POST['sub'])){
  $teamname = filter_var($_POST['teamname'], FILTER_SANITIZE_STRING);

  if($teamname !== 0){
    $_SESSION['teamname'] = $teamname; header('LOCATION:urls.php'); die();
  }
  if($username === 0)$userError = 'Invalid Teamname';
}

echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
<title>Threat Challenge Home Page</title>
<link rel='stylesheet' type='text/css' href='style.css'>
   </head>
<body>
<div align =center>
<h1>Welcome to the Trend Micro TDC Homepage !</h1>
  <form name='input' action='{$_SERVER['PHP_SELF']}' method='post'>
Team Name:    <label for='username'></label><input type='text' value='$teamname' id='teamname' name='teamname' />
    <div class='error'>$userError</div>
    <input type='submit' value='Login' name='sub' />
  </form>
  <script type='text/javascript' src='common.js'></script>
<footer></footer>
</body>
</html>";
?>
