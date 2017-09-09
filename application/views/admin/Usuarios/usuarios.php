<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Control</a></li>
                    <li class="active">de  Usuario</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Usuarios</h2>
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
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo  base_url();?>assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>  
                                          
                                    <div class="btn-group pull-left">
                                      <button type="button" class="btn btn-success" class="btn btn-sm btn-Success" data-toggle="modal" data-target="#myUsuarios"><i class="fa fa-paste"></i>Usuario</button>

                                    </div>
                                </div>
                                <div class="panel-body ">
                                    <table id="tabla-usuarios" class="table datatable_simple hover display compact">
                                        <thead>
                                            <tr>
                                              
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Tipo de usuario</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
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
<div id="myUsuarios" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REGISTRA NUEVO USUARIO</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal " id="form-addUsurio" action="<?php echo  base_url();?>Usuario/Addusuario" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                               <h5> DATOS DEL USUARIO</h5>
                                                <div class="form-group">
                                                          <label class="col-md-2 control-label">Nombre</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_nombre" name="txt_nombre"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Apellidos</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_apellido" name="txt_apellido" class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                 <div class="row">
                                              <br><br>  
                                                <h5>ACCESO</h5>
                                                <div class="form-group">
                                                          <label class="col-md-2 control-label">Usuarios</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_usuario" name="txt_usuario"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Clave</label>
                                                           <div class="col-md-4">
                                                                <input id="txt_clave" name="txt_clave" class="form-control" type="text">
                                                          </div>
                                                </div><br>
                                                <div class="form-group">
                                                          <label class="col-md-2 control-label">Tipo Usuario</label>
                                                           <div class="col-md-4">
                                                            <select class="validate[required] select" id="tipoUser" name="tipoUser">
                                                                <option value="">Tipo de Usuarios</option>
                                                                <option value="Tesorera">Tesorera</option>
                                                                <option value="Administrador">Administrador</option>
                                                            </select> 
                                                          </div>
                                                         
                                                </div>
                                 </div>
                                 <br>
                                 
                                 

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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>
</div>

<div id="ventanaUsuarioAc" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ACTUALIZAR USUARIO</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal " id="form-Updateusuario" action="<?php echo  base_url();?>Usuario/Updateusuario" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                               <h5> DATOS DEL DIFUNTO</h5>
                                                <div class="form-group">
                                                          <input id="id_usuarioA" name="id_usuarioA"  class="form-control" type="hidden">
                                                          <label class="col-md-2 control-label">Nombre</label>
                                                           <div class="col-md-4">
                                                                <input id="nombresA" name="nombresA"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Apellidos</label>
                                                           <div class="col-md-4">
                                                                <input id="apellidosA" name="apellidosA" class="form-control" type="text">
                                                          </div>
                                                </div>
                                 </div>
                                 <div class="row">
                                              <br><br>  
                                                <h5>ACCESO</h5>
                                                <div class="form-group">
                                                          <label class="col-md-2 control-label">Usuarios</label>
                                                           <div class="col-md-4">
                                                                <input id="usuarioA" name="usuarioA"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Clave</label>
                                                           <div class="col-md-4">
                                                                <input id="passwordA" name="passwordA" class="form-control" type="text">
                                                          </div>
                                                </div><br>
                                                <div class="form-group">
                                                          <label class="col-md-2 control-label">Tipo Usuario</label>
                                                           <div class="col-md-4">
                                                            <select class="validate[required] select" id="tipo_usuarioA" name="tipo_usuarioA">
                                                                <option value="">Tipo de Usuarios</option>
                                                                <option value="Tesorera">Tesorera</option>
                                                                <option value="Administrador">Administrador</option>
                                                            </select> 
                                                          </div>
                                                         
                                                </div>
                                 </div>
                                 <br>
                                 
                                

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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>
</div>


<div id="LoginCambi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CAMBIAR LA CONTRASEÑA</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal " id="form-UpdaCambioContrasena" action="" method="POST">
                                <div class="hr hr-1 dotted hr-double"></div>
                                <div class="row">
                                               <h5>Cambio de Contraseña</h5>
                                                <div class="form-group">
                                                          <input id="IdUsuario" name="IdUsuario"  class="form-control" type="hidden">
                                                          <label class="col-md-2 control-label">Actual Contrseña</label>
                                                           <div class="col-md-4">
                                                                <input id="ContraseActual" name="ContraseActual"  class="form-control" type="text">
                                                          </div>
                                                           <label class="col-md-2 control-label">Nueva Contraseña</label>
                                                           <div class="col-md-4">
                                                                <input id="ContraseNueva" name="ContraseNueva" class="form-control" type="text">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
      </div>
    </div>

  </div>
</div>
