<?php

namespace CureDAO\Client\Responses;

use CureDAO\Client\Models\Analysis;
use CureDAO\Client\Models\User;
use CureDAO\Client\Models\UserVariable;
use CureDAO\Client\Models\Variable;

class AnalysisResponse extends BaseResponse
{
    /**
     * @var Analysis
     */
    public $analysis;

    /**
     * @var string
     */
    public $html;

    /**
     * @var UserVariable
     */
    public $outcomeUserVariable;

    /**
     * @var Variable
     */
    public $outcomeVariable;

    /**
     * @var UserVariable
     */
    public $predictorUserVariable;

    /**
     * @var Variable
     */
    public $predictorVariable;

    /**
     * @var User
     */
    public $user;

    public function __construct($data = [])
    {
        parent::__construct($data);
    }


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
     * @return AnalysisResponse
     */
    public function setAnalysis(?Analysis $analysis): AnalysisResponse
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
     * @return AnalysisResponse
     */
    public function setHtml(?string $html): AnalysisResponse
    {
        $this->html = $html;

        return $this;
    }

    /**
     * @return UserVariable
     */
    public function getOutcomeUserVariable(): ?UserVariable
    {
        return $this->outcomeUserVariable;
    }

    /**
     * @param UserVariable|null $outcomeUserVariable
     *
     * @return AnalysisResponse
     */
    public function setOutcomeUserVariable(?UserVariable $outcomeUserVariable): AnalysisResponse
    {
        $this->outcomeUserVariable = $outcomeUserVariable;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutcomeVariable(): ?string
    {
        return $this->outcomeVariable;
    }

    /**
     * @param string|null $outcomeVariable
     *
     * @return AnalysisResponse
     */
    public function setOutcomeVariable(?string $outcomeVariable): AnalysisResponse
    {
        $this->outcomeVariable = $outcomeVariable;

        return $this;
    }

    /**
     * @return UserVariable
     */
    public function getPredictorUserVariable(): UserVariable
    {
        return $this->predictorUserVariable;
    }

    /**
     * @param UserVariable|null $predictorUserVariable
     *
     * @return AnalysisResponse
     */
    public function setPredictorUserVariable(?UserVariable $predictorUserVariable): AnalysisResponse
    {
        $this->predictorUserVariable = $predictorUserVariable;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPredictorVariable(): ?string
    {
        return $this->predictorVariable;
    }

    /**
     * @param string|null $predictorVariable
     *
     * @return AnalysisResponse
     */
    public function setPredictorVariable(?string $predictorVariable): AnalysisResponse
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
     * @return AnalysisResponse
     */
    public function setUser(?User $user): AnalysisResponse
    {
        $this->user = $user;

        return $this;
    }
}

