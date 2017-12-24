<?php

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$args = array(
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 9999,
	'paged'=>$paged,
);

$posts = array('');

global $loop;
$loop = new WP_query( $args );

if($loop->have_posts()) :
while($loop->have_posts()):$loop->the_post();


	$post = array(
		'title' => get_the_title(),
		'time' => get_the_time('d / M / Y'),
		'excerpt' => get_the_excerpt(),
		'thumb' => get_the_post_thumbnail_url(),
	);

	array_push($posts, $post);


endwhile;
endif;

echo json_encode($posts);

?>