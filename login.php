<?php
	include('function.inc.php');
	
	if(isset($_POST['submit']))
	{		
		loginUser($_POST['username'], $_POST['password']);
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<title></title>
		
	<!-- Meta-Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- Implementierung der Stylesheets -->
	<link rel="stylesheet" type="text/css" href="CSS/formular.css">
</head>

<body>
	<!-- login formular start-->
	<div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="login">	
				<label for= "username">Benutzername: </label>
				<input type= "text" 	 name= "username" /><br />
				
				<label for= "password">Passwort: </label>
				<input type= "password" name= "password" /><br />
			
				<input type= "reset" value=" Zurücketzten " /><br />
				<input type= "submit" value=" Login " name= "submit" /><br />
			<?php echo $error; ?>
		</form>
	</div>
	<!-- login formular end-->
</body>
</html>