<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contenidos');
		$this->load->model('develcrew_utilities');
	}

	public function index()
	{
		$imagenes = $this->contenidos->obtenerImagenes('galeria');
		$data['imagenes'] = $imagenes;
		$data["header"] = 'galeria';
		$this->load->view('estructura/header',$data);
		$this->load->view('galeria',$data);
		$this->load->view('estructura/footer');
	}

	public function ajax()
	{
		$this->load->view('galeria');
	}

}