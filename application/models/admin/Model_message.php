<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_message extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_client'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() 
    {
        $sql = "SELECT * FROM tbl_contact WHERE status = 0 ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update_status($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tbl_contact',$data);
    }

    function show_message_reply() 
    {
        $sql = "SELECT * FROM tbl_contact WHERE status = 1 ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>