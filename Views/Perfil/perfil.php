<?php
  headerTienda($data);
  getModal('modalPerfil', $data);
?>

<link rel="stylesheet" type="text/css" href="<?= media() ?>./tienda/css/style.css">

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
                <img src="<?= media(); ?>/images/avatar.png" alt="User Avatar" class="img-fluid rounded-circle">
              </div>
            </div>
            <div class="profile-info text-center">
              <h4><?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos']; ?></h4>
              <p><?= $_SESSION['userData']['nombrerol']; ?></p>
            </div>
            <div class="profile-nav">
              <div class="card">
                <div class="list-group list-group-flush" id="myTab" role="tablist">
                  <a class="list-group-item list-group-item-action active text-center" id="user-timeline-tab" data-toggle="tab" href="#user-timeline" role="tab" aria-controls="user-timeline" aria-selected="true">
                    <h6 class="mb-0">Datos personales</h6>
                  </a>
                  <a class="list-group-item list-group-item-action text-center" id="user-settings-tab" data-toggle="tab" href="#user-settings" role="tab" aria-controls="user-settings" aria-selected="false">
                    <h6 class="mb-0">Datos fiscales</h6>
                  </a>
                </div>
              </div>
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
                  <h5 class="mb-4">DATOS PERSONALES <button class="btn btn-sm btn-primary ml-2" type="button" onclick="openModalPerfil();"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar</button></h5>
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
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Datos fiscales -->
          <div class="tab-pane fade h-100" id="user-settings" role="tabpanel" aria-labelledby="user-settings-tab">
            <div class="card h-100">
              <div class="card-body">
                <div class="user-settings">
                  <h4 class="line-head">Datos fiscales</h4>
                  <form id="formDataFiscal" name="formDataFiscal">
                    <div class="form-group">
                      <label for="txtNit">Identificación Tributaria</label>
                      <input class="form-control" type="text" id="txtNit" name="txtNit" value="<?= $_SESSION['userData']['nit']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="txtNombreFiscal">Nombre fiscal</label>
                      <input class="form-control" type="text" id="txtNombreFiscal" name="txtNombreFiscal" value="<?= $_SESSION['userData']['nombrefiscal']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="txtDirFiscal">Dirección fiscal</label>
                      <input class="form-control" type="text" id="txtDirFiscal" name="txtDirFiscal" value="<?= $_SESSION['userData']['direccionfiscal']; ?>">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                  </form>
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
