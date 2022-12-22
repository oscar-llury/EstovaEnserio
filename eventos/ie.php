<!DOCTYPE html>
<html lang="es">

<head>
  <title>EstovaEnserio - IE</title>
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
        <h1 class="ms-4 ms-lg-0 mb-0">IE</h1>
      </div>
      <img src="/img/background-image-1.jpg" alt="fondo encabezado contenido digital" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-info-proyecto pt-4">
              <p class="line-after h2">IE</p>
              <h2 class="p">Dirección, diseño de escenarios, rodaje y edición de las galas de graduaciones retransmitidas por streaming con PRG para Spain Startup.</h2>
              <div class="accordion my-4" id="accordionDescripcion">
                <div class="accordion-item">
                  <div class="accordion-header" id="sinopsisHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sinopsisCollapse" aria-expanded="false" aria-controls="sinopsisCollapse">
                      Sinopsis
                    </button>
                  </div>
                  <div id="sinopsisCollapse" class="accordion-collapse collapse" aria-labelledby="sinopsisHeader" data-bs-parent="#accordionDescripcion">
                    <div class="accordion-body">
                      <p class="m-0">IE Business School es la escuela de negocios de IE University. Se ubica en Madrid, España. Fundada en 1973 como Instituto de Empresa, está reconocida como una de las principales escuelas de negocios del mundo. Dispone de un campus urbano en Madrid, es una de las más diversas del mundo y supera los 40.000 graduados que trabajan en más de 125 países.</p>
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
                    <td>IE</td>
                  </tr>
                  <tr>
                    <td>Categoría:</td>
                    <td>Eventos</td>
                  </tr>
                  <tr>
                    <td>Etiquetas:</td>
                    <td>Corporativo</td>
                  </tr>
                </tbody>
              </table>

              <?php include_once('../includes/compartirProyecto.php'); ?>
            </div>
            <div class="col-12 col-md-7 col-lg-8 order-first order-md-last pt-4 col-main-image">
              <div class="main-video">
                <iframe src="https://player.vimeo.com/video/764550101?h=b2ea9b035f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class='video-iframe'></iframe>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 position-relative slider-proyecto">
              <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/ie/05-ie.jpg" alt='IE' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/764550137?h=904bac0668&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/ie/05-ie.jpg" alt='IE' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/764550217?h=12fc7e1390&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/eventos/ie/05-ie.jpg" alt='IE' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/764550298?h=7f9da86e5f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
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