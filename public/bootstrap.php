<?php declare(strict_types=1);
 /**
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */

//chdir('../');
require_once 'private/lib/Html5_Lab/Autoload.php';

use SchrodtSven\Html5_Lab\Kernel\Frontend\PhtmlParser;
use SchrodtSven\Html5_Lab\App\Front;

// $parser = new PhtmlParser();

// $parser->set('subtitle', 'It´s a meee ...');
// $parser->set('lang', 'de');
// $parser->set('keywords', 'Abc, deF, Foo, Baz');
// $parser->set('description', 'A long time ago in a galaxy far, far away...');
// $parser->set('mainContent', $parser->renderDoclet('Forms/First'));
// $parser->set('rendertime', '0.001');
// $parser->set('now', date('Y-m-dTH:i:s'));
// echo $parser->render();


$f = new Front();
//var_dump($f);