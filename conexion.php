<?php

require('config.php');


class Conexion
{
	
	protected $conexion_db;

	public function __construct(){//Metodo constructor

		$this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if ($this->conexion_db->connect_errno) {//si la conexion falla lanza error
			echo "Fallo al conectar mysql: ".$this->conexion_db->connect_error;//muestra el error en pantalla

			return;
		}

		$this->conexion_db->set_charset(DB_CHARSET);//establecemos caracteres extraños como la letra Ñ
	}
}








/*require('config.php');

class Conexion{

	protected $conexion_db;

	public function __construct(){
		$this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if($this->conexion_db->connect_errno){
			echo "Fallo en la conexion mysql ".$this->conexion_db->connect_error;

			return;
		}

		$this->conexion_db->set_charset(DB_CHARSET);
	}
}*/
?>