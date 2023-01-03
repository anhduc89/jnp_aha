<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JnP_products extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
        $this->load->model('admin/Model_portfolio');
        $this->load->model('admin/Model_page');
    }


    // danh sách sản phẩm theo ngôn ngữ.
    public function index() 
    {
        // $this->session->set_userdata("lang", $this->uri->segment(1));
        $lang =  $this->session->userdata('lang');
        // echo 'products '.$lang; exit;
        $this->lang->load('home', $lang == '' ? 'vn' : $lang );
        // echo $this->session->userdata('lang'); exit;


        // $data['home_about']                 = $this->Model_common->all_page_about(); // về chúng tôi
        // $data['home_categories_portfolio']  = $this->Model_portfolio->get_portfolio_category($lang); // danh mục sản phẩm
        $data['home__products_portfolio']   = $this->Model_portfolio->get_portfolio_data($lang); // danh sách sản phẩm
        // $data['clients'] 				    = $this->Model_home->all_client(); // khách hàng của chúng tôi
        // $data['testimonials'] 			    = $this->Model_home->all_testimonial();	// nhận xét của khách hàng

        # echo "<pre>"; print_r($data['home__products_portfolio']); exit;
        $this->load->view('page/jnp_header');
		$this->load->view('page/jnp_page_product_list',$data);
		$this->load->view('page/jnp_footer');
    }
}
?>