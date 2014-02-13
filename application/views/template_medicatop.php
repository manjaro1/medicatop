<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <?= $_scripts ?>
    <?= $_styles ?>

    <!-- Bootstrap core CSS -->
    <link href="http://medicatop.local/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="http://medicatop.local/assets/css/style.css" rel="stylesheet">
    <link href="http://medicatop.local//assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://medicatop.local/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://medicatop.local/assets/js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="http://medicatop.local/assets/css/bootstrap-select.css">
    <script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                //'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });
    </script>
</head>

<body>
    <!-- Page Content -->

    <div class="container">
        <div class="row">
        <div class="col-lg-9 col-md-9">
        <div class="row">
			<nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="/assets/images/logo.png" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://medicatop.local/">Inicio</a></li>
                    <li><a href="/contacto">Contacto</a>
                    </li>
                    <li><a href="assets/adm/login.html">Entrar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    		</nav>
         </div>
    		<div class="row">
            <div class="col-lg-12">
            <form action="#">
            <div class="input-group search">
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form> 
              </div>
             </div>   
            <div class="row">
            <form>
            <div class="col-lg-5"> 
            <select class="selectpicker">
            <?php print $especialidades ?>
            <!--<option>Todas las Especialidades</option>
            <option>Alergólogo</option>
            <option>Anestesiólogo</option>
            <option>Cirujano Abdominal</option>-->
            </select>
            </div>
            <div class="col-lg-4">
            <select class="selectpicker">
            <option>Todas las Ubicaciones</option>
            <option>Campeche</option>
            <option>Ciudad del Carmen</option>
            <option>Yucatán</option>
            </select>
            </div>
            <div class="col-lg-3" align="right">
            <div class="space-10"></div>
            <p>Búsqueda Avanzada</p>
            </div>
            </form></div> 
            <!-- contenedor-->
            <?php print $content ?>
		</div>
        
        <div class="col-lg-3 col-md-3">
        <div class="row">
        <ul class="list-header">
        <li><a href="adm/login.html">Acceder</a></li>
        <li><a href="adm/registro.html">Registrarse</a></li>
        <li><img src="/assets/images/fb.jpg" /></li>
        <li><img src="/assets/images/tw.jpg" /></li>
        </ul>
        </div>
        <div class="box-text">
        <div class="row">
        <div class="head col-lg-12">
        <p> ¿Eres médico?</p>
        </div>
        <div class="foot col-lg-12">
       <p> Registrate en el Directorio</p>
        </div>
        </div>
        </div>
        <div class="banners">
        <div class="row">
        <div class="col-sm-6 col-lg-12 col-md-12">
        <img src="/assets/images/banners/banner-1.jpg" class="banner"></div>
        <div class="col-sm-6 col-lg-12 col-md-12">
        <img src="/assets/images/banners/banner-2.jpg" class="banner"></div>
        <div class="col-sm-6 col-lg-12 col-md-12">
        <img src="/assets/images/banners/banner-3.jpg" class="banner">
        </div>
        </div>
        </div></div>
        </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <footer>
    <div class="container">
            <div class="row">
                <div  class="col-lg-12">
                <ul>
                <li><a href="#">Acerca de MedicaTop</a></li>
                <li><a href="#">Anúnciate con nosotros</a></li>
                <li><a href="#">Términos de Uso</a></li>
                <li><a href="#">Aviso de Privacidad</a></li>
                <li><a href="#">Pautas para Publicidad</a></li>
                <li><a href="#">Mapa de Sitio</a></li>
                <li><a href="#">Contáctanos</a></li>
                </ul></div>
                <div class="clearfix"></div>
                 <div class="col-lg-12 col-md-12">   
                 <p>© 2013 Medica Top S.A. de C.V. Todos los derechos reservados</p></div>
                </div>
            </div>

    </div>
        </footer>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/modern-business.js"></script>

</body>

</html>