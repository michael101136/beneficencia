<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Beneficencia Publica de Abancay</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->   
        <script>
         var base_url="<?php echo  base_url();?>";
         </script>                                 
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong></div>
                    <form  id="login" class="form-horizontal" method="post" action="<?php echo base_url("index.php/Login/ingresar");?>">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control"  id="txt_usuario" name="txt_usuario" placeholder="Usuario"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" id="contrasenia" name="contrasenia" class="form-control" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Recuperar Contraseña?</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-block">Iniciar sessión</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                
                    </div>
                    <div class="pull-right">
                        <a href="#"></a> 
                        <a href="#"></a> 
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        


            <!--fromulario-->  
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

  
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script> 
        <script src="<?php echo base_url();?>assets/Admin/login.js"></script>

</html>






