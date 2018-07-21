<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->other_lib->isLogin()){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->other_lib->getAdminTemplates('index');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */