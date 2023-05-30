<?php declare(strict_types=1);
/**
 *  Very small-scale front controller
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.1
 * @since 2023-05-30
 */

namespace SchrodtSven\Html5_Lab\App;

use SchrodtSven\Html5_Lab\Kernel\ListType;
use SchrodtSven\Html5_Lab\Kernel\StringType;

class Front
{

    public const INDEX_CONTROLLER = 'Index';
    public const DEFAULT_ACTION = 'default';

    public const APP_CONTROLLER_NAMESPACE = 'SchrodtSven\Html5_Lab\App\Ctrl\\';

    public const CONTROLLER_SUFFIX = '.php';

    private StringType $ctrl;
    private StringType $actn;
    private ListType $param;

    public function __construct()
    {
       $tmp = (new StringType($_SERVER['REQUEST_URI']))->splitBy('/')->trim();
       if($tmp->count() > 1) {
            $this->ctrl = (new StringType($tmp->shift()))->lower()->upperFirst();
            $this->actn = (new StringType($tmp->shift()))->lower();
       
       } else {
            $this->ctrl = new StringType(self::INDEX_CONTROLLER);
            $this->actn = new StringType(self::DEFAULT_ACTION);
       }

       $this->parseParam($tmp);
       $this->run();

    }

    private function parseParam(ListType $tmp): void
    {
        $this->param = new ListType();
        while(count($tmp)) {
            $this->param[$tmp->shift()] = $tmp->shift() ?? null;
        }
    }

    private function run()
    {
        $appControllername = (string) $this->getCtrl()
                                                ->prepend(self::APP_CONTROLLER_NAMESPACE);
                                                //->append(self::CONTROLLER_SUFFIX);
        $action = (string) $this->getActn();
        
        (new $appControllername($this->getParam()))->$action();

    }

    /**
     * Get the value of ctrl
     *
     * @return StringType
     */
    public function getCtrl(): StringType
    {
        return $this->ctrl;
    }

    /**
     * Set the value of ctrl
     *
     * @param StringType $ctrl
     *
     * @return self
     */
    public function setCtrl(StringType $ctrl): self
    {
        $this->ctrl = $ctrl;

        return $this;
    }

    /**
     * Get the value of actn
     *
     * @return StringType
     */
    public function getActn(): StringType
    {
        return $this->actn;
    }

    /**
     * Set the value of actn
     *
     * @param StringType $actn
     *
     * @return self
     */
    public function setActn(StringType $actn): self
    {
        $this->actn = $actn;

        return $this;
    }

    /**
     * Get the value of param
     *
     * @return ListType
     */
    public function getParam(): ListType
    {
        return $this->param;
    }

    /**
     * Set the value of param
     *
     * @param ListType $param
     *
     * @return self
     */
    public function setParam(ListType $param): self
    {
        $this->param = $param;

        return $this;
    }
 }