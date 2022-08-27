<?php

$lin= ((isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https' : 'http';
$lin .= '://' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
$lin .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);


$circular="$lin";


if(isset($_GET['path'])) {

$filename = $_GET["path"];
$image_s = imagecreatefromstring(file_get_contents($filename));
$width = imagesx($image_s);
$height = imagesy($image_s);
$newwidth = 190;
$newheight = 190;
$image = imagecreatetruecolor($newwidth, $newheight);
imagealphablending($image, true);
imagecopyresampled($image, $image_s, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
//create masking
$mask = imagecreatetruecolor($newwidth, $newheight);
$transparent = imagecolorallocate($mask, 205, 40, 40);
imagecolortransparent($mask,$transparent);
imagefilledellipse($mask, $newwidth/2, $newheight/2, $newwidth, $newheight, $transparent);
$red = imagecolorallocate($mask, 0, 0, 0);
imagecopymerge($image, $mask, 0, 0, 0, 0, $newwidth, $newheight, 100);
imagecolortransparent($image,$red);
imagefill($image, 110, 550, $red);
//output, save and free memory
header('Content-type: image/png');
imagepng($image);
//imagepng($image,'output.png');
imagedestroy($image);
imagedestroy($mask);


}
?>