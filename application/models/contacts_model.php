<?php 
class contacts_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function newContact($data)
	{
		return $this->db->insert('registros_contactos_diarios',$data);
	}

	function getContacts()
	{
		return $this->db->get('vercontactos')->result();
	}










}