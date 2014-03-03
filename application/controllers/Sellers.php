<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sellers extends CI_Controller {
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
		if(!$this->users_model->verifyLogged()||$this->session->userdata('role')!='admin')redirect('Users/','refresh');

	}

	function registerSeller()
	{
		$this->load->view('include/header');
		$this->load->view('form/registerSeller');
		$this->load->view('include/footer');

		if($this->input->post())
		{
			$data = array
			(
				'nombre' => $this->input->post('name'),
				'rut' => $this->input->post('rut'),
				'correo' =>($this->input->post('email')),
				'telefono' => $this->input->post('telefono'),
				'fecha_ingreso' => $this->input->post('fecha_ingreso'),
				'trabajando' => $this->input->post('role')
			);
			$data['modificado']=date("Y-m-d H:i:s");
			if(!$this->sellers_model->validSeller($data))
				{
					$this->sellers_model->newSeller($data);
					redirect('Sellers/showSellers','refresh');
				}
		}
	}

	function showSellers()
	{
		$this->load->view('include/header');
		$data['sellers']=$this->sellers_model->getSellers();
		$this->load->view('show/showSellers',$data);
		$this->load->view('include/footer');
	}

	function editSeller($idSeller)
	{	
		if (!$this->users_model->isLogged())redirect('/','refresh'); //Es nesesario que este loggeado para poder seguir
		if($this->input->post())
		{
			$data = array
			(
				'nombre' => $this->input->post('name'),
				'rut' => $this->input->post('rut'),
				'correo' =>($this->input->post('email')),
				'telefono' => $this->input->post('telefono'),
				'fecha_ingreso' => $this->input->post('fecha_ingreso'),
				'trabajando' => $this->input->post('role')
			);
			$this->sellers_model->updateSeller($data,$idSeller);
			redirect('Sellers/showSellers','refresh');

		}
		
		$data['seller']=$this->sellers_model->getSeller($idSeller);
		$this->load->view('include/header');
		$this->load->view('form/editSeller',$data);
		$this->load->view('include/footer');
	}

	function deleteSeller($idSeller)
	{
		$this->sellers_model->deleteSeller($idSeller);
		redirect('Sellers/showSellers','refresh');
	}
}
