<?php declare(strict_types=1);
/**
 *  Parser for templates in alternative PHP syntax (´PHTML´)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2022-05-24
 */

namespace SchrodtSven\Html5_Lab\Kernel\Frontend;
use SchrodtSven\Html5_Lab\Kernel\StringType;
use SchrodtSven\Html5_Lab\Kernel\ListType;

class PhtmlParser
{
    
    private string $tplDir = 'private/lib/Html5_Lab/App/Tpl/';

    private string $tpl = 'Document.generic';

    private string $tplSuffix = '.phtml';

    public function __construct(private ?ListType $content = null)
    {
        if(is_null($this->content)) 
            $this->content = new ListType();
    }

    public function set(string $name, string $value): self
    {
        $this->content[$name] = $value;
        return $this;
    }

    public function get(string $name): string
    {
        return $this->content[$name] ?? '';
    }

    public function __get(string $name): mixed
    {
        return $this->content[$name] ?? '';
    }

    public function __set(string $name, mixed $value): void
    {
        $this->content[$name] = $value;
    }

    public function render(): string
    {
        ob_start();
        require $this->tplDir . $this->tpl . $this->tplSuffix;
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
        
    }

}