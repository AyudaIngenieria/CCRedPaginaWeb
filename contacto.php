<html>
  <head>
    <title>
      Grupo CCRed - Contacto
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
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
     <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li>
           <a href="index.html">Inicio</a>
         </li>
         <li>
           <a href="acercade.html">Acerca de..</a>
         </li>
         <li>
           <a href="servicios.html">Servicios</a>
         </li>
         <li>
           <a href="clientes.html">Clientes</a>
         </li>
         <li>
           <a href="galeria.html">Galería</a>
         </li>
         <li>
           <a href="tienda.html">Tienda</a>
         </li>
         <li class="active">
           <a href="contacto.php">Contacto</a>
         </li>
         <li>
           <a href="login.php">Login</a>
         </li>
       </ul>
     </div>
   </nav>

  <!-- Inicia el formulario -->
    <div class="container-fluid">
      <form action="procesaenv.php" method="post" class="form-horizontal">
        <fieldset>
          <!-- Form Name -->
          <legend><h1>Contacto</h1></legend>
          <h4>Gracias por interesarse en nuestros servicios. </h4>
          <h4>Por favor, pon tus datos y con gusto uno de nuestros representantes se pondrá en contacto contigo.</h4>
        </fieldset>
          <!-- Text input-->
        <div class="row">
          <div class="col-lg-6">
            <form action="procesaenv.php" method="post" class="form-horizontal">
              <div class="form-group">
                <br>
                <br>
                <label class="control-label col-xs-4">Nombre(s):</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input  name="nombre" placeholder="Nombre" class="form-control"  type="text">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4" >Apellido(s):</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input name="apellido" placeholder="Apellido" class="form-control"  type="text">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Correo electrónico:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <input name="correo" placeholder="Correo electronico" class="form-control"  type="text">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Número de teléfono:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                      <input name="telefono" placeholder="Número de teléfono" class="form-control" type="text">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Ciudad:</label>
                  <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <input name="ciudad" placeholder="Ciudad" class="form-control"  type="text">
                    </div>
                  </div>
                  <br>
                  <br>
                <label class="control-label col-xs-4">Estado:</label>
                  <div class="col-xs-8 selectContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="estado" class="form-control selectpicker" >
                      <option value=" ">Por favor, seleccione el estado</option>
                      <option>Aguascalientes</option>
                      <option>Baja California</option>
                      <option>Baja California Sur</option>
                      <option>Campeche</option>
                      <option>Chiapas</option>
                      <option>Chihuahua</option>
                      <option>Ciudad de México</option>
                      <option>Colima</option>
                      <option>Durango</option>
                      <option>Estado de México</option>
                      <option>Guanajuato</option>
                      <option>Guerrero</option>
                      <option>Hidalgo</option>
                      <option>Jalisco</option>
                      <option>Michoacán</option>
                      <option>Morelos</option>
                      <option>Nayarit</option>
                      <option>Nuevo León</option>
                      <option>Oaxaca</option>
                      <option>Puebla</option>
                      <option>Queretaro</option>
                      <option>Quintana Roo</option>
                      <option>San Luis Potosí</option>
                      <option>Sinaloa</option>
                      <option>Sonora</option>
                      <option>Tabasco</option>
                      <option>Tamaulipas</option>
                      <option>Tlaxcala</option>
                      <option>Veracruz</option>
                      <option>Yucatán</option>
                      <option>Zacatecas</option>
                    </select>
                  </div>
                </div>
                <br>
                <br>
              <label class="control-label col-xs-4">C.P:</label>
                <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="cod_postal" placeholder="Código Postal" class="form-control"  type="text">
                </div>
              </div>
              <br>
              <br>
            <label class="control-label col-xs-4">Asunto:</label>
              <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              	  <textarea class="form-control" name="asunto" placeholder="" ></textarea>
                </div>
              </div>
              <br>
              <br>
              <br>
            <label class="control-label col-xs-4">Mensaje:</label>
              <div class="col-xs-8 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="mensaje" placeholder=""></textarea>
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
                <div class="col-lg-9">
                  <center><img src="img/contacto/construccion.png" alt="construccion" class="img-rounded" width='300' height='300'></center>
                </div>
              </div>

    </div> <!--Div del container-fluid-->
    <a href="#"><img src="img/contacto/boton.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 2%;"  width='30' height='30'  /></a>
  </body>
</html>
