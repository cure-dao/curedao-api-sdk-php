<?php

namespace CureDAO\Model;

class CorrelationsOverDurations
{
    /**
     * @var float
     */
    private $86400;

    /**
     * @var float
     */
    private $172800;

    /**
     * @var float
     */
    private $345600;

    /**
     * @var float
     */
    private $691200;

    /**
     * @var float
     */
    private $1382400;

    /**
     * @var float
     */
    private $2764800;


    /**
     * @return float|null
     */
    public function get86400(): ?float
    {
        return $this->86400;
    }

    /**
     * @param float|null $86400
     *
     * @return CorrelationsOverDurations
     */
    public function set86400(?float $86400): CorrelationsOverDurations
    {
        $this->86400 = $86400;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function get172800(): ?float
    {
        return $this->172800;
    }

    /**
     * @param float|null $172800
     *
     * @return CorrelationsOverDurations
     */
    public function set172800(?float $172800): CorrelationsOverDurations
    {
        $this->172800 = $172800;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function get345600(): ?float
    {
        return $this->345600;
    }

    /**
     * @param float|null $345600
     *
     * @return CorrelationsOverDurations
     */
    public function set345600(?float $345600): CorrelationsOverDurations
    {
        $this->345600 = $345600;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function get691200(): ?float
    {
        return $this->691200;
    }

    /**
     * @param float|null $691200
     *
     * @return CorrelationsOverDurations
     */
    public function set691200(?float $691200): CorrelationsOverDurations
    {
        $this->691200 = $691200;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function get1382400(): ?float
    {
        return $this->1382400;
    }

    /**
     * @param float|null $1382400
     *
     * @return CorrelationsOverDurations
     */
    public function set1382400(?float $1382400): CorrelationsOverDurations
    {
        $this->1382400 = $1382400;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function get2764800(): ?float
    {
        return $this->2764800;
    }

    /**
     * @param float|null $2764800
     *
     * @return CorrelationsOverDurations
     */
    public function set2764800(?float $2764800): CorrelationsOverDurations
    {
        $this->2764800 = $2764800;
        
        return $this;
    }
}

