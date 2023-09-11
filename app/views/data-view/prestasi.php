
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
                <th>Id Prestasi</th>
                <th>Id Ekskul</th>
                <th>Id_Pengguna</th>
                <th>Nama_Prestasi</th>
                <th>Waktu</th>
                <th>Deskripsi</th>
                <th>Foto</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['DPRS'] as $prs) :?>
                <tr>
                  <td><?= $prs['Id_Prestasi']; ?></td>
                  <td><?= $prs['Id_Ekskul']; ?></td>
                  <td><?= $prs['Id_Pengguna']; ?></td>
                  <td><?= $prs['Nama_Prestasi']; ?></td>
                  <td><?= $prs['Waktu']; ?></td>
                  <td><?= $prs['Deskripsi']; ?></td>
                  <td><?= $prs['Foto']; ?></td>
                  <td>
                    <a href="<?=BASEURL; ?>/Prestasi/hapus/<?=$prs['Id_Pengguna']; ?>" float-end ml-1" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a>

                    <a href="<?=BASEURL; ?>/Prestasi/edit/<?=$keps['Id_Kepala']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
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
        <form action="<?=BASEURL; ?>/Prestasi/tambah" method="POST">

          <div class="form-group">
           <label for="id_ekskul">ID EKSKUL</label>
           <input type="text" class="form-control" id="id_ekskul" autocomplete="off" name="id_ekskul">
         </div>
         
         <div class="form-group">
          <label for="id_pengguna">ID PENGGUNA</label>
          <input type="text" class="form-control" id="id_pengguna" autocomplete="off" name="id_pengguna">
        </div>

        <div class="form-group">
          <label for="nama_prestasi">NAMA PRESTASI</label>
          <input type="text" class="form-control" id="nama_prestasi" autocomplete="off" name="nama_prestasi">
        </div>

        <div class="form-group">
          <label for="waktu">WAKTU</label>
          <input type="text" class="form-control" id="waktu" autocomplete="off" name="waktu">
        </div>

        <div class="form-group">
          <label for="deksripsi">DESKRIPSI</label>
          <input type="text" class="form-control" id="deksripsi" autocomplete="off" name="deksripsi">
        </div>

        <div class="form-group">
          <label for="foto">FOTO</label>
          <input type="text" class="form-control" id="foto" autocomplete="off" name="foto">
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
