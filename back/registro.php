<?php
include './core/Main.php';
$login = new Login_model();

$mng="";
if($_POST){
    extract($_REQUEST);
    if($login->insertUsuario($email, $nombre, $apellido, $password, $dni, $vehiculo, $tipoUser, $diaNacimiento)){
        $mng='<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>   ' .  $lengua['REGISTRO_CORRECTO']  . '</div>';
        header("location:registrook.php");
    }else {
         $mng='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>   ' .  $lengua['REGISTRO_ERROR']  . '</div>';
   
    }
}

?>

<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FASTPACKET - LOGIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}


    </style>
</head>

<body>

    <!-- Navigation -->
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
       <li class="active"><a href="index.php"><?php echo $lengua['SALUDO']; ?>    </a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lengua['MENU_LENGUAJES']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?lang=es"><?php echo $lengua['MENU_ESPANOL']; ?></a></li>
				<li><a href="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>?lang=en"><?php echo $lengua['MENU_INGLES']; ?></a></li>
           <!-- <li role="separator" class="divider"></li>-->
          
          </ul>
        </li>

           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lengua['MENU_TEXTO']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
                <li><a href="login.php"><?php echo $lengua['MENU_LOGIN']; ?></a></li>
				<li><a href="registro.php"><?php echo $lengua['MENU_REGISTRO']; ?></a></li>
          </ul>
        </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     <br /><br /><br />
    <div class = "container ">   <div class="row text-center">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-star"></span> <?php echo $lengua['REGISTRO_TITLE']; ?> <span class="glyphicon glyphicon-star"></span> </h1> 
            </div>
        </div>
    <hr />

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well text-center">
						 <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

							  <hr class="colorgraph">
                                     <span><?=$mng?></span>
                              <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">Nombre</span>
                                      <input type="text" name="nombre" class="form-control" placeholder="Nombre" required ="" autofocus="" aria-describedby="basic-addon1">
                              </div>
							<br />
                              <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon2">Apellidos</span>
                                      <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required ="" autofocus="" aria-describedby="basic-addon2">
                              </div>
                             <br />
                              <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon3">Email</span>
                                      <input type="email" name="email" class="form-control" placeholder="Email" required ="" autofocus="" aria-describedby="basic-addon3">
                              </div>
                             <br />
                               <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon4">D.N.I</span>
                                      <input type="text" name="dni" class="form-control" placeholder="D.N.I" required ="" autofocus="" aria-describedby="basic-addon4">
                              </div>
                             <br />
                             <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon5">Fecha de nacimiento</span>
                                      <input type="date" name="diaNacimiento" class="form-control" placeholder="Fecha de nacimiento" required ="" autofocus="" aria-describedby="basic-addon1">
                              </div>
                             <br />
                             <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon6">Tipo de Usuario</span>
                                      <select name="tipoUser" class="form-control" required ="" autofocus="" aria-describedby="basic-addon6">
										<option value="mensajero">Mensajero</option>
										<option value="usuario">Usuario</option>
									  </select>
                              </div>
                             <br />

                             <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon7">Vehiculo</span>
                                       <select name="vehiculo" class="form-control" required ="" autofocus="" aria-describedby="basic-addon7">
											<option value="usuario">-</option>
											<option value="bici">Bici</option>
											<option value="moto">Moto</option>
											<option value="coche">Coche</option>
										</select>
                              </div>
                             <br />

							<div class="input-group">
                                      <span class="input-group-addon" id="basic-addon8">Contraseña</span>
                                      <input type="password" name="password" class="form-control" placeholder="Fecha de nacimiento" required ="" autofocus="" aria-describedby="basic-addon8">
                              </div>
                             <hr/>
                            <div class="row text-center">
                               
                                 <div class="col-md-12">

                                      <button class="btn btn-lg btn-primary btn-block"  name="Submit"  type="Submit"><?php echo $lengua['REGISTRO_GUARDAR']; ?></button>  
                                </div>

                            </div>			
                             <hr class="colorgraph">
                             <ul class="list-inline pull-right">
		    	                    <li><a href="../index.php" ><?php echo $lengua['LOGIN_VOLVER']; ?></a></li>
                                    <li><a href="login.php" ><?php echo $lengua['LOGIN_ENTRAR']; ?></a></li>
                                    <li><a href="recuperar.php" ><?php echo $lengua['LOGIN_RECUPERAR']; ?></a></li>
    		                  </ul>	
                              <br />
            </form>
           

			   </div>

                </div>
           
        </div>
    <!-- Header -->
  

       

	

       
</div>
      
	

    
<!-- Scripts -->
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>

    </html>


<!--

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="site_media/css/styleBack.css">
    </head>
    <body class="Login">
       
        
        <div id="login">
            <div class="conteLogin">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

                <h1>Registro</h1>

                <input type="nombre" name="nombre" placeholder="nombre" required autofocus>
                <input type="apellido" name="apellido" placeholder="apellido" required>
                <input type="email" name="email" placeholder="user@email.com" required>
                <input type="text" name="dni" placeholder="DNI" required>
                <label>Fecha de nacimiento</label>
                <input type="date" name="diaNacimiento" required>
                
                <label>Tipo de Usuario</label>
                <select name="tipoUser">
                    <option value="mensajero">Mensajero</option>
                    <option value="usuario">Usuario</option>
                </select>
                <label>Vehiculo</label>
                <select name="vehiculo">
                    <option value="usuario">-</option>
                    <option value="bici">Bici</option>
                    <option value="moto">Moto</option>
                    <option value="coche">Coche</option>
                </select>
                <label>Contraseña</label>
                <input type="password" name="password" placeholder="****" required>
                
                <input type="submit" value="Entrar">
                <a href="login.php">Ya estoy registrado</a>


            </form>

            <span><?=$mng?></span>
        </div>
        </div>
        
        
    </body>
</html>
-->