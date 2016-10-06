<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		//general variables...
        $header = $this->header_model->header_data();
        $headerInfo['siteKeywords'] = $header['about_us'];
        $headerInfo['siteTitle'] = $header['site_title'];
		$headerInfo['jsHandler'] = "home";

		$nav = [
			'siteTitle'=>$header['site_title'],
			'pageTitle'=>'ارتباط با ما',
		];

        if($this->input->post('name'))
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $tel = $this->input->post('tel');
            $text = $this->input->post('text');
            $secQ = $this->input->post('secQ');
            $secA = $this->input->post('secA');
            if(filter_var($email, FILTER_VALIDATE_EMAIL) AND strlen($name) AND strlen($text) > 10 AND SecCode::check($secQ , $secA))
            {
                // email send
                $this->load->library('email');
                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'smtp.apadanaex.com';
                $config['smtp_port']    = '587';
                $config['smtp_timeout'] = '7';
                $config['smtp_user']    = 'no-replye@apadanaex.com';
                $config['smtp_pass']    = '6Tt2Ii9H3j';
                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or text
                $config['validation'] = TRUE; // bool whether to validate email or not

                $this->email->initialize($config);

                $this->email->from('no-replye@apadanaex.com', 'ApadanaEx.Com');
                $this->email->to('info@apadanaex.com');

                $this->email->subject('تماس با صرافی آپادانا');
                $data['name'] = $name;
                $data['email'] = $email;
                $data['tel'] = $tel;
                $data['text'] = $text;
                $data['date'] = time();
                $mail = $this->load->view('email_template/email', $data, TRUE);
                $this->email->message($mail);
                $this->email->send();
                $status = 1;
            }
            else
            {
                $status = 2;
            }
        }
        else
        {
            $status = 3;
        }

        $SecCode = new SecCode() ;
        $SecCode->generate();

		$formItems = [
			'name' => 'نام شما',
			'email' => 'نشانی ایمیل',
			'emailHint' => 'درست وارد کنید تا قادر به پاسخ‌گویی باشیم',
			'telephone' => 'شماره تماس',
			'text' => 'متن پیام',
			'send' => 'ارسال',
			'secQ' => $SecCode->question,
			'secA' => $SecCode->ansKey ,
			'secH' => 'پاسخ این پرسش ساده را به عدد بنویسید',
			'privacy' => 'صرافی آپادانا، پیام و نشانی ایمیل شما را نزد خود محفوظ نگاه می‌دارد',
			'tel'  => 'تماس تلفنی: ۸۳۸۲۰ (۰۲۱)',
            'status' => $status,
		];


		//view...
		$this->load->view('template/header' , $headerInfo);
		$this->load->view('auxx/nav' , $nav);
		$this->load->view('auxx/contact' , $formItems);
		$this->load->view('template/footer');
	}
}
?>