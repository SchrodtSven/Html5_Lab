<?php declare(strict_types=1);
/**
 *  Class handling string(s) as objects, offering fluent OOP interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2022-05-24
 */

namespace SchrodtSven\Html5_Lab\Kernel;
use SchrodtSven\Html5_Lab\Kernel\Dry\MultiByteStringTrait;

class StringType implements \Stringable
{
    use MultiByteStringTrait;
    
    public function __construct(private string $current = '', private string $backup = '')
    {
    }

    public function __toString(): string
    {
        return $this->current;
    }

    public function replace(string $find, string $replace = ''): self
    {
       $this->save();
        $this->current = str_replace($find, $replace, $this->current);
        return $this;
    }

    public function replaceMultiple(array $find, array $replace = ['']): self
    {
       $this->save();
        $this->current = str_replace($find, $replace, $this->current);
        return $this;
    }

    private function save(): void
    {
        $this->backup = $this->current;
        
    }

    public function rollback(): void
    {
        $this->current = $this->backup;
        
    }


    public function trim(): self
    {
        $this->save();
        $this->current = trim($this->current);
        return $this;
    }

    public function splitBy(string $separator): ListType
    {
        return new ListType(explode($separator, $this->current));
    }

    public function quote(string $mark = '"'): self
    {
        $this->enclose($mark, $mark);
        return $this;
    }

    public function enclose(string $start, string $end): self
    {
        $this->save();
        $this->current = sprintf('%s%s%s', $start, $this->current, $end);
        return $this;
    }

    public function prepend(string|StringType $begin): self
    {
        $this->save();
        $this->current = sprintf(
            '%s%s',
            $begin,
            $this->current
        );
        return $this;
    }

    public function append(string|StringType $end): self
    {
        $this->save();
        $this->current = sprintf(
            '%s%s',
            $this->current,
            $end
        );
        return $this;
    }

    public function upperFirst(): self
    {
        $this->save();
        $this->current = ucfirst($this->current);
        return $this;
    }


    public function lowerFirst(): self
    {
        $this->save();
        $this->current = lcfirst($this->current);
        return $this;
    }
}
