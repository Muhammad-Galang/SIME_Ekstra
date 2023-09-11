
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Kepala Sekolah<small>Users</small></h2>
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
                <th>Id Kepala Sekolah</th>
                <th>Id Pengguna</th>
                <th>Tanggal Terdata</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['KPS'] as $keps) : ?>
                <tr>
                  <td><?= $keps['Id_Kepala']; ?></td>
                  <td><?= $keps['Id_Pengguna']; ?></td>
                  <td><?= $keps['Tanggal_Terdata']; ?></td>
                  <td>
                    <a href="<?=BASEURL; ?>/KepalaSekolah/hapus/<?=$keps['Id_Kepala']; ?>" class="badge-danger  float-end ml-1" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a>

                    <a href="<?=BASEURL; ?>/kepalasekolah/edit/<?=$keps['Id_Kepala']; ?>" class="badge-warning  float-end ml-1"><button type="button" class="btn btn-warning">Edit</button></a>
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
        <form action="<?=BASEURL; ?>/kepalasekolah/tambah" method="POST">

          <div class="form-group">
            <label for="id_pengguna">ID PENGGUNA</label>
            <input type="text" class="form-control" id="id_pengguna" autocomplete="off" name="id_pengguna">
          </div>
          
          <div class="form-group">
           <label for="tanggal_terdata">TANGGAL TERDATA</label>
           <input type="text" class="form-control" id="tanggal_terdata" autocomplete="off" name="tanggal_terdata">
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

