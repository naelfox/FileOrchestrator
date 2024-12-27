<?php

require_once __DIR__ . './../vendor/autoload.php';

use FileOrchestrator\Text;


$string = "Hello, World!";
$start = 1;
$end = 5;

// echo "Testando método get:\n";
// echo StrTool::get($string, $start, $end) . "\n"; // Saída esperada: "Hello"

$string = "12345";
$length = 10;
$padString = '0';
$padType = STR_PAD_LEFT;

echo "Testando método format:\n";
echo Text::format($string, $length, $padString, $padType) . "\n"; // Saída esperada: "0000012345"
