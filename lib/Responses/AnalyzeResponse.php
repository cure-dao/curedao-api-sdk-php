<?php

namespace CureDAO\Client\Responses;

use CureDAO\Client\Models\Analysis;
use CureDAO\Client\Models\User;
use CureDAO\Client\Models\UserVariable;
use CureDAO\Client\Models\Variable;

class AnalyzeResponse extends BaseResponse
{
    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->analysis = new Analysis($data['analysis']);
        $this->outcomeUserVariable = new UserVariable($data["outcome_user_variable"]);
        $this->predictorUserVariable = new UserVariable($data["predictor_user_variable"]);
        //$this->outcomeVariable = new Variable($data["outcome_variable"]);
        //$this->predictorVariable = new Variable($data["predictor_variable"]);
        if(isset($data['user'])){
            $this->user = new User($data['user']);
        }
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
     * @return UserVariable|null
     */
    public function getOutcomeUserVariable(): ?UserVariable
    {
        return $this->outcomeUserVariable;
    }

    /**
     * @param UserVariable|null $outcomeUserVariable
     *
     * @return AnalyzeResponse
     */
    public function setOutcomeUserVariable(?UserVariable $outcomeUserVariable): AnalyzeResponse
    {
        $this->outcomeUserVariable = $outcomeUserVariable;

        return $this;
    }

    /**
     * @return Variable|null
     */
    public function getOutcomeVariable(): ?Variable
    {
        return $this->outcomeVariable;
    }

    /**
     * @param Variable|null $outcomeVariable
     *
     * @return AnalyzeResponse
     */
    public function setOutcomeVariable(?Variable $outcomeVariable): AnalyzeResponse
    {
        $this->outcomeVariable = $outcomeVariable;

        return $this;
    }

    /**
     * @return UserVariable|null
     */
    public function getPredictorUserVariable(): ?UserVariable
    {
        return $this->predictorUserVariable;
    }

    /**
     * @param UserVariable|null $predictorUserVariable
     *
     * @return AnalyzeResponse
     */
    public function setPredictorUserVariable(?UserVariable $predictorUserVariable): AnalyzeResponse
    {
        $this->predictorUserVariable = $predictorUserVariable;

        return $this;
    }

    /**
     * @return Variable|null
     */
    public function getPredictorVariable(): ?Variable
    {
        return $this->predictorVariable;
    }

    /**
     * @param Variable|null $predictorVariable
     *
     * @return AnalyzeResponse
     */
    public function setPredictorVariable(?Variable $predictorVariable): AnalyzeResponse
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

    public function saveHtml(string $path = null)
    {
        $slug = $this->getSlug() ?? "index";
        if(!$path){
            $path = __DIR__."/../../public/".$slug.".html";
        }
        file_put_contents($path, $this->getHtml());
    }

    private function getSlug(): ?string
    {
        $analysis = $this->getAnalysis();
        return $analysis->getSlug();
    }
}

