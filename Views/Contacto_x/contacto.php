<?php 
headerTienda($data);
$banner = $data['page']['portada'];
$idpagina = $data['page']['idpost'];

 ?>
<script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(<?= $banner ?>);">
	<h2 class="ltext-105 cl0 txt-center">
		Contacto
	</h2>
</section>

<?php
	if(viewPage($idpagina)){	
 ?>

<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <!-- Formulario de Contacto -->
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form id="frmContacto">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Enviar un mensaje
                    </h4>
                    
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <label for="nombreContacto" class="hidden">Nombre completo</label>
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo" required aria-required="true">
                        <svg class="how-pos4 pointer-none" width="28" height="28" fill="currentColor">
                            <use xlink:href="#icon-name"></use>
                        </svg>
                    </div>
                    
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <label for="numeroContacto" class="hidden">Número de teléfono</label>
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" id="numeroContacto" name="numeroContacto" placeholder="Número de teléfono" required aria-required="true">
                        <svg class="how-pos4 pointer-none" width="28" height="28" fill="currentColor">
                            <use xlink:href="#icon-phone"></use>
                        </svg>
                    </div>
                    
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <label for="emailContacto" class="hidden">Correo electrónico</label>
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" id="emailContacto" name="emailContacto" placeholder="Correo electrónico" required aria-required="true">
                        <svg class="how-pos4 pointer-none" width="28" height="28" fill="currentColor">
                            <use xlink:href="#icon-email"></use>
                        </svg>
                    </div>
                    
                    <div class="bor8 m-b-30">
                        <label for="mensaje" class="hidden">¿Cuál es tu pregunta o mensaje?</label>
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" id="mensaje" name="mensaje" placeholder="¿Cuál es tu pregunta o mensaje?" required aria-required="true"></textarea>
                    </div>
                    
                    <div class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" id="sendButton">
                        Enviar
                    </div>

                    <!-- Spinner de carga -->
                    <div id="loadingSpinner" class="hidden">
                        <svg width="30" height="30" viewBox="0 0 50 50">
                            <circle cx="25" cy="25" r="20" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round">
                                <animate attributeName="stroke-dashoffset" from="0" to="502" dur="1.5s" repeatCount="indefinite"></animate>
                                <animate attributeName="stroke-dasharray" from="150.6 100.4" to="1 250" dur="1.5s" repeatCount="indefinite"></animate>
                            </circle>
                        </svg>
                    </div>

                    <!-- Mensaje de éxito -->
                    <div id="successMessage" class="hidden">
                        <p>¡Tu mensaje ha sido enviado con éxito!</p>
                    </div>
                </form>
            </div>

            <!-- Información de Contacto -->
            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Dirección
                        </span>
                        <p class="stext-115 cl6 size-213 p-t-18">
                            <?= DIRECCION ?>
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-phone-handset"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Teléfono
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18">
                            <a href="tel:<?= TELEMPRESA ?>"><?= TELEMPRESA ?></a>
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-envelope"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            E-mail
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18">
                            <a href="mailto:<?= EMAIL_EMPRESA ?>"><?= EMAIL_EMPRESA ?></a>
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-clock"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Horario de atención
                        </span>
                        <p class="stext-115 cl1 size-213 p-t-18">
                            Lunes a Viernes: 9:00 AM - 6:00 PM<br>
                            Sábado: 9:00 AM - 1:00 PM
                        </p>
                    </div>
                </div>

                <div id="map" class="size-210 p-tb-30">
                    <!-- Mapa Interactivo -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509293!2d144.9556510153198!3d-37.817327979751955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f55b5cbb%3A0x2c0de2b4b378d3b5!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1614819875161!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plantilla de iconos SVG -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="icon-name" viewBox="0 0 24 24">
        <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
        <path d="M16.93 11.5c-.19-1.26-.73-2.33-1.42-3.08-.78-.83-1.75-1.27-2.51-1.27-.75 0-1.56.22-2.32.85-.74.62-1.27 1.5-1.42 2.51-.16 1.15.18 2.09.71 2.84.6.85 1.4 1.53 2.55 1.9.18.06.38.12.6.12.2 0 .41-.06.57-.12 1.12-.36 1.85-1.08 2.52-1.88.53-.67.86-1.42.85-2.46zm-4.8 1.45c-.21-.21-.31-.5-.31-.83s.1-.62.31-.83.5-.31.83-.31.62.1.83.31.31.5.31.83-.1.62-.31.83-.5.31-.83.31-.62-.1-.83-.31zm1.7 3.15c-.17.17-.42.26-.66.26s-.49-.1-.66-.26c-.33-.33-.33-.88 0-1.22.33-.34.88-.34 1.22 0 .33.33.33.88 0 1.22z"/>
    </symbol>
    <symbol id="icon-phone" viewBox="0 0 24 24">
        <path d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.68-.36 1.05-.26 1.12.34 2.33.52 3.54.52.55 0 1-.45 1-1V17c0-.55-.45-1-1-1-9.39 0-17-7.61-17-17 0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1 0 1.21.18 2.42.52 3.54.1.37.01.77-.26 1.05l-2.2 2.2c1.44 2.83 3.76 5.15 6.59 6.59z"/>
    </symbol>
    <symbol id="icon-email" viewBox="0 0 24 24">
        <path d="M19 4H5c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 4l-7 4.5L5 8V6l7 4.5L19 6v2z"/>
    </symbol>
</svg>

<!-- Script de Validación y Envío -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('frmContacto');
        const sendButton = document.getElementById('sendButton');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const successMessage = document.getElementById('successMessage');
        
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            
            // Validación básica
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            
            sendButton.classList.add('hidden');
            loadingSpinner.classList.remove('hidden');
            
            // Simulación de envío
            setTimeout(() => {
                loadingSpinner.classList.add('hidden');
                successMessage.classList.remove('hidden');
                form.reset();
            }, 2000);
        });
    });
</script>

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