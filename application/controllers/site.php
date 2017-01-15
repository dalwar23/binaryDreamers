<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Delwar Hossain Arif
 * @copyright www.binarydreamers.net
 */
class Site extends CI_Controller{
	//Construct function
	function __construct()
	{
		parent::__construct();
		
		//setting the headers    
    	$this->output->set_header("HTTP/1.0 200 OK");
		$this->output->set_header("HTTP/1.1 200 OK");
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
	}
    //function for the home page view
	function index()
    {   
        $this->load->view('home_view');
    }
	//function for the about page view
	function about_us()
	{
		$this->load->view('about_us_view');
	}
	//function for the services page view
	function services()
	{
		$this->load->view('services_view');
	}
	//function for the services_details page view
	function services_details()
	{
		$data['t'] = $this->uri->segment(3);
		$this->load->view('services_details_view',$data);
	}
	//function for the support page view
	function support()
	{
		$this->load->view('support_view');
	}
	//function for the contuct us page view
	function contact_us()
	{
		$data['choice'] = "fill_up";
		$this->load->view('contact_us_view',$data);
	}
	//function for webmail
	function webmail()
	{
		redirect('http://mail.binarydreamers.net','refreash');	
	}
	//function for the search operation
	function search()
	{
		if(isset($_POST['search-form']))
		{
			$pattern['search'] = $_POST['search-form'];
		}
		$this->load->view("search",$pattern);
	}
	//function for the site map view
	function sitemap()
	{
		$this->load->view("sitemap_view");
	}
}