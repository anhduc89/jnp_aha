<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio extends CI_Model 
{
    public $lang = 'vn';
    function __construct()
    {
        parent::__construct();
        // $this->lang = $this->session->userdata('lang');

        $this->session->set_userdata("lang",$this->uri->segment(1));
    }
    // protected $lang = $this->session->userdata('lang');
    public function get_portfolio_category()
    {
        // $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        $lang = $this->session->userdata('lang');
        $query = $this->db->query("SELECT category_id, category_name_$lang
                                    FROM tbl_portfolio_category
                                    ORDER BY category_id ASC");
        
        return $query->result_array();
    }
    public function get_portfolio_data($limit = null)
    {
        // $query = $this->db->query("SELECT * from tbl_portfolio  ORDER BY id DESC");
        $lang = $this->session->userdata('lang');
        $sql = 'SELECT id, name_'.$lang.', short_content_'.$lang.', content_'.$lang.',category_id,photo
                FROM tbl_portfolio 
                ORDER BY id DESC ';
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_portfolio_data_limit()
    {
        // $query = $this->db->query("SELECT * from tbl_portfolio  ORDER BY id DESC");  -- WHERE lang = "'.$lang.'" 
        $lang = $this->session->userdata('lang');
        $sql = 'SELECT id, name_'.$lang.', short_content_'.$lang.', content_'.$lang.',category_id,photo
                FROM tbl_portfolio 
                ORDER BY RAND()
                LIMIT 4';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_portfolio_data_order_by_name()
    {
        // $query = $this->db->query("SELECT * from tbl_portfolio ORDER BY name ASC");
        $query = $this->db->query("SELECT * from tbl_portfolio WHERE lang = '$lang' ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_portfolio_detail($id) {
    	$sql = 'SELECT * FROM tbl_portfolio WHERE id='.$id.'';
        $query = $this->db->query($sql);
        // $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_portfolio_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE portfolio_id=?",array($id));
        return $query->result_array();
    }
    public function get_portfolio_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE portfolio_id=?",array($id));
        return $query->num_rows();
    }
}