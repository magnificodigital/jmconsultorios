<?php get_header(); ?>

<main id="content" style="">

	<div class="full-width-thumbnail bgParallax blog" data-speed="4" style="background-image: url('<?php bloginfo('template_url') ?>/images/banner-blog.jpg');">
	</div>

	<div class="container">
		<div class="row">

			<?php get_template_part('breadcrumbs') ?>

			<section class="content-page col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<section id="posts-blog">
						<div class="container-fluid">

							<?php if(have_posts()): ?>
							<?php while(have_posts()):the_post(); ?>

							
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
							global $wp_query;
							 
							$big = 999999999; // need an unlikely integer

							$p = array(
	                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	                            'format' => '?paged=%#%',
	                            'current' => max( 1, get_query_var('paged') ),
	                            'total' => $wp_query->max_num_pages
	                        );

		                    echo '<div class="navigation">'.paginate_links($p).'</div>';
							
							?>


						</div>
					</section>
			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>
