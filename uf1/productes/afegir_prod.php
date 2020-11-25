<!DOCTYPE html>
<html>
<head>
	<title>Producto añadido</title>
</head>
<body>
	<p><h2><a href="productos.php">Listado de productos</a></h2></p>
	<p><h2><a href="new_prod.html">Añadir producto</a></h2></p>
	<p>
		<?php 
			$fichero = fopen("productos.txt", "a");
			fwrite($fichero, "\r\n");
			fwrite($fichero, htmlspecialchars($_POST["producte"]));
			fwrite($fichero, ";");
			fwrite($fichero, htmlspecialchars($_POST["descripcio"]));
			fwrite($fichero, ";");
			fwrite($fichero, htmlspecialchars($_POST["preu"]));
	 	?>
 	</p>
</body>
</html>
