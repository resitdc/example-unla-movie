<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_movie extends CI_Model 
{
  private $table = 'tb_movie';

	public function show_movie()
	{
    $database_saya = $this->load->database('default', true);

    $database_saya->select('*');
    $database_saya->from($this->table);

    return $database_saya;
  }
  
	public function add_movie($data)
	{
    $database_saya = $this->load->database('default', true);

    return $database_saya->insert($this->table, $data);
  }

	public function detail_movie($id)
	{
    $database_saya = $this->load->database('default', true);

    $database_saya->select('*');
    $database_saya->from($this->table);
    $database_saya->where(array("id" => $id));

    return $database_saya;
  }
  

}
