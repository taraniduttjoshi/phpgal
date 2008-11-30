<?php
// like i said, we must never forget to start the session
session_start();

// is the one accessing this page logged in or not?
if (!isset($_SESSION['adm_in'])
    || $_SESSION['adm_in'] !== true) {

    // not logged in, move to login page
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
	<title>Uploader @ <?php echo "$web_title"; ?></title>

</head>

<body>
	<h1>Upload A File, Man!</h1>
	<form enctype="multipart/form-data" action="crop.php" method="post">
		<input type="file" name="fupload" />
		<input type="string" name="cat" />
		<input type="submit" value="Go!" />
	</form>
	<a href="logout.php">Logout</a>
</body>
</html>