<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function index()
	{
		//head
		$this->load->view('back/header/h_produk');

		//menubar
		$this->load->view('back/menubar/m_menubar');

		//leftbar
		$this->load->view('back/leftbar/l_produk');

		//konten
		$this->load->view('back/content/c_produk');

		//footer
		$this->load->view('back/footer/f_produk');

	}
}

