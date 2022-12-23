<!DOCTYPE html>
<html lang="es">

<head>
  <title>EstovaEnserio - Mad cool</title>
  <meta name="description" content="Productora y agencia creativa de contenidos enfocada al desarrollo digital de las compañías.">

  <?php include_once('../includes/head.php'); ?>

  <link rel="stylesheet" href="/node_modules/@splidejs/splide/dist/css/splide.min.css">
</head>

<body class="bg-gray-200 pagina-proyecto">
  <!-- Navbar -->
  <?php include_once('../includes/header.php'); ?>
  <div class="blur shadow-blur">
    <!-- -------   START CONTENT 1 - title & description and 6 IMAGES   -------- -->
    <div class="container-fluid img-header position-relative d-flex justify-content-center">
      <div class="main-title position-absolute container-lg">
        <h1 class="ms-4 ms-lg-0 mb-0">Mad cool</h1>
      </div>
      <img src="/img/background-image-1.jpg" alt="fondo encabezado contenido digital" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-info-proyecto pt-4">
              <p class="line-after h2">Mad cool</p>
              <h2 class="p">Mad cool</h2>
              <div class="accordion my-4" id="accordionDescripcion">
                <div class="accordion-item">
                  <div class="accordion-header" id="sinopsisHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sinopsisCollapse" aria-expanded="false" aria-controls="sinopsisCollapse">
                      Sinopsis
                    </button>
                  </div>
                  <div id="sinopsisCollapse" class="accordion-collapse collapse" aria-labelledby="sinopsisHeader" data-bs-parent="#accordionDescripcion">
                    <div class="accordion-body">
                      <p class="m-0">Mad Cool es un festival de música (rock, indie, electrónica, pop…) que se realiza en Madrid desde el año 2016. El arte, la moda, la gastronomía y el turismo se unen eclécticamente en este festival. La edición del 2020, fue cancelada debido a la pandemia del COVID-19. Desde 2017 se celebra pasados dos fines de semana del Orgullo de Madrid. Cuenta con apoyo de la promotora Live Nation, la empresa audiovisual y musical Zircozine y la compañía televisiva La Competencia. Desde su primera edición, Mad Cool Festival se ha convertido en uno de los festivales más importantes de España junto con Primavera Sound Barcelona, Bilbao BBK Live o FIB Benicasim. Mad Cool Festival ha reunido en su cartel a casi 150 artistas entre los que hay iconos de la historia del rock, estandartes del pop contemporáneos y la electrónica y bandas que suponen el futuro de la música tanto a nivel nacional como internacional.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion my-4 d-none" id="accordionMakingoff">
                <div class="accordion-item">
                  <div class="accordion-header" id="mkgoffheader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mkgoffcollapse" aria-expanded="false" aria-controls="mkgoffcollapse">
                      Making off
                    </button>
                  </div>
                  <div id="mkgoffcollapse" class="accordion-collapse collapse" aria-labelledby="mkgoffheader" data-bs-parent="#accordionMakingoff">
                    <div class="accordion-body">
                      <p class="m-0"></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="title-section mt-4 mb-2">Info</div>
              <table class="table-info-proyecto">
                <tbody>
                  <tr>
                    <td>Cliente:</td>
                    <td>Mad cool</td>
                  </tr>
                  <tr>
                    <td>Categoría:</td>
                    <td>Eventos</td>
                  </tr>
                  <tr>
                    <td>Etiquetas:</td>
                    <td>Festival</td>
                  </tr>
                </tbody>
              </table>

              <?php include_once('../includes/compartirProyecto.php'); ?>
            </div>
            <div class="col-12 col-md-7 col-lg-8 order-first order-md-last pt-4 col-main-image">
              <img src="../img/eventos/madcool/01-PORTADA.jpg" alt="Mad cool" title="Mad cool" class="w-100" />
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 position-relative slider-proyecto">
              <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/madcool/02-JuanAlejos_MadCool_2022_07_06-07-08-09_115.jpg" alt='Mad cool' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/madcool/03-JuanAlejos_MadCool_2022_07_06-07-08-09_96.jpg" alt='Mad cool' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/madcool/04-JuanAlejos_MadCool_2022_07_06-07-08-09_161.jpg" alt='Mad cool' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/madcool/05-JuanAlejos_MadCool_2022_07_06-07-08-09_491.jpg" alt='Mad cool' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/madcool/06-JuanAlejos_MadCool_2022_07_06-07-08-09_672.jpg" alt='Mad cool' title='Ver imagen' />
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------   END CONTENT 1 - title & description and 6 IMAGES   -------- -->
  </div>
  <!-- Footer -->
  <?php include_once('../includes/footer.php'); ?>
  <?php include_once('../includes/project-js.php'); ?>

  <?php include_once('../includes/modal.php'); ?>
</body>

</html>