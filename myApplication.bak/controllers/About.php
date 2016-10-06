<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->Visit_model->visitor();
    }
    public function index()
	{
		//general variables...
        $header = $this->header_model->header_data();
        $headerInfo['siteKeywords'] = $header['about_us'];
        $headerInfo['siteTitle'] = $header['site_title'];
		$headerInfo['jsHandler'] = "home";

		$nav = [
			'siteTitle'=>$header['site_title'],
			'pageTitle'=>'درباره ما',
		];

		$pageItems = [
		];


		//view...
		$this->load->view('template/header' , $headerInfo);
		$this->load->view('auxx/nav' , $nav);
		$this->load->view('auxx/about' , $pageItems);
		$this->load->view('template/footer');
	}

}
?>