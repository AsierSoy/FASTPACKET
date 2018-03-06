



    <?php if (count($recordsToBeDisplayed)>0){?>



<div class="row ">
     <div class="col-md-4">
      <?php include './col/busqueda.php'; ?>
     
     </div>
   
      <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list"></span>
                    
                    
                      <?php 
                         switch ($tipopagina) {
                              case 0://Envios libres
                                 echo $lengua['TEXTO_PEDIDOS_LIBRES']; ;
                                  break;
                              case 1: //Pedidos Aceptados Mensajero
                                  echo $lengua['TEXTO_PEDIDOS_ACEPTADOS']; 
                                  break;
                              case 2: //Pedidos del cliente
                                  echo $lengua['TEXTO_MI_LISTADO']; 
                                  break;
                          }
            
                        echo $_SESSION["id_usuario"];

                      ?>



    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >    
                    <div class="pull-right action-buttons">Pag.
                        <select name="recordPerPage" onchange="this.form.submit()" class="selectpicker">
                        <option value="3" <?php echo ($recordsPerPage == 3 ? "selected" : ""); ?>>3</option>
                        <option value="5"  <?php echo ($recordsPerPage == 5 ? "selected" : ""); ?>>5</option>
                        <option value="10"  <?php echo ($recordsPerPage == 10 ? "selected" : ""); ?>>10</option>
                      </select>
                 
                    </div>
     </form>
                </div>
                <div class="panel-body  ">
                    <div class="row">
                        <div class="col-md-12 ">
                             <ul class="list-group">
                                    <?php   foreach ($recordsToBeDisplayed as $objEnvio){ ?>
                            
                                <li class="list-group-item" >
                                    <div class="row toggle" style="cursor:pointer;" id="dropdown-detail-<?= $objEnvio->getId()?>" data-toggle="detail-<?= $objEnvio->getId()?>">
                                        <div class="col-xs-10">
                                             <?php echo $lengua['TEXTO_PEDIDO']; ?>  <?= $objEnvio->getId()?>
                                             <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                                           <span class="label label-warning">Sin Mensajero</span>
                                             <?php 
                                                          break;
                                                      case 1: //Pedidos Aceptados Mensajero
                                                             ?>
                                                           <span class="label label-success">Aceptado</span>
                                             <?php 
                                                          break;
                                                      case 2:
                                                          if($objEnvio->getAceptado()!='0'){ ?>
                                                                 <span class="label label-success"> Aceptado </span>
                                                            <?php } else {?>
                                                                 <span class="label label-warning"> Pendiente </span>
                                                            <?php }?>

                                                          <span class="label label-warning"> En curso </span>
                                                              <span class="label label-danger"> No entregado </span>
                                                              <span class="label label-success"> Entregado </span>
                                                         <?php   break;
                                             }?>
                                        </div>
                                       
                                        <div class="col-xs-2"><span style="cursor:pointer;" id="icon-detail-<?= $objEnvio->getId()?>" class="glyphicon glyphicon-plus-sign pull-right"></span></div>
                                    </div>
                                    <div id="detail-<?= $objEnvio->getId()?>">
                                        <hr/>
                                        <div class="row">
                                      
                                            <div class="col-md-12  table-responsive">                                     
                                              <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                                          
                                             <?php 
                                                          break;
                                                      case 1: //Pedidos Aceptados Mensajero
                                                             ?>
                                                             <div class="panel panel-default">
                                                                    <div class="panel-heading"><?php echo $lengua['TEXTO_PERSONA_ENVIA']; ?></div>
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img title="Avatar" class="image featured" src="site_media/upload/avatar.png"/>

                                                            </div>
                                                            <div class="col-md-9">
                                                                 <table class="table table-striped table-condensed">
                                                            <thead>
                                                                <tr>
                                                               
                                                               
                                                                <th><?php echo $lengua['TEXTO_NOMBRE']; ?></th>                                             
                                                                <th><?php echo $lengua['TEXTO_TELEFONO']; ?></th>
                                                                <th><?php echo $lengua['TEXTO_EMAIL']; ?></th>      
                                                                <th><?php echo $lengua['TEXTO_PERFIL']; ?></th>
                                                      
                                                                </tr>
                                                            </thead>   
                                                            <tbody>
                                                                <tr>                                                               
                                                                <td> <?= $objEnvio->getNombreSalida() ?></td>            
                                                                    
                                                                        <td><?= $objEnvio->getTeleSalida() ?></td>
                                                                        <td><?= $objEnvio->getMailSalida() ?></td>                                       
                                                                <td>  <a href="#" class="btn btn-info"><?php echo $lengua['BOTON_VER_PERFIL']; ?></a></td>                                                
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                            </div>

                                                        </div>
                                                                    </div>
                                                                </div>
                                             <?php 
                                                          break;
                                                      case 2: //Listado de pedidos del cliente
                                                          

                                                         if($objEnvio->getAceptado()!='0'){ ?>
                                                           <div class="panel panel-default">
                                                                    <div class="panel-heading"><?php echo $lengua['TEXTO_MENSAJERO']; ?></div>
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img title="Avatar" class="image featured" src="site_media/upload/avatar.png"/>

                                                            </div>
                                                            <div class="col-md-9">
                                                                 <table class="table table-striped table-condensed">
                                                            <thead>
                                                                <tr>
                                                               
                                                               
                                                                <th><?php echo $lengua['TEXTO_MENSAJERO']; ?></th>                                             
                                                                <th><?php echo $lengua['TEXTO_TELEFONO']; ?></th>
                                                                <th><?php echo $lengua['TEXTO_EMAIL']; ?></th>      
                                                                <th><?php echo $lengua['TEXTO_PERFIL']; ?></th>
                                                      
                                                                </tr>
                                                            </thead>   
                                                            <tbody>
                                                                <tr>                                                               
                                                                <td> <?= $objEnvio->getNombreSalida() ?></td>            
                                                                    
                                                                        <td><?= $objEnvio->getTeleSalida() ?></td>
                                                                        <td><?= $objEnvio->getMailSalida() ?></td>                                       
                                                                <td>  <a href="#" class="btn btn-info"><?php echo $lengua['BOTON_VER_PERFIL']; ?></a></td>                                                
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                            </div>

                                                        </div>
                                                                    </div>
                                                                </div>

                                                         <?php } else {?>
                                                               <div class="row">
                                                                   <div class="col-md-12 text-center">
                                                                        <div class="alert alert-warning" role="alert"><h4><?php echo $lengua['AVISO_SIN_ACEPTAR']  ?> </h4></div>
                                                                   </div>
                                                               </div>
                                                            <?php }

                                                        break;
                                             }?>
                                                                                                                                          
                                           <div class="panel panel-default">
                                                  <div class="panel-heading"><?php echo $lengua['TEXTO_RESUMEN']; ?></div>
                                                  <div class="panel-body text-center">
                                                    <table class="table table-striped table-condensed table-bordered">
                                                        <thead>
                                                        <tr>
                                             <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                                    
                                                                      <th><?php echo $lengua['TEXTO_PERSONA_ENVIA']; ?></th>
                                                                      <th><?php echo $lengua['TEXTO_SALIDA']; ?></th>
                                                                      <th><?php echo $lengua['TEXTO_DIRECCION_SALIDA']; ?></th>
                                                                      <th> <?php echo $lengua['TEXTO_PERFIL']; ?></th>
                                                                  </tr>
                                                              </thead>   
                                                              <tbody>
                                                                <tr>
                                                                    <td><?= $objEnvio->getNombreSalida() ?></td>
                                                                    <td><?= $objEnvio->getDiaSalida() ?> <br /> <?= $objEnvio->getHora1Salida()?> a <?= $objEnvio->getHora2Salida()?></td>
                                                                    <td><?= $objEnvio->getDirecSalida()?>, <?= $objEnvio->getPoblacionSalida()?>, <?= $objEnvio->getCiudadSalida()?></td>   
                                                                    <td>  <a href="#" title="Ver perfil del usuario" class="btn btn-info"><?php echo $lengua['BOTON_VER_PERFIL']; ?></a></td>              
                                                                </tr>
                                                                       
                                                                   </tbody>
                                                            </table>
                                             <?php 
                                                          break;
                                                      case 2:
                                                      case 1: //Pedidos Aceptados Mensajero
                                             ?>
                                                                      <th><?php echo $lengua['TEXTO_SALIDA']; ?></th>
                                                                      <th><?php echo $lengua['TEXTO_DIRECCION_SALIDA']; ?></th>
                                                                      <th><?php echo $lengua['TEXTO_LLEGADA']; ?></th>
                                                                      <th><?php echo $lengua['TEXTO_DIRECCION_LLEGADA']; ?></th>
                                                                  </tr>
                                                                  </thead>   
                                                                  <tbody>
                                                                    <tr>
                                                                        <td><?= $objEnvio->getDiaSalida() ?> <br /> <?= $objEnvio->getHora1Salida()?> a <?= $objEnvio->getHora2Salida()?></td>
                                                                         <td><?= $objEnvio->getDirecSalida()?>, <?= $objEnvio->getPoblacionSalida()?>, <?= $objEnvio->getCiudadSalida()?></td>   
                                                                       <td><?= $objEnvio->getDiaDestino() ?> <br /> <?= $objEnvio->getHora1Destino()?> a <?= $objEnvio->getHora2Destino()?></td>
                                                                        <td><?= $objEnvio->getDirecDestino()?>, <?= $objEnvio->getPoblacionDestino()?>, <?= $objEnvio->getCiudadDestino()?></td>   
                                                                    </tr>          
                                                                      
                                                                   </tbody>
                                                            </table>
                                                                <table class="table table-striped table-condensed text-left">
                                                                      <thead>
                                                                      <tr>
                                                                              <th><?php echo $lengua['TEXTO_ATT_SALIDA']; ?> </th>
                                                                           <th><?php echo $lengua['TEXTO_OBSERVACIONES']; ?> </th>
                                                                      </tr>
                                                                      </thead>   
                                                                      <tbody>
                                                                        <tr>
                                                                           <td><?= $objEnvio->getAttSalida() ?></td>
                                                                            <td><?= $objEnvio->getComenSalida() ?></td>         
                                                                        </tr>                                                                                                                       
                                                                      </tbody>
                                                                    </table>                                                                                                               
                                                                
                                             <?php 
                                                          break;
                                                    
                                             }?>


                                              <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                          <div class="panel panel-default">
                                              <div class="panel-heading text-left">ENTREGAR A</div>
                                               <div class="panel-body text-center">
                                                <table class="table table-striped table-condensed table-bordered">
                                                  <thead>
                                                  <tr>
                                                      <th><?php echo $lengua['TEXTO_NOMBRE']; ?></th>
                                                      <th><?php echo $lengua['TEXTO_LLEGADA']; ?></th>
                                                      <th><?php echo $lengua['TEXTO_DIRECCION_LLEGADA']; ?></th>
                                                    
                                                                              
                                                  </tr>
                                              </thead>   
                                              <tbody>
                                                <tr>
                                                  <td><?= $objEnvio->getNombreDestino() ?></td>
                                                  <td><?= $objEnvio->getDiaDestino() ?> <br /> <?= $objEnvio->getHora1Destino()?> a <?= $objEnvio->getHora2Destino()?></td>
                                                   <td><?= $objEnvio->getDirecDestino()?>, <?= $objEnvio->getPoblacionDestino()?>, <?= $objEnvio->getCiudadDestino()?></td>                                                           
                                                </tr>          
                                              </tbody>
                                            </table>     
                                               </div>
                                          </div>                                                                                                                                                                                        
                                              <?php 
                                                          break;
                                                      case 2:
                                                      case 1: //Pedidos Aceptados Mensajero
                                             ?>     
                                                
                                              <div class="panel panel-default">
                                              <div class="panel-heading text-left">ENTREGAR A</div>
                                               <div class="panel-body text-center">
                                                      <table class="table table-striped table-condensed table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th><?php echo $lengua['TEXTO_NOMBRE']; ?></th>                                             
                                                                <th><?php echo $lengua['TEXTO_TELEFONO']; ?></th>
                                                                <th><?php echo $lengua['TEXTO_EMAIL']; ?></th>                                                
                                                              </tr>
                                                          </thead>   
                                                          <tbody>
                                                            <tr>
                                                                
                                                                <td> <?= $objEnvio->getNombreDestino() ?></td>
                                                                    <td><?= $objEnvio->getTeleDestino() ?></td>
                                                                    <td><?= $objEnvio->getMailDestino() ?></td>                                             
                                                            </tr>
                                                                   </tbody>
                                                           </table>

                                                      <table class="table table-striped table-condensed text-left">
                                                          <thead>
                                                          <tr>
                                                               <th><?php echo $lengua['TEXTO_ATT_LLEGADA']; ?></th>
                                                               <th><?php echo $lengua['TEXTO_OBSERVACIONES']; ?> </th>
                                                          </tr>
                                                          </thead>   
                                                          <tbody>
                                                            <tr>
                                                               <td><?= $objEnvio->getAttDestino() ?></td>
                                                                <td><?= $objEnvio->getComenDestino() ?></td>         
                                                            </tr>                                                                                                                       
                                                          </tbody>
                                                     </table>  
                                               </div>
                                                  </div>
                                             <?php 
                                                          break;
                                                    
                                             }?>
                                        
                                                      
                                          


                                           <div class="panel panel-default">
                                              <div class="panel-heading text-left"><?php echo $lengua['TEXTO_PAQUETE']; ?></div>
                                               <div class="panel-body text-center">
                                                     <table class="table table-striped table-condensed table-bordered">
                                                  <thead>
                                                  <tr>
                                                      
                                                      <th><?php echo $lengua['TEXTO_ALTO']; ?></th>
                                                      <th><?php echo $lengua['TEXTO_ANCHO']; ?></th>
                                                      <th><?php echo $lengua['TEXTO_PROFUNDO']; ?></th>
                                                      <th> <?php echo $lengua['TEXTO_BULTOS']; ?></th>
                                                      <th><?php echo $lengua['TEXTO_COSTE']; ?></th>      
                                                                                    
                                                  </tr>
                                              </thead>   
                                              <tbody>
                                                <tr>
                                                   
                                                    <td><?= $objEnvio->getAltoCm()?></td>
                                                    <td> <?= $objEnvio->getAnchoCm()?></td>
                                                     <td> <?= $objEnvio->getProfundoCm()?></td>
                                                      <td> <?= $objEnvio->getCantidad()?></td>
                                                    <td><h3><span class="label label-default">5€</span></h3></td>       
                                                                                  
                                                </tr>
                                               
                                                                         
                                              </tbody>
                                            </table>
                                                </div>
                                            </div>
                                             <div class="panel panel-default">
                                              <div class="panel-heading text-left"><?php echo $lengua['TEXTO_OPCIONES']; ?> </div>
                                               <div class="panel-body text-center">
                                                   <div class="row ">
                                                       <div class="col-md-12">
                                                           <div class="btn-group" role="group" >

                                                                 <?php  
                                             
                                                                     switch ($tipopagina) {
                                                                              case 0://Envios libres
                                                                     ?>
                                                                                <button type="button" title="Ver recorrido"  class="btn btn-info"><?php echo $lengua['BOTON_RECORRIDO']; ?></button>
                                                                                <button type="button"  title="Presentar una oferta para este envio" class="btn btn-warning"><?php echo $lengua['BOTON_PRESENTAR_OFERTA']; ?></button>
                                                                                <button type="button" title="Aceptar el pedido"  class="btn btn-success"><?php echo $lengua['BOTON_ACEPTAR_PEDIDO']; ?></button>
                                                                     <?php 
                                                                                  break;
                                                                              case 1: //Pedidos Aceptados Mensajero
                                                                                     ?>
                                                                                    <button type="button" title="No se ha podido entregar el pedido"  class="btn btn-danger">NO ENTREGADO</button>
                                                                                    <button type="button" title="Ver recorrido"  class="btn btn-info"><?php echo $lengua['BOTON_RECORRIDO']; ?></button>
                                                                                    <button type="button"  title="Se entrega el pedido correctamente" class="btn btn-success">ENTREGADO</button>
                                                                     <?php 
                                                                                  break;
                                                                              case 2:
                                                                                  echo "i es igual a 2";
                                                                                  break;
                                                                     }?>


                                                             
                                                            </div>
                                                        </div>
                                                  </div>
                                                </div>
                                            </div>
                                                
                                          
                                         
                                                         </div>
                                                </div> 
                                            </div>


                                        </div>                                     
                                    </div>
                                </li>
                                  <?php } ?>

                             </ul>


                            
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <h4> Total:  <span class="label label-primary"><?= count($arrayObjEnvio) ?></span></h4>
                        </div>
                        <div class="col-md-6">

                              <?php if (count($recordsToBeDisplayed)>0){
                              ?>


                             <ul class="pagination pagination-sm pull-right">
                                  <?php if($total_pages!=1){
                                            if($page==1)
                                            {?>
                                          <li class="disabled" ><a href="#"><<</a></li>
                                  <?php  }
                                            else{ ?>
                                          <li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?recordsPerPage=<?=$recordsPerPage?>&page=1"><<</a></li>
                                  <?php  }?>
                                          
                                   <?php    }?>

                                
                                  <?php for($j=1;$j<=$total_pages;$j++){
                                            if($j==$page)
                                            {?>
                                       <li class="active"><a href="#"><?=$j?></a></li>
                              <?php  }
                                            else{ ?>
                                       <li style="display: inline;"><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?recordsPerPage=<?=$recordsPerPage?>&page=<?=$j?>"><u><?=$j?></u></a></li>
                              <?php  }?>
                           <?php  }?>


                                  <?php if($total_pages!=1){
                                            if($page==$total_pages)
                                            {?>
                                          <li class="disabled" ><a href="#">>></a></li>
                                  <?php  }
                                            else{ ?>
                                          <li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?recordsPerPage=<?=$recordsPerPage?>&page=<?=$total_pages?>">>></a></li>
                                  <?php  }?>
                                          
                                   <?php    }?>


                      
                                
                              </ul>
                          
                             <?php  }?>
                        
                        </div>
                    </div>
                </div>
            </div>



     </div>
