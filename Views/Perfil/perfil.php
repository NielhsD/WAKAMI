<?php
  headerTienda($data);
?>

<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/style.css">
<style>
  .card {
    height: 100%; /* Ajusta la altura según tus necesidades */
    width: 100%; /* Ajusta el ancho según tus necesidades */
    /* Otros estilos necesarios */
  }
</style>
<main class="bg0 p-t-120 p-b-120 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      
      <!-- Perfil -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card profile-card h-100">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <div class="profile-header mb-3">
              <div class="cover-image"></div>
              <div class="profile-img">
                <?php
                if (isset($_SESSION['userData']['foto_perfil']) && $_SESSION['userData']['foto_perfil']) {
                    $fotoPerfil = base_url() . '/' . $_SESSION['userData']['foto_perfil'];
                } else {
                    $fotoPerfil = media() . '/images/avatar.png';
                }
                ?>
                <img src="<?= $fotoPerfil; ?>" alt="User Avatar" class="img-fluid rounded-circle">
              </div>
            </div>
            <div class="profile-info text-center">
              <h4><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']; ?></h4>
            </div>
          </div>
        </div>
      </div>

      <!-- Contenido de la derecha -->
      <div class="col-lg-8 col-md-6 mb-4">
        <div class="tab-content h-100" id="myTabContent">
          <!-- Datos personales -->
          <div class="tab-pane fade show active h-100" id="user-timeline" role="tabpanel" aria-labelledby="user-timeline-tab">
            <div class="card h-100">
              <div class="card-body">
                <div class="timeline-post">
                  <h5 class="mb-4">DATOS PERSONALES <a href="<?= base_url(). '/usuarios/perfil' ?>" class="btn btn-sm btn-primary ml-2"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Actualizar</a></h5>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td style="width:150px;">Identificación:</td>
                        <td><?= $_SESSION['userData']['identificacion']; ?></td>
                      </tr>
                      <tr>
                        <td>Nombres:</td>
                        <td><?= $_SESSION['userData']['nombres']; ?></td>
                      </tr>
                      <tr>
                        <td>Apellidos:</td>
                        <td><?= $_SESSION['userData']['apellidos']; ?></td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td><?= $_SESSION['userData']['telefono']; ?></td>
                      </tr>
                      <tr>
                        <td>Email (Usuario):</td>
                        <td><?= $_SESSION['userData']['email_user']; ?></td>
                      </tr>
                      <!-- Agregar campo para subir foto de perfil -->
                      <tr>
                        <td>Foto de Perfil:</td>
                        <td>
                          <form action="procesar_foto_perfil.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto_perfil" id="foto_perfil">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i> Subir Foto</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php footerTienda($data); ?>
