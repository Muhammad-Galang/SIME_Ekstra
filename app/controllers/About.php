<?php 
/**
 * 
 */
class About extends Controller{

	public function index(){
		$this->view('landing-page/templates/Header-About');
		$this->view('landing-page/about');
		$this->view('landing-page/templates/Footer-About');
	}
}