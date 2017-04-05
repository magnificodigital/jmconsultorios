<?php

	/*
		$post_id = ver uma forma de puxar os posts por slug;
		$queried_post = get_post($post_id);
		$title = $queried_post->post_title;
		echo $title;
		echo $queried_post->post_content; */


	$vantagens_left = array(

		'Agenda Online' => array(
			'url' => 'agenda-online',
			'nome' => 'Agenda Online',
			'text' => 'Tenha o controle dos seus próximos atendimentos em nosso sistema, otimizando melhor seu tempo.',
			'imageurl' => 'vantagens2-agenda.png'
		),

		'Seus Dados em Segurança' => array(
			'url' => 'seus-dados-em-seguranca', 
			'nome' => 'Seus Dados em Segurança',
			'text' => 'Nosso sistema médico possui certificado GlobalSign: utilizamos criptografia e certificados SSL para proteger todas as suas informações.',
			'imageurl' => 'vantagens2-dados.png'	
		),


		'Economia de Custos internos' => array(
			'url' => 'economia-de-custos-internos', 
			'nome' => 'Economia de Custos Internos',
			'text' => 'Compartilhe tempo e recursos. Maior flexibilidade de horários e uma enorme economia com custos internos como: contas de água, luz, telefone, condomínio e IPTU.',
			'imageurl' => 'vantagens2-custos.png'
		),


		'Equipe de Suporte' => array(
			'url' => 'equipe-suporte', 
			'nome' => 'Equipe de Suporte',
			'text' => 'Tenha  a disposição diversos profissionais qualificados. Serviços de Recepção,  copa, limpeza, manutenção e apoio em todos aspectos administrativos.',
			'imageurl' => 'vantagens2-equipesuporte.png'	
		),

		'Estacionamento' => array(
			'url' => 'estacionamento', 
			'nome' => 'Estacionamento',
			'text' => 'Deixe seu carro em boas mãos e fique tranquilo para atender seus pacientes.',
			'imageurl' => 'vantagens2-estacionamento.png',
			'obs' => '*válido apenas para plano infinity.'
		),

		'Prontuário Eletrônico' => array(
			'url' => 'prontuario-eletronico', 
			'nome' => 'Prontuário eletrônico',
			'text' => 'Controle o atendimento de seus pacientes através de um módulo completo de atendimento.',
			'imageurl' => 'vantagens2-pronturario.png',
		),

		'Consultórios Mobiliados' => array(
			'url' => 'consultorios-mobiliados', 
			'nome' => 'Consultórios mobiliados',
			'text' => 'Consultórios mobiliados, modernos e prontos para você atender seus pacientes com conforto e qualidade.',
			'imageurl' => 'vantagens2-consultoriosmobiliados.png',
		),
	);


	$vantagens_right = array(

		'Infraestrutura Completa' => array(
			'url' => 'infraestrutura-completa',
			'nome' => 'Infraestrutura Completa',
			'text' => 'Tenha o controle dos seus próximos atendimentos em nosso sistema, otimizando melhor seu tempo.',
			'imageurl' => 'vantagens2-infraestrutura.png'
		),

		'Lembrete de pós-consulta' => array(
			'url' => 'lembrete-de-pos-consulta',
			'nome' => 'Lembrete de Pós-Consulta',
			'text' => 'Melhore o relacionamento com seus pacientes após os atendimentos. Configure rapidamente períodos de avisos ou lembretes e mantenha contato, demonstrando sua preocupação com a evolução clínica.',
			'imageurl' => 'vantagens2-lembrete.png'
		),

		'Medicina do Trabalho' => array(
			'url' => 'medicina-do-trabalho',
			'nome' => 'Medicina do Trabalho',
			'text' => 'Preencha e imprima de forma simples e rápida: Atestados de Saúde Ocupacional (ASO) e Fichas Clínicas.',
			'imageurl' => 'vantagens2-medicinatrabalho.png'
		),

		/*'Multiagendas' => array(
			'url' => 'multiagendas',
			'nome' => 'Multiagendas',
			'text' => '',
			'imageurl' => 'vantagens2-multiagenda.png'
		),*/

		/*'Controle de Estoque' => array(
			'url' => 'controle-de-estoque',
			'nome' => 'Controle de Estoque',
			'text' => 'Preencha e imprima de forma simples e rápida Atestados de Saúde Ocupacional (ASO) e Fichas Clínicas.',
			'imageurl' => 'vantagens2-medicinatrabalho.png'
		),*/


		'TISS' => array(
			'url' => 'tiss',
			'nome' => 'TISS',
			'text' => 'Através de uma interface simples e intuitiva de nosso sistema médico, exporte suas consultas no padrão TISS para suas operadoras de planos privados, de assistência, de saúde e prestadores de serviços médico-hospitalares.',
			'imageurl' => 'vantagens2-tiss.png'
		),

		'Compatibilidade com Dispositivos Móveis' => array(
			'url' => 'compatibilidade-com-dispositivos-moveis',
			'nome' => 'Compatibilidade com Dispositivos Móveis',
			'text' => 'Otimize seu tempo, através do seu smartphone ou tablet, em nosso software médico. Saiba sobre o atendimento, agenda e financeiro de seu consultório a caminho do seu próximo atendimento.',
			'imageurl' => 'vantagens2-dispositivosmoveis.png'
		),

		'Relatórios' => array(
			'url' => 'relatorios',
			'nome' => 'Relatórios',
			'text' => 'Tenha sempre em mãos estatísticas sobre suas clínicas e consultórios, bem como de pacientes e atendimentos, através de resumos que são demonstrados na tela.',
			'imageurl' => 'vantagens2-relatorios.png'
		),

		'Gestão Administrativa' => array(
			'url' => 'gestao-administrativa', 
			'nome' => 'Gestão Administrativa',
			'text' => 'Mais facilidade no controle. Tudo para tornar sua a administração mais completa!',
			'imageurl' => 'vantagens2-administracaofinanceira.png',
		),

	);

	$template = "page_vantagens.php";

