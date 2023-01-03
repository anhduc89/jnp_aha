<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_page extends CI_Model 
{

    public function show_home()
    {
        $query = $this->db->query("SELECT * from tbl_page_home WHERE id=1");
        return $query->first_row('array');
    }

    public function show_about($lang)
    {
        $query = $this->db->query("SELECT * FROM tbl_page_about WHERE lang = '$lang'");
        return $query->first_row('array');
    }

    public function show_faq()
    {
        $query = $this->db->query("SELECT * from tbl_page_faq WHERE id=1");
        return $query->first_row('array');
    }

    public function show_service()
    {
        $query = $this->db->query("SELECT * from tbl_page_service WHERE id=1");
        return $query->first_row('array');
    }

    public function show_testimonial()
    {
        $query = $this->db->query("SELECT * from tbl_page_testimonial WHERE id=1");
        return $query->first_row('array');
    }

    public function show_news()
    {
        $query = $this->db->query("SELECT * from tbl_page_news WHERE id=1");
        return $query->first_row('array');
    }

    public function show_event()
    {
        $query = $this->db->query("SELECT * from tbl_page_event WHERE id=1");
        return $query->first_row('array');
    }

    public function show_contact()
    {
        $query = $this->db->query("SELECT * from tbl_page_contact WHERE id=1");
        return $query->first_row('array');
    }

    public function show_search()
    {
        $query = $this->db->query("SELECT * from tbl_page_search WHERE id=1");
        return $query->first_row('array');
    }

    public function show_term()
    {
        $query = $this->db->query("SELECT * from tbl_page_term WHERE id=1");
        return $query->first_row('array');
    }

    public function show_privacy()
    {
        $query = $this->db->query("SELECT * from tbl_page_privacy WHERE id=1");
        return $query->first_row('array');
    }

    public function show_team()
    {
        $query = $this->db->query("SELECT * from tbl_page_team WHERE id=1");
        return $query->first_row('array');
    }

    public function show_portfolio()
    {
        $query = $this->db->query("SELECT * from tbl_page_portfolio WHERE id=1");
        return $query->first_row('array');
    }
}