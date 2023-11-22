<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Compra Maquillaje en Colombia Y el mundo - SPLENDID</title>

  <!-- Take this data and paste in head tag for Header & Footer     -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&family=Poppins:wght@100&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/index.css" />
</head>

<body>
<?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "Splendid";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Inicializar la variable del nombre del usuario
    $nombreUsuario = "";

    // Procesar los datos del formulario de inicio de sesión
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["pass"];

        // Consulta SQL para verificar las credenciales
        $sql = "SELECT nombre FROM usuarios WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Las credenciales son correctas, obtener el nombre del usuario
            $row = $result->fetch_assoc();
            $nombreUsuario = $row['nombre'];
        } else {
            // Las credenciales son incorrectas, redirigir a página de error
            header("Location: ./loginFallido.php");
            exit();
        }
    }

    // Cerrar la conexión
    $conn->close();
    ?>

  <div id="container">

    <!--       Header Data Start                  -->

    <div id="nav1">
      <h4 id="free600">ENVIO GRATIS DESPUES DE 100.000 PESOS</h4>
      <h4 id="track">Rastrear Envio</h4>

    </div>

    <nav id="nav2">
      <div id="logo">
        <a href="./index.html">
          <img id="logo" src="../imagenes/logo-removebg-preview.png" alt="logo" />
        </a>
      </div>
      <div id="search">

        <input id="searchBox" type="search" placeholder="Busca por producto">

        <div> <i id="searchicon" class="fas fa-search"></i></div>
      </div>
      <div id="line"></div>
      <div><i id="wishlist" class="far fa-heart"></i></div>
      <div><i id="cart" class="fal fa-shopping-cart"></i></div>
    </nav>
    <div id="nav3">
      <div class="navbar">
        <div class="makelist"><a href="./newArrivals.html">MAQUILLAJE</a>
          <div class="makeup">
            <div>
              <div class="color-pink">Ojos</div>
              <p><a href="./newArrivals.html">Cejas</a></p>
              <p><a href="./newArrivals.html">Delineador De Ojos</a></p>
              <p><a href="./newArrivals.html">Difuminador de ojos</a></p>
              <p><a href="./newArrivals.html">Sombras</a></p>
              <p><a href="./newArrivals.html">Pestañas</a></p>

            </div>
            <div>
              <div class="color-pink">CARA</div>
              <p><a href="./newArrivals.html">Rubor</a></p>
              <p><a href="./newArrivals.html">Bronceador</a></p>
              <p><a href="./newArrivals.html">Contorno</a></p>
              <p><a href="./newArrivals.html">Resaltador</a></p>
            </div>
            <div>
              <div class="color-pink">LABIOS</div>
              <p><a href="./newArrivals.html">Balsamo de labial</a></p>
              <p><a href="./newArrivals.html">Brillo de labios</a></p>
              <p><a href="./newArrivals.html">Delineador de ojos</a></p>
              <p><a href="./newArrivals.html"></a>Lapiz labial</p>
              <p><a href="./newArrivals.html">Labial Liquido</a></p>

            </div>
            <div>
              <div class="color-pink">UÑAS</div>
              <p><a href="./newArrivals.html">Uñas Acrilicas</a></p>
            </div>
            <div>
              <div class="color-pink">HERRAMIENTAS Y PINCELES</div>
              <p><a href="./newArrivals.html">Juego de pinceles</a></p>
              <p><a href="./newArrivals.html">Pincel de cara</a></p>
              <p><a href="./newArrivals.html">Pincel de ojos</a></p>
              <p><a href="./newArrivals.html">Pincel de labios</a></p>
              <p><a href="./newArrivals.html">Esponjas y aplicadores</a></p>
            </div>
            <div>
              <div class="color-pink">KITS</div>
              <p><a href="./newArrivals.html">Cajas de Ojos</a></p>
              <p><a href="./newArrivals.html">Cajas de cara</a></p>
            </div>
          </div>
        </div>
        <div class="makelist"><a href="./newArrivals.html">SKIN</a>

          <div class="makeup">
            <div>
              <div class="color-pink">CARA</div>
              <p><a href="./newArrivals.html">Limpiadores</a></p>
              <p><a href="./newArrivals.html">Cremas</a></p>
              <p><a href="./newArrivals.html">Mascara Facial</a></p>
              <p><a href="./newArrivals.html">Aceite</a></p>
              <p><a href="./newArrivals.html">Lavados de cara</a></p>
              <p><a href="./newArrivals.html">Gel</a></p>
            </div>
            <div>
              <div class="color-pink">OJOS</div>
              <p><a href="./newArrivals.html">Eye Cream</a></p>
              <p><a href="./newArrivals.html">Eye Patch</a></p>
            </div>
            <div>
              <div class="color-pink">BAÑO Y CUERPO</div>
              <p><a href="./newArrivals.html">Gel de baño</a></p>
              <p><a href="./newArrivals.html">Limpiador de Pies</a></p>
              <p><a href="./newArrivals.html">Aceite de Cuerpo</a></p>
            </div>
            <div>
              <div class="color-pink">CABELLO</div>
              <p><a href="./newArrivals.html">Mascara de cabello</a></p>
              <p><a href="./newArrivals.html">Gel de cabello</a></p>
              <p><a href="./newArrivals.html">Shampoo</a></p>
            </div>
          </div>
        </div>


        <div id="kits"><a href="./newArrivals.html">KITS AND COMBOS</a>

        </div>
        <a href="./newArrivals.html">OFERTAS</a>
        <div id="kits"><a href="./newArrivals.html">TUTORIALES</a>
          <div id="kits_combos">
            <p><a href="./newArrivals.html">Cara</a></p>
            <p><a href="./newArrivals.html">Labios</a></p>
            <p><a href="./newArrivals.html">Ojos</a></p>
          </div>
        </div>
      </div>

      <!--       Header End                 -->


      <p id="resultadoCrear">
      <?php if (!empty($nombreUsuario)) { ?>
            <p>Bienvenido, <?php echo $nombreUsuario; ?></p>
        <?php } else { ?>
            <p>No se ha iniciado sesión.</p>
        <?php } ?>
      </p>

      <!--         Footer Start                    -->

      <div id="footer">
        <h2>Necesitas ayuda? LLama a nuestro equipo de soporte</h2>
        <hr />
        <div id="footerBox">
          <div class="footer1">
            <h5>INFORMACION</h5>
            <p>Quienes somos</p>
            <p>Contactanos</p>
            <p>Politica de devolucion</p>
            <p>Terminos y condiciones</p>
            <p>FAQ´S</p>
            <p>Politica de privacidad</p>
            <p>Politica de compra</p>
            <p>Ofertas</p>
          </div>
          <div class="footer2">
            <h5>NUESTRAS CATEGORIAS TOP</h5>
            <p>Ojos</p>
            <p>Cara</p>
            <p>Pinceles</p>
            <p>Kits</p>
            <p>Labios</p>
            <p>Uñas</p>
          </div>
          <div class="footer3">
            <h5>SUSCRIBTE A NUESTRA INFORMACION</h5>
            <p>Obten los ultimos lanzamientos</p>
            <input id="email" type="email" placeholder="Email Address" />
            <button>SUBSCRIBETE</button>
            <div id="social">
              <div><a href="https://www.facebook.com"><i id="social1" class="fab fa-facebook"></i></a> </div>
              <div><a href="https://twitter.com"><i id="social1" class="fab fa-twitter"></i> </a></div>
              <div><a href="https://www.instagram.com"><i id="social1" class="fab fa-instagram"></i></a>
              </div>
              <div><a href="https://www.youtube.com"><i id="social1" class="fab fa-youtube"></i></a></div>
            </div>
          </div>
          <div class="footer4">
            <h5>CONTACT</h5>
            <div id="info">
              <div><i class="fas iconColor fa-map-marker-alt"></i></div>
              <div>
                <p class="infoP">
                  Splendid Make-UP , Bogota, Colombia
                </p>
              </div>
            </div>

            <div id="info">
              <div><i class="fas iconColor fa-phone"></i></div>
              <div>
                <p class="infoP">+31312345678<br />Lunes a Sabado 8.00 am a 5.00 pm</p>
              </div>
            </div>
            <div id="info">
              <div><i class="fas iconColor fa-at"></i></div>
              <div>
                <p class="infoP">
                  Email: <br />
                  support@splendid.com
                </p>
              </div>
            </div>
          </div>
          <div class="footer5">

          </div>
        </div>
      </div>
      <div id="last">

      </div>

      <!--      Footer End                    -->
    </div>
  </div>
</body>

</html>

<script src="./script/index.js">
</script>