
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a href="<?= BASEURL; ?>/Ekstrakurikuler/tambah"><button type="button" class="btn btn-info">
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
              <?php foreach ($data['D_E'] as $row): ?>
                <tr>
                  <td><?= $row['Id_Ekskul']; ?></td>
                  <td><?= $row['Nama_Ekskul']; ?></td>
                  <td><?= $row['Visi_Ekskul']; ?></td>
                  <td><?= $row['Misi_Ekskul']; ?></td>
                  <td><?= $row['Logo_Ekskul']; ?></td>
                  <td>
                    <a href="<?=BASEURL; ?>/Ekstrakurikuler/hapus/<?=$row['Id_Ekskul'];?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a>
                    
                    <a href="<?=BASEURL; ?>/Ekstrakurikuler/edit/<?=$row['Id_Ekskul']; ?>" class="btn btn-warning fa fa-edit tampilModalUbah"></a> 
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

