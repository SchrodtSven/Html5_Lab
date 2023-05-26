<?php declare(strict_types=1);
 /**
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */

chdir('../');
require_once 'private/lib/Html5_Lab/Autoload.php';

use SchrodtSven\Html5_Lab\Kernel\Frontend\PhtmlParser;

$parser = new PhtmlParser();

$parser->set('subtitle', 'It´s a meee ...');
$parser->set('lang', 'de');
$parser->set('keywords', 'Abc, deF, Foo, Baz');
$parser->set('description', 'A long time ago in a galaxy far, far away...');
$parser->set('mainContent', '<h2>Help me Darwin -  Darth Wintendo on a Mac <code>;-X</code>!    </h2>');
$parser->set('rendertime', '0.001');
echo $parser->render();