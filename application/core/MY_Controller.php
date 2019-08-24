<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	// Set data server and other config general.

	function __construct()
	{
		parent::__construct();
		# code...
		date_default_timezone_set('America/Panama');
	}
}