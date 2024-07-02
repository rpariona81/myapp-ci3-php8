<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['versionDB'] = $this->db->version();
		$data['versionPlatform'] = $this->db->platform();
		$data['content'] = 'app/app_dashboard';
		//print_r($data);
		$this->load->view('layout/dashboard/main_view', $data);
	}
}
