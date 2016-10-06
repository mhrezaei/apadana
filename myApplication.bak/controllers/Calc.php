<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->Visit_model->visitor();
    }
    public function index()
	{
		$this->load->view('auxx/calc');
	}
}