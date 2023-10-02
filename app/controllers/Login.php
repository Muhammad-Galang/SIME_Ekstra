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

	public function Captcha()
	{
		$this->view('landing-page/captcha');
	}

	public function ProsesLogin() 
	{
    // Memeriksa apakah reCAPTCHA telah diverifikasi
		$recaptchaSecretKey = '6LcvumsoAAAAABVwVrXzDLjB7xpC2w6B2IDkwg0Z';
		$recaptchaResponse = $_POST['g-recaptcha-response'];
		
		$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaResponse}";
		
		$recaptchaResponseData = json_decode(file_get_contents($recaptchaUrl));
		
		if (!$recaptchaResponseData->success) {
			Flasher::setMessage('reCAPTCHA','verifikasi gagal.','danger');
			header('location: '. BASEURL . '/Login');
			exit;
		}

    // Jika reCAPTCHA telah diverifikasi, lanjutkan dengan memeriksa login pengguna
		if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
			$_SESSION['Nama_Pengguna'] = $row['nama_pengguna'];
			$_SESSION['session_login'] = 'sudah_login'; 
			header('location: '. BASEURL . '/User');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/Login');
			exit;	
		}
	}

	public function LogOut()
	{
		session_destroy();
		header('location: ' . BASEURL . '/Home');
	}	
}


