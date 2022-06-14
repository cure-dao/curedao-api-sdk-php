<?php

namespace CureDAO\Client\Models;

class Exporting
{
    /**
     * @var bool
     */
    private $enabled;


    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool|null $enabled
     *
     * @return Exporting
     */
    public function setEnabled(?bool $enabled): Exporting
    {
        $this->enabled = $enabled;
        
        return $this;
    }
}

