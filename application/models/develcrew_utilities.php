<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Develcrew_utilities extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function formateoLista($lista)
	{
		$lista .= "\n";
		$diferencia = 2;
		while($diferencia == 2 || $diferencia == 1)
		{
			$lista = substr($lista,0,-1);

			if(strrpos($lista, "\n") != false){ $diferencia = strlen($lista) - strrpos($lista, "\n");}
		}
		
		$lista = str_replace("\n","[/]",$lista);
		return $lista;
	}

	public function formateoListaInverso($lista)
	{
		$lista = str_replace("[/]","\n",$lista);
		return $lista;
	}
	
	public function formateoHTML($texto)
	{
		$parrafos = explode('[/]', $texto);

		$html = '';

		foreach ($parrafos as $parrafo) {
			$html .= '<p>'.$parrafo.'</p>';
		}

		return $html;
	}
}
?>