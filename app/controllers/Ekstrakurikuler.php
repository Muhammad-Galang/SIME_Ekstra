<?php  
/**
 * 
 */
class Ekstrakurikuler extends Controller{
	public function index()
	{
		$data['judul'] = "Halaman Ekstrakurikuler";
		$data['D_E'] = $this->model('EkstrakurikulerModel')->getAllEkstrakurikuler();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/ekstrakurikuler/ekstrakurikuler',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Ekstrakurikuler";
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/ekstrakurikuler/ekstrakurikuler_add',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function simpanEkstrakurikuler()
	{		
		if( $this->model('EkstrakurikulerModel')->TambahDataEkstrakurikuler($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/Ekstrakurikuler');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/Ekstrakurikuler');
			exit;	
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Ekstrakurikuler";
		$data['Data_Get']= $this->model('EkstrakurikulerModel')->getAllEkstraById($id);
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/ekstrakurikuler/ekstrakurikuler_edit',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function updateDataEkskul(){	
		if( $this->model('EkstrakurikulerModel')->ubahDataEkskul($_POST) > 0) {
			// Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/Ekstrakurikuler');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/Ekstrakurikuler');
			exit;	
		}
	}

	public function hapus($id_ekskul)
	{
		if($this->model('EkstrakurikulerModel')->HapusDataEkstrakurikuler($id_ekskul) > 0){
			header('Location: ' . BASEURL . '/ekstrakurikuler');
			exit;
		}
	}
}	