<?php

$image = "assets/imgs/nature.jpg";
$watermark = "assets/imgs/youtube.jpg";

list($main_width, $main_height) = getimagesize($image);
list($watermark_width, $watermark_height) = getimagesize($watermark);

$final_image = imagecreatetruecolor($main_width, $main_height);
$original_image = imagecreatefromjpeg($image);
$watermark_image = imagecreatefromjpeg($watermark);

imagecopy($final_image, $original_image, 0, 0, 0, 0, $main_width, $main_height);
imagecopy($final_image, $watermark_image, 100, 100, 0, 0, $watermark_width, $watermark_height);

header("Content-Type: image/jpeg");
imagejpeg($final_image, null);
?>