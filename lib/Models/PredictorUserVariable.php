<?php

namespace CureDAO\Client\Models;

class PredictorUserVariable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $analysisEndedAt;

    /**
     * @var string
     */
    private $analysisRequestedAt;

    /**
     * @var string
     */
    private $analysisSettingsModifiedAt;

    /**
     * @var string
     */
    private $analysisStartedAt;

    /**
     * @var int
     */
    private $averageSecondsBetweenMeasurements;

    /**
     * @var string
     */
    private $bestCauseVariableId;

    /**
     * @var string
     */
    private $bestCorrelationsWhereCauseUserVariableCount;

    /**
     * @var string
     */
    private $bestCorrelationsWhereEffectUserVariableCount;

    /**
     * @var int
     */
    private $bestEffectVariableId;

    /**
     * @var int
     */
    private $bestUserCorrelationId;

    /**
     * @var string
     */
    private $boring;

    /**
     * @var bool
     */
    private $causeOnly;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $combinationOperation;

    /**
     * @var string
     */
    private $controllable;

    /**
     * @var string
     */
    private $correlationsCount;

    /**
     * @var string
     */
    private $correlationsWhereCauseUserVariableCount;

    /**
     * @var string
     */
    private $correlationsWhereEffectUserVariableCount;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var DataSourcesCount
     */
    private $dataSourcesCount;

    /**
     * @var int
     */
    private $defaultUnitId;

    /**
     * @var int
     */
    private $durationOfAction;

    /**
     * @var string
     */
    private $earliestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    private $earliestSourceMeasurementStartAt;

    /**
     * @var string
     */
    private $earliestTaggedMeasurementStartAt;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $favoritersCount;

    /**
     * @var string
     */
    private $favoritesCount;

    /**
     * @var string
     */
    private $fillingType;

    /**
     * @var string
     */
    private $fillingValue;

    /**
     * @var string
     */
    private $informationalUrl;

    /**
     * @var string
     */
    private $isGoal;

    /**
     * @var string
     */
    private $isPublic;

    /**
     * @var string
     */
    private $joinWith;

    /**
     * @var float
     */
    private $kurtosis;

    /**
     * @var string
     */
    private $lastCorrelatedAt;

    /**
     * @var int
     */
    private $lastOriginalUnitId;

    /**
     * @var int
     */
    private $lastOriginalValue;

    /**
     * @var int
     */
    private $lastUnitId;

    /**
     * @var int
     */
    private $lastValue;

    /**
     * @var string
     */
    private $latestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    private $latestSourceMeasurementStartAt;

    /**
     * @var string
     */
    private $latestTaggedMeasurementStartAt;

    /**
     * @var string
     */
    private $maximumAllowedValue;

    /**
     * @var string
     */
    private $maximumRecordedDailyValue;

    /**
     * @var int
     */
    private $maximumRecordedValue;

    /**
     * @var float
     */
    private $mean;

    /**
     * @var int
     */
    private $measurementsAtLastAnalysis;

    /**
     * @var string
     */
    private $measurementsCount;

    /**
     * @var Measurements
     */
    private $measurements;

    /**
     * @var string
     */
    private $mediaCount;

    /**
     * @var int
     */
    private $median;

    /**
     * @var int
     */
    private $medianSecondsBetweenMeasurements;

    /**
     * @var int
     */
    private $minimumAllowedSecondsBetweenMeasurements;

    /**
     * @var int
     */
    private $minimumAllowedValue;

    /**
     * @var string
     */
    private $minimumRecordedDailyValue;

    /**
     * @var int
     */
    private $minimumRecordedValue;

    /**
     * @var string
     */
    private $mostCommonConnectorId;

    /**
     * @var string
     */
    private $mostCommonOriginalUnitId;

    /**
     * @var string
     */
    private $mostCommonSourceName;

    /**
     * @var int
     */
    private $mostCommonValue;

    /**
     * @var string
     */
    private $newestDataAt;

    /**
     * @var int
     */
    private $numberCommonTaggedBy;

    /**
     * @var int
     */
    private $numberOfChanges;

    /**
     * @var string
     */
    private $numberOfCommonChildren;

    /**
     * @var string
     */
    private $numberOfCommonFoods;

    /**
     * @var string
     */
    private $numberOfCommonIngredients;

    /**
     * @var string
     */
    private $numberOfCommonJoinedVariables;

    /**
     * @var string
     */
    private $numberOfCommonParents;

    /**
     * @var string
     */
    private $numberOfCommonTags;

    /**
     * @var int
     */
    private $numberOfCorrelations;

    /**
     * @var int
     */
    private $numberOfMeasurements;

    /**
     * @var string
     */
    private $numberOfMeasurementsWithTagsAtLastCorrelation;

    /**
     * @var string
     */
    private $numberOfOutcomeCaseStudies;

    /**
     * @var int
     */
    private $numberOfProcessedDailyMeasurements;

    /**
     * @var int
     */
    private $numberOfRawMeasurementsWithTagsJoinsChildren;

    /**
     * @var int
     */
    private $numberOfSoftDeletedMeasurements;

    /**
     * @var int
     */
    private $numberOfTrackingReminderNotifications;

    /**
     * @var int
     */
    private $numberOfTrackingReminders;

    /**
     * @var int
     */
    private $numberOfUniqueDailyValues;

    /**
     * @var int
     */
    private $numberOfUniqueValues;

    /**
     * @var string
     */
    private $numberOfUserChildren;

    /**
     * @var int
     */
    private $numberOfUserCorrelationsAsCause;

    /**
     * @var int
     */
    private $numberOfUserCorrelationsAsEffect;

    /**
     * @var string
     */
    private $numberOfUserFoods;

    /**
     * @var string
     */
    private $numberOfUserIngredients;

    /**
     * @var string
     */
    private $numberOfUserJoinedVariables;

    /**
     * @var string
     */
    private $numberOfUserParents;

    /**
     * @var int
     */
    private $numberOfUserTags;

    /**
     * @var int
     */
    private $numberUserTaggedBy;

    /**
     * @var int
     */
    private $onsetDelay;

    /**
     * @var string
     */
    private $optimalValueMessage;

    /**
     * @var bool
     */
    private $outcome;

    /**
     * @var int
     */
    private $outcomeOfInterest;

    /**
     * @var string
     */
    private $outcomesCount;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $predictor;

    /**
     * @var string
     */
    private $predictorOfInterest;

    /**
     * @var string
     */
    private $predictorsCount;

    /**
     * @var string
     */
    private $reasonForAnalysis;

    /**
     * @var string
     */
    private $recordSizeInKb;

    /**
     * @var string
     */
    private $reportTitle;

    /**
     * @var int
     */
    private $secondToLastValue;

    /**
     * @var float
     */
    private $skewness;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $sources;

    /**
     * @var float
     */
    private $standardDeviation;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var int
     */
    private $thirdToLastValue;

    /**
     * @var string
     */
    private $trackingReminderNotificationsCount;

    /**
     * @var string
     */
    private $trackingRemindersCount;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $userErrorMessage;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $userMaximumAllowedDailyValue;

    /**
     * @var string
     */
    private $userMinimumAllowedDailyValue;

    /**
     * @var string
     */
    private $userMinimumAllowedNonZeroValue;

    /**
     * @var string
     */
    private $userTagsWhereTagUserVariableCount;

    /**
     * @var string
     */
    private $userTagsWhereTaggedUserVariableCount;

    /**
     * @var string
     */
    private $userVariableClientsCount;

    /**
     * @var string
     */
    private $userVariableOutcomeCategoriesCount;

    /**
     * @var string
     */
    private $userVariablePredictorCategoriesCount;

    /**
     * @var string
     */
    private $valence;

    /**
     * @var int
     */
    private $variableCategoryId;

    /**
     * @var int
     */
    private $variableId;

    /**
     * @var string
     */
    private $variableUserSourcesCount;

    /**
     * @var float
     */
    private $variance;

    /**
     * @var string
     */
    private $wikipediaTitle;

    /**
     * @var string
     */
    private $wpPostId;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return PredictorUserVariable
     */
    public function setId(?int $id): PredictorUserVariable
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
     * @return PredictorUserVariable
     */
    public function setTitle(?string $title): PredictorUserVariable
    {
        $this->title = $title;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return PredictorUserVariable
     */
    public function setName(?string $name): PredictorUserVariable
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return PredictorUserVariable
     */
    public function setDescription(?string $description): PredictorUserVariable
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisEndedAt(): ?string
    {
        return $this->analysisEndedAt;
    }

    /**
     * @param string|null $analysisEndedAt
     *
     * @return PredictorUserVariable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): PredictorUserVariable
    {
        $this->analysisEndedAt = $analysisEndedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisRequestedAt(): ?string
    {
        return $this->analysisRequestedAt;
    }

    /**
     * @param string|null $analysisRequestedAt
     *
     * @return PredictorUserVariable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): PredictorUserVariable
    {
        $this->analysisRequestedAt = $analysisRequestedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisSettingsModifiedAt(): ?string
    {
        return $this->analysisSettingsModifiedAt;
    }

    /**
     * @param string|null $analysisSettingsModifiedAt
     *
     * @return PredictorUserVariable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): PredictorUserVariable
    {
        $this->analysisSettingsModifiedAt = $analysisSettingsModifiedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisStartedAt(): ?string
    {
        return $this->analysisStartedAt;
    }

    /**
     * @param string|null $analysisStartedAt
     *
     * @return PredictorUserVariable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): PredictorUserVariable
    {
        $this->analysisStartedAt = $analysisStartedAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAverageSecondsBetweenMeasurements(): ?int
    {
        return $this->averageSecondsBetweenMeasurements;
    }

    /**
     * @param int|null $averageSecondsBetweenMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setAverageSecondsBetweenMeasurements(?int $averageSecondsBetweenMeasurements): PredictorUserVariable
    {
        $this->averageSecondsBetweenMeasurements = $averageSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestCauseVariableId(): ?string
    {
        return $this->bestCauseVariableId;
    }

    /**
     * @param string|null $bestCauseVariableId
     *
     * @return PredictorUserVariable
     */
    public function setBestCauseVariableId(?string $bestCauseVariableId): PredictorUserVariable
    {
        $this->bestCauseVariableId = $bestCauseVariableId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestCorrelationsWhereCauseUserVariableCount(): ?string
    {
        return $this->bestCorrelationsWhereCauseUserVariableCount;
    }

    /**
     * @param string|null $bestCorrelationsWhereCauseUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setBestCorrelationsWhereCauseUserVariableCount(?string $bestCorrelationsWhereCauseUserVariableCount): PredictorUserVariable
    {
        $this->bestCorrelationsWhereCauseUserVariableCount = $bestCorrelationsWhereCauseUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestCorrelationsWhereEffectUserVariableCount(): ?string
    {
        return $this->bestCorrelationsWhereEffectUserVariableCount;
    }

    /**
     * @param string|null $bestCorrelationsWhereEffectUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setBestCorrelationsWhereEffectUserVariableCount(?string $bestCorrelationsWhereEffectUserVariableCount): PredictorUserVariable
    {
        $this->bestCorrelationsWhereEffectUserVariableCount = $bestCorrelationsWhereEffectUserVariableCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBestEffectVariableId(): ?int
    {
        return $this->bestEffectVariableId;
    }

    /**
     * @param int|null $bestEffectVariableId
     *
     * @return PredictorUserVariable
     */
    public function setBestEffectVariableId(?int $bestEffectVariableId): PredictorUserVariable
    {
        $this->bestEffectVariableId = $bestEffectVariableId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBestUserCorrelationId(): ?int
    {
        return $this->bestUserCorrelationId;
    }

    /**
     * @param int|null $bestUserCorrelationId
     *
     * @return PredictorUserVariable
     */
    public function setBestUserCorrelationId(?int $bestUserCorrelationId): PredictorUserVariable
    {
        $this->bestUserCorrelationId = $bestUserCorrelationId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBoring(): ?string
    {
        return $this->boring;
    }

    /**
     * @param string|null $boring
     *
     * @return PredictorUserVariable
     */
    public function setBoring(?string $boring): PredictorUserVariable
    {
        $this->boring = $boring;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isCauseOnly(): ?bool
    {
        return $this->causeOnly;
    }

    /**
     * @param bool|null $causeOnly
     *
     * @return PredictorUserVariable
     */
    public function setCauseOnly(?bool $causeOnly): PredictorUserVariable
    {
        $this->causeOnly = $causeOnly;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return PredictorUserVariable
     */
    public function setClientId(?string $clientId): PredictorUserVariable
    {
        $this->clientId = $clientId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCombinationOperation(): ?string
    {
        return $this->combinationOperation;
    }

    /**
     * @param string|null $combinationOperation
     *
     * @return PredictorUserVariable
     */
    public function setCombinationOperation(?string $combinationOperation): PredictorUserVariable
    {
        $this->combinationOperation = $combinationOperation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getControllable(): ?string
    {
        return $this->controllable;
    }

    /**
     * @param string|null $controllable
     *
     * @return PredictorUserVariable
     */
    public function setControllable(?string $controllable): PredictorUserVariable
    {
        $this->controllable = $controllable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationsCount(): ?string
    {
        return $this->correlationsCount;
    }

    /**
     * @param string|null $correlationsCount
     *
     * @return PredictorUserVariable
     */
    public function setCorrelationsCount(?string $correlationsCount): PredictorUserVariable
    {
        $this->correlationsCount = $correlationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationsWhereCauseUserVariableCount(): ?string
    {
        return $this->correlationsWhereCauseUserVariableCount;
    }

    /**
     * @param string|null $correlationsWhereCauseUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setCorrelationsWhereCauseUserVariableCount(?string $correlationsWhereCauseUserVariableCount): PredictorUserVariable
    {
        $this->correlationsWhereCauseUserVariableCount = $correlationsWhereCauseUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationsWhereEffectUserVariableCount(): ?string
    {
        return $this->correlationsWhereEffectUserVariableCount;
    }

    /**
     * @param string|null $correlationsWhereEffectUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setCorrelationsWhereEffectUserVariableCount(?string $correlationsWhereEffectUserVariableCount): PredictorUserVariable
    {
        $this->correlationsWhereEffectUserVariableCount = $correlationsWhereEffectUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string|null $createdAt
     *
     * @return PredictorUserVariable
     */
    public function setCreatedAt(?string $createdAt): PredictorUserVariable
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return DataSourcesCount|null
     */
    public function getDataSourcesCount(): ?DataSourcesCount
    {
        return $this->dataSourcesCount;
    }

    /**
     * @param DataSourcesCount|null $dataSourcesCount
     *
     * @return PredictorUserVariable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): PredictorUserVariable
    {
        $this->dataSourcesCount = $dataSourcesCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDefaultUnitId(): ?int
    {
        return $this->defaultUnitId;
    }

    /**
     * @param int|null $defaultUnitId
     *
     * @return PredictorUserVariable
     */
    public function setDefaultUnitId(?int $defaultUnitId): PredictorUserVariable
    {
        $this->defaultUnitId = $defaultUnitId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDurationOfAction(): ?int
    {
        return $this->durationOfAction;
    }

    /**
     * @param int|null $durationOfAction
     *
     * @return PredictorUserVariable
     */
    public function setDurationOfAction(?int $durationOfAction): PredictorUserVariable
    {
        $this->durationOfAction = $durationOfAction;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEarliestNonTaggedMeasurementStartAt(): ?string
    {
        return $this->earliestNonTaggedMeasurementStartAt;
    }

    /**
     * @param string|null $earliestNonTaggedMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): PredictorUserVariable
    {
        $this->earliestNonTaggedMeasurementStartAt = $earliestNonTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEarliestSourceMeasurementStartAt(): ?string
    {
        return $this->earliestSourceMeasurementStartAt;
    }

    /**
     * @param string|null $earliestSourceMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setEarliestSourceMeasurementStartAt(?string $earliestSourceMeasurementStartAt): PredictorUserVariable
    {
        $this->earliestSourceMeasurementStartAt = $earliestSourceMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEarliestTaggedMeasurementStartAt(): ?string
    {
        return $this->earliestTaggedMeasurementStartAt;
    }

    /**
     * @param string|null $earliestTaggedMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): PredictorUserVariable
    {
        $this->earliestTaggedMeasurementStartAt = $earliestTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     *
     * @return PredictorUserVariable
     */
    public function setErrorMessage(?string $errorMessage): PredictorUserVariable
    {
        $this->errorMessage = $errorMessage;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFavoritersCount(): ?string
    {
        return $this->favoritersCount;
    }

    /**
     * @param string|null $favoritersCount
     *
     * @return PredictorUserVariable
     */
    public function setFavoritersCount(?string $favoritersCount): PredictorUserVariable
    {
        $this->favoritersCount = $favoritersCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFavoritesCount(): ?string
    {
        return $this->favoritesCount;
    }

    /**
     * @param string|null $favoritesCount
     *
     * @return PredictorUserVariable
     */
    public function setFavoritesCount(?string $favoritesCount): PredictorUserVariable
    {
        $this->favoritesCount = $favoritesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFillingType(): ?string
    {
        return $this->fillingType;
    }

    /**
     * @param string|null $fillingType
     *
     * @return PredictorUserVariable
     */
    public function setFillingType(?string $fillingType): PredictorUserVariable
    {
        $this->fillingType = $fillingType;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFillingValue(): ?string
    {
        return $this->fillingValue;
    }

    /**
     * @param string|null $fillingValue
     *
     * @return PredictorUserVariable
     */
    public function setFillingValue(?string $fillingValue): PredictorUserVariable
    {
        $this->fillingValue = $fillingValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInformationalUrl(): ?string
    {
        return $this->informationalUrl;
    }

    /**
     * @param string|null $informationalUrl
     *
     * @return PredictorUserVariable
     */
    public function setInformationalUrl(?string $informationalUrl): PredictorUserVariable
    {
        $this->informationalUrl = $informationalUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsGoal(): ?string
    {
        return $this->isGoal;
    }

    /**
     * @param string|null $isGoal
     *
     * @return PredictorUserVariable
     */
    public function setIsGoal(?string $isGoal): PredictorUserVariable
    {
        $this->isGoal = $isGoal;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsPublic(): ?string
    {
        return $this->isPublic;
    }

    /**
     * @param string|null $isPublic
     *
     * @return PredictorUserVariable
     */
    public function setIsPublic(?string $isPublic): PredictorUserVariable
    {
        $this->isPublic = $isPublic;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJoinWith(): ?string
    {
        return $this->joinWith;
    }

    /**
     * @param string|null $joinWith
     *
     * @return PredictorUserVariable
     */
    public function setJoinWith(?string $joinWith): PredictorUserVariable
    {
        $this->joinWith = $joinWith;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getKurtosis(): ?float
    {
        return $this->kurtosis;
    }

    /**
     * @param float|null $kurtosis
     *
     * @return PredictorUserVariable
     */
    public function setKurtosis(?float $kurtosis): PredictorUserVariable
    {
        $this->kurtosis = $kurtosis;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastCorrelatedAt(): ?string
    {
        return $this->lastCorrelatedAt;
    }

    /**
     * @param string|null $lastCorrelatedAt
     *
     * @return PredictorUserVariable
     */
    public function setLastCorrelatedAt(?string $lastCorrelatedAt): PredictorUserVariable
    {
        $this->lastCorrelatedAt = $lastCorrelatedAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastOriginalUnitId(): ?int
    {
        return $this->lastOriginalUnitId;
    }

    /**
     * @param int|null $lastOriginalUnitId
     *
     * @return PredictorUserVariable
     */
    public function setLastOriginalUnitId(?int $lastOriginalUnitId): PredictorUserVariable
    {
        $this->lastOriginalUnitId = $lastOriginalUnitId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastOriginalValue(): ?int
    {
        return $this->lastOriginalValue;
    }

    /**
     * @param int|null $lastOriginalValue
     *
     * @return PredictorUserVariable
     */
    public function setLastOriginalValue(?int $lastOriginalValue): PredictorUserVariable
    {
        $this->lastOriginalValue = $lastOriginalValue;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastUnitId(): ?int
    {
        return $this->lastUnitId;
    }

    /**
     * @param int|null $lastUnitId
     *
     * @return PredictorUserVariable
     */
    public function setLastUnitId(?int $lastUnitId): PredictorUserVariable
    {
        $this->lastUnitId = $lastUnitId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastValue(): ?int
    {
        return $this->lastValue;
    }

    /**
     * @param int|null $lastValue
     *
     * @return PredictorUserVariable
     */
    public function setLastValue(?int $lastValue): PredictorUserVariable
    {
        $this->lastValue = $lastValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestNonTaggedMeasurementStartAt(): ?string
    {
        return $this->latestNonTaggedMeasurementStartAt;
    }

    /**
     * @param string|null $latestNonTaggedMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): PredictorUserVariable
    {
        $this->latestNonTaggedMeasurementStartAt = $latestNonTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestSourceMeasurementStartAt(): ?string
    {
        return $this->latestSourceMeasurementStartAt;
    }

    /**
     * @param string|null $latestSourceMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setLatestSourceMeasurementStartAt(?string $latestSourceMeasurementStartAt): PredictorUserVariable
    {
        $this->latestSourceMeasurementStartAt = $latestSourceMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestTaggedMeasurementStartAt(): ?string
    {
        return $this->latestTaggedMeasurementStartAt;
    }

    /**
     * @param string|null $latestTaggedMeasurementStartAt
     *
     * @return PredictorUserVariable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): PredictorUserVariable
    {
        $this->latestTaggedMeasurementStartAt = $latestTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaximumAllowedValue(): ?string
    {
        return $this->maximumAllowedValue;
    }

    /**
     * @param string|null $maximumAllowedValue
     *
     * @return PredictorUserVariable
     */
    public function setMaximumAllowedValue(?string $maximumAllowedValue): PredictorUserVariable
    {
        $this->maximumAllowedValue = $maximumAllowedValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaximumRecordedDailyValue(): ?string
    {
        return $this->maximumRecordedDailyValue;
    }

    /**
     * @param string|null $maximumRecordedDailyValue
     *
     * @return PredictorUserVariable
     */
    public function setMaximumRecordedDailyValue(?string $maximumRecordedDailyValue): PredictorUserVariable
    {
        $this->maximumRecordedDailyValue = $maximumRecordedDailyValue;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaximumRecordedValue(): ?int
    {
        return $this->maximumRecordedValue;
    }

    /**
     * @param int|null $maximumRecordedValue
     *
     * @return PredictorUserVariable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): PredictorUserVariable
    {
        $this->maximumRecordedValue = $maximumRecordedValue;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMean(): ?float
    {
        return $this->mean;
    }

    /**
     * @param float|null $mean
     *
     * @return PredictorUserVariable
     */
    public function setMean(?float $mean): PredictorUserVariable
    {
        $this->mean = $mean;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMeasurementsAtLastAnalysis(): ?int
    {
        return $this->measurementsAtLastAnalysis;
    }

    /**
     * @param int|null $measurementsAtLastAnalysis
     *
     * @return PredictorUserVariable
     */
    public function setMeasurementsAtLastAnalysis(?int $measurementsAtLastAnalysis): PredictorUserVariable
    {
        $this->measurementsAtLastAnalysis = $measurementsAtLastAnalysis;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMeasurementsCount(): ?string
    {
        return $this->measurementsCount;
    }

    /**
     * @param string|null $measurementsCount
     *
     * @return PredictorUserVariable
     */
    public function setMeasurementsCount(?string $measurementsCount): PredictorUserVariable
    {
        $this->measurementsCount = $measurementsCount;
        
        return $this;
    }

    /**
     * @return Measurements|null
     */
    public function getMeasurements(): ?Measurements
    {
        return $this->measurements;
    }

    /**
     * @param Measurements|null $measurements
     *
     * @return PredictorUserVariable
     */
    public function setMeasurements(?Measurements $measurements): PredictorUserVariable
    {
        $this->measurements = $measurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMediaCount(): ?string
    {
        return $this->mediaCount;
    }

    /**
     * @param string|null $mediaCount
     *
     * @return PredictorUserVariable
     */
    public function setMediaCount(?string $mediaCount): PredictorUserVariable
    {
        $this->mediaCount = $mediaCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedian(): ?int
    {
        return $this->median;
    }

    /**
     * @param int|null $median
     *
     * @return PredictorUserVariable
     */
    public function setMedian(?int $median): PredictorUserVariable
    {
        $this->median = $median;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMedianSecondsBetweenMeasurements(): ?int
    {
        return $this->medianSecondsBetweenMeasurements;
    }

    /**
     * @param int|null $medianSecondsBetweenMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setMedianSecondsBetweenMeasurements(?int $medianSecondsBetweenMeasurements): PredictorUserVariable
    {
        $this->medianSecondsBetweenMeasurements = $medianSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinimumAllowedSecondsBetweenMeasurements(): ?int
    {
        return $this->minimumAllowedSecondsBetweenMeasurements;
    }

    /**
     * @param int|null $minimumAllowedSecondsBetweenMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): PredictorUserVariable
    {
        $this->minimumAllowedSecondsBetweenMeasurements = $minimumAllowedSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinimumAllowedValue(): ?int
    {
        return $this->minimumAllowedValue;
    }

    /**
     * @param int|null $minimumAllowedValue
     *
     * @return PredictorUserVariable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): PredictorUserVariable
    {
        $this->minimumAllowedValue = $minimumAllowedValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMinimumRecordedDailyValue(): ?string
    {
        return $this->minimumRecordedDailyValue;
    }

    /**
     * @param string|null $minimumRecordedDailyValue
     *
     * @return PredictorUserVariable
     */
    public function setMinimumRecordedDailyValue(?string $minimumRecordedDailyValue): PredictorUserVariable
    {
        $this->minimumRecordedDailyValue = $minimumRecordedDailyValue;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinimumRecordedValue(): ?int
    {
        return $this->minimumRecordedValue;
    }

    /**
     * @param int|null $minimumRecordedValue
     *
     * @return PredictorUserVariable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): PredictorUserVariable
    {
        $this->minimumRecordedValue = $minimumRecordedValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMostCommonConnectorId(): ?string
    {
        return $this->mostCommonConnectorId;
    }

    /**
     * @param string|null $mostCommonConnectorId
     *
     * @return PredictorUserVariable
     */
    public function setMostCommonConnectorId(?string $mostCommonConnectorId): PredictorUserVariable
    {
        $this->mostCommonConnectorId = $mostCommonConnectorId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMostCommonOriginalUnitId(): ?string
    {
        return $this->mostCommonOriginalUnitId;
    }

    /**
     * @param string|null $mostCommonOriginalUnitId
     *
     * @return PredictorUserVariable
     */
    public function setMostCommonOriginalUnitId(?string $mostCommonOriginalUnitId): PredictorUserVariable
    {
        $this->mostCommonOriginalUnitId = $mostCommonOriginalUnitId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMostCommonSourceName(): ?string
    {
        return $this->mostCommonSourceName;
    }

    /**
     * @param string|null $mostCommonSourceName
     *
     * @return PredictorUserVariable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): PredictorUserVariable
    {
        $this->mostCommonSourceName = $mostCommonSourceName;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMostCommonValue(): ?int
    {
        return $this->mostCommonValue;
    }

    /**
     * @param int|null $mostCommonValue
     *
     * @return PredictorUserVariable
     */
    public function setMostCommonValue(?int $mostCommonValue): PredictorUserVariable
    {
        $this->mostCommonValue = $mostCommonValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewestDataAt(): ?string
    {
        return $this->newestDataAt;
    }

    /**
     * @param string|null $newestDataAt
     *
     * @return PredictorUserVariable
     */
    public function setNewestDataAt(?string $newestDataAt): PredictorUserVariable
    {
        $this->newestDataAt = $newestDataAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberCommonTaggedBy(): ?int
    {
        return $this->numberCommonTaggedBy;
    }

    /**
     * @param int|null $numberCommonTaggedBy
     *
     * @return PredictorUserVariable
     */
    public function setNumberCommonTaggedBy(?int $numberCommonTaggedBy): PredictorUserVariable
    {
        $this->numberCommonTaggedBy = $numberCommonTaggedBy;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfChanges(): ?int
    {
        return $this->numberOfChanges;
    }

    /**
     * @param int|null $numberOfChanges
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfChanges(?int $numberOfChanges): PredictorUserVariable
    {
        $this->numberOfChanges = $numberOfChanges;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonChildren(): ?string
    {
        return $this->numberOfCommonChildren;
    }

    /**
     * @param string|null $numberOfCommonChildren
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): PredictorUserVariable
    {
        $this->numberOfCommonChildren = $numberOfCommonChildren;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonFoods(): ?string
    {
        return $this->numberOfCommonFoods;
    }

    /**
     * @param string|null $numberOfCommonFoods
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): PredictorUserVariable
    {
        $this->numberOfCommonFoods = $numberOfCommonFoods;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonIngredients(): ?string
    {
        return $this->numberOfCommonIngredients;
    }

    /**
     * @param string|null $numberOfCommonIngredients
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): PredictorUserVariable
    {
        $this->numberOfCommonIngredients = $numberOfCommonIngredients;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonJoinedVariables(): ?string
    {
        return $this->numberOfCommonJoinedVariables;
    }

    /**
     * @param string|null $numberOfCommonJoinedVariables
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): PredictorUserVariable
    {
        $this->numberOfCommonJoinedVariables = $numberOfCommonJoinedVariables;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonParents(): ?string
    {
        return $this->numberOfCommonParents;
    }

    /**
     * @param string|null $numberOfCommonParents
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): PredictorUserVariable
    {
        $this->numberOfCommonParents = $numberOfCommonParents;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonTags(): ?string
    {
        return $this->numberOfCommonTags;
    }

    /**
     * @param string|null $numberOfCommonTags
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCommonTags(?string $numberOfCommonTags): PredictorUserVariable
    {
        $this->numberOfCommonTags = $numberOfCommonTags;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCorrelations(): ?int
    {
        return $this->numberOfCorrelations;
    }

    /**
     * @param int|null $numberOfCorrelations
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfCorrelations(?int $numberOfCorrelations): PredictorUserVariable
    {
        $this->numberOfCorrelations = $numberOfCorrelations;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfMeasurements(): ?int
    {
        return $this->numberOfMeasurements;
    }

    /**
     * @param int|null $numberOfMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): PredictorUserVariable
    {
        $this->numberOfMeasurements = $numberOfMeasurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfMeasurementsWithTagsAtLastCorrelation(): ?string
    {
        return $this->numberOfMeasurementsWithTagsAtLastCorrelation;
    }

    /**
     * @param string|null $numberOfMeasurementsWithTagsAtLastCorrelation
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfMeasurementsWithTagsAtLastCorrelation(?string $numberOfMeasurementsWithTagsAtLastCorrelation): PredictorUserVariable
    {
        $this->numberOfMeasurementsWithTagsAtLastCorrelation = $numberOfMeasurementsWithTagsAtLastCorrelation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfOutcomeCaseStudies(): ?string
    {
        return $this->numberOfOutcomeCaseStudies;
    }

    /**
     * @param string|null $numberOfOutcomeCaseStudies
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): PredictorUserVariable
    {
        $this->numberOfOutcomeCaseStudies = $numberOfOutcomeCaseStudies;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfProcessedDailyMeasurements(): ?int
    {
        return $this->numberOfProcessedDailyMeasurements;
    }

    /**
     * @param int|null $numberOfProcessedDailyMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfProcessedDailyMeasurements(?int $numberOfProcessedDailyMeasurements): PredictorUserVariable
    {
        $this->numberOfProcessedDailyMeasurements = $numberOfProcessedDailyMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRawMeasurementsWithTagsJoinsChildren(): ?int
    {
        return $this->numberOfRawMeasurementsWithTagsJoinsChildren;
    }

    /**
     * @param int|null $numberOfRawMeasurementsWithTagsJoinsChildren
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): PredictorUserVariable
    {
        $this->numberOfRawMeasurementsWithTagsJoinsChildren = $numberOfRawMeasurementsWithTagsJoinsChildren;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfSoftDeletedMeasurements(): ?int
    {
        return $this->numberOfSoftDeletedMeasurements;
    }

    /**
     * @param int|null $numberOfSoftDeletedMeasurements
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfSoftDeletedMeasurements(?int $numberOfSoftDeletedMeasurements): PredictorUserVariable
    {
        $this->numberOfSoftDeletedMeasurements = $numberOfSoftDeletedMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfTrackingReminderNotifications(): ?int
    {
        return $this->numberOfTrackingReminderNotifications;
    }

    /**
     * @param int|null $numberOfTrackingReminderNotifications
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfTrackingReminderNotifications(?int $numberOfTrackingReminderNotifications): PredictorUserVariable
    {
        $this->numberOfTrackingReminderNotifications = $numberOfTrackingReminderNotifications;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfTrackingReminders(): ?int
    {
        return $this->numberOfTrackingReminders;
    }

    /**
     * @param int|null $numberOfTrackingReminders
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfTrackingReminders(?int $numberOfTrackingReminders): PredictorUserVariable
    {
        $this->numberOfTrackingReminders = $numberOfTrackingReminders;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUniqueDailyValues(): ?int
    {
        return $this->numberOfUniqueDailyValues;
    }

    /**
     * @param int|null $numberOfUniqueDailyValues
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUniqueDailyValues(?int $numberOfUniqueDailyValues): PredictorUserVariable
    {
        $this->numberOfUniqueDailyValues = $numberOfUniqueDailyValues;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUniqueValues(): ?int
    {
        return $this->numberOfUniqueValues;
    }

    /**
     * @param int|null $numberOfUniqueValues
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): PredictorUserVariable
    {
        $this->numberOfUniqueValues = $numberOfUniqueValues;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserChildren(): ?string
    {
        return $this->numberOfUserChildren;
    }

    /**
     * @param string|null $numberOfUserChildren
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): PredictorUserVariable
    {
        $this->numberOfUserChildren = $numberOfUserChildren;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserCorrelationsAsCause(): ?int
    {
        return $this->numberOfUserCorrelationsAsCause;
    }

    /**
     * @param int|null $numberOfUserCorrelationsAsCause
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserCorrelationsAsCause(?int $numberOfUserCorrelationsAsCause): PredictorUserVariable
    {
        $this->numberOfUserCorrelationsAsCause = $numberOfUserCorrelationsAsCause;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserCorrelationsAsEffect(): ?int
    {
        return $this->numberOfUserCorrelationsAsEffect;
    }

    /**
     * @param int|null $numberOfUserCorrelationsAsEffect
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserCorrelationsAsEffect(?int $numberOfUserCorrelationsAsEffect): PredictorUserVariable
    {
        $this->numberOfUserCorrelationsAsEffect = $numberOfUserCorrelationsAsEffect;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserFoods(): ?string
    {
        return $this->numberOfUserFoods;
    }

    /**
     * @param string|null $numberOfUserFoods
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): PredictorUserVariable
    {
        $this->numberOfUserFoods = $numberOfUserFoods;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserIngredients(): ?string
    {
        return $this->numberOfUserIngredients;
    }

    /**
     * @param string|null $numberOfUserIngredients
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): PredictorUserVariable
    {
        $this->numberOfUserIngredients = $numberOfUserIngredients;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserJoinedVariables(): ?string
    {
        return $this->numberOfUserJoinedVariables;
    }

    /**
     * @param string|null $numberOfUserJoinedVariables
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): PredictorUserVariable
    {
        $this->numberOfUserJoinedVariables = $numberOfUserJoinedVariables;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserParents(): ?string
    {
        return $this->numberOfUserParents;
    }

    /**
     * @param string|null $numberOfUserParents
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): PredictorUserVariable
    {
        $this->numberOfUserParents = $numberOfUserParents;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserTags(): ?int
    {
        return $this->numberOfUserTags;
    }

    /**
     * @param int|null $numberOfUserTags
     *
     * @return PredictorUserVariable
     */
    public function setNumberOfUserTags(?int $numberOfUserTags): PredictorUserVariable
    {
        $this->numberOfUserTags = $numberOfUserTags;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberUserTaggedBy(): ?int
    {
        return $this->numberUserTaggedBy;
    }

    /**
     * @param int|null $numberUserTaggedBy
     *
     * @return PredictorUserVariable
     */
    public function setNumberUserTaggedBy(?int $numberUserTaggedBy): PredictorUserVariable
    {
        $this->numberUserTaggedBy = $numberUserTaggedBy;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOnsetDelay(): ?int
    {
        return $this->onsetDelay;
    }

    /**
     * @param int|null $onsetDelay
     *
     * @return PredictorUserVariable
     */
    public function setOnsetDelay(?int $onsetDelay): PredictorUserVariable
    {
        $this->onsetDelay = $onsetDelay;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptimalValueMessage(): ?string
    {
        return $this->optimalValueMessage;
    }

    /**
     * @param string|null $optimalValueMessage
     *
     * @return PredictorUserVariable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): PredictorUserVariable
    {
        $this->optimalValueMessage = $optimalValueMessage;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isOutcome(): ?bool
    {
        return $this->outcome;
    }

    /**
     * @param bool|null $outcome
     *
     * @return PredictorUserVariable
     */
    public function setOutcome(?bool $outcome): PredictorUserVariable
    {
        $this->outcome = $outcome;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOutcomeOfInterest(): ?int
    {
        return $this->outcomeOfInterest;
    }

    /**
     * @param int|null $outcomeOfInterest
     *
     * @return PredictorUserVariable
     */
    public function setOutcomeOfInterest(?int $outcomeOfInterest): PredictorUserVariable
    {
        $this->outcomeOfInterest = $outcomeOfInterest;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutcomesCount(): ?string
    {
        return $this->outcomesCount;
    }

    /**
     * @param string|null $outcomesCount
     *
     * @return PredictorUserVariable
     */
    public function setOutcomesCount(?string $outcomesCount): PredictorUserVariable
    {
        $this->outcomesCount = $outcomesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param string|null $parentId
     *
     * @return PredictorUserVariable
     */
    public function setParentId(?string $parentId): PredictorUserVariable
    {
        $this->parentId = $parentId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPredictor(): ?string
    {
        return $this->predictor;
    }

    /**
     * @param string|null $predictor
     *
     * @return PredictorUserVariable
     */
    public function setPredictor(?string $predictor): PredictorUserVariable
    {
        $this->predictor = $predictor;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPredictorOfInterest(): ?string
    {
        return $this->predictorOfInterest;
    }

    /**
     * @param string|null $predictorOfInterest
     *
     * @return PredictorUserVariable
     */
    public function setPredictorOfInterest(?string $predictorOfInterest): PredictorUserVariable
    {
        $this->predictorOfInterest = $predictorOfInterest;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPredictorsCount(): ?string
    {
        return $this->predictorsCount;
    }

    /**
     * @param string|null $predictorsCount
     *
     * @return PredictorUserVariable
     */
    public function setPredictorsCount(?string $predictorsCount): PredictorUserVariable
    {
        $this->predictorsCount = $predictorsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReasonForAnalysis(): ?string
    {
        return $this->reasonForAnalysis;
    }

    /**
     * @param string|null $reasonForAnalysis
     *
     * @return PredictorUserVariable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): PredictorUserVariable
    {
        $this->reasonForAnalysis = $reasonForAnalysis;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecordSizeInKb(): ?string
    {
        return $this->recordSizeInKb;
    }

    /**
     * @param string|null $recordSizeInKb
     *
     * @return PredictorUserVariable
     */
    public function setRecordSizeInKb(?string $recordSizeInKb): PredictorUserVariable
    {
        $this->recordSizeInKb = $recordSizeInKb;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReportTitle(): ?string
    {
        return $this->reportTitle;
    }

    /**
     * @param string|null $reportTitle
     *
     * @return PredictorUserVariable
     */
    public function setReportTitle(?string $reportTitle): PredictorUserVariable
    {
        $this->reportTitle = $reportTitle;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSecondToLastValue(): ?int
    {
        return $this->secondToLastValue;
    }

    /**
     * @param int|null $secondToLastValue
     *
     * @return PredictorUserVariable
     */
    public function setSecondToLastValue(?int $secondToLastValue): PredictorUserVariable
    {
        $this->secondToLastValue = $secondToLastValue;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getSkewness(): ?float
    {
        return $this->skewness;
    }

    /**
     * @param float|null $skewness
     *
     * @return PredictorUserVariable
     */
    public function setSkewness(?float $skewness): PredictorUserVariable
    {
        $this->skewness = $skewness;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     *
     * @return PredictorUserVariable
     */
    public function setSlug(?string $slug): PredictorUserVariable
    {
        $this->slug = $slug;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSources(): ?string
    {
        return $this->sources;
    }

    /**
     * @param string|null $sources
     *
     * @return PredictorUserVariable
     */
    public function setSources(?string $sources): PredictorUserVariable
    {
        $this->sources = $sources;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getStandardDeviation(): ?float
    {
        return $this->standardDeviation;
    }

    /**
     * @param float|null $standardDeviation
     *
     * @return PredictorUserVariable
     */
    public function setStandardDeviation(?float $standardDeviation): PredictorUserVariable
    {
        $this->standardDeviation = $standardDeviation;
        
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
     * @return PredictorUserVariable
     */
    public function setSubtitle(?string $subtitle): PredictorUserVariable
    {
        $this->subtitle = $subtitle;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThirdToLastValue(): ?int
    {
        return $this->thirdToLastValue;
    }

    /**
     * @param int|null $thirdToLastValue
     *
     * @return PredictorUserVariable
     */
    public function setThirdToLastValue(?int $thirdToLastValue): PredictorUserVariable
    {
        $this->thirdToLastValue = $thirdToLastValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingReminderNotificationsCount(): ?string
    {
        return $this->trackingReminderNotificationsCount;
    }

    /**
     * @param string|null $trackingReminderNotificationsCount
     *
     * @return PredictorUserVariable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): PredictorUserVariable
    {
        $this->trackingReminderNotificationsCount = $trackingReminderNotificationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingRemindersCount(): ?string
    {
        return $this->trackingRemindersCount;
    }

    /**
     * @param string|null $trackingRemindersCount
     *
     * @return PredictorUserVariable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): PredictorUserVariable
    {
        $this->trackingRemindersCount = $trackingRemindersCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return PredictorUserVariable
     */
    public function setUpdatedAt(?string $updatedAt): PredictorUserVariable
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserErrorMessage(): ?string
    {
        return $this->userErrorMessage;
    }

    /**
     * @param string|null $userErrorMessage
     *
     * @return PredictorUserVariable
     */
    public function setUserErrorMessage(?string $userErrorMessage): PredictorUserVariable
    {
        $this->userErrorMessage = $userErrorMessage;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     *
     * @return PredictorUserVariable
     */
    public function setUserId(?int $userId): PredictorUserVariable
    {
        $this->userId = $userId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserMaximumAllowedDailyValue(): ?string
    {
        return $this->userMaximumAllowedDailyValue;
    }

    /**
     * @param string|null $userMaximumAllowedDailyValue
     *
     * @return PredictorUserVariable
     */
    public function setUserMaximumAllowedDailyValue(?string $userMaximumAllowedDailyValue): PredictorUserVariable
    {
        $this->userMaximumAllowedDailyValue = $userMaximumAllowedDailyValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserMinimumAllowedDailyValue(): ?string
    {
        return $this->userMinimumAllowedDailyValue;
    }

    /**
     * @param string|null $userMinimumAllowedDailyValue
     *
     * @return PredictorUserVariable
     */
    public function setUserMinimumAllowedDailyValue(?string $userMinimumAllowedDailyValue): PredictorUserVariable
    {
        $this->userMinimumAllowedDailyValue = $userMinimumAllowedDailyValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserMinimumAllowedNonZeroValue(): ?string
    {
        return $this->userMinimumAllowedNonZeroValue;
    }

    /**
     * @param string|null $userMinimumAllowedNonZeroValue
     *
     * @return PredictorUserVariable
     */
    public function setUserMinimumAllowedNonZeroValue(?string $userMinimumAllowedNonZeroValue): PredictorUserVariable
    {
        $this->userMinimumAllowedNonZeroValue = $userMinimumAllowedNonZeroValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTagsWhereTagUserVariableCount(): ?string
    {
        return $this->userTagsWhereTagUserVariableCount;
    }

    /**
     * @param string|null $userTagsWhereTagUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setUserTagsWhereTagUserVariableCount(?string $userTagsWhereTagUserVariableCount): PredictorUserVariable
    {
        $this->userTagsWhereTagUserVariableCount = $userTagsWhereTagUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTagsWhereTaggedUserVariableCount(): ?string
    {
        return $this->userTagsWhereTaggedUserVariableCount;
    }

    /**
     * @param string|null $userTagsWhereTaggedUserVariableCount
     *
     * @return PredictorUserVariable
     */
    public function setUserTagsWhereTaggedUserVariableCount(?string $userTagsWhereTaggedUserVariableCount): PredictorUserVariable
    {
        $this->userTagsWhereTaggedUserVariableCount = $userTagsWhereTaggedUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariableClientsCount(): ?string
    {
        return $this->userVariableClientsCount;
    }

    /**
     * @param string|null $userVariableClientsCount
     *
     * @return PredictorUserVariable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): PredictorUserVariable
    {
        $this->userVariableClientsCount = $userVariableClientsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariableOutcomeCategoriesCount(): ?string
    {
        return $this->userVariableOutcomeCategoriesCount;
    }

    /**
     * @param string|null $userVariableOutcomeCategoriesCount
     *
     * @return PredictorUserVariable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): PredictorUserVariable
    {
        $this->userVariableOutcomeCategoriesCount = $userVariableOutcomeCategoriesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariablePredictorCategoriesCount(): ?string
    {
        return $this->userVariablePredictorCategoriesCount;
    }

    /**
     * @param string|null $userVariablePredictorCategoriesCount
     *
     * @return PredictorUserVariable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): PredictorUserVariable
    {
        $this->userVariablePredictorCategoriesCount = $userVariablePredictorCategoriesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getValence(): ?string
    {
        return $this->valence;
    }

    /**
     * @param string|null $valence
     *
     * @return PredictorUserVariable
     */
    public function setValence(?string $valence): PredictorUserVariable
    {
        $this->valence = $valence;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVariableCategoryId(): ?int
    {
        return $this->variableCategoryId;
    }

    /**
     * @param int|null $variableCategoryId
     *
     * @return PredictorUserVariable
     */
    public function setVariableCategoryId(?int $variableCategoryId): PredictorUserVariable
    {
        $this->variableCategoryId = $variableCategoryId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVariableId(): ?int
    {
        return $this->variableId;
    }

    /**
     * @param int|null $variableId
     *
     * @return PredictorUserVariable
     */
    public function setVariableId(?int $variableId): PredictorUserVariable
    {
        $this->variableId = $variableId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariableUserSourcesCount(): ?string
    {
        return $this->variableUserSourcesCount;
    }

    /**
     * @param string|null $variableUserSourcesCount
     *
     * @return PredictorUserVariable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): PredictorUserVariable
    {
        $this->variableUserSourcesCount = $variableUserSourcesCount;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVariance(): ?float
    {
        return $this->variance;
    }

    /**
     * @param float|null $variance
     *
     * @return PredictorUserVariable
     */
    public function setVariance(?float $variance): PredictorUserVariable
    {
        $this->variance = $variance;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWikipediaTitle(): ?string
    {
        return $this->wikipediaTitle;
    }

    /**
     * @param string|null $wikipediaTitle
     *
     * @return PredictorUserVariable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): PredictorUserVariable
    {
        $this->wikipediaTitle = $wikipediaTitle;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWpPostId(): ?string
    {
        return $this->wpPostId;
    }

    /**
     * @param string|null $wpPostId
     *
     * @return PredictorUserVariable
     */
    public function setWpPostId(?string $wpPostId): PredictorUserVariable
    {
        $this->wpPostId = $wpPostId;
        
        return $this;
    }
}

