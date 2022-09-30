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
    <div class="blur shadow-blur">
        <!-- -------   START CONTENT 1 -------- -->
        <div class="page-header min-vh-100" style="background-image: url('https://images.unsplash.com/uploads/1413399939678471ea070/2c0343f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-12 m-auto text-center">
                        <?php
                        $code = $_SERVER['REDIRECT_STATUS'];
                        $codes = array(
                            403 => 'Forbidden',
                            404 => 'Not Found',
                            500 => 'Internal Server Error'
                        );
                        $source_url = 'http' . ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        if (array_key_exists($code, $codes) && is_numeric($code)) {
                            echo `<h1 class="display-1 text-bolder text-white">Error $code</h1>`;
                            echo `<h2 class="text-white">$codes[$code]</h2>`;
                            //die("Error $code: {$codes[$code]}");
                        } else {
                            echo '<h1 class="display-1 text-bolder text-white">Error desconocido</h1>';
                            //die('Unknown error');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------   END CONTENT  -------- -->
    </div>

</body>

</html>