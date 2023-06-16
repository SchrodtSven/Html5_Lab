<?php
require_once 'private/lib/Html5_Lab/Autoload.php';
use SchrodtSven\Html5_Lab\Kernel\StringType;

$raw = file_get_contents('archive/data2parse/fvl2.html');

$raw =  strip_tags($raw, ['pre', 'a', 'br']);

$foo = (new StringType($raw))->replaceMultiple(
    [
       'Felix von Leitner in'
    ],
[
    '<author>Felix von Leitner in </author>'
]);

echo $foo;