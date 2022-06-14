<?php

namespace CureDAO\Model;

class Loading
{
    /**
     * @var array
     */
    private $style;

    /**
     * @var int
     */
    private $hideDuration;

    /**
     * @var int
     */
    private $showDuration;


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
     * @return Loading
     */
    public function setStyle(?array $style): Loading
    {
        $this->style = $style;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHideDuration(): ?int
    {
        return $this->hideDuration;
    }

    /**
     * @param int|null $hideDuration
     *
     * @return Loading
     */
    public function setHideDuration(?int $hideDuration): Loading
    {
        $this->hideDuration = $hideDuration;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getShowDuration(): ?int
    {
        return $this->showDuration;
    }

    /**
     * @param int|null $showDuration
     *
     * @return Loading
     */
    public function setShowDuration(?int $showDuration): Loading
    {
        $this->showDuration = $showDuration;
        
        return $this;
    }
}

