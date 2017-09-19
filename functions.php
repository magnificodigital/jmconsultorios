<?php 

require_once 'inc/class.taxonomy-single-term.php';

//aumenta o resumo do blog
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//post thumbnails
add_theme_support('post-thumbnails');
add_image_size('single-post',1500,350,true);
add_image_size('blog-post',450,338,true);
add_image_size('related-post',95,95,true);

//Para doutores
add_image_size('doutor-page',160,160,true);
add_image_size('doutor-box',210,300,true);

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
		    width: 120px;
        height: 50px;
		    background-size: 116px;
		}
   </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Doutores
$args = array(
    'labels' => array(
        'name' => __('Doutores'),
        'singular_name' => __('Doutor'),
        'menu_name' => 'Doutores',
        'all_items' => 'Todos os doutores'
    ),
    'public' => true,
    'rewrite' => array('slug' => 'doutor', 'with_front' => false),
    'has_archive' => true,     
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
);    

register_post_type('doutor',$args);

flush_rewrite_rules();

$labels = array(
    'name'              => __( 'Especialidades'),
    'singular_name'     => __( 'Especialidade'),
    'search_items'      => __( 'Procurar especialidade'),
    'all_items'         => __( 'Todas especialidades'),
    'parent_item'       => __( 'Especialidade pai'),
    'parent_item_colon' => __( 'Parent Genre:'),
    'edit_item'         => __( 'Editar especialidade'),
    'update_item'       => __( 'Atualizar especialidade'),
    'add_new_item'      => __( 'Adicionar nova especialidade'),
    'new_item_name'     => __( 'Novo nome de especialidade'),
    'menu_name'         => __( 'Especialidades'),
);

$args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'especialidade' ),
);

register_taxonomy( 'especialidade', array( 'doutor' ), $args );

$labels = array(
    'name'              => __( 'Gênero'),
    'singular_name'     => __( 'Gênero'),
    'search_items'      => __( 'Procurar gênero'),
    'all_items'         => __( 'Todas os gêneros'),
    'edit_item'         => __( 'Editar gênero'),
    'update_item'       => __( 'Atualizar gênero'),
    'add_new_item'      => __( 'Adicionar novo gênero'),
    'menu_name'         => __( 'Gêneros')
);

$args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'genero' ),
);

register_taxonomy('genero', array( 'doutor' ), $args );
$custom_tax_mb = new Taxonomy_Single_Term('genero', array('doutor'), 'radio');

//meta boxes in single post pages
$prefix = 'jm_'; 
$meta_box = array(
    'id' => 'my-meta-box',
    'title' => 'Dados',
    'page' => 'doutor', //show in listings custom post type only
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Número de Registro:',
            'id' => $prefix . 'cr_doutor',
            'type' => 'text',
            'placeholder' => 'CRM-SP 999999'
        ),
    )
);

function mytheme_show_box() {
    global $meta_box, $post; 
    // Use nonce for verification
    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';  
    echo '<table class="form-table">';   
    foreach ($meta_box['fields'] as $field)
    {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);    
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" placeholder="', $field['placeholder'] ,'" />', '<br />', $field['desc'];
            break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
            break;
            case 'select':
                echo '<select name="', $field['id'], '" id="', $field['id'], '">';
                foreach ($field['options'] as $option) {
                    echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
                }
                echo '</select>';
            break;
            case 'radio':
                foreach ($field['options'] as $option) {
                    echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
                }
            break;
            case 'checkbox':
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
            case 'file':
                echo '<input type="file" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' "' : '', ' />';
            break;
        }
        echo '<td>',
        '</tr>';
    }
    echo '</table>';
}
function mytheme_save_data($post_id)
{
    global $meta_box; 
    // verify nonce
    if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    } 
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    } 
    // check permissions
    if ('page' == $_POST['post_type'])
    {
        if (!current_user_can('edit_page', $post_id))
        {
            return $post_id;
        }
    } 
    elseif (!current_user_can('edit_post', $post_id))
    {
        return $post_id;
    }

    foreach ($meta_box['fields'] as $field)
    {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];

        if ($new && $new != $old)
        {
            update_post_meta($post_id, $field['id'], $new);
        }
        elseif ('' == $new && $old)
        {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}
function mytheme_add_box()
{
    global $meta_box; 
    add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

add_action('admin_menu', 'mytheme_add_box');
add_action('save_post', 'mytheme_save_data');
