
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#FormModal">
          Tambah
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
                <th>Agama</th>
                <th>Foto Profil</th>
                <th>Level Pengguna</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Kata Sandi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data['usr'] as $dtUser) : ?>
                <tr>
                  <td><?php
                  $NO = 1;echo "$NO";$NO++;
                ?></td>
                <td><?= $dtUser['Id_pengguna']; ?></td>
                <td><?= $dtUser['Nomer_Induk']; ?></td>
                <td><?= $dtUser['Nama_Pengguna']; ?></td>
                <td><?= $dtUser['Nama_Lengkap']; ?></td>
                <td><?= $dtUser['Tempat_Lahir']; ?></td>
                <td><?= $dtUser['Tanggal_Lahir']; ?></td>
                <td><?= $dtUser['Agama']; ?></td>
                <td><?= $dtUser['Foto_Profil']; ?></td>
                <td><?= $dtUser['Level_Pengguna']; ?></td>
                <td><?= $dtUser['Kelas']; ?></td>
                <td><?= $dtUser['Alamat']; ?></td>
                <td><?= $dtUser['Kata_Sandi']; ?></td>
                <td>
                  <a href="<?=BASEURL; ?>/user/hapus/<?=$dtUser['Id_pengguna']; ?>" onclick="return confirm('yakin?')";><div class="btn btn-danger fa fa-trash "></div></a> 
                  <a href="<?=BASEURL; ?>/user/edit/<?=$dtUser['Id_pengguna']; ?>" onclick="return confirm('yakin?')";><div class="btn btn-warning fa fa-edit (alias) "></div></a>
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
      </div>
      <div class="modal-body">
        <!-- Header-Body -->
        <form action="<?=BASEURL; ?>/user/tambah" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nama_pengguna">NAMA PENGGUNA</label>
            <input type="text" class="form-control" id="nama_pengguna" autocomplete="off" name="nama_pengguna">
          </div>

          <div class="form-group">
            <label for="nama_lengkap">NAMA LENGKAP</label>
            <input type="text" class="form-control" id="nama_lengkap" autocomplete="off" name="nama_lengkap">
          </div>
          
          <div class="form-group">
           <label for="kata_sandi">KATA SANDI</label>
           <input type="password" class="form-control" id="kata_sandi" autocomplete="off" name="kata_sandi">
         </div>


         <div class="form-group">
          <label for="nomer_induk">NOMER INDUK</label>
          <input type="number" class="form-control" id="nomer_induk" autocomplete="off" name="nomer_induk">
        </div>

        <div class="form-group">
         <label for="kelas">KELAS</label>
         <input type="text" class="form-control" id="kelas" autocomplete="off" name="kelas">
       </div>

       <div class="form-group">
        <label for="tampat_lahir">TEMPAT LAHIR</label>
        <input type="text" class="form-control" id="tampat_lahir" autocomplete="off" name="tampat_lahir">
      </div>

      <div class="form-group">
        <label for="tanggal_lahir">TANGGAL LAHIR</label>
        <input type="text" class="form-control" id="tanggal_lahir" autocomplete="off" name="tanggal_lahir">
      </div>

      <div class="form-group">
        <label for="agama">AGAMA</label>
        <input type="text" class="form-control" id="agama" autocomplete="off" name="agama">
      </div>

      <div class="form-group row">
        <label class="control-label col-md-6 col-sm-3 "></label>
        <div class="col-md-12 col-sm-9 ">
          <select class="select2_single form-control" tabindex="-1" placholder="AGAMA">
            <option>Agama</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristes</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="alamat">ALAMAT</label>
        <input type="text" class="form-control" id="alamat" autocomplete="off" name="alamat">
      </div>

      <div class="form-group">
        <label for="foto_profil">FOTO PENGGUNA</label>
        <input type="file" class="form-control" id="foto_profil" autocomplete="off" name="foto_profil">
      </div>
      <!-- coba yang terakhir tambahkan pilihan saja.MISALKAN MEMASUKKAN JURUSAN.
        DAN DATANYA KITA AMBIL DARI DATABASE -->
        <div class="form-group">
          <label for="level_pengguna">LEVEL PENGGUNA</label>
          <input type="text" class="form-control" id="level_pengguna" autocomplete="off" name="level_pengguna">
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
</div>
</div>
