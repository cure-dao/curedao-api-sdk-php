<?php

namespace CureDAO\Model;

class PlotOptions
{
    /**
     * @var Column
     */
    private $column;


    /**
     * @return Column|null
     */
    public function getColumn(): ?Column
    {
        return $this->column;
    }

    /**
     * @param Column|null $column
     *
     * @return PlotOptions
     */
    public function setColumn(?Column $column): PlotOptions
    {
        $this->column = $column;
        
        return $this;
    }
}

