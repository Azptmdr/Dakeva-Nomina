<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleHome.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/scrollreveal.min.js" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="icon" href="assets/iconHome.svg" />
    <title>Dakeva - Home page</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav container flex">
        <a href="#" class="logo-content flex">
          <span class="logo-text"><img src="img/logo.png"/></span>
        </a>
        <div class="menu-content">
          <ul class="menu-list flex">
            <li>
              <a href="#home" class="nav-link active-navlink"
                ><i class="bx bxs-home"></i> Home</a
              >
            </li>
            <li>
              <a href="#about" class="nav-link"
                ><i class="bx bxs-group"></i> Sobre nosotros</a
              >
            </li>
            <li>
              <a href="#menu" class="nav-link"
                ><i class="bx bxs-component"></i> Dependencias</a
              >
            </li>
            <li>
              <a href="#review" class="nav-link"
                ><i class="bx bx-user-circle"></i> Tu Perfil</a
              >
            </li>
          </ul>
        </div>
        <div class="contact-content flex">
          <i class="bx bx-phone phone-icon"></i>
          <span class="phone-number">123-456-789</span>
        </div>
      </nav>
    </header>

    <!-- Home Section -->
    <main>
      <section class="home" id="home">
        <div class="home-content">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/homeImg1.jpg" alt="" class="home-img" />
                <div class="home-details">
                  <div class="home-text">
                    <h4 class="homeSubtitle">Somos los mejores en lo que hacemos</h4>
                    <h3 class="homeTitle">
                      Recuerda que lo reflejamos en nuestra atención al cliente <br />
                      y en la calidad de nuestros inmuebles
                    </h3>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <img src="img/homeImg2.jpg" alt="" class="home-img" />

                <div class="home-details">
                  <div class="home-text">
                    <h4 class="homeSubtitle">
                      Reúnete con tu equipo
                    </h4>
                    <h3 class="homeTitle">
                      Para mantenerte actualizado <br> y en mejora continua
                    </h3>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <img src="img/homeImg3.jpg" alt="" class="home-img" />

                <div class="home-details">
                  <div class="home-text">
                    <h4 class="homeSubtitle">Proyectar al cliente en el inmueble</h4>
                    <h3 class="homeTitle">
                      Es la mejor forma de brindarle <br />
                      la confianza necesaria con nosotros
                    </h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section class="section about" id="about">
        <div class="about-content container">
          <div class="about-imageContent">
            <img src="img/aboutImg.jpg" alt="" class="about-img" />
            <div class="aboutImg-textBox">
              <i class="bx bx-heart heart-icon flex"></i>
              <p class="content-description">
                Esta es una imagen de nuestro proyecto en Cali.
              </p>
            </div>
          </div>

          <div class="about-details">
            <div class="about-text">
              <h4 class="content-subtitle"><i>Dakeva</i></h4>
              <h3 class="content-title">
                El trabajo en equipo: <br />
                Nuestra base para el éxito
              </h3>
              <p class="content-description">
                La comunicación, el profesionalismo y la dedicación nos garantiza la satisfacción deseada de nuestros clientes, para generar confianza y experiencia, entregando inmuebles de calidad, cumpliendo nuestro compromiso.
              </p>

              <ul class="about-lists flex">
                <li class="about-list">Empresas</li>
                <li class="about-list dot">.</li>
                <li class="about-list">Proyectos e Inmuebles</li>
                <li class="about-list dot">.</li>
                <li class="about-list">Clientes</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Menu Section -->
      <section class="section menu" id="menu">
        <div class="menu-container container">
          <div class="meu-text">
            <h4 class="section-subtitle"><i>Dakeva</i></h4>
            <h3 class="section-title">Nuestras dependencias</h3>
            <p class="section-description">
              Nuestras dependencias son la base para construir un ambiente laboral estructurado y completo, que nos permita cumplir con nuestro objetivo de satisfacción a nuestros clientes y a nuestros empleados
            </p>
          </div>

          <div class="menu-content">
            <div class="menu-items">
              <div class="menu-item flex">
                <img src="assets/nomina.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic"><a href="nomina.html" style="color:#8B4513">Nómina</a></h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentra registrada la nómina de nuestros empleados, incluyendo sus respectivas novedades. Este módulo es restringido para todos los empleados, menos para los encargados de la dependencia, ya que allí se trata información sensible de cada uno de nuestros colaboradores, incluyéndote.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/compra.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Compras</h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentra registrada la información de cada una de las compras realizadas por la empresa, en esta se incluye la información de los útiles de oficina y construcción necesarios para la empresa.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/recaudo.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Recaudo</h4>
                  <p class="menuItem-des">
                    Módulo en el que se registra la información de los recaudos de nuestros clientes que se encuentran pagando las cuotas de sus inmuebles, aquí ofrecemos descuentos por pago anticipado y monitoreamos la información de nuestras cuentas bancarias.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/cotiza.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Cotizaciones</h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentran las cotizaciones realizadas a todos los clientes con base en su inmueble de interés. Se tiene en cuenta que es una cotización, pero no es seguro que se realice la venta del mismo.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/proveedores.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Proveedores</h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentra la información de cada uno de los proveedores que tiene la empresa para tener materia prima en sus proyectos.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/cartera.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Cartera</h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentra la información de la cartera de cada uno de los clientes que se encuentran pagando su inmueble, es decir, el saldo que aún le queda por pagar para finalizar la compra que realizó.
                  </p>
                </div>
              </div>
              <div class="menu-item flex">
                <img src="assets/venta.svg" alt="" class="menu-img" />

                <div class="menuItem-details">
                  <h4 class="menuItem-topic">Ventas</h4>
                  <p class="menuItem-des">
                    Módulo en el que se encuentra registrada la información de cada una de las ventas realizadas por la empresa.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Reviews Section -->
      <section class="section review" id="review">
        <div class="review-container container">
          <div class="review-text">
            <h4 class="section-subtitle"><i>Dakeva</i></h4>
            <h2 class="section-title">Tu perfil</h2>
            <p class="section-description">
              Recuerda que únicamente vas a acceder a los módulos que no se encuentren restringidos en tu dependencia.
            </p>
            
          </div>

          <div class="testimonial swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="testi-content">
                <img src="assets/userHome.svg" alt="" class="review-img" />
                <button class = "open-button" id="open-button">Tu perfil</button>
                </div>
              </div>
            </div>
          </div>
      </section>

      <div class="window-background " id="window-background">
        <div class="window-container" id="window-container">
                <button class="close-button" id="close-button">
                        <i class='bx bx-x-circle'></i>
                </button>
                <section class="section-perfil">
                <h2 class="section-perfil-title">Tu perfil</h2>
                <img src="assets/userHome.svg" alt="" class="review-img" />
                <h3 class="menuItem-topic">Nombre completo: </h3>
                <h4 class="menuItem-topic">Jane Doe</h4><br>
                <h3 class="menuItem-topic">ID: </h3>
                <h4 class="menuItem-topic">5001</h4><br>
                <h3 class="menuItem-topic">Dependencia: </h3>
                <h4 class="menuItem-topic">Nómina</h4>
                </section>
        </div>
      </div>

      <!-- Footer Section -->
      <footer class="section footer">
        <div class="footer-container container">
          <div class="footer-content">
            <a href="#" class="logo-content flex">
              <img src="img/logo.jpg">
            </a>

            <p class="content-description">
              Dakeva es una constructora que le brinda las tres B a sus clientes. Inmuebles a Buen precio de Buena calidad y con Bonitos diseños.
            </p>

            <div class="footer-location flex">
              <i class="bx bx-map map-icon"></i>

              <div class="location-text">
                Ubicado en Bogotá, Colombia <br> Usaquén, 110131
              </div>
            </div>
          </div>

          <div class="footer-linkContent">
            <ul class="footer-links">
              <h4 class="footerLinks-title">Dependencias</h4>

              <li><a href="nomina.html" class="footer-link">Nómina</a></li>
              <li><a href="#" class="footer-link">Compras</a></li>
              <li><a href="#" class="footer-link">Recaudo</a></li>
              <li><a href="#" class="footer-link">Cotizaciones</a></li>
              <li><a href="#" class="footer-link">Proveedores</a></li>
              <li><a href="#" class="footer-link">Cartera</a></li>
              <li><a href="#" class="footer-link">Ventas</a></li>
            </ul>
            <ul class="footer-links">
              <h4 class="footerLinks-title">Support</h4>
              <li><a href="#about" class="footer-link">Sobre nosotros</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-copyRight">
          &#169; Dakeva. Todos los derechos reservados
        </div>
      </footer>
      <a href="#home" class="scrollUp-btn flex">
        <i class="bx bx-up-arrow-alt scrollUp-icon"></i>
      </a>
    </main>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scrollreveal.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/home.js"></script>
  </body>
</html>
