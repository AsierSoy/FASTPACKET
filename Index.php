<?php
include_once 'back/core/common.php';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">


    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            
                <li><a href="back/login.php"><?php echo $lengua['MENU_LOGIN']; ?></a></li>
				<li><a href="back/registro.php"><?php echo $lengua['MENU_REGISTRO']; ?></a></li>
          </ul>
        </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <hr class="intro-divider">
                        <h1><?php echo $lengua['TITULO_WEB']; ?> </h1>
                         <hr class="intro-divider">
                        <h3><?php echo $lengua['TEXTOPRESENTACION']; ?></h3>
                        <h3><?php echo $lengua['TEXTOPRESENTACION2']; ?> </h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            	<li><a href="#main" class="btn btn-info btn-lg scrolly"><?php echo $lengua['SERCLIENTE']; ?></a></li>
								<li><a href="#mainmensa" class="btn btn-warning btn-lg scrolly"><?php echo $lengua['SERMENSA']; ?></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <h2 class="">¿Porqu&eacute; deber&iacute;a ser <strong>CLIENTE</strong> de FastPacket?</h2>
    				    <p class="lead">   Sigue leyendo y te daremos muy buenas razones.Explicaci&oacute;n al <strong>cliente</strong> de porqu&eacute; FastPacket es una buena opci&oacute;n de envios,
						    <br />[ texto provisional ], porqu&eacute; deber&iacute;a enviar sus paquetes mediante FastPacket/<strong>skel</strong>,and, [ texto provisional ]
                        </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <h2 class="section-heading">¿Porqu&eacute; deber&iacute;a ser <strong>MENSAJERO</strong> de FastPacket?</h2>
                    <p class="lead">   Sigue leyendo y te daremos muy buenas razones.Explicaci&oacute;n al <strong>mensajero</strong> de porqu&eacute; FastPacket es una buena opci&oacute;n de envios,
						    <br />[ texto provisional ], porqu&eacute; deber&iacute;a enviar sus paquetes mediante FastPacket/<strong>skel</strong>,and, [ texto provisional ]
                        </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

   
	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row text-center">
                <div class="col-md-6">
                    <h2><?php echo $lengua['HEADING2']; ?></h2>
                </div>
                <br />
                <div class="col-md-6">
                    <ul class="list-inline text-center">
                      <li><input type="text" class="form-control input-lg " name="txtcodpostal" id="txtcodpostal" placeholder="Cod. Postal" required ></li>
					  <li><input type="submit" class="btn btn-success btn-lg "   value="<?php echo $lengua['BUSCAR']; ?>"></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   	<ul class=" list-inline icons">
						<li><a href="#" class=""><span class="label label-default">Twitter</span></a></li>
						<li><a href="#" class=""><span class="label label-default">Facebook</span></a></li>
						<li><a href="#" class=""><span class="label label-default">Google+</span></a></li>

					</ul>
                    <p class="copyright text-muted small">Copyright &copy; <?php echo $lengua['TITULO_WEB']; ?> 2015-2025 Design: <a href="#">Asierukoooo</a></p>
                </div>
            </div>
        </div>
    </footer>
<!-- Scripts -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>