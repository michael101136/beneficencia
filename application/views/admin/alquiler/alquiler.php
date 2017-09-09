<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Principal</a></li>
                    <li class="active">Alquiler nichos</li>
                </ul>

                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Alquiler de nichos de difuntos</h2>
                </div>
           
                <div class="page-content-wrap">
                    <div class="row">

                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-alquiler" role="tab" data-toggle="tab">Alquiler</a></li>
                                    <li><a href="#tab-EliminadoDifunto" role="tab" data-toggle="tab">Difuntos deshabilitados</a></li>
                                </ul>                            
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-alquiler">
										<div class="row">
					                        <div class="col-md-12">
					                            <div class="panel panel-default">
					                                <div class="panel-heading">

					                                    <div class="btn-group pull-right">
					                                        <ul class="panel-controls">
					                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
					                                        </ul>
					                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar</button>
					                                        <ul class="dropdown-menu">
					                                            <li><a href="#" onClick ="$('#tabla-alquiler').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-alquiler').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-alquiler').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="#" onClick ="$('#tabla-alquiler').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-alquiler').tableExport({type:'pdf',pdfFontSize:'7',escape:'false',columns: ':visible'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
					                                        </ul>
					                                    </div>

					                                    <div class="btn-group pull-left">
					                                        <button type="button" class="btn btn-success" class="btn btn-sm btn-Success" id="btn_alquiler" data-toggle="modal" data-target="#modalAlquiler"  data-toggle="dropdown"><i class="fa fa-bars"></i>Alquiler</button>
					                                    </div>
					                                </div>
					                                <div class="panel-body ">
					                                    <table id="tabla-alquiler" class="table datatable_simple hover display compact">
					                                        <thead>
					                                            <tr>
					                                                <th>#</th>
					                                                <th>#</th>
					                                                <th>Pasaje</th>
					                                                <th>Categía</th>
					                                                <th>Cuartel</th>
					                                                <th>Nicho</th>
					                                                <th>Nivel</th>
					                                                <th>Id difunto</th>
					                                                <th>Difunto Nombre</th>
					                                                <th>Difunto Apellido</th>
					                                                <th>Fecha De Difusión</th>
					                                                <th>Id responsable</th>
					                                                <th>Dni</th>
					                                                <th>Responsable Nombre</th>
					                                                <th>Responsable Apellido</th>
					                                                <th>Fecha Inicio</th>
					                                                <th>Fecha Vencimiento</th>
					                                                <th>Monto Alquiler</th>
					                                                <th>Deuda</th>
					                                                <th>Estado</th>
					                                                <th>Acción</th>
					                                            </tr>
					                                        </thead>

					                                            <tbody>

					                                            </tbody>
					                                    </table>

					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab-EliminadoDifunto">
											<div class="row">
					                        <div class="col-md-12">
					                            <div class="panel panel-default">
					                                <div class="panel-heading">

					                                    <div class="btn-group pull-right">
					                                        <ul class="panel-controls">
					                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
					                                        </ul>
					                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar</button>
					                                        <ul class="dropdown-menu">
					                                            <li><a href="#" onClick ="$('#tabla-DifuntoEliminados').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-DifuntoEliminados').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-DifuntoEliminados').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
					                                            <li class="divider"></li>
					                                            <li><a href="#" onClick ="$('#tabla-DifuntoEliminados').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
					                                            <li><a href="#" onClick ="$('#tabla-DifuntoEliminados').tableExport({type:'pdf',pdfFontSize:'7',escape:'false',columns: ':visible'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
					                                        </ul>
					                                    </div>

					                                    <div class="btn-group pull-left">
					                                        <button type="button" class="btn btn-success" class="btn btn-sm btn-Success" id="btn_alquiler" data-toggle="modal" data-target="#modalAlquiler"  data-toggle="dropdown"><i class="fa fa-bars"></i>Alquiler</button>
					                                    </div>
					                                </div>
					                                <div class="panel-body ">
					                                    <table id="tabla-DifuntoEliminados" class="table datatable">
					                                        <thead style="background: #f1f5f9;">
					                                            <tr>
					                                                <td>Pasaje</td>
					                                                <td>Categía</td>
					                                                <td>Cuartel</td>
					                                                <td>Nicho</td>
					                                                <td>Nivel</td>
					                                                <td>Difunto Nombre</td>
					                                                <td>Difunto Apellido</td>
					                                                <td>Fecha De Difusión</td>
					                                                <td>Dni</td>
					                                                <td>Responsable Nombre</td>
					                                                <td>Responsable Apellido</td>
					                                                <td>Fecha Inicio</td>
					                                                <td>Fecha Vencimiento</td>
					                                                <td>Monto Alquiler</td>
					                                                <td></td>
					                                            </tr>
					                                        </thead>
				                                            <tbody>
															 <?php  foreach ($listaDibuntoBaja as $Itemp){?>
															 		<tr>
															 			<td><?= $Itemp->nombrepasaje;?></td>
																		<td><?= $Itemp->categoria;?></td>
																		<td><?= $Itemp->nombre_cuartel;?></td>
																		<td><?= $Itemp->numero_nicho;?></td>
																		<td><?= $Itemp->nivel;?></td>
																		<td><?= $Itemp->tnombre;?></td>
																		<td><?= $Itemp->tapellido;?></td>
																		<td><?= $Itemp->fecha_fallecimiento;?></td>
																		<td><?= $Itemp->Dni_responsable;?></td>
																		<td><?= $Itemp->nombre_responsable;?></td>
																		<td><?= $Itemp->apellido_responsable;?></td>
																		<td><?= $Itemp->fecha_inicio;?></td>
																		<td><?= $Itemp->fecha_final;?></td>
																		<td><?= $Itemp->MontoAlquiler;?></td>
																		<td>
																			<div class="btn-group">
							                                                    <a href="#" data-toggle="dropdown" class="btn btn-link dropdown-toggle"><span class="fa fa-ellipsis-v"></span></a>
							                                                    <ul class="dropdown-menu  pull-right " role="menu">
							                                                        <li><a href="#">Restaurar</a></li>                                                  
							                                                    </ul>
							                                                </div>
																		</td>
															 		</tr>
				                               				 <?php } ?>
				                                            </tbody>
					                                    </table>

					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                </div>
                            </div>                                                   
                            <!-- END TABS -->                        
                        </div>  
                    </div>          
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
<!-- /.ventana alquiler -->
<div class="modal fade" id="modalAlquiler" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ALQUILER DE NICHOS </h4>

        </div>
        <div class="modal-body">
         <div class="row">
            <div class="col-xs-12">
              <div class="panel panel-default">
                 <div class="panel-heading">
                 	<div class="btn-group pull-right">
                 		<ul class="panel-controls">
                 			<li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                 		</ul>
                 		<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>Exportar</button>
                 		<ul class="dropdown-menu">
                 			<li><a href="<?php echo site_url('Factura/')?>"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> BOLETA</a></li>
                 		</ul>
                 	</div>
                  </div>
                  <div class="panel-body ">
                          <form class="form-horizontal " id="form-addAlquiler" action="<?php echo base_url();?>index.php/Alquiler/AddAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                                DATOS DEL DIFUNTO<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Nombre</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_nombredifunto" name="txt_nombredifunto"  class="form-control" type="text" required>
                                                          </div>
                                                           <label class="col-md-2 control-label">Apellidos</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_apellidodifunto" name="txt_apellidodifunto" class="form-control" type="text" required>
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Fecha Difunsion</label>
                                                           <div class="col-md-4">
                                                                 <input id="txt_fechaf" name="txt_fechaf"  type="date" class="form-control calendario"  required >
                                                          </div>
                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                                DATOS DEL NICHO<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Categoria</label>
                                                           <div class="col-md-3">
                                                                 <select class="form-control" id="cbCategoria" name="cbCategoria" required>
                                                              	 </select>

                                                          </div>
                                                           <label class="col-md-1 control-label">Cuartel</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbCuartel" name="cbCuartel" required >
																		
                                                                </select>
                                                          </div>
                                                          <label class="col-md-1 control-label">Nivel</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbxNivel" name="cbxNivel" required>

                                                              </select>
                                                          </div>
                                                </div>
                                                 <div class="form-group ">
                                                          <label class="col-md-1 control-label">Nicho</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbNicho" name="cbNicho" required>

                                                              </select>
                                                          </div>
                                                           <label class="col-md-1 control-label">Precio</label>
                                                           <div class="col-md-3">
                                                                <input  id="txt_precio" name="txt_precio" class="form-control" type="number" required>
                                                          </div>
                                                           <label class="col-md-1 control-label">Fecha Alquiler</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_fechaalquiler" name="txt_fechaalquiler"  type="date" class="form-control calendario" required >
                                                          </div>

                                                </div>
                                                 <div class="form-group">
                                                           <label class="col-md-1 control-label">Fecha Vencimiento</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_fechafinalquiler" name="txt_fechafinalquiler"  type="date" class="form-control calendario" required >
                                                          </div>
                                                          <div class="col-md-3" id="ErrorFecha" style="text-align:center;color:red">
                                                               
                                                          </div>
                                                           <label class="col-md-1 control-label">Detalles</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_detallealquiler" name="txt_detallealquiler" class="form-control" type="text" required>
                                                          </div>

                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                                DATOS DEL RESPONSABLE<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">DNI</label>
                                                           <div class="col-md-4 controls">
                                                                <input id="txt_Dni" name="txt_Dni"  class="form-control" type="number" required>
                                                                <p class="help-block"></p>
                                                          </div>
                                                           <label class="col-md-2 control-label">Nombre</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_nombreresposable" name="txt_nombreresposable" class="form-control" type="text" required>
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Apellidos</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_apellidoresponsable" name="txt_apellidoresponsable"  class="form-control" type="text" required>
                                                          </div>
                                                           <label class="col-md-2 control-label">Direccion</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_direccion" name="txt_direccion" class="form-control" type="text" required>
                                                          </div>
                                                </div>
                                 </div>
                                <br><br><br>
                               <div class="form-group">
                                  <div class="col-md-12 col-md-offset-3">
                                    <button id="btn_AddAlquiler"  class="btn btn-success">
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
<!-- /.fin alquiler-->
<!-- /.ventana alquiler -->
<div class="modal fade" id="VentanaModificarAlquiler" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
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
                                    </div>

                                    <div class="btn-group pull-left">
                                        <div class="page-title">
                                            <h3><center></span>Modificar Datos Del Alquiler</span></center></h3>
                                        </div>
                                    </div>
                  </div>
                  <div class="panel-body ">
                          <form class="form-horizontal " id="form-ModificarAlquiler" action="<?php echo  base_url();?>Alquiler/AddAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                                DATOS DEL DIFUNTO<br><br>
                                                <div class="form-group">
                                                  <input id="id_difuntoModificar" name="id_difuntoModificar"  type="hidden" class="form-control datepicker" required>

                                                          <label class="col-md-1 control-label">Nombre</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_nombredifuntoModicar" name="txt_nombredifuntoModicar"  class="form-control" type="text" required>
                                                          </div>
                                                           <label class="col-md-2 control-label">Apellidos</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_apellidodifuntoModicar" name="txt_apellidodifuntoModicar" class="form-control" type="text" required>
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Fecha Difunsion</label>
                                                           <div class="col-md-4">
                                                                 <input id="txt_fechafDifucionModicar" name="txt_fechafDifucionModicar" type="date" class="form-control calendario" required >
                                                          </div>

                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">

                                                 <div class="form-group">
                                                   <input id="Id_alquileINichoDetalle" name="Id_alquileINichoDetalle"  class="form-control" type="hidden" required>

                                                          <label class="col-md-1 control-label">Fecha Alquiler</label>
                                                           <div class="col-md-3">
                                                                <input id="txt_fechaalquilerModicar" name="txt_fechaalquilerModicar" type="date" class="form-control calendario" required >
                                                          </div>
                                                          <label class="col-md-1 control-label">Fecha Vencimiento</label>
                                                           <div class="col-md-3">
                                                                <input id="txt_fechafinalquilerModicar" name="txt_fechafinalquilerModicar"  type="date" class="form-control calendario" required >
                                                          </div>

                                                </div>
                                                 <div class="form-group">


                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                                DATOS DEL RESPONSABLE<br><br>
                                                <input id="txt_idresponsableModificar" name="txt_idresponsableModificar"  type="hidden" class="form-control datepicker" >

                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">DNI</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_DniModicar" name="txt_DniModicar"  class="form-control" type="number" required>
                                                          </div>
                                                           <label class="col-md-2 control-label">Nombre</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_nombreresposableModicar" name="txt_nombreresposableModicar" class="form-control" type="text" required>
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Apellidos</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_apellidoresponsableModicar" name="txt_apellidoresponsableModicar"  class="form-control" type="text" required>
                                                          </div>
                                                           
                                                </div>
                                 </div>
                                <br><br><br>
                               <div class="form-group">
                                  <div class="col-md-12 col-md-offset-3">
                                    <button id="btn_EnviarAlquilerModificar" class="btn btn-success">
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
<!-- /.fin alquiler-->

 <!-- Modal -->
  <div class="modal fade" id="VentaDarBaja" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form  class="form-horizontal" id="form_darBajaDifunto"  method="POST" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Dar de baja a un Difunto</h4>
        </div>
        <div class="modal-body">
         <input type="hidden" id="txt_nichoDetalle" name="txt_nichoDetalle" class="form-control">
         <input type="text" id="nombreDifunto" name="nombreDifunto" class="form-control">
          <input type="hidden" id="txt_nichoDetalle2" name="txt_nichoDetalle2" class="form-control">
        </div>
        <div class="modal-footer">
          <button id="btn_darBajaDifunto"  class="btn btn-success">
                <span class="glyphicon glyphicon-floppy-disk"></span>
                  Dar de baja
         </button>

          <button data-dismiss="modal" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove">Cancelar</span>
            </button>        
        </div>
      </div>
    </form>
      
    </div>
  </div>



