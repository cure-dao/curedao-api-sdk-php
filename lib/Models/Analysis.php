<?php

namespace CureDAO\Client\Models;

use CureDAO\Client\BaseModel;

class Analysis extends BaseModel
{
    public function __construct($data = [])
    {
        parent::__construct($data);
    }

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
    public $actionsCount;

    /**
     * @var int
     */
    public $aggregateCorrelationId;

    /**
     * @var string
     */
    public $aggregatedAt;

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
    public $analysisStartedAt;

    /**
     * @var int
     */
    public $averageDailyHighCause;

    /**
     * @var float
     */
    public $averageDailyLowCause;

    /**
     * @var float
     */
    public $averageEffect;

    /**
     * @var float
     */
    public $averageEffectFollowingHighCause;

    /**
     * @var float
     */
    public $averageEffectFollowingLowCause;

    /**
     * @var float
     */
    public $averageForwardPearsonCorrelationOverOnsetDelays;

    /**
     * @var float
     */
    public $averageReversePearsonCorrelationOverOnsetDelays;

    /**
     * @var string
     */
    public $boring;

    /**
     * @var string
     */
    public $causalityVote;

    /**
     * @var float
     */
    public $causeBaselineAveragePerDay;

    /**
     * @var int
     */
    public $causeBaselineAveragePerDurationOfAction;

    /**
     * @var int
     */
    public $causeChanges;

    /**
     * @var string
     */
    public $causeFillingValue;

    /**
     * @var int
     */
    public $causeNumberOfProcessedDailyMeasurements;

    /**
     * @var int
     */
    public $causeNumberOfRawMeasurements;

    /**
     * @var float
     */
    public $causeTreatmentAveragePerDay;

    /**
     * @var int
     */
    public $causeTreatmentAveragePerDurationOfAction;

    /**
     * @var int
     */
    public $causeUnitId;

    /**
     * @var int
     */
    public $causeUserVariableId;

    /**
     * @var int
     */
    public $causeVariableCategoryId;

    /**
     * @var int
     */
    public $causeVariableId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var float
     */
    public $confidenceInterval;

    /**
     * @var string
     */
    public $confidenceLevel;

    /**
     * @var string
     */
    public $correlation;

    /**
     * @var string
     */
    public $correlationCausalityVotesCount;

    /**
     * @var string
     */
    public $correlationUsefulnessVotesCount;

    /**
     * @var array
     */
    public $correlationsOverDelays;

    /**
     * @var array
     */
    public $correlationsOverDurations;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var float
     */
    public $criticalTValue;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $deletionReason;

    /**
     * @var int
     */
    public $durationOfAction;

    /**
     * @var string
     */
    public $earliestMeasurementStartAt;

    /**
     * @var int
     */
    public $effectBaselineAverage;

    /**
     * @var float
     */
    public $effectBaselineRelativeStandardDeviation;

    /**
     * @var float
     */
    public $effectBaselineStandardDeviation;

    /**
     * @var int
     */
    public $effectChanges;

    /**
     * @var string
     */
    public $effectFillingValue;

    /**
     * @var float
     */
    public $effectFollowUpAverage;

    /**
     * @var int
     */
    public $effectFollowUpPercentChangeFromBaseline;

    /**
     * @var int
     */
    public $effectNumberOfProcessedDailyMeasurements;

    /**
     * @var int
     */
    public $effectNumberOfRawMeasurements;

    /**
     * @var int
     */
    public $effectUserVariableId;

    /**
     * @var int
     */
    public $effectVariableCategoryId;

    /**
     * @var int
     */
    public $effectVariableId;

    /**
     * @var string
     */
    public $experimentEndAt;

    /**
     * @var string
     */
    public $experimentStartAt;

    /**
     * @var string
     */
    public $favoritersCount;

    /**
     * @var float
     */
    public $forwardPearsonCorrelationCoefficient;

    /**
     * @var float
     */
    public $forwardSpearmanCorrelationCoefficient;

    /**
     * @var int
     */
    public $groupedCauseValueClosestToValuePredictingHighOutcome;

    /**
     * @var int
     */
    public $groupedCauseValueClosestToValuePredictingLowOutcome;

    /**
     * @var bool
     */
    public $interestingVariableCategoryPair;

    /**
     * @var string
     */
    public $isPublic;

    /**
     * @var string
     */
    public $latestMeasurementStartAt;

    /**
     * @var string
     */
    public $likersCount;

    /**
     * @var string
     */
    public $mediaCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newestDataAt;

    /**
     * @var int
     */
    public $numberOfDays;

    /**
     * @var string
     */
    public $numberOfDownVotes;

    /**
     * @var int
     */
    public $numberOfPairs;

    /**
     * @var string
     */
    public $numberOfUpVotes;

    /**
     * @var string
     */
    public $obvious;

    /**
     * @var int
     */
    public $onsetDelay;

    /**
     * @var int
     */
    public $onsetDelayWithStrongestPearsonCorrelation;

    /**
     * @var float
     */
    public $optimalPearsonProduct;

