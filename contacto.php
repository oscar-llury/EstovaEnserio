<!DOCTYPE html>
<html lang="es">

<head>
    <title>EstovaEnserio - Contacto</title>
    <meta name="description" content="Productora y agencia creativa de contenidos enfocada al desarrollo digital de las compañías.">

    <?php include_once('./includes/head.php'); ?>
</head>

<body>
    <!-- Navbar -->
    <?php include_once('./includes/header.php'); ?>
    <div class="main-content blur shadow-blur pagina-contacto enserio-page min-vh-80">
        <!-- -------   START CONTENT 1 -------- -->
        <section>
            <div class="vh-min-100">
                <div class="container">
                    <div class="position-relative">
                        <div class="position-absolute w-75 h-100 overflow-hidden">
                            <img class='w-100 h-100' src='./img/contacto-1.png' />
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-10 col-sm-10 col-md-9 col-lg-7 col-xl-6 ms-md-n5 ms-sm-n9">
                                <div class="card bg-body shadow-lg my-5">
                                    <div class="card-header p-0 mx-3 my-3 z-index-2 bg-transparent">
                                        <div class="bg-primary shadow-primary border-radius-lg p-3">
                                            <h1 class="text-white text-primary mb-0 fs-4">CONTACTA CON NOSOTROS</h1>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form id="contact-form" method="post" autocomplete="off">
                                            <div class="p-0 my-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group input-group-static mb-4">
                                                            <label class="form-text" for='nombre'>Nombre completo</label>
                                                            <input type="text" class="form-control" name='nombre' id="nombre" aria-label="nombre" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group input-group-static mb-4">
                                                            <label class="form-text" for='email'>Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" aria-label="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 mt-md-0 mt-4">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label class="form-text" for='mensaje'>Mensaje</label>
                                                        <textarea class="form-control" name="mensaje" id="mensaje" rows="4" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="d-flex align-items-center">
                                                        <input class="me-2" type="checkbox" value="1" name="privacidad" id="privacidad" required>
                                                        <label class="custom-control-label" for="privacidad">Acepto el tratamiento de datos.</label>
                                                    </div>
                                                    <p class="fs-085">La información proporcionada será tratada por Enserio SL con la finalidad de establecer contacto, enviar información y promociones con la legitimación por parte del cliente a través de su aceptación.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn bg-primary mt-3 mb-0 btn-primary px-4">Enviar</button>
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
            </div>
        </section>
        <!-- -------   END CONTENT  -------- -->
    </div>

    <!-- Footer -->
    <?php include_once('./includes/footer.php'); ?>

    <!--   JS Files   -->
    <script src="./assets/js/contact.js" type="text/javascript"></script>
</body>

</html>