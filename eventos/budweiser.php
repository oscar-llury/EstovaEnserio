<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" href="/img/logo/favicon.ico" />
  <title>EstovaEnserio</title>

  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link href="/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" rel="stylesheet">
  <link href="/node_modules/@fortawesome/fontawesome-free/css/brands.css" rel="stylesheet">
  <link href="/node_modules/@fortawesome/fontawesome-free/css/solid.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="/assets/css/enserio-styles.css" rel="stylesheet" />

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
      <img src="/img/background-image-1.jpg" alt="" class="w-100 object-fit-cover" />
    </div>
    <div class="container-fluid">
      <div class="main-container">
        <div class="pb-4 container-lg">
          <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-info-proyecto pt-4">
              <h2 class="line-after">Lio Studio</h2>
              <p>Creación de contenido digital más base de website para 710 studio desde sus inicios, con fotografía y vídeo para ecommerce y campañas de moda.</p>
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
              <div class="title-section mt-4">Info</div>
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
            <div class="col-12 col-lg-8 col-md-7 order-first order-md-last pt-4">
              <img src="/img/contenido-digital/01-lio_studio.jpg" alt="" class="w-100" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------   END CONTENT 1 - title & description and 6 IMAGES   -------- -->
  </div>
  <!-- Footer -->
  <?php include_once('../includes/footer.php'); ?>

</body>

</html>