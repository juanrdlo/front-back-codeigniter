<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Front_Controller {

	public function index()
	{
		$data = [
		    'section' 		=> 'home',
		    'title'			=> 'Welcome to new proyect',
		    'description'	=> 'Description to new proyect on codeigniter back-end and front-end'
		];
		$this->load->view('_layouts/front_end', $data);
	}
}