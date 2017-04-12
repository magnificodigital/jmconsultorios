<?php get_header(); ?>

<main id="content" style="">

	<div class="full-width-thumbnail bgParallax blog" data-speed="4" style="background-image: url('<?php bloginfo('template_url') ?>/images/banner-blog.jpg');"></div>

	<div class="container top-box-newsletter">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<p>Assine para receber nossas novidades</p>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 content-form">

				<div id="jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				  new RDStationForms('jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7-html', 'UA-47651710-1').createForm();
				</script>

				<style type="text/css">
					
					#form-container-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 #conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section {padding: 0 !important;}
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 {background: none !important;}
					#form-container-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 * {font-family: 'Open Sans', sans-serif !important;}
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field,
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions,
					#conversion-modal-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 .modal-content section form div.field,
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions {float: left !important; width: 33% !important; padding: 0 !important;}
					#form-container-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 #conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 #conversion-form-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 div.actions input.call_button {
						padding: 8px !important;
						background: #1dbcaa !important;
						font-weight: 400 !important;
						text-transform: uppercase !important;
					}

					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field input,
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee72 section div.actions .call_button {
						border: 0 !important;
						border-radius: 0 !important;
					}

					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field input {background: #EEE !important; padding: 10px !important; height: inherit !important;}

					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field,
					#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions {
						padding: 0 10px !important;
					}

					@media (max-width: 768px) {
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field input,
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions .call_button {font-size: 14px !important;}

						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field,
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions {padding: 0 5px !important}

						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field,
						#conversion-modal-faz-bem-clinicas-box-newsletter-19b0fcc13437fa976642 .modal-content section form div.field {
							width: 50% !important;
						}

						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions {width: 100% !important; margin-top: 10px !important;}
					}

					@media (max-width: 543px) {
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field,
						#conversion-modal-faz-bem-clinicas-box-newsletter-19b0fcc13437fa976642 .modal-content section form div.field {
							width: 100% !important;
							margin-bottom: 10px !important;
						}
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions {margin-top: 0 !important;}
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.field input,
						#conversion-jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7 section div.actions .call_button {
							text-align: center !important;
						}
					}

				</style>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<nav class="breadcrumbs col-xs-12">
				<p>Você está em:</p>
				<ol>
					<li><a href="<?php bloginfo('url') ?>"><i class="fa fa-home"></i></a></li>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ol>
			</nav>

			<section class="content-page col-lg-9 col-md-8 col-sm-12 col-xs-12">

					<section id="posts-blog">
						<div class="container-fluid">

							<?php $args = array(
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => '10',
								);
							?>
							<?php query_posts($args); ?>


							<?php if(have_posts()): ?>
							<?php while(have_posts()):the_post(); ?>

							
								<article class="single-post row">
									
									<div class="post-thumbnail col-lg-5 col-md-12 col-sm-12">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('blog-post') ?>
										</a>
									</div>
								
									<div class="post-content col-lg-7 col-md-12 col-sm-12">

										<header>
											<p style="margin-bottom: 0;"><span class="date">Postado em <?php the_time('d/m/Y') ?></span></p>
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</header>

										<div class="content">
											<?php the_excerpt(); ?>
											<a href="<?php the_permalink(); ?>" class="read-more">Leia mais</a>
										</div>

									</div>

									</a>

								</article>

					
							<?php endwhile; ?>
							<?php endif; ?>


						</div>
					</section>
			</section>

			<?php get_sidebar(); ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>
