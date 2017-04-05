<?php 

add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
function meu_tema_enqueue_scripts() {
	wp_enqueue_script('scripts', get_template_directory_uri()."/assets/scripts.min.js", array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'outro_valor' => 1234));
}

add_action('wp_ajax_envia_email', 'funcao_envia_email');
add_action('wp_ajax_nopriv_envia_email', 'funcao_envia_email');
function funcao_envia_email() {

	// Modificar o email do remetente para outro email
	add_filter( 'wp_mail_from', 'ewp_wp_mail_from' );
	function ewp_wp_mail_from() {
	    return "contato@".get_bloginfo('url');
	}
	 
	// Modificar o nome do remetente
	add_filter( 'wp_mail_from_name', 'ewp_ep_mail_from_name' );
	function ewp_ep_mail_from_name() {
	    return "Contato - ".get_bloginfo('name'); // Poderia também usar get_bloginfo( 'name' );		 
	}

	//Pega os dados 
	parse_str($_REQUEST['dados'], $array_dados);

	if (!isset($array_dados['nomecontato']) OR empty($array_dados['nomecontato']) OR 
		!isset($array_dados['emailcontato']) OR empty($array_dados['emailcontato']) OR
		!isset($array_dados['telcontato']) OR empty($array_dados['telcontato'])) {
		
		echo json_encode(array('class' => 'alert-danger', 'mensagem' => 'Digite todos os campos', 'status' => false));

	} elseif(!is_email($array_dados['emailcontato'])) {

		echo json_encode(array('class' => 'alert-danger', 'mensagem' => 'Digite o e-mail corretamente', 'status' => false));

	} else {

		//Fazer a mensagem com uma variavel $mensagem
		$mensagem = "Nome: ".$array_dados['nomecontato']."\n "."Email: ".$array_dados['emailcontato']."\n"."Telefone: ".$array_dados['telcontato'];

		if (wp_mail('caio@magnificodigital.com', get_bloginfo('name'), $mensagem)) {
			echo json_encode(array('class' => 'alert-success', 'mensagem' => 'Mensagem enviada!', 'status' => false));
		} else {
			echo json_encode(array('class' => 'alert-danger', 'mensagem' => 'Não foi possível enviar a mensagem', 'status' => true));
		}

	}

	wp_die();

}


//aumenta o resumo do blog
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//post thumbnails
add_theme_support('post-thumbnails');
add_image_size('single-post',1500,350,true);
add_image_size('blog-post',450,338,true);

//Registra sidebar
function widgets_init() {
//widget "Sidebar 1"
register_sidebar( array(
	'name' => 'Sidebar 1',
	'id' => 'sidebar-1',
	'description' => 'Sidebar 1',
	'before_widget' => ' <div id="%1$s" class="widget %2$s">',
	'after_widget'  => '<div style="clear:both;"></div></div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4> ',
) );
} //finaliza widget "Sidebar 1"
add_action( 'widgets_init', 'widgets_init' );
/* finaliza sidebar */



// Mover os scripts para o footer
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

//Troca o logo
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
		    background-image: url('<?php bloginfo('template_url') ?>/images/logo.svg');
		    width: 250px;
		    background-size: 250px;
		}
   </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

