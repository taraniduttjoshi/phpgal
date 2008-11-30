<?php

$filename = $_POST['fupload'];
$cat = $_POST['cat'];

require 'conf.php';

if(isset($_FILES['fupload'])) {
	
	if(preg_match('/[.](jpg)|(gif)|(png)$/', $_FILES['fupload']['name'])) {
		
		$filename = $_FILES['fupload']['name'];
		$source = $_FILES['fupload']['tmp_name'];	
		
		if (!is_dir($path_to_image_directory . $cat ))
        mkdir($path_to_image_directory . $cat, 0777);
		
		$target = $path_to_image_directory . $path_to_cat . $filename;
	
		move_uploaded_file($source, $target);
	}
}

?>

<html>
	<head>
	
	<title>Cropper @ <?php echo "$web_title"; ?></title>
	
	<script src="js/jquery.pack.js"></script>
	<script src="js/jquery.Jcrop.pack.js"></script>
	<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />

	<script language="Javascript">

		$(function(){

			$('#cropbox').Jcrop({
				aspectRatio: 1,
				onSelect: updateCoords
			});

		});

		function updateCoords(c)
		{
			$('#x').val(c.x);
			$('#y').val(c.y);
			$('#w').val(c.w);
			$('#h').val(c.h);
		};

		function checkCoords()
		{
			if (parseInt($('#x').val())) return true;
			alert('Please select a crop region then press submit.');
			return false;
		};

	</script>

	</head>

	<body>

		<h1>Jcrop - Crop Behavior</h1>

		<!-- This is the image we're attaching Jcrop to -->
		<img src="<?php echo $path_to_image_directory . $path_to_cat . $filename; ?>" id="cropbox" />

		<!-- This is the form that our event handler fills -->
		<form action="function.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="hidden" value="<?php echo $cat; ?>" name="cat" />
			<input type="hidden" value="<?php echo $filename; ?>" name="filename" />
			<input type="submit" value="Crop Image" />
		</form>

		<a href="logout.php">Logout</a>

	</body>

</html>