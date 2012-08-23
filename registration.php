<?php
	
	SESSION_START();
	
	//Login überprüfen --> zurückleiten
	
	//Datenbank login
		
	//alle Ergänzungsfächer aus Datenbank auslesen
	
	$fehlermeldung = "<br />";
	
	if(isset($_POST['registration_submit']))
	{
		//Variabeln aus Formular übergeben
		$first_choice = $_POST['first_choice'];
		$second_choice = $_POST['second_choice'];
		$third_choice = $_POST['third_choice'];
		$agb = $_POST['agb'];
		
		//Pflichtfelder überprüfen, ob sie etwas beinhalten
		if($first_choice == "")
			$fehlermeldung = "Bitte wähle die erste Priorität aus <br />";
		else if($second_choice == "")
			$fehlermeldung = "Bitte wähle die zweite Priorität aus <br />";
		else if($third_choice == "")
			$fehlermeldung = "Bitte wähle die dritte Priorität aus <br />";
		else if($agb != "accept")
			$fehlermeldung = "Bitte akzeptiere die AGB's <br />";
		else
		{
			//Datenbankeintrag ausführen
			
			
			//Erneutes registrieren vermeiden --> Datenbankeintrag
		}
	}	
?>


<html>

<head>
	<link rel="stylesheet"  href="formular.css">
</head>


<body>
	
	<!-- Formular für Ergänzungsfach Anfang -->
	<div name="registration_form">
		<form name="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h2><?php echo $fehlermeldung; ?></h2>
			
			<label for="first_choice">1. Priorität:</label>
			<select name="first_choice" required="required">
				<option value= ""> -- </option>
			</select>
			<!-- Optionen aus Datenbank angeben -->
			<br />
			
			<label for="second_choice">2. Priorität:</label>
			<select name="second_choice" required="required">
				<option value= ""> -- </option>
			</select>
			<!-- Optionen aus Datenbank angeben -->
			<br />
			
			<label for="third_choice">3. Priorität:</label>
			<select name="third_choice" required="required">
				<option value= ""> -- </option>
			</select>
			<!-- Optionen aus Datenbank angeben -->
			<hr/>
			
			<!-- Ausgaben der Benutzerdaten-->
			<label for="firstname">Vorname:</label>
			<input type="text" value="Vorname" name="firstname" readonly/><br />
			
			<label for="lastname">Nachname:</label>
			<input type="text" value="Nachname" name="lastname" readonly/><br />
			
			<label for="class">Klasse:</label>
			<input type="text" value="1MNa" name="class" readonly/>
			<hr/>
					
			<label for="agb" >AGB's: </label>
			<input type="checkbox" value="accept" name="agb" required="required"/>
			Ich akzeptiere die AGB's
			<hr/>
			
			<input type="submit" value=" Einschreiben " id="submit" name="registration_submit"/>
</form>		
	</div>
	<!-- Formular für Ergänzungsfach Ende -->
	


</body>


</html>