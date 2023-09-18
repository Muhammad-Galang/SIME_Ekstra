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
		$this->view('data-view/kepala_sekolah/kepala-sekolah',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Kepala Sekolah";
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view//kepala_sekolah/kepala-sekolah_add',$data);
		$this->view('data-view/templates/Footer-Index');	
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Pengguna";
		// $data['Data_Get'] = $this->model('KepalaSekolahModel')->getUserById($id);
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/kepala_sekolah/kepala-sekolah_edit',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function hapus($id_pengguna)
	{
		if($this->model('KepalaSekolahModel')->HapusDataKepsek($id_pengguna) > 0){
			header('Location: ' . BASEURL . '/KepalaSekolah');
			exit;
		}
	}
}	