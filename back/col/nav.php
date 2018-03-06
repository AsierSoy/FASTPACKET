<?php
print_r($_SESSION["id_usuario"]);
//este inc esta incluido en todas las page, por tanto puede acceder a la clase Main
$user= new User_model();
$objUser = $user->selectUsuario($_SESSION["id_usuario"]);

?>
<!-- Header -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#page-top"><?php echo $lengua['TITULO_WEB']; ?></a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
     <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
       <li class=""><a href="index.php"><?php echo $lengua['SALUDO']; ?>    <?=$objUser->getTipoUser()?></a></li>



         <?php if($objUser->getTipoUser() == 'mensajero'){?>
                <li class="mensajero  <?php if($tipopagina==0){ ?> active <?php } ?> " title=""><a href="envios_libres.php">Envios Libres</a></li>
                <li class="mensajero  <?php if($tipopagina==1){ ?> active <?php } ?>  " title=""><a href="perfil_mensajero.php">Aceptados</a></li>
        <?php  }else { ?>

                <li class="mensajero" title="Crear envio"><a href="envio.php">Nuevo Envio</a></li>
                <li class="mensajero   <?php if($tipopagina==2){ ?>  active  <?php } ?>  " title="Mis pedidos"><a href="perfil_cliente.php">Mis envios</a></li>
         <?php } ?>
                                 



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lengua['MENU_LENGUAJES']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?lang=es"><?php echo $lengua['MENU_ESPANOL']; ?></a></li>
				<li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?lang=en"><?php echo $lengua['MENU_INGLES']; ?></a></li>
           <!-- <li role="separator" class="divider"></li>-->
          
          </ul>
        </li>

           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <?=$objUser->getNombre()?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editarUser.php"><?php echo $lengua['MENU_EDITAR']; ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="salir.php"><?php echo $lengua['MENU_SALIR']; ?></a></li>
          </ul>
        </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


