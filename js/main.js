$(document).ready(function(){
	$('.open-contato').on('click',function(){
		$('#boxcontato').fadeIn('fast',function(){
			$('.closed, .mask').on('click',function(){
				$('#boxcontato').fadeOut('fast');
			});
			document.onkeyup=function(e) {
				if(e.which == 27){
					$('#boxcontato').fadeOut('fast');	
	      		}
    		};
		});
	});
});

//Menu mobile
$(function(){
	var tempo = 100;
	var nav = 'nav.menu-site';
	$('.menu-mobile').on('click',function(){
		$(nav).slideToggle(tempo,function(){
			$('section').click(function(){$(nav).slideUp(tempo);});
			$(nav+' ul li a,'+nav+ ' ul li span').click(function(){
				$(nav).slideUp(tempo);
			});
		});
	});
});

//Paralaxx
$(function(){
   $('.bgParallax').each(function(){
    	var $obj = $(this);
    	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
		var bgpos = '50% '+ yPos + 'px';
		$obj.css('background-position', bgpos ); 
	}); 
   });	
});

