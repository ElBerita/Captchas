<?php
$chaine = '23456789ABCDEFGHIJKLMNPQRSTUVWXYZ!';
$image = imagecreatefrompng('image/fond.png');
$color = imagecolorallocate($image, 140, 0, 140);
$font = 'fonts/Cartoon.ttf';

function getCode($length, $chars) {
	$code = null;
	for ( $i=0; $i < $length; $i++ )
		{
		$code .= $chars { mt_rand( 0, strlen($chars) -1 )};
		}
	return $code;
	};
$code = getCode(6, $chaine);

$char1 = substr($code,0,1);
$char2 = substr($code,1,1);
$char3 = substr($code,2,1);
$char4 = substr($code,3,1);
$char5 = substr($code,4,1);
$char6 = substr($code,5,1);

imagettftext($image, 28, -10, 0, 45, $color, $font, $char1);
imagettftext($image, 28, 20, 50, 45, $color, $font, $char2);
imagettftext($image, 28, -35, 80, 45, $color, $font, $char3);
imagettftext($image, 28, 25, 130, 45, $color, $font, $char4);
imagettftext($image, 28, -15, 160, 45, $color, $font, $char5);
imagettftext($image, 28, 15, 210, 45, $color, $font, $char6);

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>