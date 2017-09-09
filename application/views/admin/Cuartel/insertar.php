<form class="form-horizontal " id="form-addcuartel" action="<?php echo  base_url();?>index.php/Cuartel/insertar" method="POST">
		
			<h4 style="margin-bottom: 0px;">Datos del Cuartel</h4>
			<hr style="margin: 2px;margin-bottom: 5px;">
			<div class="row" id="divCuartel">
				
				<div class="col-md-3 ">
					<label class="col-md-1 control-label">Categoria</label>
					<select class="form-control notValidate" id="cbxCategoria" name="cbxCategoria" required="">
						<?php foreach ($categoria as $itemp) {?>
						 	<option value="<?= $itemp->id_categoria.','.$itemp->categoria?>" > <?= $itemp->categoria;?> </option>
						<?php }?>
					</select>
				</div>
			
				<div class="col-md-3">
					<label class="col-md-1 control-label">Pasaje</label>
					<select class="form-control notValidate" id="cbxPasaje" name="cbxPasaje" required="">
						<?php foreach ($pasajes as $itemp) {?>
							<option value="<?= $itemp->id_pasaje.','.$itemp->nombrepasaje?>"><?= $itemp->nombrepasaje;?></option>
						<?php }?>
					</select>
				</div>
				<div class="col-md-3 ">
					<label class="col-md-1 control-label">Cuartel</label>
					<input id="txt_cuartel" name="txt_cuartel" class="form-control" type="text">
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<label>.</label><br>
					<input type="button" class="btn btn-success " id="btnAgregarCuarteles" name="btnAgregarCuarteles" value="Agregar">
				</div>
			</div>

		<div><br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Cuarteles</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" name="addTableCuarteles" id="addTableCuarteles">
						<thead>
							<tr>
								<td>Categoria</td>
								<td>Pasaje</td>
								<td>Cuartel</td>
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
			<button type="submit" id="btnEnviarFormulario" class="btn btn-success">Registrar cuarteles.</button>
			<button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</div>
	</form>
	<script>
		$("#btnAgregarCuarteles").on('click',function(event) {
			
			$('#divCuartel').data('formValidation').validate();

			if(!($('#divCuartel').data('formValidation').isValid()))
			{
				return;
			}

			var posicionSeparador=$("#cbxCategoria").val().indexOf(',');

			var idcbxCategoria=$("#cbxCategoria").val().substring(0,posicionSeparador);
			var categoria     =$("#cbxCategoria").val().substring(posicionSeparador+1,$("#cbxCategoria").val().length);

			var posicionSeparadorPasaje=$("#cbxPasaje").val().indexOf(',');

			var idbxPasaje=$("#cbxPasaje").val().substring(0,posicionSeparadorPasaje);
			var cbxPasaje  =$("#cbxPasaje").val().substring(posicionSeparadorPasaje+1,$("#cbxPasaje").val().length);

			var cuartel=$("#txt_cuartel").val();
			var tepCuartel= '<tr>' +
				'<td> <input type="hidden" value='+idcbxCategoria+' name="hdIdcategoria[]"> '+categoria+'</td>'+
				'<td> <input type="hidden" value='+idbxPasaje+' name="hdIdPasaje[]"> '+cbxPasaje+'</td>'+
				'<td> <input type="hidden" value='+cuartel+' name="Cuartel[]">'+cuartel+'</td>'+
				'<td class="col-md-1"><a href="#" class="btn btn-warning" onclick="$(this).parent().parent().remove();" style="color: red;font-weight: bold;text-decoration: underline;">Eliminar</a></td>'+
			'</tr>'
			$('#addTableCuarteles > tbody').append(tepCuartel);

		});

		$(function()
		{
			$('#form-addcuartel').formValidation(
			{
				framework: 'bootstrap',
				excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
				live: 'enabled',
				message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
				trigger: null,
				fields:
				{
					txt_cuartel:
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

			$('#divCuartel').formValidation(
			{
				framework: 'bootstrap',
				excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
				live: 'enabled',
				message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
				trigger: null,
				fields:
				{
					txt_cuartel:
					{
						validators: 
						{
							notEmpty:
							{
								message: '<b style="color: red;">El campo "Cuartel" es requerido.</b>'
							},
							regexp:
		                    {
		                        regexp: "[a-zA-Z áéíóúÁÉÍÓÚñÑ]",
		                        message: '<b style="color: red;">El campo "Cuartel" debe  de ser letras .</b>'
		                    }
						}
					}
				}
			});

		});
	$('#btnEnviarFormulario').on('click', function(event)
	{
		event.preventDefault();

		$('#form-addcuartel').data('formValidation').validate();

		if(!($('#form-addcuartel').data('formValidation').isValid()))
		{
			return;
		}

		paginaAjaxJSON($('#form-addcuartel').serialize(), '<?=base_url();?>index.php/Cuartel/insertar', 'POST', null, function(objectJSON)
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
