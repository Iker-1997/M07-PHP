<!DOCTYPE html>
<html>
<head>
	<title>PRODUCTOS</title>
	<style type="text/css">
		td {
			text-align: center;
			width: 150px;
			height: 75px;
			border-style: solid;
			border-color: black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<p><a href="new_prod.html">Añadir producto</a></p>
	<p>
	<?php 
		$id=0;
		$f = file("productos.txt");
		echo "<table>";
		echo "<tr><th>Producte</th><th>Descripcio</th><th>Preu</th></tr>";
		foreach ($f as $product) {
			$a = explode(";", $product);
			echo "
			<tr><td>$a[0]</td>
			<td>$a[1]</td>
			<td>$a[2]</td>
			<td><a href='borrar_prod.php?id=$id'> <img src='trash.png' alt='delete' width='20' height='20'></a></td></tr>
			";
			$id += 1;
		}	
 	?>
 	</p>
</body>
</html>
