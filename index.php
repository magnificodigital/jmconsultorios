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
	<?php get_template_part('doutor','fixo'); ?>
<?php get_footer(); ?>