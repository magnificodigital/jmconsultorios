<?php get_header(); ?>

<main id="content">

	<?php get_template_part('header','wrapper'); ?>

	<div class="container top-box-newsletter">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<p>Assine para receber nossas novidades</p>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 content-form">
				<div id="persona-2-newsletter-blog-acfacd2c335dc026f16f"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
					new RDStationForms('persona-2-newsletter-blog-acfacd2c335dc026f16f-html', 'UA-100622361-1').createForm();
				</script>
			</div>
		</div>
	</div>

	<div class="container">

		<?php get_template_part('breadcrumbs'); ?>

		<div class="row">

			<section class="content-page col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<section id="posts-blog">
						<div class="container-fluid">

							<?php

							if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                            else { $paged = 1; }

							$args = array(
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => 10,
								'paged'=>$paged,
							);

							global $loop;
							$loop = new WP_query( $args ); ?>

							<?php if($loop->have_posts()): ?>
							<?php while($loop->have_posts()):$loop->the_post(); ?>
							
								<article class="single-post row">
									
									<div class="post-thumbnail col-lg-5 col-md-12 col-sm-12">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('blog-post',array( 'title' => get_the_title() , 'alt' => get_the_title() )) ?>
										</a>
									</div>
								
									<div class="post-content col-lg-7 col-md-12 col-sm-12">

										<header>
											<p style="margin-bottom: 0;"><span class="date">Postado em <?php the_time('d/m/Y') ?></span></p>
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</header>

										<div class="content">
											<?php the_excerpt(); ?>
											<a href="<?php the_permalink(); ?>" class="read-more">Leia mais <span class="fa fa-angle-right" aria-hidden="true"></span></a>
										</div>

									</div>

									</a>

								</article>

					
							<?php endwhile; ?>
							<?php endif; ?>

							<?php 
							//echo $html;
		                    $big = 999999999;
		                    $p = array(
	                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	                            'format' => '?paged=%#%',
	                            'current' => max( 1, get_query_var('paged') ),
	                            'total' => $loop->max_num_pages
	                        );

		                    echo '<div class="navigation">'.paginate_links($p).'</div>';

		                    wp_reset_query();

		                    ?>

						</div>
					</section>



			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>
