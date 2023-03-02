<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_category extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_portfolio_category');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['portfolio_category'] = $this->Model_portfolio_category->show();
		# echo "<pre>"; print_r($data['portfolio_category']); exit;
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_portfolio_category',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('category_name_vn', 'Category Name VN', 'trim|required');
			$this->form_validation->set_rules('category_name_en', 'Category Name EN', 'trim|required');
			$this->form_validation->set_rules('category_name_kr', 'Category Name KR', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }

		    if($valid == 1) 
		    {
				
		        $form_data = array(
					'category_name_vn'	=> $_POST['category_name_vn'],
					'category_name_en'	=> $_POST['category_name_en'],
					'category_name_kr'	=> $_POST['category_name_kr'],
					'status'       		=> $_POST['status'],
	            );
	            $this->Model_portfolio_category->add($form_data);

		        $success = 'Product category is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/portfolio_category');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/portfolio_category/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_portfolio_category_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
    	$tot = $this->Model_portfolio_category->portfolio_category_check($id);
		
    	if(!$tot) {
    		redirect(base_url().'admin/portfolio_category');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{
			// echo "<pre>"; print_r($_POST['form1']); exit;
			$valid = 1;

			$this->form_validation->set_rules('category_name_vn', 'Category Name VN', 'trim|required');
			$this->form_validation->set_rules('category_name_en', 'Category Name EN', 'trim|required');
			$this->form_validation->set_rules('category_name_kr', 'Category Name KR', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            } else {

            	// Duplicate Category Checking
            	$data['portfolio_category'] = $this->Model_portfolio_category->getData($id);
            	$total = $this->Model_portfolio_category->duplicate_check($_POST['category_name_vn'],$data['portfolio_category']['category_name_vn'],
																			$_POST['category_name_en'],$data['portfolio_category']['category_name_en'],
																			$_POST['category_name_kr'],$data['portfolio_category']['category_name_kr']);				
		    	if($total) {
		    		$valid = 0;
		        	$error = 'Category name already exists';
		    	}
            }

		    if($valid == 1) 
		    {
	    		$form_data = array(
					'category_name_vn'	=> $_POST['category_name_vn'],
					'category_name_en'	=> $_POST['category_name_en'],
					'category_name_kr'	=> $_POST['category_name_kr'],
					'status'       		=> $_POST['status'],
	            );
	            $this->Model_portfolio_category->update($id,$form_data);
				
				$success = 'Product Category is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/portfolio_category');
		    }
		    else 
		    {
				$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/portfolio_category/add');
		    }
           
		} else {
			$data['portfolio_category'] = $this->Model_portfolio_category->getData($id);
			$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_portfolio_category_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
    	$tot = $this->Model_portfolio_category->portfolio_category_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/portfolio_category');
        	exit;
    	}


    	$result = $this->Model_portfolio_category->getData1($id);
		foreach ($result as $row) {
			$result1 = $this->Model_portfolio_category->show_portfolio_by_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
			}
			if($photo!='') {
				unlink('./public/uploads/'.$photo);
			}
			$result1 = $this->Model_portfolio_category->show_portfolio_photo_by_portfolio_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
				unlink('./public/uploads/portfolio_photos/'.$photo);
			}

			$this->Model_portfolio_category->delete1($row['id']);
			$this->Model_portfolio_category->delete2($row['id']);
		}
        $this->Model_portfolio_category->delete($id);
        
        $success = 'Portfolio category is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/portfolio_category');
    }

}