<?php
require 'conf.php';

session_start();

if (!isset($_SESSION['adm_in'])
    || $_SESSION['adm_in'] !== true) {

    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	
	<div id="all">
	<div id="constant">
		<div id="heading">
			<h1><a href="about.php?cat=cat"><?php echo "$web_title"; ?></a></h1>
			<div id="web_desc">
				<h2><?php echo $web_desc; ?></h2>
			</div>
		</div>
	</div>
	<div id="content">
		<h3 id="cat_tit">Login-er</h3>
		<div id="text">	
			<h3>Upload A File, Man!</h3>
			<form enctype="multipart/form-data" action="crop.php" method="post">
				<input type="file" name="fupload" />
				<input type="string" name="cat" value="category" />
				<input type="submit" value="Go!" />
			</form><br />
			<a href="logout.php">Logout</a>
		</div>
	</div>	
</body>
</html>