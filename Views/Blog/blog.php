<?php 
    headerTienda($data);
    $banner = $data['page']['portada'];
    $idpagina = $data['page']['idpost'];
?>

<script>
    document.querySelector('header').classList.add('header-v4');
</script>

<!-- Banner de título -->
<!-- Banner de título -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= media() ?>/images/banner3.jpg);">
    <h2 class="ltext-105 cl0 txt-center" style="font-family: 'Montserrat', sans-serif; font-size: 3rem; color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <span style="font-family: 'Playfair Display', serif; font-weight: bold; font-size: 4rem;">Blog</span>
    </h2>
</section>

<?php
    if (viewPage($idpagina)) {    
?>

<section id="eventosRealizados" class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="text-center p-b-60">
            <h2 class="mtext-105 cl2">Eventos Realizados</h2>

            <!-- Carrusel de Bootstrap -->
            <div id="carouselEventos" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Evento 1 -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= media() ?>/images/12345.jpg" alt="Evento 1">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="caption-content">
                                <p>Evento realizado el día <br><b>20/05/2023</b> en la ciudad <br>de <b>Chilca</b></p>
                            </div>
                        </div>
                    </div>
                    <!-- Evento 2 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= media() ?>/images/123.jpg" alt="Evento 2">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="caption-content">
                                <p>Evento realizado el día <br><b>27/05/2023</b> en la ciudad <br>de <b>Lima</b></p>
                            </div>
                        </div>
                    </div>
                    <!-- Evento 3 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= media() ?>/images/1234.jpg" alt="Evento 3">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="caption-content">
                                <p>Evento realizado el día <br><b>20/05/2023</b> en la ciudad <br>de <b>Imperial</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Flechas de Navegación del Carrusel -->
                <a class="carousel-control-prev" href="#carouselEventos" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselEventos" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contenido de la página -->
<div class="container">
    <?php echo $data['page']['contenido']; ?>
</div>

<?php 
    } else {
?>
<!-- Sección de página en construcción -->
<div class="container-fluid py-5 text-center">
    <img src="<?= media() ?>/images/construction.png" alt="En construcción">
    <h3>Estamos trabajando para usted.</h3>
</div>
<?php 
    }
    footerTienda($data);
?>

<!-- Estilos CSS adicionales para el carrusel -->
<style>

    #carouselEventos .carousel-item {
        text-align: center; /* Alinear el texto de la descripción */
    }

    .caption-content {
        background-color: rgba(0, 0, 0, 0.7); /* Fondo semitransparente */
        color: #ffffff; /* Color del texto */
        padding: 10px 20px; /* Espaciado interno */
        border-radius: 5px; /* Bordes redondeados */
    }

    #carouselEventos .carousel-caption {
        text-align: left; /* Alinear el texto de la descripción */
        position: absolute; /* Posición absoluta para superponer sobre la imagen */
        bottom: 20px; /* Distancia desde la parte inferior */
        left: 20px; /* Distancia desde la izquierda */
        right: 20px; /* Distancia desde la derecha */
    
    }
</style>

