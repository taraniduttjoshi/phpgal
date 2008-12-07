<?php
	// we must never forget to start the session
	session_start();

	if (isset($_SESSION['adm_in'])
		|| $_SESSION['adm_in'] == true) {

		header('Location: upload.php');
		exit;
	}

	$errorMessage = '';
	if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
		// check if the username and password combination is correct
		if ($_POST['txtUserId'] === 'aerovolce' && $_POST['txtPassword'] === 'pasword1') {
			// the username and password match, 
			// set the session
			$_SESSION['adm_in'] = true;
			
			// after login we move to the main page
			header('Location: upload.php');
			exit;
		} else {
			$errorMessage = 'Sorry, wrong username / password';
		}
	}
    require 'conf.php'; 
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Login-er @ <?php echo "$web_title"; ?></title>
	
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
			<?php if ($errorMessage != '') {?>
				<p align="center"><font color="yellow"><?php echo $errorMessage; ?></font></p>
			<?php } ?>
			<form action="" method="post" name="frmLogin" id="frmLogin">	 
				<p class="form"><label for="author"><small>My Name is(required)</small></label>
				<input name="txtUserId" type="text" id="txtUserId">
				</p>

				<p class="form"><label for="email"><small>Password</small></label>
				<input name="txtPassword" type="password" id="txtPassword">
				</p>
				
				<p class="form" id="submit">
				<input name="btnLogin" type="submit" id="btnLogin" tabindex="5" value="Login" />
				</p>
			</form>
		</div>
	</div>
</body>
</html>
