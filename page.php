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
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>

				<?php endwhile; ?>
				<?php endif; ?>

			</section>

		</div>
	</div>
</main>

<?php get_footer(); ?>