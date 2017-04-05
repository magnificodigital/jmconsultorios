<?php get_header(); ?>

<main id="content">

	<div class="full-width-thumbnail bgParallax" data-speed="4" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>); background-size: cover; background-position: center top">
	</div>

	<div class="container">
		<div class="row">

			<?php get_template_part('breadcrumbs') ?>

			<section class="content-post col-lg-9 col-md-9 col-sm-12 col-xs-12">


				<?php if(have_posts()): ?>
				<?php while(have_posts()):the_post(); ?>

				<header>
					<p><span class="date">Postado em <?php the_time('d/m/Y') ?></span></p>
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>


				<?php endwhile; ?>
				<?php endif; ?>

			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>