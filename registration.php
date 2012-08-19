<?php
	
	SESSION_START();
	
	//Login überprüfen --> zurückleiten
	
	//Datenbank login
		
	//alle Ergänzungsfächer aus Datenbank auslesen
	
	
	
	
	
?>


<html>

<head>


</head>


<body>
	
	<!-- Formular für Ergänzungsfach Anfang -->
	<div name="registration_form">
		<fieldset><legend>Registration</legend>
		
			<label for="first_choice">1. Priorität:</label>
			<select name="first_choice"></select>
			<!-- Optionen aus Datenbank angeben -->
			<br />
			
			<label for="second_choice">2. Priorität:</label>
			<select name="second_choice"></select>
			<!-- Optionen aus Datenbank angeben -->
			<br />
			
			<label for="third_choice">3. Priorität:</label>
			<select name="third_choice"></select>
			<!-- Optionen aus Datenbank angeben -->
			<br />
			
			<label for="firstname">Vorname:</label>
			<input type="text" value="Vorname" name="firstname" readonly/><br />
			
			<label for="lastname">Nachname:</label>
			<input type="text" value="Nachname" name="lastname" readonly/><br />
			
			<label for="class">Klasse:</label>
			<input type="text" value="1MNa" name="class" readonly/><br />
			
			<label for="agb">Ich akzeptiere die AGB's</label>
			<input type="checkbox" name="agb"/><br />
			
			<input type="submit" value=" Abbsenden "/>
		
		</fieldset>	
	</div>
	<!-- Formular für Ergänzungsfach Ende -->
	
	<!-- Ausgabe der Wahl für das Ergänzungsfach Anfang -->
	<div name="registration_form">
		<fieldset><legend>Registration</legend>
		
			<label for="first_choice">1. Priorität:</label>
			<input type="text" value="" name="first_choice" readonly/>
			<br />
			
			<label for="second_choice">2. Priorität:</label>
			<input type="text" value="" name="second_choice" readonly/>
			<br />
			
			<label for="third_choice">3. Priorität:</label>
			<input type="text" value="" name="third_choice" readonly/>
			<br />
			
			<label for="firstname">Vorname:</label>
			<input type="text" value="Vorname" name="firstname" readonly/><br />
			
			<label for="lastname">Nachname:</label>
			<input type="text" value="Nachname" name="lastname" readonly/><br />
			
			<label for="class">Klasse:</label>
			<input type="text" value="1MNa" name="class" readonly/><br />
		
		</fieldset>	
	</div>
	<!-- Ausgabe der Wahl für das Ergänzungsfach Ende -->

</body>


</html>