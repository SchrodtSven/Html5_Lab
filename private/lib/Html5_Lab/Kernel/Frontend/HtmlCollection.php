<?php declare(strict_types=1);
/**
 * Entity class for HTML collections - example:
 * <code>
 * 
 *  <li>Foo</li><li>bar</li> ...
 * 
 * </code>
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WikiFoo
 * @package P7WikiFoo
 * @version 0.25
 * @since 2023-05-23
 */

namespace SchrodtSven\P7WikiFoo\Kernel\Frontend;
use SchrodtSven\P7WikiFoo\Internal\Type\StringType;
use SchrodtSven\P7WikiFoo\Internal\Type\ListType;
use SchrodtSven\Html5_Lab\Kernel\Dry\IteratorTrait;

class HtmlCollection
{
    use IteratorTrait;
        
}

