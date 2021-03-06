<?php get_header(); ?>	
<section id="home" class="paciente">	
	<div class="bgSlide first bgParallax" style="background-image: url('<?php bloginfo('template_url') ?>/images/featured-home-paciente.jpg');" data-speed="7"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 center-all center-x">
				<div class="call-to-action animated fadeIn">
					<h1><strong>Agende suas consultas</strong> de forma simples e rápida</h1>
					<a href="javascript:MostraIframeShospWidgetAgendar();" class="btn btn-site">Agendar consulta agora</a>
					<p>Aqui você agenda sua consulta em 1 minuto!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('doutores'); ?>
<section id="quemsomos-home">
	<div class="container">
		<?php
			$id = get_page_by_path('quem-somos');
			$quemsomos = get_post($id);
			$content = $quemsomos->post_content;
			$content =  substr($content,0,600 );
		?>
		<article>
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="logoWrapper">
								<img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="JM Consultórios">
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<h2><?php echo $quemsomos->post_title; ?></h2>
							<p><?php echo $content; ?>... </p><br />
							<p><a href="<?php bloginfo('url'); ?>/quem-somos/" class="saibamais">Saiba Mais</a></p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
	<div id="fotoshome">
		<div class="container">
			<h3>Preparado pensando em você</h3>
			<div class="owl-carousel">
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3862-HDR-1.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3889.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3931.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3956.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3968.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/galeria/JM-Consultorios_3988.jpg" alt="<?php bloginfo('name'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('doutor','fixo'); ?>
<?php get_footer(); ?>