<?php

session_start();
error_reporting(0);

$validar = $_SESSION['correo'];

if( $validar == null || $validar = ''){

  header("Location: login.php");
  die();
  

  
}
?>
<?php
    include("conexion.php");
    $conexion = conectar();

    $sql = "SELECT * FROM usuarios";
    $query=mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/c2938aea4b.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LCD FOOD</title>
</head>
<body>
  <script src="script.js"></script>



  <!-- barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LCD FOOD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.html">Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#our-team">Nosotros</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#contact-section">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Registrarse</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="py-5 background-image" style="background-image: url('https://previews.123rf.com/images/marchie/marchie1505/marchie150500028/40081640-fondo-incons%C3%BAtil-del-modelo-de-comida-r%C3%A1pida.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="mb-4 text-white"><strong style="background-color: rgba(0, 0, 0, 0.5); padding: 10px;">Bienvenido a LCD FOOD</strong></h1>
          <h2><p class="lead mb-4 text-center"><strong style="background-color: rgba(0, 0, 0, 0.5); padding: 10px;">La mejor comida a domicilio en la ciudad.</strong></p></h2>          
          <div class="menu-container">
            <a href="menu.html" class="btn btn-lg btn-menu-purple">Menú</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="logo-container">
            <img src="img/logoo.png" alt="Comida a domicilio" class="img-fluid rounded logo">
          </div>
        </div>
      </div>
    </div>     
  </section>
 
  <section class="promotions">
    <h2>Promociones</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img" src="https://st4.depositphotos.com/1692343/20098/i/1600/depositphotos_200980532-stock-photo-homemade-peruvian-salchipapa-fries-with.jpg" alt="Promoción 1">
            <div class="card-content">
              <h5 class="card-title">Oferta de Primavera</h5>
              <div class="card-description">
                <p class="card-text">Disfruta de la primavera con nuestra promoción de deliciosas salchipapas con un 20% de descuento!</p>
                <p class="card-text precio">$20.000 <span class="descuento descuento-purple">$16.000</span></p>
              </div>
            </div>
            <button class="btn btn-purple">Agregar al carrito</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img" src="img/empapana.jpg" alt="Promoción 2">
            <div class="card-content">
              <h5 class="card-title">Día de San Valentín</h5>
              <div class="card-description">
                <p class="card-text">Celebra el amor y la amistad con nuestra promoción de empanadas. ¡5% de descuento para compartir en parejas!</p>
                <p class="card-text precio">$2.000 <span class="descuento descuento-purple">$1.500</span></p>
              </div>
            </div>
            <button class="btn btn-purple">Agregar al carrito</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img" src="img/cfasda.png" alt="Promoción 3">
            <div class="card-content">
              <h5 class="card-title">Super Pizza</h5>
              <div class="card-description">
                <p class="card-text">¡Una pizza gigante para compartir con tus amigos! 12 rebanadas de pizza con tus ingredientes favoritos.</p>
                <p class="card-text precio">$35.000 <span class="descuento descuento-purple">$25.000</span></p>
              </div>
            </div>
            <button class="btn btn-purple">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/aperitivos.jpg" class="d-block w-100" alt="Slider 1">
        </div>
        <div class="carousel-item">
          <img src="img/aperitivos.jpg" class="d-block w-100" alt="Slider 2">
        </div>
        <div class="carousel-item">
          <img src="img/bb.png" class="d-block w-100" alt="Slider 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  
    <!-- Incluye la biblioteca de jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Incluye los scripts de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>


