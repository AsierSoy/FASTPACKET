<?php
include './core/Main.php';
$sesion=new Sesion_model();
$sesion->seguridad("id_usuario");
$cms= new Cms_model();
$mng="";
$orden= "fechaIni DESC";
$tipopagina=0;

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
  
    $arrayObjEnvio= $cms->selectEnviosLibres($orden);
    $index=(($page-1)*($recordsPerPage));
    $recordsToBeDisplayed = array_slice($arrayObjEnvio,$index,$recordsPerPage);// this array contains all the records you would want to display on a page;
    $total_pages=ceil(count($arrayObjEnvio)/$recordsPerPage);
}
else { 

    //use default values
    $page=1;
  
    $arrayObjEnvio= $cms->selectEnviosLibres($orden);
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
                <h1><span class="glyphicon glyphicon-star"></span> <?php echo $lengua['ZONA_PEDIDOS_LIBRES']; ?> <span class="glyphicon glyphicon-star"></span> </h1> 
            </div>
        </div>
    <hr />
<div class="container">

 <?php include './col/Panel_Envios.php'; ?>



</div>
                

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