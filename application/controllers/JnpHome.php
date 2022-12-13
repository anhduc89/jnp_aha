<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JnpHome extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('admin/Model_portfolio');
        $this->load->model('admin/Model_page');
    }

    public function index()
    {
        $data['home_about'] = $this->Model_common->all_page_about();
        $this->load->view('page/jnp_header');
		$this->load->view('page/jnp_homepage',$data);
		$this->load->view('page/jnp_footer');
    }
}
?>