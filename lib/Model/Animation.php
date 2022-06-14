<?php

namespace CureDAO\Model;

class Animation
{
    /**
     * @var int
     */
    private $duration;


    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return Animation
     */
    public function setDuration(?int $duration): Animation
    {
        $this->duration = $duration;
        
        return $this;
    }
}

