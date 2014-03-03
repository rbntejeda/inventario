<?php 
class users_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getUsers()
	{
		return $this->db->get('users')->result();
	}
	public function existUser($username,$password)
    {
	    //comprobamos que el nombre de usuario y contraseña coinciden
	    $data = array(
	    'username' => $username,
	    'password' => md5($password)
	    );
	    $this->db->select('name,role');
	    $query = $this->db->get_where('Users',$data);
	    return $query->row();
    }

	public function getUser($user_id)
	{
	    $this->db->where('id',$user_id);
	    return $this->db->get('users')->row();
	}

	function newUser($data)
	{
		return $this->db->insert('users',$data);
	}

	function updateUser($data,$idUser)
	{
	    $this->db->where('id',$idUser);
		return $this->db->update('users',$data);
	}

	function deleteUser($idUser)
	{
	    $this->db->where('id',$idUser);
    	return $this->db->delete('users');
	}

	public function getLogin($username,$password)
    {
	    //comprobamos que el nombre de usuario y contraseña coinciden
	    $data = array(
	    'username' => $username,
	    'password' => md5($password)
	    );
	   
	    $query = $this->db->get_where('Users',$data);
	    return $query->result_array();
    }
       
       
    public function isLogged()
    {
    //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
   
        if(isset($this->session->userdata['username']))
        {
        return TRUE;
        }
        else
        {
        return FALSE;
        }
       
    }
       
    public function verifyLogged()
    {
    //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
   
	    $data = array(
	    'username' => $this->session->userdata['username'],
	    'password' => md5($this->session->userdata['password']),
	    'role' => $this->session->userdata['role']
	    );
	   
	    $query = $this->db->get_where('Users',$data);
	    return $query->result_array();
       
    }
       
    public function close()
        {
        return $this->session->sess_destroy();
        }
}