</div>

     <?php  
          }else {?>
                                       <div class="row text-center">
                                           <div class="col-md-12 ">
                                               <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                                            <div class="alert alert-info" role="alert"><h2><?php echo $lengua['AVISO_SIN_ENVIOS_LIBRES']  ?> </h2></div>
                                             <?php 
                                                          break;
                                                      case 1: //Pedidos Aceptados Mensajero
                                                             ?>
                                                          <div class="alert alert-info" role="alert"><h2><?php echo $lengua['AVISO_SIN_ENVIOS_ACEPTADOS']  ?> </h2></div>
                                             <?php 
                                                          break;
                                                      case 2:
                                                          ?>
                                                           <div class="alert alert-info" role="alert"><h2><?php echo $lengua['AVISO_SIN_ENVIOS']  ?> </h2></div>
                                             <?php 
                                                          break;
                                             }?>


                                               
                                           </div>
                                       </div>
                                    <hr />
                                    <div class="row text-center">
                                           <div class="col-md-12">
                                               <?php  
                                             
                                             switch ($tipopagina) {
                                                      case 0://Envios libres
                                             ?>
                                                      
                                             <?php 
                                                          break;
                                                      case 1: //Pedidos Aceptados Mensajero
                                                             ?>
                                                            <a href="envios_libres.php" class="btn btn-info"><?php echo $lengua['BOTON_PRIMER_ENVIO_ACEPTADO']; ?></a>
                                             <?php 
                                                          break;
                                                      case 2:    
                                                          ?>
                                                           <a href="envio.php" class="btn btn-info"><?php echo $lengua['BOTON_PRIMER_ENVIO']; ?></a>
                                             <?php 
                                                         
                                                          break;
                                             }?>

                                            
                                           </div>
                                    </div>
                               <?php } ?>