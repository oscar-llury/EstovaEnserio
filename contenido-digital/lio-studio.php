<!DOCTYPE html>
<html lang="es">

<head>
  <title>EstovaEnserio - Lio Studio</title>
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
        <h1 class="ms-4 ms-lg-0 mb-0">Lio Studio</h1>
      </div>
      <img src="/img/background-image-1.jpg" alt="fondo encabezado contenido digital" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-info-proyecto pt-4">
              <p class="line-after h2">Lio Studio</p>
              <h2 class="p">Creación de contenido digital más base de website para 710 studio desde sus inicios, con fotografía y vídeo para ecommerce y campañas de moda.</h2>
              <div class="accordion my-4" id="accordionDescripcion">
                <div class="accordion-item">
                  <div class="accordion-header" id="sinopsisHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sinopsisCollapse" aria-expanded="false" aria-controls="sinopsisCollapse">
                      Sinopsis
                    </button>
                  </div>
                  <div id="sinopsisCollapse" class="accordion-collapse collapse" aria-labelledby="sinopsisHeader" data-bs-parent="#accordionDescripcion">
                    <div class="accordion-body">
                      <p class="m-0">Marca de prendas polivalentes. Son una marca que apuesta por la sostenibilidad, y con tejidos Pyratex. Comprometidas con el medio ambiente, 710 Studio trabaja con materiales reciclados, además de ello suman un QR a sus prendas el cual se activa cuando la prenda comienza a ser perjudicial para el medioambiente. Así el consumidor puede devolver la prenda a cambio de descuentos y el tejido volverá a formar parte de la cadena de producción.</p>
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
                    <td>Lio Studio</td>
                  </tr>
                  <tr>
                    <td>Categoría:</td>
                    <td>Contenido digital</td>
                  </tr>
                  <tr>
                    <td>Etiquetas:</td>
                    <td>Moda</td>
                  </tr>
                </tbody>
              </table>

              <?php include_once('../includes/compartirProyecto.php'); ?>
            </div>
            <div class="col-12 col-md-7 col-lg-8 order-first order-md-last pt-4 col-main-image">
              <img src="../img/contenido-digital/lio-studio/portada.jpg" alt="710 STUDIO" title="710 STUDIO" class="w-100" />
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 position-relative slider-proyecto">
              <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/lio-studio/portada.jpg" alt='710 STUDIO' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/762335307?h=a15be15709&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/lio-studio/portada.jpg" alt='710 STUDIO' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/762335198?h=7e22c300b2&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/lio-studio/portada.jpg" alt='710 STUDIO' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/762335368?h=f3c5c4ffe8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/lio-studio/portada.jpg" alt='710 STUDIO - MAKING OF' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/762335410?h=511911d0d6&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
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