<?php
/**
 * Trait for classes implementing interface \ArrayAccess
 * 
 * Providing possibility of accessing objects as arrays
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */



namespace SchrodtSven\Html5_Lab\Kernel\Dry;

trait ArrayAccessTrait
{
    


    public function offsetGet($offset): mixed
    {
        return $this->current[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->current[] = $value;
        } else {
            $this->current[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->current[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->current[$offset]);
    }

}