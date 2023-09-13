<?php 
/**
 * 
 */
class Login extends Controller{
	
	public function index()
	{
		$data['title'] = 'Halaman Login';
		$this->view('landing-page/login', $data);
	}

	public function ProsesLogin() {
		
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
			
			$_SESSION['Nama_Pengguna'] = $row['nama_pengguna'];
			$_SESSION['Password'] = $row['password'];
			$_SESSION['session_login'] = 'sudah_login'; 

			header('location: '. BASEURL . '/user');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}


	}
	public function LogOut()
	{
		session_destroy();
		header('location: ' . BASEURL . '/home');
	}	
}


