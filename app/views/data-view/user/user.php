
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a href="<?= BASEURL; ?>/User/tambah"><button type="button" class="btn btn-info" >
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
                  <th>Id pengguna</th>
                  <th>Nomer Induk</th>
                  <th>Nama Pengguna</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Foto Profil</th>
                  <th>Level Pengguna</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>Kata Sandi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach ($data['usr'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['Id_pengguna']; ?></td>
                    <td><?= $row['Nomer_Induk']; ?></td>
                    <td><?= $row['Nama_Pengguna']; ?></td>
                    <td><?= $row['Nama_Lengkap']; ?></td>
                    <td><?= $row['Tempat_Lahir']; ?></td>
                    <td><?= $row['Tanggal_Lahir']; ?></td>
                    <td><?= $row['Foto_Profil']; ?></td>
                    <td><?= $row['Level_Pengguna']; ?></td>
                    <td><?= $row['Kelas']; ?></td>
                    <td><?= $row['Alamat']; ?></td>
                    <td><?= $row['Kata_Sandi']; ?></td>
                    <td>
                      <a href="<?=BASEURL; ?>/User/hapus/<?=$row['Id_pengguna']; ?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a> 
                      <a href="<?=BASEURL; ?>/User/edit/<?=$row['Id_pengguna']; ?>"><div class="btn btn-warning fa fa-edit (alias) "></div></a>
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

