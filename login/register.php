<?php
require_once 'Database.php';
require_once 'Dbinfo.inc';	
?>

<!DOCTYPE html>
<html lang="it">
<head>
	<title>Registrati</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="description" content="">
</head>
<body>
	<form method="post" action="#" >
	<fieldset>
					<h3>Registrazione al sito</h3>
					<p><label>Nome<input type="text" name="nome" maxlength="30" required></label></p>
					<p><label>Cognome<input type="text" name='cognome' maxlength="30" required></label></p>
					<p><label>Email<input type="email" name="email" maxlength="40" required></label></p>			
					<p><label>Username<input type="text" name="username" maxlength="30" required pattern="\w+" title="Username non deve essere vuoto e contenere solo lettere, numeri e underscore"></label></p>
					<p><label>Password<input type="password" name="pwd" maxlength="30" required></label></p>
				<input class="iscrizione" type="reset" value="Cancella">				
				<input class="iscrizione" type="submit" name="register" value="Iscriviti" >
				
				
	</fieldset>	
	</form>
</body>
</html>