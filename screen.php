<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
	
	<body>
		<?php 
			$MyDoc = fopen('resultats.txt', 'a+');
			$contenu = fgets($MyDoc);
			echo $contenu;
			fclose($MyDoc);
		?>
		
		<a href="index.php">
			<input type ="button" value ="Retour"></a>
	</body>
	
</html>