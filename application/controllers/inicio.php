<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index(){
		$dados = array(
			'titulo' => 'Seminário Integrado 2014',
			'pagina' => 'inicio_view'
		);
		$this->load->view('template',$dados);
	}
	
	public function eventos(){
		$dados = array(
			'titulo' => 'Os Eventos',
			'pagina' => 'eventos'
		);
		$this->load->view('template',$dados);
	}
	
	public function prazos(){
		$dados = array(
			'titulo' => 'Prazos',
			'pagina' => 'prazos'
		);
		$this->load->view('template',$dados);
	}
	
	public function programacao(){
		$dados = array(
			'titulo' => 'Programação',
			'pagina' => 'programacao'
		);
		$this->load->view('template',$dados);
	}
	
	public function inscricoes(){
		$dados = array(
			'titulo' => 'Inscrições',
			'pagina' => 'inscricoes'
		);
		$this->load->view('template',$dados);
	}
	
	public function modalidades(){
		$dados = array(
			'titulo' => 'Modalidades',
			'pagina' => 'modalidades'
		);
		$this->load->view('template',$dados);
	}
	
	public function eixos(){
		$dados = array(
			'titulo' => 'Eixos Temáticos',
			'pagina' => 'eixos'
		);
		$this->load->view('template',$dados);
	}
	
	public function formatacao(){
		$dados = array(
			'titulo' => 'Normas Trabalhos / Oficinas',
			'pagina' => 'formatacao'
		);
		$this->load->view('template',$dados);
	}

	public function oficinas(){
		$dados = array(
			'titulo' => 'Normas proposição oficinas',
			'pagina' => 'oficinas'
		);
		$this->load->view('template',$dados);
	}

	public function envio(){
		$dados = array(
			'titulo' => 'Submissão de Trabalhos/Oficinas',
			'pagina' => 'envio'
		);
		$this->load->view('template',$dados);
	}

	public function localizacao(){
		$dados = array(
			'titulo' => 'Localização',
			'pagina' => 'localizacao'
		);
		$this->load->view('template',$dados);
	}
	
	public function transporte(){
		$dados = array(
			'titulo' => 'Transporte',
			'pagina' => 'transporte'
		);
		$this->load->view('template',$dados);
	}	
	
	public function hospedagem(){
		$dados = array(
			'titulo' => 'Hospedagem',
			'pagina' => 'hospedagem'
		);
		$this->load->view('template',$dados);
	}

}