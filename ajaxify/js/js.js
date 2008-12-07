$(document).ready(function() {  
	
	$('#nav li a').ajaxify({
	loadHash: true,
	target: '#content',
	tagToload: '#ajax'
   });

	$('#heading h1 a').ajaxify({
	loadHash: true,
	target: '#content',
	tagToload: '#ajax'
   });

  }); 
