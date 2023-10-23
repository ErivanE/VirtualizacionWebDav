<?php
$user = $_GET['user'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webdav</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-KXmDlF1ri1m3+oQTxo2dPXHoqr/qndCS0fVwX6rD38eq8yzG0BZNA26DrpYToPENdzmsS2IAGU8AMr8NZlTjMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body style="background-color: white;">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-moradito">
        <div class="container-fluid">
            <img src="assets/KSPGames.png" class="navbar-brand img-fluid" alt="Logo">
            <!-- <a href="#" class="navbar-brand">KSPGAMES</a> -->
            <button class="navbar-toggler m-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="menu" aria-expanded="false" aria-label="Mostrar / Ocultar menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link disabled">WebDav</a></li>
                </ul>
                <div>
                    <a href="#" class="btn btn-outline-secondary me-1">usuario</a>
                    <a href="http://10.0.33.2/DesarrolloWebProyecto /VistaUsuario/html/indexUser.php?user=<?php echo $user?>" class="btn btn-outline-primary">Regresar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row my-5 py-5">
            <div class="col-12">
                <h2>Historial de pedidos de pedidos</h2>
            </div>
            
            <!-- <div class="col-12">
                <div class="row">
                    <div class="col-1 d-flex align-items-center">
                        <i class=" h2 bi bi-file-pdf-fill"></i>
                        <a href="#">nombreArchivo.pdf</a>
                    </div>
                </div>
            </div> -->
            <?php
            $directorio = "ejemploPDF";
            $patron = "$directorio/recibo$id*.pdf";
            $archivos = glob($patron); 
    
            foreach ($archivos as $archivo) {
                    ?>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <i class=" h2 bi bi-file-pdf-fill"></i>
                                <a href="<?php echo $archivo?>" target="_blank">
                                    <?php echo basename($archivo)?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>

            <?php
            
// $directorio = 'ejemploPDF';
            // $archivos = scandir($directorio);
            
            // foreach ($archivos as $archivo) {
            //     if ($archivo != '.' && $archivo != '..') {
            //         echo '<li><a href="' . $directorio . '/' . $archivo . '">' . $archivo . '</a></li>';
            //     }
            // }
            ?>
        </div>

    </main>

    <!--FOOTER-->
    <footer style="background: black;" class="">
        <div class="container text-white">
            <div class="row pt-5">
                <div class="col-12 col-md-4 mb-4">
                    <h2>Encuentranos en:</h2>
                    <a href="#"><i class="h1 bi bi-facebook"></i></a>
                    <a href="#"><i class="h1 bi bi-discord "></i></a>
                    <a href="#"><i class="h1 bi bi-instagram"></i></a>
                    <a href="#"><i class="h1 bi bi-twitter"></i></a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <h2>KSP Games</h2>
                    <p>KSP Games es una pagina donde puedes comprar videojuegos en formato fisico, asi como tambien
                        Consolas, controles accesorios y Ediciones de coleccion</p>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2>Mision</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit exercitationem aperiam
                                quod praesentium amet voluptas perferendis mollitia sed.</p>
                        </div>
                        <div class="col-12">
                            <h2>Vision</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptates numquam
                                voluptates illum atque eum est consequatur? Ad deleniti vel iusto suscipit. Eos numquam
                                consequuntur voluptates culpa?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>