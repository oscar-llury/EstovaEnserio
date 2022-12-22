<!DOCTYPE html>
<html lang="es">

<head>
  <title>EstovaEnserio - GALA</title>
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
        <h1 class="ms-4 ms-lg-0 mb-0">GALA</h1>
      </div>
      <img src="/img/background-image-1.jpg" alt="fondo encabezado contenido digital" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-info-proyecto pt-4">
              <p class="line-after h2">GALA</p>
              <h2 class="p">Creación de contenido digital para el Restaurante GALA, con fotografía de producto, local y personal. Grabación y edición de videos tanto de elaboración de platos como pequeñas piezas de formato documental para conocer a las personas que hay en gala.</h2>
              <div class="accordion my-4" id="accordionDescripcion">
                <div class="accordion-item">
                  <div class="accordion-header" id="sinopsisHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sinopsisCollapse" aria-expanded="false" aria-controls="sinopsisCollapse">
                      Sinopsis
                    </button>
                  </div>
                  <div id="sinopsisCollapse" class="accordion-collapse collapse" aria-labelledby="sinopsisHeader" data-bs-parent="#accordionDescripcion">
                    <div class="accordion-body">
                      <p class="m-0">Gala es un restaurante de alta cocina. Situado en la zona de Chamberí, Madrid. Cuenta con distinción Bib Gourmand de la Comunidad de Madrid durante 3 años consecutivos. Además en 2021 ha sido recomendado por la Guía Repsol. Se caracterizan por unas carnes llenas de sabor provenientes de las comarcas zamoranas, de la raza bovina Alistana-Sanabresa.</p>
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
                    <td>GALA</td>
                  </tr>
                  <tr>
                    <td>Categoría:</td>
                    <td>Contenido digital</td>
                  </tr>
                  <tr>
                    <td>Etiquetas:</td>
                    <td>Gastronomía</td>
                  </tr>
                </tbody>
              </table>

              <?php include_once('../includes/compartirProyecto.php'); ?>
            </div>
            <div class="col-12 col-md-7 order-first order-md-last pt-4 col-main-image">
              <img src="../img/contenido-digital/gala/01-portada-MKG7581.jpg" alt="GALA" title="GALA" class="w-100" />
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 position-relative slider-proyecto">
              <section class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/02-MKG6973.jpg" alt='GALA' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/02-MKG6973.jpg" alt='GALA' title='Ver vídeo' data-type='video' data-src='https://player.vimeo.com/video/762325683?h=04e13c64ab&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/04-MKG7120.jpg" alt='GALA' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/05-MKG7482.jpg" alt='GALA' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/06-MKG6816.jpg" alt='GALA' title='Ver imagen' />
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="img_content openImg">
                        <img src="../img/contenido-digital/gala/07-MKG1339.jpg" alt='GALA' title='Ver imagen' />
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