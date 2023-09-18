
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Kepala Sekolah<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a href="<?= BASEURL; ?>/KepalaSekolah/tambah"><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#FormModal">
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
                    <a href="<?=BASEURL; ?>/KepalaSekolah/hapus/<?=$keps['Id_Kepala']; ?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a>

                    <a href="<?=BASEURL; ?>/KepalaSekolah/edit/<?=$keps['Id_Kepala']; ?>" data-bs-toggle="modal" data-bs-target="#FormModal" class="btn btn-warning fa fa-edit tampilModalUbah"></a> 
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
