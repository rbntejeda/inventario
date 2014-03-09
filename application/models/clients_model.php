<?php 
class clients_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function newClient($data)
	{
		return $this->db->insert('cartera_clientes',$data);
	}

	function getClients()
	{
		return $this->db->get('cartera_clientes')->result();
	}

	function getClient($idClient)
	{
	    $this->db->where('idCartera_Clientes',$idClient);
	    return $this->db->get('cartera_clientes')->row();
	}

	function updateClient($data,$idClient)
	{
	    $this->db->where('idCartera_Clientes',$idClient);
		return $this->db->update('cartera_clientes',$data);
	}

	function deleteClient($idSeller)
	{
	    $this->db->where('idCartera_Clientes',$idSeller);
    	return $this->db->delete('cartera_clientes');
	}








}