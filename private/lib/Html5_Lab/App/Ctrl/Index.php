<?php declare(strict_types=1);
/**
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-24
 */


namespace SchrodtSven\Html5_Lab\App\Ctrl;
use SchrodtSven\Html5_Lab\Kernel\Controller;

class Index extends Controller
{
    public function default()
    {
            $this->parser->set('subtitle', 'It´s a meee ...');
            $this->parser->set('lang', 'de');
            $this->parser->set('keywords', 'Abc, deF, Foo, Baz');
            $this->parser->set('description', 'A long time ago in a galaxy far, far away...');
            $this->parser->set('mainContent', $this->parser->renderView($this->view));
            $this->parser->set('rendertime', '0.001');
            $this->parser->set('now', date('Y-m-dTH:i:s'));
            $this->parser->set('param', $this->getParam()->raw());
           echo  $this->parser->render();
    }


    public function __call(string $name, array $args)
    {
        echo '<code>' . self::class . ' :: __call() </code> being ' .$name;
        var_dump($this->getParam()->raw());
    }



    public function formdemo()
    {
        $this->preparse('HTML 5 new Form elements');
        $this->parser->set('mainContent', $this->parser->renderDoclet('Forms/Html_Five'));
        echo $this->parser->render();
    }

    public function widgetdemo()
    {
        //$this->preparse('HTML 5 based custom widgets');
       // $this->parser->set('mainContent', $this->parser->renderDoclet('Widgets/DummyCalculator'));
       $this->parser->set('subtitle', 'HC 23 &lt;HTML5 Calculator v.023&gt;');
       $this->parser->set('mainContent', $this->parser->renderView($this->view));
        echo $this->parser->render();
    }
}