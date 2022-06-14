<?php

namespace CureDAO\Client\Models;

class DistributionColumnChart
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $jpgUrl;

    /**
     * @var string
     */
    private $pngUrl;

    /**
     * @var string
     */
    private $svgUrl;

    /**
     * @var string
     */
    private $chartId;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var string
     */
    private $chartTitle;

    /**
     * @var string
     */
    private $explanation;

    /**
     * @var string
     */
    private $variableName;

    /**
     * @var bool
     */
    private $validImageOnS3;

    /**
     * @var HighchartConfig
     */
    private $highchartConfig;

    /**
     * @var string
     */
    private $imageGeneratedAt;


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
     * @return DistributionColumnChart
     */
    public function setId(?string $id): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setTitle(?string $title): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setJpgUrl(?string $jpgUrl): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setPngUrl(?string $pngUrl): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setSvgUrl(?string $svgUrl): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setChartId(?string $chartId): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setImageUrl(?string $imageUrl): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setSubtitle(?string $subtitle): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setChartTitle(?string $chartTitle): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setExplanation(?string $explanation): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setVariableName(?string $variableName): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setValidImageOnS3(?bool $validImageOnS3): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setHighchartConfig(?HighchartConfig $highchartConfig): DistributionColumnChart
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
     * @return DistributionColumnChart
     */
    public function setImageGeneratedAt(?string $imageGeneratedAt): DistributionColumnChart
    {
        $this->imageGeneratedAt = $imageGeneratedAt;
        
        return $this;
    }
}

