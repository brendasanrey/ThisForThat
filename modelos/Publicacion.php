<?php
	//Se incluye el archivo con la conexión de la BD
	require '../config/conexion.php';

	class Publicacion{
		//Constructor de la clase
		public function __construct(){

		}

		public function insertar($id_user, $descripcion, $periodo, $disponibilidad, $id_categoria, $tipo){
			$sql_detalle = "INSERT INTO publica (id_user,tipo, descripcion) VALUES ('$id_user' ,'$tipo', '$descripcion')";

			//$sql_string = "INSERT INTO `publica`( id_user, `tipo`, `descripcion`) VALUES ([value-1],[value-2],[value-3],[value-4])";
			//$id_detalle = ejecutarConsulta_retornarID($sql_detalle);
			return ejecutarConsulta($sql_detalle);
			/*if($tipo == 1){ //producto
				$sql = "INSERT INTO productos (idpublicacion, estado, id_categoria) VALUES ('$id_detalle', $estado', '$id_categoria')";
				return ejecutarConsulta($sql);
			}else{*/
			/*$sql = "INSERT INTO servicios (idpublicacion, periodo, disponibilidad, id_categoria) VALUES ('$id_detalle', '$periodo', '$disponibilidad, '$id_categoria')";
			return ejecutarConsulta($sql);
			//}*/
			
		}

		public function eliminar($idpublicacion){
			$sql="DELETE FROM publicacion WHERE idpublicacion ='$idpublicacion'";
			return ejecutarConsulta($sql);
		}

		public function listar(){
			$sql = "SELECT p.descripcion, s.id_categoria, s.periodo, s.disponibilidad FROM publica p INNER JOIN servicio s WHERE p.id = s.id_publicacion";
			return ejecutarConsulta($sql);
		}
	} 

 ?>
 