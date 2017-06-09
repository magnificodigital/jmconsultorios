<?php get_header(); ?>

<main id="content" style="">

	<div class="full-width-thumbnail bgParallax blog" data-speed="4" style="background-image: url('<?php bloginfo('template_url') ?>/images/banner-blog.jpg');"></div>

	<div class="container top-box-newsletter">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<p>Assine para receber nossas novidades</p>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 content-form">
				<div id="jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7"></div>
			</div>
		</div>
	</div>

	<div class="container">

		<?php get_template_part('breadcrumbs'); ?>

		<div class="row">

			<section class="content-page col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<section id="posts-blog">
						<div class="container-fluid">

							<?php $args = array(
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => '10',
								);
							?>
							<?php query_posts($args); ?>


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
											<a href="<?php the_permalink(); ?>" class="read-more">Leia mais</a>
										</div>

									</div>

									</a>

								</article>

					
							<?php endwhile; ?>
							<?php endif; ?>


						</div>
					</section>
			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>
