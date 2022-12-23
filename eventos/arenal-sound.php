<!DOCTYPE html>
<html lang="es">

<head>
  <title>EstovaEnserio - Arenal Sound</title>
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
        <h1 class="ms-4 ms-lg-0 mb-0">Arenal Sound</h1>
      </div>
      <img src="/img/background-image-1.jpg" alt="fondo encabezado contenido digital" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-info-proyecto pt-4">
              <p class="line-after h2">Arenal Sound</p>
              <h2 class="p">Arenal Sound Festival es un festiva de música independiente que se celebra en la playa El Arenal, en la localidad de Burriana (provincia de Castellón, España).</h2>
              <div class="accordion my-4" id="accordionDescripcion">
                <div class="accordion-item">
                  <div class="accordion-header" id="sinopsisHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sinopsisCollapse" aria-expanded="false" aria-controls="sinopsisCollapse">
                      Sinopsis
                    </button>
                  </div>
                  <div id="sinopsisCollapse" class="accordion-collapse collapse" aria-labelledby="sinopsisHeader" data-bs-parent="#accordionDescripcion">
                    <div class="accordion-body">
                      <p class="m-0">Arenal Sound Festival es un festiva de música independiente que se celebra en la playa El Arenal, en la localidad de Burriana (provincia de Castellón, España), durante la primera semana de agosto desde 2010. Se caracteriza por su gran afluencia de jóvenes y se diferencia de otros festivales por su cercanía a la playa al tener uno de sus escenarios sobre la misma arena. Se ha convertido en uno de los referentes de la temporada estival nacional.</p>
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
                    <td>Arenal Sound</td>
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
              <img src="../img/eventos/arenalsound/01-PORTADA_MKG3439.jpeg" alt="Arenal Sound" title="Arenal Sound" class="w-100" />
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 position-relative slider-proyecto">
              <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/arenalsound/02_DSC6119.jpeg" alt='Arenal Sound' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/arenalsound/03_MKG2504.jpeg" alt='Arenal Sound' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/arenalsound/04_DSC02165.jpeg" alt='Arenal Sound' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/arenalsound/05_DSC05473.jpeg" alt='Arenal Sound' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/arenalsound/06_MKG4427.jpeg" alt='Arenal Sound' title='Ver imagen' />
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