<?php 

$cat = $_GET['cat'];
require 'conf.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<title><?php echo $cat . " @ $web_title"; ?></title>
	
	<link rel="stylesheet" type="text/css" href="css/fancy.css" media="screen" />
	
	<script type="text/javascript" src="js/jquery.pack.js"></script>
	<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			//Activate FancyBox
			$("ul#fancy a").fancybox({
				'hideOnContentClick': true,
				'overlayShow': true,
				 'zoomSpeedIn': 400, 
				 'zoomSpeedOut': 400, 
			});
		});
	</script>
	
	</head>
<body>

<div id="content">
	<h3 id="cat_tit"><?php echo $cat; ?></h3>	
	<?php
	if($cat=='about'){
		echo '<div id="about">' . $web_about . '</div>';
	}
	else {
		echo '<ul id="fancy">';
		$dir = $path_to_tn_directory;
		$scan = scandir($dir);	
		
		for ($i = 0; $i<count($scan); $i++) {
		  if ($scan[$i] != '.' && $scan[$i] != '..') {
			$filetype = array('.jpg', '.gif', '.png');
			foreach ($filetype as $types){
			  if (strpos($scan[$i], $types) !== false) {
				$filename = substr($scan[$i], 0, -4);
				echo '<li>
						<a href="' . $path_to_image_directory . $path_to_cat . $scan[$i] . '" rel="' . $cat . '" title="' . $filename .'">
						<img src="' . $dir . $scan[$i] . '" alt="' . $scan[$i] . '"/><span>'. $filename . '</span>
						</a>
					  </li>'
				;
			  }
			}
		  }
		};
		echo '</ul>';
	}
	?>
	
</div>
</body>
</html>