?>


<div class="list-vantagens row <?php if(is_home() || is_page('vantagens')) : ?>home<?php endif ?>">
	<div class="col-lg-6 col-md-6 col-sm-12 col-left">
		<ul>

			<?php foreach ($vantagens_left as $vantagem ) { ?>

				<?php if (!is_page($vantagem['url'])) : ?>

					<li>
						<a href="<?php bloginfo('url') ?>/vantagens/<?php echo $vantagem['url']; ?>/">
							<div class="row">

								<div class="image-item col-sm-2 col-xs-3">
									<img src="<?php bloginfo('template_url') ?>/images/<?php echo $vantagem['imageurl'] ; ?>" alt="<?php echo $vantagem['nome'] ?>" title="<?php echo $vantagem['nome'] ?>">
								</div>

								<div class="col-sm-10 col-xs-9">
									<?php if (is_page_template($template)) : ?>
										<h4><?php echo $vantagem['nome'] ?></h4>
										<p><?php echo $vantagem['text'] ?></p>
									<?php else : ?>
										<h4><?php echo $vantagem['nome'] ?></h4>
									<?php endif ?>
								</div>
					
							</div>
						</a>
					</li>

				<?php endif ?>
				
			<?php } ?>

		</ul>

	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-right">

		<ul>	

			<?php foreach ($vantagens_right as $vantagem ) { ?>

				<?php if (!is_page($vantagem['url'])) : ?>

					<li>
						<a href="<?php bloginfo('url') ?>/vantagens/<?php echo $vantagem['url']; ?>/">
							<div class="row">

								<div class="image-item col-sm-2 col-xs-3">
									<img src="<?php bloginfo('template_url') ?>/images/<?php echo $vantagem['imageurl'] ; ?>" alt="<?php echo $vantagem['nome'] ?>" title="<?php echo $vantagem['nome'] ?>">
								</div>

								<div class="col-sm-10 col-xs-9">
									<?php if (is_page_template($template)) : ?>
										<h4><?php echo $vantagem['nome'] ?></h4>
										<p><?php echo $vantagem['text'] ?></p>
									<?php else : ?>
										<h4><?php echo $vantagem['nome'] ?></h4>
									<?php endif ?>
								</div>
					
							</div>
						</a>
					</li>

				<?php endif ?>
				
			<?php } ?>


		</ul>

	</div>
</div>