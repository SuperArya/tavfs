<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		//head
		$this->load->view('front/header/h_beranda');

		//right-sidebar

		//konten
		$this->load->view('front/konten/k_beranda');

		//right-sidebar

		//footer
		$this->load->view('front/footer/f_beranda');

	}
}

