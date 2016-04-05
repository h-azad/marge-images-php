<?php
$photoImage = ImageCreateFromJPEG('000.jpg');
imagealphablending($photoImage, true);

$logoImage = ImageCreateFromPNG('3.png');
$logoW = ImageSX($logoImage);
$logoH = ImageSY($logoImage);

ImageCopy($photoImage, $logoImage, 420, 350, 0, 0, $logoW, $logoH);

header('Content-Type: image/jpg');
ImageJPEG($photoImage); // output to browser

ImageDestroy($photoImage);
ImageDestroy($logoImage);
?>
