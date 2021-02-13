<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watch extends CI_Controller 
{
	/* Function construct ini dingunakan untuk load sesuatu secara global */
	function __construct()
	{
		parent::__construct();
		/* disini saya load model dengan nama m_movie */
		$this->load->model('m_movie');
	}

	/* Deklarasi method detail()
	 * nah file ini sedikit beda sama yang lain nih
	 * karna disini kita gapunya method index()
	 * jadi tidak ada method yang akan diload pertama kali
	 * kenapa tidak membuat method index ?
	 * karna method index tidak bisa menerima parameter
	 * disini saya menerima id sebagai parameter bukan sebagai method GET */
	public function detail($id = null)
	{

		/* Disini saya mengambil detail movie ke database
		 * melalui model m_movie dengan method detail_movie
		 * saya pengirim parameter $id
		 * data yang diambil dari database akan masuk ke variable $detail_movie */
		$detail_movie = $this->m_movie->detail_movie($id)->get()->row_array();

		/* Array Title ini akan di eksekusi untuk title web
		 * tapi disini sedikit berbeda
		 * saya mengambil title dari detail Movie yang dipilih
		 * data yang diambil dari database akan berupa array, sesuai kolom database 
		 * disini juga saya menggunakan conditional, takutnya data yang diminta tidak ada
		 * conditional ini menggunakan metode ternary operator */
    $data['title'] = isset($detail_movie['judul']) ? $detail_movie['judul'] : "WATCH";
	
		/* Saya juga mengambil youtube id untuk dikiirm ke helper youtube_link()
		 * akan sangat panjang jika saya jelaskan fungsi dari youtube_link() */
		$data['movie_url'] = youtube_link($detail_movie['youtube_id']);

		/* Setelah saya mendapat data dari variable $data_movie
		 * saya memasukan datanya ke array list_movie */
		resit_template('detail/body', $data);
	}
}
