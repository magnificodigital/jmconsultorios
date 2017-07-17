<section id="specialists">
	<div class="container">
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
				if ($loop->have_posts()) : $postCount = 0; while ($loop->have_posts()) : $loop->the_post(); $postCount++;
			?>

				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<div class="especilidade">
						<header>
							<?php if ($postCount == 1) : ?>
							<h2>
								<?php echo $term->name; ?>
							</h2>
							<?php endif; ?>
						</header>

							<div class="doutor">
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
								<div class="hidden">
									<?php $termos = get_the_terms(get_the_ID(),'especialidade'); ?>
									<div class="terms">
										<ul>
										<?php foreach ($termos as $key => $termo) :
												echo '<li>'.$termo->name.'</li>';
											endforeach; ?>
										</ul>
									</div>
									<span class="content"><?php the_content(); ?></span>
									<span class="thumbnail">
										<?php
										if (has_post_thumbnail()){
											the_post_thumbnail_url('doutor-box');
										} else {

											$generos = get_the_terms(get_the_ID(),'genero');
											foreach ($generos as $genero) {
												if ($genero->name == "Mulher") {
													echo get_bloginfo('template_url').'/images/padrao_f1.jpg';
												} else {
													echo get_bloginfo('template_url').'/images/padrao_m1.jpg';
												}
											}

										} ?>
									</span>
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
</section>

<div id="boxdoutor">
	<div class="row">
		<div class="col-md-5">
			<img src="" alt="" title="" class="thumb" />
		</div>
		<div class="col-md-7">
			<div class="espec"></div>
			<p class="name"></p>
			<p class="cr"></p>
			<p class="conteudo"></p>
			<a href="<?php bloginfo('url') ?>/agendar-consulta/" class="btn" target="_blank">Agendar</a>
		</div>
	</div>
</div>