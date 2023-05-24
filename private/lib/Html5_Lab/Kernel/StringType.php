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

 class StringType implements \Stringable
 {
    public function __construct(private string $current = '', private string $backup = '')
    {
        
    }

    public function __toString(): string
    {
        return $this->current;
    }

    public function replace(string $find, string $replace=''): self
    {
        $this->save();
        $this->current = str_replace($find, $replace, $this->current);
        return $this;
    }

    private function save(): self
    {
        $this->backup = $this->current;
        return $this;
    }

    public function rollback(): self
    {
        $this->current = $this->rollback();
        return $this;
    }


    public function trim(): self
    {   
        $this->save();
        $this->current = trim($this->current);
        return $this;
    }

    public function quote(string $mark ='"'): self
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
 }