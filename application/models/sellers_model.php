<?php 
class sellers_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function newSeller($data)
	{
		return $this->db->insert('vendedores',$data);
	}

	function getSellers()
	{
		return $this->db->get('vendedores')->result();
	}

	function getSeller($idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
	    return $this->db->get('vendedores')->row();
	}

	function updateSeller($data,$idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
		return $this->db->update('vendedores',$data);
	}

	function deleteSeller($idSeller)
	{
	    $this->db->where('idVendedores',$idSeller);
    	return $this->db->delete('vendedores');
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

	function getContactsSellers($idVendedores)
	{
		return $this->db->get_where('registros_contactos_diarios',array('Vendedores_idVendedores' => $idVendedores ))->result();
	}

}