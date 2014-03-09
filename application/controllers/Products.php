<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	#Contructor lo que comienza a cargar
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('products_model');
		$this->load->library('');
		$this->load->helper('form');
		//Debe estar logeado y ser Administrador
		if(!$this->session->userdata('role'))redirect('Users/','refresh');
		if(!$this->users_model->verifyLogged())redirect('Users/','refresh');
		
	}

	function registerProduct()
	{
		if($this->input->post())
		{
			$data = array
			(
				'nombre' => $this->input->post('name'),
				'codigo' => $this->input->post('codigo'),
				'valor_neto' => $this->input->post('valor_neto'),
				'descripcion' => $this->input->post('descripcion'),
			);
			$this->products_model->newProduct($data);
			redirect('Products/showProducts','refresh');
		}
		$menu['menu']='Products';
		$this->load->view('include/header',$menu);
		$this->load->view('form/registerProduct');
		$this->load->view('include/footer');
	}

	function editProduct($idProducto)
	{
		if($this->input->post())
		{
			$data = array
			(
				'nombre' => $this->input->post('name'),
				'codigo' => $this->input->post('codigo'),
				'valor_neto' => $this->input->post('valor_neto'),
				'descripcion' => $this->input->post('descripcion'),
			);
			$this->products_model->updateProduct($data,$idProducto);
			redirect('Products/showProducts');
		}
		$menu['menu']='Products';
		$data['product']=$this->products_model->getProduct($idProducto);
		$this->load->view('include/header',$menu);
		$this->load->view('form/editProduct',$data);
		$this->load->view('include/footer');
	}


	function showProducts()
	{
		$menu['menu']='Products';
		$data['products']=$this->products_model->getProducts();
		$this->load->view('include/header',$menu);
		$this->load->view('show/showProducts',$data);
		$this->load->view('include/footer');
	}

	function deleteProduct($idProduct)
	{
		$this->products_model->deleteProduct($idProduct);
		redirect('Products/showProducts','refresh');
	}



	function registerStock()
	{

		if($this->input->post())
		{
			$data = array
			(
				'cantidad' => $this->input->post('cantidad'),
				'fecha_ingreso' => $this->input->post('fecha_ingreso'),
				'Producto_idProducto' => $this->input->post('producto')
			);
			$this->products_model->newStockProduct($data);
			redirect('Products/showRegisterStock','refresh');
		}
		$menu['menu']='Products';
		$data['products']=$this->products_model->getProducts_orderBy_codigo();
		$this->load->view('include/header',$menu);
		$this->load->view('form/registerStock',$data);
		$this->load->view('include/footer');
	}

	function showStock()
	{
		$menu['menu']='Products';
		$data['products']=$this->products_model->getTotalStock();
		$this->load->view('include/header',$menu);
		$this->load->view('show/showTotalStock',$data);
		$this->load->view('include/footer');
	}

	function showRegisterStock()
	{
		$menu['menu']='Products';
		$data['stocks']=$this->products_model->getRegisterStock();
		$this->load->view('include/header',$menu);
		$this->load->view('show/showRegisterStock',$data);
		$this->load->view('include/footer');
	}

	function showHistoryProducts()
	{
		if($this->input->post())
		{
			if($this->input->post('stock'))$data['products'] = $this->products_model->getRangoHistorialIngresoStock($data['inicio']=$this->input->post('inicio'),$data['termino']=$this->input->post('termino'));
			if($this->input->post('ventas'))$data['ventas'] = $this->products_model->getRangoHistorialVentasStock($data['inicio']=$this->input->post('inicio'),$data['termino']=$this->input->post('termino'));
			if(!$this->input->post('stock')&&!$this->input->post('ventas'))
			{
				$data['inicio']=$this->input->post('inicio');
				$data['termino']=$this->input->post('termino');
			}
		}

		else
		{
			$data['inicio']=date('Y-m-d');
			$data['termino']=date('Y-m-d');
		}
		$menu['menu']='Products';
		$this->load->view('include/header',$menu);
		$this->load->view('show/showHistoryProducts',$data);
		$this->load->view('include/footer');
	}

}

