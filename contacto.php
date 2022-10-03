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
</head>

<body>
    <!-- Navbar -->
    <?php include_once('./includes/header.php'); ?>
    <div class="blur shadow-blur pagina-listado-proyectos min-vh-80">
        <!-- -------   START CONTENT 1 -------- -->
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 position-relative">
                            <div class="position-absolute h-100 w-150 d-flex justify-content-center align-items-center">
                                <img class='w-100' src='https://images.unsplash.com/photo-1538681105587-85640961bf8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80' />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow-lg my-sm-0 my-sm-6">
                                <div class="card-header p-0 mx-3 my-3 z-index-2 bg-transparent">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                                        <h3 class="text-white text-primary mb-0">Contact us</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="pb-3">
                                        For further questions, including partnership opportunities, please email hello@creative-tim.com
                                        or contact using our contact form.
                                    </p>
                                    <form id="contact-form" method="post" autocomplete="off">
                                        <div class="card-body p-0 my-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label>Full Name</label>
                                                        <input type="email" class="form-control" placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ps-md-2">
                                                    <div class="input-group input-group-static mb-4">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" placeholder="hello@creative-tim.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 mt-md-0 mt-4">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>How can we help you?</label>
                                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn bg-gradient-primary mt-3 mb-0 btn-primary">Send Message</button>
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