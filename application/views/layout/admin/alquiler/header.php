<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>BENEFICENCIA PUBLICA DE ABANCAY</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
                <audio id="audio-alert" src="<?php echo base_url(); ?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/audio/fail.mp3" preload="auto"></audio>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
        
        <script src="<?php echo base_url(); ?>assets/dist/js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/js/sweetalert.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/Helper/jsHelper.js"></script>

         <script>
         var base_url="<?php echo  base_url();?>";
         </script>
    </head>

    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">SIAB</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url();?>assets/images/users/avatar.png" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/images/users/avatar.png" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Beneficencia </div>
                                <div class="profile-data-title">Usuario: <?= $this->session->userdata('tipo_usuario')?> </br>Nombre: <?= $this->session->userdata('name')?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">SERVICIOS</li>


                    <li class="active">

                        <a href="<?php echo site_url('Alquiler/'); ?>"><span class="fa fa-table"></span> <span class="xn-text">ALQUILER</span></a>

                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">REPORTES</span></a>
                        <ul>
                            <li><a href="<?php echo site_url('RNichosVencidos/generar');?>" target="_blank"><span class="xn-text">Nichos vencidos</span></a></li>
                            <li><a href="<?php echo site_url('RNichosDisponibles/generar'); ?>" target="_blank"><span class="xn-text">Nichos Disponibles</span></a></li>
                            <li><a href="<?php echo site_url('Caja/'); ?>"><span class="xn-text">Caja</span></a></li>
                        </ul>
                    </li>
                    <li class="xn-title">CONFIGURAR PARAMETROS</li>
                <?php if($this->session->userdata('tipo_usuario')=="Administrador") {?>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">MANTENIMIENTOS</span></a>
                        <ul>
                            <li class=""><a href="<?php echo site_url('Cuartel/'); ?>">Cuartel</a>
                            </li>
                             <li><a href="<?php echo site_url('Nicho/'); ?>"><span class="xn-text">Nichos</span></a></li>

                        </ul>
                    </li>
                     <?php }?>
                     <?php if($this->session->userdata('tipo_usuario')=="Administrador") {?>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">USUARIOS</span></a>
                        <ul>
                            <li class=""><a href="<?php echo site_url('Usuario/'); ?>">Usuarios</a>
                            <!--<li class=""><a href="<?php echo site_url('gant/'); ?>">Gant</a>-->
                            </li>

                        </ul>
                    </li>
                    <?php }?>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content" style="height: 6428px;">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Buscar..."/>
                        </form>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Mensajes</h3>
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                               
                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Todos los mensajes</a>
                            </div>
                        </div>
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tareas</h3>
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">

                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Todas las tareas</a>
                            </div>
                        </div>
                    </li>
                    <!-- END TASKS -->
                </ul>
