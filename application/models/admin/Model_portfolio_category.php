<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio_category extends CI_Model 
{
	
    function show() {
        $sql = "SELECT * FROM tbl_portfolio_category ORDER BY category_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show_portfolio_by_id($id) {
        $sql = "SELECT * FROM tbl_portfolio WHERE id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function show_portfolio_photo_by_portfolio_id($id) {
        $sql = "SELECT * FROM tbl_portfolio_photo WHERE portfolio_id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_portfolio_category',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('category_id',$id);
        $this->db->update('tbl_portfolio_category',$data);
    }

    function delete($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tbl_portfolio_category');
    }

    function delete1($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_portfolio');
    }

    function delete2($id)
    {
        $this->db->where('portfolio_id',$id);
        $this->db->delete('tbl_portfolio_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function getData1($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function portfolio_category_check($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function duplicate_check($var1,$var2,$var3,$var4, $var5,$var6) {
        $sql = 'SELECT * FROM tbl_portfolio_category 
                WHERE category_name_vn=? and category_name_vn!=?
                AND category_name_en=? and category_name_en!=?
                AND category_name_kr=? and category_name_kr!=?
                ';
        $query = $this->db->query($sql,array($var1,$var2,$var3,$var4, $var5,$var6));
        return $query->num_rows();
    }
    
}