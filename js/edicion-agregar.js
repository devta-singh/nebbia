$(document).on('ready', funcPrincipal);

function funcPrincipal()
{
	$("#btnNuevoAlineamiento").on('click', funcNuevoAlineamiento);
	console.log("Llamada a funcion principal");
}

function funcNuevoAlineamiento()
{
	console.log("Llamada a funcion funcNuevoAlineamiento");
	$("#tablaAlineamiento")
	.append
	(
		$('<tr>')
		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control')
			)
		)

		.append
		(
			$('<td>')
			.append
			(
				$('<input>').attr('type', 'text').addClass('form-control')
			)
		)

		.append
		(
			$('<td>').addClass('text-center')
			.append
			(		
				$('<div>').addClass('btn btn-primary').text('Guardar')
			)
			.append
			(		
				$('<div>').addClass('btn btn-danger').text('Eliminar')
			)
		)
	);
}