<!DOCTYPE html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title>Basic initialization</title>
  <script>
    var base_url = '<?php echo base_url(); ?>';
    </script>
</head>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/gant/codebase/dhtmlxgantt.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/gant/codebase/dhtmlxgantt.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/gant/samples/common/testdata.js"></script>
  <style type="text/css">
    html, body{ height:100%; padding:0px; margin:0px; overflow: hidden;}
  </style>

<body>

<div id="gantt_here" style='width:100%; height:100%;'></div>

  <script type="text/javascript">

  lista();
   function lista()
    {
      $.ajax({
        "url": base_url+"index.php/Cuartel/get_gantt",
        type:"POST",
        data:$(this).serialize(),
        success:function(respuesta)
        {
              alert(respuesta);
              var registros = eval(respuesta);
              for (var i = 0; i <registros.length;i++)
              {
                           var tasks =  {
                                data:[
                                    {"id":registros[i]["id"], "text":registros[i]["text"], type:gantt.config.types.project, "start_date":registros[i]["start_date"], "duration":registros[i]["duration"],"parent":registros[i]["parent"],"order":"10",
                                        "progress":"0.4", "open":" true"},
                                ]
                            };
                            gantt.config.work_time = true;
                        		gantt.config.xml_date = "%d-%m-%Y";

                        		gantt.config.start_date = new Date(2017,1, 1);
                        		gantt.config.end_date = new Date(2017,3, 31);
                            gantt.init("gantt_here");
                            gantt.parse(tasks);
              };
        }
      });
    }

	</script>
</body>
