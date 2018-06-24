<?php 
	require_once '../modelos/Publicacion.php';

	$publicacion = new Publicacion();

	//Si existe el objeto (true) recibido por el metodo POST (por medio del id del formulario) llama a la funcion limpiarCadena (para validacion), si es false se envia una cadena vacia.
	//$idusuario= isset($_POST["idusuario"])?limpiarCadena($_POST["idusuario"]):"";
	$id_categoria = isset($_POST["id_categoria"])?limpiarCadena($_POST["id_categoria"]):"";
	$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
	$disponibilidad = isset($_POST["disponibilidad"])?limpiarCadena($_POST["disponibilidad"]):"";
	$periodo=isset($_POST["periodo"])? limpiarCadena($_POST["periodo"]):"";
	$idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
	$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";

	switch ($_GET["op"]) {
		case 'guardar':

			/*if(!file_exists($_FILES['imagen']['tmp_name']) || !si_uploaded_file($_FILES['imagen']['tmp_name'])){
				$imagen="";
			}
			else{
				$ext = explode(".", $_FILES["imagen"]["name"]);
				if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" ){
					$imagen = round(microtime(true)). '.' . end($ext);
					move_uploaded_file($_FILES["imagen"]["tmp_name"], ../files/fotos;)
				}	
			}*/
			$respuesta = $publicacion->insertar($idusuario, $descripcion, $periodo, $disponibilidad, $id_categoria, $tipo);
			echo $respuesta;
		break;

		case 'eliminar':
			$respuesta=$publicacion->eliminar($id);
	 		echo $respuesta;
		break;

		case 'mostrar':
			$respuesta = $publicacion->mostrar($id);
			//Se codifica el resultado utilizando json
			echo json_encode($respuesta);
		break;

		case 'listar':
			$respuesta = $publicacion->listar();
			$datos = Array();

			while ($reg = $respuesta->fetch_object()) {
				$datos[]=array(
					"0"=>  $reg->descripcion,
					"1" => $reg->periodo,
					"2" => $reg->id_categoria
				);
			}
			$resultado = array(
				"sEcho" => 1, //Informacion para el datatables
				"iTotalRecords" => count($datos), //Total de registros para el datatables
				"iTotalDisplayRecords" => count($datos), //Total de registros para visualizar
				"aaData" => $datos
			);
			echo json_encode($resultado);		
		break;

		case "selectCategoria":
			require_once "../modelos/Categoria.php";
			$cuenca = new Categoria();

			$respuesta = $cuenca->select();

			while ($reg = $respuesta->fetch_object()){
				echo '<option value=' . $reg->id . '>' . $reg->nombre . '</option>';
			}
		break;
	}

 ?>