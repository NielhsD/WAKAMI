<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Restablecer algunos estilos básicos y aplicar la fuente Roboto a todo el cuerpo de la página */
    body {
        font-family: 'Roboto', sans-serif;
        color: #333;
        background: #f4f4f4;
        line-height: 1.6;
    }

    /* Aplicar la fuente Lora a todos los encabezados */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Lora', serif;
        color: #2c3e50;
		text-align: center;
    }

    h3.mtext-111 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Estilos para parágrafos con mejor espaciado y color suavizado */
    p {
        font-size: 16px;
        color: #555;
    }

    /* Ajustes para imágenes para hacerlas más elegantes */
    img.img-fluid {
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* Mejorar la presentación de las listas */
    ul.list-unstyled {
        padding-left: 20px;
    }
    ul.list-unstyled li {
        margin-bottom: 8px;
    }

    /* Estilos para enlaces */
    a {
        color: #2980b9;
        transition: color 0.2s;
    }
    a:hover {
        color: #21618c;
        text-decoration: none;
    }

    /* Estilos específicos para la sección de valores y misiones */
    .section-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>

<script>
	document.querySelector('header').classList.add('header-v4');
</script>

<!-- Content page -->
<?php
if(viewPage($idpagina)){
?>

<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style=" height: 70%; background-image: url(<?= media().'/tienda/images/wkm2.jpg';?>);" >
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1" style="color: white; ">
									NOSOTROS 
								</h2>
							</div>
						
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<section class="bg0 p-t-75 p-b-120"> 
		
		<div class="container">
			<!-- Sección de Historia --> 
			<div class="row p-b-148">
				<div class="col-md-12 col-lg-12"> 
					<div class="p-t-7 p-r-15-lg p-r-0-md"> 
						<h3 class="mtext-111 cl2 p-b-16">HISTORIA</h3>
						<p class="text-justify">
							Hace 15 años, en 2009, nació Wakami, fruto de la visión de un grupo de emprendedores que deseaban crear una empresa que no solo vendiera productos, sino que también generara un impacto positivo en la comunidad. Con un pequeño taller en el corazón de la ciudad y una idea clara, comenzaron a diseñar y producir artículos únicos para eventos y celebraciones, enfocándose en calidad y diseño innovador.
						</p>
						<div class="text-center">
							<img src="http://localhost/wakami/Assets/images/promocion_wakami.jpg" class="img-fluid">
						</div>
					</div>
				</div>
			</div>

			<!-- Sección de Misión -->
			<div class="row p-b-148">
				<div class="col-md-12 col-lg-12"> 
					<div class="p-t-7 p-r-15-lg p-r-0-md"> 
						<h3 class="mtext-111 cl2 p-b-16">MISIÓN</h3>
						<table style="width:100%">
							<tr>
								<td style="width: 40%">
									<h5 class="text-justify">
										En Wakami, nuestra misión es transformar sueños en realidad al ofrecer servicios de planificación y diseño de bodas que no solo reflejen la individualidad de cada pareja, sino que también contribuyan al bienestar de nuestra comunidad. Nos comprometemos a proporcionar experiencias únicas y memorables, combinando innovación, calidad y un profundo sentido de responsabilidad social.
									</h5>
								</td>
								<td style="width: 60%">
									<div class="text-center"><img src="http://localhost/wakami/Assets/images/mision_wakami.jpg" class="img-fluid"></div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<!-- Sección de Visión -->
			<div class="row p-b-148">
				<div class="col-md-12 col-lg-12"> 
					<div class="p-t-7 p-r-15-lg p-r-0-md"> 
						<h3 class="mtext-111 cl2 p-b-16">VISIÓN</h3>
						<table style="width:100%">
							<tr>
								<td style="width: 40%">
									<div class="text-center"><img src="http://localhost/wakami/Assets/tienda/images/logo.png" class="img-fluid"></div>
								</td>
								<td style="width: 60%; padding-right: 10%;">
									<h5 class="text-justify">
										Nuestra visión es ser la empresa líder en planificación de bodas, reconocida por nuestra capacidad para crear eventos extraordinarios y nuestro impacto positivo en la comunidad. Aspiramos a expandir nuestro alcance globalmente, estableciendo nuevos estándares en creatividad, sostenibilidad y excelencia en el servicio al cliente.
									</h5>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<!-- Sección de Valores -->
			<div class="row p-b-148">
				<div class="col-md-12 col-lg-12"> 
					<div class="p-t-7 p-r-15-lg p-r-0-md"> 
						<h3 class="mtext-111 cl2 p-b-16">VALORES</h3>
						<ul class="list-unstyled text-justify pl-3 pr-3">
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

			<div class="text-center">
				<iframe width="100%" height="650 px" src="https://www.youtube.com/embed/GlZmrDpOnxo?si=58swsdmq2-XfvHJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<br><br><br>

			<!-- Empresas Asociadas -->
			<div id="partnerLogos" class="text-center p-b-60">
				<h2 class="mtext-105 cl2">Nuestras Empresas Asociadas</h2>
				<div class="row">
					<div class="col-6 col-md-4 col-lg-2">
						<div class="partner-logo">
							<img src="<?= media() ?>/images/paraiso.png" alt="Paraiso Hoteles" class="img-fluid">
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-2">
						<div class="partner-logo">
							<img src="<?= media() ?>/images/impeiral.jpg" alt="Empresa 2" class="img-fluid">
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg-2">
						<div class="partner-logo">
							<img src="<?= media() ?>/images/villa_sur.jpg" alt="Empresa 3" class="img-fluid">
						</div>
					</div>
					<!-- Añadir más logos según sea necesario -->
				</div>
			</div>
		</div>
	</section>

	<!-- Slider -->																								
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style=" height: 70%; background-image: url(<?= media().'/tienda/images/wkm2.jpg';?>);" >
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1" style="color: white; justify-content: center; margin-center: 300px;">
									Por más momentos inolvidables 
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="1600">
								<a href="<?= base_url().'/contacto/'?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="margin-left: 500px;">
									CONTÁCTANOS 
								</a>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>

<?php
}else{
?>
	<div>
		<div class="container-fluid py-5 text-center">
			<p>asas</p>
			<img src="<?= media() ?>/images/construction.png" alt="En construcción">
			<h3>Estamos trabajando para usted.</h3>
		</div>
	</div> 
<?php 
}

footerTienda($data);
?>
