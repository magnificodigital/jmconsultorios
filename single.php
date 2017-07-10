<?php get_header(); ?>

<main id="content">

	<?php get_template_part('header','wrapper'); ?>

	<div class="container">

		<?php get_template_part('breadcrumbs'); ?>
	
		<div class="row">

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

				<div class="tags">
					<?php the_tags(); ?>
				</div>

				<?php /*
				<div class="author">
					Postado por: <?php the_author(); ?>
				</div>
				*/ ?>


				<?php endwhile; ?>
				<?php endif; ?>

			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>