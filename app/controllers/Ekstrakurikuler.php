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
		$this->view('data-view/ekstrakurikuler',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('EkstrakurikulerModel')->TambahDataEkstrakurikuler($_POST) > 0){
			header('Location: ' . BASEURL . '/ekstrakurikuler');
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