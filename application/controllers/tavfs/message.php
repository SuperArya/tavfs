<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
	public function index()
	{
		//head
		$this->load->view('back/header/h_dashboard');

		//leftbar
		$this->load->view('back/leftbar/l_message');

		//konten
		$this->load->view('back/content/c_dashboard');

		//footer
		$this->load->view('back/footer/f_dashboard');

	}
}