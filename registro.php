
<html>
  <head>
    <meta charset="utf-8">
    <!----------- ICONO TITULO ------------>
    <link rel="shortcut icon" href="images/logo_title2.ico" type="image/x-icon">
    <title>Negocio Redondo</title>
    <link rel="stylesheet" href="css/stylesreg.css">
  </head>
  <body>
    <section class="bloque_header">
      <header>
        <!------------- lOGO SITIO ------------->

<a href="index.html" class="linkimg"><img src="images/logo_N_G_header_vector_200.png" alt="" class="imagen_header"></a>
        <!------------- BUSCADOR -------------->
        <div class="Search">
          <form class="buscador" action="index.html" method="post">
            <input type="text" name="" value="" placeholder="  Que estas buscando?..." class="campo_buscar" >
            <input type="submit" name="" value="Buscar" class="boton_buscar">
          </form>
        </div>
        <!--------------- LOGIN ------------->
        <div class="login">
          <div class="ingreso">
            <div class="campos">
              <input type="text" name="" value="" placeholder="  Usuario..." class="campo_login">
              <input type="text" name="" value="" placeholder="  Contraseña..." class="campo_login">
            </div>
            <input type="submit" name="" value="Ingresar" class="boton_ingresar">
          </div>

          <a href="recuperarpass.html">Olvidaste tu contraseña?</a>
        <span> / </span>
          <a href="registro.html">Registrate</a>
        </div>
      </header>
    </section>

             <!-------------SLIDER  ----------------->
    <section class="bloque_central">
        <div class="slider">
            <ul>
                <li><img src="images/logo_N_G_header_vector.png" alt=""></li>
                <li><img src="images/NegocioRedondo_vector.png" alt=""></li>
                <li><img src="images/Logo_N_G_vector.png" alt=""></li>
            </ul>
        </div>
    </section>
    <section class="registro">
        <div >
        <h2>Registro</h2>
        <form class="" action="register.php" method="post">

          <?php
          if(isset($_COOKIE["useduser"])){
            echo "el usuario ya existe <br>";
          }

           ?>
          <label for="username">Usuario: </label><br>
          <input type="text" name="username" id="usuario" value=""><br>
          <label for="firstname">Nombre: </label><br>
          <input type="text" name="firstname" id="nombre" value=""><br>
          <label for="lastname">Apelido: </label><br>
          <input type="text" name="lastname" id="apellido" value=""><br>
          <label for="age">Edad: </label><br>
          <input type="number" name="age" id="edad" value=""><br>
          <?php
          if(isset($_COOKIE["usedemail"])){
            echo "el email ya existe <br>";
          }

           ?>
          <label for="email">Email: </label><br>
          <input type="text" name="email" id="email" value=""><br>
          <?php
          if(isset($_COOKIE["dontmatch"])){
            echo "las contraseñas no coinciden <br>";
          }

           ?>
          <label for="password">Contraseña: </label><br>
          <input type="password" name="password" id="contraseña" value=""><br>
          <label for="confirmpassword">Confirmar Contraseña: </label><br>
          <input type="password" name="confirmpassword" id="contraseña" value=""><br>
          <br>
          <button type="submit" name="button">Registrar</button>
        </form>
      </div>
    </section>
        <!------------- TEXTO HOME -------------->
  <section class="bloque_home">
      <div class="texto_home">
          <p><b>Negocio Redondo</b> es un e-commerce dedicada a las compras entre usuarios inscritos a su servicio de compras, ventas y pagos por Internet. Los usuarios pueden vender tanto productos nuevos como usados a precio fijo.<br>Los pagos y transacciones para comprar/vender un producto pueden realizarce por medio de <b>Negocio Redondo</b> con tarjeta de credito, debito o bien acordar con tu comprador/vendedor otra forma de pago.<br>¿Querés comprar o vender algo, que esperas?... Hacelo de manera simple, segura y rápido.<br>          <a href="#"><b>Registrate gratis</b></a>
</p>
          </div>
  </section>
    <!-------------FOOTER  ------------->
    <section class="bloque_footer">
        <div >
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="#">Ayuda</a></li>
          </ul>
          <ul>
            <li><a href="FAQS.html">FAQ´S</a></li>
            <li><a href="#">Reglas básicas</a></li>
          </ul>
          <ul>
            <li><a href="registro.html">Registrate</a></li>
            <li><a href="#">Ingresar</a></li>
          </ul>
        </div>
        <br><p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </section>

  </body>
</html>
