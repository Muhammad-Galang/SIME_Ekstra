
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#FormModal">
          Tambah Data
        </button></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Id_ Ekskul</th>
                <th>Nama Ekskul</th>
                <th>Visi_Ekskul</th>
                <th>Misi_Ekskul</th>
                <th>Logo_Ekskul</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['D_E'] as $De): ?>
                <tr>
                  <td><?= $De['Id_Ekskul']; ?></td>
                  <td><?= $De['Nama_Ekskul']; ?></td>
                  <td><?= $De['Visi_Ekskul']; ?></td>
                  <td><?= $De['Misi_Ekskul']; ?></td>
                  <td><?= $De['Logo_Ekskul']; ?></td>
                  <td>
                    <a href="<?=BASEURL; ?>/ekstrakurikuler/hapus/<?=$De['Id_Ekskul'];?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a>
                    <a href="<?=BASEURL; ?>/ekstrakurikuler/edit/<?=$De['Id_Ekskul']; ?>" data-bs-toggle="modal" data-bs-target="#FormModal" class="btn btn-warning fa fa-edit tampilModalUbah"></a> 
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- finish konten table -->

<!-- Modal -->
<div class="modal fade" id="FormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="JudulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Header-Body -->
        <form action="<?=BASEURL; ?>/Ekstrakurikuler/tambah" method="POST">
         <div class="form-group">
          <label for="nama_ekskul">NAMA EKSKUL</label>
          <input type="text" class="form-control" id="nama_ekskul" autocomplete="off" name="nama_ekskul">
        </div>
        
        <div class="form-group">
          <label for="visi_ekskul">VISI EKSKUL</label>
          <input type="text" class="form-control" id="visi_ekskul" autocomplete="off" name="visi_ekskul">
        </div>

        <div class="form-group">
          <label for="misi_ekskul">Misi Ekskul</label>
          <input type="text" class="form-control" id="misi_ekskul" autocomplete="off" name="misi_ekskul">
        </div>

        <div class="form-group">
          <label for="logo_ekskul">LOGO EKSKUL</label>
          <input type="text" class="form-control" id="logo_ekskul" autocomplete="off" name="logo_ekskul">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form> 
  </div>
</div>
</div>