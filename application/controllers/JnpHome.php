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

        $error = '';
		$success = '';

        if(isset($_POST['btn_send_message'])) // trang home
		{
            $valid = 1;

            $this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|required');

            if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= 'Điền đầy đủ thông tin';
            }

            $form_data = array(
                'name'              => $_POST['name'],
                'email'             => $_POST['email'],
                'subject'           => $_POST['subject'],
                'message'          	=> $_POST['message'],
                'status'            => '0'     
            );

            $this->Model_contact->add_message($form_data);

            $success = 'Cảm ơn sự liên hệ của quý khách. Chúng tôi sẽ sớm gửi phản hồi.';
            $this->session->set_flashdata('success',$success);
            redirect(base_url().$lang);
        }
        else if(isset($_POST['btn_sendmail'])) // trang contact 
		{
            $valid = 1;

            $this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|required');

            if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= 'Điền đầy đủ thông tin';
            }

            $form_data = array(
                'name'              => $_POST['name'],
                'email'             => $_POST['email'],
                'subject'           => $_POST['subject'],
                'message'          	=> $_POST['message'],
                'status'            => '0'     
            );

            $this->Model_contact->add_message($form_data);

            $success = 'Cảm ơn sự liên hệ của quý khách. Chúng tôi sẽ sớm gửi phản hồi.';
            $this->session->set_flashdata('success',$success);
            redirect(base_url().$lang.'/lien-he');
        }
    }
}
?>