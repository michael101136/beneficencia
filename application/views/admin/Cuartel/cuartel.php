<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Principal</a></li>
                    <li class="active">Cuarteles</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> CUARTELES</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">


                                    <div class="btn-group pull-right">
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        </ul>
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#tabla-Litarcuartel').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#tabla-Litarcuartel').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#tabla-Litarcuartel').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#tabla-Litarcuartel').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#tabla-Litarcuartel').tableExport({type:'pdf',pdfFontSize:'9',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>

                                    <div class="btn-group pull-left">
                                        <button type="button" class="btn btn-success"  onclick="paginaAjaxDialogo(null, 'Registrar Nuevos Cuarteles',null, base_url+'index.php/Cuartel/insertar', 'GET', null, null, false, true);">
                                            <i class="fa fa-bars"></i>
                                            Cuartel
                                      </button>
                                    </div>
                                </div>
                                <div class="panel-body ">

                                    <table  id="tabla-Litarcuartel" class="table table-bordered success">
                                        <thead>
                                            <tr>
                                                <th>Categoría</th>
                                                <th>Pasaje</th>
                                                <th>Cuartel</th>
                                                <th class="col-md-1"></th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                          	  <?php foreach($listarCuarteles as $itemp) {?>
                                          	  	 <tr>
                                          	  	    <td> <?=$itemp->categoria ?></td>
                                          	  	    <td> <?=$itemp->nombrepasaje ?> </td>
                                          	  	    <td> <?=$itemp->nombre_cuartel ?> </td>
                                          	  	    <td > 
	                                          	  	    <div class="btn-group  bt-xs">
			                                                    
			                                                     <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			                                                         Opciones 
				                                                     <span class="caret">
				                                                     </span>
			                                                     </button>
			                                                    <ul class="dropdown-menu" role="menu">
			                                                        <li>
			                                                        	<button type="button" class="btn btn-link  bt-xs"   onclick="paginaAjaxDialogo(null, 'Modificar cuartel',{ id_cuartel: '<?=$itemp->id_cuartel?>' },base_url+'index.php/Cuartel/editar', 'GET', null, null, false, true);" >
			                                                        		<span class="fa fa-pencil-square-o"></span>
			                                                        		Modificar
			                                                        	</button>
			                                                        	
			                                                        </li>
			                                                        <li>
			                                                        	<button type="button" class="btn btn-link  bt-xs"   onclick="paginaAjaxDialogo(null, 'Agregar nichos',{id_cuartel:'<?=$itemp->id_cuartel?>'},base_url+'index.php/Nicho/insertar', 'GET', null, null, false, true);" >
			                                                        		<span class="fa  ffa fa-th-large"></span>
			                                                        	    Agregar Nichos
			                                                        	</button>
			                                                        </li>
			                                                        <li>
			                                                        	<button type="button" class="btn btn-link  bt-xs"   onclick="paginaAjaxDialogo(null, ' Detalle cuartel y sus  Nichos',{id_cuartel:'<?= $itemp->id_cuartel?>'},base_url+'index.php/Cuartel/verNichosCuarteles', 'GET', null, null, false, true);" >
			                                                        		<span class="fa  ffa fa-th-large"></span>
			                                                        	    Mostrar nichos
			                                                        	</button>
			                                                        </li>
                                                                    <li>
                                                                        <button type="button" class="btn btn-link  bt-xs"   onclick="paginaAjaxDialogo(null, ' Actualizar Precios Nichos',{id_cuartel:'<?= $itemp->id_cuartel?>'},base_url+'index.php/Cuartel/verNichosPrecios','GET', null, null, false, true);" >
                                                                            <span class="fa  fa fa-usd"></span>
                                                                            Precios de Nichos
                                                                        </button>
                                                                    </li>
			                                                        <li>
			                                                        	<button type="button" class="btn btn-link  bt-xs"   onclick="paginaAjaxDialogo(null, 'Eliminar Registro de presupuesto para formulación y evaluación',null,base_url+'index.php/Cuartel/editar', 'GET', null, null, false, true);" >
			                                                        		<span class="fa  fa-times-circle"></span>
			                                                        		Eliminar
			                                                        	</button>
			                                                        </li>
			                                                    </ul>
	                                                	</div>
                                          	  	    </td>
                                          	  	 </tr>
                                          	  <?php }?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT TABLE EXPORT -->

                        </div>
                    </div>

                </div>
<script>
$(document).ready(function()
	{
		$('#tabla-Litarcuartel').DataTable(
		{
			searching: true,
			paging: true,
    		searching: true,
			"language" : idioma_espanol
		});
	});
</script>