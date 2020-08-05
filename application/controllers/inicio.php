<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contenidos');
		$this->load->model('develcrew_utilities');
	}

	public function index()
	{
		$texto = $this->contenidos->obtenerTexto('inicio');
		$data['texto'] = $this->develcrew_utilities->formateoHTML($texto);
		$imagenes = $this->contenidos->obtenerImagenes('inicio');
		$data['imagenes'] = $imagenes;
		$data["header"] = 'inicio';
		$this->load->view('estructura/header',$data);
		$this->load->view('inicio',$data);
		$this->load->view('estructura/footer',$data);
	}

	public function ajax()
	{
		$this->load->view('inicio');
	}

}