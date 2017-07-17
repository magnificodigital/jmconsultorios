<?php 
	
	//Verifica se não é a página de contato
	if (!is_page('contato')) {

		//Vê se é a página do blog
		if (is_page('blog')) {
			$image = get_bloginfo('template_url').'/images/banner-blog.jpg';
		} else {
			$image = get_the_post_thumbnail_url();
		} ?>

		<div class="full-width-thumbnail <?php if (is_page('blog')) : ?>blog<?php endif; ?> bgParallax" data-speed="4">
			</div>

		<style type="text/css">
			.full-width-thumbnail {
				background-image: url('<?php echo $image; ?>');
				background-size: cover;
				background-position: center top;
			}
		</style>

	<?php 
	//Se for, mostra o mapa
	} else { ?>

	<div id="map_contato">

		<iframe class="scrolloff" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.7975219256873!2d-46.33127528556197!3d-23.39554108476547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce87835c5159dd%3A0xb5fa9085f3064ae9!2sAv.+Jo%C3%A3o+Manoel%2C+600+-+Center+Ville%2C+Aruj%C3%A1+-+SP%2C+07432-575!5e0!3m2!1spt-BR!2sbr!4v1500058235337" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>


	<?php } ?>
