<?php  
/**
 * 
 */
class Siswa extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Siswa";
		$data['D_S'] = $this->model('SiswaModel')->getAllSiswa();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/siswa',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('SiswaModel')->TambahDataSiswa($_POST) > 0){
			header('Location: ' . BASEURL . '/Siswa');
			exit;
		}
	}
	
	public function hapus($id_pengguna)
	{
		if($this->model('SiswaModel')->HapusDataSiswa($id_pengguna) > 0){
			header('Location: ' . BASEURL . '/siswa');
			exit;
		}
	}
}	