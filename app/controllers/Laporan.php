<?php  
/**
 * 
 */
class Laporan extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Laporan";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/laporan');
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('LaporanModel')->TambahDataLaporan($_POST) > 0){
			header('Location: ' . BASEURL . '/Laporan');
			exit;
		}
	}

	public function hapus($id_pengguna)
	{
		if($this->model('KepalaSekolahModel')->HapusDataKepsek($id_pengguna) > 0){
			header('Location: ' . BASEURL . '/KepalaSekolah');
			exit;
		}
	}
}	