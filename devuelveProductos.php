<?php

/*require('conexion.php');

class DevuelveProductos extends Conexion{

           public function __construct(){//Ahora construimos el constructor de DevuelveProductos y dentro de el llamamos al constructor de la clase padre, esto lo hacemos con parent::

           	parent::__construct();//este es el constructor de la clase padre
                  

           }

           //Ahora creamos un metodo que sea el encargado de hacer la consulta sql y de devolver un array con los registros 

           public function get_productos(){

                  
                  $resultado=$this->conexion_db->query("SELECT * FROM productos");

                  $producto=$resultado->fetch_all(MYSQLI_ASSOC);//Almacenamos el sesultado en el recurset y lo introducimos en un array asociativo

                  return $producto;//le decimos que nos muestre el array


           }
}*/

require ('conexion.php');

class DevuelveProductos extends Conexion{

	public function __construct(){
		parent::__construct();
	}

	public function get_productos(){

		$resultado=$this->conexion_db->query("SELECT * FROM productos");

		$producto=$resultado->fetch_all(MYSQLI_ASSOC);

		return $producto;
	}
}
?>