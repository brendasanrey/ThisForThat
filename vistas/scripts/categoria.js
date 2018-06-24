var tabla;

//funcion que siempre se ejecuta al inicio
function init(){
	mostrarform(false); //Al inicio no se mostrara el formulario de registro
	listar();

	$("#formulario").on("submit", function(e){ //al dar click en el boton guardar type=submit
		guardar(e);
	})
}

//funcion limpiar los inputs del formulario
function limpiar(){
	$("#idcategoria").val("");
	$("#nombre").val("");
	$("#tipo").val("");
}
 
function mostrarform(flag){
	limpiar();
	if (flag){
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}else{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//funcion para ocultar el formulario de registros
function cancelarform(){
	limpiar();
	mostrarform(false);
}

//funcion listar
function listar(){
	tabla = $('#tbllistado').dataTable({
		"aProcessing": true, //Activa el procesamiento del datatables
		"aServerSide": true, //Paginacion y filtrado realizados por el servidor
		dom: 'Bfrtip', //Define los elementos del control de tabla
		buttons:[ //Botones y formatos para exportar los datos
			'excelHtml5',
			'csvHtml5',
			'pdf'
		],
		"ajax":{
			url: '../ajax/categoria.php?op=listar',
			type: "get",
			dataType: "json",
			error: function(e){
				console.log(e.responseText);
			}
		},
		"bDestroy": true,
		"iDisplayLength": 10, //Numero de registros por pagina
		"order": [[0, "desc"]]//Orden de los registros desde la columna cero (id) y de forma descendiente
	}).DataTable();

} 

//Funcion para guardar 
function guardar(e){
	e.preventDefault(); //No se activara la accion predeterminada del evento
	$("#btnGuardar").prop("disabled",true); //una vez de click se desactivara 
	var formData = new FormData($("#formulario")[0]); //obtiene el id del input para saber que dato esta guardando
	$.ajax({
		url: "../ajax/categoria.php?op=guardar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function(datos){
			if(datos){
				swal(
				  'Registrada',
				  'La categoría se registro correctamente',
				  'success'
				)
			}else{
				swal(
				  'Error',
				  'La categoría no se pudo registrar, intente de nuevo.',
				  'error'
				)
			}
			mostrarform(false);
			tabla.ajax.reload();
		}
	});//Peticion ajax
	limpiar();
}


//Función para eliminar registros
function eliminar(id){
	swal({
		  title: 'Esta seguro de eliminar la Categoría?',
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Eliminar',
		  cancelButtonText: 'Cancelar',
		  confirmButtonClass: 'marginSweet btn btn-success',
		  cancelButtonClass: 'marginSweet btn btn-danger',
		  buttonsStyling: false
		}).then(function () {
			$.post("../ajax/categoria.php?op=eliminar", {id : id}, function(e){
	    		if(e){
	    			swal(
				    'Eliminada',
				    'La categoría se ha eliminado correctamente',
				    'success'
			  		)
		            tabla.ajax.reload();
		        }else{
		        	swal(
				    'Error',
				    'La categoría no se pudo eliminar',
				    'error'
			  		)
		            tabla.ajax.reload();
		        }
	    	});	
		  	
		}, function (dismiss) {
		  if (dismiss === 'cancel') {
		    swal(
			    'Cancelada',
			    'Operación cancelada',
			    'error'
			)
		  }
	});
}



init();