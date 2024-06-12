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
		Blog
	</h2>
</section>

<?php
	if(viewPage($idpagina)){	
 ?>

<!-- Sección de Formulario de Contacto -->
<section id="contactSection" class="bg0 p-t-104 p-b-116">
    <div class="container">
        <!-- Empresas Asociadas -->
        <div id="partnerLogos" class="text-center p-b-60">
            <h2 class="mtext-105 cl2">Eventos realizados</h2>
            <div class="flex-w flex-sa">
                <div class="partner-logo">
                    <img src="<?= media() ?>/images/12345.jpg">
                </div>
                <div class="partner-logo">
                    <img src="<?= media() ?>/images/123.jpg" alt="Empresa 2">
                </div>
                <div class="partner-logo">
                    <img src="<?= media() ?>/images/1234.jpg" alt="Empresa 3">
                </div>
            </div>
            <div class="flex-w flex-sa">
                <div class="">
                    <p>Evento realizado el dia <br><b>20/05/2023</b> en la ciudad <br>de <b>chilca</b></p>
                </div>
                <div class="">
                    <p>Evento realizado el dia <br><b>27/05/2023</b> en la ciudad <br>de <b>lima</b></p>
                </div>
                <div class="">
                    <p>Evento realizado el dia <br><b>20/05/2023</b> en la ciudad <br>de <b>imperial</b></p>
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