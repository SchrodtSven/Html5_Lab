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

    private string $viewDir = 'private/lib/Html5_Lab/App/Views/';

    private string $tpl = 'Document.generic';

    private string $view = '';

    private string $tplSuffix = '.phtml';

    public function __construct(private ?ListType $content = null)
    {
        if(is_null($this->content)) 
            $this->content = new ListType();
    }

    public function set(string $name, mixed $value): self
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


    //@FIXME 3xrender*()
    public function render(): string
    {
       return $this->renderInternal($this->tplDir . $this->tpl);
    }

    public function renderView(string $viewName): string
    {
        return $this->renderInternal($this->viewDir . $viewName );
    }
        
    public function renderDoclet(string $fileName): string
    {
        $tmp = (new self())->setTpl($fileName);
        return $tmp->render();
    }

    private function renderInternal(string $fullPath): string
    {
        ob_start();
        require $fullPath . $this->tplSuffix;
        $view = ob_get_contents();
        ob_end_clean();
        return $view;
    }
    /**
     * Get the value of tpl
     *
     * @return string
     */
    public function getTpl(): string
    {
        return $this->tpl;
    }

    /**
     * Set the value of tpl
     *
     * @param string $tpl
     *
     * @return self
     */
    public function setTpl(string $tpl): self
    {
        $this->tpl = $tpl;
        return $this;
    }

    /**
     * Get the value of view
     *
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * Set the value of view
     *
     * @param string $view
     *
     * @return self
     */
    public function setView(string $view): self
    {
        $this->view = $view;

        return $this;
    }
}