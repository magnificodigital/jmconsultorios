<aside class="sidebar-site col-lg-3 <?php if (is_single()): ?>col-md-3<?php else : ?>col-md-4<?php endif ?> col-sm-12 col-xs-12 pull-right">
	<?php /* sidebar 1 */ if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    <?php endif; /* fim sidebar 1 */ ?>

    <?php if (is_single()) : ?>
	    
	    <div id="related-posts">
	    	<h4>Posts Relacionados</h4>
	    	<?php

	    		$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;

				$query = new WP_Query(
				    array(
				        'post_type' => 'post',
				        'cat' => $category_id,
				        'orderby' => 'rand',
				        'posts_per_page' => 4
				    )
				);
				if (have_posts()) : 

					echo '<div class="row">';

					while ($query->have_posts()) : $query->the_post(); ?>
				    
				<div class="related-post col-md-12 col-sm-6 col-xs-12">
				    <div class="row">
				    	<div class="col-xs-4">
				    		<a href="<?php the_permalink(); ?>">
				    			<?php the_post_thumbnail('related-post' , array( 'title' => get_the_title() , 'alt' => get_the_title())); ?>
				    		</a>
				    	</div>
				    	<div class="col-xs-8">
				    		<a href="<?php the_permalink(); ?>">
					    		<h5><?php the_title(); ?></h5>
					    	</a>
					    </div>
				    </div>
				</div>
				
				<?php endwhile; 

					echo '</div>';
				endif;
				wp_reset_query(); ?>

	    </div>

	<?php endif; ?>

</aside>