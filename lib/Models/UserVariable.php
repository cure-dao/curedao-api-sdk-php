<?php

namespace CureDAO\Client\Models;

use CureDAO\Client\BaseModel;

class UserVariable extends BaseModel
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $analysisEndedAt;

    /**
     * @var string
     */
    public $analysisRequestedAt;

    /**
     * @var string
     */
    public $analysisSettingsModifiedAt;

    /**
     * @var string
     */
    public $analysisStartedAt;

    /**
     * @var int
     */
    public $averageSecondsBetweenMeasurements;

    /**
     * @var string
     */
    public $bestCauseVariableId;

    /**
     * @var string
     */
    public $bestCorrelationsWhereCauseUserVariableCount;

    /**
     * @var string
     */
    public $bestCorrelationsWhereEffectUserVariableCount;

    /**
     * @var int
     */
    public $bestEffectVariableId;

    /**
     * @var int
     */
    public $bestUserCorrelationId;

    /**
     * @var string
     */
    public $boring;

    /**
     * @var bool
     */
    public $causeOnly;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $combinationOperation;

    /**
     * @var string
     */
    public $controllable;

    /**
     * @var string
     */
    public $correlationsCount;

    /**
     * @var string
     */
    public $correlationsWhereCauseUserVariableCount;

    /**
     * @var string
     */
    public $correlationsWhereEffectUserVariableCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var DataSourcesCount
     */
    public $dataSourcesCount;

    /**
     * @var int
     */
    public $defaultUnitId;

    /**
     * @var int
     */
    public $durationOfAction;

    /**
     * @var string
     */
    public $earliestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    public $earliestSourceMeasurementStartAt;

    /**
     * @var string
     */
    public $earliestTaggedMeasurementStartAt;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $favoritersCount;

    /**
     * @var string
     */
    public $favoritesCount;

    /**
     * @var string
     */
    public $fillingType;

    /**
     * @var string
     */
    public $fillingValue;

    /**
     * @var string
     */
    public $informationalUrl;

    /**
     * @var string
     */
    public $isGoal;

    /**
     * @var string
     */
    public $isPublic;

    /**
     * @var string
     */
    public $joinWith;

    /**
     * @var float
     */
    public $kurtosis;

    /**
     * @var string
     */
    public $lastCorrelatedAt;

    /**
     * @var int
     */
    public $lastOriginalUnitId;

    /**
     * @var int
     */
    public $lastOriginalValue;

    /**
     * @var int
     */
    public $lastUnitId;

    /**
     * @var int
     */
    public $lastValue;

    /**
     * @var string
     */
    public $latestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    public $latestSourceMeasurementStartAt;

    /**
     * @var string
     */
    public $latestTaggedMeasurementStartAt;

    /**
     * @var string
     */
    public $maximumAllowedValue;

    /**
     * @var string
     */
    public $maximumRecordedDailyValue;

    /**
     * @var int
     */
    public $maximumRecordedValue;

    /**
     * @var float
     */
    public $mean;

    /**
     * @var int
     */
    public $measurementsAtLastAnalysis;

    /**
     * @var string
     */
    public $measurementsCount;

    /**
     * @var Measurements
     */
    public $measurements;

    /**
     * @var string
     */
    public $mediaCount;

    /**
     * @var int
     */
    public $median;

    /**
     * @var int
     */
    public $medianSecondsBetweenMeasurements;

    /**
     * @var int
     */
    public $minimumAllowedSecondsBetweenMeasurements;

    /**
     * @var int
     */
    public $minimumAllowedValue;

    /**
     * @var string
     */
    public $minimumRecordedDailyValue;

    /**
     * @var int
     */
    public $minimumRecordedValue;

    /**
     * @var string
     */
    public $mostCommonConnectorId;

    /**
     * @var string
     */
    public $mostCommonOriginalUnitId;

    /**
     * @var string
     */
    public $mostCommonSourceName;

    /**
     * @var int
     */
    public $mostCommonValue;

    /**
     * @var string
     */
    public $newestDataAt;

    /**
     * @var int
     */
    public $numberCommonTaggedBy;

    /**
     * @var int
     */
    public $numberOfChanges;

    /**
     * @var string
     */
    public $numberOfCommonChildren;

    /**
     * @var string
     */
    public $numberOfCommonFoods;

    /**
     * @var string
     */
    public $numberOfCommonIngredients;

    /**
     * @var string
     */
    public $numberOfCommonJoinedVariables;

    /**
     * @var string
     */
    public $numberOfCommonParents;

    /**
     * @var string
     */
    public $numberOfCommonTags;

    /**
     * @var int
     */
    public $numberOfCorrelations;

    /**
     * @var int
     */
    public $numberOfMeasurements;

    /**
     * @var string
     */
    public $numberOfMeasurementsWithTagsAtLastCorrelation;

    /**
     * @var string
     */
    public $numberOfOutcomeCaseStudies;

    /**
     * @var int
     */
    public $numberOfProcessedDailyMeasurements;

    /**
     * @var int
     */
    public $numberOfRawMeasurementsWithTagsJoinsChildren;

    /**
     * @var int
     */
    public $numberOfSoftDeletedMeasurements;

    /**
     * @var int
     */
    public $numberOfTrackingReminderNotifications;

    /**
     * @var int
     */
    public $numberOfTrackingReminders;

    /**
     * @var int
     */
    public $numberOfUniqueDailyValues;

    /**
     * @var int
     */
    public $numberOfUniqueValues;

    /**
     * @var string
     */
    public $numberOfUserChildren;

    /**
     * @var int
     */
    public $numberOfUserCorrelationsAsCause;

    /**
     * @var int
     */
    public $numberOfUserCorrelationsAsEffect;

    /**
     * @var string
     */
    public $numberOfUserFoods;

    /**
     * @var string
     */
    public $numberOfUserIngredients;

    /**
     * @var string
     */
    public $numberOfUserJoinedVariables;

    /**
     * @var string
     */
    public $numberOfUserParents;

    /**
     * @var int
     */
    public $numberOfUserTags;

    /**
     * @var int
     */
    public $numberUserTaggedBy;

    /**
     * @var int
     */
    public $onsetDelay;

    /**
     * @var string
     */
    public $optimalValueMessage;

    /**
     * @var bool
     */
    public $outcome;

    /**
     * @var int
     */
    public $outcomeOfInterest;

    /**
     * @var string
     */
    public $outcomesCount;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $predictor;

    /**
     * @var string
     */
    public $predictorOfInterest;

    /**
     * @var string
     */
    public $predictorsCount;

    /**
     * @var string
     */
    public $reasonForAnalysis;

    /**
     * @var string
     */
    public $recordSizeInKb;

    /**
     * @var string
     */
    public $reportTitle;

    /**
     * @var int
     */
    public $secondToLastValue;

    /**
     * @var float
     */
    public $skewness;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $sources;

    /**
     * @var float
     */
    public $standardDeviation;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var int
     */
    public $thirdToLastValue;

    /**
     * @var string
     */
    public $trackingReminderNotificationsCount;

    /**
     * @var string
     */
    public $trackingRemindersCount;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userErrorMessage;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userMaximumAllowedDailyValue;

    /**
     * @var string
     */
    public $userMinimumAllowedDailyValue;

    /**
     * @var string
     */
    public $userMinimumAllowedNonZeroValue;

    /**
     * @var string
     */
    public $userTagsWhereTagUserVariableCount;

    /**
     * @var string
     */
    public $userTagsWhereTaggedUserVariableCount;

    /**
     * @var string
     */
    public $userVariableClientsCount;

    /**
     * @var string
     */
    public $userVariableOutcomeCategoriesCount;

    /**
     * @var string
     */
    public $userVariablePredictorCategoriesCount;

    /**
     * @var string
     */
    public $valence;

    /**
     * @var int
     */
    public $variableCategoryId;

    /**
     * @var int
     */
    public $variableId;

    /**
     * @var string
     */
    public $variableUserSourcesCount;

    /**
     * @var float
     */
    public $variance;

    /**
     * @var string
     */
    public $wikipediaTitle;

    /**
     * @var string
     */
    public $wpPostId;


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
     * @return UserVariable
     */
    public function setId(?int $id): UserVariable
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
     * @return UserVariable
     */
    public function setTitle(?string $title): UserVariable
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
     * @return UserVariable
     */
    public function setName(?string $name): UserVariable
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
     * @return UserVariable
     */
    public function setDescription(?string $description): UserVariable
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
     * @return UserVariable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): UserVariable
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
     * @return UserVariable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): UserVariable
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
     * @return UserVariable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): UserVariable
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
     * @return UserVariable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): UserVariable
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
     * @return UserVariable
     */
    public function setAverageSecondsBetweenMeasurements(?int $averageSecondsBetweenMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setBestCauseVariableId(?string $bestCauseVariableId): UserVariable
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
     * @return UserVariable
     */
    public function setBestCorrelationsWhereCauseUserVariableCount(?string $bestCorrelationsWhereCauseUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setBestCorrelationsWhereEffectUserVariableCount(?string $bestCorrelationsWhereEffectUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setBestEffectVariableId(?int $bestEffectVariableId): UserVariable
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
     * @return UserVariable
     */
    public function setBestUserCorrelationId(?int $bestUserCorrelationId): UserVariable
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
     * @return UserVariable
     */
    public function setBoring(?string $boring): UserVariable
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
     * @return UserVariable
     */
    public function setCauseOnly(?bool $causeOnly): UserVariable
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
     * @return UserVariable
     */
    public function setClientId(?string $clientId): UserVariable
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
     * @return UserVariable
     */
    public function setCombinationOperation(?string $combinationOperation): UserVariable
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
     * @return UserVariable
     */
    public function setControllable(?string $controllable): UserVariable
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
     * @return UserVariable
     */
    public function setCorrelationsCount(?string $correlationsCount): UserVariable
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
     * @return UserVariable
     */
    public function setCorrelationsWhereCauseUserVariableCount(?string $correlationsWhereCauseUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setCorrelationsWhereEffectUserVariableCount(?string $correlationsWhereEffectUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setCreatedAt(?string $createdAt): UserVariable
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
     * @return UserVariable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): UserVariable
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
     * @return UserVariable
     */
    public function setDefaultUnitId(?int $defaultUnitId): UserVariable
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
     * @return UserVariable
     */
    public function setDurationOfAction(?int $durationOfAction): UserVariable
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
     * @return UserVariable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setEarliestSourceMeasurementStartAt(?string $earliestSourceMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setErrorMessage(?string $errorMessage): UserVariable
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
     * @return UserVariable
     */
    public function setFavoritersCount(?string $favoritersCount): UserVariable
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
     * @return UserVariable
     */
    public function setFavoritesCount(?string $favoritesCount): UserVariable
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
     * @return UserVariable
     */
    public function setFillingType(?string $fillingType): UserVariable
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
     * @return UserVariable
     */
    public function setFillingValue(?string $fillingValue): UserVariable
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
     * @return UserVariable
     */
    public function setInformationalUrl(?string $informationalUrl): UserVariable
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
     * @return UserVariable
     */
    public function setIsGoal(?string $isGoal): UserVariable
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
     * @return UserVariable
     */
    public function setIsPublic(?string $isPublic): UserVariable
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
     * @return UserVariable
     */
    public function setJoinWith(?string $joinWith): UserVariable
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
     * @return UserVariable
     */
    public function setKurtosis(?float $kurtosis): UserVariable
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
     * @return UserVariable
     */
    public function setLastCorrelatedAt(?string $lastCorrelatedAt): UserVariable
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
     * @return UserVariable
     */
    public function setLastOriginalUnitId(?int $lastOriginalUnitId): UserVariable
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
     * @return UserVariable
     */
    public function setLastOriginalValue(?int $lastOriginalValue): UserVariable
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
     * @return UserVariable
     */
    public function setLastUnitId(?int $lastUnitId): UserVariable
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
     * @return UserVariable
     */
    public function setLastValue(?int $lastValue): UserVariable
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
     * @return UserVariable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setLatestSourceMeasurementStartAt(?string $latestSourceMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): UserVariable
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
     * @return UserVariable
     */
    public function setMaximumAllowedValue(?string $maximumAllowedValue): UserVariable
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
     * @return UserVariable
     */
    public function setMaximumRecordedDailyValue(?string $maximumRecordedDailyValue): UserVariable
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
     * @return UserVariable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): UserVariable
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
     * @return UserVariable
     */
    public function setMean(?float $mean): UserVariable
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
     * @return UserVariable
     */
    public function setMeasurementsAtLastAnalysis(?int $measurementsAtLastAnalysis): UserVariable
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
     * @return UserVariable
     */
    public function setMeasurementsCount(?string $measurementsCount): UserVariable
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
     * @return UserVariable
     */
    public function setMeasurements(?Measurements $measurements): UserVariable
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
     * @return UserVariable
     */
    public function setMediaCount(?string $mediaCount): UserVariable
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
     * @return UserVariable
     */
    public function setMedian(?int $median): UserVariable
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
     * @return UserVariable
     */
    public function setMedianSecondsBetweenMeasurements(?int $medianSecondsBetweenMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): UserVariable
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
     * @return UserVariable
     */
    public function setMinimumRecordedDailyValue(?string $minimumRecordedDailyValue): UserVariable
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
     * @return UserVariable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): UserVariable
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
     * @return UserVariable
     */
    public function setMostCommonConnectorId(?string $mostCommonConnectorId): UserVariable
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
     * @return UserVariable
     */
    public function setMostCommonOriginalUnitId(?string $mostCommonOriginalUnitId): UserVariable
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
     * @return UserVariable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): UserVariable
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
     * @return UserVariable
     */
    public function setMostCommonValue(?int $mostCommonValue): UserVariable
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
     * @return UserVariable
     */
    public function setNewestDataAt(?string $newestDataAt): UserVariable
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
     * @return UserVariable
     */
    public function setNumberCommonTaggedBy(?int $numberCommonTaggedBy): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfChanges(?int $numberOfChanges): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCommonTags(?string $numberOfCommonTags): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfCorrelations(?int $numberOfCorrelations): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfMeasurementsWithTagsAtLastCorrelation(?string $numberOfMeasurementsWithTagsAtLastCorrelation): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfProcessedDailyMeasurements(?int $numberOfProcessedDailyMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfSoftDeletedMeasurements(?int $numberOfSoftDeletedMeasurements): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfTrackingReminderNotifications(?int $numberOfTrackingReminderNotifications): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfTrackingReminders(?int $numberOfTrackingReminders): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUniqueDailyValues(?int $numberOfUniqueDailyValues): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserCorrelationsAsCause(?int $numberOfUserCorrelationsAsCause): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserCorrelationsAsEffect(?int $numberOfUserCorrelationsAsEffect): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): UserVariable
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
     * @return UserVariable
     */
    public function setNumberOfUserTags(?int $numberOfUserTags): UserVariable
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
     * @return UserVariable
     */
    public function setNumberUserTaggedBy(?int $numberUserTaggedBy): UserVariable
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
     * @return UserVariable
     */
    public function setOnsetDelay(?int $onsetDelay): UserVariable
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
     * @return UserVariable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): UserVariable
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
     * @return UserVariable
     */
    public function setOutcome(?bool $outcome): UserVariable
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
     * @return UserVariable
     */
    public function setOutcomeOfInterest(?int $outcomeOfInterest): UserVariable
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
     * @return UserVariable
     */
    public function setOutcomesCount(?string $outcomesCount): UserVariable
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
     * @return UserVariable
     */
    public function setParentId(?string $parentId): UserVariable
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
     * @return UserVariable
     */
    public function setPredictor(?string $predictor): UserVariable
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
     * @return UserVariable
     */
    public function setPredictorOfInterest(?string $predictorOfInterest): UserVariable
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
     * @return UserVariable
     */
    public function setPredictorsCount(?string $predictorsCount): UserVariable
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
     * @return UserVariable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): UserVariable
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
     * @return UserVariable
     */
    public function setRecordSizeInKb(?string $recordSizeInKb): UserVariable
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
     * @return UserVariable
     */
    public function setReportTitle(?string $reportTitle): UserVariable
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
     * @return UserVariable
     */
    public function setSecondToLastValue(?int $secondToLastValue): UserVariable
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
     * @return UserVariable
     */
    public function setSkewness(?float $skewness): UserVariable
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
     * @return UserVariable
     */
    public function setSlug(?string $slug): UserVariable
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
     * @return UserVariable
     */
    public function setSources(?string $sources): UserVariable
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
     * @return UserVariable
     */
    public function setStandardDeviation(?float $standardDeviation): UserVariable
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
     * @return UserVariable
     */
    public function setSubtitle(?string $subtitle): UserVariable
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
     * @return UserVariable
     */
    public function setThirdToLastValue(?int $thirdToLastValue): UserVariable
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
     * @return UserVariable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): UserVariable
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
     * @return UserVariable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): UserVariable
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
     * @return UserVariable
     */
    public function setUpdatedAt(?string $updatedAt): UserVariable
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
     * @return UserVariable
     */
    public function setUserErrorMessage(?string $userErrorMessage): UserVariable
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
     * @return UserVariable
     */
    public function setUserId(?int $userId): UserVariable
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
     * @return UserVariable
     */
    public function setUserMaximumAllowedDailyValue(?string $userMaximumAllowedDailyValue): UserVariable
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
     * @return UserVariable
     */
    public function setUserMinimumAllowedDailyValue(?string $userMinimumAllowedDailyValue): UserVariable
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
     * @return UserVariable
     */
    public function setUserMinimumAllowedNonZeroValue(?string $userMinimumAllowedNonZeroValue): UserVariable
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
     * @return UserVariable
     */
    public function setUserTagsWhereTagUserVariableCount(?string $userTagsWhereTagUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setUserTagsWhereTaggedUserVariableCount(?string $userTagsWhereTaggedUserVariableCount): UserVariable
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
     * @return UserVariable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): UserVariable
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
     * @return UserVariable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): UserVariable
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
     * @return UserVariable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): UserVariable
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
     * @return UserVariable
     */
    public function setValence(?string $valence): UserVariable
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
     * @return UserVariable
     */
    public function setVariableCategoryId(?int $variableCategoryId): UserVariable
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
     * @return UserVariable
     */
    public function setVariableId(?int $variableId): UserVariable
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
     * @return UserVariable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): UserVariable
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
     * @return UserVariable
     */
    public function setVariance(?float $variance): UserVariable
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
     * @return UserVariable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): UserVariable
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
     * @return UserVariable
     */
    public function setWpPostId(?string $wpPostId): UserVariable
    {
        $this->wpPostId = $wpPostId;

        return $this;
    }
}

