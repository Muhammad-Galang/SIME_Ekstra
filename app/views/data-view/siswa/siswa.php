
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <a href="<?= BASEURL; ?>/Siswa/tambah"><button type="button" class="btn btn-info" >
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
                <th>No.</th>
                <th>Id_Memilih_Ekskul</th>
                <th>Id_Pengguna</th>
                <th>Id_Ekskul</th>
                <th>Tahun</th>
                <th>Tanggal_Terdata</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['Data_All'] as $row): ?>
                <tr>
                  <td><?= $no; ?></td>                  
                  <td><?=$row['Id_Memilih_Ekskul']; ?></td>
                  <td><?=$row['Id_Pengguna']; ?></td>
                  <td><?=$row['Id_Pengguna']; ?></td>
                  <td><?=$row['Tahun']; ?></td>
                  <td><?=$row['Tanggal_Terdata']; ?></td>
                  <td>
                    <a href="<?=BASEURL; ?>/Siswa/hapus/<?=$row['Id_Pengguna']; ?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash" title="Delete Data"></div></a>

                    <a href="<?=BASEURL; ?>/Siswa/edit/<?=$row['Id_Memilih_Ekskul']; ?>"><div class="btn btn-warning fa fa-edit" title="Delete Data"></div></a>
                  </td>
                </tr>
                <?php $no++; endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- finish konten table -->

