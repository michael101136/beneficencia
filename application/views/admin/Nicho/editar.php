<form class="form-horizontal " id="form-addcuartel" action="<?php echo  base_url();?>index.php/Nicho/editar" method="POST">
        <div class="hr hr-1 dotted hr-double"></div>
		    <div class="row">
		    	DATOS DEL NICHO<br><br>
		    	<div class="form-group">
		    		<label class="col-md-1 control-label">Cuartel</label>
		    		<div class="col-md-3">
                        <input id="hdId" name="hdId" value="" class="form-control" type="text">
		    			<input id="txt_numero_nicho" name="txt_numero_nicho" value="" class="form-control" type="text">
		    		</div>
                    <div class="col-md-3">
                        <input id="txt_nivel" name="txt_nivel" value="" class="form-control" type="text">
                    </div>
                    <div class="col-md-3">
                        <input id="txt_precio_alquiler" name="txt_precio_alquiler" value="" class="form-control" type="text">
                    </div>
                    <div class="col-md-3">
                        <input id="txt_precio_renovacion" name="txt_precio_renovacion" value="" class="form-control" type="text">
                    </div>
		    	</div>
		    </div>
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