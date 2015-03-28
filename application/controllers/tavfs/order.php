<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {
	public function index()
	{
		//head
		$this->load->view('back/header/h_order');

		//menubar
		$this->load->view('back/menubar/m_menubar');

		//leftbar
		$this->load->view('back/leftbar/l_order');

		//content
		$this->load->view('back/content/c_order');

		//footer
		$this->load->view('back/footer/f_order');

	}
}
