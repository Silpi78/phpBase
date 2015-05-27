<!DOCTYPE html>
<html lang="it">
<head>
	<title>Utenti</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="description" content="">
</head>
<body>
		
	<header><h1>Cucinare Bene Blog</h1></header>
		<nav>
			<ul>
				<li><a href="#">Portate</a></li>
				<li><a href="#">Ricette regionali</a></li>
				<li><a href="#">Ricette delle feste</a></li>
				<li><a href="#">Elenco Ricette</a></li>
			</ul>
		</nav>
		<section class="left">
					<p>Benvenuto nel mio sito di cucina. 
					Puoi trovare tante ricette divise per portata, regione, ingredienti e altro.</p>
					<p>Se vuoi salvare le tue ricette puoi registrati al siti utilizzando il form a destra della pagina cliccando su registrati.</p>
				
		</section>
		<aside class="right">
			<section>
				<form method="post" action="#">
					<fieldset>Login
					<p><label>Username<input type="text"  maxlength="30" name="username"  required title="Username non deve essere vuoto e contenere solo lettere, numeri e underscore"></label></p>
					<p><label>Password	<input type="password" maxlength="30" name="password" required>	</label>	</p>		
				<p>
					<input type="reset" value="reset">
					<input type="submit" name="login" value="login">
				</p>
				<p><small>Non sei registrato? <a href="register.php">Clicca per registrarti</a></small>
				</p></fieldset>
				</form>

			</section>
		</aside>
		<footer>
				<small>Copyright &copy; <time datetime="2015">2015</time></small>
				
		</footer>
		
</body>
</html>