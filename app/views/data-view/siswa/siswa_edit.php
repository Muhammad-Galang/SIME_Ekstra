<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="<?= BASEURL; ?>/Siswa" class="btn btn-primary glyphicon glyphicon-arrow-left">KEMBALI</a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li class="dropdown">
            <h2>Form Ubah Data</h2>
          </li>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form action="<?=BASEURL; ?>/Siswa/updateSiswa" method="post" enctype="multipart/form-data">

        <!-- <span class="section">Personal Info</span> -->
        <input class="form-control" name="id_memilih_ekskul" type="hidden" <?= $data['Data_Get']['Id_Memilih_Ekskul']; ?>>


        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3  label-align">Id Pengguna<span class="required">*</span></label>
          <div class="col-md-6 col-sm-6">
            <input class="form-control" type="date" name="id_pengguna" required='required' <?= $data['Data_Get']['Id_Pengguna']; ?>></div>
          </div>

          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Id Ekskul<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input class="form-control" name="id_ekskul" required="required" type="number" <?= $data['Data_Get']['Id_Ekskul']; ?>></div>
            </div>

            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Tahun<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="tahun" required="required" type="number" <?= $data['Data_Get']['Tahun'] ?>></div>
              </div>

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Terdata<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" name="tanggal_terdata" required="required" type="number" <?= $data['Data_Get']['Tanggal_Terdata']; ?>></div>
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