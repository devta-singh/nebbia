$(document).on('ready', funcPrincipal);

function funcPrincipal()
{
	$("#btnNuevoAlineamiento").on('click', funcNuevoAlineamiento);
}

function funcNuevoAlineamiento()
{
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
			$('<input>').attr('type', 'text').addClass('form-control')
		)
	)

}