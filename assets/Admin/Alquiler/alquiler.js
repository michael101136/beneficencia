 $(document).on("ready" ,function(){
          ControlAlquiler();
          listaAlquiler();
          lista();
          $("#btn_alquiler").click(function(){
                  get_categoria();
          });
          $("#txt_fechafinalquiler").blur(function(){
             var html2="";
             $("#ErrorFecha").html(html2);
            var fecha = new Date();
            fechaA=$("#txt_fechaalquiler").val();
            fechaAFinal=$("#txt_fechafinalquiler").val();
            if(fechaA < fechaAFinal)
              {
                var html1="";
                $("#ErrorFecha").html(html1);
              }else
              {
                var html="fecha de vencimiento no puede ser menor al de inicio";
                $("#ErrorFecha").html(html);
              }
          })
          $("#cbCategoria").change(function(){
            var categoria=$("#cbCategoria").val();
              get_cuartel(categoria);
          });
          $("#cbCuartel").change(function(){
            var id_cuartel=$("#cbCuartel").val();
             get_nivel(id_cuartel);
          });
          $("#cbxNivel").change(function(){
            var id_cuartel=$("#cbCuartel").val();
            var nivel=$("#cbxNivel").val();
             get_nicho(id_cuartel,nivel);
          });
          $("#cbNicho").click(function() {
            var id_cuartel=$("#cbCuartel").val();
            var nivel=$("#cbxNivel").val();
            mostrarPrecioNicho(id_cuartel,nivel);
          });
                 
             
                //FIN AGREGAR ALQUILER
                //AGREGAR ALQUILER
                $("#form-ModificarAlquiler").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Alquiler/ModificarAlquiler",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          alert(respuesta);
                          $('#tabla-alquiler').dataTable()._fnAjaxUpdate();
                        }
                    });
                });
                //FIN AGREGAR ALQUILER
                
                
                //FIN AGREGAR ALQUILER
                $('#txt_aniosAlquiler').keyup(function(){
                        
                        var precioRenovacionA=$("#precioRenovacionA").val();
                        var txt_aniosAlquiler=$("#txt_aniosAlquiler").val();    
                        //alert("/"+precioRenovacionA+ " /" +txt_aniosAlquiler+"");                 
                        var total=Number(precioRenovacionA) * Number(txt_aniosAlquiler);
                        $("#txt_TotalPago").val(total);
                })

             $("#form-DeudaNicho").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Alquiler/updateDeudaNicho",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          $('#tabla-alquiler').dataTable()._fnAjaxUpdate();
                        }
                    });
                });
             $("#form-RenovarAlquiler").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Alquiler/RenovacionAlquiler",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          swal("Se Renovo Correctamente")
                          $('#tabla-alquiler').dataTable()._fnAjaxUpdate();
                        }
                    });
                });
			});
        var get_categoria=function(){
          html="";
                    $("#cbCategoria").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/Get_categoria",
                        type:"POST",
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            html +="<option value='0'> Seleccionar Categoria</option>";
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_categoria"]+"> "+registros[i]["categoria"]+" </option>";
                            };
                            $("#cbCategoria").html(html);//para modificar las entidades
                        }
                    });
        }
        var mostrarPrecioNicho=function(id_cuartel,nivel)
        {             
                    var precio="";
                    $("#txt_precio").val("");
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Nicho/Get_Precio",
                        type:"POST",
                        data:{id_cuartel:id_cuartel,nivel:nivel},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <1;i++) {
                              precio=registros[i]["precio"]; 
                            };
                            $("#txt_precio").val(precio);
                        }
                    });
        }
        //para el control de pagos
        var  ControlAlquiler=function(){

              $.ajax({
                        "url":base_url +"index.php/Alquiler/ControlAlquiler",
                        type:"POST",
                        data:{},
                        success:function(respuesta){

                        }
                    });
        }
        //fin control de pagos
        var get_cuartel=function(categoria){
          html="";
                    $("#cbCuartel").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_cuartel",
                        type:"POST",
                        data:{categoria:categoria},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            html +="<option value='0'> Seleccionar Cuartel</option>";
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_cuartel"]+"> "+registros[i]["nombre_cuartel"]+" </option>";
                            };
                            $("#cbCuartel").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
        }
        var  get_nivel=function(id_cuartel){
                    var html="";
                    $("#cbxNivel").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_nivel",
                        type:"POST",
                        data:{id_cuartel:id_cuartel},
                        success:function(respuesta){
                          var registros = eval(respuesta);
                            html +="<option value='0'> Seleccionar Nivel</option>";
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["nivel"]+"> "+registros[i]["nivel"]+" </option>";
                            };
                            $("#cbxNivel").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');
                       //alert(respuesta);
                        }
                    });
        }
        var  get_nicho=function(id_cuartel,nivel){
                    var html="";
                    $("#cbNicho").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_nicho",
                        type:"POST",
                        data:{id_cuartel:id_cuartel,nivel:nivel},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                             html +="<option value='0'> Seleccionar Nicho</option>";
                            for (var i = 0; i <registros.length;i++) {
                                 if(registros[i]["estado"]==1)
                                 {
                                     html +="<option style='color:red' disabled='disabled' value="+registros[i]["id_nicho"]+">" +registros[i]["numero_nicho"]+" Ocupado</option>";
                                 }else{
                                   html +="<option value="+registros[i]["id_nicho"]+"> "+registros[i]["numero_nicho"]+" </option>";
                                 }
                            };
                            $("#cbNicho").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
        }
      var listaAlquiler=function()
                {
                    var table=$("#tabla-alquiler").DataTable({
                      "order": [[ 1, "desc" ]],
                      "processing":true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      "serverSide": false,
                      
                         "ajax":{
                                    "url": base_url+"index.php/Alquiler/get_alquiler",
                                    "type":"POST",
                                    "dataSrc":""
                                  },
                                "columns":[
                                    {"data":"id_nicho","visible":false},
                                    {"data":"id_nicho_detalle","visible": false},
                                    {"data":"nombrepasaje","visible": false},
                                    {"data":"categoria"},
                                    {"data":"nombre_cuartel"},
                                    {"data":"numero_nicho"},
                                    {"data":"nivel"},
                                    {"data":"id_difunto","visible": false},
                                    {"data":"tnombre"},
                                    {"data":"tapellido"},
                                    {"data":"fecha_fallecimiento","visible": false},
                                    {"data":"idresponsable","visible": false},
                                    {"data":"Dni_responsable","visible": false},
                                    {"data":"nombre_responsable"},
                                    {"data":"apellido_responsable"},
                                    {"data":"fecha_inicio"},
                                    {"data":"fecha_final"},
                                    {"data":"MontoAlquiler"},
                                    {"data":"deuda","defaultContent": "<button>Estado</button>", "class": "center","render": function ( data, type, full, meta )
                                        {
                                          var i=data;
                                          if(i==-0 || i<0)
                                          {
                                            return '<a href=""><span class="label label-sm label-success"> 0</span></a>'
                                          }else{
                                            return '<a href=""><span class="label label-sm label-danger"> '+data+'</span></a>'
                                          }
                                       }},
                                    {"data": "EstadoA", "defaultContent": "<button>Estado</button>", "class": "center","render": function ( data, type, full, meta )
                                        {
                                          var i=data;
                                          if(i==1)
                                          {
                                            return '<a href=""><span class="label label-sm label-success"> Pago</span></a>'
                                          }else{
                                            return '<a href=""><span class="label label-sm label-danger"> Vencido</span></a>'
                                          }
                                       }
                                     },
                                    {"defaultContent":"<div class='btn-group'> <a href='#' data-toggle='dropdown' class='btn btn-link dropdown-toggle'><span class='fa fa-ellipsis-v'></span></a> <ul class='dropdown-menu  pull-right ' role='menu'>  <button class='DarBajaDifunto btn btn-xs btn btn-danger' data-toggle='modal' data-target='#VentaDarBaja' data-rel='tooltip' title='Eliminar Difunto'>Dele </button> <button class='editar btn btn-xs btn-info' data-toggle='modal' data-target='#VentanaModificarAlquiler' data-rel='tooltip' title='Editar Difunto y responsable'>Editar </button> <button class='renovacion btn btn-xs btn-success' data-toggle='modal' data-target='#VentanaRenovacionNichos' data-rel='tooltip' title='Renovacion de Nichos'>Reno </button><button class='boleta btn btn-xs btn-info' data-toggle='modal' data-target='' data-rel='tooltip' title='Boleta'>Boleta </button></ul>"}
                                ],
                                "language":idioma_espanol,
                                "lengthMenu": [[3, 10, 20,100,500,20000,10000000], [3, 10, 20, 100,500,20000,10000000]],
                    });
                   Datalquiler("#tabla-alquiler",table);  //obtener data de la division funcional para agregar  AGREGAR
                   DatalDarBaja("#tabla-alquiler",table);  //obtener data de la division funcional para agregar  AGREGAR
                   renovacion("#tabla-alquiler",table);  //obtener data de la division funcional para agregar  AGREGAR
                   boleta("#tabla-alquiler",table);
                }
                var  renovacion=function(tbody,table)
                {
                    $(tbody).on("click","button.renovacion",function(){
                        var data=table.row($(this).parents("tr")).data();
                          $("#id_detalleNichoR").val(data.id_nicho_detalle);
                          $('#Id_alquileINichoDetalle').val(data.id_nicho_detalle);
                          $('#txt_fechaFinalA').val(data.fecha_final);
                          $("#txt_nombredDiCompleto").val(data.tnombre+' '+data.tapellido);
                          $("#txt_nombredDiCompletoDeuda").val(data.tnombre+' '+data.tapellido);
                          $("#txt_Deuda").val(data.deuda);
                          $("#divRenovacion").hide();
                          $("#divDeuda").hide();
                          if(data.deuda>0)
                          {
                            var id_nicho_detalle=data.id_nicho_detalle;
                            $("#id_detalleNicho").val(id_nicho_detalle);
                            $("#txt_fechaFinalDeuda").val(data.fecha_final);
                            $("#divDeuda").show();
                          }else{
                            var id_nicho_detalle=data.id_nicho_detalle;
                            var id_difunto=data.id_difunto;
                            var id_nicho=data.id_nicho;
                            var deuda=data.deuda;
                            $("#divRenovacion").show();
                          }
                          var id_nicho=data.id_nicho;
                          var nivel=data.nivel;

                          $.ajax({ "url":base_url +"index.php/Alquiler/get_nichoDetalleRenovacion",type:"POST",data:{id_nicho:id_nicho,nivel:nivel},
		                          	success:function(respuesta)
		                          	{	
		                          		var registros = eval(respuesta);
                                        $("#DetalleRenovacion").html("");
			                            for (var i = 0; i <registros.length;i++) 
			                             {
    	                                  var numero_nicho=registros[i]["numero_nicho"];
    	                                  var nivel=registros[i]["nivel"];
    	                                  var precioRenovacion=registros[i]["precio_renovacion"];
                                          $("#precioRenovacionA").val(precioRenovacion);
                                          if(data.deuda>0)
                                          {
                                          $("#DetalleRenovacion").append('Pago de Deuda Numero '+numero_nicho+' Nivel '+nivel+'  '+precioRenovacion );
                                          }else{
                                          $("#DetalleRenovacion").append('Precio Renovacion Numero '+numero_nicho+' Nivel '+nivel+'  '+precioRenovacion );
                                          }
                           				 };
		                          		
									}
								});
                    });
                }

                 var  boleta=function(tbody,table)
                {
                    $(tbody).on("click","button.boleta",function()
                    {
                        var data=table.row( $(this).parents("tr")).data();
                            var boleta=data.id_nicho_detalle;
                            swal({
                            title: "Esta seguro de generar una boleta!",
                            text: "",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes, Generar",
                            cancelButtonText: "No, cancelado",
                            closeOnConfirm: false,
                            closeOnCancel: false
                          },
                          function(isConfirm) {
                            if (isConfirm) {
                              window.location.href=base_url+"index.php/Alquiler/BoletaAlquiler/"+boleta;
                            } else {
                              swal("Cancelado", "", "error");
                            }
                          });

                    });
                }

                var  Datalquiler=function(tbody,table)
                {
                    $(tbody).on("click","button.editar",function(){
                        var data=table.row( $(this).parents("tr")).data();
                          $('#Id_alquileINichoDetalle').val(data.id_nicho_detalle);
                          $('#txt_nombredifuntoModicar').val(data.tnombre);
                          $('#txt_apellidodifuntoModicar').val(data.tapellido);
                          $('#id_difuntoModificar').val(data.id_difunto);
                          $('#txt_fechafDifucionModicar').val(data.fecha_fallecimiento);
                          //fecha de alquiler
                          $('#txt_fechaalquilerModicar').val(data.fecha_inicio);
                          $('#txt_fechafinalquilerModicar').val(data.fecha_final);
                          //fin fecha de alquiler
                         //Datos del responsable
                          $('#txt_nombreresposableModicar').val(data.nombre_responsable);
                          $('#txt_apellidoresponsableModicar').val(data.apellido_responsable);
                          $('#txt_DniModicar').val(data.Dni_responsable);

                          $('#txt_idresponsableModificar').val(data.idresponsable);
                          //fin datos del responsable
                    });
                }
                var DatalDarBaja=function(tbody,table)
                {
                      $(tbody).on("click","button.DarBajaDifunto",function(){
                       var data=table.row( $(this).parents("tr")).data();
                              var id_nicho =data.id_nicho;
                              var id_nicho_detalle =data.id_nicho_detalle;
                              $("#txt_nichoDetalle").val(id_nicho);
                              $("#txt_nichoDetalle2").val(id_nicho_detalle);

                              $("#nombreDifunto").val(data.tnombre+' '+data.tapellido);

                              //fin datos del responsable
                        });
                }
                 
        var idioma_espanol=
                {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

     function lista()
					{
						event.preventDefault();
						$.ajax({
              "url": base_url+"index.php/Alquiler/get_alquiler",
							type:"POST",
							success:function(respuesta){
								//console.log(respuesta);

							}
						});
					}
