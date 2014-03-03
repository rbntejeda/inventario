<?php 
class sellers_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getSellers()
	{
		return $this->db->get('vendedores')->result();
	}

	function newSeller($data)
	{
		return $this->db->insert('vendedores',$data);
	}

    function validSeller($newSeller)
    {
    	$data = array(
	    'rut' => $newSeller['rut']
	    );
	    $query = $this->db->get_where('vendedores',$data);
	    return $query->result_array();
       
    }

    function getlistSellers()
    {
    	return $this->db->get('lista_vendedores')->result();
    }

	function updateSeller($data,$idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
		return $this->db->update('vendedores',$data);
	}

	function getSeller($idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
	    return $this->db->get('vendedores')->row();
	}

	function deleteSeller($idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
    	return $this->db->delete('vendedores');
	}



}