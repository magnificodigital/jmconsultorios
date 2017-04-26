<?php get_header() ?>

<div class="menu-wrapper">
	<div class="box-menu">
		<a href="<?php bloginfo('url') ?>" class="logo-home"><?php bloginfo('name') ?></a>
		<?php get_template_part('menu') ?>
	</div>
</div>

<main id="homesite">
	<div class="container-fluid">
		<div class="row">
			<a href="<?php bloginfo('url') ?>/medicos/">
				<div class="col-md-6 col-sm-6 col-medico">
					
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5 col-sm-12 pull-right center-all">
								<figure>
									<h4>Olá</h4>
									<h3>Doutor (a)</h3>
									<p>Clique aqui e descubra novas oportunidades</p>
								</figure>
							</div>
						</div>
					</div>

				</div>
			</a>
			<a href="<?php bloginfo('url') ?>/paciente/">
				<div class="col-md-6 col-sm-6 col-paciente">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5 col-lg-offset-3 col-md-offset-6 col-sm-offset-5 center-all">
								<figure>
									<h4>Olá</h4>
									<h3>Paciente</h3>
									<p>Clique aqui e agende agora mesmo sua consulta</p>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</main>



<?php get_footer() ?>