<footer id="block-footer-site">
	<div class="container">
		<div class="row">			
			<div class="col-lg-2 col-md-12 col-sm-12 block-logo">
				<a href="<?php bloginfo('url') ?>" class="logo-footer" title="<?php echo get_bloginfo('name') ?>"></a>
			</div>				
			<div class="col-lg-2 col-md-12 col-sm-12">
				<div class="icones">
					<a href="https://www.facebook.com/jmconsultorios" target="_blank" class="social-link face" title="Facebook"></a>
					<a href="https://www.instagram.com/jmconsultorios/" target="_blank" class="social-link insta" title="Instagram"></a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12 infos">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<p class="bloco-endereco">Av. João Manoel 600 - 9º Andar<br />Torre B - Centro - Arujá</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<p class="bloco-telefone pointer">Clique aqui para<br/>exibir o telefone</p>
					</div>
					<div class="col-sm-4 col-xs-12">
						<p class="bloco-horario">Seg - Sexta 8h até as 20h<br />aos Sábados 8h às 12h</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
</footer>

<div class="sub-footer">
	<div class="container">
		<p>© 2017 - <?php bloginfo('name') ?> | <a href="<?php bloginfo('url') ?>/politica-de-privacidade/">Política de Privacidade</a></p>
		<center>
			<a href="http://magnificodigital.com" target="_blank" class="createdmagnifico white"></a>
		</center>
	</div>
</div>

<?php wp_footer(); ?>

<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/swiper.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
<?php else: ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/scripts.min.js"></script>
<?php endif; ?>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
	new RDStationForms('jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7-html', 'UA-47651710-1').createForm();
	new RDStationForms('jm-consultorios-persona-2-contato-c9624debe9d0b7e3f4d5-html', 'UA-47651710-1').createForm();
	/*new RDStationForms('jm-consultorios-formulario-de-contato-6fcbe42c67f8ac283d2f-html', 'UA-47651710-1').createForm();
 	new RDStationForms('jm-consultorios-box-newsletter-d0de0f78f2aa58bdfee7-html', 'UA-47651710-1').createForm();*/
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.bloco-telefone').click(function(){
			$(this).html('(11) 4858-1081');
			$(this).removeClass('pointer');
		});
	}); 
</script>
<?php if (is_home() || is_front_page()) { ?>

<script type="text/javascript">

	$(document).ready(function(){

		var tempo = 7000;

		$('#home .owl-carousel').owlCarousel({
			items: 1,
			dots: true,
			autoplay: false,
			dotsSpeed: 1000,
			autoplayTimeout: tempo,
			loop: false,
			responsiveClass:true,
			smartSpeed:800,
			mouseDrag: false,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut'
		});
	});

	$(document).ready(function(){

		$('#photos-home .owl-carousel').owlCarousel({
			items: 1,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			autoplaySpeed: 750,
			loop: true,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			mouseDrag: true,
			touchDrag: true,
		});
	});


	/*Menu*/
	$(function(){
		if ($(window).width() > 768) {
			var nav = $('header#block-header-site');
			var navaltura = $(nav).outerHeight();
			var altura = $(window).height();

			altura = altura - navaltura - 2;  /*evita que na seção "vantagens" o menu suma*/

			$(window).scroll(function() { 
				if ($(this).scrollTop() > altura) { 
					nav.addClass("menu-fixed");
				} else { 
					nav.removeClass("menu-fixed");
				}
			});

			if ($(window).scrollTop() > altura) {
				nav.addClass("menu-fixed");
			} else {
				nav.removeClass("menu-fixed");
			}

		}
	});
	
	/*Scroll*/
	$(function(){
		var elements = $('#block-header-site a, #benefits, .link-logo');
		elements.click(function(e){
			var offThis = $(this.hash).offset().top;
			var alturaHeader = $('header#block-header-site').outerHeight();
			var menuScroll = offThis - alturaHeader;
			$.scrollTo((menuScroll) || 0, 500);
			e.preventDefault();
		});
	});

</script>


<?php
}
if (is_page('quem-somos')) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/galleria/galleria-1.5.7.js"></script>
<script type="text/javascript">
	Galleria.loadTheme("<?php bloginfo('template_url') ?>/galleria/galleria.classic.min.js");
	Galleria.configure({
	    transition: 'fade',
	    imageCrop: true
	});
	Galleria.run('.gallery',{
		transition: 'fade',
    	imageCrop: true
	});
</script>
<style type="text/css">
	.gallery {height: 500px; margin-top: 50px; display: block;}
	@media only screen and (max-width: 768px) {
		#galeria-page {height: 300px;}
	}
</style>
<?php } ?>

<!-- Código de monitoramento RD 
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1f43a906-f1a1-427f-bb5d-30ea68ae49f5-loader.js" ></script>-->

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100622361-1', 'auto');
  ga('send', 'pageview');
</script>

<?php if (is_page('contato')) { ?>
<script type="text/javascript">
	$('#exibetelefone').on('click touchstart', function(){
		$(this).html('(11) 4858-1081');
	});
</script>
<?php } ?>

<style type="text/css">

	#form-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 *,
	#form-jm-consultorios-persona-2-contato-c9624debe9d0b7e3f4d5 * {font-family: 'Open Sans', sans-serif !important;}

	#form-container-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 #conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section,
	#form-container-jm-consultorios-persona-2-contato-c9624debe9d0b7e3f4d5 #conversion-jm-consultorios-persona-2-contato-c9624debe9d0b7e3f4d5 section {
		padding: 0 !important;
	}

	#conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section input {
		background: #EEEEEE !important;
		border-radius: 0;
		padding: 10px !important;
		height: inherit !important;
	}

	#conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section div.field, #conversion-modal-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 .modal-content section form div.field,
	#conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section div.actions {
		float: left !important;
		width: 31% !important;
		margin-right: 10px !important;
	}
	 #conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section div.actions {
	 	padding: 0 !important;
	 }

	 #conversion-modal-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 .modal-content section div.actions .call_button, #conversion-modal-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 .modal-content section div.actions a.call_button, #conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section div.actions .call_button, #conversion-jm-consultorios-persona-2-box-newsletter-1217c321befd816477b7 section div.actions a.call_button {
 	    padding: 8px !important;
    	background: #1dbcaa !important;
    	font-weight: 400 !important;
    	text-transform: uppercase !important;
	 }
</style>

</body>
</html>

<?php $html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html); ?>
