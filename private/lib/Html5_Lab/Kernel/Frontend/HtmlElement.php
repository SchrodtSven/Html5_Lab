<?php

declare(strict_types=1);
/**
 * Entity class for HTML elements 
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

class HtmlElement
{
    /**
     * Flag for non-empty|empty
     *
     * @var boolean
     */
    protected bool $isEmpty = false;

    /**
     * Constructor function
     *
     * @param string $name
     * @param mixed $content
     * @param HtmlAttributes|null $attributes
     */
    public function __construct(
                                protected string $name, 
                                protected mixed $content = '',
                                protected ?HtmlAttributes $attributes = null
    ) 
    {
        if(is_null($this->attributes))
                    $this->attributes = new HtmlAttributes();
    }

    /**
     * Rendering html output
     *
     * @FIXME - formatting|beautifying
     * @return string
     */
    public function render(): string
    {
        return sprintf(HtmlSyntax::ELEMENT_TPL,
                                                $this->name,
                                                (string) $this->attributes,
                                                $this->content,
                                                $this->name

                );
    }

    
    /**
     * Getter for element name
     * 
     */
    public function getName(): string
    { 
        return $this->name; 
    }

    /**
     * Setter for element name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self 
    { 
        $this->name = $name; return $this; 
    }
    
    /**
     * Getter for Content
     *
     * @return ListType
     */
    public function getContent(): ListType 
    { 
        return $this->content; 
    }
    
    /**
     * Setter for content
     *
     * @param ListType $content
     * @return self
     */
    public function setContent(ListType $content): self 
    { 
        $this->content = $content; return $this; 
    }

    /**
     * Getter for attributes
     * 
     * @return HtmlAttributes
     */
    public function getAttributes(): HtmlAttributes
    { 
        return $this->attributes; 
    }

    /**
     * Setter for attributes
     * 
     * @param HtmlAttributes
     * @reeturn self
     */
    public function setAttributes(HtmlAttributes $attributes): self 
    { 
        $this->attributes = $attributes; return $this; 
    }

    /**
     * Setter for certain named attribute
     *
     * @param string $name
     * @param string $value
     * @return self
     */
    public function setAttribute(string $name, string $value): self
    {
        $this->attributes->set($name, $value);
        return $this;
    }

    /**
     * Getter for certain named attribute
     *
     * @param string $name
     * @return ?string
     */
    public function getAttribute(string $name): ?string
    {
        return $this->attributes->get($name) ?? null;
    }

    public function __toString(): string
    {
        return $this->render();
    }
}

