<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
 $banner = $data['page']['portada'];
 $idpagina = $data['page']['idpost'];
 ?>
 <script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= $banner ?>);">
	<h2 class="ltext-105 cl0 txt-center">
		<?= $data['page']['titulo'] ?>
	</h2>
</section>
<!-- Content page -->
<?php
	if(viewPage($idpagina)){
		#echo $data['page']['contenido'];
		?>
			
			<section class="bg0 p-t-75 p-b-120"> 
				<div class="container">
					<!-- Sección de Historia --> 
					<div class="row p-b-148"> 
						<div class="col-md-7 col-lg-8"> 
							<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md"> 
								<h3 class="mtext-111 cl2 p-b-16">Historia</h3>
							</div> 
						</div> 
						<table style="width:100%">
							<div style="font-size:20px; text-align: justify;">
								Hace 15 años, en 2009, nació Wakami, fruto de la visión de un grupo de emprendedores que deseaban crear una empresa que no solo vendiera productos, sino que también generara un impacto positivo en la comunidad. Con un pequeño taller en el corazón de la ciudad y una idea clara, comenzaron a diseñar y producir artículos únicos para eventos y celebraciones, enfocándose en calidad y diseño innovador.
								<div align="center"><img src="http://localhost/wakami/Assets/tienda/images/logo.png"></div>
							</div>
					</div> 
				</div> 
			
				<div class="container">
					<!-- Sección de Historia --> 
					<div class="row p-b-148"> 
						<div class="col-md-7 col-lg-8"> 
							<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md"> 
								<h3 class="mtext-111 cl2 p-b-16">Información de contacto</h3>
							</div> 
						</div> 
						<table style="width:100%">
							<tr>
								<td style="width: 50%">
									<h4>Wakami Eventos</h4>
									<div style="padding-right:40px;">
										<p>Jirón El Carmen, Nuevo Imperial 15701, Peru San Vicente de Cañete, Departamento de Lima</p>
										<p style="color: #075BAB; font-weight: bold">Indicaciones</p>
										<p><b>Télefono:</b> 993 403 860</p>
										<p><b>Horas:</b> Abierto: 8:00 a.m | Cerrado: 8:00 p.m </p>
										<p><b>Industria:</b> Servicio de organización de bodas </p>
										<p><b>Forma de empresa:</b> Sociedad anónima</p>
									</div>
								</td>
								<td style="width: 50%">
									<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.6489320784432!2d-76.35315163044493!3d-13.0613853992039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ffbdd4e065bab%3A0xd19e01221c244523!2sJir%C3%B3n%20El%20Carmen%20332%2C%20Imperial%2015701!5e0!3m2!1ses-419!2spe!4v1717959973562!5m2!1ses-419!2spe" width="600" height="450" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
								</td>
							</tr>
						</table>
					</div> 
				</div> 



				<div class="container">
					<!-- Sección de Historia --> 
					<div class="row p-b-148"> 
						<div class="col-md-7 col-lg-8"> 
							<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md"> 
								<h3 class="mtext-111 cl2 p-b-16">Misión</h3>
							</div> 
						</div> 
						<table style="width:100%">
							<tr>
								<td style="width: 40%">
									<h5 style="text-align: justify;">En Wakami, nuestra misión es transformar sueños en realidad al ofrecer servicios de planificación y diseño de bodas que no solo reflejen la individualidad de cada pareja, sino que también contribuyan al bienestar de nuestra comunidad. Nos comprometemos a proporcionar experiencias únicas y memorables, combinando innovación, calidad y un profundo sentido de responsabilidad social.</h5>
									<div>
									</div>
								</td>
								<td style="width: 60%">
									<div><img src="http://localhost/wakami/Assets/tienda/images/logo.png"></div>
								</td>
							</tr>
						</table>
					</div> 
				</div>

				<div class="container">
					<!-- Sección de Historia --> 
					<div class="row p-b-148"> 
						<div class="col-md-7 col-lg-8"> 
							<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md"> 
								<h3 class="mtext-111 cl2 p-b-16">Visión</h3>
							</div> 
						</div> 
						<table style="width:100%">
							<tr>
								<td style="width: 40%">
									<div><img src="http://localhost/wakami/Assets/tienda/images/logo.png"></div>
								</td>
								<td style="width: 60%; padding-right: 10%;">
									<h5 style="text-align: justify;">Nuestra visión es ser la empresa líder en planificación de bodas, reconocida por nuestra capacidad para crear eventos extraordinarios y nuestro impacto positivo en la comunidad. Aspiramos a expandir nuestro alcance globalmente, estableciendo nuevos estándares en creatividad, sostenibilidad y excelencia en el servicio al cliente.</h5>
									<div>
									</div>
								</td>
							</tr>
						</table>
					</div> 
				</div>


				<div class="container">
					<!-- Sección de Historia --> 
					<div class="row p-b-148"> 
						<div class="col-md-7 col-lg-8"> 
							<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md"> 
								<h3 class="mtext-111 cl2 p-b-16">Valores</h3>
							</div> 
						</div> 

						<ul style="padding-left: 10px; padding-right: 60px; text-align: justify;">
							<li><strong>Innovación:</strong> Nos esforzamos por ofrecer soluciones creativas y únicas que hagan de cada boda un evento inolvidable, adaptándonos a las últimas tendencias y tecnologías.</li>
							<li><strong>Calidad:</strong> Comprometidos con la excelencia, garantizamos la máxima calidad en cada detalle, desde la planificación hasta la ejecución del evento.</li>
							<li><strong>Integridad:</strong> Actuamos con honestidad y transparencia en todas nuestras interacciones, construyendo relaciones de confianza con nuestros clientes y socios.</li>
							<li><strong>Responsabilidad Social:</strong> Promovemos prácticas sostenibles y apoyamos iniciativas que beneficien a nuestra comunidad, asegurando que nuestro impacto sea siempre positivo.</li>
							<li><strong>Personalización:</strong> Entendemos que cada pareja es única, por lo que personalizamos nuestros servicios para reflejar la individualidad y los deseos de cada cliente.</li>
							<li><strong>Compromiso:</strong> Dedicamos nuestro esfuerzo y pasión a cada proyecto, asegurando que todas las bodas que organizamos superen las expectativas de nuestros clientes.</li>
							<li><strong>Trabajo en Equipo:</strong> Fomentamos un ambiente colaborativo donde cada miembro del equipo aporta su talento y creatividad para lograr resultados excepcionales.</li>
						</ul>
					</div> 
					<div align="center">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/GlZmrDpOnxo?si=58swsdmq2-XfvHJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</section>
		<?
	}else{
  ?>







<!-- <div>
	<div class="container-fluid py-5 text-center" >
		<p>asas</p>
		
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
	-->
<?php 
	}

	footerTienda($data);
?>
