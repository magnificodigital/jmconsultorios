<footer id="block-footer-site">
	<div class="container">
		<div class="row">			
			<div class="col-lg-2 col-md-12 col-sm-12 block-logo">
				<a href="<?php bloginfo('url') ?>" class="logo-footer" title="<?php echo get_bloginfo('name') ?>"></a>
			</div>				
			<div class="col-lg-2 col-md-12 col-sm-12">
				<div class="icones">
					<a href="https://www.facebook.com/jmconsultorioscompartilhados" target="_blank" class="social-link face" title="Facebook"></a>
					<a href="https://www.instagram.com/jmconsultorioscompartilhados/" target="_blank" class="social-link insta" title="Instagram"></a>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12 infos">
				<div class="row">
					<div class="col-sm-5 col-xs-12">
						<p class="bloco-endereco">Av. João Manoel 600 - 9º Andar<br />Torre B - Centro - Arujá</p>
					</div>
					<div class="col-sm-3 col-xs-12">
						<p class="bloco-telefone">(11) 4858-1081<br/></p>
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
	</div>
</div>

<div id="boxcontato" class="lightbox">
	<div class="center-all">
		<div class="box col-lg-4 center-x">
			<h2>Entre em contato conosco!</h2>
			<span class="closed"></span>
			<!--
			<div id="faz-bem-clinicas-formulario-de-contato-ec0e1f3fc893d9b4872c"></div><script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script><script type="text/javascript">new RDStationForms('faz-bem-clinicas-formulario-de-contato-ec0e1f3fc893d9b4872c-html', 'UA-47651710-1').createForm();</script>-->

			<div id="jm-consultorios-formulario-de-contato-6fcbe42c67f8ac283d2f"></div>
			<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
			<script type="text/javascript">
			  new RDStationForms('jm-consultorios-formulario-de-contato-6fcbe42c67f8ac283d2f-html', 'UA-47651710-1').createForm();
			</script>

			<style type="text/css">
				#conversion-jm-consultorios-formulario-de-contato-6fcbe42c67f8ac283d2f form input {
					border: 0 !important;
					background: #EEE !important;
				}
			</style>
			
		</div>
		<div class="mask"></div>
	</div>
</div>

<?php wp_footer(); ?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
<!--<script async type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>-->

<?php if (is_home()) { ?>

<script type="text/javascript" async>

	$(document).ready(function(){

		var tempo = 7000;

		$('#home .owl-carousel').owlCarousel({
			items: 1,
			dots: true,
			autoplay: true,
			dotsSpeed: 1000,
			autoplayTimeout: tempo,
			loop: true,
			responsiveClass:true,
			smartSpeed:800,
			mouseDrag: false,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut'
		});

		$("#vantagens .owl-carousel").owlCarousel({
			items: 1,
			dots: true,
			autoplay: true,
			dotsSpeed: 500,
			autoplayTimeout: 7500,
			loop: true,
			responsiveClass:true,
			smartSpeed:450,
			mouseDrag: false,
		});

	});

	$(document).ready(function(){

		$(".living-blocks .owl-carousel").owlCarousel({
			dots: false,
			nav: false,
			mouseDrag: false,
			margin: 30,
			loop: true,
			responsiveClass:true,
		    responsive:{
		    	0: {
		    		items: 1,
		    		margin: 0,
		    	},
		        480:{
		            items:2,
		            dots: true,
		        },
		        991:{
		            items:3,
		        }
		    }
		});
	});
</script>

<script type="text/javascript">
	//Menu
	$(function(){
		if ($(window).width() > 768) {
			var nav = $('header#block-header-site');
			var navaltura = $(nav).outerHeight();
			var altura = $(window).height();

			altura = altura - navaltura - 2;  //evita que na seção "vantagens" o menu suma

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

	//Box planos
	$(function(){
		var p = $('.1-plano, .3-plano');
		var pactive = $('.2-plano');

		$('.living-blocks').hover(function(){
			$(p).hover(function(){
				$(pactive).removeClass('active');
			});
		},function(){
			$(pactive).addClass('active');
		});
	});
	
	//scroll
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

	//vantagens
	$(document).ready(function(){
		var botao = $('.abrevantagens');
		$(botao).on('click',function(){
			$('#vantagens2').slideDown(500);
			var top = $('#vantagens2').offset().top;
			var alturaHeader = $('header#block-header-site').outerHeight();
			var rtop =  top - alturaHeader;
			$.scrollTo((rtop) || 0, 500);
		});
	});

	//planos
	$(function(){

		var boxplano = $('#boxplanos');

		var plano = '1';
		while (plano <= 4) {
			$('.plano'+plano+'.plan-block').click(function(){
				$(this).find('.content-livings').slideToggle(500,function(){
					$('.block-link').click(function(){
						boxplano.fadeIn('fast',function(){
							$('.closed, .mask').on('click',function(){
								boxplano.fadeOut('fast');
							});
							document.onkeyup=function(e) {
								if(e.which == 27){
									boxplano.fadeOut('fast');	
					      		}
				    		}
						});
					});
				});
			});
			plano++;
		}
	});

</script>


<?php } ?>


<!--Google Analytics-->
<script async>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93182334-1', 'auto');
  ga('send', 'pageview');
</script>


<?php if (is_page_template('page_vantagens.php')) : ?>

	<script type="text/javascript">
	//Menu
	$(document).ready(function(){

		if ($(window).width() > 768) {
			var nav = $('header#block-header-site');
			var navaltura = $(nav).outerHeight();
			var altura = $('header.content-page').outerHeight();

			nav.css({'background':'none'});
			nav.removeClass("menu-fixed");

			altura = altura - navaltura - 2;  //evita que na seção "vantagens" o menu suma

			$(window).scroll(function () { 
				if ($(this).scrollTop() > altura) { 
					nav.addClass("menu-fixed");
					nav.css({'background':'#FFF'}); 
				} else { 
					nav.css({'background':'none'});
					nav.removeClass("menu-fixed");
				} 
			});
		}
		
	});
</script>

<?php endif ?>


</body>
</html>