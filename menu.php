<?php if (is_page('medicos')) {

	$linkhome = "#home";
	$vantagens = "#vantagens";
	$planos = "#planos";

} else {

	$linkhome = get_bloginfo('url');
	$vantagens = get_bloginfo('url')."/vantagens/";
	$planos = get_bloginfo('url')."/medicos/#planos";

} ?>

<?php if (!is_page('paciente') && !is_page('agendar-consulta')) : ?>

<ul>
	<li><a href="<?php bloginfo('url') ?>/quem-somos/">Quem Somos</a></li>
	<?php if (!is_home()) : ?>
		<li><a href="<?php echo $vantagens; ?>">Vantagens</a></li>
		<li><a href="<?php echo $planos; ?>">Planos</a></li>
	<?php endif; ?>
	<li><a href="<?php bloginfo('url') ?>/blog/">Blog</a></li>
	<li><span class="open-contato">Contato</span></li>
</ul>

<?php endif; ?>
<?php wp_reset_query() ?>