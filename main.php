<?php
// $bmpFilePath = 'mario.png';
// $svgFilePath = 'mario1.svg';

// // Use Potrace to convert BMP to SVG
// exec("potrace $bmpFilePath -s -o $svgFilePath");

// // Check if the SVG file was created successfully
// if (file_exists($svgFilePath)) {
//     // Process the SVG file or output it as needed
// } else {
//     // Handle conversion failure
// }

require_once 'Potracio.php';
use Potracio\Potracio as Potracio;

$inputfile = "3.jpg";
$filename = "3.svg";

$pot = new Potracio();
$pot->loadImageFromFile($inputfile);
$pot->process();
/*
header('Content-type: image/svg+xml');
echo '<?xml version="1.0" standalone="no"?>
   <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
   "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
echo $pot->getSVG(3);*/

$content = '<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
// $content = $content . $pot->getSVG(3, "curve");
$content = $content . $pot->getSVG(3);

file_put_contents($filename, $content);