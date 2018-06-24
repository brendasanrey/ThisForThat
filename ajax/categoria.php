<?php 
	require_once '../modelos/Categoria.php';

	$categoria = new Categoria();

	//Si existe el objeto (true) recibido por el metodo POST (por medio del id del formulario) llama a la funcion limpiarCadena (para validacion), si es false se envia una cadena vacia.
	$id = isset($_POST["id"])?limpiarCadena($_POST["id"]):"";
	$nombre = isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
	$tipo = isset($_POST["tipo"])?limpiarCadena($_POST["tipo"]):"";

	//El valor op va a ser devuelto por el archivo javascript mediante una petición ajax
	switch ($_GET["op"]) {
		case 'guardar':
			$respuesta = $categoria->insertar($nombre, $tipo);
			echo $respuesta;
		break;

		case 'eliminar':
			$respuesta=$categoria->eliminar($id);
	 		echo $respuesta;
		break;

		case 'mostrar':
			$respuesta = $categoria->mostrar($id);
			//Se codifica el resultado utilizando json
			echo json_encode($respuesta);
		break;

		case 'listar':
			$respuesta = $categoria->listar();
			$datos = Array();

			while ($reg = $respuesta->fetch_object()) {
				$datos[]=array(
					"0"=>'<button class="btn btn-danger" title="Eliminar Categoría" style="margin-right: 5px;" onclick="eliminar('.$reg->id.')"><i class="fa fa-trash"></i></button>',
					"1" => $reg->nombre,
					"2" => ($reg->tipo)?'<span class="badge badge-success">Producto</span>':
	 				'<span class="badge badge-danger">Servicio</span>'
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

	}

 ?>