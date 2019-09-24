<?php

use JamesL\CodingStandards\Commands\Config\Config;

$appDir = ['src'];

return [
    'code-sniffer' => new Config($appDir),
    'php-stan' => new Config($appDir),
    'mess-detector' => new Config($appDir)
];