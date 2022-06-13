<?php

namespace CureDAO\Client\Variables;

use CureDAO\Client\Api\UnitsApi;
use CureDAO\Client\Model\Unit;
use CureDAO\Client\Model\VariableCategory;
use CureDAO\Client\Units\BaseUnit;
use CureDAO\Client\VariableCategories\BaseVariableCategory;

abstract class BaseVariable
{
    public $combinationOperation;
    public $commonAlias;
    public $defaultUnitId;
    public $description;
    public $durationOfAction;
    public $fillingType;
    public $id;
    public $imageUrl;
    public $informationalUrl;
    public $manualTracking;
    public $maximumAllowedValue;
    public $minimumAllowedSecondsBetweenMeasurements;
    public $minimumAllowedValue;
    public $name;
    public $onsetDelay;
    public $outcome;
    public $synonyms;
    public $variableCategoryId;
    /**
     * @return mixed
     */
    public function getCombinationOperation()
    {
        return $this->combinationOperation;
    }

    /**
     * @param mixed $combinationOperation
     * @return BaseVariable
     */
    public function setCombinationOperation($combinationOperation): BaseVariable
    {
        $this->combinationOperation = $combinationOperation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommonAlias()
    {
        return $this->commonAlias;
    }

    /**
     * @param mixed $commonAlias
     * @return BaseVariable
     */
    public function setCommonAlias($commonAlias): BaseVariable
    {
        $this->commonAlias = $commonAlias;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultUnitId()
    {
        return $this->defaultUnitId;
    }

    /**
     * @return BaseUnit
     */
    public function getDefaultUnit(): BaseUnit {
        return BaseUnit::find($this->getDefaultUnitId());
    }

    /**
     * @param int $defaultUnitId
     * @return BaseVariable
     */
    public function setDefaultUnitId($defaultUnitId): BaseVariable
    {
        $this->defaultUnitId = $defaultUnitId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return BaseVariable
     */
    public function setDescription($description): BaseVariable
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationOfAction()
    {
        return $this->durationOfAction;
    }

    /**
     * @param int $durationOfAction
     * @return BaseVariable
     */
    public function setDurationOfAction(int $durationOfAction): BaseVariable
    {
        $this->durationOfAction = $durationOfAction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFillingType()
    {
        return $this->fillingType;
    }

    /**
     * @param string $fillingType
     * @return BaseVariable
     */
    public function setFillingType(string $fillingType): BaseVariable
    {
        $this->fillingType = $fillingType;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BaseVariable
     */
    public function setId($id): BaseVariable
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     * @return BaseVariable
     */
    public function setImageUrl($imageUrl): BaseVariable
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInformationalUrl()
    {
        return $this->informationalUrl;
    }

    /**
     * @param mixed $informationalUrl
     * @return BaseVariable
     */
    public function setInformationalUrl($informationalUrl): BaseVariable
    {
        $this->informationalUrl = $informationalUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManualTracking()
    {
        return $this->manualTracking;
    }

    /**
     * @param mixed $manualTracking
     * @return BaseVariable
     */
    public function setManualTracking($manualTracking): BaseVariable
    {
        $this->manualTracking = $manualTracking;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximumAllowedValue()
    {
        return $this->maximumAllowedValue;
    }

    /**
     * @param mixed $maximumAllowedValue
     * @return BaseVariable
     */
    public function setMaximumAllowedValue($maximumAllowedValue): BaseVariable
    {
        $this->maximumAllowedValue = $maximumAllowedValue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimumAllowedSecondsBetweenMeasurements()
    {
        return $this->minimumAllowedSecondsBetweenMeasurements;
    }

    /**
     * @param mixed $minimumAllowedSecondsBetweenMeasurements
     * @return BaseVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements($minimumAllowedSecondsBetweenMeasurements): BaseVariable
    {
        $this->minimumAllowedSecondsBetweenMeasurements = $minimumAllowedSecondsBetweenMeasurements;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimumAllowedValue()
    {
        return $this->minimumAllowedValue;
    }

    /**
     * @param mixed $minimumAllowedValue
     * @return BaseVariable
     */
    public function setMinimumAllowedValue($minimumAllowedValue): BaseVariable
    {
        $this->minimumAllowedValue = $minimumAllowedValue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return BaseVariable
     */
    public function setName($name): BaseVariable
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnsetDelay()
    {
        return $this->onsetDelay;
    }

    /**
     * @param mixed $onsetDelay
     * @return BaseVariable
     */
    public function setOnsetDelay($onsetDelay): BaseVariable
    {
        $this->onsetDelay = $onsetDelay;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param mixed $outcome
     * @return BaseVariable
     */
    public function setOutcome($outcome): BaseVariable
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * @param mixed $synonyms
     * @return BaseVariable
     */
    public function setSynonyms($synonyms): BaseVariable
    {
        $this->synonyms = $synonyms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariableCategoryId()
    {
        return $this->variableCategoryId;
    }

    /**
     * @param mixed $variableCategoryId
     * @return BaseVariable
     */
    public function setVariableCategoryId($variableCategoryId): BaseVariable
    {
        $this->variableCategoryId = $variableCategoryId;
        return $this;
    }

    /**
     * @return BaseVariableCategory
     */
    public function getVariableCategory(): BaseVariableCategory {
        return BaseVariableCategory::find($this->getVariableCategoryId());
    }

    /**
     * @return VariableCategory
     */
    public function getVariableCategoryName(): string {
        return $this->getVariableCategory()->getName();
    }


}
