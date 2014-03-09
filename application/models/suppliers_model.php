<?php 
class supplier_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function newSupplier($data)
	{
		return $this->db->insert('cartera_proveedores',$data);
	}

	function getSuppliers()
	{
		return $this->db->get('cartera_proveedores')->result();
	}

	function getSupplier($idProveedores)
	{
	    $this->db->where('idCartera_Proveedores',$idProveedores);
	    return $this->db->get('cartera_proveedores')->row();
	}

	function updateSupplier($data,$idProveedores)
	{
	    $this->db->where('idCartera_Proveedores',$idProveedores);
		return $this->db->update('cartera_proveedores',$data);
	}

	function deleteSupplier($idSeller)
	{
	    $this->db->where('idCartera_Proveedores',$idSeller);
    	return $this->db->delete('cartera_proveedores');
	}








}