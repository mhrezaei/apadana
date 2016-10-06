<?php
class Header_model extends CI_Model {

    public function __construct()
    {
        
    }
    
    public function header_data()
    {
        $query = $this->db->select('*')->from('setting')->get();
        if($query->num_rows() > 0)
        {
            $query = $query->row_array();
        }
        else
        {
            $query = '';
        }
        return $query;
    }
}