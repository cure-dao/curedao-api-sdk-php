<?php

namespace CureDAO\Model;

class OutcomeVariable
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
     * @var string
     */
    private $averageSecondsBetweenMeasurements;

    /**
     * @var string
     */
    private $bestAggregateCorrelationId;

    /**
     * @var int
     */
    private $bestCauseVariableId;

    /**
     * @var string
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
     * @var string
     */
    private $causeOnly;

    /**
     * @var string
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
     * @var int
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
     * @var string
     */
    private $isPublic;

    /**
     * @var string
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
     * @var int
     */
    private $maximumAllowedValue;

    /**
     * @var int
     */
    private $maximumRecordedValue;

    /**
     * @var string
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
     * @var string
     */
    private $median;

    /**
     * @var string
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
     * @var string
     */
    private $mostCommonValue;

    /**
     * @var string
     */
    private $newestDataAt;

    /**
     * @var string
     */
    private $numberCommonTaggedBy;

    /**
     * @var string
     */
    private $numberOfAggregateCorrelationsAsCause;

    /**
     * @var string
     */
    private $numberOfAggregateCorrelationsAsEffect;

    /**
     * @var string
     */
    private $numberOfApplicationsWhereOutcomeVariable;

    /**
     * @var string
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
     * @var string
     */
    private $numberOfCommonTags;

    /**
     * @var string
     */
    private $numberOfCommonTagsWhereTagVariable;

    /**
     * @var string
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
     * @var string
     */
    private $numberOfStudiesWhereCauseVariable;

    /**
     * @var string
     */
    private $numberOfStudiesWhereEffectVariable;

    /**
     * @var string
     */
    private $numberOfTrackingReminderNotifications;

    /**
     * @var string
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
     * @var string
     */
    private $numberOfUserTagsWhereTagVariable;

    /**
     * @var string
     */
    private $numberOfUserTagsWhereTaggedVariable;

    /**
     * @var int
     */
    private $numberOfUserVariables;

    /**
     * @var string
     */
    private $numberOfUsersWherePrimaryOutcomeVariable;

    /**
     * @var string
     */
    private $numberOfVariablesWhereBestCauseVariable;

    /**
     * @var string
     */
    private $numberOfVariablesWhereBestEffectVariable;

    /**
     * @var string
     */
    private $numberOfVotesWhereCauseVariable;

    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
     */
    private $recordSizeInKb;

    /**
     * @var string
     */
    private $reportTitle;

    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @var string
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
     * @return OutcomeVariable
     */
    public function setTitle(?string $title): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setId(?int $id): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setName(?string $name): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAbbreviatedUnitName(?string $abbreviatedUnitName): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setActionsCount(?string $actionsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAdditionalMetaData(?string $additionalMetaData): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAggregateCorrelationsCount(?string $aggregateCorrelationsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAggregateCorrelationsWhereCauseVariableCount(?string $aggregateCorrelationsWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAggregateCorrelationsWhereEffectVariableCount(?string $aggregateCorrelationsWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setApplicationsWhereOutcomeVariableCount(?string $applicationsWhereOutcomeVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setApplicationsWherePredictorVariableCount(?string $applicationsWherePredictorVariableCount): OutcomeVariable
    {
        $this->applicationsWherePredictorVariableCount = $applicationsWherePredictorVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAverageSecondsBetweenMeasurements(): ?string
    {
        return $this->averageSecondsBetweenMeasurements;
    }

    /**
     * @param string|null $averageSecondsBetweenMeasurements
     *
     * @return OutcomeVariable
     */
    public function setAverageSecondsBetweenMeasurements(?string $averageSecondsBetweenMeasurements): OutcomeVariable
    {
        $this->averageSecondsBetweenMeasurements = $averageSecondsBetweenMeasurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBestAggregateCorrelationId(): ?string
    {
        return $this->bestAggregateCorrelationId;
    }

    /**
     * @param string|null $bestAggregateCorrelationId
     *
     * @return OutcomeVariable
     */
    public function setBestAggregateCorrelationId(?string $bestAggregateCorrelationId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setBestCauseVariableId(?int $bestCauseVariableId): OutcomeVariable
    {
        $this->bestCauseVariableId = $bestCauseVariableId;
        
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
     * @return OutcomeVariable
     */
    public function setBestEffectVariableId(?string $bestEffectVariableId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setBoring(?string $boring): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setBrandName(?string $brandName): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCanonicalVariableId(?string $canonicalVariableId): OutcomeVariable
    {
        $this->canonicalVariableId = $canonicalVariableId;
        
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
     * @return OutcomeVariable
     */
    public function setCauseOnly(?string $causeOnly): OutcomeVariable
    {
        $this->causeOnly = $causeOnly;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCharts(): ?string
    {
        return $this->charts;
    }

    /**
     * @param string|null $charts
     *
     * @return OutcomeVariable
     */
    public function setCharts(?string $charts): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setClientId(?string $clientId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCombinationOperation(?string $combinationOperation): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonAlias(?string $commonAlias): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonMaximumAllowedDailyValue(?string $commonMaximumAllowedDailyValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonMinimumAllowedDailyValue(?string $commonMinimumAllowedDailyValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonMinimumAllowedNonZeroValue(?string $commonMinimumAllowedNonZeroValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonTaggedByCount(?string $commonTaggedByCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonTagsCount(?string $commonTagsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonTagsWhereTagVariableCount(?string $commonTagsWhereTagVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCommonTagsWhereTaggedVariableCount(?string $commonTagsWhereTaggedVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setConditionCausesWhereCauseCount(?string $conditionCausesWhereCauseCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setConditionCausesWhereConditionCount(?string $conditionCausesWhereConditionCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setConditionTreatmentsCount(?string $conditionTreatmentsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setConditionTreatmentsWhereConditionCount(?string $conditionTreatmentsWhereConditionCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setConditionTreatmentsWhereTreatmentCount(?string $conditionTreatmentsWhereTreatmentCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setControllable(?string $controllable): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationCausalityVotesWhereCauseVariableCount(?string $correlationCausalityVotesWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationCausalityVotesWhereEffectVariableCount(?string $correlationCausalityVotesWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationUsefulnessVotesWhereCauseVariableCount(?string $correlationUsefulnessVotesWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationUsefulnessVotesWhereEffectVariableCount(?string $correlationUsefulnessVotesWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationsCount(?string $correlationsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationsWhereCauseVariableCount(?string $correlationsWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCorrelationsWhereEffectVariableCount(?string $correlationsWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCreatedAt(?string $createdAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCreatorUserId(?int $creatorUserId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCtTreatmentSideEffectsWhereSideEffectVariableCount(?string $ctTreatmentSideEffectsWhereSideEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setCtTreatmentSideEffectsWhereTreatmentVariableCount(?string $ctTreatmentSideEffectsWhereTreatmentVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDefaultUnitId(?int $defaultUnitId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDefaultValue(?string $defaultValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDeletionReason(?string $deletionReason): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDescription(?string $description): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDisplayName(?string $displayName): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setDurationOfAction(?int $durationOfAction): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setFavoritersCount(?string $favoritersCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setFavoritesCount(?string $favoritesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setFillingType(?string $fillingType): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setFillingValue(?int $fillingValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setImageUrl(?string $imageUrl): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setIndividualCauseStudiesCount(?string $individualCauseStudiesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setIndividualEffectStudiesCount(?string $individualEffectStudiesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setInformationalUrl(?string $informationalUrl): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setIonIcon(?string $ionIcon): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setIsGoal(?string $isGoal): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setIsPublic(?string $isPublic): OutcomeVariable
    {
        $this->isPublic = $isPublic;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKurtosis(): ?string
    {
        return $this->kurtosis;
    }

    /**
     * @param string|null $kurtosis
     *
     * @return OutcomeVariable
     */
    public function setKurtosis(?string $kurtosis): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setManualTracking(?bool $manualTracking): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMaximumAllowedDailyValue(?string $maximumAllowedDailyValue): OutcomeVariable
    {
        $this->maximumAllowedDailyValue = $maximumAllowedDailyValue;
        
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
     * @return OutcomeVariable
     */
    public function setMaximumAllowedValue(?int $maximumAllowedValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): OutcomeVariable
    {
        $this->maximumRecordedValue = $maximumRecordedValue;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMean(): ?string
    {
        return $this->mean;
    }

    /**
     * @param string|null $mean
     *
     * @return OutcomeVariable
     */
    public function setMean(?string $mean): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMeasurementsCount(?string $measurementsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMediaCount(?string $mediaCount): OutcomeVariable
    {
        $this->mediaCount = $mediaCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMedian(): ?string
    {
        return $this->median;
    }

    /**
     * @param string|null $median
     *
     * @return OutcomeVariable
     */
    public function setMedian(?string $median): OutcomeVariable
    {
        $this->median = $median;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMedianSecondsBetweenMeasurements(): ?string
    {
        return $this->medianSecondsBetweenMeasurements;
    }

    /**
     * @param string|null $medianSecondsBetweenMeasurements
     *
     * @return OutcomeVariable
     */
    public function setMedianSecondsBetweenMeasurements(?string $medianSecondsBetweenMeasurements): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMetaData(?string $metaData): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMostCommonConnectorId(?string $mostCommonConnectorId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMostCommonOriginalUnitId(?string $mostCommonOriginalUnitId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): OutcomeVariable
    {
        $this->mostCommonSourceName = $mostCommonSourceName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMostCommonValue(): ?string
    {
        return $this->mostCommonValue;
    }

    /**
     * @param string|null $mostCommonValue
     *
     * @return OutcomeVariable
     */
    public function setMostCommonValue(?string $mostCommonValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNewestDataAt(?string $newestDataAt): OutcomeVariable
    {
        $this->newestDataAt = $newestDataAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberCommonTaggedBy(): ?string
    {
        return $this->numberCommonTaggedBy;
    }

    /**
     * @param string|null $numberCommonTaggedBy
     *
     * @return OutcomeVariable
     */
    public function setNumberCommonTaggedBy(?string $numberCommonTaggedBy): OutcomeVariable
    {
        $this->numberCommonTaggedBy = $numberCommonTaggedBy;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfAggregateCorrelationsAsCause(): ?string
    {
        return $this->numberOfAggregateCorrelationsAsCause;
    }

    /**
     * @param string|null $numberOfAggregateCorrelationsAsCause
     *
     * @return OutcomeVariable
     */
    public function setNumberOfAggregateCorrelationsAsCause(?string $numberOfAggregateCorrelationsAsCause): OutcomeVariable
    {
        $this->numberOfAggregateCorrelationsAsCause = $numberOfAggregateCorrelationsAsCause;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfAggregateCorrelationsAsEffect(): ?string
    {
        return $this->numberOfAggregateCorrelationsAsEffect;
    }

    /**
     * @param string|null $numberOfAggregateCorrelationsAsEffect
     *
     * @return OutcomeVariable
     */
    public function setNumberOfAggregateCorrelationsAsEffect(?string $numberOfAggregateCorrelationsAsEffect): OutcomeVariable
    {
        $this->numberOfAggregateCorrelationsAsEffect = $numberOfAggregateCorrelationsAsEffect;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfApplicationsWhereOutcomeVariable(): ?string
    {
        return $this->numberOfApplicationsWhereOutcomeVariable;
    }

    /**
     * @param string|null $numberOfApplicationsWhereOutcomeVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfApplicationsWhereOutcomeVariable(?string $numberOfApplicationsWhereOutcomeVariable): OutcomeVariable
    {
        $this->numberOfApplicationsWhereOutcomeVariable = $numberOfApplicationsWhereOutcomeVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfApplicationsWherePredictorVariable(): ?string
    {
        return $this->numberOfApplicationsWherePredictorVariable;
    }

    /**
     * @param string|null $numberOfApplicationsWherePredictorVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfApplicationsWherePredictorVariable(?string $numberOfApplicationsWherePredictorVariable): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfCommonTags(?string $numberOfCommonTags): OutcomeVariable
    {
        $this->numberOfCommonTags = $numberOfCommonTags;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonTagsWhereTagVariable(): ?string
    {
        return $this->numberOfCommonTagsWhereTagVariable;
    }

    /**
     * @param string|null $numberOfCommonTagsWhereTagVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfCommonTagsWhereTagVariable(?string $numberOfCommonTagsWhereTagVariable): OutcomeVariable
    {
        $this->numberOfCommonTagsWhereTagVariable = $numberOfCommonTagsWhereTagVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfCommonTagsWhereTaggedVariable(): ?string
    {
        return $this->numberOfCommonTagsWhereTaggedVariable;
    }

    /**
     * @param string|null $numberOfCommonTagsWhereTaggedVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfCommonTagsWhereTaggedVariable(?string $numberOfCommonTagsWhereTaggedVariable): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfOutcomePopulationStudies(?string $numberOfOutcomePopulationStudies): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfPredictorCaseStudies(?string $numberOfPredictorCaseStudies): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfPredictorPopulationStudies(?string $numberOfPredictorPopulationStudies): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfRawMeasurements(?string $numberOfRawMeasurements): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfSoftDeletedMeasurements(?string $numberOfSoftDeletedMeasurements): OutcomeVariable
    {
        $this->numberOfSoftDeletedMeasurements = $numberOfSoftDeletedMeasurements;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfStudiesWhereCauseVariable(): ?string
    {
        return $this->numberOfStudiesWhereCauseVariable;
    }

    /**
     * @param string|null $numberOfStudiesWhereCauseVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfStudiesWhereCauseVariable(?string $numberOfStudiesWhereCauseVariable): OutcomeVariable
    {
        $this->numberOfStudiesWhereCauseVariable = $numberOfStudiesWhereCauseVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfStudiesWhereEffectVariable(): ?string
    {
        return $this->numberOfStudiesWhereEffectVariable;
    }

    /**
     * @param string|null $numberOfStudiesWhereEffectVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfStudiesWhereEffectVariable(?string $numberOfStudiesWhereEffectVariable): OutcomeVariable
    {
        $this->numberOfStudiesWhereEffectVariable = $numberOfStudiesWhereEffectVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfTrackingReminderNotifications(): ?string
    {
        return $this->numberOfTrackingReminderNotifications;
    }

    /**
     * @param string|null $numberOfTrackingReminderNotifications
     *
     * @return OutcomeVariable
     */
    public function setNumberOfTrackingReminderNotifications(?string $numberOfTrackingReminderNotifications): OutcomeVariable
    {
        $this->numberOfTrackingReminderNotifications = $numberOfTrackingReminderNotifications;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfTrackingReminders(): ?string
    {
        return $this->numberOfTrackingReminders;
    }

    /**
     * @param string|null $numberOfTrackingReminders
     *
     * @return OutcomeVariable
     */
    public function setNumberOfTrackingReminders(?string $numberOfTrackingReminders): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): OutcomeVariable
    {
        $this->numberOfUserParents = $numberOfUserParents;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserTagsWhereTagVariable(): ?string
    {
        return $this->numberOfUserTagsWhereTagVariable;
    }

    /**
     * @param string|null $numberOfUserTagsWhereTagVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfUserTagsWhereTagVariable(?string $numberOfUserTagsWhereTagVariable): OutcomeVariable
    {
        $this->numberOfUserTagsWhereTagVariable = $numberOfUserTagsWhereTagVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUserTagsWhereTaggedVariable(): ?string
    {
        return $this->numberOfUserTagsWhereTaggedVariable;
    }

    /**
     * @param string|null $numberOfUserTagsWhereTaggedVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfUserTagsWhereTaggedVariable(?string $numberOfUserTagsWhereTaggedVariable): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setNumberOfUserVariables(?int $numberOfUserVariables): OutcomeVariable
    {
        $this->numberOfUserVariables = $numberOfUserVariables;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUsersWherePrimaryOutcomeVariable(): ?string
    {
        return $this->numberOfUsersWherePrimaryOutcomeVariable;
    }

    /**
     * @param string|null $numberOfUsersWherePrimaryOutcomeVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfUsersWherePrimaryOutcomeVariable(?string $numberOfUsersWherePrimaryOutcomeVariable): OutcomeVariable
    {
        $this->numberOfUsersWherePrimaryOutcomeVariable = $numberOfUsersWherePrimaryOutcomeVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfVariablesWhereBestCauseVariable(): ?string
    {
        return $this->numberOfVariablesWhereBestCauseVariable;
    }

    /**
     * @param string|null $numberOfVariablesWhereBestCauseVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfVariablesWhereBestCauseVariable(?string $numberOfVariablesWhereBestCauseVariable): OutcomeVariable
    {
        $this->numberOfVariablesWhereBestCauseVariable = $numberOfVariablesWhereBestCauseVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfVariablesWhereBestEffectVariable(): ?string
    {
        return $this->numberOfVariablesWhereBestEffectVariable;
    }

    /**
     * @param string|null $numberOfVariablesWhereBestEffectVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfVariablesWhereBestEffectVariable(?string $numberOfVariablesWhereBestEffectVariable): OutcomeVariable
    {
        $this->numberOfVariablesWhereBestEffectVariable = $numberOfVariablesWhereBestEffectVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfVotesWhereCauseVariable(): ?string
    {
        return $this->numberOfVotesWhereCauseVariable;
    }

    /**
     * @param string|null $numberOfVotesWhereCauseVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfVotesWhereCauseVariable(?string $numberOfVotesWhereCauseVariable): OutcomeVariable
    {
        $this->numberOfVotesWhereCauseVariable = $numberOfVotesWhereCauseVariable;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfVotesWhereEffectVariable(): ?string
    {
        return $this->numberOfVotesWhereEffectVariable;
    }

    /**
     * @param string|null $numberOfVotesWhereEffectVariable
     *
     * @return OutcomeVariable
     */
    public function setNumberOfVotesWhereEffectVariable(?string $numberOfVotesWhereEffectVariable): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setOnsetDelay(?int $onsetDelay): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setOutcome(?string $outcome): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setOutcomesCount(?string $outcomesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setParentId(?string $parentId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPopulationCauseStudiesCount(?string $populationCauseStudiesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPopulationEffectStudiesCount(?string $populationEffectStudiesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPredictor(?string $predictor): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPredictorsCount(?string $predictorsCount): OutcomeVariable
    {
        $this->predictorsCount = $predictorsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string|null $price
     *
     * @return OutcomeVariable
     */
    public function setPrice(?string $price): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setProductUrl(?string $productUrl): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPublicOutcomesCount(?string $publicOutcomesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setPublicPredictorsCount(?string $publicPredictorsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setRecordSizeInKb(?string $recordSizeInKb): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setReportTitle(?string $reportTitle): OutcomeVariable
    {
        $this->reportTitle = $reportTitle;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecondMostCommonValue(): ?string
    {
        return $this->secondMostCommonValue;
    }

    /**
     * @param string|null $secondMostCommonValue
     *
     * @return OutcomeVariable
     */
    public function setSecondMostCommonValue(?string $secondMostCommonValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSideEffectVariablesCount(?string $sideEffectVariablesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSideEffectsCount(?string $sideEffectsCount): OutcomeVariable
    {
        $this->sideEffectsCount = $sideEffectsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSkewness(): ?string
    {
        return $this->skewness;
    }

    /**
     * @param string|null $skewness
     *
     * @return OutcomeVariable
     */
    public function setSkewness(?string $skewness): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSlug(?string $slug): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSortOrder(?int $sortOrder): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSourceUrl(?string $sourceUrl): OutcomeVariable
    {
        $this->sourceUrl = $sourceUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStandardDeviation(): ?string
    {
        return $this->standardDeviation;
    }

    /**
     * @param string|null $standardDeviation
     *
     * @return OutcomeVariable
     */
    public function setStandardDeviation(?string $standardDeviation): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setStudiesCount(?string $studiesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setStudiesWhereCauseVariableCount(?string $studiesWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setStudiesWhereEffectVariableCount(?string $studiesWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSubtitle(?string $subtitle): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setSynonyms(?array $synonyms): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setTagsCount(?string $tagsCount): OutcomeVariable
    {
        $this->tagsCount = $tagsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThirdMostCommonValue(): ?string
    {
        return $this->thirdMostCommonValue;
    }

    /**
     * @param string|null $thirdMostCommonValue
     *
     * @return OutcomeVariable
     */
    public function setThirdMostCommonValue(?string $thirdMostCommonValue): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setThirdPartyCorrelationsCount(?string $thirdPartyCorrelationsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setTreatmentSideEffectsWhereTreatmentCount(?string $treatmentSideEffectsWhereTreatmentCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUnitId(?int $unitId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUpVotedPublicOutcomesCount(?string $upVotedPublicOutcomesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUpVotedPublicPredictorsCount(?string $upVotedPublicPredictorsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUpc12(?string $upc12): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUpc14(?string $upc14): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUpdatedAt(?string $updatedAt): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserErrorMessage(?string $userErrorMessage): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserTaggedByCount(?string $userTaggedByCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserTagsCount(?string $userTagsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserTagsWhereTagVariableCount(?string $userTagsWhereTagVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserTagsWhereTaggedVariableCount(?string $userTagsWhereTaggedVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserVariablesCount(?string $userVariablesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUserVariablesExcludingTestUsersCount(?string $userVariablesExcludingTestUsersCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUsersCount(?string $usersCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setUsersWherePrimaryOutcomeVariableCount(?string $usersWherePrimaryOutcomeVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setValence(?string $valence): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariableCategoryId(?int $variableCategoryId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariableId(?int $variableId): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariableOutcomeCategoriesCount(?string $variableOutcomeCategoriesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariablePredictorCategoriesCount(?string $variablePredictorCategoriesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariablesCount(?string $variablesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariablesWhereBestCauseVariableCount(?string $variablesWhereBestCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVariablesWhereBestEffectVariableCount(?string $variablesWhereBestEffectVariableCount): OutcomeVariable
    {
        $this->variablesWhereBestEffectVariableCount = $variablesWhereBestEffectVariableCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVariance(): ?string
    {
        return $this->variance;
    }

    /**
     * @param string|null $variance
     *
     * @return OutcomeVariable
     */
    public function setVariance(?string $variance): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVotesCount(?string $votesCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVotesWhereCauseCount(?string $votesWhereCauseCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVotesWhereCauseVariableCount(?string $votesWhereCauseVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVotesWhereEffectCount(?string $votesWhereEffectCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setVotesWhereEffectVariableCount(?string $votesWhereEffectVariableCount): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): OutcomeVariable
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
     * @return OutcomeVariable
     */
    public function setWikipediaUrl(?string $wikipediaUrl): OutcomeVariable
    {
        $this->wikipediaUrl = $wikipediaUrl;
        
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
     * @return OutcomeVariable
     */
    public function setWpPostId(?string $wpPostId): OutcomeVariable
    {
        $this->wpPostId = $wpPostId;
        
        return $this;
    }
}

