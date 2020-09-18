<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
	<body>
		<?php
			$Nom = $_POST["name"];
		
			$Age = $_POST["age"];
		
			$Email = $_POST["email"];
		
			$Don = $_POST["giveaway"];
			
			$MyDoc = fopen('resultats.txt', 'a+');
			
			fputs($MyDoc, '<br/>');
			fputs($MyDoc, $Nom);
			fputs($MyDoc, ' / ');
			fputs($MyDoc, $Age);
			fputs($MyDoc, ' / ');
			fputs($MyDoc, $Email);
			fputs($MyDoc, ' / ');
			fputs($MyDoc, $Don);
			fclose($MyDoc);
			echo "Les infos ont bien été enregistrer.<br/>";
		?>
		<a href="index.php">
			<input type="button" value="Retour"></a>
	</body>
	
</html>