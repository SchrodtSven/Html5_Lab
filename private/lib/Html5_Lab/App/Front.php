<?php

declare(strict_types=1);
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

    private string $defaultView;

    /**
     * Constructor function
     */
    public function __construct()
    {
        $this->parseRoute();
        $this->run();
    }

    /**
     * Parsing HTTP path to $CTRL->$ACTN($PARAMS)
     *
     * @return void
     */
    private function parseRoute(): void
    {
        $tmp = (new StringType($_SERVER['REQUEST_URI']))->splitBy('/')->trim();
        if ($tmp->count() > 1) {
            // Shifting url parts; adjusting case for Controller and action
            $this->ctrl = (new StringType($tmp->shift()))
                            ->lower()->upperFirst();
            $this->actn = (new StringType($tmp->shift()))
                            ->lower();
        } else {
            // Using defaults for controller & action
            $this->ctrl = new StringType(self::INDEX_CONTROLLER);
            $this->actn = new StringType(self::DEFAULT_ACTION);
        }

        $this->defaultView = $this->ctrl . \DIRECTORY_SEPARATOR . $this->actn;
        $this->parseParam($tmp);
    }

    /**
     * Parsing params snipped off of $CTRL & $ACTN, if any
     *
     * @param ListType $tmp
     * @return void
     */
    private function parseParam(ListType $tmp): void
    {
        $this->param = new ListType();
        while (count($tmp)) {
            $this->param[$tmp->shift()] = $tmp->shift() ?? null;
        }
    }

    /**
     * Running app controller 
     *
     * @return void
     */
    private function run() : void
    {
        $appControllername = (string) $this->getCtrl()
            ->prepend(self::APP_CONTROLLER_NAMESPACE);
        $action = (string) $this->getActn();
        try {
                $controller = new $appControllername($this->getParam());
                $controller->setView($this->defaultView);
                $controller->$action();
        } catch (\Error $e) { // differentiate status code by reason (\Error type)
                http_response_code(404);
                die('File not found ... - Controller ' . $e->getMessage());
        }
        
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
