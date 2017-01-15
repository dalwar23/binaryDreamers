<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Delwar Hossain Arif
 * @copyright www.binarydreamers.net
 */
//mail class for handaling contacts
class Mail extends CI_Controller{
	
	//constractor function for mail class
	function __construct()
	{
		parent::__construct();
	}
	//function for sending mails
	function send()
	{
		$this->load->library('form_validation');
		
		//field name , Human readable name/error massage , validation rule
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','E-mail','trim|required|valid_email');
		$this->form_validation->set_rules('sbj','Subject','trim|required');
		$this->form_validation->set_rules('msg','Message','required');
		
		//call the run method to run the validations
		if ($this->form_validation->run() == FALSE){
			$data['choice'] = "val_error";
			$this->load->view('contact_us_view',$data);
		}
		else{
			//validation passed,move on to next step
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$sbj = $this->input->post('sbj');
			$msg = $this->input->post('msg');
			
			//load the email library
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			
			//e-mail body
			$this->email->from($email,$name);
			$this->email->to('info@binarydreamers.net');
			$this->email->subject($sbj);
			$this->email->message($msg);
			
			//send the email
			if ($this->email->send()){
				$data['choice'] = "mail_sent";
				$this->load->view('contact_us_view',$data);
				//echo "E-mail sent";
			}
			else {
				//show_error($this->email->print_debugger());
				$data['choice'] = "mail_error";
				$this->load->view('contact_us_view',$data);
			}
		}
	}
}