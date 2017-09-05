<?php

require_once __DIR__ . '/../vendor/autoload.php';

$htmlTempFile = __DIR__ . '/input.html';
$pdfTempFile = __DIR__ . '/output.pdf';

// changed the 2cm margin to 1cm, because the footer/header will take up 1cm as well
$options = [
    'format'=> 'A4',
    'margin' => '{"left": "0", "top": "1cm", "right": "0", "bottom": "1cm"}'
];

$pdfConverter = new \Anam\PhantomMagick\Converter();
$pdfConverter
    ->source($htmlTempFile)
    ->toPdf($options)
    ->save($pdfTempFile);