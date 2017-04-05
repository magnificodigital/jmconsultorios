<?php get_header(); ?>

<main id="content" style="">

	<!--<div class="full-width-thumbnail blog" data-speed="4" style="background-image: url('<?php bloginfo('template_url') ?>/images/banner-blog.jpg');">
	</div>-->

	<div class="container">
		<div class="row">

			<?php

				$categoria = get_the_category();
				$id_categoria = $categoria[0]->cat_ID;
				$nomecategoria = get_cat_name($id_categoria);
				$linkcategoria = get_category_link($id_categoria);

			?>

			<?php get_template_part('breadcrumbs') ?>

			<section class="content-page col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<section id="posts-blog">
						<div class="container-fluid">


							<?php if(have_posts()): ?>
							<?php while(have_posts()):the_post(); ?>

							
								<article class="single-post row">
									
									<div class="post-thumbnail col-lg-5 col-md-12 col-sm-12">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('blog-post') ?>
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
