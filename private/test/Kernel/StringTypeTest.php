<?php declare(strict_types=1);
/**
 * Testing, if PHPUnit tests will work
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */



use PHPUnit\Framework\TestCase;
use SchrodtSven\Html5_Lab\Kernel\StringType;

class StringTypeTest extends TestCase
{
    public function test(): void
    {
        $find = '<';
        $replace = '';
        $subject = '<Foo>';
        $expected = 'Foo';
        $item = new StringType($subject);
        $this->assertTrue($expected === (string) $item->replace('<')->replace('>'));
    }

   
}
