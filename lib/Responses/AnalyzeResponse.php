<?php

namespace CureDAO\Client\Responses;

use CureDAO\Client\Models\Analysis;
use CureDAO\Client\Models\OutcomeUserVariable;
use CureDAO\Client\Models\OutcomeVariable;
use CureDAO\Client\Models\PredictorUserVariable;
use CureDAO\Client\Models\PredictorVariable;
use CureDAO\Client\Models\User;

class AnalyzeResponse extends BaseResponse
{
    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->analysis = new Analysis($data['analysis']);
        //$this->predictorUserVariable = new UserVariable($data['analysis']);
    }

    /**
     * @var Analysis
     */
    public $analysis;

    /**
     * @var string
     */
    public $html;

    /**
     * @var OutcomeUserVariable
     */
    public $outcomeUserVariable;

    /**
     * @var OutcomeVariable
     */
    public $outcomeVariable;

    /**
     * @var PredictorUserVariable
     */
    public $predictorUserVariable;

    /**
     * @var PredictorVariable
     */
    public $predictorVariable;

    /**
     * @var User
     */
    public $user;


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
     * @return AnalyzeResponse
     */
    public function setAnalysis(?Analysis $analysis): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setHtml(?string $html): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setOutcomeUserVariable(?OutcomeUserVariable $outcomeUserVariable): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setOutcomeVariable(?OutcomeVariable $outcomeVariable): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setPredictorUserVariable(?PredictorUserVariable $predictorUserVariable): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setPredictorVariable(?PredictorVariable $predictorVariable): AnalyzeResponse
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
     * @return AnalyzeResponse
     */
    public function setUser(?User $user): AnalyzeResponse
    {
        $this->user = $user;

        return $this;
    }
}

