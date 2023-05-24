<?php

declare(strict_types=1);
/**
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */


require_once 'private/lib/Html5_Lab/Autoload.php';
use SchrodtSven\Html5_Lab\App\Config;
use SchrodtSven\Html5_Lab\Kernel\StringType;
use SchrodtSven\Html5_Lab\Kernel\ListType;

$list =ListType::createFromFile('archive/html_elements');

foreach($list as $item) {
    echo (new StringType($item))
        ->trim()
        ->quote("'")
        ->replace('<')
        ->replace('>');
    echo ', ';
}