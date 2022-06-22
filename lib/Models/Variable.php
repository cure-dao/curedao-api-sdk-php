<?php

namespace CureDAO\Client\Models;

use CureDAO\Client\BaseModel;

class Variable extends BaseModel
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $abbreviatedUnitName;

    /**
     * @var string
     */
    public $actionsCount;

    /**
     * @var string
     */
    public $additionalMetaData;

    /**
     * @var string
     */
    public $aggregateCorrelationsCount;

    /**
     * @var string
     */
    public $aggregateCorrelationsWhereCauseVariableCount;

    /**
     * @var string
     */
    public $aggregateCorrelationsWhereEffectVariableCount;

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
     * @var string
     */
    public $applicationsWhereOutcomeVariableCount;

    /**
     * @var string
     */
    public $applicationsWherePredictorVariableCount;

    /**
     * @var int
     */
    public $averageSecondsBetweenMeasurements;

    /**
     * @var int
     */
    public $bestAggregateCorrelationId;

    /**
     * @var int
     */
    public $bestCauseVariableId;

    /**
     * @var int
     */
    public $bestEffectVariableId;

    /**
     * @var string
     */
    public $boring;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $canonicalVariableId;

    /**
     * @var bool
     */
    public $causeOnly;

    /**
     * @var Charts
     */
    public $charts;

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
    public $commonAlias;

    /**
     * @var string
     */
    public $commonMaximumAllowedDailyValue;

    /**
     * @var string
     */
    public $commonMinimumAllowedDailyValue;

    /**
     * @var string
     */
    public $commonMinimumAllowedNonZeroValue;

    /**
     * @var string
     */
    public $commonTaggedByCount;

    /**
     * @var string
     */
    public $commonTagsCount;

    /**
     * @var string
     */
    public $commonTagsWhereTagVariableCount;

    /**
     * @var string
     */
    public $commonTagsWhereTaggedVariableCount;

    /**
     * @var string
     */
    public $conditionCausesWhereCauseCount;

    /**
     * @var string
     */
    public $conditionCausesWhereConditionCount;

    /**
     * @var string
     */
    public $conditionTreatmentsCount;

    /**
     * @var string
     */
    public $conditionTreatmentsWhereConditionCount;

    /**
     * @var string
     */
    public $conditionTreatmentsWhereTreatmentCount;

    /**
     * @var string
     */
    public $controllable;

    /**
     * @var string
     */
    public $correlationCausalityVotesWhereCauseVariableCount;

    /**
     * @var string
     */
    public $correlationCausalityVotesWhereEffectVariableCount;

    /**
     * @var string
     */
    public $correlationUsefulnessVotesWhereCauseVariableCount;

    /**
     * @var string
     */
    public $correlationUsefulnessVotesWhereEffectVariableCount;

    /**
     * @var string
     */
    public $correlationsCount;

    /**
     * @var string
     */
    public $correlationsWhereCauseVariableCount;

    /**
     * @var string
     */
    public $correlationsWhereEffectVariableCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $creatorUserId;

    /**
     * @var string
     */
    public $ctTreatmentSideEffectsWhereSideEffectVariableCount;

    /**
     * @var string
     */
    public $ctTreatmentSideEffectsWhereTreatmentVariableCount;

    /**
     * @var DataSourcesCount
     */
    public $dataSourcesCount;

    /**
     * @var int
     */
    public $defaultUnitId;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $deletionReason;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

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
    public $earliestTaggedMeasurementStartAt;

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
    public $imageUrl;

    /**
     * @var string
     */
    public $individualCauseStudiesCount;

    /**
     * @var string
     */
    public $individualEffectStudiesCount;

    /**
     * @var string
     */
    public $informationalUrl;

    /**
     * @var string
     */
    public $ionIcon;

    /**
     * @var string
     */
    public $isGoal;

    /**
     * @var int
     */
    public $isPublic;

    /**
     * @var float
     */
    public $kurtosis;

    /**
     * @var string
     */
    public $latestNonTaggedMeasurementStartAt;

    /**
     * @var string
     */
    public $latestTaggedMeasurementStartAt;

    /**
     * @var bool
     */
    public $manualTracking;

    /**
     * @var string
     */
    public $maximumAllowedDailyValue;

    /**
     * @var string
     */
    public $maximumAllowedValue;

    /**
     * @var int
     */
    public $maximumRecordedValue;

    /**
     * @var float
     */
    public $mean;

    /**
     * @var string
     */
    public $measurementsCount;

    /**
     * @var string
     */
    public $mediaCount;

    /**
     * @var float
     */
    public $median;

    /**
     * @var int
     */
    public $medianSecondsBetweenMeasurements;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var int
     */
    public $minimumAllowedSecondsBetweenMeasurements;

    /**
     * @var int
     */
    public $minimumAllowedValue;

    /**
     * @var int
     */
    public $minimumRecordedValue;

    /**
     * @var int
     */
    public $mostCommonConnectorId;

    /**
     * @var int
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
    public $numberOfAggregateCorrelationsAsCause;

    /**
     * @var int
     */
    public $numberOfAggregateCorrelationsAsEffect;

    /**
     * @var int
     */
    public $numberOfApplicationsWhereOutcomeVariable;

    /**
     * @var int
     */
    public $numberOfApplicationsWherePredictorVariable;

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
     * @var int
     */
    public $numberOfCommonTags;

    /**
     * @var int
     */
    public $numberOfCommonTagsWhereTagVariable;

    /**
     * @var int
     */
    public $numberOfCommonTagsWhereTaggedVariable;

    /**
     * @var int
     */
    public $numberOfMeasurements;

    /**
     * @var string
     */
    public $numberOfOutcomeCaseStudies;

    /**
     * @var string
     */
    public $numberOfOutcomePopulationStudies;

    /**
     * @var string
     */
    public $numberOfPredictorCaseStudies;

    /**
     * @var string
     */
    public $numberOfPredictorPopulationStudies;

    /**
     * @var string
     */
    public $numberOfRawMeasurements;

    /**
     * @var int
     */
    public $numberOfRawMeasurementsWithTagsJoinsChildren;

    /**
     * @var string
     */
    public $numberOfSoftDeletedMeasurements;

    /**
     * @var int
     */
    public $numberOfStudiesWhereCauseVariable;

    /**
     * @var int
     */
    public $numberOfStudiesWhereEffectVariable;

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
    public $numberOfUniqueValues;

    /**
     * @var string
     */
    public $numberOfUserChildren;

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
    public $numberOfUserTagsWhereTagVariable;

    /**
     * @var int
     */
    public $numberOfUserTagsWhereTaggedVariable;

    /**
     * @var int
     */
    public $numberOfUserVariables;

    /**
     * @var int
     */
    public $numberOfUsersWherePrimaryOutcomeVariable;

    /**
     * @var int
     */
    public $numberOfVariablesWhereBestCauseVariable;

    /**
     * @var int
     */
    public $numberOfVariablesWhereBestEffectVariable;

    /**
     * @var int
     */
    public $numberOfVotesWhereCauseVariable;

    /**
     * @var int
     */
    public $numberOfVotesWhereEffectVariable;

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
    public $populationCauseStudiesCount;

    /**
     * @var string
     */
    public $populationEffectStudiesCount;

    /**
     * @var string
     */
    public $predictor;

    /**
     * @var string
     */
    public $predictorsCount;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $productUrl;

    /**
     * @var string
     */
    public $publicOutcomesCount;

    /**
     * @var string
     */
    public $publicPredictorsCount;

    /**
     * @var string
     */
    public $reasonForAnalysis;

    /**
     * @var int
     */
    public $recordSizeInKb;

    /**
     * @var string
     */
    public $reportTitle;

    /**
     * @var int
     */
    public $secondMostCommonValue;

    /**
     * @var string
     */
    public $sideEffectVariablesCount;

    /**
     * @var string
     */
    public $sideEffectsCount;

    /**
     * @var float
     */
    public $skewness;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var int
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var float
     */
    public $standardDeviation;

    /**
     * @var string
     */
    public $studiesCount;

    /**
     * @var string
     */
    public $studiesWhereCauseVariableCount;

    /**
     * @var string
     */
    public $studiesWhereEffectVariableCount;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var array
     */
    public $synonyms;

    /**
     * @var string
     */
    public $tagsCount;

    /**
     * @var int
     */
    public $thirdMostCommonValue;

    /**
     * @var string
     */
    public $thirdPartyCorrelationsCount;

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
    public $treatmentSideEffectsWhereTreatmentCount;

    /**
     * @var int
     */
    public $unitId;

    /**
     * @var string
     */
    public $upVotedPublicOutcomesCount;

    /**
     * @var string
     */
    public $upVotedPublicPredictorsCount;

    /**
     * @var string
     */
    public $upc12;

    /**
     * @var string
     */
    public $upc14;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userErrorMessage;

    /**
     * @var string
     */
    public $userTaggedByCount;

    /**
     * @var string
     */
    public $userTagsCount;

    /**
     * @var string
     */
    public $userTagsWhereTagVariableCount;

    /**
     * @var string
     */
    public $userTagsWhereTaggedVariableCount;

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
    public $userVariablesCount;

    /**
     * @var string
     */
    public $userVariablesExcludingTestUsersCount;

    /**
     * @var string
     */
    public $usersCount;

    /**
     * @var string
     */
    public $usersWherePrimaryOutcomeVariableCount;

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
    public $variableOutcomeCategoriesCount;

    /**
     * @var string
     */
    public $variablePredictorCategoriesCount;

    /**
     * @var string
     */
    public $variableUserSourcesCount;

    /**
     * @var string
     */
    public $variablesCount;

    /**
     * @var string
     */
    public $variablesWhereBestCauseVariableCount;

    /**
     * @var string
     */
    public $variablesWhereBestEffectVariableCount;

    /**
     * @var float
     */
    public $variance;

    /**
     * @var string
     */
    public $votesCount;

    /**
     * @var string
     */
    public $votesWhereCauseCount;

    /**
     * @var string
     */
    public $votesWhereCauseVariableCount;

    /**
     * @var string
     */
    public $votesWhereEffectCount;

    /**
     * @var string
     */
    public $votesWhereEffectVariableCount;

    /**
     * @var string
     */
    public $wikipediaTitle;

    /**
     * @var string
     */
    public $wikipediaUrl;

    /**
     * @var int
     */
    public $wpPostId;


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
     * @return Variable
     */
    public function setTitle(?string $title): Variable
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
     * @return Variable
     */
    public function setId(?int $id): Variable
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
     * @return Variable
     */
    public function setName(?string $name): Variable
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
     * @return Variable
     */
    public function setAbbreviatedUnitName(?string $abbreviatedUnitName): Variable
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
     * @return Variable
     */
    public function setActionsCount(?string $actionsCount): Variable
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
     * @return Variable
     */
    public function setAdditionalMetaData(?string $additionalMetaData): Variable
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
     * @return Variable
     */
    public function setAggregateCorrelationsCount(?string $aggregateCorrelationsCount): Variable
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
     * @return Variable
     */
    public function setAggregateCorrelationsWhereCauseVariableCount(?string $aggregateCorrelationsWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setAggregateCorrelationsWhereEffectVariableCount(?string $aggregateCorrelationsWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): Variable
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
     * @return Variable
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): Variable
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
     * @return Variable
     */
    public function setAnalysisSettingsModifiedAt(?string $analysisSettingsModifiedAt): Variable
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
     * @return Variable
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): Variable
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
     * @return Variable
     */
    public function setApplicationsWhereOutcomeVariableCount(?string $applicationsWhereOutcomeVariableCount): Variable
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
     * @return Variable
     */
    public function setApplicationsWherePredictorVariableCount(?string $applicationsWherePredictorVariableCount): Variable
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
     * @return Variable
     */
    public function setAverageSecondsBetweenMeasurements(?int $averageSecondsBetweenMeasurements): Variable
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
     * @return Variable
     */
    public function setBestAggregateCorrelationId(?int $bestAggregateCorrelationId): Variable
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
     * @return Variable
     */
    public function setBestCauseVariableId(?int $bestCauseVariableId): Variable
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
     * @return Variable
     */
    public function setBestEffectVariableId(?int $bestEffectVariableId): Variable
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
     * @return Variable
     */
    public function setBoring(?string $boring): Variable
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
     * @return Variable
     */
    public function setBrandName(?string $brandName): Variable
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
     * @return Variable
     */
    public function setCanonicalVariableId(?string $canonicalVariableId): Variable
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
     * @return Variable
     */
    public function setCauseOnly(?bool $causeOnly): Variable
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
     * @return Variable
     */
    public function setCharts(?Charts $charts): Variable
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
     * @return Variable
     */
    public function setClientId(?string $clientId): Variable
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
     * @return Variable
     */
    public function setCombinationOperation(?string $combinationOperation): Variable
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
     * @return Variable
     */
    public function setCommonAlias(?string $commonAlias): Variable
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
     * @return Variable
     */
    public function setCommonMaximumAllowedDailyValue(?string $commonMaximumAllowedDailyValue): Variable
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
     * @return Variable
     */
    public function setCommonMinimumAllowedDailyValue(?string $commonMinimumAllowedDailyValue): Variable
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
     * @return Variable
     */
    public function setCommonMinimumAllowedNonZeroValue(?string $commonMinimumAllowedNonZeroValue): Variable
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
     * @return Variable
     */
    public function setCommonTaggedByCount(?string $commonTaggedByCount): Variable
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
     * @return Variable
     */
    public function setCommonTagsCount(?string $commonTagsCount): Variable
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
     * @return Variable
     */
    public function setCommonTagsWhereTagVariableCount(?string $commonTagsWhereTagVariableCount): Variable
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
     * @return Variable
     */
    public function setCommonTagsWhereTaggedVariableCount(?string $commonTagsWhereTaggedVariableCount): Variable
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
     * @return Variable
     */
    public function setConditionCausesWhereCauseCount(?string $conditionCausesWhereCauseCount): Variable
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
     * @return Variable
     */
    public function setConditionCausesWhereConditionCount(?string $conditionCausesWhereConditionCount): Variable
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
     * @return Variable
     */
    public function setConditionTreatmentsCount(?string $conditionTreatmentsCount): Variable
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
     * @return Variable
     */
    public function setConditionTreatmentsWhereConditionCount(?string $conditionTreatmentsWhereConditionCount): Variable
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
     * @return Variable
     */
    public function setConditionTreatmentsWhereTreatmentCount(?string $conditionTreatmentsWhereTreatmentCount): Variable
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
     * @return Variable
     */
    public function setControllable(?string $controllable): Variable
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
     * @return Variable
     */
    public function setCorrelationCausalityVotesWhereCauseVariableCount(?string $correlationCausalityVotesWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setCorrelationCausalityVotesWhereEffectVariableCount(?string $correlationCausalityVotesWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setCorrelationUsefulnessVotesWhereCauseVariableCount(?string $correlationUsefulnessVotesWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setCorrelationUsefulnessVotesWhereEffectVariableCount(?string $correlationUsefulnessVotesWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setCorrelationsCount(?string $correlationsCount): Variable
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
     * @return Variable
     */
    public function setCorrelationsWhereCauseVariableCount(?string $correlationsWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setCorrelationsWhereEffectVariableCount(?string $correlationsWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setCreatedAt(?string $createdAt): Variable
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
     * @return Variable
     */
    public function setCreatorUserId(?int $creatorUserId): Variable
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
     * @return Variable
     */
    public function setCtTreatmentSideEffectsWhereSideEffectVariableCount(?string $ctTreatmentSideEffectsWhereSideEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setCtTreatmentSideEffectsWhereTreatmentVariableCount(?string $ctTreatmentSideEffectsWhereTreatmentVariableCount): Variable
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
     * @return Variable
     */
    public function setDataSourcesCount(?DataSourcesCount $dataSourcesCount): Variable
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
     * @return Variable
     */
    public function setDefaultUnitId(?int $defaultUnitId): Variable
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
     * @return Variable
     */
    public function setDefaultValue(?string $defaultValue): Variable
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
     * @return Variable
     */
    public function setDeletionReason(?string $deletionReason): Variable
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
     * @return Variable
     */
    public function setDescription(?string $description): Variable
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
     * @return Variable
     */
    public function setDisplayName(?string $displayName): Variable
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
     * @return Variable
     */
    public function setDurationOfAction(?int $durationOfAction): Variable
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
     * @return Variable
     */
    public function setEarliestNonTaggedMeasurementStartAt(?string $earliestNonTaggedMeasurementStartAt): Variable
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
     * @return Variable
     */
    public function setEarliestTaggedMeasurementStartAt(?string $earliestTaggedMeasurementStartAt): Variable
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
     * @return Variable
     */
    public function setFavoritersCount(?string $favoritersCount): Variable
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
     * @return Variable
     */
    public function setFavoritesCount(?string $favoritesCount): Variable
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
     * @return Variable
     */
    public function setFillingType(?string $fillingType): Variable
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
     * @return Variable
     */
    public function setFillingValue(?string $fillingValue): Variable
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
     * @return Variable
     */
    public function setImageUrl(?string $imageUrl): Variable
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
     * @return Variable
     */
    public function setIndividualCauseStudiesCount(?string $individualCauseStudiesCount): Variable
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
     * @return Variable
     */
    public function setIndividualEffectStudiesCount(?string $individualEffectStudiesCount): Variable
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
     * @return Variable
     */
    public function setInformationalUrl(?string $informationalUrl): Variable
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
     * @return Variable
     */
    public function setIonIcon(?string $ionIcon): Variable
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
     * @return Variable
     */
    public function setIsGoal(?string $isGoal): Variable
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
     * @return Variable
     */
    public function setIsPublic(?int $isPublic): Variable
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
     * @return Variable
     */
    public function setKurtosis(?float $kurtosis): Variable
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
     * @return Variable
     */
    public function setLatestNonTaggedMeasurementStartAt(?string $latestNonTaggedMeasurementStartAt): Variable
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
     * @return Variable
     */
    public function setLatestTaggedMeasurementStartAt(?string $latestTaggedMeasurementStartAt): Variable
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
     * @return Variable
     */
    public function setManualTracking(?bool $manualTracking): Variable
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
     * @return Variable
     */
    public function setMaximumAllowedDailyValue(?string $maximumAllowedDailyValue): Variable
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
     * @return Variable
     */
    public function setMaximumAllowedValue(?string $maximumAllowedValue): Variable
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
     * @return Variable
     */
    public function setMaximumRecordedValue(?int $maximumRecordedValue): Variable
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
     * @return Variable
     */
    public function setMean(?float $mean): Variable
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
     * @return Variable
     */
    public function setMeasurementsCount(?string $measurementsCount): Variable
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
     * @return Variable
     */
    public function setMediaCount(?string $mediaCount): Variable
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
     * @return Variable
     */
    public function setMedian(?float $median): Variable
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
     * @return Variable
     */
    public function setMedianSecondsBetweenMeasurements(?int $medianSecondsBetweenMeasurements): Variable
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
     * @return Variable
     */
    public function setMetaData(?string $metaData): Variable
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
     * @return Variable
     */
    public function setMinimumAllowedSecondsBetweenMeasurements(?int $minimumAllowedSecondsBetweenMeasurements): Variable
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
     * @return Variable
     */
    public function setMinimumAllowedValue(?int $minimumAllowedValue): Variable
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
     * @return Variable
     */
    public function setMinimumRecordedValue(?int $minimumRecordedValue): Variable
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
     * @return Variable
     */
    public function setMostCommonConnectorId(?int $mostCommonConnectorId): Variable
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
     * @return Variable
     */
    public function setMostCommonOriginalUnitId(?int $mostCommonOriginalUnitId): Variable
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
     * @return Variable
     */
    public function setMostCommonSourceName(?string $mostCommonSourceName): Variable
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
     * @return Variable
     */
    public function setMostCommonValue(?int $mostCommonValue): Variable
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
     * @return Variable
     */
    public function setNewestDataAt(?string $newestDataAt): Variable
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
     * @return Variable
     */
    public function setNumberCommonTaggedBy(?int $numberCommonTaggedBy): Variable
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
     * @return Variable
     */
    public function setNumberOfAggregateCorrelationsAsCause(?int $numberOfAggregateCorrelationsAsCause): Variable
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
     * @return Variable
     */
    public function setNumberOfAggregateCorrelationsAsEffect(?int $numberOfAggregateCorrelationsAsEffect): Variable
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
     * @return Variable
     */
    public function setNumberOfApplicationsWhereOutcomeVariable(?int $numberOfApplicationsWhereOutcomeVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfApplicationsWherePredictorVariable(?int $numberOfApplicationsWherePredictorVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonChildren(?string $numberOfCommonChildren): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonFoods(?string $numberOfCommonFoods): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonIngredients(?string $numberOfCommonIngredients): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonJoinedVariables(?string $numberOfCommonJoinedVariables): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonParents(?string $numberOfCommonParents): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonTags(?int $numberOfCommonTags): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonTagsWhereTagVariable(?int $numberOfCommonTagsWhereTagVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfCommonTagsWhereTaggedVariable(?int $numberOfCommonTagsWhereTaggedVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfMeasurements(?int $numberOfMeasurements): Variable
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
     * @return Variable
     */
    public function setNumberOfOutcomeCaseStudies(?string $numberOfOutcomeCaseStudies): Variable
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
     * @return Variable
     */
    public function setNumberOfOutcomePopulationStudies(?string $numberOfOutcomePopulationStudies): Variable
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
     * @return Variable
     */
    public function setNumberOfPredictorCaseStudies(?string $numberOfPredictorCaseStudies): Variable
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
     * @return Variable
     */
    public function setNumberOfPredictorPopulationStudies(?string $numberOfPredictorPopulationStudies): Variable
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
     * @return Variable
     */
    public function setNumberOfRawMeasurements(?string $numberOfRawMeasurements): Variable
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
     * @return Variable
     */
    public function setNumberOfRawMeasurementsWithTagsJoinsChildren(?int $numberOfRawMeasurementsWithTagsJoinsChildren): Variable
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
     * @return Variable
     */
    public function setNumberOfSoftDeletedMeasurements(?string $numberOfSoftDeletedMeasurements): Variable
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
     * @return Variable
     */
    public function setNumberOfStudiesWhereCauseVariable(?int $numberOfStudiesWhereCauseVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfStudiesWhereEffectVariable(?int $numberOfStudiesWhereEffectVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfTrackingReminderNotifications(?int $numberOfTrackingReminderNotifications): Variable
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
     * @return Variable
     */
    public function setNumberOfTrackingReminders(?int $numberOfTrackingReminders): Variable
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
     * @return Variable
     */
    public function setNumberOfUniqueValues(?int $numberOfUniqueValues): Variable
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
     * @return Variable
     */
    public function setNumberOfUserChildren(?string $numberOfUserChildren): Variable
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
     * @return Variable
     */
    public function setNumberOfUserFoods(?string $numberOfUserFoods): Variable
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
     * @return Variable
     */
    public function setNumberOfUserIngredients(?string $numberOfUserIngredients): Variable
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
     * @return Variable
     */
    public function setNumberOfUserJoinedVariables(?string $numberOfUserJoinedVariables): Variable
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
     * @return Variable
     */
    public function setNumberOfUserParents(?string $numberOfUserParents): Variable
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
     * @return Variable
     */
    public function setNumberOfUserTagsWhereTagVariable(?int $numberOfUserTagsWhereTagVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfUserTagsWhereTaggedVariable(?int $numberOfUserTagsWhereTaggedVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfUserVariables(?int $numberOfUserVariables): Variable
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
     * @return Variable
     */
    public function setNumberOfUsersWherePrimaryOutcomeVariable(?int $numberOfUsersWherePrimaryOutcomeVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfVariablesWhereBestCauseVariable(?int $numberOfVariablesWhereBestCauseVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfVariablesWhereBestEffectVariable(?int $numberOfVariablesWhereBestEffectVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfVotesWhereCauseVariable(?int $numberOfVotesWhereCauseVariable): Variable
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
     * @return Variable
     */
    public function setNumberOfVotesWhereEffectVariable(?int $numberOfVotesWhereEffectVariable): Variable
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
     * @return Variable
     */
    public function setOnsetDelay(?int $onsetDelay): Variable
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
     * @return Variable
     */
    public function setOptimalValueMessage(?string $optimalValueMessage): Variable
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
     * @return Variable
     */
    public function setOutcome(?bool $outcome): Variable
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
     * @return Variable
     */
    public function setOutcomesCount(?string $outcomesCount): Variable
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
     * @return Variable
     */
    public function setParentId(?string $parentId): Variable
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
     * @return Variable
     */
    public function setPopulationCauseStudiesCount(?string $populationCauseStudiesCount): Variable
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
     * @return Variable
     */
    public function setPopulationEffectStudiesCount(?string $populationEffectStudiesCount): Variable
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
     * @return Variable
     */
    public function setPredictor(?string $predictor): Variable
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
     * @return Variable
     */
    public function setPredictorsCount(?string $predictorsCount): Variable
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
     * @return Variable
     */
    public function setPrice(?float $price): Variable
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
     * @return Variable
     */
    public function setProductUrl(?string $productUrl): Variable
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
     * @return Variable
     */
    public function setPublicOutcomesCount(?string $publicOutcomesCount): Variable
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
     * @return Variable
     */
    public function setPublicPredictorsCount(?string $publicPredictorsCount): Variable
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
     * @return Variable
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): Variable
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
     * @return Variable
     */
    public function setRecordSizeInKb(?int $recordSizeInKb): Variable
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
     * @return Variable
     */
    public function setReportTitle(?string $reportTitle): Variable
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
     * @return Variable
     */
    public function setSecondMostCommonValue(?int $secondMostCommonValue): Variable
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
     * @return Variable
     */
    public function setSideEffectVariablesCount(?string $sideEffectVariablesCount): Variable
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
     * @return Variable
     */
    public function setSideEffectsCount(?string $sideEffectsCount): Variable
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
     * @return Variable
     */
    public function setSkewness(?float $skewness): Variable
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
     * @return Variable
     */
    public function setSlug(?string $slug): Variable
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
     * @return Variable
     */
    public function setSortOrder(?int $sortOrder): Variable
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
     * @return Variable
     */
    public function setSourceUrl(?string $sourceUrl): Variable
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
     * @return Variable
     */
    public function setStandardDeviation(?float $standardDeviation): Variable
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
     * @return Variable
     */
    public function setStudiesCount(?string $studiesCount): Variable
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
     * @return Variable
     */
    public function setStudiesWhereCauseVariableCount(?string $studiesWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setStudiesWhereEffectVariableCount(?string $studiesWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setSubtitle(?string $subtitle): Variable
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
     * @return Variable
     */
    public function setSynonyms(?array $synonyms): Variable
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
     * @return Variable
     */
    public function setTagsCount(?string $tagsCount): Variable
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
     * @return Variable
     */
    public function setThirdMostCommonValue(?int $thirdMostCommonValue): Variable
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
     * @return Variable
     */
    public function setThirdPartyCorrelationsCount(?string $thirdPartyCorrelationsCount): Variable
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
     * @return Variable
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): Variable
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
     * @return Variable
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): Variable
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
     * @return Variable
     */
    public function setTreatmentSideEffectsWhereTreatmentCount(?string $treatmentSideEffectsWhereTreatmentCount): Variable
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
     * @return Variable
     */
    public function setUnitId(?int $unitId): Variable
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
     * @return Variable
     */
    public function setUpVotedPublicOutcomesCount(?string $upVotedPublicOutcomesCount): Variable
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
     * @return Variable
     */
    public function setUpVotedPublicPredictorsCount(?string $upVotedPublicPredictorsCount): Variable
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
     * @return Variable
     */
    public function setUpc12(?string $upc12): Variable
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
     * @return Variable
     */
    public function setUpc14(?string $upc14): Variable
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
     * @return Variable
     */
    public function setUpdatedAt(?string $updatedAt): Variable
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
     * @return Variable
     */
    public function setUserErrorMessage(?string $userErrorMessage): Variable
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
     * @return Variable
     */
    public function setUserTaggedByCount(?string $userTaggedByCount): Variable
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
     * @return Variable
     */
    public function setUserTagsCount(?string $userTagsCount): Variable
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
     * @return Variable
     */
    public function setUserTagsWhereTagVariableCount(?string $userTagsWhereTagVariableCount): Variable
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
     * @return Variable
     */
    public function setUserTagsWhereTaggedVariableCount(?string $userTagsWhereTaggedVariableCount): Variable
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
     * @return Variable
     */
    public function setUserVariableClientsCount(?string $userVariableClientsCount): Variable
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
     * @return Variable
     */
    public function setUserVariableOutcomeCategoriesCount(?string $userVariableOutcomeCategoriesCount): Variable
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
     * @return Variable
     */
    public function setUserVariablePredictorCategoriesCount(?string $userVariablePredictorCategoriesCount): Variable
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
     * @return Variable
     */
    public function setUserVariablesCount(?string $userVariablesCount): Variable
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
     * @return Variable
     */
    public function setUserVariablesExcludingTestUsersCount(?string $userVariablesExcludingTestUsersCount): Variable
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
     * @return Variable
     */
    public function setUsersCount(?string $usersCount): Variable
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
     * @return Variable
     */
    public function setUsersWherePrimaryOutcomeVariableCount(?string $usersWherePrimaryOutcomeVariableCount): Variable
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
     * @return Variable
     */
    public function setValence(?string $valence): Variable
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
     * @return Variable
     */
    public function setVariableCategoryId(?int $variableCategoryId): Variable
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
     * @return Variable
     */
    public function setVariableId(?int $variableId): Variable
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
     * @return Variable
     */
    public function setVariableOutcomeCategoriesCount(?string $variableOutcomeCategoriesCount): Variable
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
     * @return Variable
     */
    public function setVariablePredictorCategoriesCount(?string $variablePredictorCategoriesCount): Variable
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
     * @return Variable
     */
    public function setVariableUserSourcesCount(?string $variableUserSourcesCount): Variable
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
     * @return Variable
     */
    public function setVariablesCount(?string $variablesCount): Variable
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
     * @return Variable
     */
    public function setVariablesWhereBestCauseVariableCount(?string $variablesWhereBestCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setVariablesWhereBestEffectVariableCount(?string $variablesWhereBestEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setVariance(?float $variance): Variable
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
     * @return Variable
     */
    public function setVotesCount(?string $votesCount): Variable
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
     * @return Variable
     */
    public function setVotesWhereCauseCount(?string $votesWhereCauseCount): Variable
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
     * @return Variable
     */
    public function setVotesWhereCauseVariableCount(?string $votesWhereCauseVariableCount): Variable
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
     * @return Variable
     */
    public function setVotesWhereEffectCount(?string $votesWhereEffectCount): Variable
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
     * @return Variable
     */
    public function setVotesWhereEffectVariableCount(?string $votesWhereEffectVariableCount): Variable
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
     * @return Variable
     */
    public function setWikipediaTitle(?string $wikipediaTitle): Variable
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
     * @return Variable
     */
    public function setWikipediaUrl(?string $wikipediaUrl): Variable
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
     * @return Variable
     */
    public function setWpPostId(?int $wpPostId): Variable
    {
        $this->wpPostId = $wpPostId;

        return $this;
    }
}

