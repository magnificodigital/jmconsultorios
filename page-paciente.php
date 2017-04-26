<?php get_header(); ?>	
	<section id="home">	
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="bgSlide" style="background-image: url('<?php bloginfo('template_url') ?>/images/featured-home-paciente.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 center-all center-x">
							<div class="call-to-action">
								<h2><strong>Agende suas consultas</strong> de forma simples e rápida</h2>
								<a href="<?php bloginfo('url') ?>/paciente/agendar-consulta/" class="btn btn-site">Agendar consulta agora</a>
								<p>Aqui você agenda sua consulta em 1 minuto!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer(); ?>