<?php 
/**
 * 
 */
class Home extends Controller {

	public function index(){

		$this->view('landing-page/index');
	}

	public function JoinEkskulPramuka()
	{
		$this->view('landing-page/form-pramuka');	
	}
}

