<?php

require"devuelveProductos.php";

$productos=new DevuelveProductos();//llamamos al constructor de la clase DevuelveProductos
$array_productos=$productos->get_productos();//llamamos al metodo get_productos, esto llamara al array y lo almacenara en la variable $array_productos


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

foreach($array_productos as $fila){//recorremos el array asociativo 

	echo "<table><tr><td>";
	echo $fila['CODIGOARTICULO']."</td><td>";
	echo $fila['SECCION']."</td><td>";
	echo $fila['NOMBREARTICULO']."</td><td>";
	echo $fila['PRECIO']."</td><td>";
	echo $fila['FECHA']."</td><td>";
	echo $fila['IMPORTADO']."</td><td>";
	echo $fila['PAISDEORIGEN']."</td><td></tr></table>";

	    echo "<br>";
	    echo "<br>";
   
}


?>

</body>
</html>