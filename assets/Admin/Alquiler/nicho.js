 $(document).on("ready" ,function(){
          
          listanichos();
         listarcuartel();
			});
        $("#form-addnicho").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Nicho/AddNichos",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(resp){
                        alert(resp);
                         $('#tabla-nicho').dataTable()._fnAjaxUpdate();    //SIRVE PARA REFRESCAR LA TABLA
                     }
                    });
                });
      var listanichos=function()
                {
                    var table=$("#tabla-nicho").DataTable({
                     "processing":true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      "serverSide": false,
                         "ajax":{
                                    "url": base_url+"index.php/Nicho/get_nicho",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"nombre_cuartel"},
                                    {"data":"numero_nicho"},
                                    {"data":"nivel"},

                                    {"defaultContent":"<button class='btn btn-xs btn-danger' data-toggle='modal' data-target='#VentanaModificarEntidad' data-rel='tooltip' title='Eliminar'><i class='ace-icon fa fa-trash-o bigger-120'></i> </button> <button class='btn btn-xs btn-info' data-toggle='modal' data-target='#VentanaModificarAlquiler' data-rel='tooltip' title='Editar'><i class='ace-icon fa fa-pencil bigger-120'></i> </button>"}

                                ],

                                "language":idioma_espanol,
                                 "lengthMenu": [[4, 10, 20,100,20000], [4, 10, 20, 100,20000]],
                    });
 //buscador

        //fin buscador


                }

     //LISTAR CUATELES EN COMBO PARA REGISTRAR NICHOS           
var listarcuartel=function(){
          htmlCuartel="";
                    $("#cbxCuartelN").html(htmlCuartel);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Cuartel/get_cuartel",
                        type:"POST",
                        success:function(respuesta){
              
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              htmlCuartel +="<option value="+registros[i]["id_cuartel"]+"> "+registros[i]["nombre_cuartel"]+" </option>";
                            };
                            $("#cbxCuartelN").html(htmlCuartel);//para modificar las entidades
                        }
                    });
        }
//FIN LISTAR CUATELES EN COMBO PARA REGISTRAR NICHOS  

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

     /*function lista()
					{
						event.preventDefault();
						$.ajax({
              "url": base_url+"index.php/Alquiler/get_alquiler",
							type:"POST",
							success:function(respuesta){
								alert(respuesta);

							}
						});
					}*/
