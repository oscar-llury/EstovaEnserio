<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>
      EstovaEnserio
    </title>
    <!--     Fonts and icons     -->

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->

    <!-- Material Icons -->

    <!-- CSS Files -->
    <link href="./assets/css/material-kit-pro.css" rel="stylesheet" />
    <link href="./assets/css/project-gallery.css" rel="stylesheet" />
  </head>

  <body class="bg-gray-200">
    <!-- Navbar -->
    <?php include_once('./includes/header.php');?>
      <!-- Navbar Light -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
        <div class="container">
          <a class="navbar-brand" href="./index" rel="tooltip" title="EstovaEnserio" data-placement="bottom">
            EstovaEnserio
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item mx-2">
                <a href="#" class="nav-link">
                  Enserio
                </a>
              </li>
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                  Proyectos
                  <img src=" ./assets/img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-2 d-lg-block" />
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation mt-0 mt-lg-3 p-3 rounded-0" aria-labelledby="dropdownMenuDocs">
                  <div class="d-none d-lg-block">
                    <ul class="list-group">
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item" href="./producciones">
                          <span class="p-0">Producciones</span>
                        </a>
                        <a class="dropdown-item" href="./eventos">
                          <span class="p-0">Eventos</span>
                        </a>
                        <a class="dropdown-item" href="./contenido-digital">
                          <span class="p-0">Contenido digital</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="row d-lg-none">
                    <div class="col-md-12 g-0">
                      <a class="dropdown-item" href="./producciones">
                        <span class="p-0">Producciones</span>
                      </a>
                      <a class="dropdown-item" href="./eventos">
                        <span class="p-0">Eventos</span>
                      </a>
                      <a class="dropdown-item" href="./contenido-digital">
                        <span class="p-0">Contenido digital</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item mx-2">
                <a href="#" class="nav-link">
                  Contacto
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
    <div class="blur shadow-blur">
      <!-- -------   START CONTENT 1 - title & description and 6 IMAGES   -------- -->
      <section class="py-5">
        <div class="container-fluid">
          <div class='masonry-container'>
            <div class="grid">
              <div class="grid-sizer"></div>
              <!-- row 1 -->
              <div class="grid-item">
                <a href="#" class="img_content">
                  <img src="./img/eventos/01-uefa_liga_campeones_ucl_paris.jpg" alt="UEFA CHAMPION LEAGE PARIS" />
                  <div class="text_content">
                    <h2 class="title">UEFA CHAMPION LEAGE PARIS</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </a>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/02-la_liga_portaventura.jpg" alt="LA LIGA - PORTAVENTURA" />
                  <div class="text_content">
                    <h2 class="title">LA LIGA - PORTAVENTURA</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/03-desalia.jpg" alt="DESALIA" />
                  <div class="text_content">
                    <h2 class="title">DESALIA</h2>
                    <h3 class="category">Festival</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/04-tomorrowland.jpg" alt="TOMORROWLAND" />
                  <div class="text_content">
                    <h2 class="title">TOMORROWLAND</h2>
                    <h3 class="category">Festivales</h3>
                  </div>
                </div>
              </div>

              <!-- row 2 -->
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/05-ie.jpg" alt="IE" />
                  <div class="text_content">
                    <h2 class="title">IE</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/06-spider_man_no_way_home.jpg" alt="SPIDER-MAN" />
                  <div class="text_content">
                    <h2 class="title">SPIDER-MAN</h2>
                    <h3 class="category">Promocional</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/07-a_summer_story.jpg" alt="A SUMMER STORY" />
                  <div class="text_content">
                    <h2 class="title">A SUMMER STORY</h2>
                    <h3 class="category">Festival</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/08-south_summit.jpg" alt="SOUTH SUMMIT" />
                  <div class="text_content">
                    <h2 class="title">SOUTH SUMMIT</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>

              <!-- row 3 -->
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/09-lola_indigo.jpg" alt="LOLA INDIGO" />
                  <div class="text_content">
                    <h2 class="title">LOLA INDIGO</h2>
                    <h3 class="category">Concierto</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/10-premieres_sony_callao.jpg" alt="PREMIERES CALLAO" />
                  <div class="text_content">
                    <h2 class="title">PREMIERES CALLAO<h2>
                    <h3 class="category">Promocional</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/11-ifema.jpg" alt="IFEMA" />
                  <div class="text_content">
                    <h2 class="title">IFEMA</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/12-sofia_reyes.jpg" alt="SOFIA REYES" />
                  <div class="text_content">
                    <h2 class="title">SOFIA REYES</h2>
                    <h3 class="category">Artista</h3>
                  </div>
                </div>
              </div>

              <!-- row 4 -->
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/13-cocobongo.jpg" alt="COCOBONGO" />
                  <div class="text_content">
                    <h2 class="title">COCOBONGO</h2>
                    <h3 class="category">Festival</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/14-budweiser.jpg" alt="BUDWEISER" />
                  <div class="text_content">
                    <h2 class="title">BUDWEISER</h2>
                    <h3 class="category">Promocional</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/15-mad_cool.jpg" alt="MAD COOL" />
                  <div class="text_content">
                    <h2 class="title">MAD COOL</h2>
                    <h3 class="category">Festival</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/16-vive_ahora_veleros.jpg" alt="VIVE AHORA VELEROS" />
                  <div class="text_content">
                    <h2 class="title">VIVE AHORA VELEROS</h2>
                    <h3 class="category">Viaje</h3>
                  </div>
                </div>
              </div>

              <!-- row 5 -->
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/17-arenal_sound.jpg" alt="ARENAL SOUND" />
                  <div class="text_content">
                    <h2 class="title">ARENAL SOUND</h2>
                    <h3 class="category">Festival</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/18-fyvar.jpg" alt="FYVAR" />
                  <div class="text_content">
                    <h2 class="title">FYVAR</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/19-breitling.jpg" alt="BREITLING" />
                  <div class="text_content">
                    <h2 class="title">BREITLING</h2>
                    <h3 class="category">Promocional</h3>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/20-uefa_liga_campeones_ucl_madrid.jpg" alt="UEFA CHAMPION LEAGE MADRID" />
                  <div class="text_content">
                    <h2 class="title">UEFA CHAMPION LEAGE MADRID</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>

              <!-- row 6 -->
              <div class="grid-item">
                <div class="img_content openImg">
                  <img src="./img/eventos/21-unicef.jpg" alt="UNICEF" />
                  <div class="text_content">
                    <h2 class="title">UNICEF</h2>
                    <h3 class="category">Corporativo</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------   END CONTENT 1 - title & description and 6 IMAGES   -------- -->
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal z-index-modal">
      <span class="close" id="modalClose">&times;</span>
      <div class="modal-content">
        <img class="modal-image" id="imgModal" alt="" />
      </div>
      <div id="captionModal" class="caption-modal"></div>
    </div>
    <footer class="footer pt-5 mt-5"></footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>

    <script src="./lib/masonry.pkgd.min.js" type="text/javascript"></script>

    <script src="./lib/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <script src="./assets/js/project-gallery.js" type="text/javascript"></script>
  </body>
</html>
