<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_portfolio');

        $this->session->set_userdata("lang",$this->uri->segment(1));
    }

	public function index($id=null)
	{
        $lang =  $this->session->userdata('lang');
        $this->lang->load('home', $lang == '' ? 'vn' :$lang);

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_about'] = $this->Model_common->all_page_about();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('page/jnp_header');

        if( !isset($id) || !is_numeric($id) ) {
			$this->load->view('page/jnp_page_product_list',$data);
        } else {
            $this->load->view('page/jnp_page_product_detail',$data);
        }

		$this->load->view('page/jnp_footer');
	}
}