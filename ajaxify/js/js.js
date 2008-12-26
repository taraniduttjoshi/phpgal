$(document).ready(function() {  

    $(document).pngFix(); 

	var title=document.title
	
	function fancy(){
		$("ul#fancy a").fancybox({

		});	
	}

	$('#content').wrap('<div id="content-wrapper"></div>');
	fancy()	
		
	$('#nav li a').ajaxify({
		loading_image: 'js/loading.gif',	
		loadHash: true,
		target: '#content',
		tagToload: '#ajax',
		onStart:
			function(){
				$('#content-wrapper').hide('fast');
				
				document.title=title;

				$('#wrapper').append('<span id="load">LOADING...</span>');
				$('#load').fadeIn('normal');
			},
		onSuccess:
			function(){
				
				var name = location.hash;
				var titl = name.substring(18) + ' @ ' + title;
				document.title=titl;
				
				fancy()
			},
		onComplete:		
			function(){
				setTimeout(function(){
					$('#content-wrapper').show('normal');
					$('#load').fadeOut('normal');
					$('#load').remove();
				} ,300)
			}

   });

	$('#heading h1 a').ajaxify({
		loading_image: 'js/loading.gif',	
		loadHash: true,
		target: '#content',
		tagToload: '#ajax',
		onStart:
			function(){
				$('#content-wrapper').hide('fast');
				
				document.title=title;

				$('#wrapper').append('<span id="load">LOADING...</span>');
				$('#load').fadeIn('normal');
			},
		onSuccess:
			function(){
				
				var name = location.hash;
				var titl = name.substring(18) + ' @ ' + title;
				document.title=titl;
				
				fancy()
			},
		onComplete:		
			function(){
				setTimeout(function(){
					$('#content-wrapper').show('normal');
					$('#load').fadeOut('normal');
					$('#load').remove();
				} ,300)
			}

   });

  }); 