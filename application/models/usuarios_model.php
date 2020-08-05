<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	private $usuario;
	private $password;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function iniciar($usuario,$password)
	{
		$this->usuario = $usuario;
		$this->password = $password;
	}

	public function iniciar_sesion()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where(array('usuario' => $this->usuario, 'password' => $this->password));
		$resultado = $this->db->get();

		if($resultado->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}