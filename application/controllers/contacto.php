<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	private $cuentaRemitente;
	private $cuentaDestinatario;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contenidos');
		$this->load->model('develcrew_utilities');
		$this->load->library('email');
		$this->cuentaDestinatario = 'contacto@alexromerofoto.com';
		$this->cuentaRemitente = 'formulario@alexromerofoto.com';
	}

	public function index()
	{
		$data['telefono'] = $this->contenidos->obtenerTexto('telefono');
		$data['direccion'] = $this->contenidos->obtenerTexto('direccion');
		$imagenes = $this->contenidos->obtenerImagenes('contacto');
		$data['imagenes'] = $imagenes;
		$data["header"] = 'contacto';
		$this->load->view('estructura/header',$data);
		$this->load->view('contacto',$data);
		$this->load->view('estructura/footer',$data);
	}

	public function ajax()
	{
		$this->load->view('contacto');
	}

	public function enviarCorreo()
	{
		$datos['nombre'] = $this->input->post('nombre');
		$datos['email'] = $this->input->post('email');
		$datos['telefono'] = $this->input->post('telefono');
		$datos['mensaje'] = $this->input->post('mensaje');

		$this->email->from($this->cuentaRemitente, $datos["nombre"]);
		$this->email->to($this->cuentaDestinatario);

		$this->email->subject('Contacto');

		$mensaje = "Datos contacto:\n\n Nombre:".$datos["nombre"]."\n\n";
		$mensaje .= "Telefono:".$datos["telefono"]."\n\n";
		$mensaje .= "Email:".$datos["email"]."\n\n";
		$mensaje .= "Mensaje:\n".$datos["mensaje"];

		$this->email->message($mensaje);	

		if($this->email->send()){
			$data["mensajeVal"] = "He recibido sus datos, en breve me pondré en contacto con usted. Gracias.";
		}
		else{
			$data['mensajeVal'] = 'Hubo un problema al enviar sus datos. Por favor, inténtelo más tarde.';
		}

		$data['telefono'] = $this->contenidos->obtenerTexto('telefono');
		$data['direccion'] = $this->contenidos->obtenerTexto('direccion');
		$imagenes = $this->contenidos->obtenerImagenes('contacto');
		$data['imagenes'] = $imagenes;
		$data["header"] = 'contacto';
		$this->load->view('estructura/header',$data);
		$this->load->view('contacto',$data);
		$this->load->view('estructura/footer',$data);
	}

}