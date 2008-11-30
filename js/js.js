$(document).ready(function() {
	
var title=document.title
	
	function fancy(){
		$("ul#fancy a").fancybox({
			'hideOnContentClick': true,
			'overlayShow': true,
			'zoomSpeedIn': 400, 
			'zoomSpeedOut': 400, 
		});	
	}

	$('#content').wrap('<div id="content-wrapper"></div>');
	fancy()	
	
	function pageload(hash) {
		if(hash) {
			
			$("#content-wrapper").load(hash + " #content",'',function(){		
				$('#content-wrapper').show('normal');
				$('#load').fadeOut('normal');
				
				titl= hash.substring(17) + ' @ ' + title
				document.title=titl
				
				fancy()		
				
			});
		} 
		
		else {
			$("#content-wrapper").load("index.html #content", '', function(){
				
			}); //default
				
		}
	}

	$.historyInit(pageload);			   

	$('#nav li a').click(function(){
		
		var hash = $(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		$('#content-wrapper').hide('fast',function(){$.historyLoad(hash)});
		$('#load').remove();
		
		document.title=title;

		$('#wrapper').append('<span id="load">LOADING...</span>');
		$('#load').fadeIn('normal');
		
		return false;
		
	});
	
	$('h1 a').click(function(){
		
		var hash = $(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		$('#content-wrapper').hide('fast',function(){$.historyLoad(hash)});
		$('#load').remove();
		
		document.title=title;

		$('#wrapper').append('<span id="load">LOADING...</span>');
		$('#load').fadeIn('normal');
		
		return false;
		
	});

});