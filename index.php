<!DOCTYPE html>

<html>
	<head>
		<title>TP2EX2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link type="text/css" rel="stylesheet" href="style.css"/>
	</head>

	<body>		
		<div class="top">
			<img src="LogoPHP.png" height="100px" width="180px">
		</div>
		<div class="wrap">
			<div class="left">
				<table>
					<tr>
						<tabled><p>Accueil</p></tabled>
					</tr>
					<tr>
						<tabled><a href="./">Exercice 1 : ACHAT</a></tabled>
					</tr>
					<tr>
						<tabled><a href="./">Exercice 2 : DONS</a></tabled>
					</tr>
				</table>
			</div>
			
			<div class="right">
				<form name="form" action="form.php" method='POST'>
					<h1>Remplissez le formulaire:</h1>
					
					<p>Nom<br/>
					<input type="text" name="name" required></p>
					
					<p>Age<br/>
					<input type="number" name ="age" min="0" required></p>
					
					<p>e-Mail<br/>
					<input type="email" name="email" required></p>
					
					<p>Don<br/>
					<input type="number" name ="giveaway" required></p>
					<input type="submit" value="Valider">
				</form>
				<form name="affichage" action="affichage.php" method='POST'>
					<input type="submit" value="Afficher les résultats">
				</form>
			</div>
		</div>
	</body>
</html>