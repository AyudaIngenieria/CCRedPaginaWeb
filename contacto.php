<html>
  <head>
      <link rel="icon" href="icon/ccredico.ico" type="icon/ccredico.ico" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
      Contacto
    </title>

    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Estilos Modificados-->
    <link href="css/style.css" rel="stylesheet">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, links, icons" />

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div id="navbar" class="collapse navbar-collapse">
        <div class="row">
          <div class="1">
          </div>
          <div class="col-sm-2">
            <ul class="nav navbar-nav">
                <a href="index.html">
                  <img src="img/LogosCCRED/logoblanco.png"  style="margin-top;" width="55px" height="50px">
                </a>
            </ul>
          </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="index.html">Inicio</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="nosotros.html">Nosotros</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                 <a href="servicios.html" data-toggle="dropdown" class="dropdown-toggle">Servicios</a>
                  <ul class="dropdown-menu">
                    <li><a href="monitoreo-de-redes.html">Monitoreo de redes</a></li>
                    <li><a href="voz-datos-y-video.html">Voz, datos y video</a></li>
                    <li><a href="optimizacion-de-energia.html">Optimización de la energia</a></li>
                    <li><a href="cableado-estructurado.html">Cableado estructurado</a></li>
                    <li><a href="capacitacion.html">Capacitación</a></li>
                    <li><a href="seguridad.html">Seguridad</a></li>
                    <li></li>
                  </ul>
                </li>
             </ul>
            </div>

          <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="clientes.html">Clientes</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="galeria.html">Galería</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li>
                  <a href="productos.html">Productos</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-1">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="contacto.php">Contacto</a>
                </li>
              </ul>
            </div>

            <div class="col-sm-2">
              <ul class="nav navbar-nav">
                <li>
                  <a href="registro.php"><i class="glyphicon glyphicon-user" title="Regístrate"></i></a>
                </li>
              </ul>
              <ul class="nav navbar-nav">
                <li>
                  <a href="login.php"><i class="glyphicon glyphicon-log-in" title="Ingresar"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

  <!-- Inicia el formulario -->
    <div class="container-fluid">

        <fieldset>
          <!-- Form Name -->
          <legend><h1>Contacto</h1></legend>
          <h4>Gracias por interesarse en nuestros servicios. </h4>
          <h4>Por favor, pon tus datos y con gusto uno de nuestros representantes se pondra en contacto contigo.</h4>
        </fieldset>
          <!-- Text input/ Inicia el formulario-->
        <div class="row">
          <div class="col-lg-6">
            <form action="formenviar.php" method="POST" class="form-horizontal">
              <div class="form-group">
                <br>
                <br>
                <label class="control-label col-xs-4">Nombre(s):</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" required="required" name="nombre" placeholder="Nombre/s" class="form-control">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4" >Apellido(s):</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" required="required" name="apellido" placeholder="Apellido/s" class="form-control">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Correo electrónico:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input type="email" required="required" name="correo" placeholder="Correo electronico" class="form-control">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Número de teléfono:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input type="text" required="required" name="telefono" placeholder="Número de teléfono" class="form-control">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Delegación/Municipio:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input type="text" required="required" name="delmpio" placeholder="Delegación/Municipio" class="form-control">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Estado:</label>
                  <div class="col-xs-8 selectContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <input type="text" required="required" name="estado" placeholder="Estado" class="form-control">
                  </div>
                </div>
                <br>
                <br>
              <label class="control-label col-xs-4">C.P:</label>
                <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input type="text" required="required" name="cod_postal" placeholder="Código Postal" class="form-control">
                </div>
              </div>
              <br>
              <br>
            <label class="control-label col-xs-4">Asunto:</label>
              <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <input type="text" required="required" name="asunto" placeholder="" class="form-control">
                </div>
              </div>
              <br>
              <br>
            <label class="control-label col-xs-4">Mensaje:</label>
              <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <input type="text" required="required" name="mensaje" placeholder="" class="form-control">
                </div>
              </div>
              <br>
              <br>
              <br>
              <div class="form-group">
                <div class="col-xs-offset-6 col-xs-6">
                  <button type="submit" class="btn btn-md btn-color">Enviar <span class="glyphicon glyphicon-send"></span></button>
                  <button type="reset" class="btn btn-md btn-color">Borrar <span class="glyphicon glyphicon-erase"></span></button>
                </div>
              </div>
              <br>
              <br>
            </div><!--Div form-group-->
          </div><!--Div col-lg-6 parte 1-->
        </form>


          <div class="col-lg-6">
            <br>
            <br>
            <br>
            <br>
            <center>
              <img src="img/contacto/contacto.png" alt="contacto" />
            </center>
          </div><!--Div col-lg-6 parte 2-->
        </div><!--Div row-->

        <legend><h1>Vísitanos</h1></legend>
        <h4>Vísitanos en nuestras oficinas centrales ubicadas en: </h4>

          <div class="row">
            <div class="col-lg-6">
              <br>
              <br>
              <br>
              <br>
                <center><h2><b>Venustiano Carranza, CDMX</b></h2></center>
                <center><h5><b>Retorno 30 de Fray Servando Teresa de Mier No. 10</b></h5></center>
                <center><h5><b>Col. Jardín Balbuena</b></h5></center>
                <center><h5><b>C.P 15900</b></h5></center>
                <center><h5><b>Venustiano Carranza, Ciudad de México</b></h5></center>
            </div>
              <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.8797004000544!2d-99.1022985853806!3d19.417603086892775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc1de0f8fd51%3A0x292f98ca82466f10!2sGrupo+CCred+Cableado+y+Comunicaciones!5e0!3m2!1ses-419!2smx!4v1487821505398"></iframe>
                </div>
              </div>
          </div>

          <br>
          <br>
          <legend><h1>Presencia CCred</h1></legend>
          <h4>Tenemos presencia a nivel nacional en: </h4>
          <br>

          <div class="row">
              <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.6747027992205!2d-98.3706738413746!3d26.07688552615232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86650426b2a09495%3A0xef0a853045bb9a23!2sSEA+Comunicacion!5e0!3m2!1ses-419!2smx!4v1487874770820"></iframe>
                </div>
              </div>
               <div class="col-lg-6">
                 <br>
                 <br>
                 <br>
                  <center><h2><b>Reynosa, Tamaulipas</b></h2></center>
                  <center><h4><b>SEA Comunicación S.A de C.V</b></h4></center>
                  <center><h5><b>Carretera Federal Reynosa-Monterrey Km. 213 Local. 10 y 11</b></h5></center>
                  <center><h5><b>Col. Valle Alto</b></h5></center>
                  <center><h5><b>C.P 88710</b></h5></center>
                  <center><h5><b>Tel(s). (899)455-5675; 456-6090; 456-6091 </b></h5></center>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
                <center><h2><b>Apodaca, Nuevo León</b></h2></center>
                <center><h4><b>ERACOM S.A de C.V</b></h4></center>
                <center><h5><b>Calle. Retorno San Bernardo No. 233</b></h5></center>
                <center><h5><b>Col. Ex Hacienda San Francisco</b></h5></center>
                <center><h5><b>C.P 66600</b></h5></center>
                <center><h5><b>Tel(s). (81)8212-0896; 8212-0897 </b></h5></center>
            </div>
              <div class="col-lg-6">
                <br>
                <br>
                <br>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.353723791727!2d-100.2170283569421!3d25.75887750689964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eb760166e3ff%3A0xbbf7005e83ce3cac!2sERACOM+S.A+de+C.V!5e0!3m2!1ses-419!2smx!4v1487876639394s"></iframe>
                </div>
              </div>
          </div>

          <br>
          <br>
          <legend><h1>Próximamente</h1></legend>
          <h4>Espera nuestras próximas aperturas en: </h4>
          <br>
              <div class="row">
                <div class="col-lg-3">
                  <ul>
                    <li><h3>Tepic, Nayarit</h3></li>
                    <li><h3>Querétaro, Querétaro</h3></li>
                    <li><h3>Cancún, Quintana Roo</h3></li>
                  </ul>
                </div>
              </div>
    </div> <!--Div del container-fluid-->

    <footer class="footer-distributed">

      <div class="footer-left" align="center">
        <a href="index.html">
          <img src="img/LogosCCRED/logoccred.png" align="left" style="margin-bottom;" width="80px" height="80px">
        </a>
      </div>

      <div class="footer-center" align="center">
        <p class="footer-links" style="margin-bottom;">
          <a href="index.html" align="center">Inicio</a>
          ·
          <a href="nosotros.html" align="center">Nosotros</a>
          ·
          <a href="servicios.html" align="center">Servicios</a>
          ·
          <a href="clientes.html" align="center">Clientes</a>
          ·
          <a href="galeria.html" align="center">Galería</a>
          ·
          <a href="productos.html" align="center">Productos</a>
          </p>
        <p align="center"><font color="#CEC8c4"><h6>Grupo CCred S.A de C.V &copy; Todos los derechos reservados. 2017</h6></font></p>
      </div>

      <div class="footer-right" align="center" style="margin-bottom">
        <a href="https://www.facebook.com/GrupoCCred/"><i class="fa fa-facebook" style="color: #3B5998;"></i></a>
        <a href="https://twitter.com/GrupoCCred"><i class="fa fa-twitter" style="color: #55ACEE;"></i></a>
        <a href="https://www.instagram.com/grupoccred/"><i class="fa fa-instagram" style="color: #FBAD50;"></i></a>
        <a href="#"><i class="fa fa-youtube-play" style="color: #BB0000;"></i></a>
      </div>

    </footer>

<p style="margin:-1.5% 0;"></p>

  </body>
</html>
