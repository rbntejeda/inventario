<?php 
class products_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getProducts()
	{
		return $this->db->get('productos')->result();
	}

	function getRegisterStock()
	{
		return $this->db->get('registros_stock')->result();
	}

	function getTotalStock()
	{
		return $this->db->get('stock_total')->result();
	}

	function newProduct($data)
	{
		return $this->db->insert('productos',$data);
	}

	function newStockProduct($data)
	{
		return $this->db->insert('Stock',$data);
	}

	function getRangoEstadisticoIngresoStock($inicio,$termino)
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

	function getRangoEstadisticoVentasStock($inicio,$termino)
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