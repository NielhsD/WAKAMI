<?= 
  headerAdmin($data);
?>

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

<script>const base_url="<?=base_url();?>";</script>
    
    <!-- Essential javascripts for application to work-->
    <script src="<?=media();?>js/jquery-3.7.0.min.js"></script>
    <script src="<?=media();?>js/bootstrap.min.js"></script>
    <script src="<?=media();?>js/main.js"></script>

    <script src="<?=media();?>js/functionsCotizar.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="<?=media();?>js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>js/bootstrap.min.js"></script>

    <!--Notificaaciones de Swal -->
    <script src="<?=media();?>js/plugins/sweetalert2.js"></script>
<?php footerAdmin($data); ?>