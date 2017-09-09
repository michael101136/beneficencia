<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Comprobante  pdf</title>
   <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>

    <style type="text/css">
        body {
         background-color: #fff;
         margin: 10px;
         font-family: Lucida Grande, Verdana, Sans-serif;
         font-size: 14px;
         color: #4F5155;
        }

        a {
         color: #003399;
         background-color: transparent;
         font-weight: normal;
        }

        h1 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
        }

        h2 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 2px 0 2px 0;
         padding: 5px 0 6px 0;
         text-align: center;
        }

        table{
            text-align: center;
            border:1px solid #CCC;
            border-collapse:collapse; 
        }
        td {
            border:none;
        }

        /* estilos para el footer y el numero de pagina */
        @page { margin: 180px 50px; }
        #header {
            position: fixed;
            left: 0px; top: -180px;
            right: 0px;
            height: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }
        #footer {
            position: fixed;
            left: 0px;
            bottom: -180px;
            right: 0px;
            height: 20px;
            background-color: #333;
            color: #fff;
        }
        #footer .page:after {
            content: counter(page, upper-roman);
        }
    </style>
</head>
<body>
    <!--header para cada pagina-->
    <div id="header">
        <?php echo $title ?>
    </div>
    <!--footer para cada pagina-->
    <div id="footer">
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    </div>
    <h2>BENEFICENCIA PUBLICA DE LA ABANCAY</h2>
    <table  width="575" border="0" cellspacing="2" style='border: inset 0pt'>
        <thead>
            <tr colspan="10">
                <th colspan="5" rowspan="3"> <?php echo $title?></th>
                <th colspan="5" rowspan="3">RUC:2020202020  </th> 
                <th colspan="5" rowspan="3"><?= $boleta->fechaactual?> </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<table width="575" border="0" cellspacing="2" style='border: inset 0pt'>
   <tr>
    <th colspan="6">Precio </th>
    <th colspan="6">Precio <?= $boleta->precio_renovacion ?></th>
   </tr>
   <tr>
    <td colspan="12" align="left">Señor(a): <?= $boleta->responsable?> </td>
   </tr>
   <tr>
    <td colspan="12" align="left">Direccion:</td>
   </tr>
   <tr>
    <td colspan="1">CANT.</td>
    <td colspan="8">DESCRIPCION</td>
    <td>P.UNIT.</td>
    <td>IMPORTE</td>
   </tr>
   <tr>
    <td colspan="1"></td>
    <td colspan="8" align="left">N° Nicho <?= $boleta->numero_nicho?>   </td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td colspan="1"></td>
    <td colspan="8" align="left"> Cuartel: <?= $boleta->nombre_cuartel?>  </td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td colspan="1"></td>
    <td colspan="8" align="left"> Difunto: <?= $boleta->difunto?></td>
    <td></td>
    <td></td>
   </tr>
   <tr>
    <td colspan="1"></td>
    <td colspan="8"> Fecha de Alquiler: <?= $boleta->fecha_inicio ?>  a <?= $boleta->fecha_final ?>  </td>
    <td></td>
    <td></td>
   </tr>
   <tr>
        <td colspan="1"></td>
        <td colspan="8"></td>
        <td colspan="1"><?= $boleta->precio_renovacion ?></td>
        <td><?= $boleta->pago ?></td>
   </tr> 
  </table>

         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
</body>
</html>
