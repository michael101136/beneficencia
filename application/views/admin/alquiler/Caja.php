<ul class="breadcrumb">
                    <li><a href="#">Alquiler</a></li>
                    <li><a href="#">Caja</a></li>
                    <li class="active"><?=date('m/d/Y');?></li>
                </ul>
<div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Caja</h2>
                </div>
         <div class="row">
                        <div class="col-md-12">
                            <!-- START TABS -->
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Caja</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                      <form class="form-horizontal " action="<?php echo  base_url();?>index.php/Caja/generarcaja" method="POST">
                                        <div class="form-group">

                                                           <label class="col-md-1 control-label">Fecha Inicio</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_fechaInicio" name="txt_fechaInicio" type="date" class="form-control calendario" >
                                                          </div>
                                                           <label class="col-md-1 control-label">Fecha Fin</label>
                                                           <div class="col-md-3">
                                                                 <input id="txt_fechafin" name="txt_fechafin"  type="date" class="form-control calendario">
                                                          </div>
                                                          <button  type="submit" class="btn btn-success">
						                                      <span class="glyphicon glyphicon-floppy-disk"></span>
						                                      Reporte
						                                  </button>

                                                </div>
                                         </form>
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <p>In mattis sapien lorem, nec tincidunt elit scelerisque tempus. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END TABS -->
                        </div>
