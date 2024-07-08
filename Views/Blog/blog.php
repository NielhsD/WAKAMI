<?php 
    headerTienda($data);
    $banner = $data['page']['portada'];
    $idpagina = $data['page']['idpost'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<script src="<?= media() ?>/js/functions_blog.js"></script>
    <script>document.querySelector('header').classList.add('header-v4')</script>
</head>

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
        <div>
            <p>Total de comentarios: <?php echo $data['cantidad']; ?></p>
        </div>
        <div class="row">
            <div class="image">
                <img src="<?= media() ?>/images/123.jpg" alt="Imagen" style="width: 100%;">
            </div>
            <div class="form-container">
                <h3>Deja un comentario</h3>
                <form>
                    <div class="input-container2">
                        <label for="name">Nombre:</label>
                        <input id="nombre" type="text" id="name" name="name" required>
                    </div>
                    <div class="input-container2">
                        <label for="comment">Comentario:</label>
                        <textarea id="comentario" name="comment" required></textarea>
                    </div>
                    <div class="input-container2">
                        <button id="btnguardar" type="button" class="submit-button2">Comentar</button>
                    </div>
                </form>
                <?php foreach ($data['comment1'] as $comment1): ?>
                    <div class="comments">
                        <div class="comment">
                            <h5><?= $comment1['nombre'] ?></h5>
                            <p><?= $comment1['comentario'] ?></p>
                            <div class="text-comment">
                                <p><?= $comment1['fecha'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="image">
                <img src="<?= media() ?>/images/1234.jpg" alt="Imagen" style="width: 100%;">
            </div>
            <div class="form-container">
                <h3>Deja un comentario</h3>
                <form>
                    <div class="input-container2">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-container2">
                        <label for="comment">Comentario:</label>
                        <textarea id="comment" name="comment" required></textarea>
                    </div>
                    <div class="input-container2">
                        <button type="button" class="submit-button2">Comentar</button>
                    </div>
                </form>
                <?php foreach ($data['comment2'] as $comment2): ?>
                    <div class="comments">
                        <div class="comment">
                            <h5><?= $comment2['nombre'] ?></h5>
                            <p><?= $comment2['comentario'] ?></p>
                            <div class="text-comment">
                                <p><?= $comment2['fecha'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="image">
                <img src="<?= media() ?>/images/12345.jpg" alt="Imagen" style="width: 100%;">
            </div>
            <div class="form-container">
                <h3>Deja un comentario</h3>
                <form>
                    <div class="input-container2">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-container2">
                        <label for="comment">Comentario:</label>
                        <textarea id="comment" name="comment" required></textarea>
                    </div>
                    <div class="input-container2">
                        <button type="button" class="submit-button2">Comentar</button>
                    </div>
                </form>
                <?php foreach ($data['comment3'] as $comment3): ?>
                    <div class="comments">
                        <div class="comment">
                            <h5><?= $comment3['nombre'] ?></h5>
                            <p><?= $comment3['comentario'] ?></p>
                            <div class="text-comment">
                                <p><?= $comment3['fecha'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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

<style>
    /*.container {
        margin: 20px;
    }*/
    
    .row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .image, .form-container {
        box-sizing: border-box;
    }
    .image {
        flex: 7; /* Proporción de 70% */
        max-width: 70%;
        padding-right: 10px;
    }
    .form-container {
        flex: 3; /* Proporción de 30% */
        max-width: 30%;
        padding-left: 10px;
    }
    .input-container2 input,
    .input-container2 textarea {
        width: 100%;
        padding: 5px;
        border-radius: 10px;
        border: 1px solid #ddd;
        font-size: 12px;
        outline: none;
    }
    .submit-button2 {
        display: block;
        width: 100%;
        margin-top: 5px;
        padding: 10px;
        border: none;
        border-radius: 10px;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .comments {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 5px;
        margin-top: 10px;
    }
    .comment {
        margin-bottom: 10px;
    }
    .comment h4 {
        margin: 0 0 5px 0;
    }
    .comment p {
        margin: 0;
    }
    .text-comment p {
        margin-top: 10px;
        display: flex;
        font-size: 12px;
        justify-content: flex-end;
    }
</style>