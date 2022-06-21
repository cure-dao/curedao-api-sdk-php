<?php

namespace CureDAO\Client\Models;

class WeekdayColumnChart
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $jpgUrl;

    /**
     * @var string
     */
    public $pngUrl;

    /**
     * @var string
     */
    public $svgUrl;

    /**
     * @var string
     */
    public $chartId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var string
     */
    public $chartTitle;

    /**
     * @var string
     */
    public $explanation;

    /**
     * @var string
     */
    public $variableName;

    /**
     * @var bool
     */
    public $validImageOnS3;

    /**
     * @var HighchartConfig
     */
    public $highchartConfig;

    /**
     * @var string
     */
    public $imageGeneratedAt;


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
     * @return WeekdayColumnChart
     */
    public function setId(?string $id): WeekdayColumnChart
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return WeekdayColumnChart
     */
    public function setTitle(?string $title): WeekdayColumnChart
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJpgUrl(): ?string
    {
        return $this->jpgUrl;
    }

    /**
     * @param string|null $jpgUrl
     *
     * @return WeekdayColumnChart
     */
    public function setJpgUrl(?string $jpgUrl): WeekdayColumnChart
    {
        $this->jpgUrl = $jpgUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPngUrl(): ?string
    {
        return $this->pngUrl;
    }

    /**
     * @param string|null $pngUrl
     *
     * @return WeekdayColumnChart
     */
    public function setPngUrl(?string $pngUrl): WeekdayColumnChart
    {
        $this->pngUrl = $pngUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSvgUrl(): ?string
    {
        return $this->svgUrl;
    }

    /**
     * @param string|null $svgUrl
     *
     * @return WeekdayColumnChart
     */
    public function setSvgUrl(?string $svgUrl): WeekdayColumnChart
    {
        $this->svgUrl = $svgUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChartId(): ?string
    {
        return $this->chartId;
    }

    /**
     * @param string|null $chartId
     *
     * @return WeekdayColumnChart
     */
    public function setChartId(?string $chartId): WeekdayColumnChart
    {
        $this->chartId = $chartId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string|null $imageUrl
     *
     * @return WeekdayColumnChart
     */
    public function setImageUrl(?string $imageUrl): WeekdayColumnChart
    {
        $this->imageUrl = $imageUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    /**
     * @param string|null $subtitle
     *
     * @return WeekdayColumnChart
     */
    public function setSubtitle(?string $subtitle): WeekdayColumnChart
    {
        $this->subtitle = $subtitle;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChartTitle(): ?string
    {
        return $this->chartTitle;
    }

    /**
     * @param string|null $chartTitle
     *
     * @return WeekdayColumnChart
     */
    public function setChartTitle(?string $chartTitle): WeekdayColumnChart
    {
        $this->chartTitle = $chartTitle;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @param string|null $explanation
     *
     * @return WeekdayColumnChart
     */
    public function setExplanation(?string $explanation): WeekdayColumnChart
    {
        $this->explanation = $explanation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariableName(): ?string
    {
        return $this->variableName;
    }

    /**
     * @param string|null $variableName
     *
     * @return WeekdayColumnChart
     */
    public function setVariableName(?string $variableName): WeekdayColumnChart
    {
        $this->variableName = $variableName;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isValidImageOnS3(): ?bool
    {
        return $this->validImageOnS3;
    }

    /**
     * @param bool|null $validImageOnS3
     *
     * @return WeekdayColumnChart
     */
    public function setValidImageOnS3(?bool $validImageOnS3): WeekdayColumnChart
    {
        $this->validImageOnS3 = $validImageOnS3;
        
        return $this;
    }

    /**
     * @return HighchartConfig|null
     */
    public function getHighchartConfig(): ?HighchartConfig
    {
        return $this->highchartConfig;
    }

    /**
     * @param HighchartConfig|null $highchartConfig
     *
     * @return WeekdayColumnChart
     */
    public function setHighchartConfig(?HighchartConfig $highchartConfig): WeekdayColumnChart
    {
        $this->highchartConfig = $highchartConfig;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageGeneratedAt(): ?string
    {
        return $this->imageGeneratedAt;
    }

    /**
     * @param string|null $imageGeneratedAt
     *
     * @return WeekdayColumnChart
     */
    public function setImageGeneratedAt(?string $imageGeneratedAt): WeekdayColumnChart
    {
        $this->imageGeneratedAt = $imageGeneratedAt;
        
        return $this;
    }
}

