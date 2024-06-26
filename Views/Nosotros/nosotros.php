<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/style.css">
	<script src="<?= media() ?>/tienda/js/functions_nosotros.js"></script>
    <script>document.querySelector('header').classList.add('header-v4')</script>
</head>

<!-- Sección Nosotros -->
<section class="section-slide">
    	<div class="wrap-slick1">
        	<div class="slick1">
            	<div class="item-slick1" style="height: 70%; background-image: url(<?= media().'/tienda/images/wkm2.jpg';?>); position: relative;">
                <!-- Capa para oscurecer la imagen de fondo -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                
                	<div class="container h-full">
                    	<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5 d-flex flex-column justify-content-center align-items-center">
                        	<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800" style="text-align: center; position: relative; z-index: 1;">
                            	<h1 class="ltext-201 cl0 p-t-19 p-b-43 respon1" style="color: white; font-size: 3em; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                                	NOSOTROS
                            	</h1>
                        	</div>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
	</section>

<!-- Sección de Historia -->
<section class="bg0 p-t-50 p-b-50"> 
    <div class="container">
        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 text-center">
                <h1 class="mtext-111 cl2 p-b-16 animate__animated animate__fadeInUp" style="font-size: 40px; color: #e8175c;">
                    HISTORIA
                </h1>
            </div>
        </div>

        <div class="row p-b-50">
            <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center"> 
                <div class="elementor-background-overlay" style="padding: 50px;">
                    <p class="text-justify" style="font-size: 20px;">
                        Hace 15 años, en 2009, nació Wakami, fruto de la visión de un grupo de emprendedores que deseaban crear una empresa que no solo vendiera productos, 
						sino que también generara un impacto positivo en la comunidad. Con un pequeño taller en el corazón de la ciudad y una idea clara, comenzaron a diseñar 
						y producir artículos únicos para eventos y celebraciones, enfocándose en calidad y diseño innovador.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="text-center">
                    <img src="<?= media() ?>/images/promocion_wakami.jpg" class="img-fluid animate__animated animate__fadeInRight" style="visibility: hidden;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Misión -->
<section class="bg2 p-t-50 p-b-50"> 
    <div class="container">
        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 text-center">
                <h1 class="mtext-111 cl2 p-b-16 animate__animated animate__fadeInUp" style="font-size: 40px; color: #e8175c;">
                    MISIÓN
                </h1>
            </div>
        </div>

        <div class="row p-b-50">
            <div class="col-md-6 col-lg-6">
                <div class="text-center">
                    <img src="<?= media() ?>/images/mision_wakami.jpg" class="img-fluid animate__animated animate__fadeInLeft" style="visibility: hidden;">
                </div>
            </div>

            <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center"> 
                <div class="elementor-background-overlay" style="padding: 50px;">
                    <p class="text-justify" style="font-size: 20px;">
                        En Wakami, nuestra misión es transformar sueños en realidad al ofrecer servicios de planificación y diseño de bodas que no solo reflejen la individualidad de cada pareja, sino que también contribuyan al bienestar de nuestra comunidad. Nos comprometemos a proporcionar experiencias únicas y memorables, combinando innovación, calidad y un profundo sentido de responsabilidad social.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Visión -->
<section class="bg0 p-t-50 p-b-50"> 
    <div class="container">
        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 text-center">
                <h1 class="mtext-111 cl2 p-b-16 animate__animated animate__fadeInUp" style="font-size: 40px; color: #e8175c;">
                    VISIÓN
                </h1>
            </div>
        </div>

        <div class="row p-b-50">
            <div class="col-md-6 col-lg-6 d-flex align-items-center justify-content-center"> 
                <div class="elementor-background-overlay" style="padding: 50px;">
                    <p class="text-justify" style="font-size: 20px;">
                        Nuestra visión es ser la empresa líder en planificación de bodas, reconocida por nuestra capacidad para crear eventos extraordinarios y nuestro impacto positivo en la comunidad. Aspiramos a expandir nuestro alcance globalmente, estableciendo nuevos estándares en creatividad, sostenibilidad y excelencia en el servicio al cliente.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="text-center">
                    <img src="<?= media() ?>/tienda/images/logo.png" class="img-fluid animate__animated animate__fadeInRight" style="visibility: hidden;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Valores -->
