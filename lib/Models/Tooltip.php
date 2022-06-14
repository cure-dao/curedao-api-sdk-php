<?php

namespace CureDAO\Client\Models;

class Tooltip
{
    /**
     * @var Formatter
     */
    private $formatter;


    /**
     * @return Formatter|null
     */
    public function getFormatter(): ?Formatter
    {
        return $this->formatter;
    }

    /**
     * @param Formatter|null $formatter
     *
     * @return Tooltip
     */
    public function setFormatter(?Formatter $formatter): Tooltip
    {
        $this->formatter = $formatter;
        
        return $this;
    }
}

