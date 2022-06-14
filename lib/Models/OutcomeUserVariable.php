<?php

namespace CureDAO\Client\Models;

class OutcomeUserVariable
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
     * @var int
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
     * @var string
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
     * @var string
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
     * @var int
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
     * @var int
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
     * @var string
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
     * @return OutcomeUserVariable
     */
    public function setId(?int $id): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setTitle(?string $title): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setName(?string $name): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setDescription(?string $description): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setAverageSecondsBetweenMeasurements(?int $averageSecondsBetweenMeasurements): OutcomeUserVariable
    {
        $this->averageSecondsBetweenMeasurements = $averageSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBestCauseVariableId(): ?int
    {
        return $this->bestCauseVariableId;
    }

    /**
     * @param int|null $bestCauseVariableId
     *
     * @return OutcomeUserVariable
     */
    public function setBestCauseVariableId(?int $bestCauseVariableId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setBestCorrelationsWhereCauseUserVariableCount(?string $bestCorrelationsWhereCauseUserVariableCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setBestCorrelationsWhereEffectUserVariableCount(?string $bestCorrelationsWhereEffectUserVariableCount): OutcomeUserVariable
    {
        $this->bestCorrelationsWhereEffectUserVariableCount = $bestCorrelationsWhereEffectUserVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestEffectVariableId(): ?string
    {
        return $this->bestEffectVariableId;
    }

    /**
     * @param string|null $bestEffectVariableId
     *
     * @return OutcomeUserVariable
     */
    public function setBestEffectVariableId(?string $bestEffectVariableId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setBestUserCorrelationId(?int $bestUserCorrelationId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setBoring(?string $boring): OutcomeUserVariable
    {
        $this->boring = $boring;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCauseOnly(): ?string
    {
        return $this->causeOnly;
    }

    /**
     * @param string|null $causeOnly
     *
     * @return OutcomeUserVariable
     */
    public function setCauseOnly(?string $causeOnly): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setClientId(?string $clientId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setCombinationOperation(?string $combinationOperation): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setControllable(?string $controllable): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setCorrelationsCount(?string $correlationsCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setCorrelationsWhereCauseUserVariableCount(?string $correlationsWhereCauseUserVariableCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setCorrelationsWhereEffectUserVariableCount(?string $correlationsWhereEffectUserVariableCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setCreatedAt(?string $createdAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setDefaultUnitId(?int $defaultUnitId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setDurationOfAction(?int $durationOfAction): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setEarliestSourceMeasurementStartAt(?string $earliestSourceMeasurementStartAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setErrorMessage(?string $errorMessage): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setFavoritersCount(?string $favoritersCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setFavoritesCount(?string $favoritesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setFillingType(?string $fillingType): OutcomeUserVariable
    {
        $this->fillingType = $fillingType;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFillingValue(): ?int
    {
        return $this->fillingValue;
    }

    /**
     * @param int|null $fillingValue
     *
     * @return OutcomeUserVariable
     */
    public function setFillingValue(?int $fillingValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setInformationalUrl(?string $informationalUrl): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setIsGoal(?string $isGoal): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setIsPublic(?string $isPublic): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setJoinWith(?string $joinWith): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setKurtosis(?float $kurtosis): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLastCorrelatedAt(?string $lastCorrelatedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLastOriginalUnitId(?int $lastOriginalUnitId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLastOriginalValue(?int $lastOriginalValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLastUnitId(?int $lastUnitId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLastValue(?int $lastValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLatestSourceMeasurementStartAt(?string $latestSourceMeasurementStartAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): OutcomeUserVariable
    {
        $this->latestTaggedMeasurementStartAt = $latestTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaximumAllowedValue(): ?int
    {
        return $this->maximumAllowedValue;
    }

    /**
     * @param int|null $maximumAllowedValue
     *
     * @return OutcomeUserVariable
     */
    public function setMaximumAllowedValue(?int $maximumAllowedValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMaximumRecordedDailyValue(?string $maximumRecordedDailyValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMean(?float $mean): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMeasurementsAtLastAnalysis(?int $measurementsAtLastAnalysis): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMeasurementsCount(?string $measurementsCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMeasurements(?Measurements $measurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMediaCount(?string $mediaCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMedian(?int $median): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMedianSecondsBetweenMeasurements(?int $medianSecondsBetweenMeasurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMinimumRecordedDailyValue(?string $minimumRecordedDailyValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMostCommonConnectorId(?string $mostCommonConnectorId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMostCommonOriginalUnitId(?string $mostCommonOriginalUnitId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setMostCommonValue(?int $mostCommonValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNewestDataAt(?string $newestDataAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberCommonTaggedBy(?int $numberCommonTaggedBy): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfChanges(?int $numberOfChanges): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCommonTags(?string $numberOfCommonTags): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfCorrelations(?int $numberOfCorrelations): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfMeasurementsWithTagsAtLastCorrelation(?string $numberOfMeasurementsWithTagsAtLastCorrelation): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfProcessedDailyMeasurements(?int $numberOfProcessedDailyMeasurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfSoftDeletedMeasurements(?int $numberOfSoftDeletedMeasurements): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfTrackingReminderNotifications(?int $numberOfTrackingReminderNotifications): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfTrackingReminders(?int $numberOfTrackingReminders): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUniqueDailyValues(?int $numberOfUniqueDailyValues): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserCorrelationsAsCause(?int $numberOfUserCorrelationsAsCause): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserCorrelationsAsEffect(?int $numberOfUserCorrelationsAsEffect): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberOfUserTags(?int $numberOfUserTags): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setNumberUserTaggedBy(?int $numberUserTaggedBy): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setOnsetDelay(?int $onsetDelay): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): OutcomeUserVariable
    {
        $this->optimalValueMessage = $optimalValueMessage;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutcome(): ?string
    {
        return $this->outcome;
    }

    /**
     * @param string|null $outcome
     *
     * @return OutcomeUserVariable
     */
    public function setOutcome(?string $outcome): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setOutcomeOfInterest(?int $outcomeOfInterest): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setOutcomesCount(?string $outcomesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setParentId(?string $parentId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setPredictor(?string $predictor): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setPredictorOfInterest(?string $predictorOfInterest): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setPredictorsCount(?string $predictorsCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setRecordSizeInKb(?string $recordSizeInKb): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setReportTitle(?string $reportTitle): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setSecondToLastValue(?int $secondToLastValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setSkewness(?float $skewness): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setSlug(?string $slug): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setSources(?string $sources): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setStandardDeviation(?float $standardDeviation): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setSubtitle(?string $subtitle): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setThirdToLastValue(?int $thirdToLastValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUpdatedAt(?string $updatedAt): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserErrorMessage(?string $userErrorMessage): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserId(?int $userId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserMaximumAllowedDailyValue(?string $userMaximumAllowedDailyValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserMinimumAllowedDailyValue(?string $userMinimumAllowedDailyValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserMinimumAllowedNonZeroValue(?string $userMinimumAllowedNonZeroValue): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserTagsWhereTagUserVariableCount(?string $userTagsWhereTagUserVariableCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserTagsWhereTaggedUserVariableCount(?string $userTagsWhereTaggedUserVariableCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setValence(?string $valence): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setVariableCategoryId(?int $variableCategoryId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setVariableId(?int $variableId): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setVariance(?float $variance): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): OutcomeUserVariable
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
     * @return OutcomeUserVariable
     */
    public function setWpPostId(?string $wpPostId): OutcomeUserVariable
    {
        $this->wpPostId = $wpPostId;
        
        return $this;
    }
}

