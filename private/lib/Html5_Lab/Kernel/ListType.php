<?php declare(strict_types=1);
/**
 *  Class handling list(s) as objects, offering fluent OOP interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2022-05-24
 */

 namespace SchrodtSven\Html5_Lab\Kernel;
use SchrodtSven\Html5_Lab\Kernel\Dry\IteratorTrait;

 class ListType implements \Iterator
 {
    use IteratorTrait;
    
    public function __construct(private array $current = [], private array $backup = [])
    {
        
    }

     public function raw(): array
     {
        return $this->current;
     }

     public static function createFromFile(string $fileName): self
     {
        return new self(file($fileName));
     }
 }