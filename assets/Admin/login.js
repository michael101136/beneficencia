$(document).on("ready",main);
function main(){
	$("#login").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp){
				if(resp=="error")
				{
					alert("error");
				}
				else{
					window.location.href=base_url+"index.php/Alquiler/"
				}
			}
		});
	});

	 $("#cerrar1").on("click",function(event){
		alert("hola");
		//event.preventDefault();
		/*$.ajax({
			url:"http://localhost/siabanacay/index.php/Alquiler/cerrar",
			type:"POST", 
			data:{},
			success:function(){
				window.location.href = "http://localhost/siabanacay/";
			}
		});*/
	});
	$('#cerrar1').click(function() {
    	alert("hola");
    });

}