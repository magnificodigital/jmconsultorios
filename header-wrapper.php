<?php 

	if (is_page('blog')) {
		$image = get_bloginfo('template_url').'/images/banner-blog.jpg';
	} else {
		$image = get_the_post_thumbnail_url();
	}

?>
<div class="full-width-thumbnail <?php if (is_page('blog')) : ?>blog<?php endif; ?> bgParallax" data-speed="4">
	</div>

<style type="text/css">
	.full-width-thumbnail {
		background-image: url('<?php echo $image; ?>');
		background-size: cover;
		background-position: center top;
	}
</style>