<?php  
/**
 * 
 */
class User extends Controller{
	
	// public function __construct()
	// {	
	// 	if($_SESSION['session_login'] != 'sudah_login') {
	// 		header('location: '. BASEURL . '/login');
	// 		exit;
	// 	}
	// }

	public function index()
	{
		$data['judul'] = "Halaman Pengguna";
		$data['usr'] = $this->model('UserModel')->getAllUser();
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/user/user',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Pengguna";
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/user/user_add',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function simpanUser()
	{		
		if( $this->model('UserModel')->TambahDataUser($_POST) > 0 ) {
			// Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/User');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/User');
			exit;	
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Pengguna";
		$data['Data_Get'] = $this->model('UserModel')->getUserById($id);
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/user/user_edit',$data);
		$this->view('data-view/templates/Footer-Index');
	}

	public function updateUser(){	
		if( $this->model('UserModel')->updateDataUser($_POST) > 0) {
			// Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/User');
			exit;			
		}else{
			// Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/User');
			exit;	
		}
	}

	public function hapus($id)
	{
		if( $this->model('UserModel')->HapusDataUser($id) > 0){
			header('Location: ' . BASEURL . '/User');
			exit;
		}
	}

	
}	