    /**
     * @var string
     */
    public $outcomeIsGoal;

    /**
     * @var float
     */
    public $pValue;

    /**
     * @var float
     */
    public $pearsonCorrelationWithNoOnsetDelay;

    /**
     * @var string
     */
    public $plausiblyCausal;

    /**
     * @var float
     */
    public $predictivePearsonCorrelationCoefficient;

    /**
     * @var string
     */
    public $predictorIsControllable;

    /**
     * @var int
     */
    public $predictsHighEffectChange;

    /**
     * @var int
     */
    public $predictsLowEffectChange;

    /**
     * @var string
     */
    public $publishedAt;

    /**
     * @var float
     */
    public $qmScore;

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
    public $relationship;

    /**
     * @var string
     */
    public $reportTitle;

    /**
     * @var string
     */
    public $reversePearsonCorrelationCoefficient;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var float
     */
    public $statisticalSignificance;

    /**
     * @var string
     */
    public $strengthLevel;

    /**
     * @var float
     */
    public $strongestPearsonCorrelationCoefficient;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var float
     */
    public $tValue;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $usefulnessVote;

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
    public $userVariablesWhereBestUserCorrelationCount;

    /**
     * @var float
     */
    public $valuePredictingHighOutcome;

    /**
     * @var int
     */
    public $valuePredictingLowOutcome;

    /**
     * @var string
     */
    public $vote;

    /**
     * @var string
     */
    public $votesCount;

    /**
     * @var string
     */
    public $wpPostId;

