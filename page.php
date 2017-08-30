<?php get_header(); ?>

<main id="content">

	<?php get_template_part('header','wrapper'); ?>

	<div class="container">
		<div class="row">

			<section class="content-page col-lg-12 col-md-9 col-sm-12 center-x">

				<?php get_template_part('breadcrumbs'); ?>

				<?php if(have_posts()): ?>
				<?php while(have_posts()):the_post(); ?>

				<header>
					<?php if (is_page('contato')) : ?>
						<center>
							<h1><?php the_title(); ?></h1>
						</center>
					<?php else : ?>
						<h1><?php the_title(); ?></h1>
					<?php endif; ?>
				</header>

				<div class="content">
					<?php

						if (is_page('contato')) : ?>

						<div class="page-contato">
							<div class="row">
								<div class="col-xs-12">
									<?php the_content(); ?>
									<span id="exibetelefone">Clique aqui para exibir o telefone</span>
								</div>
								<?php /*
								<div class="col-md-6">
									<div class="form-contato">
										<div id="jm-consultorios-persona-2-contato-c9624debe9d0b7e3f4d5"></div>
									</div>
								</div> */ ?>
							</div>
						</div>
						<?php else : 
							the_content();
						endif; ?>
						
				</div>

				<?php endwhile; ?>
				<?php endif; ?>

			</section>

		</div>
	</div>

	<?php 
	if (is_page('quem-somos')) {
		get_template_part('doutores');
	} ?>

</main>

<?php get_footer(); ?>