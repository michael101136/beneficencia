 $(document).on("ready" ,function(){
         listarUsuario();

         $("#form-addUsurio").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Usuario/AddAusuario",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          alert(respuesta);
                          $('#tabla-usuarios').dataTable()._fnAjaxUpdate();
                        }
                    });

                });
          $("#form-Updateusuario").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Usuario/Updateusuario",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          alert(respuesta);
                          $('#tabla-usuarios').dataTable()._fnAjaxUpdate();
                        }
                    });

                });



 $("#form-UpdaCambioContrasena").submit(function(event)
				                {
				                    event.preventDefault();
				                    $.ajax({
				                        url:base_url+"index.php/Usuario/UpdaCambioContrasena",
				                        type:$(this).attr('method'),
				                        data:$(this).serialize(),
				                        success:function(respuesta){
				                          alert(respuesta);
				                          $('#tabla-usuarios').dataTable()._fnAjaxUpdate();
				                        }
				                    });

				                });

			});
				


					


      var listarUsuario=function()
                {
                    var table=$("#tabla-usuarios").DataTable({
                     "processing":true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      "serverSide": false,
                         "ajax":{
                                    "url": base_url+"index.php/Usuario/get_usuarios",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"id_usuario"},
                                    {"data":"nombres"},
                                    {"data":"apellidos"},
                                    {"data":"tipo_usuario"},
                                    {"data":"email"},
                                    {"data":"password"},
                                    {"defaultContent":"<button class='LoginCambi  btn btn-xs btn-warning' data-toggle='modal' data-target='#LoginCambi' data-rel='tooltip' title='Eliminar'><i class='ace-icon fa  fa-key bigger-120'></i></button> <button class='editar btn btn-xs btn-info' data-toggle='modal' data-target='#ventanaUsuarioAc' data-rel='tooltip' title='Editar'><i class='ace-icon fa fa-pencil bigger-120'></i> </button>"}

                                ],

                                "language":idioma_espanol,
                                 "lengthMenu": [[4, 10, 20,100,20000], [4, 10, 20, 100,20000]],
                    });
                    ActualizarUsuario("#tabla-usuarios",table);  //obtener data de la division funcional para agregar  AGREGAR
                    CambioContraseña("#tabla-usuarios",table);  //obtener data de la division funcional para agregar  AGREGAR
                }

                    var  ActualizarUsuario=function(tbody,table){
                    $(tbody).on("click","button.editar",function(){

                        var data=table.row( $(this).parents("tr")).data();
                        var id_usuario=$('#id_usuarioA').val(data.id_usuario);
                        var nombres=$('#nombresA').val(data.nombres);
                        var apellidos=$('#apellidosA').val(data.apellidos);
                        var apellidos=$('#tipo_usuarioA').val(data.tipo_usuario);
                        var apellidos=$('#usuarioA').val(data.email);
                        console.log(data.id_usuario);

                    });

                }
                  var  CambioContraseña=function(tbody,table){
                    $(tbody).on("click","button.LoginCambi",function(){
                        var data=table.row( $(this).parents("tr")).data();
                        var id_usuario=$('#IdUsuario').val(data.id_usuario);

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
