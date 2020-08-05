<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenidos extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function actualizarTexto($texto,$pagina)
	{
		$this->db->where('pagina',$pagina);
		$this->db->update('textos',array('valor' => $texto));

		if($this->db->affected_rows() > 0)
		{
			return true;
		}

		return false;
	}

	public function actualizarImagenGaleria($titulo,$descripcion,$orden)
	{
		$this->db->where('orden',$orden);
		$this->db->update('imagenes',array('titulo' => $titulo, 'descripcion' => $descripcion));

		if($this->db->affected_rows() > 0)
		{
			return true;
		}

		return false;
	}

	public function borrarImagen($orden,$pagina)
	{
		$this->db->delete('imagenes',array('orden' => $orden, 'pagina' => $pagina));

		if($this->db->affected_rows() > 0)
		{
			return true;
		}

		return false;
	}

	public function agregarImagenBaseDatos($pagina,$nombre)
	{
		$this->db->insert('imagenes',array('nombre' => $nombre.'.jpg', 'pagina' => $pagina, 'titulo' => ' ', 'descripcion' => ' '));

		if($this->db->affected_rows() > 0)
		{
			return true;			
		}

		return false;
	}

	public function agregarImagen($pagina,$nombre)
	{
		$this->db->where(array('orden' => $nombre, 'pagina' => $pagina));
		$this->db->update('imagenes',array('nombre' => $nombre.'.jpg'));

		if($this->db->affected_rows() > 0)
		{
			return true;			
		}

		return false;	
	}

	public function obtenerUltimaImagen($pagina)
	{
		$this->db->select('orden');
		$this->db->from('imagenes');
		$this->db->where('pagina',$pagina);
		$this->db->order_by('orden','desc');
		$resultado = $this->db->get();

		if($resultado->num_rows() > 0)
		{
			$res = $resultado->result();
			
			return $res[0]->orden;
		}
		else
		{
			return false;
		}		
	}

	public function obtenerTexto($pagina)
	{
		$this->db->select('valor');
		$this->db->from('textos');
		$this->db->where('pagina',$pagina);
		$resultado = $this->db->get();

		if($resultado->num_rows() > 0)
		{
			foreach($resultado->result() as $res)
			{
				return $res->valor;
			}
		}
		else
		{
			return false;
		}
	}

	public function obtenerImagenes($pagina)
	{
		$this->db->select('nombre,titulo,descripcion');
		$this->db->from('imagenes');
		$this->db->where('pagina',$pagina);

		$resultado = $this->db->get();

		if($resultado->num_rows() > 0)
		{
			$imagenes =  array();
			foreach($resultado->result() as $res)
			{
				$imagenes[] = $res;
			}

			return $imagenes;
		}
		else
		{
			return false;
		}
	}
	
}
?>