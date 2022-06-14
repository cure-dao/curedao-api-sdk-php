<?php

namespace CureDAO\Model;

class Column
{
    /**
     * @var int
     */
    private $borderWidth;

    /**
     * @var bool
     */
    private $colorByPoint;

    /**
     * @var float
     */
    private $pointPadding;

    /**
     * @var bool
     */
    private $enableMouseTracking;


    /**
     * @return int|null
     */
    public function getBorderWidth(): ?int
    {
        return $this->borderWidth;
    }

    /**
     * @param int|null $borderWidth
     *
     * @return Column
     */
    public function setBorderWidth(?int $borderWidth): Column
    {
        $this->borderWidth = $borderWidth;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isColorByPoint(): ?bool
    {
        return $this->colorByPoint;
    }

    /**
     * @param bool|null $colorByPoint
     *
     * @return Column
     */
    public function setColorByPoint(?bool $colorByPoint): Column
    {
        $this->colorByPoint = $colorByPoint;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPointPadding(): ?float
    {
        return $this->pointPadding;
    }

    /**
     * @param float|null $pointPadding
     *
     * @return Column
     */
    public function setPointPadding(?float $pointPadding): Column
    {
        $this->pointPadding = $pointPadding;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isEnableMouseTracking(): ?bool
    {
        return $this->enableMouseTracking;
    }

    /**
     * @param bool|null $enableMouseTracking
     *
     * @return Column
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): Column
    {
        $this->enableMouseTracking = $enableMouseTracking;
        
        return $this;
    }
}

