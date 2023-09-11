<?php  
/**
 * 
 */
class User extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Pengguna";
		$data['usr'] = $this->model('UserModel')->getAllUser();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/index',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		if($this->model('UserModel')->TambahDataUser($_POST) > 0){
			header('Location: ' . BASEURL . '/user');
			exit;
		}
	}

	public function hapus($id)
	{
		if( $this->model('UserModel')->HapusDataUser($id) > 0){
			header('Location: ' . BASEURL . '/user');
			exit;
		}
	}
}	