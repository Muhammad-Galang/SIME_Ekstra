+<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><a href="<?= BASEURL; ?>/Ekstrakurikuler" class="btn btn-primary glyphicon glyphicon-arrow-left">KEMBALI</a></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li class="dropdown">
            <h2>Form Ubah Data</h2>
          </li>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form action="<?=BASEURL; ?>/Ekstrakurikuler/updateDataEkskul" method="post" enctype="multipart/form-data">
        <input type="hidden" name="Id_Ekskul" value="<?= $data['Data_Get']['Id_Ekskul'] ?>">
        <!-- <span class="section">Personal Info</span> -->
        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align">NAMA EKSTRAKURIKULER<span class="required">*</span></label>
          <div class="col-md-6 col-sm-6">
            <input class="form-control" name="nama_ekskul" type="text" value="<?= $data['Data_Get']['Nama_Ekskul']; ?>"></div>
          </div>

          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">VISI EKSKUL<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input class="form-control" name="visi_ekskul" required="required" type="text" value="<?= $data['Data_Get']['Visi_Ekskul'];?>"></div>
            </div>

            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">MISI EKSKUL<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="misi_ekskul" required='required' value="<?= $data['Data_Get']['Misi_Ekskul'];?>"></div>
              </div>

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">LOGO EKSKUL<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input class="form-control" type="file" name="logo_ekskul" required='required' value="<?= $data['Data_Get']['Logo_Ekskul'];?>"></div>
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