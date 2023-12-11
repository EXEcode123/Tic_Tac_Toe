<!--Hier word een speler de account eigenlijk succesvol aangemaakt, maar ik krijg error code en ik kan de oplossing niet vinden-->
<<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Account creation complete!</title>
</head>
<body>
	<h1>Account aangemaakt!</h1>

	<?php
			
			$playerusername		=$_POST["playerusernamevak"];
			$playerpassword   	=$_POST["playerpasswordvak"];

			
			
			require_once "databaseconnect-spel.php";

			$sql = $conn->prepare("INSERT INTO score(playerusername, playerpassword)
					VALUES (:playerusername, :playerpassword)");

						$sql->bindParam(':playerusername', $playerusername);
						$sql->bindParam(':playerpassword', $playerpassword);
						
						
			$sql-> execute();

			
			

			echo "Account is aangemaakt! <br>";
	?>

	<button><a href="/Spel-Enes/index.html">Terug naar het menu</a></button>
	


</body>
</html
