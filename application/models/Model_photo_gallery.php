<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_photo_gallery extends CI_Model 
{
    public function all_photo()
    {
        $query = $this->db->query("SELECT * FROM tbl_photo ORDER BY photo_id ASC LIMIT 3");
        return $query->result_array();
    }

    // hình ảnh hoạt động của công ty. 
    public function photo_activities($limit = null, $start = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_photo');
        
        if($limit == null )
        {
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result_array();
            }
            else 
            {
                return null;
            }
        }
        else if ($limit != null )
        {
            $limit = 900;
            $this->db->limit($limit, $start);
            $query = $this->db->get();

            if($query->num_rows() > 0)
            {
                return $query->result_array();
            }
            else 
            {
                return null;
            }
        }       
    }
}