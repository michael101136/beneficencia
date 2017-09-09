<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Principal</a></li>
                    <li class="active">Nichos</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span>NICHOS</h2>
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
                                            <li><a href="#" onClick ="$('#tabla-nicho').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#tabla-nicho').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#tabla-nicho').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#tabla-nicho').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#tabla-nicho').tableExport({type:'pdf',pdfFontSize:'9',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>

                                    <div class="btn-group pull-left">
                                        <button type="button" class="btn btn-success" class="btn btn-sm btn-Success" id="btn_nicho" data-toggle="modal" data-target="#modalNicho"  data-toggle="dropdown"><i class="fa fa-bars"></i>Nicho</button>
                                    </div>
                                </div>
                                <div class="panel-body ">
                                    <table id="tabla-nicho" class="table datatable_simple hover display compact">
                                        <thead>
                                            <tr>

                                                <th>Cuartel</th>
                                                <th>N° Nicho</th>
                                                <th>Nivel</th>
                                                <th></th>

                                            </tr>
                                        </thead>

                                            <tbody>

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
<div class="modal fade" id="modalNicho" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">AGREGAR UN NICHO</h4>
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
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Exportar</button>
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
                          <form class="form-horizontal " id="form-addnicho" action="<?php echo  base_url();?>Alquiler/AddAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>

                                 <div class="row">
                                                DATOS DEL NICHO<br><br>
                                                <div class="form-group">

                                                          <label class="col-md-1 control-label">Cuartel</label>
                                                           <div class="col-md-3">
                                                                 <select class="form-control" id="cbxCuartelN" name="cbxCuartelN">

                                                              </select>
                                                          </div>

                                                      
                                                          <label class="col-md-1 control-label">N° Nicho</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_num_nicho" name="txt_num_nicho" class="form-control" type="text">
                                                          </div>
                                                          <label class="col-md-1 control-label">Nivel</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_nivel_nicho" name="txt_nivel_nicho" class="form-control" type="text">
                                                          </div>
                                                         
                                                </div>
                                                <div class="form-group">
                                                 <label class="col-md-1 control-label">Precio</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_precio_nicho" name="txt_precio_nicho" class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                 <br><br><br>
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
                          <form class="form-horizontal " id="form-addAlquiler" action="<?php echo  base_url();?>Alquiler/AddAlquiler" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                                DATOS DEL DIFUNTO<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Nombre</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_nombredifunto" name="txt_nombredifunto"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Apellidos</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_apellidodifunto" name="txt_apellidodifunto" class="form-control" type="text">
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Fecha Difusion</label>
                                                           <div class="col-md-4">
                                                                 <input id="txt_fechaf" name="txt_fechaf"  type="text" class="form-control datepicker" >
                                                          </div>

                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                                DATOS DEL  NICHO<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Categoria</label>
                                                           <div class="col-md-3">
                                                                 <select class="form-control" id="cbCategoria" name="cbCategoria">

                                                              </select>
                                                          </div>
                                                           <label class="col-md-1 control-label">Cuartel</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbCuartel" name="cbCuartel" >

                                                                </select>
                                                          </div>
                                                          <label class="col-md-1 control-label">Nivel</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbxNivel" name="cbxNivel">

                                                              </select>
                                                          </div>
                                                </div>
                                                 <div class="form-group">
                                                          <label class="col-md-1 control-label">Nicho</label>
                                                           <div class="col-md-3">
                                                                <select class="form-control" id="cbNicho" name="cbNicho">

                                                              </select>
                                                          </div>
                                                           <label class="col-md-1 control-label">Precio</label>
                                                           <div class="col-md-3">
                                                                <input  id="txt_precio" name="txt_precio" class="form-control" type="text">
                                                          </div>
                                                          <label class="col-md-1 control-label">Fecha Alquiler</label>
                                                           <div class="col-md-3">
                                                                <input id="txt_fechaalquiler" name="txt_fechaalquiler"  type="text" class="form-control datepicker" >
                                                          </div>
                                                </div>
                                                 <div class="form-group">
                                                          <label class="col-md-1 control-label">Fecha Vencimiento</label>
                                                           <div class="col-md-3">
                                                                <input id="txt_fechafinalquiler" name="txt_fechafinalquiler"  type="text" class="form-control datepicker" >
                                                          </div>
                                                           <label class="col-md-1 control-label">Detalles</label>
                                                           <div class="col-md-3">
                                                                <input id="txt_detallealquiler" name="txt_detallealquiler" class="form-control" type="text">
                                                          </div>

                                                </div>
                                 </div>
                                 <br>
                                 <div class="row">
                                                DATOS DEL RESPONSABLE<br><br>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">DNI</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_Dni" name="txt_Dni"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Nombre</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_nombreresposable" name="txt_nombreresposable" class="form-control" type="text">
                                                          </div>
                                                </div>
                                                <div class="form-group">
                                                          <label class="col-md-1 control-label">Apellidos</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_apellidoresponsable" name="txt_apellidoresponsable"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Direccion</label>
                                                           <div class="col-md-5">
                                                                <input id="txt_direccion" name="txt_direccion" class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                <br><br><br>
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
<!-- /.fin alquiler-->
