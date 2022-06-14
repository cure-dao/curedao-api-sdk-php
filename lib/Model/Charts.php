<?php

namespace CureDAO\Model;

class Charts
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var MonthlyColumnChart
     */
    private $monthlyColumnChart;

    /**
     * @var WeekdayColumnChart
     */
    private $weekdayColumnChart;

    /**
     * @var DistributionColumnChart
     */
    private $distributionColumnChart;


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return Charts
     */
    public function setId(?string $id): Charts
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return MonthlyColumnChart|null
     */
    public function getMonthlyColumnChart(): ?MonthlyColumnChart
    {
        return $this->monthlyColumnChart;
    }

    /**
     * @param MonthlyColumnChart|null $monthlyColumnChart
     *
     * @return Charts
     */
    public function setMonthlyColumnChart(?MonthlyColumnChart $monthlyColumnChart): Charts
    {
        $this->monthlyColumnChart = $monthlyColumnChart;
        
        return $this;
    }

    /**
     * @return WeekdayColumnChart|null
     */
    public function getWeekdayColumnChart(): ?WeekdayColumnChart
    {
        return $this->weekdayColumnChart;
    }

    /**
     * @param WeekdayColumnChart|null $weekdayColumnChart
     *
     * @return Charts
     */
    public function setWeekdayColumnChart(?WeekdayColumnChart $weekdayColumnChart): Charts
    {
        $this->weekdayColumnChart = $weekdayColumnChart;
        
        return $this;
    }

    /**
     * @return DistributionColumnChart|null
     */
    public function getDistributionColumnChart(): ?DistributionColumnChart
    {
        return $this->distributionColumnChart;
    }

    /**
     * @param DistributionColumnChart|null $distributionColumnChart
     *
     * @return Charts
     */
    public function setDistributionColumnChart(?DistributionColumnChart $distributionColumnChart): Charts
    {
        $this->distributionColumnChart = $distributionColumnChart;
        
        return $this;
    }
}

