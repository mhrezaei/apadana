<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		//Exchange Rates...
		//hint: 0->name 1->banknote-buy 2->banknote-sell 3->order-buy

        $currencies = $this->db->select()->from('currency')->where('status', 1)->get();
        if($currencies->num_rows() > 0)
        {
            $currency = $currencies->result_array();
            $currencies = '';
            for($i = 0; $i < count($currency); $i++)
            {
                $currencies[$currency[$i]['code']] = array($currency[$i]['title'], $currency[$i]['buy'], $currency[$i]['sales'], $currency[$i]['draft']);
            }
        }

		/*$currencies = [
			'USD' => array('دلار آمریکا',3252,2312,1000,1230),
			'EUR' => array('یورو',3840,1232,1000,1230),
			'GBP' => array('پوند انگلستان',5233,4234,1000,1230),
			'CAD' => array('دلار کانادا',1232,423423,1000,1230),
			'AUD' => array('دلار استرالیا',1123,4434,1000,1230),
			'CHF' => array('فرانک سوییس',123,2745,1000,1230),
			'JPY' => array('ین ژاپن',123,12312,1000,1230),
			'SEK' => array('کرون سوئد',123,12312,1000,1230),
			'DKK' => array('کرون دانمارک',123,12312,1000,1230),
			'NOK' => array('کرون نروژ',123,12312,1000,1230),
			'AED' => array('درهم امارات',123,12312,1000,1230),
			'TRY' => array('لیر ترکیه',123,12312,1000,1230),
			'MYR' => array('رینگت مالزی',123,12312,1000,1230),
			'CNY' => array('یوان چین',123,12312,1000,1230),
			'THB' => array('بت تایلند',123,12312,1000,1230),
			'INR' => array('روپیه هند',123,12312,1000,1230),
			'SAR' => array('ریال عربستان',123,12312,1000,1230),
			'IQD' => array('دینار عراق',123,12312,1000,1230),
			'RUB' => array('روبل روسیه',123,12312,1000,1230),
			'AZN' => array('منات آذربایجان',123,12312,1000,1230),
			'AMD' => array('درام ارمنستان',123,12312,1000,1230),
			'GEL' => array('لاری گرجستان',123,12312,1000,1230),
			'KWD' => array('دینار کویت',123,12312,1000,1230),
			'BHD' => array('دینار بحرین',123,12312,1000,1230),
			'OMR' => array('ریال عمان',123,12312,1000,1230),
			'QAR' => array('ریال قطر',123,12312,1000,1230),
			'SYP' => array('لیر سوریه',123,12312,1000,1230),
			'SGD' => array('دلار سنگاپور',123,12312,1000,1230),
			'NZD' => array('دلار نیوزیلند',123,12312,1000,1230),
			'HKD' => array('دلار هنگ‌کنگ',123,12312,1000,1230),
			'PKR' => array('روپیه پاکستان',123,12312,1000,1230),
			'AFN' => array('افغانی',123,12312,1000,1230),

		];*/

		//coins...

        $coins = $this->db->select()->from('coins')->where('status', 1)->get();
        if($coins->num_rows() > 0)
        {
            $coin = $coins->result_array();
            $coins = '';
            for($i = 0; $i < count($coin); $i++)
            {
                $coins[$coin[$i]['code']] = array($coin[$i]['title'], $coin[$i]['buy'], $coin[$i]['sales']);
            }
        }

		/*$coins = [
			'full-old'     => array('تمام بهار قدیم',905000,914000),
			'full-new'     => array('تمام بهار جدید',910000,915000),
			'half'         => array('نیم بهار',457000,465000),
			'quarter'      => array('ربع بهار',247000,257000),
			'g1'           => array('یک گرمی',165000,170000),
		];*/

		//stats...
        $stats = $this->Visit_model->get_visitor_data();
        $stats = $stats['toDayVisitor'] . ' نفر امروز و ' . $stats['totalVisit'] . ' نفر از ابتدا';
		$stats = Strings::pd($stats); // for persian digits. don't kerm it Hadi


		//view...
		$this->load->view('template/header' , $headerInfo);
		$this->load->view('home/abba' , compact('currencies','coins','stats'));
		$this->load->view('template/footer');
	}

}
?>