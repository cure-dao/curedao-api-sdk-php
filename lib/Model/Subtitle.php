<?php

namespace CureDAO\Model;

class Subtitle
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $style;


    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     *
     * @return Subtitle
     */
    public function setText(?string $text): Subtitle
    {
        $this->text = $text;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getStyle(): ?array
    {
        return $this->style;
    }

    /**
     * @param array|null $style
     *
     * @return Subtitle
     */
    public function setStyle(?array $style): Subtitle
    {
        $this->style = $style;
        
        return $this;
    }
}