<!--servicios-->
<!--Ofertas del día-->
  <section class="daily-deals">
    <div class="container">
      <h1 class="highlighted-title">OFERTAS DEL DIA</h1>
      <h2><p class="center-bold">No te quedes sin disfrutar de nuestros servicios</p></h2>
    </div>
      <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-2QI0FADSIpRvqzG2yX1trMKAm4wdQorNFg&usqp=CAU" class="d-block w-100" alt="Slider 2">
            </div>
                <!-- Incluye la biblioteca de jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Incluye los scripts de Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    
     <!-- Incluye la biblioteca de jQuery -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- Incluye los scripts de Bootstrap -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
    </section>
   
    <section class="promotions">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img class="card-img" src="https://img.freepik.com/vector-premium/30-minutos-entrega-domicilio-gratis-concepto-repartidor-pizza-conduciendo-rapido_560226-417.jpg?w=2000" alt="Promoción 1">
              <div class="card-content">
                <h1 class="card-title"><span class="descuento descuento-purple">DOMICILIO GRATIS</h1>
                <div class="card-description">
                  <p class="card-text">Haz un pedido por más de $20.000 y tendrás domicilio gratis!</p>
                </div>
              </div>
              <button class="btn btn-purple">Agregar al carrito</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img" src="https://ofertadescuentos.com/wp-content/uploads/2015/08/2x1-en-helado-duro-doble-nutrisa.jpg" alt="Promoción 2">
              <div class="card-content">
                <h1 class="card-title"><span class="descuento descuento-purple">COMPRA 1 LLEVA 2</h1>
                <div class="card-description">
                  <p class="card-text">Por el pago de un helado te regalamos el segundo</p>
                </div>
              </div>
              <button class="btn btn-purple">Agregar al carrito</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img" src="https://img.freepik.com/vector-premium/plantillas-cupones-descuento_23-2147500255.jpg" alt="Promoción 3">
              <div class="card-content">
                <h1 class="card-title"><span class="descuento descuento-purple">CUPÓN</h1>
                <div class="card-description">
                  <p class="card-text">¡Te regalamos un cupón por una compra mayor a 10.000!</p>
                </div>
              </div>
              <button class="btn btn-purple">Agregar al carrito</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
  <!--Productos destacados-->
  <div class="container">
    <h1 class="highlighted-title">PRODUCTOS DESTACADOS</h1>
    <div class="row">
      <div class="col-md-4 cold-sm-6">
        <div class="card">
          <img class="card-img" src="https://placeralplato.com/files/2015/06/pizza-Margarita-640x480.jpg?width=1200&enable=upscale"  alt="Pizza Margarita">
          <div class="card-body">
            <h3 class="card-title">Pizza Margarita</h3>
            <p class="card-text">Una pizza clásica y sencilla que consiste en una base de masa de pizza, salsa de tomate, queso mozzarella y hojas de albahaca fresca.</p>
            <a href="#" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 cold-sm-6">
        <div class="card">
          <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtIgMn7EeqKFJwcMlHetprZ_NiDNTeMLgCk99LxjcPZBClgf_f2_7ThvPCS_mKIYdAa1w&usqp=CAU" alt="Sushi">
          <div class="card-body">
            <h3 class="card-title">Sushi</h3>
            <p class="card-text">Una deliciosa opción de comida japonesa que consiste en arroz de sushi con vinagre, envuelto en nori y relleno con pescado crudo, verduras y otros ingredientes.</p>
            <a href="#" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 cold-sm-6">
        <div class="card">
          <img class="card-img" src="https://www.comedera.com/wp-content/uploads/2017/08/tacos-al-pastor-receta.jpg" alt="Tacos">
          <div class="card-body">
            <h3 class="card-title">Tacos</h3>
            <p class="card-text">Una opción popular de la comida mexicana, consiste en una tortilla de maíz suave rellena de carne, pollo, pescado o verduras, acompañada de guacamole, pico de gallo, queso y crema agria.</p>
            <a href="#" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
  
  <!-- Categoria de productos -->
  <section class="categories">
    <h2>Categorías de productos</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="category-item">
          <a href="#">
            <img src="img/plato-fuerte.jpg" alt="Category 1">
            <h3>Platos fuertes</h3>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="category-item">
          <a href="#">
            <img src="img/postres.png" alt="Category 2">
            <h3>Postres</h3>
            </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="category-item">
            <a href="#">
            <img src="img/debidass.jpg" alt="Category 3">
            <h3>Bebidas</h3>
            </a>
            </div>
            </div>
            
              </div>
            </section>
  

<section id="our-team">
  <div class="container">
    <h1 class="highlighted-title">NUESTRO EQUIPO</h1>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img src="https://cdn-icons-png.flaticon.com/512/2922/2922644.png" alt="Equipo 1">
          <div class="card-body">
            <h5 class="card-title">Leydi Guiral</h5>
            <p class="card-text">Miembro del equipo</p>
          </div>
        </div>
      </div>   
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img class="card-img" src="https://img.freepik.com/vector-premium/icono-usuario-hombre-traje-negocios_454641-453.jpg?w=2000" alt="Equipo 2">
          <div class="card-content">
            <h4 class="card-title"><span class="equipo equipo-purple">Carlos Hurtado</h5>
              <div class="card-description">
                <p class="card-text">Miembro del equipo</p>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="card">
          <img src="https://img.freepik.com/vector-premium/icono-usuario-hombre-traje-negocios_454641-453.jpg?w=2000" alt="Equipo 3">
          <div class="card-body">
            <h5 class="card-title">Darwin Hernandez</h5>
            <p class="card-text">Miembro del equipo</p>
          </div>
    </div>
  </div>
</section>


  <div class="about-section" style="text-align: center;">
    <h2 style="color: purple; font-size: 24px;">Acerca de nosotros</h2>
    <p style="font-size: 20px; color: black;">Somos una página diseñada para facilitar el pedido de domicilios a tiendas de barrio. Conectamos a los usuarios con una amplia 
      variedad de tiendas locales para ofrecerte la comodidad de recibir tus productos directamente en tu hogar.</p>

  </div>
  
</section>
<section id="contact-section">
  <footer>
    <div class="contact-section" style="text-align: center;">
      <h3 style="color: purple; font-size: 24px;">Contacto</h3>
      <p style="font-size: 18px;">¡Estamos aquí para ayudarte!</p>
      <ul style="font-size: 18px;">
        <li><strong>Teléfono:</strong> +52 312 848 93XX</li>
        <li><strong>Correo electrónico:</strong> info@tupaginadedomicilios.com</li>
      </ul>
    </div>
  </footer>
</section>

</body>
</html>