    /**
     * @var float
     */
    public $zScore;


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
     * @return Analysis
     */
    public function setTitle(?string $title): Analysis
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
     * @return Analysis
     */
    public function setId(?int $id): Analysis
    {
        $this->id = $id;

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
     * @return Analysis
     */
    public function setActionsCount(?string $actionsCount): Analysis
    {
        $this->actionsCount = $actionsCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAggregateCorrelationId(): ?int
    {
        return $this->aggregateCorrelationId;
    }

    /**
     * @param int|null $aggregateCorrelationId
     *
     * @return Analysis
     */
    public function setAggregateCorrelationId(?int $aggregateCorrelationId): Analysis
    {
        $this->aggregateCorrelationId = $aggregateCorrelationId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAggregatedAt(): ?string
    {
        return $this->aggregatedAt;
    }

    /**
     * @param string|null $aggregatedAt
     *
     * @return Analysis
     */
    public function setAggregatedAt(?string $aggregatedAt): Analysis
    {
        $this->aggregatedAt = $aggregatedAt;

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
     * @return Analysis
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): Analysis
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
     * @return Analysis
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): Analysis
    {
        $this->analysisRequestedAt = $analysisRequestedAt;

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
     * @return Analysis
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): Analysis
    {
        $this->analysisStartedAt = $analysisStartedAt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAverageDailyHighCause(): ?int
    {
        return $this->averageDailyHighCause;
    }

    /**
     * @param int|null $averageDailyHighCause
     *
     * @return Analysis
     */
    public function setAverageDailyHighCause(?int $averageDailyHighCause): Analysis
    {
        $this->averageDailyHighCause = $averageDailyHighCause;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageDailyLowCause(): ?float
    {
        return $this->averageDailyLowCause;
    }

    /**
     * @param float|null $averageDailyLowCause
     *
     * @return Analysis
     */
    public function setAverageDailyLowCause(?float $averageDailyLowCause): Analysis
    {
        $this->averageDailyLowCause = $averageDailyLowCause;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageEffect(): ?float
    {
        return $this->averageEffect;
    }

    /**
     * @param float|null $averageEffect
     *
     * @return Analysis
     */
    public function setAverageEffect(?float $averageEffect): Analysis
    {
        $this->averageEffect = $averageEffect;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageEffectFollowingHighCause(): ?float
    {
        return $this->averageEffectFollowingHighCause;
    }

    /**
     * @param float|null $averageEffectFollowingHighCause
     *
     * @return Analysis
     */
    public function setAverageEffectFollowingHighCause(?float $averageEffectFollowingHighCause): Analysis
    {
        $this->averageEffectFollowingHighCause = $averageEffectFollowingHighCause;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageEffectFollowingLowCause(): ?float
    {
        return $this->averageEffectFollowingLowCause;
    }

    /**
     * @param float|null $averageEffectFollowingLowCause
     *
     * @return Analysis
     */
    public function setAverageEffectFollowingLowCause(?float $averageEffectFollowingLowCause): Analysis
    {
        $this->averageEffectFollowingLowCause = $averageEffectFollowingLowCause;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageForwardPearsonCorrelationOverOnsetDelays(): ?float
    {
        return $this->averageForwardPearsonCorrelationOverOnsetDelays;
    }

    /**
     * @param float|null $averageForwardPearsonCorrelationOverOnsetDelays
     *
     * @return Analysis
     */
    public function setAverageForwardPearsonCorrelationOverOnsetDelays(?float $averageForwardPearsonCorrelationOverOnsetDelays): Analysis
    {
        $this->averageForwardPearsonCorrelationOverOnsetDelays = $averageForwardPearsonCorrelationOverOnsetDelays;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAverageReversePearsonCorrelationOverOnsetDelays(): ?float
    {
        return $this->averageReversePearsonCorrelationOverOnsetDelays;
    }

    /**
     * @param float|null $averageReversePearsonCorrelationOverOnsetDelays
     *
     * @return Analysis
     */
    public function setAverageReversePearsonCorrelationOverOnsetDelays(?float $averageReversePearsonCorrelationOverOnsetDelays): Analysis
    {
        $this->averageReversePearsonCorrelationOverOnsetDelays = $averageReversePearsonCorrelationOverOnsetDelays;

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
     * @return Analysis
     */
    public function setBoring(?string $boring): Analysis
    {
        $this->boring = $boring;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCausalityVote(): ?string
    {
        return $this->causalityVote;
    }

    /**
     * @param string|null $causalityVote
     *
     * @return Analysis
     */
    public function setCausalityVote(?string $causalityVote): Analysis
    {
        $this->causalityVote = $causalityVote;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCauseBaselineAveragePerDay(): ?float
    {
        return $this->causeBaselineAveragePerDay;
    }

    /**
     * @param float|null $causeBaselineAveragePerDay
     *
     * @return Analysis
     */
    public function setCauseBaselineAveragePerDay(?float $causeBaselineAveragePerDay): Analysis
    {
        $this->causeBaselineAveragePerDay = $causeBaselineAveragePerDay;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseBaselineAveragePerDurationOfAction(): ?int
    {
        return $this->causeBaselineAveragePerDurationOfAction;
    }

    /**
     * @param int|null $causeBaselineAveragePerDurationOfAction
     *
     * @return Analysis
     */
    public function setCauseBaselineAveragePerDurationOfAction(?int $causeBaselineAveragePerDurationOfAction): Analysis
    {
        $this->causeBaselineAveragePerDurationOfAction = $causeBaselineAveragePerDurationOfAction;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseChanges(): ?int
    {
        return $this->causeChanges;
    }

    /**
     * @param int|null $causeChanges
     *
     * @return Analysis
     */
    public function setCauseChanges(?int $causeChanges): Analysis
    {
        $this->causeChanges = $causeChanges;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCauseFillingValue(): ?string
    {
        return $this->causeFillingValue;
    }

    /**
     * @param string|null $causeFillingValue
     *
     * @return Analysis
     */
    public function setCauseFillingValue(?string $causeFillingValue): Analysis
    {
        $this->causeFillingValue = $causeFillingValue;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseNumberOfProcessedDailyMeasurements(): ?int
    {
        return $this->causeNumberOfProcessedDailyMeasurements;
    }

    /**
     * @param int|null $causeNumberOfProcessedDailyMeasurements
     *
     * @return Analysis
     */
    public function setCauseNumberOfProcessedDailyMeasurements(?int $causeNumberOfProcessedDailyMeasurements): Analysis
    {
        $this->causeNumberOfProcessedDailyMeasurements = $causeNumberOfProcessedDailyMeasurements;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseNumberOfRawMeasurements(): ?int
    {
        return $this->causeNumberOfRawMeasurements;
    }

    /**
     * @param int|null $causeNumberOfRawMeasurements
     *
     * @return Analysis
     */
    public function setCauseNumberOfRawMeasurements(?int $causeNumberOfRawMeasurements): Analysis
    {
        $this->causeNumberOfRawMeasurements = $causeNumberOfRawMeasurements;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCauseTreatmentAveragePerDay(): ?float
    {
        return $this->causeTreatmentAveragePerDay;
    }

    /**
     * @param float|null $causeTreatmentAveragePerDay
     *
     * @return Analysis
     */
    public function setCauseTreatmentAveragePerDay(?float $causeTreatmentAveragePerDay): Analysis
    {
        $this->causeTreatmentAveragePerDay = $causeTreatmentAveragePerDay;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseTreatmentAveragePerDurationOfAction(): ?int
    {
        return $this->causeTreatmentAveragePerDurationOfAction;
    }

    /**
     * @param int|null $causeTreatmentAveragePerDurationOfAction
     *
     * @return Analysis
     */
    public function setCauseTreatmentAveragePerDurationOfAction(?int $causeTreatmentAveragePerDurationOfAction): Analysis
    {
        $this->causeTreatmentAveragePerDurationOfAction = $causeTreatmentAveragePerDurationOfAction;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseUnitId(): ?int
    {
        return $this->causeUnitId;
    }

    /**
     * @param int|null $causeUnitId
     *
     * @return Analysis
     */
    public function setCauseUnitId(?int $causeUnitId): Analysis
    {
        $this->causeUnitId = $causeUnitId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseUserVariableId(): ?int
    {
        return $this->causeUserVariableId;
    }

    /**
     * @param int|null $causeUserVariableId
     *
     * @return Analysis
     */
    public function setCauseUserVariableId(?int $causeUserVariableId): Analysis
    {
        $this->causeUserVariableId = $causeUserVariableId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseVariableCategoryId(): ?int
    {
        return $this->causeVariableCategoryId;
    }

    /**
     * @param int|null $causeVariableCategoryId
     *
     * @return Analysis
     */
    public function setCauseVariableCategoryId(?int $causeVariableCategoryId): Analysis
    {
        $this->causeVariableCategoryId = $causeVariableCategoryId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCauseVariableId(): ?int
    {
        return $this->causeVariableId;
    }

    /**
     * @param int|null $causeVariableId
     *
     * @return Analysis
     */
    public function setCauseVariableId(?int $causeVariableId): Analysis
    {
        $this->causeVariableId = $causeVariableId;

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
     * @return Analysis
     */
    public function setClientId(?string $clientId): Analysis
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getConfidenceInterval(): ?float
    {
        return $this->confidenceInterval;
    }

    /**
     * @param float|null $confidenceInterval
     *
     * @return Analysis
     */
    public function setConfidenceInterval(?float $confidenceInterval): Analysis
    {
        $this->confidenceInterval = $confidenceInterval;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfidenceLevel(): ?string
    {
        return $this->confidenceLevel;
    }

    /**
     * @param string|null $confidenceLevel
     *
     * @return Analysis
     */
    public function setConfidenceLevel(?string $confidenceLevel): Analysis
    {
        $this->confidenceLevel = $confidenceLevel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelation(): ?string
    {
        return $this->correlation;
    }

    /**
     * @param string|null $correlation
     *
     * @return Analysis
     */
    public function setCorrelation(?string $correlation): Analysis
    {
        $this->correlation = $correlation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationCausalityVotesCount(): ?string
    {
        return $this->correlationCausalityVotesCount;
    }

    /**
     * @param string|null $correlationCausalityVotesCount
     *
     * @return Analysis
     */
    public function setCorrelationCausalityVotesCount(?string $correlationCausalityVotesCount): Analysis
    {
        $this->correlationCausalityVotesCount = $correlationCausalityVotesCount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCorrelationUsefulnessVotesCount(): ?string
    {
        return $this->correlationUsefulnessVotesCount;
    }

    /**
     * @param string|null $correlationUsefulnessVotesCount
     *
     * @return Analysis
     */
    public function setCorrelationUsefulnessVotesCount(?string $correlationUsefulnessVotesCount): Analysis
    {
        $this->correlationUsefulnessVotesCount = $correlationUsefulnessVotesCount;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getCorrelationsOverDelays(): ?array
    {
        return $this->correlationsOverDelays;
    }

    /**
     * @param array|null $correlationsOverDelays
     *
     * @return Analysis
     */
    public function setCorrelationsOverDelays(?array $correlationsOverDelays): Analysis
    {
        $this->correlationsOverDelays = $correlationsOverDelays;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getCorrelationsOverDurations(): ?array
    {
        return $this->correlationsOverDurations;
    }

    /**
     * @param array|null $correlationsOverDurations
     *
     * @return Analysis
     */
    public function setCorrelationsOverDurations(?array $correlationsOverDurations): Analysis
    {
        $this->correlationsOverDurations = $correlationsOverDurations;

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
     * @return Analysis
     */
    public function setCreatedAt(?string $createdAt): Analysis
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCriticalTValue(): ?float
    {
        return $this->criticalTValue;
    }

    /**
     * @param float|null $criticalTValue
     *
     * @return Analysis
     */
    public function setCriticalTValue(?float $criticalTValue): Analysis
    {
        $this->criticalTValue = $criticalTValue;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataSource(): ?string
    {
        return $this->dataSource;
    }

    /**
     * @param string|null $dataSource
     *
     * @return Analysis
     */
    public function setDataSource(?string $dataSource): Analysis
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDataSourceName(): ?string
    {
        return $this->dataSourceName;
    }

    /**
     * @param string|null $dataSourceName
     *
     * @return Analysis
     */
    public function setDataSourceName(?string $dataSourceName): Analysis
    {
        $this->dataSourceName = $dataSourceName;

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
     * @return Analysis
     */
    public function setDeletionReason(?string $deletionReason): Analysis
    {
        $this->deletionReason = $deletionReason;

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
     * @return Analysis
     */
    public function setDurationOfAction(?int $durationOfAction): Analysis
    {
        $this->durationOfAction = $durationOfAction;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEarliestMeasurementStartAt(): ?string
    {
        return $this->earliestMeasurementStartAt;
    }

    /**
     * @param string|null $earliestMeasurementStartAt
     *
     * @return Analysis
     */
    public function setEarliestMeasurementStartAt(?string $earliestMeasurementStartAt): Analysis
    {
        $this->earliestMeasurementStartAt = $earliestMeasurementStartAt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectBaselineAverage(): ?int
    {
        return $this->effectBaselineAverage;
    }

    /**
     * @param int|null $effectBaselineAverage
     *
     * @return Analysis
     */
    public function setEffectBaselineAverage(?int $effectBaselineAverage): Analysis
    {
        $this->effectBaselineAverage = $effectBaselineAverage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getEffectBaselineRelativeStandardDeviation(): ?float
    {
        return $this->effectBaselineRelativeStandardDeviation;
    }

    /**
     * @param float|null $effectBaselineRelativeStandardDeviation
     *
     * @return Analysis
     */
    public function setEffectBaselineRelativeStandardDeviation(?float $effectBaselineRelativeStandardDeviation): Analysis
    {
        $this->effectBaselineRelativeStandardDeviation = $effectBaselineRelativeStandardDeviation;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getEffectBaselineStandardDeviation(): ?float
    {
        return $this->effectBaselineStandardDeviation;
    }

    /**
     * @param float|null $effectBaselineStandardDeviation
     *
     * @return Analysis
     */
    public function setEffectBaselineStandardDeviation(?float $effectBaselineStandardDeviation): Analysis
    {
        $this->effectBaselineStandardDeviation = $effectBaselineStandardDeviation;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectChanges(): ?int
    {
        return $this->effectChanges;
    }

    /**
     * @param int|null $effectChanges
     *
     * @return Analysis
     */
    public function setEffectChanges(?int $effectChanges): Analysis
    {
        $this->effectChanges = $effectChanges;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEffectFillingValue(): ?string
    {
        return $this->effectFillingValue;
    }

    /**
     * @param string|null $effectFillingValue
     *
     * @return Analysis
     */
    public function setEffectFillingValue(?string $effectFillingValue): Analysis
    {
        $this->effectFillingValue = $effectFillingValue;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getEffectFollowUpAverage(): ?float
    {
        return $this->effectFollowUpAverage;
    }

    /**
     * @param float|null $effectFollowUpAverage
     *
     * @return Analysis
     */
    public function setEffectFollowUpAverage(?float $effectFollowUpAverage): Analysis
    {
        $this->effectFollowUpAverage = $effectFollowUpAverage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectFollowUpPercentChangeFromBaseline(): ?int
    {
        return $this->effectFollowUpPercentChangeFromBaseline;
    }

    /**
     * @param int|null $effectFollowUpPercentChangeFromBaseline
     *
     * @return Analysis
     */
    public function setEffectFollowUpPercentChangeFromBaseline(?int $effectFollowUpPercentChangeFromBaseline): Analysis
    {
        $this->effectFollowUpPercentChangeFromBaseline = $effectFollowUpPercentChangeFromBaseline;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectNumberOfProcessedDailyMeasurements(): ?int
    {
        return $this->effectNumberOfProcessedDailyMeasurements;
    }

    /**
     * @param int|null $effectNumberOfProcessedDailyMeasurements
     *
     * @return Analysis
     */
    public function setEffectNumberOfProcessedDailyMeasurements(?int $effectNumberOfProcessedDailyMeasurements): Analysis
    {
        $this->effectNumberOfProcessedDailyMeasurements = $effectNumberOfProcessedDailyMeasurements;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectNumberOfRawMeasurements(): ?int
    {
        return $this->effectNumberOfRawMeasurements;
    }

    /**
     * @param int|null $effectNumberOfRawMeasurements
     *
     * @return Analysis
     */
    public function setEffectNumberOfRawMeasurements(?int $effectNumberOfRawMeasurements): Analysis
    {
        $this->effectNumberOfRawMeasurements = $effectNumberOfRawMeasurements;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectUserVariableId(): ?int
    {
        return $this->effectUserVariableId;
    }

    /**
     * @param int|null $effectUserVariableId
     *
     * @return Analysis
     */
    public function setEffectUserVariableId(?int $effectUserVariableId): Analysis
    {
        $this->effectUserVariableId = $effectUserVariableId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectVariableCategoryId(): ?int
    {
        return $this->effectVariableCategoryId;
    }

    /**
     * @param int|null $effectVariableCategoryId
     *
     * @return Analysis
     */
    public function setEffectVariableCategoryId(?int $effectVariableCategoryId): Analysis
    {
        $this->effectVariableCategoryId = $effectVariableCategoryId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getEffectVariableId(): ?int
    {
        return $this->effectVariableId;
    }

    /**
     * @param int|null $effectVariableId
     *
     * @return Analysis
     */
    public function setEffectVariableId(?int $effectVariableId): Analysis
    {
        $this->effectVariableId = $effectVariableId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExperimentEndAt(): ?string
    {
        return $this->experimentEndAt;
    }

    /**
     * @param string|null $experimentEndAt
     *
     * @return Analysis
     */
    public function setExperimentEndAt(?string $experimentEndAt): Analysis
    {
        $this->experimentEndAt = $experimentEndAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExperimentStartAt(): ?string
    {
        return $this->experimentStartAt;
    }

    /**
     * @param string|null $experimentStartAt
     *
     * @return Analysis
     */
    public function setExperimentStartAt(?string $experimentStartAt): Analysis
    {
        $this->experimentStartAt = $experimentStartAt;

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
     * @return Analysis
     */
    public function setFavoritersCount(?string $favoritersCount): Analysis
    {
        $this->favoritersCount = $favoritersCount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getForwardPearsonCorrelationCoefficient(): ?float
    {
        return $this->forwardPearsonCorrelationCoefficient;
    }

    /**
     * @param float|null $forwardPearsonCorrelationCoefficient
     *
     * @return Analysis
     */
    public function setForwardPearsonCorrelationCoefficient(?float $forwardPearsonCorrelationCoefficient): Analysis
    {
        $this->forwardPearsonCorrelationCoefficient = $forwardPearsonCorrelationCoefficient;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getForwardSpearmanCorrelationCoefficient(): ?float
    {
        return $this->forwardSpearmanCorrelationCoefficient;
    }

    /**
     * @param float|null $forwardSpearmanCorrelationCoefficient
     *
     * @return Analysis
     */
    public function setForwardSpearmanCorrelationCoefficient(?float $forwardSpearmanCorrelationCoefficient): Analysis
    {
        $this->forwardSpearmanCorrelationCoefficient = $forwardSpearmanCorrelationCoefficient;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getGroupedCauseValueClosestToValuePredictingHighOutcome(): ?int
    {
        return $this->groupedCauseValueClosestToValuePredictingHighOutcome;
    }

    /**
     * @param int|null $groupedCauseValueClosestToValuePredictingHighOutcome
     *
     * @return Analysis
     */
    public function setGroupedCauseValueClosestToValuePredictingHighOutcome(?int $groupedCauseValueClosestToValuePredictingHighOutcome): Analysis
    {
        $this->groupedCauseValueClosestToValuePredictingHighOutcome = $groupedCauseValueClosestToValuePredictingHighOutcome;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getGroupedCauseValueClosestToValuePredictingLowOutcome(): ?int
    {
        return $this->groupedCauseValueClosestToValuePredictingLowOutcome;
    }

    /**
     * @param int|null $groupedCauseValueClosestToValuePredictingLowOutcome
     *
     * @return Analysis
     */
    public function setGroupedCauseValueClosestToValuePredictingLowOutcome(?int $groupedCauseValueClosestToValuePredictingLowOutcome): Analysis
    {
        $this->groupedCauseValueClosestToValuePredictingLowOutcome = $groupedCauseValueClosestToValuePredictingLowOutcome;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isInterestingVariableCategoryPair(): ?bool
    {
        return $this->interestingVariableCategoryPair;
    }

    /**
     * @param bool|null $interestingVariableCategoryPair
     *
     * @return Analysis
     */
    public function setInterestingVariableCategoryPair(?bool $interestingVariableCategoryPair): Analysis
    {
        $this->interestingVariableCategoryPair = $interestingVariableCategoryPair;

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
     * @return Analysis
     */
    public function setIsPublic(?string $isPublic): Analysis
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestMeasurementStartAt(): ?string
    {
        return $this->latestMeasurementStartAt;
    }

    /**
     * @param string|null $latestMeasurementStartAt
     *
     * @return Analysis
     */
    public function setLatestMeasurementStartAt(?string $latestMeasurementStartAt): Analysis
    {
        $this->latestMeasurementStartAt = $latestMeasurementStartAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLikersCount(): ?string
    {
        return $this->likersCount;
    }

    /**
     * @param string|null $likersCount
     *
     * @return Analysis
     */
    public function setLikersCount(?string $likersCount): Analysis
    {
        $this->likersCount = $likersCount;

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
     * @return Analysis
     */
    public function setMediaCount(?string $mediaCount): Analysis
    {
        $this->mediaCount = $mediaCount;

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
     * @return Analysis
     */
    public function setName(?string $name): Analysis
    {
        $this->name = $name;

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
     * @return Analysis
     */
    public function setNewestDataAt(?string $newestDataAt): Analysis
    {
        $this->newestDataAt = $newestDataAt;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfDays(): ?int
    {
        return $this->numberOfDays;
    }

    /**
     * @param int|null $numberOfDays
     *
     * @return Analysis
     */
    public function setNumberOfDays(?int $numberOfDays): Analysis
    {
        $this->numberOfDays = $numberOfDays;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfDownVotes(): ?string
    {
        return $this->numberOfDownVotes;
    }

    /**
     * @param string|null $numberOfDownVotes
     *
     * @return Analysis
     */
    public function setNumberOfDownVotes(?string $numberOfDownVotes): Analysis
    {
        $this->numberOfDownVotes = $numberOfDownVotes;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPairs(): ?int
    {
        return $this->numberOfPairs;
    }

    /**
     * @param int|null $numberOfPairs
     *
     * @return Analysis
     */
    public function setNumberOfPairs(?int $numberOfPairs): Analysis
    {
        $this->numberOfPairs = $numberOfPairs;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfUpVotes(): ?string
    {
        return $this->numberOfUpVotes;
    }

    /**
     * @param string|null $numberOfUpVotes
     *
     * @return Analysis
     */
    public function setNumberOfUpVotes(?string $numberOfUpVotes): Analysis
    {
        $this->numberOfUpVotes = $numberOfUpVotes;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getObvious(): ?string
    {
        return $this->obvious;
    }

    /**
     * @param string|null $obvious
     *
     * @return Analysis
     */
    public function setObvious(?string $obvious): Analysis
    {
        $this->obvious = $obvious;

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
     * @return Analysis
     */
    public function setOnsetDelay(?int $onsetDelay): Analysis
    {
        $this->onsetDelay = $onsetDelay;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOnsetDelayWithStrongestPearsonCorrelation(): ?int
    {
        return $this->onsetDelayWithStrongestPearsonCorrelation;
    }

    /**
     * @param int|null $onsetDelayWithStrongestPearsonCorrelation
     *
     * @return Analysis
     */
    public function setOnsetDelayWithStrongestPearsonCorrelation(?int $onsetDelayWithStrongestPearsonCorrelation): Analysis
    {
        $this->onsetDelayWithStrongestPearsonCorrelation = $onsetDelayWithStrongestPearsonCorrelation;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOptimalPearsonProduct(): ?float
    {
        return $this->optimalPearsonProduct;
    }

    /**
     * @param float|null $optimalPearsonProduct
     *
     * @return Analysis
     */
    public function setOptimalPearsonProduct(?float $optimalPearsonProduct): Analysis
    {
        $this->optimalPearsonProduct = $optimalPearsonProduct;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutcomeIsGoal(): ?string
    {
        return $this->outcomeIsGoal;
    }

    /**
     * @param string|null $outcomeIsGoal
     *
     * @return Analysis
     */
    public function setOutcomeIsGoal(?string $outcomeIsGoal): Analysis
    {
        $this->outcomeIsGoal = $outcomeIsGoal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPValue(): ?float
    {
        return $this->pValue;
    }

    /**
     * @param float|null $pValue
     *
     * @return Analysis
     */
    public function setPValue(?float $pValue): Analysis
    {
        $this->pValue = $pValue;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPearsonCorrelationWithNoOnsetDelay(): ?float
    {
        return $this->pearsonCorrelationWithNoOnsetDelay;
    }

    /**
     * @param float|null $pearsonCorrelationWithNoOnsetDelay
     *
     * @return Analysis
     */
    public function setPearsonCorrelationWithNoOnsetDelay(?float $pearsonCorrelationWithNoOnsetDelay): Analysis
    {
        $this->pearsonCorrelationWithNoOnsetDelay = $pearsonCorrelationWithNoOnsetDelay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlausiblyCausal(): ?string
    {
        return $this->plausiblyCausal;
    }

    /**
     * @param string|null $plausiblyCausal
     *
     * @return Analysis
     */
    public function setPlausiblyCausal(?string $plausiblyCausal): Analysis
    {
        $this->plausiblyCausal = $plausiblyCausal;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPredictivePearsonCorrelationCoefficient(): ?float
    {
        return $this->predictivePearsonCorrelationCoefficient;
    }

    /**
     * @param float|null $predictivePearsonCorrelationCoefficient
     *
     * @return Analysis
     */
    public function setPredictivePearsonCorrelationCoefficient(?float $predictivePearsonCorrelationCoefficient): Analysis
    {
        $this->predictivePearsonCorrelationCoefficient = $predictivePearsonCorrelationCoefficient;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPredictorIsControllable(): ?string
    {
        return $this->predictorIsControllable;
    }

    /**
     * @param string|null $predictorIsControllable
     *
     * @return Analysis
     */
    public function setPredictorIsControllable(?string $predictorIsControllable): Analysis
    {
        $this->predictorIsControllable = $predictorIsControllable;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPredictsHighEffectChange(): ?int
    {
        return $this->predictsHighEffectChange;
    }

    /**
     * @param int|null $predictsHighEffectChange
     *
     * @return Analysis
     */
    public function setPredictsHighEffectChange(?int $predictsHighEffectChange): Analysis
    {
        $this->predictsHighEffectChange = $predictsHighEffectChange;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPredictsLowEffectChange(): ?int
    {
        return $this->predictsLowEffectChange;
    }

    /**
     * @param int|null $predictsLowEffectChange
     *
     * @return Analysis
     */
    public function setPredictsLowEffectChange(?int $predictsLowEffectChange): Analysis
    {
        $this->predictsLowEffectChange = $predictsLowEffectChange;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublishedAt(): ?string
    {
        return $this->publishedAt;
    }

    /**
     * @param string|null $publishedAt
     *
     * @return Analysis
     */
    public function setPublishedAt(?string $publishedAt): Analysis
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQmScore(): ?float
    {
        return $this->qmScore;
    }

    /**
     * @param float|null $qmScore
     *
     * @return Analysis
     */
    public function setQmScore(?float $qmScore): Analysis
    {
        $this->qmScore = $qmScore;

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
     * @return Analysis
     */
    public function setReasonForAnalysis(?string $reasonForAnalysis): Analysis
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
     * @return Analysis
     */
    public function setRecordSizeInKb(?string $recordSizeInKb): Analysis
    {
        $this->recordSizeInKb = $recordSizeInKb;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRelationship(): ?string
    {
        return $this->relationship;
    }

    /**
     * @param string|null $relationship
     *
     * @return Analysis
     */
    public function setRelationship(?string $relationship): Analysis
    {
        $this->relationship = $relationship;

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
     * @return Analysis
     */
    public function setReportTitle(?string $reportTitle): Analysis
    {
        $this->reportTitle = $reportTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReversePearsonCorrelationCoefficient(): ?string
    {
        return $this->reversePearsonCorrelationCoefficient;
    }

    /**
     * @param string|null $reversePearsonCorrelationCoefficient
     *
     * @return Analysis
     */
    public function setReversePearsonCorrelationCoefficient(?string $reversePearsonCorrelationCoefficient): Analysis
    {
        $this->reversePearsonCorrelationCoefficient = $reversePearsonCorrelationCoefficient;

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
     * @return Analysis
     */
    public function setSlug(?string $slug): Analysis
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    /**
     * @param string|null $sortOrder
     *
     * @return Analysis
     */
    public function setSortOrder(?string $sortOrder): Analysis
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getStatisticalSignificance(): ?float
    {
        return $this->statisticalSignificance;
    }

    /**
     * @param float|null $statisticalSignificance
     *
     * @return Analysis
     */
    public function setStatisticalSignificance(?float $statisticalSignificance): Analysis
    {
        $this->statisticalSignificance = $statisticalSignificance;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStrengthLevel(): ?string
    {
        return $this->strengthLevel;
    }

    /**
     * @param string|null $strengthLevel
     *
     * @return Analysis
     */
    public function setStrengthLevel(?string $strengthLevel): Analysis
    {
        $this->strengthLevel = $strengthLevel;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getStrongestPearsonCorrelationCoefficient(): ?float
    {
        return $this->strongestPearsonCorrelationCoefficient;
    }

    /**
     * @param float|null $strongestPearsonCorrelationCoefficient
     *
     * @return Analysis
     */
    public function setStrongestPearsonCorrelationCoefficient(?float $strongestPearsonCorrelationCoefficient): Analysis
    {
        $this->strongestPearsonCorrelationCoefficient = $strongestPearsonCorrelationCoefficient;

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
     * @return Analysis
     */
    public function setSubtitle(?string $subtitle): Analysis
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTValue(): ?float
    {
        return $this->tValue;
    }

    /**
     * @param float|null $tValue
     *
     * @return Analysis
     */
    public function setTValue(?float $tValue): Analysis
    {
        $this->tValue = $tValue;

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
     * @return Analysis
     */
    public function setUpdatedAt(?string $updatedAt): Analysis
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsefulnessVote(): ?string
    {
        return $this->usefulnessVote;
    }

    /**
     * @param string|null $usefulnessVote
     *
     * @return Analysis
     */
    public function setUsefulnessVote(?string $usefulnessVote): Analysis
    {
        $this->usefulnessVote = $usefulnessVote;

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
     * @return Analysis
     */
    public function setUserErrorMessage(?string $userErrorMessage): Analysis
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
     * @return Analysis
     */
    public function setUserId(?int $userId): Analysis
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserVariablesWhereBestUserCorrelationCount(): ?string
    {
        return $this->userVariablesWhereBestUserCorrelationCount;
    }

    /**
     * @param string|null $userVariablesWhereBestUserCorrelationCount
     *
     * @return Analysis
     */
    public function setUserVariablesWhereBestUserCorrelationCount(?string $userVariablesWhereBestUserCorrelationCount): Analysis
    {
        $this->userVariablesWhereBestUserCorrelationCount = $userVariablesWhereBestUserCorrelationCount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValuePredictingHighOutcome(): ?float
    {
        return $this->valuePredictingHighOutcome;
    }

    /**
     * @param float|null $valuePredictingHighOutcome
     *
     * @return Analysis
     */
    public function setValuePredictingHighOutcome(?float $valuePredictingHighOutcome): Analysis
    {
        $this->valuePredictingHighOutcome = $valuePredictingHighOutcome;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getValuePredictingLowOutcome(): ?int
    {
        return $this->valuePredictingLowOutcome;
    }

    /**
     * @param int|null $valuePredictingLowOutcome
     *
     * @return Analysis
     */
    public function setValuePredictingLowOutcome(?int $valuePredictingLowOutcome): Analysis
    {
        $this->valuePredictingLowOutcome = $valuePredictingLowOutcome;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVote(): ?string
    {
        return $this->vote;
    }

    /**
     * @param string|null $vote
     *
     * @return Analysis
     */
    public function setVote(?string $vote): Analysis
    {
        $this->vote = $vote;

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
     * @return Analysis
     */
    public function setVotesCount(?string $votesCount): Analysis
    {
        $this->votesCount = $votesCount;

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
     * @return Analysis
     */
    public function setWpPostId(?string $wpPostId): Analysis
    {
        $this->wpPostId = $wpPostId;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getZScore(): ?float
    {
        return $this->zScore;
    }

    /**
     * @param float|null $zScore
     *
     * @return Analysis
     */
    public function setZScore(?float $zScore): Analysis
    {
        $this->zScore = $zScore;

        return $this;
    }
}

