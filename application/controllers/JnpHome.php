<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JnpHome extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
        $this->load->model('Model_photo_gallery');
        $this->load->model('admin/Model_portfolio');
        $this->load->model('admin/Model_page');
        $this->load->model('Model_contact');       
    }

    public function index()
    {
        $this->session->set_userdata("lang", $this->uri->segment(1));
        $lang =  $this->session->userdata('lang');
        if($lang == '') 
        {
            $lang = 'vn';
            $this->session->set_userdata("lang", $lang);
            $this->lang->load('home', $lang);
        }
        else 
        {
            // echo $lang;
            $this->lang->load('home', $lang);
        }
        // $this->lang->load('home', $lang == '' ? 'en' :$lang);
        
        // echo $lang; exit;

        $data['setting'] = $this->Model_common->all_setting();
        $data['home_about']                 = $this->Model_common->all_page_about(); // về chúng tôi
        $data['home_categories_portfolio']  = $this->Model_portfolio->get_portfolio_category($lang); // danh mục sản phẩm
        $data['home__products_portfolio']   = $this->Model_portfolio->get_portfolio_data($lang); // danh sách sản phẩm
        $data['clients'] 				    = $this->Model_home->all_client(); // khách hàng của chúng tôi
        $data['testimonials'] 			    = $this->Model_home->all_testimonial();	// nhận xét của khách hàng
        $data['photo_activities'] 			= $this->Model_photo_gallery->all_photo();	// ảnh hoạt động của cán bộ công nhân viên công ty
        $data['page_contact'] = $this->Model_common->all_page_contact();

        #echo "<pre>"; print_r($data['page_contact']); exit;
        $this->load->view('page/jnp_header',$data);
		$this->load->view('page/jnp_homepage',$data);
		// $this->load->view('page/jnp_footer');
    }

    public function send_message()
    {
        $dataUpload = $this->input->post();
       
        $this->session->set_userdata("lang", $this->uri->segment(1));
        $lang =  $this->session->userdata('lang');
        // echo $lang; exit;
        if($lang == '') 
        {
            $lang = 'vn';
            $this->session->set_userdata("lang", $lang);
            $this->lang->load('home', $lang);
        }
        else 
        {
            $this->lang->load('home', $lang);
        }

        $result = $this->Model_contact->add_message($dataUpload);
        if($result == true)
        {
            echo json_encode(array("success" => 1, "response" => "Cảm ơn Quý khách đã gửi thông tin liên lạc. Chúng tôi sẽ sớm gửi phản hồi cho Quý khách"));	
        }
      
     
    }
}
?>