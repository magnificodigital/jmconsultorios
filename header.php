<?php $nome = get_bloginfo('name'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php 
			if (is_404()) {
				echo "Erro 404! Página não encontrada | ".get_bloginfo('name');
			} else {
				wp_title();
			} ?>
	</title>	

	<?php wp_head() ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/style.min.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png" type="image/x-icon">

</head>

<body <?php body_class() ?>>


<?php if (!is_home()) : ?>

<header id="block-header-site" <?php if (!is_home() && !is_page('medicos') && !is_page('paciente')) : ?> class="page" <?php endif; ?>>


<?php if (is_page('agendar-consulta')) : ?>

	<div class="col-lg-3 col-md-3">
		<a href="<?php echo get_bloginfo('url') ?>" class="link-logo"><h1 class="block-logo" title="<?php echo $nome ?>"><?php echo $nome ?></h1></a>
		<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
	</div>

<?php else : ?>
	<div class="container">

		<div class="row">

			<div class="col-lg-3 col-md-3">
				<a href="<?php echo get_bloginfo('url') ?>" class="link-logo"><h1 class="block-logo" title="<?php echo $nome ?>"><?php echo $nome ?></h1></a>
				<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>

			<div class="col-lg-9 col-md-9">
				<nav class="menu-site">
					<?php get_template_part('menu') ?>
				</nav>
			</div>
			
		</div>

	</div>
<?php endif; ?>

</header>
<?php endif; ?>