<!--RENOVACION DE NICHOS-->

<div class="modal fade" id="VentanaRenovacionNichos" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
         <div class="row">
            <div class="col-xs-12">
              <div class="panel panel-default">
                 <div class="panel-heading">
                                    <div class="btn-group pull-right">
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group pull-left">
                                        <div class="page-title" >
                                            <h3><center></span><label id="DetalleRenovacion"></label></span></center></h3>
                                        </div>
                                    </div>
                  </div>
                  <div class="panel-body ">
                  		<div id="divRenovacion">
                          <form class="form-horizontal " id="form-RenovarAlquiler" action="<?php echo  base_url();?>Alquiler/RenovacionAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div clasws="row">
                                                <div class="form-group">
                                                  		  <input id="id_detalleNichoR" name="id_detalleNichoR"  type="text" class="form-control" >
                                                          <label class="col-md-2 control-label">Nombre Completo</label>
                                                           <div class="col-md-8">
                                                                <input id="txt_nombredDiCompleto" name="txt_nombredDiCompleto"  class="form-control" type="text">
                                                          </div>
                                                </div>

                                 </div>
                                 <br>
                                 <div class="row">

                                                 <div class="form-group">
                                                         
                                                           <div class="col-md-4">
                                                                <label class="col-md-10">Fecha Alquiler Final</label>
                                                                <input  class="form-control" id="txt_fechaFinalA" name="txt_fechaFinalA" required >
                                                          </div>
                                                           <div class="col-md-4">
                                                                <label class="col-md-10">Precio Renovación</label>
                                                                <input class="form-control" id="precioRenovacionA" name="precioRenovacionA" >
                                                          </div>
                                                           <div class="col-md-4">
                                                           		<label class="col-md-10">Numero de años</label>
                                                                <input class="form-control" id="txt_aniosAlquiler" name="txt_aniosAlquiler">
                                                          </div>

                                                </div>
                                                 <div class="form-group">
                                                          <label class="col-md-2 control-label">Total</label>
                                                           <div class="col-md-3">
                                                                <input class="form-control" id="txt_TotalPago" name="txt_TotalPago">
                                                          </div>

                                                </div>
                                 </div>
                                 <br>
                               <div class="form-group">
                                  <div class="col-md-12 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">
                                      <span class="glyphicon glyphicon-floppy-disk"></span>
                                       Renovación de alquiler
                                    </button>
                                     <button  class="btn btn-danger" data-dismiss="modal">
                                       <span class="glyphicon glyphicon-remove"></span>
                                      Cancelar
                                    </button>
                                  </div>
                                </div>
                          </form>
                        </div><br/>
                        <div id="divDeuda">
                        	<form class="form-horizontal " id="form-DeudaNicho" action="<?php echo  base_url();?>Alquiler/updateDeudaNicho" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div clasws="row">
                                                <div class="form-group">
                                                  		  <input id="id_detalleNicho" name="id_detalleNicho"  type="text" class="form-control">

                                                          <label class="col-md-2 control-label">Nombre Completo</label>
                                                           <div class="col-md-8">
                                                                <input id="txt_nombredDiCompletoDeuda" name="txt_nombredDiCompletoDeuda"  class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">

                                     <div class="form-group">
                                             
                                           <div class="col-md-4">
                                                <label class="col-md-10">Fecha Alquiler Final</label>
                                                <input class="form-control" id="txt_fechaFinalDeuda" name="txt_fechaFinal" >
                                          </div>
                                          <div class="col-md-3">
                                        	    <label class="col-md-2 control-label">Deuda</label>
                                                <input class="form-control" id="txt_Deuda" name="txt_Deuda">
                                          </div>
                                    </div>
                                 </div><br/>
                               <div class="form-group">
                                  <div class="col-md-12 col-md-offset-3">
                                    <button id="btn_enviar"  class="btn btn-success">
                                      <span class="glyphicon glyphicon-floppy-disk"></span>
                                      Pagar Deuda
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
<!-- /.fin alquiler-->
<script type="text/javascript">
	$(document).on("ready",function(){
		$('#tabla-DifuntoEliminados').DataTable(
		{
			paging: false,
   			searching: false,
   			"bDestroy": true,
		});
	$('#form-addAlquiler').bootstrapValidator
		({
			 
				  	 message: 'Este valor no es valido',
				 
				  	 feedbackIcons:
				  	  {
				 
				     valid: 'glyphicon glyphicon-ok',
				 
				     invalid: 'glyphicon glyphicon-remove',
				 
				     validating: 'glyphicon glyphicon-refresh'
			 
			   		 },
			   fields: {
			 
			     txt_nombredifunto: {
			 
			       validators: 
			       {
			        notEmpty: 
				        {
				 
				           message: 'El nombre del difunto es requerido'
				        },
			        regexp:
						{
							regexp: /^[a-z][a-z]*/,
							message: '<b style="color: red;">El campo "nombre del difunto " debe ser solo letras.</b>'
						}
			 
			       },
			     },
			      txt_apellidodifunto: {
			 
			       validators: {
			 
			         notEmpty: {
			 
			           message: 'El apellido del difunto es requerido'
			 
			         },
			          regexp:
						{
							regexp: /^[a-z][a-z]*/,
							message: '<b style="color: red;">El campo "apellido del difunto " debe ser solo letras.</b>'
						}
			 
			       }
			 
			     },
			      txt_Dni: {
			 
			       validators: {
			       	 regexp: {
			 
								 regexp: /^[0-8]+$/,
			 
								 message: 'El DNI solo puede contener números'
			 
							 },
			 
			         notEmpty: {
			 
			           message: 'El campo DNI del responsable es requerido'
			 
			         },
			         stringLength: {
			 
								 min: 8,
			 
								 message: 'El DNI debe contener con 8 dígitoss'
			 
							 }
			 
			       }
			 
			     },

			    txt_nombreresposable: 
			    {
			     	validators: {
			 
			        notEmpty: {
			 
			        message: 'El nombre del responsable es requerido'
			 
			        },
			          regexp:
						{
							regexp: /^[a-z][a-z]*/,
							message: '<b style="color: red;">El campo "nombre del respnsable" debe ser solo letras.</b>'
						}
			        }
			    },
			    txt_apellidoresponsable: 
			    {
			     	validators: {
			 
			        notEmpty: {
			 
			        message: 'El apellido del responsable es requerido'
			 
			        },
			          regexp:
						{
							regexp: /^[a-z][a-z]*/,
							message: '<b style="color: red;">El campo "apellido del responsable" debe ser solo letras.</b>'
						}
			        }
			    }

			   }
 
});
	$('#btn_AddAlquiler').on('click', function(event)
	{
		event.preventDefault();

		$('#form-addAlquiler').data('formValidation').validate();

		if(!($('#form-addAlquiler').data('formValidation').isValid()))
		{
			return;
		}

		paginaAjaxJSON($('#form-addAlquiler').serialize(), '<?=base_url();?>index.php/Alquiler/AddAlquiler', 'POST', null, function(objectJSON)
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
				window.location.href='<?=base_url();?>index.php/Alquiler/index';
				renderLoading();
			});
		}, false, true);
	});

