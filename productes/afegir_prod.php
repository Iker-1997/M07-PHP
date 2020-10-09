<!DOCTYPE html>
<html>
<head>
	<title>Producto añadido</title>
</head>
<body>
	<p><a href="productos.php">Listado de productos</a></p>
	<p><a href="new_prod.html">Añadir producto</a></p>
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
