<?php  declare(strict_types=1);
/**
 * Trait for classes implementing functionality on applying callbacks to (internal) arrays
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
use SchrodtSven\Html5_Lab\Kernel\ListType;

trait CallbackArrayTrait
{
   
    public function walk(callable $callback): self
    {
        array_walk($this->current, $callback);
        return $this;
    }

    public function filter(callable $callback): self
    {
        return new ListType(\array_filter($this->content, $callback));
    }
}