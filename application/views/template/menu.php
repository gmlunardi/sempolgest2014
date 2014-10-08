<?php
	if (!empty($pagina))
	$ativo = 'active';
	$ativoTrab = '';
	$ativoServ = '';
	$ativoTrabAprov = '';
	if ($pagina == 'modalidades' || $pagina == 'eixos' || $pagina == 'formatacao' || $pagina ==  'envio' || $pagina == 'oficinas')
		$ativoTrab = 'active';
	else if ($pagina == 'transporte' || $pagina == 'hospedagem' || $pagina == 'localizacao')
			$ativoServ = 'active';
	else if ($pagina == 'trabAprovEixo1' || $pagina == 'trabAprovEixo2' || $pagina == 'trabAprovEixo3' || $pagina == 'trabAprovEixo4')
			$ativoTrabAprov = 'active';
?>

<!-- Fixed navbar -->
	<div class="navbar navbar-inverse" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="<?php //echo base_url('assets/images/logo.png') ?>" ></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="<?php if ($pagina == 'inicio_view') echo $ativo ?>"><a href="<?php echo base_url();?>">Início</a></li>
					<li class="<?php if ($pagina == 'eventos') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/eventos');?>">Os Eventos</a></li>
					<li class="<?php if ($pagina == 'programacao') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/programacao');?>">Programação</a></li>
					<li class="<?php if ($pagina == 'inscricoes') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/inscricoes');?>">Inscrições</a></li>
					<li class="<?php if ($pagina == 'prazos') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/prazos');?>">Prazos</a></li>
					<li class="dropdown <?php echo $ativoTrabAprov ?>"><a href="" class="dropdown-toggle" data-toggle="dropdown">Trabalhos Aprovados<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($pagina == 'trabAprovEixo1') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/trabalhosAprovadosEixo1');?>">Eixo 1</a></li>
							<li class="<?php if ($pagina == 'trabAprovEixo2') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/trabalhosAprovadosEixo2');?>">Eixo 2</a></li>
							<li class="<?php if ($pagina == 'trabAprovEixo3') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/trabalhosAprovadosEixo3');?>">Eixo 3</a></li>
							<li class="<?php if ($pagina == 'trabAprovEixo4') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/trabalhosAprovadosEixo4');?>">Eixo 4</a></li>
						</ul>
					</li>
					<li class="<?php if ($pagina == 'oficinasaprovadas') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/oficinasaprovadas');?>">Oficinas Aprovadas</a></li>

					

					<li class="dropdown <?php echo $ativoTrab ?>"><a href="" class="dropdown-toggle" data-toggle="dropdown">Trabalhos / Oficinas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($pagina == 'modalidades') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/modalidades');?>">Modalidades</a></li>
							<li class="<?php if ($pagina == 'eixos') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/eixos');?>">Eixos Temáticos</a></li>
							<li class="<?php if ($pagina == 'formatacao') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/formatacao');?>">Normas</a></li>
							<!--<li class="<?php if ($pagina == 'oficinas') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/oficinas');?>">Normas de Oficinas</a></li>-->
							<li class="<?php if ($pagina == 'envio') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/envio');?>">Submissão</a></li>
						</ul>
					</li>
					<li class="dropdown <?php echo $ativoServ ?>"><a href="" class="dropdown-toggle" data-toggle="dropdown">Serviços <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="<?php if ($pagina == 'transporte') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/transporte');?>">Transporte</a></li>
							<li class="<?php if ($pagina == 'localizacao') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/localizacao');?>">Localização</a></li>
							<li class="<?php if ($pagina == 'hospedagem') echo $ativo ?>"><a href="<?php echo base_url('index.php/inicio/hospedagem');?>">Hospedagem</a></li>
						</ul>
					</li> 
					<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Anteriores <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class=""><a href="http://coral.ufsm.br/seminariopoliticasegestao/2013/" target="_blank">Edição 2013</a></li>
							<li class=""><a href="http://espgestao.wordpress.com" target="_blank">Edição 2012</a></li>
						</ul>
					</li> 
					<li><a href="#contato">Contato</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	
