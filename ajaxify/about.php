<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
$cat=$_GET["cat"];
    require 'conf.php'; 
if (isset($cat)) {
	echo '
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
	<title>'; echo $web_title; echo '</title>
	
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
			<h1><a href="about.php?cat=theabout">'; echo $web_title; echo '</a></h1>
			<div id="web_desc">
				<h2>'; echo $web_desc; echo '</h2>
			</div>
		</div>
			<ul id="nav">
			<li><a href="about.php?cat=cat">about</a></li>';
			
			function folderlist(){
			 $startdir = 'gallery/';
			 $ignoredDirectory[] = '.';
			 $ignoredDirectory[] = '..';
			 $ignoredDirectory[] = '.svn';
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
echo '
			
			</ul>
	</div><!-- constant -->

<div id="content"> ';}  ?>
	<div id="ajax"> 
			<h3 id="cat_tit">about</h3>
		<div id="text">
			<p>
			<h3>Welcome!</h3>
				Hi there! My name is Jonathan Solichin. But you may call me Jon, or by my secret identity "<i>aerovolce</i>". I am a student designer currently attending AHS. Beside designing, I also enjoy taking pictures, which I post on 
				<a href="http://flickr.com/photos/aerovolce/">flickr</a>. 
				I also have a 
				<a href="http://novus.byvolce.com">blog</a>
				for you to enjoy. While not taking pictures or writting in my blog, I also enjoy going around 
				<a href="http://digg.com/users/aerovolce">digg</a>, 
				<a href="http://del.icio.us/seraphlm">delicious</a>, and using 
				<a href="http://twitter.com/aerovolce">twitter</a>. 
				You can contact me via 
				<a href="mailto:jonathanisnot@gmail.com">email</a>, 
				<a href="aim:goim?screenname=aerovolce">aim</a>, 
				<a href="mailto:jonathanisnot@sbcglobal.net">yahoo</a>, or 
				<a href="mailto:jonathanisnot@hotmail.com">hotmail</a>.
				And of course like any "hip" student, I have a 
				<a href="http://www.facebook.com/profile.php?id=705923551">facebook</a>. 
				Although by saying "hip", I might have been taken off the "hip" list. I hope to see you around :)
			</p>
		</div>
	</div>
<?php 
if (isset($cat)) {
	echo '
</div>
<div id="wrapper"></div>
</div><!--end all-->

</body>
</html>';} ?>