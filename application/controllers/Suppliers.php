<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suppliers extends CI_Controller {
	#Contructor "lo que comienza a cargar al principio"
	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->library('');
		$this->load->helper('form');
		//Debe estar logeado y ser Administrador
		if(!$this->session->userdata('role'))redirect('Users/','refresh');
		if(!$this->users_model->verifyLogged())redirect('Users/','refresh');
	}


}
