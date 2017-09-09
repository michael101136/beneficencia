 $(document).on("ready" ,function(){
          
          //creando el local storacha
          var selected_index = -1; //Index of the selected ListCar item
          var DataCuartelCars = localStorage.getItem("DataCuartelCars");//Retrieve the stored data

          DataCuartelCars = JSON.parse(DataCuartelCars); //Converts string to object

          if(DataCuartelCars == null) //If there is no data, initialize an empty array
            DataCuartelCars = [];
          //fin local storach

          listacuartel();

          //lista();
          $("#btn_cuartel").click(function()//para que cargue el como una vez echo click sino repetira datos
                    {

                    listarcategoria();
                    });
            $("#cbxCategoria").change(function(){//para cargar en agregar division funcionañ
                   listarpasajes();
             });
            var i=0;
            $("#addCarritoCuartel").click(function(){
                return AddCuarletes();
              
            });
            $("#btn_borrar").click(function(){
              alert("se borar los datos");
              localStorage.clear();
              
            });

            function AddCuarletes(){
                var car = JSON.stringify({
                  cbxCategoria  : document.getElementById("cbxCategoria").value ,
                  cbxPasaje     : document.getElementById("cbxPasaje").value ,
                  txt_cuartel   : document.getElementById("txt_cuartel").value
                });
                DataCuartelCars.push(car);
                localStorage.setItem("DataCuartelCars", JSON.stringify(DataCuartelCars));
                alert("Se guarda los cuarteles.");
                ListCuarteles();
                return true;
                console.log(DataCuartelCars);
              }
               $("#addCuartelTodo").click(function(){
                   for(var i in DataCuartelCars){
                          var cli = JSON.parse(DataCuartelCars[i]);
                             cbxCategoria =cli.cbxCategoria;
                             cbxPasaje=cli.cbxPasaje;
                             txt_cuartel=cli.txt_cuartel;
                              event.preventDefault();
                                  $.ajax({
                                      url:base_url+"index.php/Cuartel/AddCuartelTodo",
                                      type:"post",
                                      data:{cbxCategoria:cbxCategoria,cbxPasaje:cbxPasaje,txt_cuartel:txt_cuartel},
                                      success:function(resp){
                                       $('#tabla-cuartel').dataTable()._fnAjaxUpdate();    //SIRVE PARA REFRESCAR LA TABLA
                                   }
                                  });
                        }
                      alert("Se guado todos los cuarles");

                });

    function ListCuarteles(){
                        document.getElementById('tblList').innerHTML ="";
                        var datos =" ";
                        //datos += "<table>" ;
                        datos += "<thead>";
                        datos +=  "<tr>";
                        datos +=  " <th>Año</th>";
                        datos +=  " <th>Montos Programados</th>";
                        datos +=  " <th>Monto Operacion Y mantenimiento</th>";
                        datos +=  "</tr>";
                        datos +="</thead>";
                        datos +="<tbody>";

                        for(var i in DataCuartelCars){
                          var cli = JSON.parse(DataCuartelCars[i]);
                            datos +="<tr>";
                            datos += "  <td>"+cli.cbxCategoria+"</td>" ;
                            datos += "  <td>"+cli.cbxPasaje+"</td>" ;
                            datos += "  <td>"+cli.txt_cuartel+"</td>" ;
                            datos += "</tr>";
                        }
                        datos +="</tbody>";
                        //datos += "</table>";
                      document.getElementById('tblList').innerHTML =datos;
                      document.getElementById("cbxCategoria").value = "";
                      document.getElementById("cbxPasaje").value ="" ;
                      document.getElementById("txt_cuartel").value = "";
                      console.log('entro en el ListCarar')
               }

            $("#form-addcuartel").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Cuartel/AddCuartel",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(resp){
                        alert(resp);
                         $('#tabla-cuartel').dataTable()._fnAjaxUpdate();    //SIRVE PARA REFRESCAR LA TABLA
                     }
                    });
                });
			});
      var listarcategoria=function(){
          html="";
                    $("#cbCategoria").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/Get_categoria",
                        type:"POST",
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_categoria"]+"> "+registros[i]["categoria"]+" </option>";
                            };
                            $("#cbxCategoria").html(html);//para modificar las entidades
                        }
                    });
        }
         var listarpasajes=function(){
          html="";
                    $("#cbxPasaje").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Cuartel/Get_pasaje",
                        type:"POST",
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_pasaje"]+"> "+registros[i]["nombrepasaje"]+" </option>";
                            };
                            $("#cbxPasaje").html(html);//para modificar las entidades
                        }
                    });
        }
      var listacuartel=function()
                {
                    var table=$("#tabla-cuartel").DataTable({
                     "processing":true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      "serverSide": false,
                         "ajax":{
                                    "url": base_url+"index.php/Cuartel/get_cuartel",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"categoria"},
                                    {"data":"nombrepasaje"},
                                    {"data":"nombre_cuartel"},

                                    {"defaultContent":"<button class='btn btn-xs btn-danger' data-toggle='modal' data-target='#VentanaModificarEntidad' data-rel='tooltip' title='Eliminar'><i class='ace-icon fa fa-trash-o bigger-120'></i> </button> <button class='btn btn-xs btn-info' data-toggle='modal' data-target='#VentanaModificarAlquiler' data-rel='tooltip' title='Editar'><i class='ace-icon fa fa-pencil bigger-120'></i> </button>"}

                                ],

                                "language":idioma_espanol,
                                 "lengthMenu": [[4, 10, 20,100,20000], [4, 10, 20, 100,20000]],
                    });
 //buscador

        //fin buscador


                }
                //agregar cuartel

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
