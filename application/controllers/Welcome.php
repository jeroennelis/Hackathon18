<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    //TODO: delete this page and use the Resident-controller
	public function index()
	{
            $_SESSION['room_number'] = -1;
            $this->load->helper('language');
            $this->lang->load('NL', 'nederlands');
            $_SESSION['language'] = "Nederlands";
            $this->load->view('roomnumber');
            
	}
        
}
