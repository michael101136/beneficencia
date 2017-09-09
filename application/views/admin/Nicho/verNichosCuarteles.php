	<div class="hr hr-1 dotted hr-double">
		
	</div>
	<div class="row">
		
		<div class="panel panel-default">
				<div class="panel-heading">
						 <div class="btn-group pull-right">
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        </ul>
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#addTableNichos').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#addTableNichos').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#addTableNichos').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#addTableNichos').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#addTableNichos').tableExport({type:'pdf',pdfFontSize:'9',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>
					<h3 class="panel-title"></h3>
				</div>
				<div class="panel-body" id="detalleCuartel">
					<table class="table table-striped table-bordered table-hover" name="addTableNichos" id="addTableNichos">
						<thead>
							<tr class="bg-success">
								<td>Nivel</td>
								<td>Cuartel</td>
								<td>Numero Nicho</td>
								<td>Precio Alquiler</td>
								<td>Precio Renovación</td>
							</tr>
						</thead>
						<tbody>
							  <?php foreach ($CuartelesPadres as $itemp1) {?>
									 <tr>
									    <td> <?= $itemp1->nivel?> </td>
									      <?php foreach ($listarNichosCuarteleId as $itemp) {?>
										   		<tr>
										   		 <?php if($itemp->nivel==$itemp1->nivel){?>
										   		 	 <td>  </td>
										   		 	 <td> <?= $itemp->nombre_cuartel?> </td>
											   		 <td> <?= $itemp->numero_nicho?> </td>
											   		 <td> S/. <?= $itemp->precio?> </td>
											   		 <td> S/. <?= $itemp->precio_renovacion?> </td>
											    <?php }?>
											    </tr>
									   	 <?php }?>
									 </tr>
							  	<?php }?>
						</tbody>
					</table>                                
				</div>
				<a href="javascript:imprSelec('detalleCuartel')" >Imprimir texto</a>
			</div>
	<br>
<script language="Javascript">
	function imprSelec(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
	</script>