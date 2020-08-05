<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('contenidos');
		$this->load->model('develcrew_utilities');
		$this->load->model('usuarios_model');
		$this->load->library('upload');
		$this->load->library('session');
	}
/* VISTAS */
	public function index()
	{
		$this->sesionIniciada();
		redirect('sistema/inicio');
	}

	public function iniciar($seccion = 'inicio')
	{
		$this->usuarios_model->iniciar($this->input->post('usuario'),$this->input->post('password'));
		if($this->usuarios_model->iniciar_sesion())
		{
			$this->session->set_userdata(array('usuario' => 'admin'));
			redirect('sistema/'.$seccion);
		}
		else
		{
			redirect('sistema/sesion');
		}
	}

	public function sesion()
	{
		$this->load->view('sistema/header-sesion');
		$this->load->view('sistema/sesion');
		$this->load->view('sistema/footer');
	}

	public function inicio()
	{
		$this->sesionIniciada();

		$texto = $this->contenidos->obtenerTexto('inicio');
		$data['texto'] = $this->develcrew_utilities->formateoListaInverso($texto);
		$imagenes = $this->contenidos->obtenerImagenes('inicio');
		$data['imagenes'] = $imagenes;
		$data["actual"] = array('active','','','');
		$this->load->view('sistema/header',$data);
		$this->load->view('sistema/inicio',$data);
		$this->load->view('sistema/footer');
	}

	public function galeria()
	{
		$this->sesionIniciada();

		$imagenes = $this->contenidos->obtenerImagenes('galeria');
		$data['imagenes'] = $imagenes;
		$data["actual"] = array('','active','','');
		$this->load->view('sistema/header',$data);
		$this->load->view('sistema/galeria',$data);
		$this->load->view('sistema/footer');
	}

	public function contacto()
	{
		$this->sesionIniciada();

		$data['telefono'] = $this->contenidos->obtenerTexto('telefono');
		$data['direccion'] = $this->contenidos->obtenerTexto('direccion');
		$imagenes = $this->contenidos->obtenerImagenes('contacto');
		$data['imagen'] = $imagenes[0];
		$data["actual"] = array('','','active','');
		$this->load->view('sistema/header',$data);
		$this->load->view('sistema/contacto',$data);
		$this->load->view('sistema/footer');
	}

	public function otros()
	{
		$this->sesionIniciada();

		$data["actual"] = array('','','','active');
		$this->load->view('sistema/header',$data);
		$this->load->view('sistema/otros');
		$this->load->view('sistema/footer');
	}

/* FUNCTIONES */
	public function subirImagen($path,$nombre,$campo)
	{
		$config['upload_path'] = $path;
		$config['file_name'] = $nombre;
		$config['allowed_types'] = 'jpg';
		$config['overwrite'] = true;
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->upload->initialize($config);

		return $this->upload->do_upload($campo);
	}

	public function actualizarMensaje()
	{
		$mensaje = $this->input->post('mensaje');
		if($this->contenidos->actualizarTexto($mensaje,'inicio'))
		{
			redirect('sistema/inicio');
		}
		else
		{
			echo "ERROR";
		}
	}

	public function actualizarTexto($tipo)
	{
		$texto = $this->input->post($tipo);
		if($this->contenidos->actualizarTexto($texto,$tipo))
		{
			redirect('sistema/contacto');
		}
		else
		{
			echo "ERROR";
		}
	}

	public function agregarImagen($pagina)
	{
		if($this->contenidos->agregarImagenBaseDatos($pagina,''))
		{
			$nombre = $this->contenidos->obtenerUltimaImagen('inicio');	

			if($this->contenidos->agregarImagen($pagina, $nombre))
			{
				if($pagina == 'inicio' && $this->subirImagen('./resources/images/inicio/',$nombre.'.jpg','file'))
				{
					redirect('sistema/inicio');
				}
				else
				{
					echo "ERROR";
				}
			}
			else
			{
				echo "ERROR";
			}
		}
	}

	public function actualizarImagen($orden,$pagina)
	{
		if($this->subirImagen('./resources/images/'.$pagina.'/',$orden.'.jpg','file'))
		{
			redirect('sistema/'.$pagina);
		}
		else
		{
			echo "ERROR";
		}
	}

	public function actualizarImagenOtros($tipo)
	{
		if($this->subirImagen('./resources/images/',$tipo.'.jpg',$tipo))
		{
			redirect('sistema/otros');
		}
		else
		{
			echo "ERROR";
		}
	}

	public function agregarImagenGaleria()
	{
		if($this->contenidos->agregarImagenBaseDatos('galeria',''))
		{
			$nombre = $this->contenidos->obtenerUltimaImagen('galeria');	

			if($this->contenidos->agregarImagen('galeria', $nombre))
			{
				if($this->subirImagen('./resources/lightbox/images/thumbs/',$nombre.'.jpg','thumb') && $this->subirImagen('./resources/lightbox/images/full/',$nombre.'.jpg','full'))
				{
					redirect('sistema/galeria');
				}
				else
				{
					echo "ERROR";
				}
			}
			else
			{
				echo "ERROR";
			}
		}
		else
		{
			echo "ERROR";
		}
	}
	public function actualizarImagenGaleria($orden)
	{
		$bandera1 = $this->subirImagen('./resources/lightbox/images/thumbs/',$orden.'.jpg','thumb');
		$bandera2 = $this->subirImagen('./resources/lightbox/images/full/',$orden.'.jpg','full');
		$titulo = $this->input->post('titulo');
		$descripcion = $this->input->post('descripcion');
		$bandera3 = $this->contenidos->actualizarImagenGaleria($titulo,$descripcion,$orden);
		if( $bandera1 || $bandera2 || $bandera3 )
		{
			redirect('sistema/galeria');
		}
		else
		{
			echo "ERROR";
		}
	}

	public function borrarImagen($orden,$pagina)
	{
		if($this->contenidos->borrarImagen($orden,$pagina))
		{
			if($pagina == 'inicio' || $pagina == 'contacto')
			{
				if(unlink('./resources/images/'.$pagina.'/'.$orden.'.jpg'))
				{
					redirect('sistema/inicio');
				}
				else
				{
					echo "ERROR";
				}
			}

			if($pagina == 'galeria')
			{
				if(unlink('./resources/lightbox/images/full/'.$orden.'.jpg') && unlink('./resources/lightbox/images/thumbs/'.$orden.'.jpg'))
				{
					redirect('sistema/galeria');
				}
				else
				{
					echo "ERROR";
				}
			}
		}
	}

	public function sesionIniciada()
	{
		if(!$this->session->userdata('usuario'))
		{
			redirect('sistema/sesion');
		}
	}
}