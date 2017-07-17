<?php //wp_custom_breadcrumbs();

if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<div class="breadcrumbs">','</div>
');
}


/*

Antigo breadcrumbs
<nav class="breadcrumbs">
	<ol>
		<li><a href="<?php bloginfo('url') ?>"><i class="fa fa-home"></i></a></li>
		<?php if (is_page('blog') || is_single()) : ?>
		<li><a href="<?php bloginfo('url') ?>/blog/">Blog</a></li>
		<?php endif ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	</ol>
</nav>

*/ ?>
