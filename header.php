<?php $nome = get_bloginfo('name'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	

	<title><?php 
		if (is_404()) {
			$title = "Erro 404! Página não encontrada | ".get_bloginfo('name');
		} else {
			$title = wp_title();
		}
	?></title>	

	<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css">

	<?php else: ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/style.min.css">

	<?php endif; ?>

<?php if (is_page()) : ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/galleria/galleria.classic.css">
<?php endif; ?>
	
	<link rel="stylesheet" href="http://magnificodigital.com/assets/createdby/createdby.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png">

	<style type="text/css">
		.scrolloff {pointer-events: none;}
	</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="block-header-site" <?php if (!is_home()) : ?> class="page" <?php endif; ?>>


<?php if (is_page('agendar-consulta')) : ?>

	<div class="col-lg-3 col-md-3">
		<a href="<?php echo get_bloginfo('url') ?>" title="<?php bloginfo('name'); ?>" class="link-logo"><div class="block-logo" title="<?php echo $nome ?>"><?php echo $nome ?></div></a>
		<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
	</div>

<?php else : ?>
	<div class="container">

		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-3">
				<a href="<?php echo get_bloginfo('url'); ?>" class="block-logo"></a>
				<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9">
				<nav class="menu-site">
					<?php get_template_part('menu'); ?>
				</nav>
			</div>
		</div>

	</div>
<?php endif; ?>

</header>



