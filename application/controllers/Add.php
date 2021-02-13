<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller 
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
		/* Status ini diambil dari URL, datanya berupa angka 0 dan 1
		 * jadi saya convert menjadi boolean */
		$status = (bool) $this->input->get("status");

		/* Message ini diambil dari URL, datanya berupa string */
		$message = $this->input->get("message");

		/* Array Title ini akan di eksekusi untuk title web */
		$data['title'] = "Add Movie";

		/* Array save_url ini akan digunakan untuk action form add */
		$data['save_url'] = site_url("add/save");

		/* Array status ini digunakan untuk mengirim informasi status sukses */
		$data['status'] = $status;

		/* Array status ini digunakan untuk mengirim informasi pesan */
		$data['message'] = $message;


		/* 4 data array diatas dikirim ke view
		 * dengan function resit_template() */
		resit_template('add/body', $data);
  }
	
	

	/* Deklarasi method save() */
  public function save()
  {
		/* Saya mengambil 3 data yang dikirim oleh html
		 * data judul
		 * data genre
		 * data youtube_id
		 * ketiga data tersbeut saya masukan kedalam variable array $input */
    $input['judul'] = $this->input->post("judul");
		$input['genre'] = $this->input->post("genre");
		$input['youtube_id'] = $this->input->post("youtube_id");
		
		/* Nah data array diatas saya kirim ke model dengan method add_movie() */
		$input_data = $this->m_movie->add_movie($input);

		/* Disini saya deklarasi varibale untuk link redirect */
		$redirect_link = site_url("add");

		/* Disini saya deklarasi varibale untuk message */
		$message = "";

		/* Disini saya menambah conditional
		 * yang artinya
		 * Jika variable $input_data bernilai true
		 * maka alihkan dengan status 1 dan pesan sukses
		 * Jik variable $input_data tidak bernilai true
		 * maka alihkan dengan status 0 dan pesan gagal
		 * nah status dan pesan ini disimpan di URL yang nantinya bisa diambil 
		 * bisa dilihat pada code dipaling atas saya mengambil data lewat url*/
		if($input_data){
			$message = "Data added successfully";
			$redirect_link = site_url("add?status=1&message=$message");
		}else{
			$message = "Can't add data";
			$redirect_link = site_url("add?status=0&message=$message");
		}

		/* Conditional sudah dibuat maka langsung say aalihkan
		 * jadi user akan dialihkan halamannya ketika sudah klik button Submit ( ADD MOVIE ) */
		header("location: $redirect_link", true, 301);
		
  }

}
