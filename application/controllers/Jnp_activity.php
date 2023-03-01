
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jnp_activity extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
		$this->load->model('Model_page');
        $this->load->model('Model_photo_gallery');

		// $this->session->set_userdata("lang",$this->uri->segment(1));
    }


    public function index()
	{
        $lang =  $this->session->userdata('lang');
        $this->lang->load('home', $lang == '' ? 'vn' :$lang);    

		$data = array();
        $limit_per_page = 3;
        $start_index 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records 	= count( $this->Model_photo_gallery->photo_activities() ); 
        // echo $total_records; exit;
		if($total_records > 0)
		{
			$data['image_activities'] 	= $this->Model_photo_gallery->photo_activities($limit_per_page, $start_index);
			$config['base_url'] 	= base_url().$lang.'/hinh-anh-cong-ty';
            $config['total_rows'] 	= $total_records;
            $config['per_page'] 	= $limit_per_page;
            $config["uri_segment"] 	= 0;
            $this->pagination->initialize($config);
            $data["links"] = $this->pagination->create_links();
		}
		$data['setting'] = $this->Model_common->all_setting();
		// $data['page_about'] = $this->Model_common->all_page_about();
		$data['home_about']    = $this->Model_common->all_page_about(); // về chúng tôi
		
        $this->load->view('page/jnp_header',$data);
		$this->load->view('page/jnp_hinhanh',$data);		
        $this->load->view('page/jnp_footer');
	}
}