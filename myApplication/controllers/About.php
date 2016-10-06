<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		//general variables...
		$headerInfo['siteKeywords'] = "" ;
		$headerInfo['siteTitle'] = "صرافی آپادانا";
		$headerInfo['jsHandler'] = "home";

		$nav = [
			'siteTitle'=>'صرافی آپادانا',
			'pageTitle'=>'درباره ما',
		];

		$pageItems = [
		];


		//view...
		$this->load->view('template/header2' , $headerInfo);
		$this->load->view('auxx/nav' , $nav);
		$this->load->view('auxx/about' , $pageItems);
		$this->load->view('template/footer');
	}

}
?>