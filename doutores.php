<section id="specialists-grid">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<div class="row">
					<?php 

					$args = array (
			            'taxonomy' => 'especialidade', 
			            'orderby' => 'name',
			            'order' => 'ASC',
			            'hide_empty' => true, //can be 1, '1' too
			    	);

					$terms = get_terms($args);
					foreach ($terms as $term) : ?>

					<?php 
						$args = array(
							'orderby' => 'name',
							'order' => 'DESC',
							//'posts_per_page' => 10,
							'post_type' => 'doutor'	,
							'tax_query' => array(
						        array(
						            'taxonomy' => 'especialidade',
						            'field' => 'slug',
						            'terms' => $term->slug
						        ),
						    ),				
						);
						global $loop;
						$loop = new WP_query( $args );
						if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
					?>

						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="doctor-wrapper">
								<div class="flip-wrapper">
									<div class="especialidade front">
										<header>
											<h2><?php echo $term->name; ?></h2>
										</header>

										<div data-id="<?php echo get_the_ID(); ?>" class="doutor">
											<?php
											if (has_post_thumbnail()){
												the_post_thumbnail('doutor-page');
											} else {

												$generos = get_the_terms(get_the_ID(),'genero');
												foreach ($generos as $genero) {
													if ($genero->name == "Mulher") {
														echo '<img src="'.get_bloginfo('template_url').'/images/padrao_f2.jpg" alt="'.get_the_title().'" />';
													} else {
														echo '<img src="'.get_bloginfo('template_url').'/images/padrao_m2.jpg" alt="'.get_the_title().'" />';
													}
												}
												
											} ?>
											<p class="nome"><strong><?php echo get_the_title(); ?></strong></p>
											<p class="cr">
												<?php
													$dados = get_post_meta(get_the_ID(), 'jm_cr_doutor');
													foreach ($dados as $dado) {
														echo $dado;
													}
												?>
											</p>
										</div>
									</div>

									<div class="content back">
										<?php the_content(); ?>
										<a href="<?php bloginfo('url') ?>/agendar-consulta/" class="agendar">Agendar Consulta</a>
									</div>

								</div>

							</div>

						</div>

						<?php endwhile; else : ?>
							<p>Nenhum doutor encontrado.</p>
						<?php endif; ?>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

