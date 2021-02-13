<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	/* Function construct ini dingunakan untuk load sesuatu secara global */
	function __construct()
	{
		parent::__construct();
		/* disini saya load model dengan nama m_movie */
		$this->load->model('m_movie');
	}

	/* Deklarasi method index()
	 * method ini yang nantinya akan dipanggil pertama kali oleh system */
	public function index()
	{
		/* Array Title ini akan di eksekusi untuk title web */
		$data['title'] = "Home";
		
		/* Disini saya mencoba mengambil data movie melalui model
		* dengan model m_movie dan method show_movie() */
		$data_movie = $this->m_movie->show_movie()->get()->result_array();
		
		/* Setelah saya mendapat data dari variable $data_movie
		 * saya memasukan datanya ke array list_movie */
		$data['list_movie'] = $data_movie;

		/* 2 data array diatas dikirim ke view
		 * dengan function resit_template() */
		resit_template('home/body', $data);
	}
}
