<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {
	#Contructor lo que comienza a cargar
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('sellers_model');
		$this->load->model('contacts_model');
		$this->load->library('');
		$this->load->helper('form');
		//Debe estar logeado y ser Administrador
		if(!$this->session->userdata('role'))redirect('Users/','refresh');
		if(!$this->users_model->verifyLogged())redirect('Users/','refresh');

	}

	function registerContact()
	{
		if($this->input->post())
		{
			$data = array
			(
				'nombre' => $this->input->post('name'),
				'rut' => $this->input->post('rut'),
				'correo' => $this->input->post('email'),
				'direccion' =>($this->input->post('direccion')),
				'contacto' => $this->input->post('contacto'),
				'telefono' => $this->input->post('telefono'),
				'Vendedores_idVendedores' => $this->input->post('vendedor'),
				'factura' => $this->input->post('factura'),
				'fecha_ingreso' => $this->input->post('fecha_ingreso')
			);
			$this->contacts_model->newContact($data);
			redirect('Contacts/showContacts','refresh');
		}
		$data['sellers']=$this->sellers_model->getlistSellers();
		$this->load->view('include/header');
		$this->load->view('form/registerContact',$data);
		$this->load->view('include/footer');	

	}

	function showContacts()
	{
		$this->load->view('include/header');
		$data['contacts']=$this->contacts_model->getContacts();
		$this->load->view('show/showContacts',$data);
		$this->load->view('include/footer');
	}
}
