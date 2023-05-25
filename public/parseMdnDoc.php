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
use SchrodtSven\Html5_Lab\Kernel\Frontend\HtmlElement;

$attr2Element = new ListType();
$global = new ListType();


$tmp = ListType::createFromFile('archive/all_attributes.txt');
foreach($tmp as $item) {

    $t = (new StringType($item))->splitBy("\t");
    if(str_starts_with($t[1], 'Global')) {
        $global->push((new StringType($t[0]))->trim())->quote("'");
    } else {
        //$attr2Element[$t[0]] = 
        $foo = (new StringType($t[1]))->replace('<')->replace('>')->trim();//->splitBy(',');
        $bar = $foo->splitBy(', ');
        $bar->walk(function(&$item) {
            $item = (new StringType($item))->quote("'");
        });
        //echo (new StringType($t[0]))->quote("'")->append(' => ');
        //echo $bar->join(', ')->enclose('[', '],');echo PHP_EOL;
    }
      //  print_r($bar);
        
    }
    

  //  die();
echo $global->join(', ')->enclose('[', ']');
//var_dump($global);
//var_dump($attr2Element);