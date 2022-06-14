<?php

namespace CureDAO\Model;

class PredictorVariable
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $abbreviatedUnitName;

    /**
     * @var string
     */
    private $actionsCount;

    /**
     * @var string
     */
    private $additionalMetaData;

    /**
     * @var string
     */
    private $aggregateCorrelationsCount;

    /**
     * @var string
     */
    private $aggregateCorrelationsWhereCauseVariableCount;

    /**
     * @var string
     */
    private $aggregateCorrelationsWhereEffectVariableCount;

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
     * @var string
     */
    private $applicationsWhereOutcomeVariableCount;

    /**
     * @var string
     */
    private $applicationsWherePredictorVariableCount;

    /**
     * @var int
     */
    private $averageSecondsBetweenMeasurements;

    /**
     * @var int
     */
    private $bestAggregateCorrelationId;

    /**
     * @var int
     */
    private $bestCauseVariableId;

    /**
     * @var int
     */
    private $bestEffectVariableId;

    /**
     * @var string
     */
    private $boring;

    /**
     * @var string
     */
    private $brandName;

    /**
     * @var string
     */
    private $canonicalVariableId;

    /**
     * @var bool
     */
    private $causeOnly;

    /**
     * @var Charts
     */
    private $charts;

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
    private $commonAlias;

    /**
     * @var string
     */
    private $commonMaximumAllowedDailyValue;

    /**
     * @var string
     */
    private $commonMinimumAllowedDailyValue;

    /**
     * @var string
     */
    private $commonMinimumAllowedNonZeroValue;

    /**
     * @var string
     */
    private $commonTaggedByCount;

    /**
     * @var string
     */
    private $commonTagsCount;

    /**
     * @var string
     */
    private $commonTagsWhereTagVariableCount;

    /**
     * @var string
     */
    private $commonTagsWhereTaggedVariableCount;

    /**
     * @var string
     */
    private $conditionCausesWhereCauseCount;

    /**
     * @var string
     */
    private $conditionCausesWhereConditionCount;

    /**
     * @var string
     */
    private $conditionTreatmentsCount;

    /**
     * @var string
     */
    private $conditionTreatmentsWhereConditionCount;

    /**
     * @var string
     */
    private $conditionTreatmentsWhereTreatmentCount;

    /**
     * @var string
     */
    private $controllable;

    /**
     * @var string
     */
    private $correlationCausalityVotesWhereCauseVariableCount;

    /**
     * @var string
     */
    private $correlationCausalityVotesWhereEffectVariableCount;

    /**
     * @var string
     */
    private $correlationUsefulnessVotesWhereCauseVariableCount;

    /**
     * @var string
     */
    private $correlationUsefulnessVotesWhereEffectVariableCount;

    /**
     * @var string
     */
    private $correlationsCount;

    /**
     * @var string
     */
    private $correlationsWhereCauseVariableCount;

    /**
     * @var string
     */
    private $correlationsWhereEffectVariableCount;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var int
     */
    private $creatorUserId;

    /**
     * @var string
     */
    private $ctTreatmentSideEffectsWhereSideEffectVariableCount;

    /**
     * @var string
     */
    private $ctTreatmentSideEffectsWhereTreatmentVariableCount;

    /**
     * @var DataSourcesCount
     */
    private $dataSourcesCount;

    /**
     * @var int
     */
    private $defaultUnitId;

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var string
     */
    private $deletionReason;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $displayName;

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
    private $earliestTaggedMeasurementStartAt;

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
    private $imageUrl;

    /**
     * @var string
     */
    private $individualCauseStudiesCount;

    /**
     * @var string
     */
    private $individualEffectStudiesCount;

    /**
     * @var string
     */
    private $informationalUrl;

    /**
     * @var string
     */
    private $ionIcon;

    /**
     * @var string
     */
    private $isGoal;

    /**
     * @var int
     */
    private $isPublic;

    /**
     * @var float
     */
    private $kurtosis;

    /**
     * @var string
     */
    private $latestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    private $latestTaggedMeasurementStartAt;

    /**
     * @var bool
     */
    private $manualTracking;

    /**
     * @var string
     */
    private $maximumAllowedDailyValue;

    /**
     * @var string
     */
    private $maximumAllowedValue;

    /**
     * @var int
     */
    private $maximumRecordedValue;

    /**
     * @var float
     */
    private $mean;

    /**
     * @var string
     */
    private $measurementsCount;

    /**
     * @var string
     */
    private $mediaCount;

    /**
     * @var float
     */
    private $median;

    /**
     * @var int
     */
    private $medianSecondsBetweenMeasurements;

    /**
     * @var string
     */
    private $metaData;

    /**
     * @var int
     */
    private $minimumAllowedSecondsBetweenMeasurements;

    /**
     * @var int
     */
    private $minimumAllowedValue;

    /**
     * @var int
     */
    private $minimumRecordedValue;

    /**
     * @var int
     */
    private $mostCommonConnectorId;

    /**
     * @var int
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
    private $numberOfAggregateCorrelationsAsCause;

    /**
     * @var int
     */
    private $numberOfAggregateCorrelationsAsEffect;

    /**
     * @var int
     */
    private $numberOfApplicationsWhereOutcomeVariable;

    /**
     * @var int
     */
    private $numberOfApplicationsWherePredictorVariable;

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
     * @var int
     */
    private $numberOfCommonTags;

    /**
     * @var int
     */
    private $numberOfCommonTagsWhereTagVariable;

    /**
     * @var int
     */
    private $numberOfCommonTagsWhereTaggedVariable;

    /**
     * @var int
     */
    private $numberOfMeasurements;

    /**
     * @var string
     */
    private $numberOfOutcomeCaseStudies;

    /**
     * @var string
     */
    private $numberOfOutcomePopulationStudies;

    /**
     * @var string
     */
    private $numberOfPredictorCaseStudies;

    /**
     * @var string
     */
    private $numberOfPredictorPopulationStudies;

    /**
     * @var string
     */
    private $numberOfRawMeasurements;

    /**
     * @var int
     */
    private $numberOfRawMeasurementsWithTagsJoinsChildren;

    /**
     * @var string
     */
    private $numberOfSoftDeletedMeasurements;

    /**
     * @var int
     */
    private $numberOfStudiesWhereCauseVariable;

    /**
     * @var int
     */
    private $numberOfStudiesWhereEffectVariable;

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
    private $numberOfUniqueValues;

    /**
     * @var string
     */
    private $numberOfUserChildren;

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
    private $numberOfUserTagsWhereTagVariable;

    /**
     * @var int
     */
    private $numberOfUserTagsWhereTaggedVariable;

    /**
     * @var int
     */
    private $numberOfUserVariables;

    /**
     * @var int
     */
    private $numberOfUsersWherePrimaryOutcomeVariable;

    /**
     * @var int
     */
    private $numberOfVariablesWhereBestCauseVariable;

    /**
     * @var int
     */
    private $numberOfVariablesWhereBestEffectVariable;

    /**
     * @var int
     */
    private $numberOfVotesWhereCauseVariable;

    /**
     * @var int
     */
    private $numberOfVotesWhereEffectVariable;

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
    private $populationCauseStudiesCount;

    /**
     * @var string
     */
    private $populationEffectStudiesCount;

    /**
     * @var string
     */
    private $predictor;

    /**
     * @var string
     */
    private $predictorsCount;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $productUrl;

    /**
     * @var string
     */
    private $publicOutcomesCount;

    /**
     * @var string
     */
    private $publicPredictorsCount;

    /**
     * @var string
     */
    private $reasonForAnalysis;

    /**
     * @var int
     */
    private $recordSizeInKb;

    /**
     * @var string
     */
    private $reportTitle;

    /**
     * @var int
     */
    private $secondMostCommonValue;

    /**
     * @var string
     */
    private $sideEffectVariablesCount;

    /**
     * @var string
     */
    private $sideEffectsCount;

    /**
     * @var float
     */
    private $skewness;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $sortOrder;

    /**
     * @var string
     */
    private $sourceUrl;

    /**
     * @var float
     */
    private $standardDeviation;

    /**
     * @var string
     */
    private $studiesCount;

    /**
     * @var string
     */
    private $studiesWhereCauseVariableCount;

    /**
     * @var string
     */
    private $studiesWhereEffectVariableCount;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var array
     */
    private $synonyms;

    /**
     * @var string
     */
    private $tagsCount;

    /**
     * @var int
     */
    private $thirdMostCommonValue;

    /**
     * @var string
     */
    private $thirdPartyCorrelationsCount;

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
    private $treatmentSideEffectsWhereTreatmentCount;

    /**
     * @var int
     */
    private $unitId;

    /**
     * @var string
     */
    private $upVotedPublicOutcomesCount;

    /**
     * @var string
     */
    private $upVotedPublicPredictorsCount;

    /**
     * @var string
     */
    private $upc12;

    /**
     * @var string
     */
    private $upc14;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $userErrorMessage;

    /**
     * @var string
     */
    private $userTaggedByCount;

    /**
     * @var string
     */
    private $userTagsCount;

    /**
     * @var string
     */
    private $userTagsWhereTagVariableCount;

    /**
     * @var string
     */
    private $userTagsWhereTaggedVariableCount;

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
    private $userVariablesCount;

    /**
     * @var string
     */
    private $userVariablesExcludingTestUsersCount;

    /**
     * @var string
     */
    private $usersCount;

    /**
     * @var string
     */
    private $usersWherePrimaryOutcomeVariableCount;

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
    private $variableOutcomeCategoriesCount;

    /**
     * @var string
     */
    private $variablePredictorCategoriesCount;

    /**
     * @var string
     */
    private $variableUserSourcesCount;

    /**
     * @var string
     */
    private $variablesCount;

    /**
     * @var string
     */
    private $variablesWhereBestCauseVariableCount;

    /**
     * @var string
     */
    private $variablesWhereBestEffectVariableCount;

    /**
     * @var float
     */
    private $variance;

    /**
     * @var string
     */
    private $votesCount;

    /**
     * @var string
     */
    private $votesWhereCauseCount;

    /**
     * @var string
     */
    private $votesWhereCauseVariableCount;

    /**
     * @var string
     */
    private $votesWhereEffectCount;

    /**
     * @var string
     */
    private $votesWhereEffectVariableCount;

    /**
     * @var string
     */
    private $wikipediaTitle;

    /**
     * @var string
     */
    private $wikipediaUrl;

    /**
     * @var int
     */
    private $wpPostId;


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
     * @return PredictorVariable
     */
    public function setTitle(?string $title): PredictorVariable
    {
        $this->title = $title;
        
        return $this;
    }

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
     * @return PredictorVariable
     */
    public function setId(?int $id): PredictorVariable
    {
        $this->id = $id;
        
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
     * @return PredictorVariable
     */
    public function setName(?string $name): PredictorVariable
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAbbreviatedUnitName(): ?string
    {
        return $this->abbreviatedUnitName;
    }

    /**
     * @param string|null $abbreviatedUnitName
     *
     * @return PredictorVariable
     */
    public function setAbbreviatedUnitName(?string $abbreviatedUnitName): PredictorVariable
    {
        $this->abbreviatedUnitName = $abbreviatedUnitName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getActionsCount(): ?string
    {
        return $this->actionsCount;
    }

    /**
     * @param string|null $actionsCount
     *
     * @return PredictorVariable
     */
    public function setActionsCount(?string $actionsCount): PredictorVariable
    {
        $this->actionsCount = $actionsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdditionalMetaData(): ?string
    {
        return $this->additionalMetaData;
    }

    /**
     * @param string|null $additionalMetaData
     *
     * @return PredictorVariable
     */
    public function setAdditionalMetaData(?string $additionalMetaData): PredictorVariable
    {
        $this->additionalMetaData = $additionalMetaData;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAggregateCorrelationsCount(): ?string
    {
        return $this->aggregateCorrelationsCount;
    }

    /**
     * @param string|null $aggregateCorrelationsCount
     *
     * @return PredictorVariable
     */
    public function setAggregateCorrelationsCount(?string $aggregateCorrelationsCount): PredictorVariable
    {
        $this->aggregateCorrelationsCount = $aggregateCorrelationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAggregateCorrelationsWhereCauseVariableCount(): ?string
    {
        return $this->aggregateCorrelationsWhereCauseVariableCount;
    }

    /**
     * @param string|null $aggregateCorrelationsWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setAggregateCorrelationsWhereCauseVariableCount(?string $aggregateCorrelationsWhereCauseVariableCount): PredictorVariable
    {
        $this->aggregateCorrelationsWhereCauseVariableCount = $aggregateCorrelationsWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAggregateCorrelationsWhereEffectVariableCount(): ?string
    {
        return $this->aggregateCorrelationsWhereEffectVariableCount;
    }

    /**
     * @param string|null $aggregateCorrelationsWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setAggregateCorrelationsWhereEffectVariableCount(?string $aggregateCorrelationsWhereEffectVariableCount): PredictorVariable
    {
        $this->aggregateCorrelationsWhereEffectVariableCount = $aggregateCorrelationsWhereEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): PredictorVariable
    {
        $this->analysisStartedAt = $analysisStartedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApplicationsWhereOutcomeVariableCount(): ?string
    {
        return $this->applicationsWhereOutcomeVariableCount;
    }

    /**
     * @param string|null $applicationsWhereOutcomeVariableCount
     *
     * @return PredictorVariable
     */
    public function setApplicationsWhereOutcomeVariableCount(?string $applicationsWhereOutcomeVariableCount): PredictorVariable
    {
        $this->applicationsWhereOutcomeVariableCount = $applicationsWhereOutcomeVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApplicationsWherePredictorVariableCount(): ?string
    {
        return $this->applicationsWherePredictorVariableCount;
    }

    /**
     * @param string|null $applicationsWherePredictorVariableCount
     *
     * @return PredictorVariable
     */
    public function setApplicationsWherePredictorVariableCount(?string $applicationsWherePredictorVariableCount): PredictorVariable
    {
        $this->applicationsWherePredictorVariableCount = $applicationsWherePredictorVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setAverageSecondsBetweenMeasurements(?int $averageSecondsBetweenMeasurements): PredictorVariable
    {
        $this->averageSecondsBetweenMeasurements = $averageSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBestAggregateCorrelationId(): ?int
    {
        return $this->bestAggregateCorrelationId;
    }

    /**
     * @param int|null $bestAggregateCorrelationId
     *
     * @return PredictorVariable
     */
    public function setBestAggregateCorrelationId(?int $bestAggregateCorrelationId): PredictorVariable
    {
        $this->bestAggregateCorrelationId = $bestAggregateCorrelationId;
        
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
     * @return PredictorVariable
     */
    public function setBestCauseVariableId(?int $bestCauseVariableId): PredictorVariable
    {
        $this->bestCauseVariableId = $bestCauseVariableId;
        
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
     * @return PredictorVariable
     */
    public function setBestEffectVariableId(?int $bestEffectVariableId): PredictorVariable
    {
        $this->bestEffectVariableId = $bestEffectVariableId;
        
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
     * @return PredictorVariable
     */
    public function setBoring(?string $boring): PredictorVariable
    {
        $this->boring = $boring;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string|null $brandName
     *
     * @return PredictorVariable
     */
    public function setBrandName(?string $brandName): PredictorVariable
    {
        $this->brandName = $brandName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCanonicalVariableId(): ?string
    {
        return $this->canonicalVariableId;
    }

    /**
     * @param string|null $canonicalVariableId
     *
     * @return PredictorVariable
     */
    public function setCanonicalVariableId(?string $canonicalVariableId): PredictorVariable
    {
        $this->canonicalVariableId = $canonicalVariableId;
        
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
     * @return PredictorVariable
     */
    public function setCauseOnly(?bool $causeOnly): PredictorVariable
    {
        $this->causeOnly = $causeOnly;
        
        return $this;
    }

    /**
     * @return Charts|null
     */
    public function getCharts(): ?Charts
    {
        return $this->charts;
    }

    /**
     * @param Charts|null $charts
     *
     * @return PredictorVariable
     */
    public function setCharts(?Charts $charts): PredictorVariable
    {
        $this->charts = $charts;
        
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
     * @return PredictorVariable
     */
    public function setClientId(?string $clientId): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setCombinationOperation(?string $combinationOperation): PredictorVariable
    {
        $this->combinationOperation = $combinationOperation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonAlias(): ?string
    {
        return $this->commonAlias;
    }

    /**
     * @param string|null $commonAlias
     *
     * @return PredictorVariable
     */
    public function setCommonAlias(?string $commonAlias): PredictorVariable
    {
        $this->commonAlias = $commonAlias;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonMaximumAllowedDailyValue(): ?string
    {
        return $this->commonMaximumAllowedDailyValue;
    }

    /**
     * @param string|null $commonMaximumAllowedDailyValue
     *
     * @return PredictorVariable
     */
    public function setCommonMaximumAllowedDailyValue(?string $commonMaximumAllowedDailyValue): PredictorVariable
    {
        $this->commonMaximumAllowedDailyValue = $commonMaximumAllowedDailyValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonMinimumAllowedDailyValue(): ?string
    {
        return $this->commonMinimumAllowedDailyValue;
    }

    /**
     * @param string|null $commonMinimumAllowedDailyValue
     *
     * @return PredictorVariable
     */
    public function setCommonMinimumAllowedDailyValue(?string $commonMinimumAllowedDailyValue): PredictorVariable
    {
        $this->commonMinimumAllowedDailyValue = $commonMinimumAllowedDailyValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonMinimumAllowedNonZeroValue(): ?string
    {
        return $this->commonMinimumAllowedNonZeroValue;
    }

    /**
     * @param string|null $commonMinimumAllowedNonZeroValue
     *
     * @return PredictorVariable
     */
    public function setCommonMinimumAllowedNonZeroValue(?string $commonMinimumAllowedNonZeroValue): PredictorVariable
    {
        $this->commonMinimumAllowedNonZeroValue = $commonMinimumAllowedNonZeroValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonTaggedByCount(): ?string
    {
        return $this->commonTaggedByCount;
    }

    /**
     * @param string|null $commonTaggedByCount
     *
     * @return PredictorVariable
     */
    public function setCommonTaggedByCount(?string $commonTaggedByCount): PredictorVariable
    {
        $this->commonTaggedByCount = $commonTaggedByCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonTagsCount(): ?string
    {
        return $this->commonTagsCount;
    }

    /**
     * @param string|null $commonTagsCount
     *
     * @return PredictorVariable
     */
    public function setCommonTagsCount(?string $commonTagsCount): PredictorVariable
    {
        $this->commonTagsCount = $commonTagsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonTagsWhereTagVariableCount(): ?string
    {
        return $this->commonTagsWhereTagVariableCount;
    }

    /**
     * @param string|null $commonTagsWhereTagVariableCount
     *
     * @return PredictorVariable
     */
    public function setCommonTagsWhereTagVariableCount(?string $commonTagsWhereTagVariableCount): PredictorVariable
    {
        $this->commonTagsWhereTagVariableCount = $commonTagsWhereTagVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommonTagsWhereTaggedVariableCount(): ?string
    {
        return $this->commonTagsWhereTaggedVariableCount;
    }

    /**
     * @param string|null $commonTagsWhereTaggedVariableCount
     *
     * @return PredictorVariable
     */
    public function setCommonTagsWhereTaggedVariableCount(?string $commonTagsWhereTaggedVariableCount): PredictorVariable
    {
        $this->commonTagsWhereTaggedVariableCount = $commonTagsWhereTaggedVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConditionCausesWhereCauseCount(): ?string
    {
        return $this->conditionCausesWhereCauseCount;
    }

    /**
     * @param string|null $conditionCausesWhereCauseCount
     *
     * @return PredictorVariable
     */
    public function setConditionCausesWhereCauseCount(?string $conditionCausesWhereCauseCount): PredictorVariable
    {
        $this->conditionCausesWhereCauseCount = $conditionCausesWhereCauseCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConditionCausesWhereConditionCount(): ?string
    {
        return $this->conditionCausesWhereConditionCount;
    }

    /**
     * @param string|null $conditionCausesWhereConditionCount
     *
     * @return PredictorVariable
     */
    public function setConditionCausesWhereConditionCount(?string $conditionCausesWhereConditionCount): PredictorVariable
    {
        $this->conditionCausesWhereConditionCount = $conditionCausesWhereConditionCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConditionTreatmentsCount(): ?string
    {
        return $this->conditionTreatmentsCount;
    }

    /**
     * @param string|null $conditionTreatmentsCount
     *
     * @return PredictorVariable
     */
    public function setConditionTreatmentsCount(?string $conditionTreatmentsCount): PredictorVariable
    {
        $this->conditionTreatmentsCount = $conditionTreatmentsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConditionTreatmentsWhereConditionCount(): ?string
    {
        return $this->conditionTreatmentsWhereConditionCount;
    }

    /**
     * @param string|null $conditionTreatmentsWhereConditionCount
     *
     * @return PredictorVariable
     */
    public function setConditionTreatmentsWhereConditionCount(?string $conditionTreatmentsWhereConditionCount): PredictorVariable
    {
        $this->conditionTreatmentsWhereConditionCount = $conditionTreatmentsWhereConditionCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConditionTreatmentsWhereTreatmentCount(): ?string
    {
        return $this->conditionTreatmentsWhereTreatmentCount;
    }

    /**
     * @param string|null $conditionTreatmentsWhereTreatmentCount
     *
     * @return PredictorVariable
     */
    public function setConditionTreatmentsWhereTreatmentCount(?string $conditionTreatmentsWhereTreatmentCount): PredictorVariable
    {
        $this->conditionTreatmentsWhereTreatmentCount = $conditionTreatmentsWhereTreatmentCount;
        
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
     * @return PredictorVariable
     */
    public function setControllable(?string $controllable): PredictorVariable
    {
        $this->controllable = $controllable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationCausalityVotesWhereCauseVariableCount(): ?string
    {
        return $this->correlationCausalityVotesWhereCauseVariableCount;
    }

    /**
     * @param string|null $correlationCausalityVotesWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationCausalityVotesWhereCauseVariableCount(?string $correlationCausalityVotesWhereCauseVariableCount): PredictorVariable
    {
        $this->correlationCausalityVotesWhereCauseVariableCount = $correlationCausalityVotesWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationCausalityVotesWhereEffectVariableCount(): ?string
    {
        return $this->correlationCausalityVotesWhereEffectVariableCount;
    }

    /**
     * @param string|null $correlationCausalityVotesWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationCausalityVotesWhereEffectVariableCount(?string $correlationCausalityVotesWhereEffectVariableCount): PredictorVariable
    {
        $this->correlationCausalityVotesWhereEffectVariableCount = $correlationCausalityVotesWhereEffectVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationUsefulnessVotesWhereCauseVariableCount(): ?string
    {
        return $this->correlationUsefulnessVotesWhereCauseVariableCount;
    }

    /**
     * @param string|null $correlationUsefulnessVotesWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationUsefulnessVotesWhereCauseVariableCount(?string $correlationUsefulnessVotesWhereCauseVariableCount): PredictorVariable
    {
        $this->correlationUsefulnessVotesWhereCauseVariableCount = $correlationUsefulnessVotesWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationUsefulnessVotesWhereEffectVariableCount(): ?string
    {
        return $this->correlationUsefulnessVotesWhereEffectVariableCount;
    }

    /**
     * @param string|null $correlationUsefulnessVotesWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationUsefulnessVotesWhereEffectVariableCount(?string $correlationUsefulnessVotesWhereEffectVariableCount): PredictorVariable
    {
        $this->correlationUsefulnessVotesWhereEffectVariableCount = $correlationUsefulnessVotesWhereEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setCorrelationsCount(?string $correlationsCount): PredictorVariable
    {
        $this->correlationsCount = $correlationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationsWhereCauseVariableCount(): ?string
    {
        return $this->correlationsWhereCauseVariableCount;
    }

    /**
     * @param string|null $correlationsWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationsWhereCauseVariableCount(?string $correlationsWhereCauseVariableCount): PredictorVariable
    {
        $this->correlationsWhereCauseVariableCount = $correlationsWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationsWhereEffectVariableCount(): ?string
    {
        return $this->correlationsWhereEffectVariableCount;
    }

    /**
     * @param string|null $correlationsWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setCorrelationsWhereEffectVariableCount(?string $correlationsWhereEffectVariableCount): PredictorVariable
    {
        $this->correlationsWhereEffectVariableCount = $correlationsWhereEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setCreatedAt(?string $createdAt): PredictorVariable
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCreatorUserId(): ?int
    {
        return $this->creatorUserId;
    }

    /**
     * @param int|null $creatorUserId
     *
     * @return PredictorVariable
     */
    public function setCreatorUserId(?int $creatorUserId): PredictorVariable
    {
        $this->creatorUserId = $creatorUserId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCtTreatmentSideEffectsWhereSideEffectVariableCount(): ?string
    {
        return $this->ctTreatmentSideEffectsWhereSideEffectVariableCount;
    }

    /**
     * @param string|null $ctTreatmentSideEffectsWhereSideEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setCtTreatmentSideEffectsWhereSideEffectVariableCount(?string $ctTreatmentSideEffectsWhereSideEffectVariableCount): PredictorVariable
    {
        $this->ctTreatmentSideEffectsWhereSideEffectVariableCount = $ctTreatmentSideEffectsWhereSideEffectVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCtTreatmentSideEffectsWhereTreatmentVariableCount(): ?string
    {
        return $this->ctTreatmentSideEffectsWhereTreatmentVariableCount;
    }

    /**
     * @param string|null $ctTreatmentSideEffectsWhereTreatmentVariableCount
     *
     * @return PredictorVariable
     */
    public function setCtTreatmentSideEffectsWhereTreatmentVariableCount(?string $ctTreatmentSideEffectsWhereTreatmentVariableCount): PredictorVariable
    {
        $this->ctTreatmentSideEffectsWhereTreatmentVariableCount = $ctTreatmentSideEffectsWhereTreatmentVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setDefaultUnitId(?int $defaultUnitId): PredictorVariable
    {
        $this->defaultUnitId = $defaultUnitId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    /**
     * @param string|null $defaultValue
     *
     * @return PredictorVariable
     */
    public function setDefaultValue(?string $defaultValue): PredictorVariable
    {
        $this->defaultValue = $defaultValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeletionReason(): ?string
    {
        return $this->deletionReason;
    }

    /**
     * @param string|null $deletionReason
     *
     * @return PredictorVariable
     */
    public function setDeletionReason(?string $deletionReason): PredictorVariable
    {
        $this->deletionReason = $deletionReason;
        
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
     * @return PredictorVariable
     */
    public function setDescription(?string $description): PredictorVariable
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $displayName
     *
     * @return PredictorVariable
     */
    public function setDisplayName(?string $displayName): PredictorVariable
    {
        $this->displayName = $displayName;
        
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
     * @return PredictorVariable
     */
    public function setDurationOfAction(?int $durationOfAction): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): PredictorVariable
    {
        $this->earliestNonTaggedMeasurementStartAt = $earliestNonTaggedMeasurementStartAt;
        
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
     * @return PredictorVariable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): PredictorVariable
    {
        $this->earliestTaggedMeasurementStartAt = $earliestTaggedMeasurementStartAt;
        
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
     * @return PredictorVariable
     */
    public function setFavoritersCount(?string $favoritersCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setFavoritesCount(?string $favoritesCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setFillingType(?string $fillingType): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setFillingValue(?string $fillingValue): PredictorVariable
    {
        $this->fillingValue = $fillingValue;
        
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
     * @return PredictorVariable
     */
    public function setImageUrl(?string $imageUrl): PredictorVariable
    {
        $this->imageUrl = $imageUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndividualCauseStudiesCount(): ?string
    {
        return $this->individualCauseStudiesCount;
    }

    /**
     * @param string|null $individualCauseStudiesCount
     *
     * @return PredictorVariable
     */
    public function setIndividualCauseStudiesCount(?string $individualCauseStudiesCount): PredictorVariable
    {
        $this->individualCauseStudiesCount = $individualCauseStudiesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndividualEffectStudiesCount(): ?string
    {
        return $this->individualEffectStudiesCount;
    }

    /**
     * @param string|null $individualEffectStudiesCount
     *
     * @return PredictorVariable
     */
    public function setIndividualEffectStudiesCount(?string $individualEffectStudiesCount): PredictorVariable
    {
        $this->individualEffectStudiesCount = $individualEffectStudiesCount;
        
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
     * @return PredictorVariable
     */
    public function setInformationalUrl(?string $informationalUrl): PredictorVariable
    {
        $this->informationalUrl = $informationalUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIonIcon(): ?string
    {
        return $this->ionIcon;
    }

    /**
     * @param string|null $ionIcon
     *
     * @return PredictorVariable
     */
    public function setIonIcon(?string $ionIcon): PredictorVariable
    {
        $this->ionIcon = $ionIcon;
        
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
     * @return PredictorVariable
     */
    public function setIsGoal(?string $isGoal): PredictorVariable
    {
        $this->isGoal = $isGoal;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIsPublic(): ?int
    {
        return $this->isPublic;
    }

    /**
     * @param int|null $isPublic
     *
     * @return PredictorVariable
     */
    public function setIsPublic(?int $isPublic): PredictorVariable
    {
        $this->isPublic = $isPublic;
        
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
     * @return PredictorVariable
     */
    public function setKurtosis(?float $kurtosis): PredictorVariable
    {
        $this->kurtosis = $kurtosis;
        
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
     * @return PredictorVariable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): PredictorVariable
    {
        $this->latestNonTaggedMeasurementStartAt = $latestNonTaggedMeasurementStartAt;
        
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
     * @return PredictorVariable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): PredictorVariable
    {
        $this->latestTaggedMeasurementStartAt = $latestTaggedMeasurementStartAt;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isManualTracking(): ?bool
    {
        return $this->manualTracking;
    }

    /**
     * @param bool|null $manualTracking
     *
     * @return PredictorVariable
     */
    public function setManualTracking(?bool $manualTracking): PredictorVariable
    {
        $this->manualTracking = $manualTracking;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaximumAllowedDailyValue(): ?string
    {
        return $this->maximumAllowedDailyValue;
    }

    /**
     * @param string|null $maximumAllowedDailyValue
     *
     * @return PredictorVariable
     */
    public function setMaximumAllowedDailyValue(?string $maximumAllowedDailyValue): PredictorVariable
    {
        $this->maximumAllowedDailyValue = $maximumAllowedDailyValue;
        
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
     * @return PredictorVariable
     */
    public function setMaximumAllowedValue(?string $maximumAllowedValue): PredictorVariable
    {
        $this->maximumAllowedValue = $maximumAllowedValue;
        
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
     * @return PredictorVariable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setMean(?float $mean): PredictorVariable
    {
        $this->mean = $mean;
        
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
     * @return PredictorVariable
     */
    public function setMeasurementsCount(?string $measurementsCount): PredictorVariable
    {
        $this->measurementsCount = $measurementsCount;
        
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
     * @return PredictorVariable
     */
    public function setMediaCount(?string $mediaCount): PredictorVariable
    {
        $this->mediaCount = $mediaCount;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMedian(): ?float
    {
        return $this->median;
    }

    /**
     * @param float|null $median
     *
     * @return PredictorVariable
     */
    public function setMedian(?float $median): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setMedianSecondsBetweenMeasurements(?int $medianSecondsBetweenMeasurements): PredictorVariable
    {
        $this->medianSecondsBetweenMeasurements = $medianSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMetaData(): ?string
    {
        return $this->metaData;
    }

    /**
     * @param string|null $metaData
     *
     * @return PredictorVariable
     */
    public function setMetaData(?string $metaData): PredictorVariable
    {
        $this->metaData = $metaData;
        
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
     * @return PredictorVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): PredictorVariable
    {
        $this->minimumAllowedValue = $minimumAllowedValue;
        
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
     * @return PredictorVariable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): PredictorVariable
    {
        $this->minimumRecordedValue = $minimumRecordedValue;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMostCommonConnectorId(): ?int
    {
        return $this->mostCommonConnectorId;
    }

    /**
     * @param int|null $mostCommonConnectorId
     *
     * @return PredictorVariable
     */
    public function setMostCommonConnectorId(?int $mostCommonConnectorId): PredictorVariable
    {
        $this->mostCommonConnectorId = $mostCommonConnectorId;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMostCommonOriginalUnitId(): ?int
    {
        return $this->mostCommonOriginalUnitId;
    }

    /**
     * @param int|null $mostCommonOriginalUnitId
     *
     * @return PredictorVariable
     */
    public function setMostCommonOriginalUnitId(?int $mostCommonOriginalUnitId): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setMostCommonValue(?int $mostCommonValue): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNewestDataAt(?string $newestDataAt): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberCommonTaggedBy(?int $numberCommonTaggedBy): PredictorVariable
    {
        $this->numberCommonTaggedBy = $numberCommonTaggedBy;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfAggregateCorrelationsAsCause(): ?int
    {
        return $this->numberOfAggregateCorrelationsAsCause;
    }

    /**
     * @param int|null $numberOfAggregateCorrelationsAsCause
     *
     * @return PredictorVariable
     */
    public function setNumberOfAggregateCorrelationsAsCause(?int $numberOfAggregateCorrelationsAsCause): PredictorVariable
    {
        $this->numberOfAggregateCorrelationsAsCause = $numberOfAggregateCorrelationsAsCause;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfAggregateCorrelationsAsEffect(): ?int
    {
        return $this->numberOfAggregateCorrelationsAsEffect;
    }

    /**
     * @param int|null $numberOfAggregateCorrelationsAsEffect
     *
     * @return PredictorVariable
     */
    public function setNumberOfAggregateCorrelationsAsEffect(?int $numberOfAggregateCorrelationsAsEffect): PredictorVariable
    {
        $this->numberOfAggregateCorrelationsAsEffect = $numberOfAggregateCorrelationsAsEffect;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfApplicationsWhereOutcomeVariable(): ?int
    {
        return $this->numberOfApplicationsWhereOutcomeVariable;
    }

    /**
     * @param int|null $numberOfApplicationsWhereOutcomeVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfApplicationsWhereOutcomeVariable(?int $numberOfApplicationsWhereOutcomeVariable): PredictorVariable
    {
        $this->numberOfApplicationsWhereOutcomeVariable = $numberOfApplicationsWhereOutcomeVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfApplicationsWherePredictorVariable(): ?int
    {
        return $this->numberOfApplicationsWherePredictorVariable;
    }

    /**
     * @param int|null $numberOfApplicationsWherePredictorVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfApplicationsWherePredictorVariable(?int $numberOfApplicationsWherePredictorVariable): PredictorVariable
    {
        $this->numberOfApplicationsWherePredictorVariable = $numberOfApplicationsWherePredictorVariable;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): PredictorVariable
    {
        $this->numberOfCommonParents = $numberOfCommonParents;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCommonTags(): ?int
    {
        return $this->numberOfCommonTags;
    }

    /**
     * @param int|null $numberOfCommonTags
     *
     * @return PredictorVariable
     */
    public function setNumberOfCommonTags(?int $numberOfCommonTags): PredictorVariable
    {
        $this->numberOfCommonTags = $numberOfCommonTags;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCommonTagsWhereTagVariable(): ?int
    {
        return $this->numberOfCommonTagsWhereTagVariable;
    }

    /**
     * @param int|null $numberOfCommonTagsWhereTagVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfCommonTagsWhereTagVariable(?int $numberOfCommonTagsWhereTagVariable): PredictorVariable
    {
        $this->numberOfCommonTagsWhereTagVariable = $numberOfCommonTagsWhereTagVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfCommonTagsWhereTaggedVariable(): ?int
    {
        return $this->numberOfCommonTagsWhereTaggedVariable;
    }

    /**
     * @param int|null $numberOfCommonTagsWhereTaggedVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfCommonTagsWhereTaggedVariable(?int $numberOfCommonTagsWhereTaggedVariable): PredictorVariable
    {
        $this->numberOfCommonTagsWhereTaggedVariable = $numberOfCommonTagsWhereTaggedVariable;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): PredictorVariable
    {
        $this->numberOfMeasurements = $numberOfMeasurements;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): PredictorVariable
    {
        $this->numberOfOutcomeCaseStudies = $numberOfOutcomeCaseStudies;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfOutcomePopulationStudies(): ?string
    {
        return $this->numberOfOutcomePopulationStudies;
    }

    /**
     * @param string|null $numberOfOutcomePopulationStudies
     *
     * @return PredictorVariable
     */
    public function setNumberOfOutcomePopulationStudies(?string $numberOfOutcomePopulationStudies): PredictorVariable
    {
        $this->numberOfOutcomePopulationStudies = $numberOfOutcomePopulationStudies;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfPredictorCaseStudies(): ?string
    {
        return $this->numberOfPredictorCaseStudies;
    }

    /**
     * @param string|null $numberOfPredictorCaseStudies
     *
     * @return PredictorVariable
     */
    public function setNumberOfPredictorCaseStudies(?string $numberOfPredictorCaseStudies): PredictorVariable
    {
        $this->numberOfPredictorCaseStudies = $numberOfPredictorCaseStudies;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfPredictorPopulationStudies(): ?string
    {
        return $this->numberOfPredictorPopulationStudies;
    }

    /**
     * @param string|null $numberOfPredictorPopulationStudies
     *
     * @return PredictorVariable
     */
    public function setNumberOfPredictorPopulationStudies(?string $numberOfPredictorPopulationStudies): PredictorVariable
    {
        $this->numberOfPredictorPopulationStudies = $numberOfPredictorPopulationStudies;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfRawMeasurements(): ?string
    {
        return $this->numberOfRawMeasurements;
    }

    /**
     * @param string|null $numberOfRawMeasurements
     *
     * @return PredictorVariable
     */
    public function setNumberOfRawMeasurements(?string $numberOfRawMeasurements): PredictorVariable
    {
        $this->numberOfRawMeasurements = $numberOfRawMeasurements;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): PredictorVariable
    {
        $this->numberOfRawMeasurementsWithTagsJoinsChildren = $numberOfRawMeasurementsWithTagsJoinsChildren;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfSoftDeletedMeasurements(): ?string
    {
        return $this->numberOfSoftDeletedMeasurements;
    }

    /**
     * @param string|null $numberOfSoftDeletedMeasurements
     *
     * @return PredictorVariable
     */
    public function setNumberOfSoftDeletedMeasurements(?string $numberOfSoftDeletedMeasurements): PredictorVariable
    {
        $this->numberOfSoftDeletedMeasurements = $numberOfSoftDeletedMeasurements;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfStudiesWhereCauseVariable(): ?int
    {
        return $this->numberOfStudiesWhereCauseVariable;
    }

    /**
     * @param int|null $numberOfStudiesWhereCauseVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfStudiesWhereCauseVariable(?int $numberOfStudiesWhereCauseVariable): PredictorVariable
    {
        $this->numberOfStudiesWhereCauseVariable = $numberOfStudiesWhereCauseVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfStudiesWhereEffectVariable(): ?int
    {
        return $this->numberOfStudiesWhereEffectVariable;
    }

    /**
     * @param int|null $numberOfStudiesWhereEffectVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfStudiesWhereEffectVariable(?int $numberOfStudiesWhereEffectVariable): PredictorVariable
    {
        $this->numberOfStudiesWhereEffectVariable = $numberOfStudiesWhereEffectVariable;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfTrackingReminderNotifications(?int $numberOfTrackingReminderNotifications): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfTrackingReminders(?int $numberOfTrackingReminders): PredictorVariable
    {
        $this->numberOfTrackingReminders = $numberOfTrackingReminders;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): PredictorVariable
    {
        $this->numberOfUserChildren = $numberOfUserChildren;
        
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
     * @return PredictorVariable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): PredictorVariable
    {
        $this->numberOfUserParents = $numberOfUserParents;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserTagsWhereTagVariable(): ?int
    {
        return $this->numberOfUserTagsWhereTagVariable;
    }

    /**
     * @param int|null $numberOfUserTagsWhereTagVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfUserTagsWhereTagVariable(?int $numberOfUserTagsWhereTagVariable): PredictorVariable
    {
        $this->numberOfUserTagsWhereTagVariable = $numberOfUserTagsWhereTagVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserTagsWhereTaggedVariable(): ?int
    {
        return $this->numberOfUserTagsWhereTaggedVariable;
    }

    /**
     * @param int|null $numberOfUserTagsWhereTaggedVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfUserTagsWhereTaggedVariable(?int $numberOfUserTagsWhereTaggedVariable): PredictorVariable
    {
        $this->numberOfUserTagsWhereTaggedVariable = $numberOfUserTagsWhereTaggedVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUserVariables(): ?int
    {
        return $this->numberOfUserVariables;
    }

    /**
     * @param int|null $numberOfUserVariables
     *
     * @return PredictorVariable
     */
    public function setNumberOfUserVariables(?int $numberOfUserVariables): PredictorVariable
    {
        $this->numberOfUserVariables = $numberOfUserVariables;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfUsersWherePrimaryOutcomeVariable(): ?int
    {
        return $this->numberOfUsersWherePrimaryOutcomeVariable;
    }

    /**
     * @param int|null $numberOfUsersWherePrimaryOutcomeVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfUsersWherePrimaryOutcomeVariable(?int $numberOfUsersWherePrimaryOutcomeVariable): PredictorVariable
    {
        $this->numberOfUsersWherePrimaryOutcomeVariable = $numberOfUsersWherePrimaryOutcomeVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfVariablesWhereBestCauseVariable(): ?int
    {
        return $this->numberOfVariablesWhereBestCauseVariable;
    }

    /**
     * @param int|null $numberOfVariablesWhereBestCauseVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfVariablesWhereBestCauseVariable(?int $numberOfVariablesWhereBestCauseVariable): PredictorVariable
    {
        $this->numberOfVariablesWhereBestCauseVariable = $numberOfVariablesWhereBestCauseVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfVariablesWhereBestEffectVariable(): ?int
    {
        return $this->numberOfVariablesWhereBestEffectVariable;
    }

    /**
     * @param int|null $numberOfVariablesWhereBestEffectVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfVariablesWhereBestEffectVariable(?int $numberOfVariablesWhereBestEffectVariable): PredictorVariable
    {
        $this->numberOfVariablesWhereBestEffectVariable = $numberOfVariablesWhereBestEffectVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfVotesWhereCauseVariable(): ?int
    {
        return $this->numberOfVotesWhereCauseVariable;
    }

    /**
     * @param int|null $numberOfVotesWhereCauseVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfVotesWhereCauseVariable(?int $numberOfVotesWhereCauseVariable): PredictorVariable
    {
        $this->numberOfVotesWhereCauseVariable = $numberOfVotesWhereCauseVariable;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfVotesWhereEffectVariable(): ?int
    {
        return $this->numberOfVotesWhereEffectVariable;
    }

    /**
     * @param int|null $numberOfVotesWhereEffectVariable
     *
     * @return PredictorVariable
     */
    public function setNumberOfVotesWhereEffectVariable(?int $numberOfVotesWhereEffectVariable): PredictorVariable
    {
        $this->numberOfVotesWhereEffectVariable = $numberOfVotesWhereEffectVariable;
        
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
     * @return PredictorVariable
     */
    public function setOnsetDelay(?int $onsetDelay): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setOutcome(?bool $outcome): PredictorVariable
    {
        $this->outcome = $outcome;
        
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
     * @return PredictorVariable
     */
    public function setOutcomesCount(?string $outcomesCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setParentId(?string $parentId): PredictorVariable
    {
        $this->parentId = $parentId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPopulationCauseStudiesCount(): ?string
    {
        return $this->populationCauseStudiesCount;
    }

    /**
     * @param string|null $populationCauseStudiesCount
     *
     * @return PredictorVariable
     */
    public function setPopulationCauseStudiesCount(?string $populationCauseStudiesCount): PredictorVariable
    {
        $this->populationCauseStudiesCount = $populationCauseStudiesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPopulationEffectStudiesCount(): ?string
    {
        return $this->populationEffectStudiesCount;
    }

    /**
     * @param string|null $populationEffectStudiesCount
     *
     * @return PredictorVariable
     */
    public function setPopulationEffectStudiesCount(?string $populationEffectStudiesCount): PredictorVariable
    {
        $this->populationEffectStudiesCount = $populationEffectStudiesCount;
        
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
     * @return PredictorVariable
     */
    public function setPredictor(?string $predictor): PredictorVariable
    {
        $this->predictor = $predictor;
        
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
     * @return PredictorVariable
     */
    public function setPredictorsCount(?string $predictorsCount): PredictorVariable
    {
        $this->predictorsCount = $predictorsCount;
        
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float|null $price
     *
     * @return PredictorVariable
     */
    public function setPrice(?float $price): PredictorVariable
    {
        $this->price = $price;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductUrl(): ?string
    {
        return $this->productUrl;
    }

    /**
     * @param string|null $productUrl
     *
     * @return PredictorVariable
     */
    public function setProductUrl(?string $productUrl): PredictorVariable
    {
        $this->productUrl = $productUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicOutcomesCount(): ?string
    {
        return $this->publicOutcomesCount;
    }

    /**
     * @param string|null $publicOutcomesCount
     *
     * @return PredictorVariable
     */
    public function setPublicOutcomesCount(?string $publicOutcomesCount): PredictorVariable
    {
        $this->publicOutcomesCount = $publicOutcomesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicPredictorsCount(): ?string
    {
        return $this->publicPredictorsCount;
    }

    /**
     * @param string|null $publicPredictorsCount
     *
     * @return PredictorVariable
     */
    public function setPublicPredictorsCount(?string $publicPredictorsCount): PredictorVariable
    {
        $this->publicPredictorsCount = $publicPredictorsCount;
        
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
     * @return PredictorVariable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): PredictorVariable
    {
        $this->reasonForAnalysis = $reasonForAnalysis;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecordSizeInKb(): ?int
    {
        return $this->recordSizeInKb;
    }

    /**
     * @param int|null $recordSizeInKb
     *
     * @return PredictorVariable
     */
    public function setRecordSizeInKb(?int $recordSizeInKb): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setReportTitle(?string $reportTitle): PredictorVariable
    {
        $this->reportTitle = $reportTitle;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSecondMostCommonValue(): ?int
    {
        return $this->secondMostCommonValue;
    }

    /**
     * @param int|null $secondMostCommonValue
     *
     * @return PredictorVariable
     */
    public function setSecondMostCommonValue(?int $secondMostCommonValue): PredictorVariable
    {
        $this->secondMostCommonValue = $secondMostCommonValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSideEffectVariablesCount(): ?string
    {
        return $this->sideEffectVariablesCount;
    }

    /**
     * @param string|null $sideEffectVariablesCount
     *
     * @return PredictorVariable
     */
    public function setSideEffectVariablesCount(?string $sideEffectVariablesCount): PredictorVariable
    {
        $this->sideEffectVariablesCount = $sideEffectVariablesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSideEffectsCount(): ?string
    {
        return $this->sideEffectsCount;
    }

    /**
     * @param string|null $sideEffectsCount
     *
     * @return PredictorVariable
     */
    public function setSideEffectsCount(?string $sideEffectsCount): PredictorVariable
    {
        $this->sideEffectsCount = $sideEffectsCount;
        
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
     * @return PredictorVariable
     */
    public function setSkewness(?float $skewness): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setSlug(?string $slug): PredictorVariable
    {
        $this->slug = $slug;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    /**
     * @param int|null $sortOrder
     *
     * @return PredictorVariable
     */
    public function setSortOrder(?int $sortOrder): PredictorVariable
    {
        $this->sortOrder = $sortOrder;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string|null $sourceUrl
     *
     * @return PredictorVariable
     */
    public function setSourceUrl(?string $sourceUrl): PredictorVariable
    {
        $this->sourceUrl = $sourceUrl;
        
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
     * @return PredictorVariable
     */
    public function setStandardDeviation(?float $standardDeviation): PredictorVariable
    {
        $this->standardDeviation = $standardDeviation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStudiesCount(): ?string
    {
        return $this->studiesCount;
    }

    /**
     * @param string|null $studiesCount
     *
     * @return PredictorVariable
     */
    public function setStudiesCount(?string $studiesCount): PredictorVariable
    {
        $this->studiesCount = $studiesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStudiesWhereCauseVariableCount(): ?string
    {
        return $this->studiesWhereCauseVariableCount;
    }

    /**
     * @param string|null $studiesWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setStudiesWhereCauseVariableCount(?string $studiesWhereCauseVariableCount): PredictorVariable
    {
        $this->studiesWhereCauseVariableCount = $studiesWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStudiesWhereEffectVariableCount(): ?string
    {
        return $this->studiesWhereEffectVariableCount;
    }

    /**
     * @param string|null $studiesWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setStudiesWhereEffectVariableCount(?string $studiesWhereEffectVariableCount): PredictorVariable
    {
        $this->studiesWhereEffectVariableCount = $studiesWhereEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setSubtitle(?string $subtitle): PredictorVariable
    {
        $this->subtitle = $subtitle;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getSynonyms(): ?array
    {
        return $this->synonyms;
    }

    /**
     * @param array|null $synonyms
     *
     * @return PredictorVariable
     */
    public function setSynonyms(?array $synonyms): PredictorVariable
    {
        $this->synonyms = $synonyms;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTagsCount(): ?string
    {
        return $this->tagsCount;
    }

    /**
     * @param string|null $tagsCount
     *
     * @return PredictorVariable
     */
    public function setTagsCount(?string $tagsCount): PredictorVariable
    {
        $this->tagsCount = $tagsCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThirdMostCommonValue(): ?int
    {
        return $this->thirdMostCommonValue;
    }

    /**
     * @param int|null $thirdMostCommonValue
     *
     * @return PredictorVariable
     */
    public function setThirdMostCommonValue(?int $thirdMostCommonValue): PredictorVariable
    {
        $this->thirdMostCommonValue = $thirdMostCommonValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThirdPartyCorrelationsCount(): ?string
    {
        return $this->thirdPartyCorrelationsCount;
    }

    /**
     * @param string|null $thirdPartyCorrelationsCount
     *
     * @return PredictorVariable
     */
    public function setThirdPartyCorrelationsCount(?string $thirdPartyCorrelationsCount): PredictorVariable
    {
        $this->thirdPartyCorrelationsCount = $thirdPartyCorrelationsCount;
        
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
     * @return PredictorVariable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): PredictorVariable
    {
        $this->trackingRemindersCount = $trackingRemindersCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTreatmentSideEffectsWhereTreatmentCount(): ?string
    {
        return $this->treatmentSideEffectsWhereTreatmentCount;
    }

    /**
     * @param string|null $treatmentSideEffectsWhereTreatmentCount
     *
     * @return PredictorVariable
     */
    public function setTreatmentSideEffectsWhereTreatmentCount(?string $treatmentSideEffectsWhereTreatmentCount): PredictorVariable
    {
        $this->treatmentSideEffectsWhereTreatmentCount = $treatmentSideEffectsWhereTreatmentCount;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    /**
     * @param int|null $unitId
     *
     * @return PredictorVariable
     */
    public function setUnitId(?int $unitId): PredictorVariable
    {
        $this->unitId = $unitId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpVotedPublicOutcomesCount(): ?string
    {
        return $this->upVotedPublicOutcomesCount;
    }

    /**
     * @param string|null $upVotedPublicOutcomesCount
     *
     * @return PredictorVariable
     */
    public function setUpVotedPublicOutcomesCount(?string $upVotedPublicOutcomesCount): PredictorVariable
    {
        $this->upVotedPublicOutcomesCount = $upVotedPublicOutcomesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpVotedPublicPredictorsCount(): ?string
    {
        return $this->upVotedPublicPredictorsCount;
    }

    /**
     * @param string|null $upVotedPublicPredictorsCount
     *
     * @return PredictorVariable
     */
    public function setUpVotedPublicPredictorsCount(?string $upVotedPublicPredictorsCount): PredictorVariable
    {
        $this->upVotedPublicPredictorsCount = $upVotedPublicPredictorsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpc12(): ?string
    {
        return $this->upc12;
    }

    /**
     * @param string|null $upc12
     *
     * @return PredictorVariable
     */
    public function setUpc12(?string $upc12): PredictorVariable
    {
        $this->upc12 = $upc12;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpc14(): ?string
    {
        return $this->upc14;
    }

    /**
     * @param string|null $upc14
     *
     * @return PredictorVariable
     */
    public function setUpc14(?string $upc14): PredictorVariable
    {
        $this->upc14 = $upc14;
        
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
     * @return PredictorVariable
     */
    public function setUpdatedAt(?string $updatedAt): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setUserErrorMessage(?string $userErrorMessage): PredictorVariable
    {
        $this->userErrorMessage = $userErrorMessage;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTaggedByCount(): ?string
    {
        return $this->userTaggedByCount;
    }

    /**
     * @param string|null $userTaggedByCount
     *
     * @return PredictorVariable
     */
    public function setUserTaggedByCount(?string $userTaggedByCount): PredictorVariable
    {
        $this->userTaggedByCount = $userTaggedByCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTagsCount(): ?string
    {
        return $this->userTagsCount;
    }

    /**
     * @param string|null $userTagsCount
     *
     * @return PredictorVariable
     */
    public function setUserTagsCount(?string $userTagsCount): PredictorVariable
    {
        $this->userTagsCount = $userTagsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTagsWhereTagVariableCount(): ?string
    {
        return $this->userTagsWhereTagVariableCount;
    }

    /**
     * @param string|null $userTagsWhereTagVariableCount
     *
     * @return PredictorVariable
     */
    public function setUserTagsWhereTagVariableCount(?string $userTagsWhereTagVariableCount): PredictorVariable
    {
        $this->userTagsWhereTagVariableCount = $userTagsWhereTagVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserTagsWhereTaggedVariableCount(): ?string
    {
        return $this->userTagsWhereTaggedVariableCount;
    }

    /**
     * @param string|null $userTagsWhereTaggedVariableCount
     *
     * @return PredictorVariable
     */
    public function setUserTagsWhereTaggedVariableCount(?string $userTagsWhereTaggedVariableCount): PredictorVariable
    {
        $this->userTagsWhereTaggedVariableCount = $userTagsWhereTaggedVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): PredictorVariable
    {
        $this->userVariablePredictorCategoriesCount = $userVariablePredictorCategoriesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariablesCount(): ?string
    {
        return $this->userVariablesCount;
    }

    /**
     * @param string|null $userVariablesCount
     *
     * @return PredictorVariable
     */
    public function setUserVariablesCount(?string $userVariablesCount): PredictorVariable
    {
        $this->userVariablesCount = $userVariablesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariablesExcludingTestUsersCount(): ?string
    {
        return $this->userVariablesExcludingTestUsersCount;
    }

    /**
     * @param string|null $userVariablesExcludingTestUsersCount
     *
     * @return PredictorVariable
     */
    public function setUserVariablesExcludingTestUsersCount(?string $userVariablesExcludingTestUsersCount): PredictorVariable
    {
        $this->userVariablesExcludingTestUsersCount = $userVariablesExcludingTestUsersCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsersCount(): ?string
    {
        return $this->usersCount;
    }

    /**
     * @param string|null $usersCount
     *
     * @return PredictorVariable
     */
    public function setUsersCount(?string $usersCount): PredictorVariable
    {
        $this->usersCount = $usersCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsersWherePrimaryOutcomeVariableCount(): ?string
    {
        return $this->usersWherePrimaryOutcomeVariableCount;
    }

    /**
     * @param string|null $usersWherePrimaryOutcomeVariableCount
     *
     * @return PredictorVariable
     */
    public function setUsersWherePrimaryOutcomeVariableCount(?string $usersWherePrimaryOutcomeVariableCount): PredictorVariable
    {
        $this->usersWherePrimaryOutcomeVariableCount = $usersWherePrimaryOutcomeVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setValence(?string $valence): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setVariableCategoryId(?int $variableCategoryId): PredictorVariable
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
     * @return PredictorVariable
     */
    public function setVariableId(?int $variableId): PredictorVariable
    {
        $this->variableId = $variableId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariableOutcomeCategoriesCount(): ?string
    {
        return $this->variableOutcomeCategoriesCount;
    }

    /**
     * @param string|null $variableOutcomeCategoriesCount
     *
     * @return PredictorVariable
     */
    public function setVariableOutcomeCategoriesCount(?string $variableOutcomeCategoriesCount): PredictorVariable
    {
        $this->variableOutcomeCategoriesCount = $variableOutcomeCategoriesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariablePredictorCategoriesCount(): ?string
    {
        return $this->variablePredictorCategoriesCount;
    }

    /**
     * @param string|null $variablePredictorCategoriesCount
     *
     * @return PredictorVariable
     */
    public function setVariablePredictorCategoriesCount(?string $variablePredictorCategoriesCount): PredictorVariable
    {
        $this->variablePredictorCategoriesCount = $variablePredictorCategoriesCount;
        
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
     * @return PredictorVariable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): PredictorVariable
    {
        $this->variableUserSourcesCount = $variableUserSourcesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariablesCount(): ?string
    {
        return $this->variablesCount;
    }

    /**
     * @param string|null $variablesCount
     *
     * @return PredictorVariable
     */
    public function setVariablesCount(?string $variablesCount): PredictorVariable
    {
        $this->variablesCount = $variablesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariablesWhereBestCauseVariableCount(): ?string
    {
        return $this->variablesWhereBestCauseVariableCount;
    }

    /**
     * @param string|null $variablesWhereBestCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setVariablesWhereBestCauseVariableCount(?string $variablesWhereBestCauseVariableCount): PredictorVariable
    {
        $this->variablesWhereBestCauseVariableCount = $variablesWhereBestCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariablesWhereBestEffectVariableCount(): ?string
    {
        return $this->variablesWhereBestEffectVariableCount;
    }

    /**
     * @param string|null $variablesWhereBestEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setVariablesWhereBestEffectVariableCount(?string $variablesWhereBestEffectVariableCount): PredictorVariable
    {
        $this->variablesWhereBestEffectVariableCount = $variablesWhereBestEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setVariance(?float $variance): PredictorVariable
    {
        $this->variance = $variance;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVotesCount(): ?string
    {
        return $this->votesCount;
    }

    /**
     * @param string|null $votesCount
     *
     * @return PredictorVariable
     */
    public function setVotesCount(?string $votesCount): PredictorVariable
    {
        $this->votesCount = $votesCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVotesWhereCauseCount(): ?string
    {
        return $this->votesWhereCauseCount;
    }

    /**
     * @param string|null $votesWhereCauseCount
     *
     * @return PredictorVariable
     */
    public function setVotesWhereCauseCount(?string $votesWhereCauseCount): PredictorVariable
    {
        $this->votesWhereCauseCount = $votesWhereCauseCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVotesWhereCauseVariableCount(): ?string
    {
        return $this->votesWhereCauseVariableCount;
    }

    /**
     * @param string|null $votesWhereCauseVariableCount
     *
     * @return PredictorVariable
     */
    public function setVotesWhereCauseVariableCount(?string $votesWhereCauseVariableCount): PredictorVariable
    {
        $this->votesWhereCauseVariableCount = $votesWhereCauseVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVotesWhereEffectCount(): ?string
    {
        return $this->votesWhereEffectCount;
    }

    /**
     * @param string|null $votesWhereEffectCount
     *
     * @return PredictorVariable
     */
    public function setVotesWhereEffectCount(?string $votesWhereEffectCount): PredictorVariable
    {
        $this->votesWhereEffectCount = $votesWhereEffectCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVotesWhereEffectVariableCount(): ?string
    {
        return $this->votesWhereEffectVariableCount;
    }

    /**
     * @param string|null $votesWhereEffectVariableCount
     *
     * @return PredictorVariable
     */
    public function setVotesWhereEffectVariableCount(?string $votesWhereEffectVariableCount): PredictorVariable
    {
        $this->votesWhereEffectVariableCount = $votesWhereEffectVariableCount;
        
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
     * @return PredictorVariable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): PredictorVariable
    {
        $this->wikipediaTitle = $wikipediaTitle;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWikipediaUrl(): ?string
    {
        return $this->wikipediaUrl;
    }

    /**
     * @param string|null $wikipediaUrl
     *
     * @return PredictorVariable
     */
    public function setWikipediaUrl(?string $wikipediaUrl): PredictorVariable
    {
        $this->wikipediaUrl = $wikipediaUrl;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWpPostId(): ?int
    {
        return $this->wpPostId;
    }

    /**
     * @param int|null $wpPostId
     *
     * @return PredictorVariable
     */
    public function setWpPostId(?int $wpPostId): PredictorVariable
    {
        $this->wpPostId = $wpPostId;
        
        return $this;
    }
}

