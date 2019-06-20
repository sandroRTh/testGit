<?php

$file = "assets/imgs/landscape.jpg";

$width = 1080;
$height = 1080;

list($original_width, $original_height) = getimagesize($file);
$ratio = $original_width / $original_height;

if ($width / $height > $ratio)
{
	$width = $height * $ratio;
}

else
{
	$height = $width / $ratio;
}

$final_image = imagecreatetruecolor($width, $height);
$original_image = imagecreatefromjpeg($file);

imagecopyresampled($final_image, $original_image, 0, 0, 0, 0, $width, $height, $original_width, $original_height);

header("Content-Type: image/jpeg");
imagejpeg($final_image, null, 100);

/* para salvar a imagem ao invés de exibir na tela usa se no exemplo deste caso:
imagejpeg($arquivo_redimensionado,"diretorio para salvar o arquivo/nome_do_arquivo.extensão");
imagejpeg($final_image, "assets/imgs/downscaled_image.jpg") */
?>