<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

	public function index()
	{
		$this->load->view('auxx/calc');
	}
}