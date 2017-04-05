<?php get_header();
/*
Template Name: Parallax / Full Width
*/
?>

<main id="content">

	<div class="full-width-thumbnail" data-speed="4" style="background-image: url(<?php the_post_thumbnail_url('single-post'); ?>); background-size: cover">
	</div>

	<div class="container">
		<div class="row">

			<section class="content-page col-lg-12 col-md-12 col-sm-8 col-xs-12">

				<?php get_template_part('breadcrumbs') ?>

				<?php if(have_posts()): ?>
				<?php while(have_posts()):the_post(); ?>

				<header class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content col-xs-12">
					<?php the_content(); ?>
				</div>

				<?php endwhile; ?>
				<?php endif; ?>

			</section>

		</div>
	</div>
</main>

<?php get_footer(); ?>