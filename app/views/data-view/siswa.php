
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Anggota Peserta<small>Siswa</small></h2>
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
                <th>Id Memilih ekskul</th>
                <th>Id Pengguna</th>
                <th>Id Ekskul</th>
                <th>Tahun</th>
                <th>Tanggal Terdata</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data['D_S'] as $Ds): ?>
                <tr>
                  <td><?= $Ds['Id_Memilih_Ekskul'];?></td>
                  <td><?= $Ds['Id_Pengguna'];?></td>
                  <td><?= $Ds['Id_Ekskul'];?></td>
                  <td><?= $Ds['Tahun'];?></td>
                  <td><?= $Ds['Tanggal_Terdata'];?></td>
                  <td>
                    <!-- Button Update & Delete -->
                    <a href="<?=BASEURL; ?>/siswa/hapus/<?=$Ds['Id_Memilih_Ekskul'];?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a>
                    <a href="<?=BASEURL; ?>/siswa/edit/<?=$Ds['Id_Pengguna']; ?>" data-bs-toggle="modal" data-bs-target="#FormModal" class="btn btn-warning fa fa-edit tampilModalUbah"></a> 
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
        <form action="<?=BASEURL; ?>/siswa/tambah" method="POST">
         <div class="form-group">
          <label for="id_memilih_ekskul">ID MEMILIH EKSKUL</label>
          <input type="number" class="form-control" id="id_memilih_ekskul" autocomplete="off" name="id_memilih_ekskul">
        </div>

        <div class="form-group">
         <label for="id_pengguna">ID PENGGUNA</label>
         <input type="number" class="form-control" id="id_pengguna" autocomplete="off" name="id_pengguna">
       </div>

       <div class="form-group">
         <label for="id_ekskul">ID EKSKUL</label>
         <input type="number" class="form-control" id="id_ekskul" autocomplete="off" name="id_ekskul">
       </div>

       <div class="form-group">
         <label for="tahun">TAHUN</label>
         <input type="number" class="form-control" id="tahun" autocomplete="off" name="tahun">
       </div>

       <div class="form-group">
         <label for="tanggal_terdata">TANGGAL TERDATA</label>
         <input type="date" class="form-control" id="tanggal_terdata" autocomplete="off" name="tanggal_terdata">
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

