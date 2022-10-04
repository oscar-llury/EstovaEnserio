<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="./img/logo/favicon.ico" />
    <title>EstovaEnserio</title>

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="./assets/css/enserio-styles.css" rel="stylesheet" />
    <link href="./assets/css/project-gallery.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <!--<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>-->

</head>

<body>
    <!-- Navbar -->
    <?php include_once('./includes/header.php'); ?>
    <div class="blur shadow-blur pagina-contacto enserio-page min-vh-80">
        <!-- -------   START CONTENT 1 -------- -->
        <section>
            <div class="min-vh-100">
                <div class="container">
                    <div class="row flex-nowrap">
                        <div class="col-12 col-md-4 col-lg-5 col-xl-6 position-relative">
                            <div class="position-absolute h-100 w-150">
                                <img class='w-100 h-100' src='https://images.unsplash.com/photo-1538681105587-85640961bf8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80' />
                            </div>
                        </div>
                        <div class="col-10 col-md-8 col-lg-7 col-xl-6 ms-md-n5">
                            <div class="card bg-body shadow-lg my-5">
                                <div class="card-header p-0 mx-3 my-3 z-index-2 bg-transparent">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                                        <h1 class="text-white text-primary mb-0 fs-4">CONTACTA CON NOSOTROS</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="contact-form" method="post" autocomplete="off">
                                        <div class="p-0 my-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label class="form-text" for='user'>Nombre completo</label>
                                                        <input type="text" class="form-control" name='user' id="user" aria-label="user">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label class="form-text" for='email'>Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" aria-label="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 mt-md-0 mt-4">
                                                <div class="input-group input-group-static mb-4">
                                                    <label class="form-text" for='message'>Mensaje</label>
                                                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="me-2" type="checkbox" value="" id="fcustomCheck1" checked="">
                                                <label class="custom-control-label" for="customCheck1">Acepto el tratamiento de datos.</label>
                                                <p>La información proporcionada será tratada por Enserio SL con la finalidad de establecer contacto, enviar información y promociones y con la legitimación por parte del cliente a través de su aceptación.</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn bg-gradient-primary mt-3 mb-0 btn-primary px-4">Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------   END CONTENT  -------- -->
    </div>

    <!-- Footer -->
    <?php include_once('./includes/footer.php'); ?>

</body>

</html>