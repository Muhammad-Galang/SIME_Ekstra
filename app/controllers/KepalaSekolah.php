<?php  
/**
 * 
 */
class KepalaSekolah extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Kepala Sekolah";
		$data['KPS'] = $this->model('KepalaSekolahModel')->getAllKepsek();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/kepala-sekolah',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('KepalaSekolahModel')->TambahDataKepsek($_POST) > 0){
			header('Location: ' . BASEURL . '/KepalaSekolah');
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