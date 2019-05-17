<!DOCTYPE HTML>
<html>
<head>
<title>Sign-In</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#FFEFD5; ">
<div id="Sign-In" style="background-color:#E9967A;  box-shadow: 3px 3px 10px;" >
<fieldset style="width:30%"><legend><b>LOG-IN HERE</b></legend>

<form method="POST" action="connectivity.php">
<b>User:</b> <br><input type="text" name="user" size="40"><br> 
<b>Password:</b> <br><input type="password" name="pass" size="40"><br><br>
<input id="button" type="submit" name="submit" value="Log-In" style="background-color:#FFA07A;">
</form>
</fieldset>
<br>
<?php
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=0;
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
else{echo "Miresevini!";}
?>
<?php
try
{
	$error='<i>per tu çasur ne administrate!</i>';
	throw new Exception($error);
	
	echo 'Never executed';
}
catch(Exception $e)
{
	echo '<br><i>*Shkruani userin dhe passwordin</i> ',$e->getMessage(),"\n";
}

?>

</div>
</body>
</html>