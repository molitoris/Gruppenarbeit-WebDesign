<?php
	
	if(isset($_POST['submit']))
	{
		SESSION_START();
		
		$username  = $_POST['username'];
		$password = $_POST['password'];
		
		//check user input
		
		
	// database connection start
		$_db_host = 'localhost';
		$_db_hostname = '';
		$_db_password = '';
		$_db_database = '';	
		
		$connection = mysql_connect($_db_host, $_db_hostname, $_db_password)
			or die ("Keine Verbindung mit dem Server möglich");
			
		$database = mysql_select_db($_db_database, $connection)
			or die ("Keine Verbindung zur Datenbank möglich");
	// Database connection end

	//compare user input with database start
		$_sql = "SELECT
					id,
					username,
					password,
					firstname,
					lastname
				FROM
					member
				WHERE
					username  = '$username' AND
					password = '$password'
				LIMIT 1";
		
		$result = mysql_query($_sql, $connection);
		$_number = @mysql_num_rows($result);

		
		if($_number > 0)
		{			
			$_SESSION['status'] = "logged";		
			$data = mysql_fetch_array ($result);		
				$_SESSION['id']		   = $data['id'];
				$_SESSION['firstname'] = utf8_decode($data['firstname']);
				$_SESSION['lastname']  = utf8_decode($data['lastname']);
			
			$id = $_SESSION['id'];
			$update = "UPDATE
							member
						SET
							last_login = NOW()
						WHERE
							id = '$id'";
			mysql_query($update, $connection);
			
			header('location: competition.php');
			exit;
		}
		else
		{
			$error = "Benutzername oder Passwort nicht korrekt";
		}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head></head>

<body>
	<!-- login formular start-->	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="login">	
				<label for= "username">Benutzername</label>
			<input type= "text" 	 name= "username"  /><br />
				<label for= "password">Passwort</label>
			<input type= "password" name= "password" /><br />
			
			<input type= "reset" value=" Zurücketzten " /><br />
			<input type= "submit" value=" Login " name= "submit"	   /><br />
			<?php echo $error; ?>
		</form>
	<!-- login formular end-->
</body>
</html>