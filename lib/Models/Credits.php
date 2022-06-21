<?php

namespace CureDAO\Client\Models;

class Credits
{
    /**
     * @var bool
     */
    public $enabled;


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
     * @return Credits
     */
    public function setEnabled(?bool $enabled): Credits
    {
        $this->enabled = $enabled;
        
        return $this;
    }
}

