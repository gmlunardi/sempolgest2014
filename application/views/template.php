<?php
	$dados = array(
		'titulo' => $titulo,
		'pagina' => $pagina
	);
	$this->load->view('template/header',$titulo);
	$this->load->view('template/menu',$dados);
	$this->load->view($pagina,$titulo);
	$this->load->view('template/footer');
