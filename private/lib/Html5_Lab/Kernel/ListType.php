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

use SchrodtSven\Html5_Lab\Kernel\Dry\ArrayAccessTrait;
use SchrodtSven\Html5_Lab\Kernel\Dry\IteratorTrait;
use SchrodtSven\Html5_Lab\Kernel\Dry\StackOperationTrait;
use SchrodtSven\Html5_Lab\Kernel\Dry\CallbackArrayTrait;

class ListType implements \Iterator, \Countable, \ArrayAccess
{
   use IteratorTrait;
   use ArrayAccessTrait;
   use StackOperationTrait;
   use CallbackArrayTrait;

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


   public static function createFromJsonFile(string $fileName): self
   {
      return new self(json_decode(file_get_contents($fileName, true), true));
   }

   public function count(): int
   {
      return count($this->current);
   }

   public function join(string $glue): StringType
   {
      return new StringType(implode($glue, $this->current));
   }


   public function cutCol(string $colName): self
   {
      return new self(array_column($this->current, $colName));
   } 

   public function naturalSort(): self
   {
      natsort($this->current);
      return $this;
   }
}
