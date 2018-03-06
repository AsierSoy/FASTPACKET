  <!-- Sidebar de búsqueda -->
<div class="sidebar">
    
       
           <div class="panel panel-default">
                <div class="panel-heading"> <span class="glyphicon glyphicon-search"></span>  <?php echo $lengua['BOTON_BUSCAR']; ?></div>
                <div class="panel-body form-horizontal table-responsive">
                     <div class="row ">
                             <div class="col-md-12 ">
                             <div class="input-group">
                                <span class="input-group-addon" id="basic-addon5">Ref.</span>
                                <input type="number" class="form-control input-sm" id="identificador" name="identificador" aria-describedby="basic-addon5">                
                            </div>
                            </div>
                    </div>
                    <div class="row">                       
                         <div class="col-md-12 ">
                            <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><?php echo $lengua['TEXTO_SALIDA']; ?></span>
                            <input type="date" class="form-control input-sm" id="salida" name="salida" aria-describedby="basic-addon1">                
                        </div>
                        </div>
                    </div>
                     <div class="row">
                          <div class="col-md-12 ">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2"><?php echo $lengua['TEXTO_LLEGADA']; ?></span>
                                    <input type="date" class="form-control input-sm" id="llegada" name="llegada" aria-describedby="basic-addon2">                
                                </div>
                        </div>
                     </div>
                     <div class="row">
                          <div class="col-md-12 ">
                         <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3"><?php echo $lengua['TEXTO_DISTANCIA']; ?></span>
                            <input type="number" class="form-control input-sm" id="distancia" name="distancia" aria-describedby="basic-addon3">                
                        </div>
                              </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12 ">
                         <div class="input-group">
                            <span class="input-group-addon" id="basic-addon4"><?php echo $lengua['TEXTO_BULTOS']; ?></span>
                            <input type="number" class="form-control input-sm" id="bultos" name="bultos" aria-describedby="basic-addon4">                
                        </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-12 ">                             
                            <hr />
                        </div>
                    </div>
                     <div class="row pull-right">
                    <div class="col-md-12 ">
                         <a href="#" class=" btn btn-success"><?php echo $lengua['BOTON_BUSCAR']; ?></a>
                     </div>
                     </div>
                </div>
            </div>  
       
      
</div>