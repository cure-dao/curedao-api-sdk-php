<?php

namespace CureDAO\Client\Models;

class TestAnalyzeResponse
{
    /**
     * @var Analysis
     */
    private $analysis;

    /**
     * @var string
     */
    private $html;

    /**
     * @var OutcomeUserVariable
     */
    private $outcomeUserVariable;

    /**
     * @var OutcomeVariable
     */
    private $outcomeVariable;

    /**
     * @var PredictorUserVariable
     */
    private $predictorUserVariable;

    /**
     * @var PredictorVariable
     */
    private $predictorVariable;

    /**
     * @var User
     */
    private $user;


    /**
     * @return Analysis|null
     */
    public function getAnalysis(): ?Analysis
    {
        return $this->analysis;
    }

    /**
     * @param Analysis|null $analysis
     *
     * @return TestAnalyzeResponse
     */
    public function setAnalysis(?Analysis $analysis): TestAnalyzeResponse
    {
        $this->analysis = $analysis;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHtml(): ?string
    {
        return $this->html;
    }

    /**
     * @param string|null $html
     *
     * @return TestAnalyzeResponse
     */
    public function setHtml(?string $html): TestAnalyzeResponse
    {
        $this->html = $html;
        
        return $this;
    }

    /**
     * @return OutcomeUserVariable|null
     */
    public function getOutcomeUserVariable(): ?OutcomeUserVariable
    {
        return $this->outcomeUserVariable;
    }

    /**
     * @param OutcomeUserVariable|null $outcomeUserVariable
     *
     * @return TestAnalyzeResponse
     */
    public function setOutcomeUserVariable(?OutcomeUserVariable $outcomeUserVariable): TestAnalyzeResponse
    {
        $this->outcomeUserVariable = $outcomeUserVariable;
        
        return $this;
    }

    /**
     * @return OutcomeVariable|null
     */
    public function getOutcomeVariable(): ?OutcomeVariable
    {
        return $this->outcomeVariable;
    }

    /**
     * @param OutcomeVariable|null $outcomeVariable
     *
     * @return TestAnalyzeResponse
     */
    public function setOutcomeVariable(?OutcomeVariable $outcomeVariable): TestAnalyzeResponse
    {
        $this->outcomeVariable = $outcomeVariable;
        
        return $this;
    }

    /**
     * @return PredictorUserVariable|null
     */
    public function getPredictorUserVariable(): ?PredictorUserVariable
    {
        return $this->predictorUserVariable;
    }

    /**
     * @param PredictorUserVariable|null $predictorUserVariable
     *
     * @return TestAnalyzeResponse
     */
    public function setPredictorUserVariable(?PredictorUserVariable $predictorUserVariable): TestAnalyzeResponse
    {
        $this->predictorUserVariable = $predictorUserVariable;
        
        return $this;
    }

    /**
     * @return PredictorVariable|null
     */
    public function getPredictorVariable(): ?PredictorVariable
    {
        return $this->predictorVariable;
    }

    /**
     * @param PredictorVariable|null $predictorVariable
     *
     * @return TestAnalyzeResponse
     */
    public function setPredictorVariable(?PredictorVariable $predictorVariable): TestAnalyzeResponse
    {
        $this->predictorVariable = $predictorVariable;
        
        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     *
     * @return TestAnalyzeResponse
     */
    public function setUser(?User $user): TestAnalyzeResponse
    {
        $this->user = $user;
        
        return $this;
    }
}

