<?php  
/**
 * 
 */
class Siswa extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Siswa";
		$data['Data_All'] = $this->model('SiswaModel')->getAllSiswa();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/siswa/siswa',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Siswa";
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/siswa/siswa_add',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function simpanSiswa()
	{
		if( $this->model('SiswaModel')->TambahDataSiswa($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/Siswa');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/Siswa');
			exit;	
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Siswa";
		$data['Data_Get'] = $this->model('SiswaModel')->getPembimbingById($id);
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/siswa/siswa_edit',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function updateSiswa(){	
		if( $this->model('SiswaModel')->updateDataSiswa($_POST) > 0) {
			// Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/Siswa');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/Siswa');
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