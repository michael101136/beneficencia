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
                                            <li><a href="#" onClick ="$('#tabla-cuartel').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#tabla-cuartel').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#tabla-cuartel').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#tabla-cuartel').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#tabla-cuartel').tableExport({type:'pdf',pdfFontSize:'9',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>

                                    <div class="btn-group pull-left">
                                        <button type="button" class="btn btn-success"  onclick="paginaAjaxDialogo(null, 'Registrar Nuevos Cuarteles',null, base_url+'index.php/Cuartel/insertar', 'GET', null, null, false, true);">
                                            <i class="fa fa-bars"></i>
                                            Cuartelds
                                      </button>
                                    </div>
                                </div>
                                <div class="panel-body ">

                                    <table id="tabla-Litarcuartel" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Categdfsdoría</th>
                                                <th>Pasajecz</th>
                                                <th>Cuartel</th>
                                                <th></th>
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
			                                                    <button type="button" class="btn btn-primary">
			                                                    	Opciones
			                                                    </button>
			                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			                                                    	<span class="caret"></span>
			                                                    </button>
			                                                    <ul class="dropdown-menu" role="menu">
			                                                        <li role="presentation" class="dropdown-header">Acciones</li>
			                                                        <li><a  onclick="paginaAjaxDialogo(null, 'Registrar detalle de gastos',null, base_url+'index.php/FE_Detalle_Presupuesto/insertar', 'GET', null, null, false, true);">Modificafsr</a></li>
			                                                        <li><a href="#">Eliminar</a></li>
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
                <!-- END PAGE CONTENT WRAPPER -->
<!-- /.ventana alquiler -->
<div class="modal fade" id="modalCuartel" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">AGREGAR UN CUARTEL </h4>
        </div>
        <div class="modal-body">
         <div class="row">
            <div class="col-xs-12">
              <div class="panel panel-default">
                 <!-- <div class="alert alert-danger" id="erro_alquilerVali" style="text-align:left;">
                                <strong>¡Importante!</strong> Corregir los siguientes errores.
                                <div class="list-errors"></div>
                    </div>
                  FORULARIO PARA REGISTRAR NUEVO FUNCION  -->
                 <div class="panel-heading">


                                    <div class="btn-group pull-right">
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        </ul>
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>


                  </div>
                  <div class="panel-body ">
                          <form class="form-horizontal " id="form-addcuartel" action="<?php echo  base_url();?>Alquiler/AddAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>

                                 <div class="row">
                                                DATOS DEL DIFUNTO<br><br>
                                                <div class="form-group">

                                                          <label class="col-md-1 control-label">Categoria</label>
                                                           <div class="col-md-3">
                                                                 <select class="form-control" id="cbxCategoria" name="cbxCategoria">

                                                              </select>
                                                          </div>

                                                          <label class="col-md-1 control-label">Pasaje</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbxPasaje" name="cbxPasaje">

                                                              </select>
                                                          </div>
                                                          <label class="col-md-1 control-label">Cuartel</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_cuartel" name="txt_cuartel" class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                 <br><br><br>
                                 
                                  <div>
                                    

                                     <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Basic example</h3>
                                </div>
                                <div class="panel-body">
                                     <button id="addCarritoCuartel" name="addCarritoCuartel" type="button" class="btn btn-success">
                                      <span class="glyphicon glyphicon-floppy-disk"></span>
                                      carrito
                                    </button>
                                    <button id="addCuartelTodo" name="addCuartelTodo" type="button" class="btn btn-success">
                                      <span class="glyphicon glyphicon-floppy-disk"></span>
                                        Guardar Cuarteles
                                    </button>
                                    <button type="button"  id="btn_borrar" name="btn_borrar"> borrar </button>
                                    <table class="table" id="tblList">
                                        
                                    </table>                                
                                </div>
                            </div>


                                  </div>

                               <div class="form-group">
                                  <div class="col-md-12 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">
                                      <span class="glyphicon glyphicon-floppy-disk"></span>
                                      Guardar
                                    </button>
                                     <button  class="btn btn-danger" data-dismiss="modal">
                                       <span class="glyphicon glyphicon-remove"></span>
                                      Cancelar
                                    </button>
                                  </div>
                                </div>
                          </form>
                </div>
              </div>
            </div><!-- /.span -->
          </div><!-- /.row -->
        </div>
        <div class="modal-footer">
               <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <div> *Son campos obligatorios </div>
                        </div>
                </div>
        </div>
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