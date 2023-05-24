<?php

declare(strict_types=1);
/**
 * Entity class for HTML attributes 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Html5_Lab
 * @package Html5_Lab
 * @version 0.25
 * @since 2023-05-22
 */

namespace SchrodtSven\Html5_Lab\Kernel\Frontend;
use SchrodtSven\Html5_Lab\Kernel\StringType;
use SchrodtSven\Html5_Lab\Kernel\ListType;

class HtmlAttributes implements \Stringable
{
    /**
     * Container for attribute content (attributeName => attributeValue)
     *
     * @var ListType
     */
    protected ListType $container;

    /**
     * Constructor function
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->container = new ListType($data);
    }

    /**
     * Setter for named attribute
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function set(string $name, string $value): self
    {
        $this->container[$name] = $value;
        return $this;
    }

    /**
     * Getter for named attribute
     *
     * @param string $name
     * @return string
     */
    public function get(string $name) : string
    {
        return $this->container[$name] ?? '';
    }

    /**
     * Rendering attribute list - example:
     * <code>
     * 
     * id="FooxyZ" class="token"
     *
     * </code> 
     *
     * @return string
     */
    public function render(): string
    {
        if(!count($this->container))
            return '';
        $tmp = new ListType();
        $this->container->walk(function($value, $key) use($tmp) {
            $tmp->push(sprintf(HtmlSyntax::ATTRIB_ASSIGN, $key, $value));
        });

        return (string) $tmp->join((', '))->prepend(' ');
    }


    /**
     * Stringifying interceptor function
     *
     * @return string
     */
    public function __toString(): string 
    {
        return $this->render();
    }

}

