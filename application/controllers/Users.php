<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	#Contructor lo que comienza a cargar
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->library('');
		$this->load->helper('form');
	}

	public function index()
	{
		if($this->input->post())
		{
			if($this->users_model->getLogin($this->input->post('username'),$this->input->post('password')))
			{
				$data=$this->users_model->existUser($this->input->post('username'),$this->input->post('password'));
				$valid_user = array
				(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'name' => $data->name,
					'role' => $data->role
				);
                $this->session->set_userdata($valid_user);
                redirect('Users/showUsers','refresh');
			}
		}
		$this->load->view('form/login');
		$this->load->view('include/footer');
	}

	function registerUser()
	{	
		if (!$this->users_model->isLogged())redirect('/','refresh'); //Es nesesario que este loggeado para poder seguir
		$this->load->view('include/header');
		$this->load->view('form/registerUser');
		$this->load->view('include/footer');

		if($this->input->post())
		{
			$data = array
			(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' =>md5($this->input->post('password')),
				'paterno' => $this->input->post('paterno'),
				'materno' => $this->input->post('materno'),
				'role' => $this->input->post('role')
			);
			{
					$this->users_model->newUser($data);
					redirect('Users/showUsers','refresh');
				}
		}

	}

	function editUser($idUser)
	{	
		if (!$this->users_model->isLogged())redirect('/','refresh'); //Es nesesario que este loggeado para poder seguir
		if($this->input->post())
		{
			$data = array
			(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'paterno' => $this->input->post('paterno'),
				'materno' => $this->input->post('materno'),
				'role' => $this->input->post('role')
			);
			if($this->input->post('password')!="")$data['password']=md5($this->input->post('password'));
			$this->users_model->updateUser($data,$idUser);
			redirect('Users/showUsers','refresh');

		}
		
		$data['user']=$this->users_model->getUser($idUser);
		$this->load->view('include/header');
		$this->load->view('form/editUser',$data);
		$this->load->view('include/footer');
	}


	public function deleteUser($idUser)
	{
		$this->users_model->deleteUser($idUser);
		redirect('Users/showUsers','refresh');
	}


	public function showUsers()
	{
		if (!$this->users_model->isLogged()) 
		{
			redirect('Users/index','refresh');
		}
		$this->load->view('include/header');
		$data['users']=$this->users_model->getUsers();
		$this->load->view('show/showUsers',$data);
		$this->load->view('include/footer');
	}

   public function closeSession()
	{
		//destruimos la sesión

		$this->users_model->close();
		redirect('/','refresh');
	}
}