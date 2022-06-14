<?php

namespace CureDAO\Model;

class HighchartConfig
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var Lang
     */
    private $lang;

    /**
     * @var Chart
     */
    private $chart;

    /**
     * @var Title
     */
    private $title;

    /**
     * @var XAxis
     */
    private $xAxis;

    /**
     * @var YAxis
     */
    private $yAxis;

    /**
     * @var array
     */
    private $colors;

    /**
     * @var Legend
     */
    private $legend;

    /**
     * @var array
     */
    private $series;

    /**
     * @var Credits
     */
    private $credits;

    /**
     * @var Loading
     */
    private $loading;

    /**
     * @var Tooltip
     */
    private $tooltip;

    /**
     * @var Subtitle
     */
    private $subtitle;

    /**
     * @var Exporting
     */
    private $exporting;

    /**
     * @var PlotOptions
     */
    private $plotOptions;

    /**
     * @var bool
     */
    private $useHighStocks;


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
     * @return HighchartConfig
     */
    public function setId(?string $id): HighchartConfig
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return Lang|null
     */
    public function getLang(): ?Lang
    {
        return $this->lang;
    }

    /**
     * @param Lang|null $lang
     *
     * @return HighchartConfig
     */
    public function setLang(?Lang $lang): HighchartConfig
    {
        $this->lang = $lang;
        
        return $this;
    }

    /**
     * @return Chart|null
     */
    public function getChart(): ?Chart
    {
        return $this->chart;
    }

    /**
     * @param Chart|null $chart
     *
     * @return HighchartConfig
     */
    public function setChart(?Chart $chart): HighchartConfig
    {
        $this->chart = $chart;
        
        return $this;
    }

    /**
     * @return Title|null
     */
    public function getTitle(): ?Title
    {
        return $this->title;
    }

    /**
     * @param Title|null $title
     *
     * @return HighchartConfig
     */
    public function setTitle(?Title $title): HighchartConfig
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return XAxis|null
     */
    public function getXAxis(): ?XAxis
    {
        return $this->xAxis;
    }

    /**
     * @param XAxis|null $xAxis
     *
     * @return HighchartConfig
     */
    public function setXAxis(?XAxis $xAxis): HighchartConfig
    {
        $this->xAxis = $xAxis;
        
        return $this;
    }

    /**
     * @return YAxis|null
     */
    public function getYAxis(): ?YAxis
    {
        return $this->yAxis;
    }

    /**
     * @param YAxis|null $yAxis
     *
     * @return HighchartConfig
     */
    public function setYAxis(?YAxis $yAxis): HighchartConfig
    {
        $this->yAxis = $yAxis;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getColors(): ?array
    {
        return $this->colors;
    }

    /**
     * @param array|null $colors
     *
     * @return HighchartConfig
     */
    public function setColors(?array $colors): HighchartConfig
    {
        $this->colors = $colors;
        
        return $this;
    }

    /**
     * @return Legend|null
     */
    public function getLegend(): ?Legend
    {
        return $this->legend;
    }

    /**
     * @param Legend|null $legend
     *
     * @return HighchartConfig
     */
    public function setLegend(?Legend $legend): HighchartConfig
    {
        $this->legend = $legend;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }

    /**
     * @param array|null $series
     *
     * @return HighchartConfig
     */
    public function setSeries(?array $series): HighchartConfig
    {
        $this->series = $series;
        
        return $this;
    }

    /**
     * @return Credits|null
     */
    public function getCredits(): ?Credits
    {
        return $this->credits;
    }

    /**
     * @param Credits|null $credits
     *
     * @return HighchartConfig
     */
    public function setCredits(?Credits $credits): HighchartConfig
    {
        $this->credits = $credits;
        
        return $this;
    }

    /**
     * @return Loading|null
     */
    public function getLoading(): ?Loading
    {
        return $this->loading;
    }

    /**
     * @param Loading|null $loading
     *
     * @return HighchartConfig
     */
    public function setLoading(?Loading $loading): HighchartConfig
    {
        $this->loading = $loading;
        
        return $this;
    }

    /**
     * @return Tooltip|null
     */
    public function getTooltip(): ?Tooltip
    {
        return $this->tooltip;
    }

    /**
     * @param Tooltip|null $tooltip
     *
     * @return HighchartConfig
     */
    public function setTooltip(?Tooltip $tooltip): HighchartConfig
    {
        $this->tooltip = $tooltip;
        
        return $this;
    }

    /**
     * @return Subtitle|null
     */
    public function getSubtitle(): ?Subtitle
    {
        return $this->subtitle;
    }

    /**
     * @param Subtitle|null $subtitle
     *
     * @return HighchartConfig
     */
    public function setSubtitle(?Subtitle $subtitle): HighchartConfig
    {
        $this->subtitle = $subtitle;
        
        return $this;
    }

    /**
     * @return Exporting|null
     */
    public function getExporting(): ?Exporting
    {
        return $this->exporting;
    }

    /**
     * @param Exporting|null $exporting
     *
     * @return HighchartConfig
     */
    public function setExporting(?Exporting $exporting): HighchartConfig
    {
        $this->exporting = $exporting;
        
        return $this;
    }

    /**
     * @return PlotOptions|null
     */
    public function getPlotOptions(): ?PlotOptions
    {
        return $this->plotOptions;
    }

    /**
     * @param PlotOptions|null $plotOptions
     *
     * @return HighchartConfig
     */
    public function setPlotOptions(?PlotOptions $plotOptions): HighchartConfig
    {
        $this->plotOptions = $plotOptions;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isUseHighStocks(): ?bool
    {
        return $this->useHighStocks;
    }

    /**
     * @param bool|null $useHighStocks
     *
     * @return HighchartConfig
     */
    public function setUseHighStocks(?bool $useHighStocks): HighchartConfig
    {
        $this->useHighStocks = $useHighStocks;
        
        return $this;
    }
}

