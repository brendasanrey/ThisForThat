<?php
 
 require "../config/conexion.php";

	Class Categoria{
		public function __construct(){
	}

	public function insertar($nombre, $tipo){
		$sql = "INSERT INTO categorias (nombre, tipo) VALUES ('$nombre', '$tipo')";
		return ejecutarConsulta($sql);
	}

	public function listar(){
		$sql = "SELECT * FROM categorias";
		return ejecutarConsulta($sql);		
	}

	public function eliminar($id){
		$sql = "DELETE FROM categorias WHERE id = '$id'";
		return ejecutarConsulta($sql);
	}

	public function select(){
		$sql = "SELECT * FROM categorias";
		return ejecutarConsulta($sql);
	}
}

?>