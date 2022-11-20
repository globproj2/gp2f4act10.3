<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>EXECUCIÓ DE LA MULTIPLICACIÓ DE 3 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE LA MULTIPLICACIÓ</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$resultat = $operacio->trigonometriques($_GET["op1"]);
			echo "<p>El sinus de l'angle és: $resultat[0]</p>";
			echo "<p>El cosinus de l'angle és: $resultat[1]</p>";
			echo "<p>La tangent de l'angle és: $resultat[2]</p>";			
		?>
		<a href="trigonometria.html">Torna a la pàgina anterior</a>
	</body>
</html>
