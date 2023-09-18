<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="<?= BASEURL; ?>/Pembimbing" class="btn btn-primary glyphicon glyphicon-arrow-left">KEMBALI</a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li class="dropdown">
            <h2>Form Ubah Data</h2>
          </li>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form action="<?=BASEURL; ?>/User/simpanUser" method="post">

        <!-- <span class="section">Personal Info</span> -->
        <div class= "field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pengguna">NAMA PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="nama_pengguna" autocomplete="off" name="nama_pengguna">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_lengkap">NAMA LENGKAP</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="nama_lengkap" autocomplete="off" name="nama_lengkap">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="kata_sandi">KATA SANDI</label>
          <div class="col-md-6 col-sm-6">
            <input type="password" class="form-control" id="kata_sandi" autocomplete="off" name="kata_sandi">
          </div>
        </div>


        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nomer_induk">NOMER INDUK</label>
          <div class="col-md-6 col-sm-6">
            <input type="number" class="form-control" id="nomer_induk" autocomplete="off" name="nomer_induk">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="kelas">KELAS</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="kelas" autocomplete="off" name="kelas">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="tampat_lahir">TEMPAT LAHIR</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="tampat_lahir" autocomplete="off" name="tampat_lahir">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_lahir">TANGGAL LAHIR</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="tanggal_lahir" autocomplete="off" name="tanggal_lahir">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">ALAMAT</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="alamat" autocomplete="off" name="alamat">
          </div>
        </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto_profil">FOTO PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="file" class="form-control" id="foto_profil" autocomplete="off" name="foto_profil">
          </div>
        </div>
      <!-- coba yang terakhir tambahkan pilihan saja.MISALKAN MEMASUKKAN JURUSAN.
        DAN DATANYA KITA AMBIL DARI DATABASE -->
        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="level_pengguna">LEVEL PENGGUNA</label>
          <div class="col-md-6 col-sm-6">
            <input type="text" class="form-control" id="level_pengguna" autocomplete="off" name="level_pengguna">
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