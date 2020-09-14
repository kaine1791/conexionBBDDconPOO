<?php

require('config.php');


class Conexion
{
	
	protected $conexion_db;

	public function __construct(){//Metodo constructor

		//USANDO PDO

		try{

			$this->conexion_db=new PDO('mysql:host=localhost; dbname=pruebas','root','123456');

			$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$this->conexion_db->exec("SET CHARACTER SET utf8");

			return $this->conexion_db;

		}catch(Exception $e){

			echo "La linea de error es: ".$e->getLine();
		}







//-----------------------------------------------------------------------------------------------------------

//USANDO MYSQLI

		/*$this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if ($this->conexion_db->connect_errno) {//si la conexion falla lanza error
			echo "Fallo al conectar mysql: ".$this->conexion_db->connect_error;//muestra el error en pantalla

			return;
		}

		$this->conexion_db->set_charset(DB_CHARSET);//establecemos caracteres extraños como la letra Ñ */


	}
}





?>