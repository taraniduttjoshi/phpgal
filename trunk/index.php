<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
    require 'conf.php'; 
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
	<title><?php echo "$web_title"; ?></title>
	
	<script type="text/javascript" src="js/jquery.pack.js"></script>
	<script type="text/javascript" src="js/jquery.history.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/fancy.css" media="screen" />

	<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

</head>
<body>

<div id="all">
	<div id="constant">
		<div id="heading">
			<h1><a href="about.php?cat=theabout"><?php echo "$web_title"; ?></a></h1>
			<div id="web_desc">
				<h2><?php echo $web_desc; ?></h2>
			</div>
		</div>
			<ul id="nav">
			<li><a href="about.php?cat=theabout">about</a></li>
			<?php
			
			function folderlist(){
			 $startdir = 'gallery/';
			 $ignoredDirectory[] = '.';
			 $ignoredDirectory[] = '..';
			  if (is_dir($startdir)){
				  if ($dh = opendir($startdir)){
					  while (($folder = readdir($dh)) !== false){
						  if (!(array_search($folder,$ignoredDirectory) > -1)){
							if (filetype($startdir . $folder) == "dir"){
								  $directorylist[$startdir . $folder]['name'] = $folder;
								  $directorylist[$startdir . $folder]['path'] = $startdir;
							  }
						  }
					  }
					  closedir($dh);
				  }
			  }
			return($directorylist);
			}

			$folders = folderlist();
			 foreach ($folders as $folder){
			   $path = $folder['path'];
			   $name = $folder['name'];

			   echo '<li><a href="category.php?cat=' . $name .'">' . $name . '</a></li>';
			 }
			?>
			</ul>
	</div><!-- constant -->

	<div id="content"> 
		<?php include 'about.php'; ?>
	</div>	
<div id="wrapper"></div>
</div><!--end all-->

</body>
</html>