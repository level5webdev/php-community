<?php
$arquivo = 'imagens.jpg';
$maxWidth = 500;
$maxHeight = 250;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalHeight / $originalWidth;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if ($ratioDest > $ratio) {
  $finalWidth = $maxWidth * $ratio;
  $finalHeight = $maxHeight;
  $finalX = -(($finalHeight - $maxHeight) / 2);
} else {
  $finalWidth = $maxWidth / $ratio;
  $finalHeight = $maxHeight;
  $finalX = -(($finalWidth - $maxWidth) / 2);
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
  $imagem,
  $originalImg,
 $finalX,
  $finalY,
  0,
  0,
  $finalWidth,
  $finalHeight,
  $originalWidth,
  $originalHeight
);

header("Context-type: image/jpeg");
imagejpeg($imagem, ' nova_image.jpg', 100);
