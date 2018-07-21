<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other_lib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function getTemplates($view)
	{
			
	}

	public function getAdminTemplates($view, $data = [])
	{
		$this->ci->load->view('layouts/header', $data);
		$this->ci->load->view('layouts/navbar');
		$this->ci->load->view('layouts/sidebar');
		$this->ci->load->view($view);
		$this->ci->load->view('layouts/footer');
	}

	public function  isLogin()
	{
		if ($this->ci->session->is_logged_in === TRUE) {
			return true;
		} else {
			return false;
		}
	}

	

}

/* End of file Other_lib.php */
/* Location: ./application/libraries/Other_lib.php */
