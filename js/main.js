//Paralaxx
$(function(){
	if ($(window).width() > 767) {
	 	$('.bgParallax').each(function(){
	    	var $obj = $(this);
	    	$(window).scroll(function() {
				var yPos = -($(window).scrollTop() / $obj.data('speed')); 
				var bgpos = '50% '+ yPos + 'px';
				$obj.css('background-position', bgpos ); 
			}); 
		});	
	}
});

//Inicia fancybox
$("[data-fancybox]").fancybox();

//Doutores
/*
$(function(){
	$('.doutor').on('click', function(){
		//Troca o nome
		var nome = $(this).find('.nome').text();
		$('boxdoutor .name').html(nome);

		//Troca o CRM
		var cr = $(this).find('.cr').text();
		$('#boxdoutor .cr').html(cr);

		//Troca conteudo 
		var conteudo = $(this).find('.content').html();
		$('#boxdoutor .conteudo').html(conteudo);

		//Troca terms
		var terms = $(this).find('.terms').html();
		$('#boxdoutor .espec').html(terms);

		//Troca img
		var img = $(this).find('.thumbnail').text();
		$('#boxdoutor .thumb').attr('src',img).attr('alt',nome).attr('title',nome);

		$.fancybox.open({
			src  : '#boxdoutor',
			type : 'inline',
		});
	});
});*/


$(function(){
	$('.doutor').on('click',function(){
		var id = $(this).data('id');
		var destino = '#box-'+id+'';
		$.fancybox.open({
			src  : destino,
			type : 'inline',
		});
	});
});


//Menu mobile
$(function(){
	$('.menu-mobile').on('click',function(){
		$('nav.menu-site').toggleClass('ativa');
	});
});

$(document).ready(function(){

	var caixa = localStorage.fechacaixa;

	if (!caixa) {
		var intervalo = window.setInterval(function() {
			$('#doctor-wrapper').addClass('animated bounceInRight');
		}, 1000);
		window.setTimeout(function() {
		    clearInterval(intervalo);
		}, 1500);

		var intervalo2 = window.setInterval(function() {
			$('#doctor-wrapper #balao').addClass('animated fadeIn');
		}, 2000);
		window.setTimeout(function() {
		    clearInterval(intervalo2);
		}, 2500);

		$('#doctor-wrapper #close-box').on('click',function(){
			$('#doctor-wrapper').addClass('animated bounceOutRight');
			intervalosaida = window.setInterval(function(){
				$('#doctor-wrapper').removeClass('animated');
			},1000);
			localStorage.setItem('fechacaixa', true);
		});
		
	}

});