<?php  
/**
 * 
 */
class Prestasi extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Prestasi";
		$data['DPRS'] = $this->model('PrestasiModel')->getAllPrestasi();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/prestasi',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('PrestasiModel')->TambahDataPrestasi($_POST) > 0){
			header('Location: ' . BASEURL . '/Prestasi');
			exit;
		}
	}

	public function hapus($id_pengguna)
	{
		if($this->model('PrestasiModel')->HapusDataPrestasi($_POST) > 0){
			header('Location: ' . BASEURL . '/prestasi');
			exit;
		}
	}
}	