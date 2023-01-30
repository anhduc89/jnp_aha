
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_customer extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_message');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['message'] = $this->Model_message->show(); // chưa phản hồi tin nhắn
        $data['message_reply'] = $this->Model_message->show_message_reply(); // đã phản hồi tin nhắn
        
		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_message',$data);
		$this->load->view('admin/view_footer');
	}

    public function change_status()
    {
        $id = $this->input->post('id');
        $data = array('status' => 1);
        $this->Model_message->update_status($id,$data);

        echo json_encode(array(
            'status' => 'success',
            'response' => 'Đã chuyển trạng thái'
        ));
    }


	public function delete($id) 
	{
		// If there is no client in this id, then redirect
    	$tot = $this->Model_client->client_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/client');
        	exit;
    	}

        $data['client'] = $this->Model_client->get_client($id);
        if($data['client']) {
            unlink('./public/uploads/'.$data['client']['photo']);
        }

        $this->Model_client->delete($id);
        $success = 'Client is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/client');
    }

}