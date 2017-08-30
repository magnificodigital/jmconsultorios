<?php get_header(); ?>	
<section id="home" class="paciente">	
	<div class="owl-carousel owl-theme">
		<div class="item">
			<div class="bgSlide first" style="background-image: url('<?php bloginfo('template_url') ?>/images/featured-home-paciente.jpg');"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 center-all center-x">
						<div class="call-to-action">
							<h1><strong>Agende suas consultas</strong> de forma simples e rápida</h1>
							<a href="<?php bloginfo('url') ?>/agendar-consulta/" class="btn btn-site">Agendar consulta agora</a>
							<p><?php _e('Aqui você agenda sua consulta em 1 minuto!'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('doutores'); ?>

<section id="photos-home">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php
				$id = get_page_by_path('quem-somos');
				$quemsomos = get_post($id);
				$content = $quemsomos->post_content;
				$content =  substr($content,0,600 );
			?>
			<article>
				<h2><?php echo $quemsomos->post_title; ?></h2>
				<p><?php echo $content; ?>... </p><br />
				<p><a href="<?php bloginfo('url'); ?>/quem-somos/">Saiba Mais</a></p>
			</article>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
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
		<div class="clearfix"></div>
</section>
<?php get_template_part('doutor','fixo'); ?>
<?php get_footer(); ?>