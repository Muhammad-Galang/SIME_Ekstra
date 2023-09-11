<?php  
/**
 * 
 */
class Laporan extends Controller{
	
	public function index()
	{
		$data['judul'] = "Halaman Laporan";
		
		$this->view('data-view/templates/Header-Index',$data);
		$this->view('data-view/laporan');
		$this->view('data-view/templates/Footer-Index');
	}
}	