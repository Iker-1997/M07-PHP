<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h2><a href="productos.php">Listado de productos</a></h2></p>
	<p><h2><a href="new_prod.html">Añadir producto</a></h2></p>
    <?php
        $array = file('productos.txt');
        echo "<p>Has borrado " . $array[$_GET["id"]] . "</p>";
        unset($array[$_GET["id"]]);
        $file = fopen('productos.txt', 'w');
        foreach($array as $item){
            fwrite($file, $item);
        }
    ?>
</body>
</html>