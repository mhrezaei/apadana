<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        //general variables...
        $header = $this->header_model->header_data();
        $headerInfo['siteKeywords'] = $header['about_us'];
        $headerInfo['siteTitle'] = $header['site_title'];
        $headerInfo['lastUpdate'] = $header['last_update'];
        $headerInfo['jsHandler'] = "home2";

		$stuff['line1'] = 'شرکت تضامنی رضوی خسروشاهی و شرکا' ;
//		$stuff['line2'] = 'ثبت به شماره ۲۳۵۸۲۱ مورخ چهاردهم آبان ۱۳۸۳' ;
		$stuff['line2'] = 'دارای مجوز رسمی صرافی از بانک مرکزی جمهوری اسلامی ایران';
		$stuff['line3'] = 'برای ارسال حواله‌جات و خرید و فروش ارز و سکه' ;
        $stuff['line4'] = '';
		$stuff['tel'] = '+98 (21) 83820';
		$stuff['fax'] = '+98 (21) 88762496';
		$stuff['mob'] = '+98 (912) 683 0824';

        $stuff['slides'][1] = "slide7.jpg";
        $stuff['slides'][2] = "slide6.jpg";
		$stuff['slides'][3] = "slide3.jpg";
		$stuff['slides'][4] = "slide4.jpg";
		$stuff['slides'][5] = "slide5.jpg";
        $stuff['slides'][6] = "slide1.jpg";
        $stuff['slides'][7] = "slide2.jpg";
        $stuff['slides'][8] = "slide8.jpg";
        $stuff['slides'][9] = "slide9.jpg";

		$stuff['title-banknote-rate'] = "نرخ اسکناس";
		$stuff['title-order-rate'] = "نرخ حواله‌جات";
		$stuff['title-rates-table'] = "جدول برابری نرخ ارز";

		//Exchange Rates...
		//hint: 0->PersianName 1->banknote-buy 2->banknote-sell 3->order-buy 4->English-name 5->last_buy 6->last_sales 7->last_draft

        $currencies = $this->db->select()->from('currency')->where('status', 1)->order_by('arrangement', 'ASC')->get();
        if($currencies->num_rows() > 0)
        {
            $currency = $currencies->result_array();
            $currencies = '';
            for($i = 0; $i < count($currency); $i++)
            {
                $currencies[$currency[$i]['code']] = array($currency[$i]['title'], $currency[$i]['buy'], $currency[$i]['sales'], $currency[$i]['draft'], $currency[$i]['title_en'], $currency[$i]['last_buy'], $currency[$i]['last_sales'], $currency[$i]['last_draft'], $currency[$i]['featured_image']);
            }
        }

		/*
        $currencies = [
			'USD' => array('دلار آمریکا',28930,29540,1000,"US-Dollar"),
			'EUR' => array('یورو',3840,1232,1000,"Euro"),
			'GBP' => array('پوند انگلستان',5233,4234,1000,"British Pound"),
			'CAD' => array('دلار کانادا',1232,423423,1000,"Canadian Dollar"),
			'AUD' => array('دلار استرالیا',1123,4434,1000,"Australian Dollar"),
			'CHF' => array('فرانک سوییس',123,2745,1000,"Swiss Frank"),
			'JPY' => array('ین ژاپن',123,12312,1000,"Japanese Ien"),
			'SEK' => array('کرون سوئد',123,12312,1000,"Swedish Krone"),
			'DKK' => array('کرون دانمارک',123,12312,1000,"Danish Krone"),
			'NOK' => array('کرون نروژ',123,12312,1000,"Norwegian Krone"),
			'AED' => array('درهم امارات',123,12312,1000,"Emirate Dirham"),
			'TRY' => array('لیر ترکیه',123,12312,1000,"Turkish Lira"),
			'MYR' => array('رینگت مالزی',123,12312,1000,"Malaysian Rignet"),
			'CNY' => array('یوان چین',123,12312,1000,"Chinese Yuan"),
			'THB' => array('بت تایلند',123,12312,1000,"Thai Bath"),
			'INR' => array('روپیه هند',123,12312,1000,"Indian Rupees"),
			'SAR' => array('ریال عربستان',123,12312,1000,"Arabian Rial"),
			'IQD' => array('دینار عراق',123,12312,1000,"Iraqi Dinar"),
			'RUB' => array('روبل روسیه',123,12312,1000,"Russian Ruble"),
			'AZN' => array('منات آذربایجان',123,12312,-1,""),
			'AMD' => array('درام ارمنستان',123,12312,-1,"Armenian Dram"),
			'GEL' => array('لاری گرجستان',123,12312,-1,"Georgian Lari"),
			'KWD' => array('دینار کویت',123,12312,-1,"Kuwaiti Dinar"),
			'BHD' => array('دینار بحرین',123,12312,-1,"Bahrain's Dinar"),
			'OMR' => array('ریال عمان',123,12312,-1,"Oman's Rial"),
			'QAR' => array('ریال قطر',123,12312,-1,"Qatari Rial"),
			'SYP' => array('لیر سوریه',123,12312,-1,"Syrian Lira"),
			'SGD' => array('دلار سنگاپور',123,12312,-1,"Singapore's' Dollar"),
			'NZD' => array('دلار نیوزیلند',123,12312,-1,"New Zealand's Dollar "),
			'HKD' => array('دلار هنگ‌کنگ',123,12312,-1,"Hong Kong Dollar"),
			'PKR' => array('روپیه پاکستان',123,12312,-1,"Pakistani Rupees"),
			'AFN' => array('افغانی',123,12312,-1,"Afqani"),

		];

		//coins...
		$coins = [
			'full-old'     => array('تمام بهار قدیم',905000,914000),
			'full-new'     => array('تمام بهار جدید',910000,915000),
			'half'         => array('نیم بهار',457000,465000),
			'quarter'      => array('ربع بهار',247000,257000),
			'g1'           => array('یک گرمی',165000,170000),
		];*/

        $coins = $this->db->select()->from('coins')->where('status', 1)->get();
        if($coins->num_rows() > 0)
        {
            $coin = $coins->result_array();
            $coins = '';
            for($i = 0; $i < count($coin); $i++)
            {
                $coins[$coin[$i]['code']] = array($coin[$i]['title'], $coin[$i]['buy'], $coin[$i]['sales'], $coin[$i]['last_buy'], $coin[$i]['last_sales']);
            }
        }

		//stats...
        $stats = $this->Visit_model->visitor();
        $stats = $this->Visit_model->get_visitor_data();
        $stats = $stats['toDayVisitor'] . ' نفر امروز و ' . $stats['totalVisit'] . ' نفر از ابتدا';
		$stats = Strings::pd($stats); // for persian digits. don't kerm it Hadi

        // news...
        $this->load->helper('rss');
        $news = new BlogFeed('http://www.cbi.ir/NewsRss.aspx?ln=fa');
        $news = $news->posts;

        // manager msg
        $manager_msg = htmlCoding($header['manager_msg'], 2);


		//view...
		$this->load->view('template/header2' , $headerInfo);
		$this->load->view('home2/abba' , compact('headerInfo' ,'stuff','currencies','coins','stats', 'news', 'manager_msg'));
		$this->load->view('template/footer');
	}

}
?>