$('#form-ModificarAlquiler').bootstrapValidator({
 
   message: 'Este valor no es valido',
   feedbackIcons: {
     valid: 'glyphicon glyphicon-ok',
 
     invalid: 'glyphicon glyphicon-remove',
 
     validating: 'glyphicon glyphicon-refresh'
 
   },
   fields: {
 
     txt_nombredifuntoModicar: {
 
       validators: 
       {
        notEmpty: 
	        {
	 
	           message: 'El nombre del difunto es requerido'
	        }
       },
     },
      txt_apellidodifuntoModicar: {
 
       validators: {
 
         notEmpty: {
 
           message: 'El apellido del difunto es requerido'
 
         }
       }
 
     },
    txt_nombreresposableModicar: 
    {
     	validators: {
 
        notEmpty: {
 
        message: 'El nombre del responsable es requerido'
 
        }
        }
    },
    txt_apellidoresponsableModicar: 
    {
     	validators: {
 
        notEmpty: {
 
        message: 'El apellido del responsable es requerido'
 
        }
        }
    }
    
   }
});
	$('#btn_EnviarAlquilerModificar').on('click', function(event)
	{
		event.preventDefault();

		$('#form-ModificarAlquiler').data('formValidation').validate();

		if(!($('#form-ModificarAlquiler').data('formValidation').isValid()))
		{
			return;
		}

		paginaAjaxJSON($('#form-ModificarAlquiler').serialize(), '<?=base_url();?>index.php/Alquiler/ModificarAlquiler', 'POST', null, function(objectJSON)
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
				window.location.href='<?=base_url();?>index.php/Alquiler/index';
				renderLoading();
			});
		}, false, true);
	});

	$('#form_darBajaDifunto').bootstrapValidator({
 
	   message: 'Este valor no es valido',
	   feedbackIcons: {
	     valid: 'glyphicon glyphicon-ok',
	 
	     invalid: 'glyphicon glyphicon-remove',
	 
	     validating: 'glyphicon glyphicon-refresh'
	 
	   },
	   
	});

	$('#btn_darBajaDifunto').on('click', function(event)
	{
		event.preventDefault();

		$('#form_darBajaDifunto').data('formValidation').validate();

		if(!($('#form_darBajaDifunto').data('formValidation').isValid()))
		{
			return;
		}
		paginaAjaxJSON($('#form_darBajaDifunto').serialize(), '<?=base_url();?>index.php/Alquiler/DarBajaAlquiler', 'POST', null, function(objectJSON)
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
				window.location.href='<?=base_url();?>index.php/Alquiler/index';
				renderLoading();
			});
		}, false, true);
	});
 
});


  $('.modal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset(); //para borrar todos los datos que tenga los input, textareas, select.
    $("label.error").remove();  //lo utilice para borrar la etiqueta de error del jquery validate
  });




</script>