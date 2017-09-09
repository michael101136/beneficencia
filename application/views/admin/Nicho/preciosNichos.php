
<form class="form-horizontal " id="form-addpreciosNichos" action="<?php echo  base_url();?>index.php/Nicho/updatePrecios" method="POST">
	<div class="row">
		<div class="col-md-7">
			 PRECIOS DE NICHO POR CUARTEL <?php echo $nombreCuartel->nombre_cuartel ?> 
			 <input id="txt_IdCuartel" name="txt_IdCuartel" value="<?php echo $nombreCuartel->id_cuartel ?>" class="form-control" type="hidden" notValidate>
		</div>
	</div></br>
	<div class="row">
			<div class="col-md-3">
				<label>Nivel</label>
				 <select class="form-control" id="combo_Nivel" name="combo_Nivel" notValidate>
				 	<?php foreach ($listarNichosCuarteleId as $value) {?>
				 			 <option value="<?=$value->nivel ?>">Nivel <?=$value->nivel ?></option>
				 	<?php }?>
				 </select>
			</div>
			<div class="col-md-3">
				<label>Precio Alquiler</label>
				<input id="txt_nivel_Precios" name="txt_nivel_Precios" class="form-control" type="text">
			</div>
			<div class="col-md-3">
				<label>Precio Renovacion</label>
				<input id="txt_nivel_PreciosrRenovacion" name="txt_nivel_PreciosrRenovacion" class="form-control" type="text">
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12" style="text-align: center;margin-top: 18px;">

					<input type="button" class="btn btn-success " id="btnAgregarNichoPrecio" name="btnAgregarNichoPrecio" value="Agregar Precios">
			</div>
	
	</div><br>
	<div class="row">
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Precios Nicho</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" name="addPreciosNichos" id="addPreciosNichos">
						<thead>
							<tr>
								<td>Nivel</td>
								<td>Precio Alquiler</td>
								<td>Precio Renovacion</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>                                
				</div>
			</div>
	</div>

	<div class="row" style="text-align: right;">
			<button type="submit" id="btnEnviarFormulario" class="btn btn-success">Agregar Precios .</button>
			<button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</div>
</form>
<script>

	$("#btnAgregarNichoPrecio").on('click',function(event) {
		
			var nivel=$("#combo_Nivel").val();
			var precio  =$("#txt_nivel_Precios").val();
			var txt_nivel_PreciosrRenovacion  =$("#txt_nivel_PreciosrRenovacion").val();

			var tepPrecioNicho= '<tr>' +
				'<td> <input type="hidden" value='+nivel+' name="hdIdnivel[]"> '+nivel+'</td>'+
				'<td> <input type="hidden" value='+precio+' name="hdIdPrecio[]"> '+precio+'</td>'+
				'<td> <input type="hidden" value='+txt_nivel_PreciosrRenovacion+' name="hdIdPrecioRenovacion[]"> '+txt_nivel_PreciosrRenovacion+'</td>'+
				'<td class="col-md-1"><a href="#" class="btn btn-warning" onclick="$(this).parent().parent().remove();" style="color: red;font-weight: bold;text-decoration: underline;">Eliminar</a></td>'+
			'</tr>'
			$('#addPreciosNichos > tbody').append(tepPrecioNicho);

		});
		
	$(function()
		{
			$('#form-addpreciosNichos').formValidation(
			{
				framework: 'bootstrap',
				excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
				live: 'enabled',
				message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
				trigger: null,
				fields:
				{
					txt_nivel_Precios:
					{
						validators: 
						{
							notEmpty:
							{
								message: '<b style="color: red;">El campo "Cuartel" es requerido.</b>'
							}
						}
					}
				}
			});

		});
	$('#btnEnviarFormulario').on('click', function(event)
	{

		
		event.preventDefault();

		$('#form-addpreciosNichos').data('formValidation').validate();

		if(!($('#form-addpreciosNichos').data('formValidation').isValid()))
		{
			return;
		}
		
		paginaAjaxJSON($('#form-addpreciosNichos').serialize(), '<?=base_url();?>index.php/Nicho/updatePrecios', 'POST', null, function(objectJSON)
		{
			$('#modalTemp').modal('hide');

			objectJSON=JSON.parse(objectJSON);

			swal(
			{
				title: '',
				text: objectJSON.mensaje,
				type: (objectJSON.proceso=='Correcto' ? 'success' : 'error') 
			},
			function()
			{
				window.location.href='<?=base_url();?>index.php/Cuartel/index/'+objectJSON.idEstudioInversion;

				renderLoading();
			});
		}, false, true);
	});

	</script>

