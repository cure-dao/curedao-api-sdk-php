<?php

namespace CureDAO\Client\Models;

class Formatter
{
    /**
     * @var string
     */
    private $expression;


    /**
     * @return string|null
     */
    public function getExpression(): ?string
    {
        return $this->expression;
    }

    /**
     * @param string|null $expression
     *
     * @return Formatter
     */
    public function setExpression(?string $expression): Formatter
    {
        $this->expression = $expression;
        
        return $this;
    }
}

