<?php

$filename = $_POST['filename']; 
$cat = $_POST['cat'];

require 'conf.php';

/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */

	$targ_w = $targ_h = 150;
	$jpeg_quality = 100;

	$src = $path_to_image_directory . $path_to_cat . $filename;
	
	if(preg_match('/[.](jpg)$/', $filename)) {
      $img_r = imagecreatefromjpeg($src);
    } else if (preg_match('/[.](gif)$/', $filename)) {
      $img_r = imagecreatefromgif($src);
    } else if (preg_match('/[.](png)$/', $filename)) {
      $img_r = imagecreatefrompng($src);
    }
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
	$targ_w,$targ_h,$_POST['w'],$_POST['h']);
	
	if (!is_dir($path_to_tn_directory ))
    mkdir($path_to_tn_directory, 0777);
    
    imagejpeg($dst_r, $path_to_tn_directory . $filename, $jpeg_quality);

	header("location: ./");
//	header('Content-type: image/jpeg');
//	imagejpeg($dst_r,null,$jpeg_quality);
?>