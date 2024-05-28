<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{


	public function Sayur()
	{
		$data['title'] = 'Shirt Categories';
		$data['Sayur'] = $this->model_kategori->Sayur()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('Sayur', $data);
		$this->load->view('layout/user/footer');
	}

	public function Buah()
	{
		$data['title'] = 'Shoes Categories';
		$data['Buah'] = $this->model_kategori->Buah()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('Buah', $data);
		$this->load->view('layout/user/footer');
	}

	public function Biji()
	{
		$data['title'] = 'Jacket Categories';
		$data['Biji'] = $this->model_kategori->Biji()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('Biji', $data);
		$this->load->view('layout/user/footer');
	}

	public function Umbi()
	{
		$data['title'] = 'Kids Categories';
		$data['Umbi'] = $this->model_kategori->Umbi()->result();
		$this->load->view('layout/user/header', $data);
		$this->load->view('Umbi', $data);
		$this->load->view('layout/user/footer');
	}

	
}
