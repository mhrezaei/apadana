<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Ajax extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            if (!$this->input->is_ajax_request()) {
                show_404();
                exit;
            }
        }

        public function index()
        {
            if (!$this->input->is_ajax_request()) {
                show_404();
                exit;
            }
        }

        public function setting()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                if($this->input->post('ld', TRUE, TRUE) == 1)
                {
                    $query = $this->db->select(array(
                            'site_title',
                            'address',
                            'tel',
                            'fax',
                            'site_email',
                            'admin_email',
                            'about_us'
                        ))->from('setting')->get();
                    if($query->num_rows() > 0)
                    {
                        $data['success'] = 1;
                        $data['setting'] = $query->row_array();
                    }
                    else
                    {
                        $data['success'] = 2;
                    }
                }
                else
                {
                    $data['success'] = 2;
                }

                echo json_encode($data);

            }
        } // ok

        public function editSetting()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                $site = $this->input->post('site', TRUE, TRUE);
                $email = $this->input->post('email', TRUE, TRUE);
                $aEmail = $this->input->post('aEmail', TRUE, TRUE);
                $address = $this->input->post('address', TRUE, TRUE);
                $tel = $this->input->post('tel', TRUE, TRUE);
                $fax = $this->input->post('fax', TRUE, TRUE);
                $about = $this->input->post('about', TRUE, TRUE);
                $pass = $this->input->post('pass', TRUE, TRUE);
                $passV = $this->input->post('passV', TRUE, TRUE);

                $data = array(
                    'site_title' => $site,
                    'address' => $address,
                    'tel' => $tel,
                    'fax' => $fax,
                    'site_email' => $email,
                    'admin_email' => $aEmail,
                    'about_us' => $about
                );

                if(strlen($pass) > 5 AND $pass == $passV)
                {
                    $data['admin_pass'] = hashStr($pass);
                }

                $this->db->where('id', 1);
                $this->db->update('setting', $data);

                $data['success'] = 1;

                echo json_encode($data);

            }
        } // ok

        public function currencyList()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                $currency = $this->db->select()->from('currency')->where('status', 1)->order_by('arrangement', 'ASC')->get();
                if($currency->num_rows() > 0)
                {
                    $data['status'] = 1;
                    $data['currency'] = $currency->result_array();
                }
                else
                {
                    $data['status'] = 2;

                }
                echo json_encode($data);
            }
        } // ok

        public function currencyEdit()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                $ids = $this->input->post('txtID');
                if(is_array($ids))
                {
                    for($i = 0; $i < count($ids); $i++)
                    {
                        $currency = '';
                        $currency['buy'] = $this->input->post('txtBuy' . $ids[$i]);
                        if($this->input->post('txtBuy' . $ids[$i]) != $this->input->post('txtBuyOld' . $ids[$i]))
                        {
                            $currency['last_buy'] = $this->input->post('txtBuyOld' . $ids[$i]);
                        }

                        $currency['sales'] = $this->input->post('txtSales' . $ids[$i]);
                        if($this->input->post('txtSales' . $ids[$i]) != $this->input->post('txtSalesOld' . $ids[$i]))
                        {
                            $currency['last_sales'] = $this->input->post('txtSalesOld' . $ids[$i]);
                        }

                        $currency['draft'] = $this->input->post('txtDraft' . $ids[$i]);
                        if($this->input->post('txtDraft' . $ids[$i]) != $this->input->post('txtDraftOld' . $ids[$i]))
                        {
                            $currency['last_draft'] = $this->input->post('txtDraftOld' . $ids[$i]);
                        }

                        $currency['arrangement'] = $this->input->post('txtArrange' . $ids[$i]);

                        $this->db->where('id', $ids[$i]);
                        $this->db->update('currency', $currency);
                    }
                    $data['status'] = 2; // update success
                    $lUpdate['last_update'] = time();
                    $this->db->update('setting', $lUpdate);
                }
                else
                {
                    $data['status'] = 1; // data problem
                }
                echo json_encode($data);
            }
        } // ok

        public function coinsList()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                $currency = $this->db->select()->from('coins')->where('status', 1)->get();
                if($currency->num_rows() > 0)
                {
                    $data['status'] = 1;
                    $data['coins'] = $currency->result_array();
                }
                else
                {
                    $data['status'] = 2;

                }
                echo json_encode($data);
            }
        } // ok

        public function coinsEdit()
        {
            if( ! $this->User_auth_model->is_admin())
            {
                show_404();
            }
            else
            {
                $ids = $this->input->post('txtID');
                if(is_array($ids))
                {
                    for($i = 0; $i < count($ids); $i++)
                    {
                        $coins = '';
                        $coins['buy'] = $this->input->post('txtBuy' . $ids[$i]);
                        if($this->input->post('txtBuy' . $ids[$i]) != $this->input->post('txtBuyOld' . $ids[$i]))
                        {
                            $coins['last_buy'] = $this->input->post('txtBuyOld' . $ids[$i]);
                        }

                        $coins['sales'] = $this->input->post('txtSales' . $ids[$i]);
                        if($this->input->post('txtSales' . $ids[$i]) != $this->input->post('txtSalesOld' . $ids[$i]))
                        {
                            $coins['last_sales'] = $this->input->post('txtSalesOld' . $ids[$i]);
                        }

                        $this->db->where('id', $ids[$i]);
                        $this->db->update('coins', $coins);
                    }
                    $data['status'] = 2; // update success
                }
                else
                {
                    $data['status'] = 1; // data problem
                }
                echo json_encode($data);
            }
        } // ok
    }
