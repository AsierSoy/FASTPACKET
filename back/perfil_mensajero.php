<?php
include './core/Main.php';
$sesion=new Sesion_model();
$sesion->seguridad("id_usuario");
$cms= new Cms_model();
$mng="";
$orden= "fechaIni DESC";
$tipopagina=1;

if(isset($_GET['recordsPerPage']))
{
    $recordsPerPage=$_GET['recordsPerPage'];
}
else
{
    $option = isset($_POST['recordPerPage']) ? $_POST['recordPerPage'] : false;
    if ($option) {
        $recordsPerPage= $_POST ['recordPerPage'];
    }
    else{
        $recordsPerPage=3;
    }
}



if(isset($_GET['page']))
{
    $page=$_GET['page'];   // get the value of the page from your url
    $arrayObjEnvio= $cms->selectMisEnviosAceptados($orden,$_SESSION["id_usuario"]);
    $index=(($page-1)*($recordsPerPage));
    $recordsToBeDisplayed = array_slice($arrayObjEnvio,$index,$recordsPerPage);// this array contains all the records you would want to display on a page;
    $total_pages=ceil(count($arrayObjEnvio)/$recordsPerPage);
}
else { 

    //use default values
    $page=1;
    $arrayObjEnvio= $cms->selectMisEnviosAceptados($orden,$_SESSION["id_usuario"]);
    $recordsToBeDisplayed = array_slice($arrayObjEnvio,0,$recordsPerPage);// this array contains all the records you would want to display on a page;
    $total_pages=ceil(count($arrayObjEnvio)/$recordsPerPage);
}





?>
<!--estructura-->
<?php include './col/header.php'; ?>
<?php include './col/nav.php'; ?>
             
   
    <br /><br /><br />
       <div class="row text-center">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-star"></span> <?php echo $lengua['ZONA_MENSAJERO']; ?> <span class="glyphicon glyphicon-star"></span> </h1> 
            </div>
        </div>
    <hr />
<div class="container">



     <?php include './col/Panel_Envios.php'; ?>
</div>
                
      
                
                
                
                
                
                
                
                
                



                <!--<section>
        <?php if (count($arrayObjEnvio)>0){
                    foreach ($arrayObjEnvio as $objEnvio){ ?>
        <div class="conte">
            <a href="<?= $objEnvio->getId()?>" class="listado_envio">
                <div class="post">
                <div class="block_user">
                    <div class="img_user">
                        <img title="Avatar" src="site_media/upload/avatar.png">
                    </div>
                    <div class="nom_user"><p><?= $objEnvio->getNombreSalida() ?></p></div>
                    <div class="tipo_user"><p>Mensajero</p></div>
                    <div class="vehiculo_user"><img src="site_media/upload/bike.svg"></div>
                </div>
                <div class="block_envio">
                    <div class="block_diaSalida">
                        <p><span class="bold">Salida:</span> <?= $objEnvio->getDiaSalida() ?> - <?= $objEnvio->getHora1Salida()?> a <?= $objEnvio->getHora2Salida()?></p>
                    </div>
                    <div class="block_diaLlegada">
                        <p><span class="bold">Destino:</span> <?= $objEnvio->getDiaDestino() ?> - <?= $objEnvio->getHora1Destino()?> a <?= $objEnvio->getHora2Destino()?></p>
                    </div>
                    <div class="block_km"><p><?= $objEnvio->getKm() ?></p></div>
                    <div class="block_Salida">
                        <p><span class="bold">Salida:</span> <?= $objEnvio->getDirecSalida()?>, <?= $objEnvio->getPoblacionSalida()?>, <?= $objEnvio->getCiudadSalida()?></p>
                    </div>
                    <div class="block_Legada">
                        <p><span class="bold">Destino:</span> <?= $objEnvio->getDirecDestino()?>, <?= $objEnvio->getPoblacionDestino()?>, <?= $objEnvio->getCiudadDestino()?></p>
                    </div>
                    
                </div>
                <div class="block_datos">
                    <div class="costeEstado">
                        <div class="coste"><p>5€</p></div>
                        <?php if($objEnvio->getEstado()==inactivo){ ?>
                        <div class="estado"><p>Enviado</p></div>  
                        <?php } ?>
                    </div>
                    <div class="dimensi"><span class="bold">Alt:</span> <?= $objEnvio->getAltoCm()?> <span class="bold">Anch:</span> <?= $objEnvio->getAnchoCm()?> <span class="bold">Profudo:</span> <?= $objEnvio->getProfundoCm()?></div>
                    <div class="cantidad"><span class="bold">Bultos:</span> <?= $objEnvio->getCantidad()?></div>
                    <div class="proceso">Reservado</div>
                    
                </div>
            </div>
            </a>
            </div>
            
                  <?php  }
                }else {
                    $mng="No hay registros";
                } ?>
        
    </section>-->    
   <?php include './col/footer.php'; ?>



<script>

    $(document).ready(function () {
        var id;
        $('[id^=detail-]').hide();
        $('.toggle').click(function () {
            input = $(this);
            id=input.attr('data-toggle');
            target = $('#' +id );
            target.slideToggle();
            nombre = '#icon-' + id;
            
            //glyphicon  pull-right
            if ($('#icon-' + id).hasClass('glyphicon-plus-sign'))
            {
                $('#icon-' + id).removeClass('glyphicon-plus-sign');
                $('#icon-' + id).addClass('glyphicon-minus-sign');

            }
            else
            {
                $('#icon-' + id).removeClass('glyphicon-minus-sign');
                $('#icon-' + id).addClass('glyphicon-plus-sign');

            }
                
                //.toggleClass("glyphicon glyphicon-chevron-up pull-right");

        });
    });

</script>
