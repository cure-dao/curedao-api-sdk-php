<?php

namespace CureDAO\Client\Models;

class Chart
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $renderTo;

    /**
     * @var Animation
     */
    private $animation;


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return Chart
     */
    public function setType(?string $type): Chart
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRenderTo(): ?string
    {
        return $this->renderTo;
    }

    /**
     * @param string|null $renderTo
     *
     * @return Chart
     */
    public function setRenderTo(?string $renderTo): Chart
    {
        $this->renderTo = $renderTo;
        
        return $this;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @param Animation|null $animation
     *
     * @return Chart
     */
    public function setAnimation(?Animation $animation): Chart
    {
        $this->animation = $animation;
        
        return $this;
    }
}

