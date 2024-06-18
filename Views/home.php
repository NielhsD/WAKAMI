<?php
headerTienda($data);
$arrSlider = $data['slider'];
$arrBanner = $data['banner'];
$arrProductos = $data['productos'];

$contentPage = "";
if (!empty($data['page'])) {
	$contentPage = $data['page']['contenido'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/xxmzBrw.css">
	<link rel="stylesheet" href="<?= media() ?>/tienda/css/style.css">
    <script defer src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script defer src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script defer src="<?= media() ?>/tienda/js/mains.js"></script>
	
	
<style>
  pointer-particles {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 9999;
    pointer-events: none; /* Importante para permitir clics a través del componente */
  }
</style>
<style>
    
</style>

</head>
<body>
	
	<pointer-particles></pointer-particles>

  	<section class="wrapper">
		<section class="content">
			<div class="section hero"> 
			<h2 class="ltext-201" style=" justify-content: center center; padding-top: 15%; margin-left: 35%;">Wakami Eventos</h2>
			</di>
		</section>

		<section class="image-container">
			<img src="http://localhost/wakami/Assets/tienda/images/imagen0.png" alt="image">
		</section>
  </section>



	
	<br><br><br><br>

    <section class="section-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 isotope-item1">
				<div class="service-item" style=" max-width: 350px; margin: auto;">
				<div class="service-icon">
					<img src="<?= media().'/tienda/images/catering1.jpg'; ?>" alt="Icono de servicio de catering" style="width: 100%; height: auto; padding: 80px; border-radius:50%">
				</div>
				<div class="service-content" style="text-align: center;">
					<h3 style="color: purple; font-weight:bold; ">Servicio de Catering</h3> 
					<p style="color: black; margin-top: 20px;">Ofrecemos un servicio completo de organización de eventos, desde la selección de menú hasta la disposición del lugar.</p>
				</div>
			</div>

                </div>
                <div class="col-md-4 isotope-item1">
                    <div class="service-item" style=" max-width: 350px; margin: auto;">
                        <div class="service-icon">
						<img src="<?= media().'/tienda/images/confeccion.jpg'; ?>" alt="Icono de servicio de catering" style="width: 100%; height: auto; padding: 80px; border-radius:50%">
                        </div>
                        <div class="service-content" style="text-align: center;">
                            <h3 style="color: purple; font-weight:bold; ">Confección de Vestidos</h3>
                            <p style="color: black; margin-top: 20px;">Diseñamos y confeccionamos vestidos a medida para ocasiones especiales, garantizando elegancia y estilo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 isotope-item1">
                    <div class="service-item" style=" max-width: 350px; margin: auto;">
                        <div class="service-icon">
						<img src="<?= media().'/tienda/images/evento.jpg'; ?>" alt="Icono de servicio de catering" style="width: 100%; height: auto; padding: 80px; border-radius:50%">
                        </div>
                        <div class="service-content" style="text-align: center;">
                            <h3 style="color: purple; font-weight:bold; ">Organización de Eventos</h3>
                            <p style="color: black; margin-top: 20px;">Nos encargamos de cada detalle para que tu evento sea memorable, desde la planificación hasta la ejecución, dejando una impresión duradera en tus invitados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
	<div class="container">
		<div class="row">
			<?php
			for ($j = 0; $j < count($arrBanner); $j++) {
				$ruta = $arrBanner[$j]['ruta'];
			?>

				<div class="block1-txt-child2 p-b-4 trans-05">
					<div class="block1-link stext-101 cl0 trans-09">
						Ver productos
					</div>
				</div>
				</a>
		</div>
	</div>



<?php
			}
?>
</div>

<!-- Modal Cotizaciones -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Formulario de cotización</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST" id="formCotizar">
					<label for="">ID:
						<input type="text" name="id_cotizacion" id="id_cotizacion" placeholder="ID COTIZACIÓN">
					</label>
					<br>
					<label for="">Tipo de evento:
						<select name="id_tipo_evento" id="id_tipo_evento">
							<option value="TP001">Boda</option>
							<option value="TP002">Quinceañera</option>
						</select>
					</label>
					
					<br>
					<label for="">¿Cómo deseas que te contactemos?<br>
						<select name="id_metodo_atencion" id="id_metodo_atencion">
							<option value="M01">Por Whatsapp</option>
							<option value="M02">Porllamada</option>
						</select>
					</label>
					<br>

					
					<label for="">Nombres:
						<input type="text" name="nombres" id="nombres" placeholder="Ingrese nombres">
					</label>
					<br>
					<label for="">Apellidos:
						<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese apellidos">
					</label>
					<br>
					<label for="">Celular:
						<input type="number" name="celular" id="celular" placeholder="Ingrese celular">
					</label>
					<br>
					<label for="">Teléfono fijo:
						<input type="number" name="telefono_fijo" id="telefono_fino" placeholder="Ingrese teléfono fijo">
					</label>
					<br>
					<label for="">Correo:
						<input type="email" name="correo" id="correo" placeholder="Ingrese correo">
					</label>
					<br>
					<label for="">Nombre de la empresa:
						<input type="text" name="nombre_empresa" id="nombre_empresa" placeholder="Ingrese el nombre de la empresa">
					</label>
					<br>
					<label for="">Número de invitados:
						<input type="number" name="n_invitados" id="n_invitados" placeholder="Ingrese el número de invitados">
					</label>
					<br>

					<label for="">Fecha del evento:
						<input type="date" name="fecha_evento" id="fecha_evento">
					</label>
					<br>
					<label for="">Hora de inicio:
						<input type="time" name="hora_inicio" id="hora_inicio">
					</label>
					<br>
					<label for="">Hora de fin:
						<input type="time" name="hora_fin" id="hora_fin">
					</label>
					<br>
					<label for="">Otros detalles o comentarios:
						<textarea name="detalles_comentarios" id="detalles_comentarios"></textarea>
					</label>
					<br>
					<label for="">Suscribirse:
						<input type="checkbox" name="suscrito" id="suscrito">
					</label>
					<br>

					<label for="">
						<input type="hidden" name="situacion" id="situacion" value="PENDIENTE">
					</label>
					<br>

					<button id="btnActionForm" name="btnActionForm" class="btn btn-primary" type="submit">
						<i class="bi bi-check-circle-fill me-2"></i>
						<span id="btnText">Guardar</span>
					</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>




</div>
</div>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				Productos Nuevos
			</h3>
		</div>
		<hr>
		<div class="row isotope-grid">
			<?php
			for ($p = 0; $p < count($arrProductos); $p++) {
				$rutaProducto = $arrProductos[$p]['ruta'];
				if (count($arrProductos[$p]['images']) > 0) {
					$portada = $arrProductos[$p]['images'][0]['url_image'];
				} else {
					$portada = media() . '/images/uploads/product.png';
				}
			?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
							<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver producto
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $arrProductos[$p]['nombre'] ?>
								</a>

								<span class="stext-105 cl3">
									<?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
								 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
								 ">
									<i class="zmdi zmdi-shopping-cart"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<!-- Load more -->
		<div class="flex-c-m flex-w w-full p-t-45">
			<a href="<?= base_url() ?>/tienda" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Ver más
			</a>
		</div>
	</div>


</section>

<!-- Slider -->																								
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
			
				<div class="item-slick1" style="background-image: url(<?= media().'/tienda/images/wkm2.png';?>);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1" style="color: white; justify-content: center; margin-left: 300px;">
									Wakami Eventos
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
footerTienda($data);
?>



</body>
</html>