<?php

namespace CureDAO\Model;

class MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setId(?string $id): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setTitle(?string $title): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setJpgUrl(?string $jpgUrl): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setPngUrl(?string $pngUrl): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setSvgUrl(?string $svgUrl): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setChartId(?string $chartId): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setImageUrl(?string $imageUrl): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setSubtitle(?string $subtitle): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setChartTitle(?string $chartTitle): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setExplanation(?string $explanation): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setVariableName(?string $variableName): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setValidImageOnS3(?bool $validImageOnS3): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setHighchartConfig(?HighchartConfig $highchartConfig): MonthlyColumnChart
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
     * @return MonthlyColumnChart
     */
    public function setImageGeneratedAt(?string $imageGeneratedAt): MonthlyColumnChart
    {
        $this->imageGeneratedAt = $imageGeneratedAt;
        
        return $this;
    }
}

