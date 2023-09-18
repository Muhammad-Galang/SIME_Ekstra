<?php  
/**
 * 
 */
class Pembimbing extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pembimbing";
		$data['Data_All'] = $this->model('PembimbingModel')->getAllPembimbing();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/pembimbing/pembimbing',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Pembimbing";
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/pembimbing/pembimbing_add',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Pembimbing";
		$data['Data_Get'] = $this->model('PembimbingModel')->getPembimbingById($id);
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/pembimbing/pembimbing_edit',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function simpanPembimbing()
	{		
		if( $this->model('PembimbingModel')->TambahDataPembimbing($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/Pembimbing');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/Pembimbing');
			exit;	
		}
	}

	public function updatePembimbing(){	
		if( $this->model('PembimbingModel')->updateDataPembimbing($_POST) > 0) {
			// Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/Pembimbing');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/Pembimbing');
			exit;	
		}
	}

	public function hapus($id_pembimbing)
	{
		if($this->model('PembimbingModel')->HapusDataPembimbing($id_pembimbing) > 0){
			header('Location: ' . BASEURL . '/pembimbing');
			exit;
		}
	}
}	