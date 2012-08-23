<?php

	session_start();
	error_reporting(-1);
	
/* ******************************************** Login *************************************************** */

/* ******  Login User ****** */
function loginUser($user, $password)
{	
	//Wenn get_magic_quotes_gpc akktiviert ist, werden alle Slashes maskiert.
	if(get_magic_quotes_gpc)
	{				
		$user		= stripslashes ($user);
		$password	= stripslashes ($password);
	}
	
	//Maskiert alle Sonderzeichen mit einem Slash
	$user		= mysql_real_escape_string($user);
	$password	= mysql_real_escape_string($password);
		
	//Das Passwort wird verschlüsselt
	$password		= md5($password);

	connectDatabase();
	
	$_sql = "SELECT
				id,
				user,
				password,
				firstname,
				lastname
			FROM
				member
			WHERE
				user	 = '$user' AND
				password = '$password' AND
				status	 = 1
			LIMIT 1";
	
	$result = mysql_query($_sql, $connection);
	$number = mysql_num_rows($result);

	disconnectDatabase();
	
	if($number > 0)
	{
		$data = mysql_fetch_array ($result);		
				$_SESSION['id']		   = $data['id'];
				$_SESSION['firstname'] = utf8_decode($data['firstname']);
				$_SESSION['lastname']  = utf8_decode($data['lastname']);
		
		$_sgl ="UPDATE
					member
				SET
					last_login = NOW()
				WHERE
					user	 = '$user' AND
					password = '$password' AND
					status	 = 1
				LIMIT 1";
				
		mysql_query($_sql, $connection);
			
		$_SESSION['loginStatus'] = 1;
		header('location: ');	/*Achtung !!!*/
	}
	else
	{
		$error = "Anmeldung gehlgeschlagen";
	}
}

/* ****** Logout User ****** */
function logoutUser()
{
	session_destroy();
}

/* ****** Check Login Status ****** */
function checkLoginStatus()
{	
	if($_SESSION['loginStatus'] != 0)
	{
		header('');
		exit;
	}		
}

/* ******************************************** Choice *************************************************** */

/* ****** Check Choice ****** */
function checkChoice()
{
	connectDatabase();
	
}
### ##############
function setChoice()
{
	connectDatabase();
}
### ##############
function getChoice()
{

}
### ##############
function setResult()
{

}
### ##############
function getResult()
{

}
/* ******************************************** Database *************************************************** */
### ##############
function connectDatabase()
{
	$db_host		= '';
	$db_user 		= '';
	$db_password 	= '';
	$db_database	= '';
	
	$connection = mysql_connect($db_host, $db_user, $db_password)
		or die("Es konnte keine Verbindung mit dem Server hergestellt werden");
		
	$datenbank = mysql_select_db($_db_database, $connection)
		or die("Es konnte keine Verbindung mit der Datenbank hergestellt werden.");
}

### ##############
function disconnectDatabase()
{
	mysql_close($connection);
}
?>