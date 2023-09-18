<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="<?= BASEURL; ?>/User" class="btn btn-primary glyphicon glyphicon-arrow-left">KEMBALI</a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li class="dropdown">
            <h2>Form Ubah Data</h2>
          </li>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form action="<?=BASEURL; ?>/User/updateUser" method="post">

        <input type="hidden" class="form-control" id="id_pengguna" autocomplete="off" name="id_pengguna" value="<?= $data['Data_Get']['Id_pengguna']; ?>">
        <!-- <span class="section">Personal Info</span> -->
        <div class= "field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pengguna">NAMA PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="nama_pengguna" autocomplete="off" name="nama_pengguna" value="<?= $data['Data_Get']['Nama_Pengguna'];?>">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">NAMA LENGKAP</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="nama_lengkap" autocomplete="off" name="nama_lengkap" value="<?= $data['Data_Get']['Nama_Lengkap']; ?>">  
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="kata_sandi">KATA SANDI</label>
          <div class="col-md-6 col-sm-6">
            <input type="password" class="form-control" id="kata_sandi" autocomplete="off" name="kata_sandi" value="<?= $data['Data_Get']['Kata_Sandi']; ?>">
          </div>
        </div>


        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nomer_induk">NOMER INDUK</label>
          <div class="col-md-6 col-sm-6">
            <input type="number" class="form-control" id="nomer_induk" autocomplete="off" name="nomer_induk" value="<?= $data['Data_Get']['Nomer_Induk']; ?>">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="kelas">KELAS</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="kelas" autocomplete="off" name="kelas" value="<?= $data['Data_Get']['Kelas']; ?>">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="tampat_lahir">TEMPAT LAHIR</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="tampat_lahir" autocomplete="off" name="tampat_lahir" value="<?= $data['Data_Get']['Tempat_Lahir']; ?>">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_lahir">TANGGAL LAHIR</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="tanggal_lahir" autocomplete="off" name="tanggal_lahir" value="<?= $data['Data_Get']['Tanggal_Lahir']; ?>"> 
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">ALAMAT</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="alamat" autocomplete="off" name="alamat" value="<?= $data['Data_Get']['Alamat']; ?>">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto_profil">FOTO PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="file" class="form-control" id="foto_profil" autocomplete="off" name="foto_profil" value="<?//= $data['Data_Get']['Foto_Profil']; ?>">
          </div>
        </div>
      <!-- coba yang terakhir tambahkan pilihan saja.MISALKAN MEMASUKKAN JURUSAN.
        DAN DATANYA KITA AMBIL DARI DATABASE -->
        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="level_pengguna">LEVEL PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="level_pengguna" autocomplete="off" name="level_pengguna" value="<?= $data['Data_Get']['Level_Pengguna']; ?>">
          </div>
        </div>

        <div class="ln_solid">
          <div class="form-group">
            <div class="col-md-6 offset-md-3">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-success">Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>