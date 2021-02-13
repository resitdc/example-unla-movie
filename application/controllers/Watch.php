<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watch extends CI_Controller {

	public function detail($id = null)
	{
		$data['title'] = "WATCH";
		resit_template('detail/body', $data);
	}
}
