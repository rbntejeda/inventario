<?php 
class products_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function newProduct($data)
	{
		return $this->db->insert('productos',$data);
	}

	function getProducts()
	{	
		return $this->db->get('productos')->result();
	}

	function getProducts_orderBy_codigo()
	{	
		$this->db->order_by("codigo","asc");
		return $this->db->get('productos')->result();
	}

	function getProduct($idProducto)
	{
		return $this->db->get_where('productos',array('idProducto' =>$idProducto))->row();
	}

	function deleteProduct($idProducto)
	{
	    $this->db->where('idProducto',$idProducto);
    	return $this->db->delete('productos');
	}

	function newStockProduct($data)
	{
		return $this->db->insert('Stock',$data);
	}

	function getRegisterStock()
	{
		return $this->db->get('registros_stock')->result();
	}

	function getTotalStock()
	{
		return $this->db->get('stock_total')->result();
	}

	function updateProduct($data,$idProducto)
	{
	    $this->db->where('idProducto',$idProducto);
		return $this->db->update('productos',$data);
	}

	function getRangoHistorialIngresoStock($inicio,$termino)
	{
		return $this->db->query("
			SELECT  p.codigo,p.nombre,sum(s.cantidad) AS stock_total
			FROM productos p JOIN stock s ON (idProducto=Producto_idProducto)
			WHERE 
				s.fecha_ingreso>=\"$inicio\" AND 
				s.fecha_ingreso<=\"$termino\" AND 
				s.cantidad>0
			GROUP BY p.idProducto
		")->result();
	}

	function getRangoHistorialVentasStock($inicio,$termino)
	{
		return $this->db->query("
			SELECT  p.codigo,p.nombre,sum(s.cantidad) AS stock_total
			FROM productos p JOIN stock s ON (idProducto=Producto_idProducto)
			WHERE 
				s.fecha_ingreso>=\"$inicio\" AND 
				s.fecha_ingreso<=\"$termino\" AND 
				s.cantidad<0
			GROUP BY p.idProducto
		")->result();
	}



}