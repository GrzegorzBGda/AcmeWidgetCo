<?php

require_once __DIR__ . '/../vendor/autoload.php';

$file = '../Documentation/architech-labs-code-test.pdf';
$filename = 'architech-labs-code-test.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
