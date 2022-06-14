<?php

namespace CureDAO\Model;

class Credits
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
     * @return Credits
     */
    public function setEnabled(?bool $enabled): Credits
    {
        $this->enabled = $enabled;
        
        return $this;
    }
}

