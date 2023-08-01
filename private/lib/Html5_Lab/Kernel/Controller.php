<?php declare(strict_types=1);
/**
 *  Abstract action (here: “app”) controller
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-30
 */
namespace SchrodtSven\Html5_Lab\Kernel;
use SchrodtSven\Html5_Lab\Kernel\ListType;
use SchrodtSven\Html5_Lab\Kernel\Frontend\PhtmlParser;

abstract class Controller
{
    

    protected PhtmlParser $parser;
    
    protected string $view = '  ';

    

    public function __construct(protected ?ListType $param = null)
    {
        if(is_null($this->param)) 
                            $this->param = new ListType();

        $this->parser = new PhtmlParser;
        
    }    


    

    /**
     * Get the value of param
     */
    public function getParam()
    {
        return $this->param;
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

    /**
     * Parsing current template / view with default contents
     *
     * @param string $subtitle
     * @FIXME
     * @return void
     */
    public function preparse(string $subtitle): void
    {
            $this->parser->set('subtitle', $subtitle);
            $this->parser->set('lang', 'de');
            $this->parser->set('keywords', 'Abc, deF, Foo, Baz');
            $this->parser->set('description', 'A long time ago in a galaxy far, far away...');
            
            $this->parser->set('rendertime', '0.001');
            $this->parser->set('now', date('Y-m-dTH:i:s'));
            $this->parser->set('param', $this->getParam()->raw());
        
    }
}