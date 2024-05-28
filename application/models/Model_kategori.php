<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function Sayur()
	{
		return $this->db->get_where('product', array('kategori' => 'Sayur'));
	}

	public function Buah()
	{
		return $this->db->get_where('product', array('kategori' => 'Buah'));
	}

	public function Biji()
	{
		return $this->db->get_where('product', array('kategori' => 'Biji'));
	}

	public function Umbi()
	{
		return $this->db->get_where('product', array('kategori' => 'Umbi'));
	}

}
