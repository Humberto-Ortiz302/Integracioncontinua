/**
 * CARGA LAS PAGINAS EN LA BASE, TABLA DE COBROS Y MODAL
 */

 cargarPaginas("inicio");
 

function cargarPaginas(r){
	
	if(r==="inicio"){

		$('#pagina').load('production/componentes/cobros.php');
		cargarTabla();
		
	}

}



function cargarTabla(){
	
	
	var datos = "cargarTabla=" + cargarTabla;
	
	$.ajax({

	url:"production/componentes/procesos.php",
	type: "POST",
	data: datos,
	success: function(){
	
		$('#tabla').load('production/componentes/tablaCobros.php');

	}

	});
}

function mostrardatos(idmora) {
     
    var ruta = 'production/componentes/modal.php?persona=' + idmora;

    $.get(ruta, function (data) {
        $('#tmodal').html(data);
        $('#modalCobranza').modal('show');
           
    });

	var r = "idmora=" + idmora;

	$.ajax({

	url:"production/componentes/procesos.php",
	type: "POST",
	data: {
		idmora : idmora,

	},
	success: function(){
		
		$('#tablaModal').load('production/componentes/tablaModal.php');
	}

	});

}

function modal(boton){

	if(boton == "guardar"){
		fechaCobro=$('#fechaCobro').val();
		canal=$('#canal').val();
		estado=$('#estado').val();
		posiblepago=$('#posiblepago').val();
		mora_id=$('#imora').val();
		respuesta=$('#respuesta').val();
	
		agregardatos(fechaCobro,canal,estado,posiblepago,mora_id,respuesta);

		$('#tablaModal').load('production/componentes/tablaModal.php');

	}else if(boton == "cerrar"){

		$('.modal-backdrop').remove();
		$('#pagina').load('production/componentes/cobros.php');
		cargarTabla();
	}
}

















