<?php
    class Visit_model extends CI_Model
    {

        private $visitor = 'visitor_data';
        private $statistics = 'visitor_statistics_data';
        private $ip;

        public function __construct()
        {
            $this->ip = $this->input->ip_address();
            $this->db->delete($this->visitor, array('thisDay != ' => date('d')));
        }

        public function visitor()
        {
            $visitor = $this->db->select('id')->from($this->visitor)->where('ip', $this->ip)->get();
            $this->load->library('user_agent');
            if($visitor->num_rows() > 0)
            {
                $visitor = $visitor->row_array();

                $data['status'] = 1;
                $data['lastVisit'] = time();
                $data['thisDay'] = date('d');
                if($this->agent->is_referral())
                {
                    $data['referer'] = $this->agent->referrer();
                }
                else
                {
                    $data['referer'] = NULL;
                }
                $this->db->where('id', $visitor['id']);
                $this->db->update($this->visitor, $data);
                $this->statistics();

            }
            else
            {
                $data['ip'] = $this->ip;
                $data['status'] = 1;
                $data['lastVisit'] = time();
                $data['thisDay'] = date('d');
                if($this->agent->is_referral())
                {
                    $data['referer'] = $this->agent->referrer();
                }
                else
                {
                    $data['referer'] = NULL;
                }
                $this->db->insert($this->visitor, $data);
                $this->statistics(TRUE);
            }
        }

        public function statistics($newVisitor = FALSE)
        {
            $data = $this->db->select()->from($this->statistics)->where('id', 1)->get();
            if($data->num_rows() > 0)
            {
                $data = $data->row_array();
                // total view
                if($data['totalVisit'] > 0)
                {
                    $data['totalVisit']++;
                }
                else
                {
                    $data['totalVisit'] = 1;
                }

                // year view
                if($data['thisYear'] == date('Y'))
                {
                    if($data['yearVisit'] > 0)
                    {
                        $data['yearVisit']++;
                    }
                    else
                    {
                        $data['yearVisit'] = 1;
                    }
                }
                else
                {
                    $data['thisYear'] = date('Y');
                    $data['yearVisit'] = 1;
                }

                // month view
                if($data['thisMonth'] == date('m'))
                {
                    if($data['monthVisit'] > 0)
                    {
                        $data['monthVisit']++;
                    }
                    else
                    {
                        $data['monthVisit'] = 1;
                    }
                }
                else
                {
                    $data['thisMonth'] = date('m');
                    $data['monthVisit'] = 1;
                }

                // day view
                if($data['thisDay'] == date('d'))
                {
                    if($data['dayVisit'] > 0)
                    {
                        $data['dayVisit']++;
                    }
                    else
                    {
                        $data['dayVisit'] = 1;
                    }
                }
                else
                {
                    $data['thisDay'] = date('d');
                    $data['dayVisit'] = 1;
                }

                // week view
                if($data['thisWeek'] == date('W'))
                {
                    if($data['weekVisit'] > 0)
                    {
                        $data['weekVisit']++;
                    }
                    else
                    {
                        $data['weekVisit'] = 1;
                    }
                }
                else
                {
                    $data['thisWeek'] = date('W');
                    $data['weekVisit'] = 1;
                }

                // new visitor
                if($newVisitor)
                {
                    if($data['toDayVisitor'] > 0)
                    {
                        $data['toDayVisitor']++;
                    }
                    else
                    {
                        $data['toDayVisitor'] = 1;
                    }
                }

                // online visitor
                $online = $this->db->select('id')->from($this->visitor)->where(array(
                    'lastVisit > ' => (time() - (6*60)),
                    'thisDay' => date('d')
                ))->get();
                $data['onlineVisitor'] = $online->num_rows();

                $this->db->where('id', 1);
                $this->db->update($this->statistics, $data);
            }
        }

        public function get_visitor_data()
        {
            $data = $this->db->select()->from($this->statistics)->where('id', 1)->get();
            if($data->num_rows() > 0)
            {
                $data = $data->row_array();
                return $data;
            }
            else
            {
                return FALSE;
            }
        }
    }

?>