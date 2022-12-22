<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JnpHome extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
        $this->load->model('admin/Model_portfolio');
        $this->load->model('admin/Model_page');
    }

    public function index()
    {
        $data['home_about']                 = $this->Model_common->all_page_about(); // về chúng tôi
        $data['home_categories_portfolio']  = $this->Model_portfolio->get_portfolio_category(); // danh mục sản phẩm
        $data['home__products_portfolio']   = $this->Model_portfolio->get_portfolio_data(); // danh sách sản phẩm
        $data['clients'] 				    = $this->Model_home->all_client(); // khách hàng của chúng tôi
        $data['testimonials'] 			    = $this->Model_home->all_testimonial();	// nhận xét của khách hàng
        #echo "<pre>"; print_r($data['testimonials']); exit;
        $this->load->view('page/jnp_header');
		$this->load->view('page/jnp_homepage',$data);
		$this->load->view('page/jnp_footer');
    }
}
?>