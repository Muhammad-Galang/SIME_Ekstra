<?php  
/**
 * 
 */
class Pembimbing extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pembimbing";
		$data['DP'] = $this->model('PembimbingModel')->getAllPembimbing();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/pembimbing',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('PembimbingModel')->TambahDataPembimbing($_POST) > 0){
			header('Location: ' . BASEURL . '/pembimbing');
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