<section class="bg2 p-t-50 p-b-50"> 
    <div class="container">
        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 text-center">
                <h1 class="mtext-111 cl2 p-b-16 animate__animated animate__fadeInUp" style="font-size: 40px; color: #e8175c;">
                    VALORES
                </h1>
            </div>
        </div>

        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 d-flex align-items-center justify-content-center"> 
                <div class="p-t-7 p-r-15-lg p-r-0-md" style="padding: 50px;"> 
                    <ul class="list-unstyled text-justify pl-3 pr-3" style="font-size: 20px;">
                        <li><strong>Innovación:</strong> Nos esforzamos por ofrecer soluciones creativas y únicas que hagan de cada boda un evento inolvidable, adaptándonos a las últimas tendencias y tecnologías.</li>
                        <li><strong>Calidad:</strong> Comprometidos con la excelencia, garantizamos la máxima calidad en cada detalle, desde la planificación hasta la ejecución del evento.</li>
                        <li><strong>Integridad:</strong> Actuamos con honestidad y transparencia en todas nuestras interacciones, construyendo relaciones de confianza con nuestros clientes y socios.</li>
                        <li><strong>Responsabilidad Social:</strong> Promovemos prácticas sostenibles y apoyamos iniciativas que beneficien a nuestra comunidad, asegurando que nuestro impacto sea siempre positivo.</li>
                        <li><strong>Personalización:</strong> Entendemos que cada pareja es única, por lo que personalizamos nuestros servicios para reflejar la individualidad y los deseos de cada cliente.</li>
                        <li><strong>Compromiso:</strong> Dedicamos nuestro esfuerzo y pasión a cada proyecto, asegurando que todas las bodas que organizamos superen las expectativas de nuestros clientes.</li>
                        <li><strong>Trabajo en Equipo:</strong> Fomentamos un ambiente colaborativo donde cada miembro del equipo aporta su talento y creatividad para lograr resultados excepcionales.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Video de Youtube -->
<section class="bg0 p-t-50 p-b-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GlZmrDpOnxo?si=58swsdmq2-XfvHJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Empresas Asociadas -->
<section class="bg2 p-t-50 p-b-120"> 
    <div class="container">
        <div class="row p-b-50">
            <div class="col-md-12 col-lg-12 text-center" style="padding: 50px;">
                <h1 class="mtext-111 cl2 p-b-16 animate__animated animate__fadeInUp" style="font-size: 40px; color: #e8175c;">
                    NUESTRAS EMPRESAS ASOCIADAS
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="partner-logo text-center">
                    <img src="<?= media() ?>/images/paraiso.png" alt="Paraiso Hoteles" class="img-fluid animate__animated animate__fadeInUp" style="visibility: hidden;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="partner-logo text-center">
                    <img src="<?= media() ?>/images/impeiral.jpg" alt="Empresa 2" class="img-fluid animate__animated animate__fadeInUp" style="visibility: hidden;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="partner-logo text-center">
                    <img src="<?= media() ?>/images/villa_sur.jpg" alt="Empresa 3" class="img-fluid animate__animated animate__fadeInUp" style="visibility: hidden;">
                </div>
            </div>
        </div>  
    </div>
</section>

<!-- Slider -->                                                                                                
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="height: 70%; background-image: url(<?= media().'/tienda/images/wkm2.jpg';?>); position: relative; display: flex; justify-content: center; align-items: center;">
                <!-- Capa para oscurecer la imagen de fondo -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5 d-flex flex-column justify-content-center align-items-center">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800" style="text-align: center; position: relative; z-index: 1;">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-0 mb-md-0">
                                    <h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1" style="color: white; font-size: 2em; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                                        Por más momentos inolvidables 
                                    </h2>
                                </div>
                                <div class="col-md-1">
                                    <a href="<?= base_url().'/contacto/'?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 trans-04">
                                        CONTÁCTANOS 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
footerTienda($data);
?>
