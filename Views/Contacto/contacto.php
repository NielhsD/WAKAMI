<?php 
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];

 ?>
<script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= media() ?>/images/banner3.png);">
	<h2 class="ltext-105 cl0 txt-center">
		Contacto
	</h2>
</section>

<?php
	if(viewPage($idpagina)){	
 ?>

<!-- Sección de Formulario de Contacto -->
<section id="contactSection" class="bg0 p-t-104 p-b-116">
    <div class="container">
        <!-- Formulario de Contacto -->
        <div id="contactFormContainer" class="flex-w flex-tr">
            <div class="size-210 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form id="frmContacto" class="contact-form">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Enviar un mensaje
                    </h4>
                    
                    <div class="input-container">
                        <label for="nombreContacto">Nombre completo</label>
                        <input type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="numeroContacto">Número de teléfono</label>
                        <input type="number" id="numeroContacto" name="numeroContacto" placeholder="Número de teléfono" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="emailContacto">Correo electrónico</label>
                        <input type="email" id="emailContacto" name="emailContacto" placeholder="Correo electrónico" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" placeholder="¿Cuál es tu pregunta o mensaje?" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-button">Enviar</button>
                </form>
            </div>

            <!-- Información de Contacto -->
            <div class="size-210 p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <div class="contact-info">
                    <div class="info-item">
                        <span class="lnr lnr-map-marker"></span>
                        <div>
                            <h5>Dirección</h5>
                            <p><?= DIRECCION ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <span class="lnr lnr-phone-handset"></span>
                        <div>
                            <h5>Teléfono</h5>
                            <p><a href="tel:<?= TELEMPRESA ?>"><?= TELEMPRESA ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <span class="lnr lnr-envelope"></span>
                        <div>
                            <h5>E-mail</h5>
                            <p><a href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <span class="lnr lnr-clock"></span>
                        <div>
                            <h5>Horario de atención</h5>
                            <p>
                                Lunes a Viernes: 9:00 AM - 6:00 PM<br>
                                Sábado: 9:00 AM - 1:00 PM
                            </p>
                        </div>
                    </div>

                    <div id="map" class="map-container">
                        <!-- Mapa Interactivo -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.6489320784432!2d-76.35315163044493!3d-13.0613853992039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ffbdd4e065bab%3A0xd19e01221c244523!2sJir%C3%B3n%20El%20Carmen%20332%2C%20Imperial%2015701!5e0!3m2!1ses-419!2spe!4v1717959973562!5m2!1ses-419!2spe" width="580" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
		echo $data['page']['contenido'];
	}else{
?>
<div>
	<div class="container-fluid py-5 text-center" >
		<img src="<?= media() ?>/images/construction.png" alt="En construcción">
		<h3>Estamos trabajando para usted.</h3>
	</div>
</div>
<?php 
	}
	footerTienda($data);
?>