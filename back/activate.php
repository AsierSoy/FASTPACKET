<?php
include './core/Main.php';
$sesion=new Sesion_model();
$user=new User_model();
$mng="";

if($sesion->tieneSesion("id_usuario")){
		
        $usuario=new User_model();
        $user=$usuario->selectUsuario($_SESSION["id_usuario"]);
        $Activado=$user->getActivado();
       
				
		if($Activado)
		{
			$tipouser=$user->getTipoUser();
			if($tipouser!="usuario")
			{
				header("location:perfil_mensajero.php");
			}
			else
			{
				header("location:perfil_cliente.php");
			}
		}
		else
		{
			if(isset($_GET['activation']) && !empty($_GET['activation']) && isset($_GET['email']) && !empty($_GET['email'])  ){
                $key_activate= $_GET['activation'];   
                $email_activate= $_GET['email'];
                if($usuario->ActivaUsuario($key_activate,$email_activate))
                {
                    $mng='<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>   ' .  $lengua['ACTIVAR_CORRECTO']  . '</div>';
                    
                }
                else
                {
                    $mng='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>   ' .  $lengua['ACTIVAR_ERROR']  . '</div>';
                }	
            } 
            else 
            {
                header("location:../index.php");
            }
		}	
}
else
{
	if(isset($_GET['activation']) && !empty($_GET['activation']) && isset($_GET['email']) && !empty($_GET['email'])  ){
		$key_activate= $_GET['activation'];   
        $email_activate= $_GET['email'];
        $usuario=new User_model();
        if($usuario->ActivaUsuario($key_activate,$email_activate))
        {
            $mng='<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>   ' .  $lengua['ACTIVAR_CORRECTO']  . '</div>';
            
        }
        else
        {
            $mng='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>   ' .  $lengua['ACTIVAR_ERROR']  . '</div>';
        }	

	} 
	else 
	{
		header("location:../index.php");
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
    <div class = "container "> 
        
          <div class="row text-center">
            <div class="col-md-12">
                <h1><span class="glyphicon glyphicon-star"></span> <?php echo $lengua['ACTIVAR_TITLE']; ?> <span class="glyphicon glyphicon-star"></span> </h1> 
            </div>
        </div>
    <hr />

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well text-center">

                       <hr class="colorgraph"><br>
                       <span><?=$mng?></span>
                   
                        <div class="alert alert-info" role="alert"><h3>   <?php echo $lengua['AVISOCLAVE']; ?></h3></div>
                    <br />
                    
                    <hr class="colorgraph">
            
                        <ul class="list-inline pull-right">
		    	

		    	            <li><a href="../index.php" ><?php echo $lengua['LOGIN_VOLVER']; ?></a></li>
                            <li><a href="login.php" ><?php echo $lengua['MENU_LOGIN']; ?></a></li>
                           
			            </ul>	
                            <br />


				
				   </div>

                </div>
            <div class="col-md-3"></div>
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