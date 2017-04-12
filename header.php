<?php $nome = get_bloginfo('name'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="
		<?php
			if (is_home()) {
				echo get_bloginfo('description');
			} else {
				echo get_the_title();
			} 
		?>
	">

	<title>
		<?php if (is_home() || is_404()) {
			echo $nome;
		} elseif (is_category()) {
			$categoria = get_the_category();
			$id_categoria = $categoria[0]->cat_ID;
			echo get_cat_name($id_categoria)." | ".get_bloginfo('name');
		} else {
			$titulo = get_the_title();
			if (is_single()) {
				echo $titulo." | Blog | ".get_bloginfo('name');
			} else {
				echo $titulo." | ".get_bloginfo('name');
			}
		} ?>
 	</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/style.min.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.svg" />

	<?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

<?php if (is_home()) {

	$linkhome = "#home";
	$vantagens = "#vantagens";
	$planos = "#planos";

} else {

	$linkhome = get_bloginfo('url');
	$vantagens = get_bloginfo('url')."/vantagens/";
	$planos = get_bloginfo('url')."/#planos";

} ?>


<header id="block-header-site" <?php if (!is_home()) : ?> class="page" <?php endif; ?>>

	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-3">
				<a href="<?php echo $linkhome ?>" class="link-logo"><h1 class="block-logo" title="<?php echo $nome ?>"><?php echo $nome ?></h1></a>
				<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>

			<div class="col-lg-9 col-md-9">
				<nav class="menu-site">
					<ul>
						<li><a href="<?php bloginfo('url') ?>/quem-somos/">Quem Somos</a></li>
						<li><a href="<?php echo $vantagens; ?>">Vantagens</a></li>
						<!--<li><a href="#">Nossas Unidades</a></li>-->
						<li><a href="<?php echo $planos; ?>">Planos</a></li>
						<li><a href="<?php bloginfo('url') ?>/blog/">Blog</a></li>
						<li><span class="open-contato">Contato</span></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</div>
</header>

