<?php
/**
 * Correlation
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * Correlation Class 
 */
class Correlation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Correlation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_daily_high_cause' => 'double',
        'average_daily_low_cause' => 'double',
        'average_effect' => 'double',
        'average_effect_following_high_cause' => 'double',
        'average_effect_following_low_cause' => 'double',
        'average_forward_pearson_correlation_over_onset_delays' => 'double',
        'average_reverse_pearson_correlation_over_onset_delays' => 'double',
        'average_vote' => 'float',
        'cause_changes' => 'int',
        'cause_data_source' => '\CureDAO\Client\Models\DataSource',
        'cause_user_variable_share_user_measurements' => 'int',
        'cause_variable_category_id' => 'int',
        'cause_variable_category_name' => 'string',
        'cause_variable_combination_operation' => 'string',
        'cause_variable_unit_abbreviated_name' => 'string',
        'cause_variable_id' => 'int',
        'cause_variable_most_common_connector_id' => 'int',
        'cause_variable_name' => 'string',
        'confidence_interval' => 'double',
        'confidence_level' => 'string',
        'correlation_coefficient' => 'double',
        'correlation_is_contradictory_to_optimal_values' => 'bool',
        'created_at' => 'string',
        'critical_t_value' => 'double',
        'direction' => 'string',
        'duration_of_action' => 'int',
        'duration_of_action_in_hours' => 'float',
        'degrees_of_freedom' => 'int',
        'effect_number_of_processed_daily_measurements' => 'int',
        'error' => 'string',
        'effect_changes' => 'int',
        'effect_data_source' => '\CureDAO\Client\Models\DataSource',
        'effect_size' => 'string',
        'effect_unit' => 'string',
        'effect_user_variable_share_user_measurements' => 'int',
        'effect_variable_category_id' => 'int',
        'effect_variable_category_name' => 'string',
        'effect_variable_combination_operation' => 'string',
        'effect_variable_common_alias' => 'string',
        'effect_variable_unit_abbreviated_name' => 'string',
        'effect_variable_unit_id' => 'int',
        'effect_variable_unit_name' => 'string',
        'effect_variable_id' => 'int',
        'effect_variable_most_common_connector_id' => 'int',
        'effect_variable_name' => 'string',
        'experiment_end_time' => 'string',
        'experiment_start_time' => 'string',
        'forward_spearman_correlation_coefficient' => 'double',
        'number_of_pairs' => 'int',
        'onset_delay' => 'int',
        'onset_delay_in_hours' => 'float',
        'onset_delay_with_strongest_pearson_correlation' => 'int',
        'onset_delay_with_strongest_pearson_correlation_in_hours' => 'float',
        'optimal_pearson_product' => 'double',
        'outcome_filling_value' => 'int',
        'outcome_maximum_allowed_value' => 'double',
        'outcome_minimum_allowed_value' => 'double',
        'pearson_correlation_with_no_onset_delay' => 'double',
        'predictive_pearson_correlation' => 'double',
        'predictive_pearson_correlation_coefficient' => 'double',
        'predictor_data_sources' => 'string',
        'predictor_filling_value' => 'int',
        'predictor_maximum_allowed_value' => 'double',
        'predictor_minimum_allowed_value' => 'double',
        'predicts_high_effect_change' => 'int',
        'predicts_low_effect_change' => 'int',
        'p_value' => 'double',
        'qm_score' => 'double',
        'reverse_pearson_correlation_coefficient' => 'double',
        'share_user_measurements' => 'bool',
        'sharing_description' => 'string',
        'sharing_title' => 'string',
        'significant_difference' => 'bool',
        'statistical_significance' => 'double',
        'strength_level' => 'string',
        'strongest_pearson_correlation_coefficient' => 'double',
        'study_html' => '\CureDAO\Client\Models\StudyHtml',
        'study_images' => '\CureDAO\Client\Models\StudyImages',
        'study_links' => '\CureDAO\Client\Models\StudyLinks',
        'study_text' => '\CureDAO\Client\Models\StudyText',
        't_value' => 'double',
        'updated_at' => 'string',
        'user_id' => 'int',
        'user_vote' => 'int',
        'value_predicting_high_outcome' => 'double',
        'value_predicting_low_outcome' => 'double',
        'outcome_data_sources' => 'string',
        'principal_investigator' => 'string',
        'reverse_correlation' => 'float',
        'average_pearson_correlation_coefficient_over_onset_delays' => 'float',
        'cause_number_of_raw_measurements' => 'int',
        'correlations_over_durations_of_action' => 'null[]',
        'correlations_over_onset_delays' => 'null[]',
        'correlations_over_durations_of_action_chart_config' => 'object',
        'correlations_over_onset_delays_chart_config' => 'object',
        'number_of_users' => 'float',
        'raw_cause_measurement_significance' => 'double',
        'raw_effect_measurement_significance' => 'double',
        'reverse_pairs_count' => 'string',
        'vote_statistical_significance' => 'int',
        'aggregate_qm_score' => 'double',
        'forward_pearson_correlation_coefficient' => 'double',
        'number_of_correlations' => 'int',
        'vote' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_daily_high_cause' => 'double',
        'average_daily_low_cause' => 'double',
        'average_effect' => 'double',
        'average_effect_following_high_cause' => 'double',
        'average_effect_following_low_cause' => 'double',
        'average_forward_pearson_correlation_over_onset_delays' => 'double',
        'average_reverse_pearson_correlation_over_onset_delays' => 'double',
        'average_vote' => null,
        'cause_changes' => null,
        'cause_data_source' => null,
        'cause_user_variable_share_user_measurements' => null,
        'cause_variable_category_id' => null,
        'cause_variable_category_name' => null,
        'cause_variable_combination_operation' => null,
        'cause_variable_unit_abbreviated_name' => null,
        'cause_variable_id' => null,
        'cause_variable_most_common_connector_id' => null,
        'cause_variable_name' => null,
        'confidence_interval' => 'double',
        'confidence_level' => null,
        'correlation_coefficient' => 'double',
        'correlation_is_contradictory_to_optimal_values' => null,
        'created_at' => null,
        'critical_t_value' => 'double',
        'direction' => null,
        'duration_of_action' => null,
        'duration_of_action_in_hours' => 'float',
        'degrees_of_freedom' => null,
        'effect_number_of_processed_daily_measurements' => null,
        'error' => null,
        'effect_changes' => null,
        'effect_data_source' => null,
        'effect_size' => null,
        'effect_unit' => null,
        'effect_user_variable_share_user_measurements' => null,
        'effect_variable_category_id' => null,
        'effect_variable_category_name' => null,
        'effect_variable_combination_operation' => null,
        'effect_variable_common_alias' => null,
        'effect_variable_unit_abbreviated_name' => null,
        'effect_variable_unit_id' => null,
        'effect_variable_unit_name' => null,
        'effect_variable_id' => null,
        'effect_variable_most_common_connector_id' => null,
        'effect_variable_name' => null,
        'experiment_end_time' => null,
        'experiment_start_time' => null,
        'forward_spearman_correlation_coefficient' => 'double',
        'number_of_pairs' => null,
        'onset_delay' => null,
        'onset_delay_in_hours' => 'float',
        'onset_delay_with_strongest_pearson_correlation' => null,
        'onset_delay_with_strongest_pearson_correlation_in_hours' => 'float',
        'optimal_pearson_product' => 'double',
        'outcome_filling_value' => null,
        'outcome_maximum_allowed_value' => 'double',
        'outcome_minimum_allowed_value' => 'double',
        'pearson_correlation_with_no_onset_delay' => 'double',
        'predictive_pearson_correlation' => 'double',
        'predictive_pearson_correlation_coefficient' => 'double',
        'predictor_data_sources' => null,
        'predictor_filling_value' => null,
        'predictor_maximum_allowed_value' => 'double',
        'predictor_minimum_allowed_value' => 'double',
        'predicts_high_effect_change' => null,
        'predicts_low_effect_change' => null,
        'p_value' => 'double',
        'qm_score' => 'double',
        'reverse_pearson_correlation_coefficient' => 'double',
        'share_user_measurements' => null,
        'sharing_description' => null,
        'sharing_title' => null,
        'significant_difference' => null,
        'statistical_significance' => 'double',
        'strength_level' => null,
        'strongest_pearson_correlation_coefficient' => 'double',
        'study_html' => null,
        'study_images' => null,
        'study_links' => null,
        'study_text' => null,
        't_value' => 'double',
        'updated_at' => null,
        'user_id' => null,
        'user_vote' => null,
        'value_predicting_high_outcome' => 'double',
        'value_predicting_low_outcome' => 'double',
        'outcome_data_sources' => null,
        'principal_investigator' => null,
        'reverse_correlation' => null,
        'average_pearson_correlation_coefficient_over_onset_delays' => 'float',
        'cause_number_of_raw_measurements' => null,
        'correlations_over_durations_of_action' => null,
        'correlations_over_onset_delays' => null,
        'correlations_over_durations_of_action_chart_config' => null,
        'correlations_over_onset_delays_chart_config' => null,
        'number_of_users' => null,
        'raw_cause_measurement_significance' => 'double',
        'raw_effect_measurement_significance' => 'double',
        'reverse_pairs_count' => null,
        'vote_statistical_significance' => null,
        'aggregate_qm_score' => 'double',
        'forward_pearson_correlation_coefficient' => 'double',
        'number_of_correlations' => null,
        'vote' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'average_daily_high_cause' => 'averageDailyHighCause',
        'average_daily_low_cause' => 'averageDailyLowCause',
        'average_effect' => 'averageEffect',
        'average_effect_following_high_cause' => 'averageEffectFollowingHighCause',
        'average_effect_following_low_cause' => 'averageEffectFollowingLowCause',
        'average_forward_pearson_correlation_over_onset_delays' => 'averageForwardPearsonCorrelationOverOnsetDelays',
        'average_reverse_pearson_correlation_over_onset_delays' => 'averageReversePearsonCorrelationOverOnsetDelays',
        'average_vote' => 'averageVote',
        'cause_changes' => 'causeChanges',
        'cause_data_source' => 'causeDataSource',
        'cause_user_variable_share_user_measurements' => 'causeUserVariableShareUserMeasurements',
        'cause_variable_category_id' => 'causeVariableCategoryId',
        'cause_variable_category_name' => 'causeVariableCategoryName',
        'cause_variable_combination_operation' => 'causeVariableCombinationOperation',
        'cause_variable_unit_abbreviated_name' => 'causeVariableUnitAbbreviatedName',
        'cause_variable_id' => 'causeVariableId',
        'cause_variable_most_common_connector_id' => 'causeVariableMostCommonConnectorId',
        'cause_variable_name' => 'causeVariableName',
        'confidence_interval' => 'confidenceInterval',
        'confidence_level' => 'confidenceLevel',
        'correlation_coefficient' => 'correlationCoefficient',
        'correlation_is_contradictory_to_optimal_values' => 'correlationIsContradictoryToOptimalValues',
        'created_at' => 'createdAt',
        'critical_t_value' => 'criticalTValue',
        'direction' => 'direction',
        'duration_of_action' => 'durationOfAction',
        'duration_of_action_in_hours' => 'durationOfActionInHours',
        'degrees_of_freedom' => 'degreesOfFreedom',
        'effect_number_of_processed_daily_measurements' => 'effectNumberOfProcessedDailyMeasurements',
        'error' => 'error',
        'effect_changes' => 'effectChanges',
        'effect_data_source' => 'effectDataSource',
        'effect_size' => 'effectSize',
        'effect_unit' => 'effectUnit',
        'effect_user_variable_share_user_measurements' => 'effectUserVariableShareUserMeasurements',
        'effect_variable_category_id' => 'effectVariableCategoryId',
        'effect_variable_category_name' => 'effectVariableCategoryName',
        'effect_variable_combination_operation' => 'effectVariableCombinationOperation',
        'effect_variable_common_alias' => 'effectVariableCommonAlias',
        'effect_variable_unit_abbreviated_name' => 'effectVariableUnitAbbreviatedName',
        'effect_variable_unit_id' => 'effectVariableUnitId',
        'effect_variable_unit_name' => 'effectVariableUnitName',
        'effect_variable_id' => 'effectVariableId',
        'effect_variable_most_common_connector_id' => 'effectVariableMostCommonConnectorId',
        'effect_variable_name' => 'effectVariableName',
        'experiment_end_time' => 'experimentEndTime',
        'experiment_start_time' => 'experimentStartTime',
        'forward_spearman_correlation_coefficient' => 'forwardSpearmanCorrelationCoefficient',
        'number_of_pairs' => 'numberOfPairs',
        'onset_delay' => 'onsetDelay',
        'onset_delay_in_hours' => 'onsetDelayInHours',
        'onset_delay_with_strongest_pearson_correlation' => 'onsetDelayWithStrongestPearsonCorrelation',
        'onset_delay_with_strongest_pearson_correlation_in_hours' => 'onsetDelayWithStrongestPearsonCorrelationInHours',
        'optimal_pearson_product' => 'optimalPearsonProduct',
        'outcome_filling_value' => 'outcomeFillingValue',
        'outcome_maximum_allowed_value' => 'outcomeMaximumAllowedValue',
        'outcome_minimum_allowed_value' => 'outcomeMinimumAllowedValue',
        'pearson_correlation_with_no_onset_delay' => 'pearsonCorrelationWithNoOnsetDelay',
        'predictive_pearson_correlation' => 'predictivePearsonCorrelation',
        'predictive_pearson_correlation_coefficient' => 'predictivePearsonCorrelationCoefficient',
        'predictor_data_sources' => 'predictorDataSources',
        'predictor_filling_value' => 'predictorFillingValue',
        'predictor_maximum_allowed_value' => 'predictorMaximumAllowedValue',
        'predictor_minimum_allowed_value' => 'predictorMinimumAllowedValue',
        'predicts_high_effect_change' => 'predictsHighEffectChange',
        'predicts_low_effect_change' => 'predictsLowEffectChange',
        'p_value' => 'pValue',
        'qm_score' => 'qmScore',
        'reverse_pearson_correlation_coefficient' => 'reversePearsonCorrelationCoefficient',
        'share_user_measurements' => 'shareUserMeasurements',
        'sharing_description' => 'sharingDescription',
        'sharing_title' => 'sharingTitle',
        'significant_difference' => 'significantDifference',
        'statistical_significance' => 'statisticalSignificance',
        'strength_level' => 'strengthLevel',
        'strongest_pearson_correlation_coefficient' => 'strongestPearsonCorrelationCoefficient',
        'study_html' => 'studyHtml',
        'study_images' => 'studyImages',
        'study_links' => 'studyLinks',
        'study_text' => 'studyText',
        't_value' => 'tValue',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId',
        'user_vote' => 'userVote',
        'value_predicting_high_outcome' => 'valuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'valuePredictingLowOutcome',
        'outcome_data_sources' => 'outcomeDataSources',
        'principal_investigator' => 'principalInvestigator',
        'reverse_correlation' => 'reverseCorrelation',
        'average_pearson_correlation_coefficient_over_onset_delays' => 'averagePearsonCorrelationCoefficientOverOnsetDelays',
        'cause_number_of_raw_measurements' => 'causeNumberOfRawMeasurements',
        'correlations_over_durations_of_action' => 'correlationsOverDurationsOfAction',
        'correlations_over_onset_delays' => 'correlationsOverOnsetDelays',
        'correlations_over_durations_of_action_chart_config' => 'correlationsOverDurationsOfActionChartConfig',
        'correlations_over_onset_delays_chart_config' => 'correlationsOverOnsetDelaysChartConfig',
        'number_of_users' => 'numberOfUsers',
        'raw_cause_measurement_significance' => 'rawCauseMeasurementSignificance',
        'raw_effect_measurement_significance' => 'rawEffectMeasurementSignificance',
        'reverse_pairs_count' => 'reversePairsCount',
        'vote_statistical_significance' => 'voteStatisticalSignificance',
        'aggregate_qm_score' => 'aggregateQMScore',
        'forward_pearson_correlation_coefficient' => 'forwardPearsonCorrelationCoefficient',
        'number_of_correlations' => 'numberOfCorrelations',
        'vote' => 'vote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_daily_high_cause' => 'setAverageDailyHighCause',
        'average_daily_low_cause' => 'setAverageDailyLowCause',
        'average_effect' => 'setAverageEffect',
        'average_effect_following_high_cause' => 'setAverageEffectFollowingHighCause',
        'average_effect_following_low_cause' => 'setAverageEffectFollowingLowCause',
        'average_forward_pearson_correlation_over_onset_delays' => 'setAverageForwardPearsonCorrelationOverOnsetDelays',
        'average_reverse_pearson_correlation_over_onset_delays' => 'setAverageReversePearsonCorrelationOverOnsetDelays',
        'average_vote' => 'setAverageVote',
        'cause_changes' => 'setCauseChanges',
        'cause_data_source' => 'setCauseDataSource',
        'cause_user_variable_share_user_measurements' => 'setCauseUserVariableShareUserMeasurements',
        'cause_variable_category_id' => 'setCauseVariableCategoryId',
        'cause_variable_category_name' => 'setCauseVariableCategoryName',
        'cause_variable_combination_operation' => 'setCauseVariableCombinationOperation',
        'cause_variable_unit_abbreviated_name' => 'setCauseVariableUnitAbbreviatedName',
        'cause_variable_id' => 'setCauseVariableId',
        'cause_variable_most_common_connector_id' => 'setCauseVariableMostCommonConnectorId',
        'cause_variable_name' => 'setCauseVariableName',
        'confidence_interval' => 'setConfidenceInterval',
        'confidence_level' => 'setConfidenceLevel',
        'correlation_coefficient' => 'setCorrelationCoefficient',
        'correlation_is_contradictory_to_optimal_values' => 'setCorrelationIsContradictoryToOptimalValues',
        'created_at' => 'setCreatedAt',
        'critical_t_value' => 'setCriticalTValue',
        'direction' => 'setDirection',
        'duration_of_action' => 'setDurationOfAction',
        'duration_of_action_in_hours' => 'setDurationOfActionInHours',
        'degrees_of_freedom' => 'setDegreesOfFreedom',
        'effect_number_of_processed_daily_measurements' => 'setEffectNumberOfProcessedDailyMeasurements',
        'error' => 'setError',
        'effect_changes' => 'setEffectChanges',
        'effect_data_source' => 'setEffectDataSource',
        'effect_size' => 'setEffectSize',
        'effect_unit' => 'setEffectUnit',
        'effect_user_variable_share_user_measurements' => 'setEffectUserVariableShareUserMeasurements',
        'effect_variable_category_id' => 'setEffectVariableCategoryId',
        'effect_variable_category_name' => 'setEffectVariableCategoryName',
        'effect_variable_combination_operation' => 'setEffectVariableCombinationOperation',
        'effect_variable_common_alias' => 'setEffectVariableCommonAlias',
        'effect_variable_unit_abbreviated_name' => 'setEffectVariableUnitAbbreviatedName',
        'effect_variable_unit_id' => 'setEffectVariableUnitId',
        'effect_variable_unit_name' => 'setEffectVariableUnitName',
        'effect_variable_id' => 'setEffectVariableId',
        'effect_variable_most_common_connector_id' => 'setEffectVariableMostCommonConnectorId',
        'effect_variable_name' => 'setEffectVariableName',
        'experiment_end_time' => 'setExperimentEndTime',
        'experiment_start_time' => 'setExperimentStartTime',
        'forward_spearman_correlation_coefficient' => 'setForwardSpearmanCorrelationCoefficient',
        'number_of_pairs' => 'setNumberOfPairs',
        'onset_delay' => 'setOnsetDelay',
        'onset_delay_in_hours' => 'setOnsetDelayInHours',
        'onset_delay_with_strongest_pearson_correlation' => 'setOnsetDelayWithStrongestPearsonCorrelation',
        'onset_delay_with_strongest_pearson_correlation_in_hours' => 'setOnsetDelayWithStrongestPearsonCorrelationInHours',
        'optimal_pearson_product' => 'setOptimalPearsonProduct',
        'outcome_filling_value' => 'setOutcomeFillingValue',
        'outcome_maximum_allowed_value' => 'setOutcomeMaximumAllowedValue',
        'outcome_minimum_allowed_value' => 'setOutcomeMinimumAllowedValue',
        'pearson_correlation_with_no_onset_delay' => 'setPearsonCorrelationWithNoOnsetDelay',
        'predictive_pearson_correlation' => 'setPredictivePearsonCorrelation',
        'predictive_pearson_correlation_coefficient' => 'setPredictivePearsonCorrelationCoefficient',
        'predictor_data_sources' => 'setPredictorDataSources',
        'predictor_filling_value' => 'setPredictorFillingValue',
        'predictor_maximum_allowed_value' => 'setPredictorMaximumAllowedValue',
        'predictor_minimum_allowed_value' => 'setPredictorMinimumAllowedValue',
        'predicts_high_effect_change' => 'setPredictsHighEffectChange',
        'predicts_low_effect_change' => 'setPredictsLowEffectChange',
        'p_value' => 'setPValue',
        'qm_score' => 'setQmScore',
        'reverse_pearson_correlation_coefficient' => 'setReversePearsonCorrelationCoefficient',
        'share_user_measurements' => 'setShareUserMeasurements',
        'sharing_description' => 'setSharingDescription',
        'sharing_title' => 'setSharingTitle',
        'significant_difference' => 'setSignificantDifference',
        'statistical_significance' => 'setStatisticalSignificance',
        'strength_level' => 'setStrengthLevel',
        'strongest_pearson_correlation_coefficient' => 'setStrongestPearsonCorrelationCoefficient',
        'study_html' => 'setStudyHtml',
        'study_images' => 'setStudyImages',
        'study_links' => 'setStudyLinks',
        'study_text' => 'setStudyText',
        't_value' => 'setTValue',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId',
        'user_vote' => 'setUserVote',
        'value_predicting_high_outcome' => 'setValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'setValuePredictingLowOutcome',
        'outcome_data_sources' => 'setOutcomeDataSources',
        'principal_investigator' => 'setPrincipalInvestigator',
        'reverse_correlation' => 'setReverseCorrelation',
        'average_pearson_correlation_coefficient_over_onset_delays' => 'setAveragePearsonCorrelationCoefficientOverOnsetDelays',
        'cause_number_of_raw_measurements' => 'setCauseNumberOfRawMeasurements',
        'correlations_over_durations_of_action' => 'setCorrelationsOverDurationsOfAction',
        'correlations_over_onset_delays' => 'setCorrelationsOverOnsetDelays',
        'correlations_over_durations_of_action_chart_config' => 'setCorrelationsOverDurationsOfActionChartConfig',
        'correlations_over_onset_delays_chart_config' => 'setCorrelationsOverOnsetDelaysChartConfig',
        'number_of_users' => 'setNumberOfUsers',
        'raw_cause_measurement_significance' => 'setRawCauseMeasurementSignificance',
        'raw_effect_measurement_significance' => 'setRawEffectMeasurementSignificance',
        'reverse_pairs_count' => 'setReversePairsCount',
        'vote_statistical_significance' => 'setVoteStatisticalSignificance',
        'aggregate_qm_score' => 'setAggregateQmScore',
        'forward_pearson_correlation_coefficient' => 'setForwardPearsonCorrelationCoefficient',
        'number_of_correlations' => 'setNumberOfCorrelations',
        'vote' => 'setVote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_daily_high_cause' => 'getAverageDailyHighCause',
        'average_daily_low_cause' => 'getAverageDailyLowCause',
        'average_effect' => 'getAverageEffect',
        'average_effect_following_high_cause' => 'getAverageEffectFollowingHighCause',
        'average_effect_following_low_cause' => 'getAverageEffectFollowingLowCause',
        'average_forward_pearson_correlation_over_onset_delays' => 'getAverageForwardPearsonCorrelationOverOnsetDelays',
        'average_reverse_pearson_correlation_over_onset_delays' => 'getAverageReversePearsonCorrelationOverOnsetDelays',
        'average_vote' => 'getAverageVote',
        'cause_changes' => 'getCauseChanges',
        'cause_data_source' => 'getCauseDataSource',
        'cause_user_variable_share_user_measurements' => 'getCauseUserVariableShareUserMeasurements',
        'cause_variable_category_id' => 'getCauseVariableCategoryId',
        'cause_variable_category_name' => 'getCauseVariableCategoryName',
        'cause_variable_combination_operation' => 'getCauseVariableCombinationOperation',
        'cause_variable_unit_abbreviated_name' => 'getCauseVariableUnitAbbreviatedName',
        'cause_variable_id' => 'getCauseVariableId',
        'cause_variable_most_common_connector_id' => 'getCauseVariableMostCommonConnectorId',
        'cause_variable_name' => 'getCauseVariableName',
        'confidence_interval' => 'getConfidenceInterval',
        'confidence_level' => 'getConfidenceLevel',
        'correlation_coefficient' => 'getCorrelationCoefficient',
        'correlation_is_contradictory_to_optimal_values' => 'getCorrelationIsContradictoryToOptimalValues',
        'created_at' => 'getCreatedAt',
        'critical_t_value' => 'getCriticalTValue',
        'direction' => 'getDirection',
        'duration_of_action' => 'getDurationOfAction',
        'duration_of_action_in_hours' => 'getDurationOfActionInHours',
        'degrees_of_freedom' => 'getDegreesOfFreedom',
        'effect_number_of_processed_daily_measurements' => 'getEffectNumberOfProcessedDailyMeasurements',
        'error' => 'getError',
        'effect_changes' => 'getEffectChanges',
        'effect_data_source' => 'getEffectDataSource',
        'effect_size' => 'getEffectSize',
        'effect_unit' => 'getEffectUnit',
        'effect_user_variable_share_user_measurements' => 'getEffectUserVariableShareUserMeasurements',
        'effect_variable_category_id' => 'getEffectVariableCategoryId',
        'effect_variable_category_name' => 'getEffectVariableCategoryName',
        'effect_variable_combination_operation' => 'getEffectVariableCombinationOperation',
        'effect_variable_common_alias' => 'getEffectVariableCommonAlias',
        'effect_variable_unit_abbreviated_name' => 'getEffectVariableUnitAbbreviatedName',
        'effect_variable_unit_id' => 'getEffectVariableUnitId',
        'effect_variable_unit_name' => 'getEffectVariableUnitName',
        'effect_variable_id' => 'getEffectVariableId',
        'effect_variable_most_common_connector_id' => 'getEffectVariableMostCommonConnectorId',
        'effect_variable_name' => 'getEffectVariableName',
        'experiment_end_time' => 'getExperimentEndTime',
        'experiment_start_time' => 'getExperimentStartTime',
        'forward_spearman_correlation_coefficient' => 'getForwardSpearmanCorrelationCoefficient',
        'number_of_pairs' => 'getNumberOfPairs',
        'onset_delay' => 'getOnsetDelay',
        'onset_delay_in_hours' => 'getOnsetDelayInHours',
        'onset_delay_with_strongest_pearson_correlation' => 'getOnsetDelayWithStrongestPearsonCorrelation',
        'onset_delay_with_strongest_pearson_correlation_in_hours' => 'getOnsetDelayWithStrongestPearsonCorrelationInHours',
        'optimal_pearson_product' => 'getOptimalPearsonProduct',
        'outcome_filling_value' => 'getOutcomeFillingValue',
        'outcome_maximum_allowed_value' => 'getOutcomeMaximumAllowedValue',
        'outcome_minimum_allowed_value' => 'getOutcomeMinimumAllowedValue',
        'pearson_correlation_with_no_onset_delay' => 'getPearsonCorrelationWithNoOnsetDelay',
        'predictive_pearson_correlation' => 'getPredictivePearsonCorrelation',
        'predictive_pearson_correlation_coefficient' => 'getPredictivePearsonCorrelationCoefficient',
        'predictor_data_sources' => 'getPredictorDataSources',
        'predictor_filling_value' => 'getPredictorFillingValue',
        'predictor_maximum_allowed_value' => 'getPredictorMaximumAllowedValue',
        'predictor_minimum_allowed_value' => 'getPredictorMinimumAllowedValue',
        'predicts_high_effect_change' => 'getPredictsHighEffectChange',
        'predicts_low_effect_change' => 'getPredictsLowEffectChange',
        'p_value' => 'getPValue',
        'qm_score' => 'getQmScore',
        'reverse_pearson_correlation_coefficient' => 'getReversePearsonCorrelationCoefficient',
        'share_user_measurements' => 'getShareUserMeasurements',
        'sharing_description' => 'getSharingDescription',
        'sharing_title' => 'getSharingTitle',
        'significant_difference' => 'getSignificantDifference',
        'statistical_significance' => 'getStatisticalSignificance',
        'strength_level' => 'getStrengthLevel',
        'strongest_pearson_correlation_coefficient' => 'getStrongestPearsonCorrelationCoefficient',
        'study_html' => 'getStudyHtml',
        'study_images' => 'getStudyImages',
        'study_links' => 'getStudyLinks',
        'study_text' => 'getStudyText',
        't_value' => 'getTValue',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId',
        'user_vote' => 'getUserVote',
        'value_predicting_high_outcome' => 'getValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'getValuePredictingLowOutcome',
        'outcome_data_sources' => 'getOutcomeDataSources',
        'principal_investigator' => 'getPrincipalInvestigator',
        'reverse_correlation' => 'getReverseCorrelation',
        'average_pearson_correlation_coefficient_over_onset_delays' => 'getAveragePearsonCorrelationCoefficientOverOnsetDelays',
        'cause_number_of_raw_measurements' => 'getCauseNumberOfRawMeasurements',
        'correlations_over_durations_of_action' => 'getCorrelationsOverDurationsOfAction',
        'correlations_over_onset_delays' => 'getCorrelationsOverOnsetDelays',
        'correlations_over_durations_of_action_chart_config' => 'getCorrelationsOverDurationsOfActionChartConfig',
        'correlations_over_onset_delays_chart_config' => 'getCorrelationsOverOnsetDelaysChartConfig',
        'number_of_users' => 'getNumberOfUsers',
        'raw_cause_measurement_significance' => 'getRawCauseMeasurementSignificance',
        'raw_effect_measurement_significance' => 'getRawEffectMeasurementSignificance',
        'reverse_pairs_count' => 'getReversePairsCount',
        'vote_statistical_significance' => 'getVoteStatisticalSignificance',
        'aggregate_qm_score' => 'getAggregateQmScore',
        'forward_pearson_correlation_coefficient' => 'getForwardPearsonCorrelationCoefficient',
        'number_of_correlations' => 'getNumberOfCorrelations',
        'vote' => 'getVote'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['average_daily_high_cause'] = isset($data['average_daily_high_cause']) ? $data['average_daily_high_cause'] : null;
        $this->container['average_daily_low_cause'] = isset($data['average_daily_low_cause']) ? $data['average_daily_low_cause'] : null;
        $this->container['average_effect'] = isset($data['average_effect']) ? $data['average_effect'] : null;
        $this->container['average_effect_following_high_cause'] = isset($data['average_effect_following_high_cause']) ? $data['average_effect_following_high_cause'] : null;
        $this->container['average_effect_following_low_cause'] = isset($data['average_effect_following_low_cause']) ? $data['average_effect_following_low_cause'] : null;
        $this->container['average_forward_pearson_correlation_over_onset_delays'] = isset($data['average_forward_pearson_correlation_over_onset_delays']) ? $data['average_forward_pearson_correlation_over_onset_delays'] : null;
        $this->container['average_reverse_pearson_correlation_over_onset_delays'] = isset($data['average_reverse_pearson_correlation_over_onset_delays']) ? $data['average_reverse_pearson_correlation_over_onset_delays'] : null;
        $this->container['average_vote'] = isset($data['average_vote']) ? $data['average_vote'] : null;
        $this->container['cause_changes'] = isset($data['cause_changes']) ? $data['cause_changes'] : null;
        $this->container['cause_data_source'] = isset($data['cause_data_source']) ? $data['cause_data_source'] : null;
        $this->container['cause_user_variable_share_user_measurements'] = isset($data['cause_user_variable_share_user_measurements']) ? $data['cause_user_variable_share_user_measurements'] : null;
        $this->container['cause_variable_category_id'] = isset($data['cause_variable_category_id']) ? $data['cause_variable_category_id'] : null;
        $this->container['cause_variable_category_name'] = isset($data['cause_variable_category_name']) ? $data['cause_variable_category_name'] : null;
        $this->container['cause_variable_combination_operation'] = isset($data['cause_variable_combination_operation']) ? $data['cause_variable_combination_operation'] : null;
        $this->container['cause_variable_unit_abbreviated_name'] = isset($data['cause_variable_unit_abbreviated_name']) ? $data['cause_variable_unit_abbreviated_name'] : null;
        $this->container['cause_variable_id'] = isset($data['cause_variable_id']) ? $data['cause_variable_id'] : null;
        $this->container['cause_variable_most_common_connector_id'] = isset($data['cause_variable_most_common_connector_id']) ? $data['cause_variable_most_common_connector_id'] : null;
        $this->container['cause_variable_name'] = isset($data['cause_variable_name']) ? $data['cause_variable_name'] : null;
        $this->container['confidence_interval'] = isset($data['confidence_interval']) ? $data['confidence_interval'] : null;
        $this->container['confidence_level'] = isset($data['confidence_level']) ? $data['confidence_level'] : null;
        $this->container['correlation_coefficient'] = isset($data['correlation_coefficient']) ? $data['correlation_coefficient'] : null;
        $this->container['correlation_is_contradictory_to_optimal_values'] = isset($data['correlation_is_contradictory_to_optimal_values']) ? $data['correlation_is_contradictory_to_optimal_values'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['critical_t_value'] = isset($data['critical_t_value']) ? $data['critical_t_value'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['duration_of_action_in_hours'] = isset($data['duration_of_action_in_hours']) ? $data['duration_of_action_in_hours'] : null;
        $this->container['degrees_of_freedom'] = isset($data['degrees_of_freedom']) ? $data['degrees_of_freedom'] : null;
        $this->container['effect_number_of_processed_daily_measurements'] = isset($data['effect_number_of_processed_daily_measurements']) ? $data['effect_number_of_processed_daily_measurements'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['effect_changes'] = isset($data['effect_changes']) ? $data['effect_changes'] : null;
        $this->container['effect_data_source'] = isset($data['effect_data_source']) ? $data['effect_data_source'] : null;
        $this->container['effect_size'] = isset($data['effect_size']) ? $data['effect_size'] : null;
        $this->container['effect_unit'] = isset($data['effect_unit']) ? $data['effect_unit'] : null;
        $this->container['effect_user_variable_share_user_measurements'] = isset($data['effect_user_variable_share_user_measurements']) ? $data['effect_user_variable_share_user_measurements'] : null;
        $this->container['effect_variable_category_id'] = isset($data['effect_variable_category_id']) ? $data['effect_variable_category_id'] : null;
        $this->container['effect_variable_category_name'] = isset($data['effect_variable_category_name']) ? $data['effect_variable_category_name'] : null;
        $this->container['effect_variable_combination_operation'] = isset($data['effect_variable_combination_operation']) ? $data['effect_variable_combination_operation'] : null;
        $this->container['effect_variable_common_alias'] = isset($data['effect_variable_common_alias']) ? $data['effect_variable_common_alias'] : null;
        $this->container['effect_variable_unit_abbreviated_name'] = isset($data['effect_variable_unit_abbreviated_name']) ? $data['effect_variable_unit_abbreviated_name'] : null;
        $this->container['effect_variable_unit_id'] = isset($data['effect_variable_unit_id']) ? $data['effect_variable_unit_id'] : null;
        $this->container['effect_variable_unit_name'] = isset($data['effect_variable_unit_name']) ? $data['effect_variable_unit_name'] : null;
        $this->container['effect_variable_id'] = isset($data['effect_variable_id']) ? $data['effect_variable_id'] : null;
        $this->container['effect_variable_most_common_connector_id'] = isset($data['effect_variable_most_common_connector_id']) ? $data['effect_variable_most_common_connector_id'] : null;
        $this->container['effect_variable_name'] = isset($data['effect_variable_name']) ? $data['effect_variable_name'] : null;
        $this->container['experiment_end_time'] = isset($data['experiment_end_time']) ? $data['experiment_end_time'] : null;
        $this->container['experiment_start_time'] = isset($data['experiment_start_time']) ? $data['experiment_start_time'] : null;
        $this->container['forward_spearman_correlation_coefficient'] = isset($data['forward_spearman_correlation_coefficient']) ? $data['forward_spearman_correlation_coefficient'] : null;
        $this->container['number_of_pairs'] = isset($data['number_of_pairs']) ? $data['number_of_pairs'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['onset_delay_in_hours'] = isset($data['onset_delay_in_hours']) ? $data['onset_delay_in_hours'] : null;
        $this->container['onset_delay_with_strongest_pearson_correlation'] = isset($data['onset_delay_with_strongest_pearson_correlation']) ? $data['onset_delay_with_strongest_pearson_correlation'] : null;
        $this->container['onset_delay_with_strongest_pearson_correlation_in_hours'] = isset($data['onset_delay_with_strongest_pearson_correlation_in_hours']) ? $data['onset_delay_with_strongest_pearson_correlation_in_hours'] : null;
        $this->container['optimal_pearson_product'] = isset($data['optimal_pearson_product']) ? $data['optimal_pearson_product'] : null;
        $this->container['outcome_filling_value'] = isset($data['outcome_filling_value']) ? $data['outcome_filling_value'] : null;
        $this->container['outcome_maximum_allowed_value'] = isset($data['outcome_maximum_allowed_value']) ? $data['outcome_maximum_allowed_value'] : null;
        $this->container['outcome_minimum_allowed_value'] = isset($data['outcome_minimum_allowed_value']) ? $data['outcome_minimum_allowed_value'] : null;
        $this->container['pearson_correlation_with_no_onset_delay'] = isset($data['pearson_correlation_with_no_onset_delay']) ? $data['pearson_correlation_with_no_onset_delay'] : null;
        $this->container['predictive_pearson_correlation'] = isset($data['predictive_pearson_correlation']) ? $data['predictive_pearson_correlation'] : null;
        $this->container['predictive_pearson_correlation_coefficient'] = isset($data['predictive_pearson_correlation_coefficient']) ? $data['predictive_pearson_correlation_coefficient'] : null;
        $this->container['predictor_data_sources'] = isset($data['predictor_data_sources']) ? $data['predictor_data_sources'] : null;
        $this->container['predictor_filling_value'] = isset($data['predictor_filling_value']) ? $data['predictor_filling_value'] : null;
        $this->container['predictor_maximum_allowed_value'] = isset($data['predictor_maximum_allowed_value']) ? $data['predictor_maximum_allowed_value'] : null;
        $this->container['predictor_minimum_allowed_value'] = isset($data['predictor_minimum_allowed_value']) ? $data['predictor_minimum_allowed_value'] : null;
        $this->container['predicts_high_effect_change'] = isset($data['predicts_high_effect_change']) ? $data['predicts_high_effect_change'] : null;
        $this->container['predicts_low_effect_change'] = isset($data['predicts_low_effect_change']) ? $data['predicts_low_effect_change'] : null;
        $this->container['p_value'] = isset($data['p_value']) ? $data['p_value'] : null;
        $this->container['qm_score'] = isset($data['qm_score']) ? $data['qm_score'] : null;
        $this->container['reverse_pearson_correlation_coefficient'] = isset($data['reverse_pearson_correlation_coefficient']) ? $data['reverse_pearson_correlation_coefficient'] : null;
        $this->container['share_user_measurements'] = isset($data['share_user_measurements']) ? $data['share_user_measurements'] : null;
        $this->container['sharing_description'] = isset($data['sharing_description']) ? $data['sharing_description'] : null;
        $this->container['sharing_title'] = isset($data['sharing_title']) ? $data['sharing_title'] : null;
        $this->container['significant_difference'] = isset($data['significant_difference']) ? $data['significant_difference'] : null;
        $this->container['statistical_significance'] = isset($data['statistical_significance']) ? $data['statistical_significance'] : null;
        $this->container['strength_level'] = isset($data['strength_level']) ? $data['strength_level'] : null;
        $this->container['strongest_pearson_correlation_coefficient'] = isset($data['strongest_pearson_correlation_coefficient']) ? $data['strongest_pearson_correlation_coefficient'] : null;
        $this->container['study_html'] = isset($data['study_html']) ? $data['study_html'] : null;
        $this->container['study_images'] = isset($data['study_images']) ? $data['study_images'] : null;
        $this->container['study_links'] = isset($data['study_links']) ? $data['study_links'] : null;
        $this->container['study_text'] = isset($data['study_text']) ? $data['study_text'] : null;
        $this->container['t_value'] = isset($data['t_value']) ? $data['t_value'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_vote'] = isset($data['user_vote']) ? $data['user_vote'] : null;
        $this->container['value_predicting_high_outcome'] = isset($data['value_predicting_high_outcome']) ? $data['value_predicting_high_outcome'] : null;
        $this->container['value_predicting_low_outcome'] = isset($data['value_predicting_low_outcome']) ? $data['value_predicting_low_outcome'] : null;
        $this->container['outcome_data_sources'] = isset($data['outcome_data_sources']) ? $data['outcome_data_sources'] : null;
        $this->container['principal_investigator'] = isset($data['principal_investigator']) ? $data['principal_investigator'] : null;
        $this->container['reverse_correlation'] = isset($data['reverse_correlation']) ? $data['reverse_correlation'] : null;
        $this->container['average_pearson_correlation_coefficient_over_onset_delays'] = isset($data['average_pearson_correlation_coefficient_over_onset_delays']) ? $data['average_pearson_correlation_coefficient_over_onset_delays'] : null;
        $this->container['cause_number_of_raw_measurements'] = isset($data['cause_number_of_raw_measurements']) ? $data['cause_number_of_raw_measurements'] : null;
        $this->container['correlations_over_durations_of_action'] = isset($data['correlations_over_durations_of_action']) ? $data['correlations_over_durations_of_action'] : null;
        $this->container['correlations_over_onset_delays'] = isset($data['correlations_over_onset_delays']) ? $data['correlations_over_onset_delays'] : null;
        $this->container['correlations_over_durations_of_action_chart_config'] = isset($data['correlations_over_durations_of_action_chart_config']) ? $data['correlations_over_durations_of_action_chart_config'] : null;
        $this->container['correlations_over_onset_delays_chart_config'] = isset($data['correlations_over_onset_delays_chart_config']) ? $data['correlations_over_onset_delays_chart_config'] : null;
        $this->container['number_of_users'] = isset($data['number_of_users']) ? $data['number_of_users'] : null;
        $this->container['raw_cause_measurement_significance'] = isset($data['raw_cause_measurement_significance']) ? $data['raw_cause_measurement_significance'] : null;
        $this->container['raw_effect_measurement_significance'] = isset($data['raw_effect_measurement_significance']) ? $data['raw_effect_measurement_significance'] : null;
        $this->container['reverse_pairs_count'] = isset($data['reverse_pairs_count']) ? $data['reverse_pairs_count'] : null;
        $this->container['vote_statistical_significance'] = isset($data['vote_statistical_significance']) ? $data['vote_statistical_significance'] : null;
        $this->container['aggregate_qm_score'] = isset($data['aggregate_qm_score']) ? $data['aggregate_qm_score'] : null;
        $this->container['forward_pearson_correlation_coefficient'] = isset($data['forward_pearson_correlation_coefficient']) ? $data['forward_pearson_correlation_coefficient'] : null;
        $this->container['number_of_correlations'] = isset($data['number_of_correlations']) ? $data['number_of_correlations'] : null;
        $this->container['vote'] = isset($data['vote']) ? $data['vote'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cause_variable_name'] === null) {
            $invalidProperties[] = "'cause_variable_name' can't be null";
        }
        if ($this->container['effect_variable_name'] === null) {
            $invalidProperties[] = "'effect_variable_name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets average_daily_high_cause
     *
     * @return double
     */
    public function getAverageDailyHighCause()
    {
        return $this->container['average_daily_high_cause'];
    }

    /**
     * Sets average_daily_high_cause
     *
     * @param double $average_daily_high_cause Ex: 4.19
     *
     * @return $this
     */
    public function setAverageDailyHighCause($average_daily_high_cause)
    {
        $this->container['average_daily_high_cause'] = $average_daily_high_cause;

        return $this;
    }

    /**
     * Gets average_daily_low_cause
     *
     * @return double
     */
    public function getAverageDailyLowCause()
    {
        return $this->container['average_daily_low_cause'];
    }

    /**
     * Sets average_daily_low_cause
     *
     * @param double $average_daily_low_cause Ex: 1.97
     *
     * @return $this
     */
    public function setAverageDailyLowCause($average_daily_low_cause)
    {
        $this->container['average_daily_low_cause'] = $average_daily_low_cause;

        return $this;
    }

    /**
     * Gets average_effect
     *
     * @return double
     */
    public function getAverageEffect()
    {
        return $this->container['average_effect'];
    }

    /**
     * Sets average_effect
     *
     * @param double $average_effect Ex: 3.0791054117396
     *
     * @return $this
     */
    public function setAverageEffect($average_effect)
    {
        $this->container['average_effect'] = $average_effect;

        return $this;
    }

    /**
     * Gets average_effect_following_high_cause
     *
     * @return double
     */
    public function getAverageEffectFollowingHighCause()
    {
        return $this->container['average_effect_following_high_cause'];
    }

    /**
     * Sets average_effect_following_high_cause
     *
     * @param double $average_effect_following_high_cause Ex: 3.55
     *
     * @return $this
     */
    public function setAverageEffectFollowingHighCause($average_effect_following_high_cause)
    {
        $this->container['average_effect_following_high_cause'] = $average_effect_following_high_cause;

        return $this;
    }

    /**
     * Gets average_effect_following_low_cause
     *
     * @return double
     */
    public function getAverageEffectFollowingLowCause()
    {
        return $this->container['average_effect_following_low_cause'];
    }

    /**
     * Sets average_effect_following_low_cause
     *
     * @param double $average_effect_following_low_cause Ex: 2.65
     *
     * @return $this
     */
    public function setAverageEffectFollowingLowCause($average_effect_following_low_cause)
    {
        $this->container['average_effect_following_low_cause'] = $average_effect_following_low_cause;

        return $this;
    }

    /**
     * Gets average_forward_pearson_correlation_over_onset_delays
     *
     * @return double
     */
    public function getAverageForwardPearsonCorrelationOverOnsetDelays()
    {
        return $this->container['average_forward_pearson_correlation_over_onset_delays'];
    }

    /**
     * Sets average_forward_pearson_correlation_over_onset_delays
     *
     * @param double $average_forward_pearson_correlation_over_onset_delays Ex: 0.396
     *
     * @return $this
     */
    public function setAverageForwardPearsonCorrelationOverOnsetDelays($average_forward_pearson_correlation_over_onset_delays)
    {
        $this->container['average_forward_pearson_correlation_over_onset_delays'] = $average_forward_pearson_correlation_over_onset_delays;

        return $this;
    }

    /**
     * Gets average_reverse_pearson_correlation_over_onset_delays
     *
     * @return double
     */
    public function getAverageReversePearsonCorrelationOverOnsetDelays()
    {
        return $this->container['average_reverse_pearson_correlation_over_onset_delays'];
    }

    /**
     * Sets average_reverse_pearson_correlation_over_onset_delays
     *
     * @param double $average_reverse_pearson_correlation_over_onset_delays Ex: 0.453667
     *
     * @return $this
     */
    public function setAverageReversePearsonCorrelationOverOnsetDelays($average_reverse_pearson_correlation_over_onset_delays)
    {
        $this->container['average_reverse_pearson_correlation_over_onset_delays'] = $average_reverse_pearson_correlation_over_onset_delays;

        return $this;
    }

    /**
     * Gets average_vote
     *
     * @return float
     */
    public function getAverageVote()
    {
        return $this->container['average_vote'];
    }

    /**
     * Sets average_vote
     *
     * @param float $average_vote Ex: 0.9855
     *
     * @return $this
     */
    public function setAverageVote($average_vote)
    {
        $this->container['average_vote'] = $average_vote;

        return $this;
    }

    /**
     * Gets cause_changes
     *
     * @return int
     */
    public function getCauseChanges()
    {
        return $this->container['cause_changes'];
    }

    /**
     * Sets cause_changes
     *
     * @param int $cause_changes Ex: 164
     *
     * @return $this
     */
    public function setCauseChanges($cause_changes)
    {
        $this->container['cause_changes'] = $cause_changes;

        return $this;
    }

    /**
     * Gets cause_data_source
     *
     * @return \CureDAO\Client\Models\DataSource
     */
    public function getCauseDataSource()
    {
        return $this->container['cause_data_source'];
    }

    /**
     * Sets cause_data_source
     *
     * @param \CureDAO\Client\Models\DataSource $cause_data_source cause_data_source
     *
     * @return $this
     */
    public function setCauseDataSource($cause_data_source)
    {
        $this->container['cause_data_source'] = $cause_data_source;

        return $this;
    }

    /**
     * Gets cause_user_variable_share_user_measurements
     *
     * @return int
     */
    public function getCauseUserVariableShareUserMeasurements()
    {
        return $this->container['cause_user_variable_share_user_measurements'];
    }

    /**
     * Sets cause_user_variable_share_user_measurements
     *
     * @param int $cause_user_variable_share_user_measurements Ex: 1
     *
     * @return $this
     */
    public function setCauseUserVariableShareUserMeasurements($cause_user_variable_share_user_measurements)
    {
        $this->container['cause_user_variable_share_user_measurements'] = $cause_user_variable_share_user_measurements;

        return $this;
    }

    /**
     * Gets cause_variable_category_id
     *
     * @return int
     */
    public function getCauseVariableCategoryId()
    {
        return $this->container['cause_variable_category_id'];
    }

    /**
     * Sets cause_variable_category_id
     *
     * @param int $cause_variable_category_id Ex: 6
     *
     * @return $this
     */
    public function setCauseVariableCategoryId($cause_variable_category_id)
    {
        $this->container['cause_variable_category_id'] = $cause_variable_category_id;

        return $this;
    }

    /**
     * Gets cause_variable_category_name
     *
     * @return string
     */
    public function getCauseVariableCategoryName()
    {
        return $this->container['cause_variable_category_name'];
    }

    /**
     * Sets cause_variable_category_name
     *
     * @param string $cause_variable_category_name Ex: Sleep
     *
     * @return $this
     */
    public function setCauseVariableCategoryName($cause_variable_category_name)
    {
        $this->container['cause_variable_category_name'] = $cause_variable_category_name;

        return $this;
    }

    /**
     * Gets cause_variable_combination_operation
     *
     * @return string
     */
    public function getCauseVariableCombinationOperation()
    {
        return $this->container['cause_variable_combination_operation'];
    }

    /**
     * Sets cause_variable_combination_operation
     *
     * @param string $cause_variable_combination_operation Ex: MEAN
     *
     * @return $this
     */
    public function setCauseVariableCombinationOperation($cause_variable_combination_operation)
    {
        $this->container['cause_variable_combination_operation'] = $cause_variable_combination_operation;

        return $this;
    }

    /**
     * Gets cause_variable_unit_abbreviated_name
     *
     * @return string
     */
    public function getCauseVariableUnitAbbreviatedName()
    {
        return $this->container['cause_variable_unit_abbreviated_name'];
    }

    /**
     * Sets cause_variable_unit_abbreviated_name
     *
     * @param string $cause_variable_unit_abbreviated_name Ex: /5
     *
     * @return $this
     */
    public function setCauseVariableUnitAbbreviatedName($cause_variable_unit_abbreviated_name)
    {
        $this->container['cause_variable_unit_abbreviated_name'] = $cause_variable_unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets cause_variable_id
     *
     * @return int
     */
    public function getCauseVariableId()
    {
        return $this->container['cause_variable_id'];
    }

    /**
     * Sets cause_variable_id
     *
     * @param int $cause_variable_id Ex: 1448
     *
     * @return $this
     */
    public function setCauseVariableId($cause_variable_id)
    {
        $this->container['cause_variable_id'] = $cause_variable_id;

        return $this;
    }

    /**
     * Gets cause_variable_most_common_connector_id
     *
     * @return int
     */
    public function getCauseVariableMostCommonConnectorId()
    {
        return $this->container['cause_variable_most_common_connector_id'];
    }

    /**
     * Sets cause_variable_most_common_connector_id
     *
     * @param int $cause_variable_most_common_connector_id Ex: 6
     *
     * @return $this
     */
    public function setCauseVariableMostCommonConnectorId($cause_variable_most_common_connector_id)
    {
        $this->container['cause_variable_most_common_connector_id'] = $cause_variable_most_common_connector_id;

        return $this;
    }

    /**
     * Gets cause_variable_name
     *
     * @return string
     */
    public function getCauseVariableName()
    {
        return $this->container['cause_variable_name'];
    }

    /**
     * Sets cause_variable_name
     *
     * @param string $cause_variable_name Ex: Sleep Quality
     *
     * @return $this
     */
    public function setCauseVariableName($cause_variable_name)
    {
        $this->container['cause_variable_name'] = $cause_variable_name;

        return $this;
    }

    /**
     * Gets confidence_interval
     *
     * @return double
     */
    public function getConfidenceInterval()
    {
        return $this->container['confidence_interval'];
    }

    /**
     * Sets confidence_interval
     *
     * @param double $confidence_interval Ex: 0.14344467795996
     *
     * @return $this
     */
    public function setConfidenceInterval($confidence_interval)
    {
        $this->container['confidence_interval'] = $confidence_interval;

        return $this;
    }

    /**
     * Gets confidence_level
     *
     * @return string
     */
    public function getConfidenceLevel()
    {
        return $this->container['confidence_level'];
    }

    /**
     * Sets confidence_level
     *
     * @param string $confidence_level Ex: high
     *
     * @return $this
     */
    public function setConfidenceLevel($confidence_level)
    {
        $this->container['confidence_level'] = $confidence_level;

        return $this;
    }

    /**
     * Gets correlation_coefficient
     *
     * @return double
     */
    public function getCorrelationCoefficient()
    {
        return $this->container['correlation_coefficient'];
    }

    /**
     * Sets correlation_coefficient
     *
     * @param double $correlation_coefficient Ex: 0.538
     *
     * @return $this
     */
    public function setCorrelationCoefficient($correlation_coefficient)
    {
        $this->container['correlation_coefficient'] = $correlation_coefficient;

        return $this;
    }

    /**
     * Gets correlation_is_contradictory_to_optimal_values
     *
     * @return bool
     */
    public function getCorrelationIsContradictoryToOptimalValues()
    {
        return $this->container['correlation_is_contradictory_to_optimal_values'];
    }

    /**
     * Sets correlation_is_contradictory_to_optimal_values
     *
     * @param bool $correlation_is_contradictory_to_optimal_values Ex: false
     *
     * @return $this
     */
    public function setCorrelationIsContradictoryToOptimalValues($correlation_is_contradictory_to_optimal_values)
    {
        $this->container['correlation_is_contradictory_to_optimal_values'] = $correlation_is_contradictory_to_optimal_values;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Ex: 2016-12-28 20:47:30 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets critical_t_value
     *
     * @return double
     */
    public function getCriticalTValue()
    {
        return $this->container['critical_t_value'];
    }

    /**
     * Sets critical_t_value
     *
     * @param double $critical_t_value Calculated Statistic: Ex: 1.646
     *
     * @return $this
     */
    public function setCriticalTValue($critical_t_value)
    {
        $this->container['critical_t_value'] = $critical_t_value;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Ex: higher
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets duration_of_action
     *
     * @return int
     */
    public function getDurationOfAction()
    {
        return $this->container['duration_of_action'];
    }

    /**
     * Sets duration_of_action
     *
     * @param int $duration_of_action User-Defined Variable Setting: The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.  Unit: Seconds
     *
     * @return $this
     */
    public function setDurationOfAction($duration_of_action)
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets duration_of_action_in_hours
     *
     * @return float
     */
    public function getDurationOfActionInHours()
    {
        return $this->container['duration_of_action_in_hours'];
    }

    /**
     * Sets duration_of_action_in_hours
     *
     * @param float $duration_of_action_in_hours User-Defined Variable Setting: The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.  Unit: Hours
     *
     * @return $this
     */
    public function setDurationOfActionInHours($duration_of_action_in_hours)
    {
        $this->container['duration_of_action_in_hours'] = $duration_of_action_in_hours;

        return $this;
    }

    /**
     * Gets degrees_of_freedom
     *
     * @return int
     */
    public function getDegreesOfFreedom()
    {
        return $this->container['degrees_of_freedom'];
    }

    /**
     * Sets degrees_of_freedom
     *
     * @param int $degrees_of_freedom Ex: 200
     *
     * @return $this
     */
    public function setDegreesOfFreedom($degrees_of_freedom)
    {
        $this->container['degrees_of_freedom'] = $degrees_of_freedom;

        return $this;
    }

    /**
     * Gets effect_number_of_processed_daily_measurements
     *
     * @return int
     */
    public function getEffectNumberOfProcessedDailyMeasurements()
    {
        return $this->container['effect_number_of_processed_daily_measurements'];
    }

    /**
     * Sets effect_number_of_processed_daily_measurements
     *
     * @param int $effect_number_of_processed_daily_measurements Ex: 145
     *
     * @return $this
     */
    public function setEffectNumberOfProcessedDailyMeasurements($effect_number_of_processed_daily_measurements)
    {
        $this->container['effect_number_of_processed_daily_measurements'] = $effect_number_of_processed_daily_measurements;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error Ex: optimalPearsonProduct is not defined
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets effect_changes
     *
     * @return int
     */
    public function getEffectChanges()
    {
        return $this->container['effect_changes'];
    }

    /**
     * Sets effect_changes
     *
     * @param int $effect_changes Ex: 193
     *
     * @return $this
     */
    public function setEffectChanges($effect_changes)
    {
        $this->container['effect_changes'] = $effect_changes;

        return $this;
    }

    /**
     * Gets effect_data_source
     *
     * @return \CureDAO\Client\Models\DataSource
     */
    public function getEffectDataSource()
    {
        return $this->container['effect_data_source'];
    }

    /**
     * Sets effect_data_source
     *
     * @param \CureDAO\Client\Models\DataSource $effect_data_source effect_data_source
     *
     * @return $this
     */
    public function setEffectDataSource($effect_data_source)
    {
        $this->container['effect_data_source'] = $effect_data_source;

        return $this;
    }

    /**
     * Gets effect_size
     *
     * @return string
     */
    public function getEffectSize()
    {
        return $this->container['effect_size'];
    }

    /**
     * Sets effect_size
     *
     * @param string $effect_size Ex: moderately positive
     *
     * @return $this
     */
    public function setEffectSize($effect_size)
    {
        $this->container['effect_size'] = $effect_size;

        return $this;
    }

    /**
     * Gets effect_unit
     *
     * @return string
     */
    public function getEffectUnit()
    {
        return $this->container['effect_unit'];
    }

    /**
     * Sets effect_unit
     *
     * @param string $effect_unit Ex: /5
     *
     * @return $this
     */
    public function setEffectUnit($effect_unit)
    {
        $this->container['effect_unit'] = $effect_unit;

        return $this;
    }

    /**
     * Gets effect_user_variable_share_user_measurements
     *
     * @return int
     */
    public function getEffectUserVariableShareUserMeasurements()
    {
        return $this->container['effect_user_variable_share_user_measurements'];
    }

    /**
     * Sets effect_user_variable_share_user_measurements
     *
     * @param int $effect_user_variable_share_user_measurements Ex: 1
     *
     * @return $this
     */
    public function setEffectUserVariableShareUserMeasurements($effect_user_variable_share_user_measurements)
    {
        $this->container['effect_user_variable_share_user_measurements'] = $effect_user_variable_share_user_measurements;

        return $this;
    }

    /**
     * Gets effect_variable_category_id
     *
     * @return int
     */
    public function getEffectVariableCategoryId()
    {
        return $this->container['effect_variable_category_id'];
    }

    /**
     * Sets effect_variable_category_id
     *
     * @param int $effect_variable_category_id Ex: 1
     *
     * @return $this
     */
    public function setEffectVariableCategoryId($effect_variable_category_id)
    {
        $this->container['effect_variable_category_id'] = $effect_variable_category_id;

        return $this;
    }

    /**
     * Gets effect_variable_category_name
     *
     * @return string
     */
    public function getEffectVariableCategoryName()
    {
        return $this->container['effect_variable_category_name'];
    }

    /**
     * Sets effect_variable_category_name
     *
     * @param string $effect_variable_category_name Ex: Emotions
     *
     * @return $this
     */
    public function setEffectVariableCategoryName($effect_variable_category_name)
    {
        $this->container['effect_variable_category_name'] = $effect_variable_category_name;

        return $this;
    }

    /**
     * Gets effect_variable_combination_operation
     *
     * @return string
     */
    public function getEffectVariableCombinationOperation()
    {
        return $this->container['effect_variable_combination_operation'];
    }

    /**
     * Sets effect_variable_combination_operation
     *
     * @param string $effect_variable_combination_operation Ex: MEAN
     *
     * @return $this
     */
    public function setEffectVariableCombinationOperation($effect_variable_combination_operation)
    {
        $this->container['effect_variable_combination_operation'] = $effect_variable_combination_operation;

        return $this;
    }

    /**
     * Gets effect_variable_common_alias
     *
     * @return string
     */
    public function getEffectVariableCommonAlias()
    {
        return $this->container['effect_variable_common_alias'];
    }

    /**
     * Sets effect_variable_common_alias
     *
     * @param string $effect_variable_common_alias Ex: Mood_(psychology)
     *
     * @return $this
     */
    public function setEffectVariableCommonAlias($effect_variable_common_alias)
    {
        $this->container['effect_variable_common_alias'] = $effect_variable_common_alias;

        return $this;
    }

    /**
     * Gets effect_variable_unit_abbreviated_name
     *
     * @return string
     */
    public function getEffectVariableUnitAbbreviatedName()
    {
        return $this->container['effect_variable_unit_abbreviated_name'];
    }

    /**
     * Sets effect_variable_unit_abbreviated_name
     *
     * @param string $effect_variable_unit_abbreviated_name Ex: /5
     *
     * @return $this
     */
    public function setEffectVariableUnitAbbreviatedName($effect_variable_unit_abbreviated_name)
    {
        $this->container['effect_variable_unit_abbreviated_name'] = $effect_variable_unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets effect_variable_unit_id
     *
     * @return int
     */
    public function getEffectVariableUnitId()
    {
        return $this->container['effect_variable_unit_id'];
    }

    /**
     * Sets effect_variable_unit_id
     *
     * @param int $effect_variable_unit_id Ex: 10
     *
     * @return $this
     */
    public function setEffectVariableUnitId($effect_variable_unit_id)
    {
        $this->container['effect_variable_unit_id'] = $effect_variable_unit_id;

        return $this;
    }

    /**
     * Gets effect_variable_unit_name
     *
     * @return string
     */
    public function getEffectVariableUnitName()
    {
        return $this->container['effect_variable_unit_name'];
    }

    /**
     * Sets effect_variable_unit_name
     *
     * @param string $effect_variable_unit_name Ex: 1 to 5 Rating
     *
     * @return $this
     */
    public function setEffectVariableUnitName($effect_variable_unit_name)
    {
        $this->container['effect_variable_unit_name'] = $effect_variable_unit_name;

        return $this;
    }

    /**
     * Gets effect_variable_id
     *
     * @return int
     */
    public function getEffectVariableId()
    {
        return $this->container['effect_variable_id'];
    }

    /**
     * Sets effect_variable_id
     *
     * @param int $effect_variable_id Ex: 1398
     *
     * @return $this
     */
    public function setEffectVariableId($effect_variable_id)
    {
        $this->container['effect_variable_id'] = $effect_variable_id;

        return $this;
    }

    /**
     * Gets effect_variable_most_common_connector_id
     *
     * @return int
     */
    public function getEffectVariableMostCommonConnectorId()
    {
        return $this->container['effect_variable_most_common_connector_id'];
    }

    /**
     * Sets effect_variable_most_common_connector_id
     *
     * @param int $effect_variable_most_common_connector_id Ex: 10
     *
     * @return $this
     */
    public function setEffectVariableMostCommonConnectorId($effect_variable_most_common_connector_id)
    {
        $this->container['effect_variable_most_common_connector_id'] = $effect_variable_most_common_connector_id;

        return $this;
    }

    /**
     * Gets effect_variable_name
     *
     * @return string
     */
    public function getEffectVariableName()
    {
        return $this->container['effect_variable_name'];
    }

    /**
     * Sets effect_variable_name
     *
     * @param string $effect_variable_name Ex: Overall Mood
     *
     * @return $this
     */
    public function setEffectVariableName($effect_variable_name)
    {
        $this->container['effect_variable_name'] = $effect_variable_name;

        return $this;
    }

    /**
     * Gets experiment_end_time
     *
     * @return string
     */
    public function getExperimentEndTime()
    {
        return $this->container['experiment_end_time'];
    }

    /**
     * Sets experiment_end_time
     *
     * @param string $experiment_end_time Ex: 2014-07-30 12:50:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setExperimentEndTime($experiment_end_time)
    {
        $this->container['experiment_end_time'] = $experiment_end_time;

        return $this;
    }

    /**
     * Gets experiment_start_time
     *
     * @return string
     */
    public function getExperimentStartTime()
    {
        return $this->container['experiment_start_time'];
    }

    /**
     * Sets experiment_start_time
     *
     * @param string $experiment_start_time Ex: 2012-05-06 21:15:00 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setExperimentStartTime($experiment_start_time)
    {
        $this->container['experiment_start_time'] = $experiment_start_time;

        return $this;
    }

    /**
     * Gets forward_spearman_correlation_coefficient
     *
     * @return double
     */
    public function getForwardSpearmanCorrelationCoefficient()
    {
        return $this->container['forward_spearman_correlation_coefficient'];
    }

    /**
     * Sets forward_spearman_correlation_coefficient
     *
     * @param double $forward_spearman_correlation_coefficient Ex: 0.528359
     *
     * @return $this
     */
    public function setForwardSpearmanCorrelationCoefficient($forward_spearman_correlation_coefficient)
    {
        $this->container['forward_spearman_correlation_coefficient'] = $forward_spearman_correlation_coefficient;

        return $this;
    }

    /**
     * Gets number_of_pairs
     *
     * @return int
     */
    public function getNumberOfPairs()
    {
        return $this->container['number_of_pairs'];
    }

    /**
     * Sets number_of_pairs
     *
     * @param int $number_of_pairs Ex: 298
     *
     * @return $this
     */
    public function setNumberOfPairs($number_of_pairs)
    {
        $this->container['number_of_pairs'] = $number_of_pairs;

        return $this;
    }

    /**
     * Gets onset_delay
     *
     * @return int
     */
    public function getOnsetDelay()
    {
        return $this->container['onset_delay'];
    }

    /**
     * Sets onset_delay
     *
     * @param int $onset_delay Ex: 0
     *
     * @return $this
     */
    public function setOnsetDelay($onset_delay)
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets onset_delay_in_hours
     *
     * @return float
     */
    public function getOnsetDelayInHours()
    {
        return $this->container['onset_delay_in_hours'];
    }

    /**
     * Sets onset_delay_in_hours
     *
     * @param float $onset_delay_in_hours Ex: 0
     *
     * @return $this
     */
    public function setOnsetDelayInHours($onset_delay_in_hours)
    {
        $this->container['onset_delay_in_hours'] = $onset_delay_in_hours;

        return $this;
    }

    /**
     * Gets onset_delay_with_strongest_pearson_correlation
     *
     * @return int
     */
    public function getOnsetDelayWithStrongestPearsonCorrelation()
    {
        return $this->container['onset_delay_with_strongest_pearson_correlation'];
    }

    /**
     * Sets onset_delay_with_strongest_pearson_correlation
     *
     * @param int $onset_delay_with_strongest_pearson_correlation Ex: -86400
     *
     * @return $this
     */
    public function setOnsetDelayWithStrongestPearsonCorrelation($onset_delay_with_strongest_pearson_correlation)
    {
        $this->container['onset_delay_with_strongest_pearson_correlation'] = $onset_delay_with_strongest_pearson_correlation;

        return $this;
    }

    /**
     * Gets onset_delay_with_strongest_pearson_correlation_in_hours
     *
     * @return float
     */
    public function getOnsetDelayWithStrongestPearsonCorrelationInHours()
    {
        return $this->container['onset_delay_with_strongest_pearson_correlation_in_hours'];
    }

    /**
     * Sets onset_delay_with_strongest_pearson_correlation_in_hours
     *
     * @param float $onset_delay_with_strongest_pearson_correlation_in_hours Ex: -24
     *
     * @return $this
     */
    public function setOnsetDelayWithStrongestPearsonCorrelationInHours($onset_delay_with_strongest_pearson_correlation_in_hours)
    {
        $this->container['onset_delay_with_strongest_pearson_correlation_in_hours'] = $onset_delay_with_strongest_pearson_correlation_in_hours;

        return $this;
    }

    /**
     * Gets optimal_pearson_product
     *
     * @return double
     */
    public function getOptimalPearsonProduct()
    {
        return $this->container['optimal_pearson_product'];
    }

    /**
     * Sets optimal_pearson_product
     *
     * @param double $optimal_pearson_product Ex: 0.68582816186982
     *
     * @return $this
     */
    public function setOptimalPearsonProduct($optimal_pearson_product)
    {
        $this->container['optimal_pearson_product'] = $optimal_pearson_product;

        return $this;
    }

    /**
     * Gets outcome_filling_value
     *
     * @return int
     */
    public function getOutcomeFillingValue()
    {
        return $this->container['outcome_filling_value'];
    }

    /**
     * Sets outcome_filling_value
     *
     * @param int $outcome_filling_value User-Defined Variable Setting: Ex: -1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setOutcomeFillingValue($outcome_filling_value)
    {
        $this->container['outcome_filling_value'] = $outcome_filling_value;

        return $this;
    }

    /**
     * Gets outcome_maximum_allowed_value
     *
     * @return double
     */
    public function getOutcomeMaximumAllowedValue()
    {
        return $this->container['outcome_maximum_allowed_value'];
    }

    /**
     * Sets outcome_maximum_allowed_value
     *
     * @param double $outcome_maximum_allowed_value User-Defined Variable Setting: Ex: 23. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setOutcomeMaximumAllowedValue($outcome_maximum_allowed_value)
    {
        $this->container['outcome_maximum_allowed_value'] = $outcome_maximum_allowed_value;

        return $this;
    }

    /**
     * Gets outcome_minimum_allowed_value
     *
     * @return double
     */
    public function getOutcomeMinimumAllowedValue()
    {
        return $this->container['outcome_minimum_allowed_value'];
    }

    /**
     * Sets outcome_minimum_allowed_value
     *
     * @param double $outcome_minimum_allowed_value User-Defined Variable Setting: Ex: 0.1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setOutcomeMinimumAllowedValue($outcome_minimum_allowed_value)
    {
        $this->container['outcome_minimum_allowed_value'] = $outcome_minimum_allowed_value;

        return $this;
    }

    /**
     * Gets pearson_correlation_with_no_onset_delay
     *
     * @return double
     */
    public function getPearsonCorrelationWithNoOnsetDelay()
    {
        return $this->container['pearson_correlation_with_no_onset_delay'];
    }

    /**
     * Sets pearson_correlation_with_no_onset_delay
     *
     * @param double $pearson_correlation_with_no_onset_delay Ex: 0.477
     *
     * @return $this
     */
    public function setPearsonCorrelationWithNoOnsetDelay($pearson_correlation_with_no_onset_delay)
    {
        $this->container['pearson_correlation_with_no_onset_delay'] = $pearson_correlation_with_no_onset_delay;

        return $this;
    }

    /**
     * Gets predictive_pearson_correlation
     *
     * @return double
     */
    public function getPredictivePearsonCorrelation()
    {
        return $this->container['predictive_pearson_correlation'];
    }

    /**
     * Sets predictive_pearson_correlation
     *
     * @param double $predictive_pearson_correlation Ex: 0.538
     *
     * @return $this
     */
    public function setPredictivePearsonCorrelation($predictive_pearson_correlation)
    {
        $this->container['predictive_pearson_correlation'] = $predictive_pearson_correlation;

        return $this;
    }

    /**
     * Gets predictive_pearson_correlation_coefficient
     *
     * @return double
     */
    public function getPredictivePearsonCorrelationCoefficient()
    {
        return $this->container['predictive_pearson_correlation_coefficient'];
    }

    /**
     * Sets predictive_pearson_correlation_coefficient
     *
     * @param double $predictive_pearson_correlation_coefficient Ex: 0.538
     *
     * @return $this
     */
    public function setPredictivePearsonCorrelationCoefficient($predictive_pearson_correlation_coefficient)
    {
        $this->container['predictive_pearson_correlation_coefficient'] = $predictive_pearson_correlation_coefficient;

        return $this;
    }

    /**
     * Gets predictor_data_sources
     *
     * @return string
     */
    public function getPredictorDataSources()
    {
        return $this->container['predictor_data_sources'];
    }

    /**
     * Sets predictor_data_sources
     *
     * @param string $predictor_data_sources Ex: RescueTime
     *
     * @return $this
     */
    public function setPredictorDataSources($predictor_data_sources)
    {
        $this->container['predictor_data_sources'] = $predictor_data_sources;

        return $this;
    }

    /**
     * Gets predictor_filling_value
     *
     * @return int
     */
    public function getPredictorFillingValue()
    {
        return $this->container['predictor_filling_value'];
    }

    /**
     * Sets predictor_filling_value
     *
     * @param int $predictor_filling_value Ex: -1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setPredictorFillingValue($predictor_filling_value)
    {
        $this->container['predictor_filling_value'] = $predictor_filling_value;

        return $this;
    }

    /**
     * Gets predictor_maximum_allowed_value
     *
     * @return double
     */
    public function getPredictorMaximumAllowedValue()
    {
        return $this->container['predictor_maximum_allowed_value'];
    }

    /**
     * Sets predictor_maximum_allowed_value
     *
     * @param double $predictor_maximum_allowed_value Ex: 200. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setPredictorMaximumAllowedValue($predictor_maximum_allowed_value)
    {
        $this->container['predictor_maximum_allowed_value'] = $predictor_maximum_allowed_value;

        return $this;
    }

    /**
     * Gets predictor_minimum_allowed_value
     *
     * @return double
     */
    public function getPredictorMinimumAllowedValue()
    {
        return $this->container['predictor_minimum_allowed_value'];
    }

    /**
     * Sets predictor_minimum_allowed_value
     *
     * @param double $predictor_minimum_allowed_value Ex: 30. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setPredictorMinimumAllowedValue($predictor_minimum_allowed_value)
    {
        $this->container['predictor_minimum_allowed_value'] = $predictor_minimum_allowed_value;

        return $this;
    }

    /**
     * Gets predicts_high_effect_change
     *
     * @return int
     */
    public function getPredictsHighEffectChange()
    {
        return $this->container['predicts_high_effect_change'];
    }

    /**
     * Sets predicts_high_effect_change
     *
     * @param int $predicts_high_effect_change Ex: 17. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setPredictsHighEffectChange($predicts_high_effect_change)
    {
        $this->container['predicts_high_effect_change'] = $predicts_high_effect_change;

        return $this;
    }

    /**
     * Gets predicts_low_effect_change
     *
     * @return int
     */
    public function getPredictsLowEffectChange()
    {
        return $this->container['predicts_low_effect_change'];
    }

    /**
     * Sets predicts_low_effect_change
     *
     * @param int $predicts_low_effect_change Ex: -11. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setPredictsLowEffectChange($predicts_low_effect_change)
    {
        $this->container['predicts_low_effect_change'] = $predicts_low_effect_change;

        return $this;
    }

    /**
     * Gets p_value
     *
     * @return double
     */
    public function getPValue()
    {
        return $this->container['p_value'];
    }

    /**
     * Sets p_value
     *
     * @param double $p_value Ex: 0.39628900511586
     *
     * @return $this
     */
    public function setPValue($p_value)
    {
        $this->container['p_value'] = $p_value;

        return $this;
    }

    /**
     * Gets qm_score
     *
     * @return double
     */
    public function getQmScore()
    {
        return $this->container['qm_score'];
    }

    /**
     * Sets qm_score
     *
     * @param double $qm_score Ex: 0.528
     *
     * @return $this
     */
    public function setQmScore($qm_score)
    {
        $this->container['qm_score'] = $qm_score;

        return $this;
    }

    /**
     * Gets reverse_pearson_correlation_coefficient
     *
     * @return double
     */
    public function getReversePearsonCorrelationCoefficient()
    {
        return $this->container['reverse_pearson_correlation_coefficient'];
    }

    /**
     * Sets reverse_pearson_correlation_coefficient
     *
     * @param double $reverse_pearson_correlation_coefficient Ex: 0.01377184270977
     *
     * @return $this
     */
    public function setReversePearsonCorrelationCoefficient($reverse_pearson_correlation_coefficient)
    {
        $this->container['reverse_pearson_correlation_coefficient'] = $reverse_pearson_correlation_coefficient;

        return $this;
    }

    /**
     * Gets share_user_measurements
     *
     * @return bool
     */
    public function getShareUserMeasurements()
    {
        return $this->container['share_user_measurements'];
    }

    /**
     * Sets share_user_measurements
     *
     * @param bool $share_user_measurements Would you like to make this study publicly visible?
     *
     * @return $this
     */
    public function setShareUserMeasurements($share_user_measurements)
    {
        $this->container['share_user_measurements'] = $share_user_measurements;

        return $this;
    }

    /**
     * Gets sharing_description
     *
     * @return string
     */
    public function getSharingDescription()
    {
        return $this->container['sharing_description'];
    }

    /**
     * Sets sharing_description
     *
     * @param string $sharing_description Ex: N1 Study: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setSharingDescription($sharing_description)
    {
        $this->container['sharing_description'] = $sharing_description;

        return $this;
    }

    /**
     * Gets sharing_title
     *
     * @return string
     */
    public function getSharingTitle()
    {
        return $this->container['sharing_title'];
    }

    /**
     * Sets sharing_title
     *
     * @param string $sharing_title Ex: N1 Study: Sleep Quality Predicts Higher Overall Mood
     *
     * @return $this
     */
    public function setSharingTitle($sharing_title)
    {
        $this->container['sharing_title'] = $sharing_title;

        return $this;
    }

    /**
     * Gets significant_difference
     *
     * @return bool
     */
    public function getSignificantDifference()
    {
        return $this->container['significant_difference'];
    }

    /**
     * Sets significant_difference
     *
     * @param bool $significant_difference Ex: 1
     *
     * @return $this
     */
    public function setSignificantDifference($significant_difference)
    {
        $this->container['significant_difference'] = $significant_difference;

        return $this;
    }

    /**
     * Gets statistical_significance
     *
     * @return double
     */
    public function getStatisticalSignificance()
    {
        return $this->container['statistical_significance'];
    }

    /**
     * Sets statistical_significance
     *
     * @param double $statistical_significance Ex: 0.9813
     *
     * @return $this
     */
    public function setStatisticalSignificance($statistical_significance)
    {
        $this->container['statistical_significance'] = $statistical_significance;

        return $this;
    }

    /**
     * Gets strength_level
     *
     * @return string
     */
    public function getStrengthLevel()
    {
        return $this->container['strength_level'];
    }

    /**
     * Sets strength_level
     *
     * @param string $strength_level Ex: moderate
     *
     * @return $this
     */
    public function setStrengthLevel($strength_level)
    {
        $this->container['strength_level'] = $strength_level;

        return $this;
    }

    /**
     * Gets strongest_pearson_correlation_coefficient
     *
     * @return double
     */
    public function getStrongestPearsonCorrelationCoefficient()
    {
        return $this->container['strongest_pearson_correlation_coefficient'];
    }

    /**
     * Sets strongest_pearson_correlation_coefficient
     *
     * @param double $strongest_pearson_correlation_coefficient Ex: 0.613
     *
     * @return $this
     */
    public function setStrongestPearsonCorrelationCoefficient($strongest_pearson_correlation_coefficient)
    {
        $this->container['strongest_pearson_correlation_coefficient'] = $strongest_pearson_correlation_coefficient;

        return $this;
    }

    /**
     * Gets study_html
     *
     * @return \CureDAO\Client\Models\StudyHtml
     */
    public function getStudyHtml()
    {
        return $this->container['study_html'];
    }

    /**
     * Sets study_html
     *
     * @param \CureDAO\Client\Models\StudyHtml $study_html study_html
     *
     * @return $this
     */
    public function setStudyHtml($study_html)
    {
        $this->container['study_html'] = $study_html;

        return $this;
    }

    /**
     * Gets study_images
     *
     * @return \CureDAO\Client\Models\StudyImages
     */
    public function getStudyImages()
    {
        return $this->container['study_images'];
    }

    /**
     * Sets study_images
     *
     * @param \CureDAO\Client\Models\StudyImages $study_images study_images
     *
     * @return $this
     */
    public function setStudyImages($study_images)
    {
        $this->container['study_images'] = $study_images;

        return $this;
    }

    /**
     * Gets study_links
     *
     * @return \CureDAO\Client\Models\StudyLinks
     */
    public function getStudyLinks()
    {
        return $this->container['study_links'];
    }

    /**
     * Sets study_links
     *
     * @param \CureDAO\Client\Models\StudyLinks $study_links study_links
     *
     * @return $this
     */
    public function setStudyLinks($study_links)
    {
        $this->container['study_links'] = $study_links;

        return $this;
    }

    /**
     * Gets study_text
     *
     * @return \CureDAO\Client\Models\StudyText
     */
    public function getStudyText()
    {
        return $this->container['study_text'];
    }

    /**
     * Sets study_text
     *
     * @param \CureDAO\Client\Models\StudyText $study_text study_text
     *
     * @return $this
     */
    public function setStudyText($study_text)
    {
        $this->container['study_text'] = $study_text;

        return $this;
    }

    /**
     * Gets t_value
     *
     * @return double
     */
    public function getTValue()
    {
        return $this->container['t_value'];
    }

    /**
     * Sets t_value
     *
     * @param double $t_value Ex: 9.6986079652717
     *
     * @return $this
     */
    public function setTValue($t_value)
    {
        $this->container['t_value'] = $t_value;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Ex: 2017-05-06 15:40:38 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id Ex: 230
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_vote
     *
     * @return int
     */
    public function getUserVote()
    {
        return $this->container['user_vote'];
    }

    /**
     * Sets user_vote
     *
     * @param int $user_vote Ex: 1
     *
     * @return $this
     */
    public function setUserVote($user_vote)
    {
        $this->container['user_vote'] = $user_vote;

        return $this;
    }

    /**
     * Gets value_predicting_high_outcome
     *
     * @return double
     */
    public function getValuePredictingHighOutcome()
    {
        return $this->container['value_predicting_high_outcome'];
    }

    /**
     * Sets value_predicting_high_outcome
     *
     * @param double $value_predicting_high_outcome Ex: 4.14
     *
     * @return $this
     */
    public function setValuePredictingHighOutcome($value_predicting_high_outcome)
    {
        $this->container['value_predicting_high_outcome'] = $value_predicting_high_outcome;

        return $this;
    }

    /**
     * Gets value_predicting_low_outcome
     *
     * @return double
     */
    public function getValuePredictingLowOutcome()
    {
        return $this->container['value_predicting_low_outcome'];
    }

    /**
     * Sets value_predicting_low_outcome
     *
     * @param double $value_predicting_low_outcome Ex: 3.03
     *
     * @return $this
     */
    public function setValuePredictingLowOutcome($value_predicting_low_outcome)
    {
        $this->container['value_predicting_low_outcome'] = $value_predicting_low_outcome;

        return $this;
    }

    /**
     * Gets outcome_data_sources
     *
     * @return string
     */
    public function getOutcomeDataSources()
    {
        return $this->container['outcome_data_sources'];
    }

    /**
     * Sets outcome_data_sources
     *
     * @param string $outcome_data_sources Sources used to collect data for the outcome variable
     *
     * @return $this
     */
    public function setOutcomeDataSources($outcome_data_sources)
    {
        $this->container['outcome_data_sources'] = $outcome_data_sources;

        return $this;
    }

    /**
     * Gets principal_investigator
     *
     * @return string
     */
    public function getPrincipalInvestigator()
    {
        return $this->container['principal_investigator'];
    }

    /**
     * Sets principal_investigator
     *
     * @param string $principal_investigator Mike Sinn
     *
     * @return $this
     */
    public function setPrincipalInvestigator($principal_investigator)
    {
        $this->container['principal_investigator'] = $principal_investigator;

        return $this;
    }

    /**
     * Gets reverse_correlation
     *
     * @return float
     */
    public function getReverseCorrelation()
    {
        return $this->container['reverse_correlation'];
    }

    /**
     * Sets reverse_correlation
     *
     * @param float $reverse_correlation Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation.
     *
     * @return $this
     */
    public function setReverseCorrelation($reverse_correlation)
    {
        $this->container['reverse_correlation'] = $reverse_correlation;

        return $this;
    }

    /**
     * Gets average_pearson_correlation_coefficient_over_onset_delays
     *
     * @return float
     */
    public function getAveragePearsonCorrelationCoefficientOverOnsetDelays()
    {
        return $this->container['average_pearson_correlation_coefficient_over_onset_delays'];
    }

    /**
     * Sets average_pearson_correlation_coefficient_over_onset_delays
     *
     * @param float $average_pearson_correlation_coefficient_over_onset_delays Ex:
     *
     * @return $this
     */
    public function setAveragePearsonCorrelationCoefficientOverOnsetDelays($average_pearson_correlation_coefficient_over_onset_delays)
    {
        $this->container['average_pearson_correlation_coefficient_over_onset_delays'] = $average_pearson_correlation_coefficient_over_onset_delays;

        return $this;
    }

    /**
     * Gets cause_number_of_raw_measurements
     *
     * @return int
     */
    public function getCauseNumberOfRawMeasurements()
    {
        return $this->container['cause_number_of_raw_measurements'];
    }

    /**
     * Sets cause_number_of_raw_measurements
     *
     * @param int $cause_number_of_raw_measurements Ex: 14764
     *
     * @return $this
     */
    public function setCauseNumberOfRawMeasurements($cause_number_of_raw_measurements)
    {
        $this->container['cause_number_of_raw_measurements'] = $cause_number_of_raw_measurements;

        return $this;
    }

    /**
     * Gets correlations_over_durations_of_action
     *
     * @return null[]
     */
    public function getCorrelationsOverDurationsOfAction()
    {
        return $this->container['correlations_over_durations_of_action'];
    }

    /**
     * Sets correlations_over_durations_of_action
     *
     * @param null[] $correlations_over_durations_of_action Correlations calculated with various duration of action hyper-parameters
     *
     * @return $this
     */
    public function setCorrelationsOverDurationsOfAction($correlations_over_durations_of_action)
    {
        $this->container['correlations_over_durations_of_action'] = $correlations_over_durations_of_action;

        return $this;
    }

    /**
     * Gets correlations_over_onset_delays
     *
     * @return null[]
     */
    public function getCorrelationsOverOnsetDelays()
    {
        return $this->container['correlations_over_onset_delays'];
    }

    /**
     * Sets correlations_over_onset_delays
     *
     * @param null[] $correlations_over_onset_delays Correlations calculated with various onset delay hyper-parameters
     *
     * @return $this
     */
    public function setCorrelationsOverOnsetDelays($correlations_over_onset_delays)
    {
        $this->container['correlations_over_onset_delays'] = $correlations_over_onset_delays;

        return $this;
    }

    /**
     * Gets correlations_over_durations_of_action_chart_config
     *
     * @return object
     */
    public function getCorrelationsOverDurationsOfActionChartConfig()
    {
        return $this->container['correlations_over_durations_of_action_chart_config'];
    }

    /**
     * Sets correlations_over_durations_of_action_chart_config
     *
     * @param object $correlations_over_durations_of_action_chart_config Highchart config illustrating correlations calculated with various duration of action hyper-parameters
     *
     * @return $this
     */
    public function setCorrelationsOverDurationsOfActionChartConfig($correlations_over_durations_of_action_chart_config)
    {
        $this->container['correlations_over_durations_of_action_chart_config'] = $correlations_over_durations_of_action_chart_config;

        return $this;
    }

    /**
     * Gets correlations_over_onset_delays_chart_config
     *
     * @return object
     */
    public function getCorrelationsOverOnsetDelaysChartConfig()
    {
        return $this->container['correlations_over_onset_delays_chart_config'];
    }

    /**
     * Sets correlations_over_onset_delays_chart_config
     *
     * @param object $correlations_over_onset_delays_chart_config Highchart config illustrating correlations calculated with various onset delay hyper-parameters
     *
     * @return $this
     */
    public function setCorrelationsOverOnsetDelaysChartConfig($correlations_over_onset_delays_chart_config)
    {
        $this->container['correlations_over_onset_delays_chart_config'] = $correlations_over_onset_delays_chart_config;

        return $this;
    }

    /**
     * Gets number_of_users
     *
     * @return float
     */
    public function getNumberOfUsers()
    {
        return $this->container['number_of_users'];
    }

    /**
     * Sets number_of_users
     *
     * @param float $number_of_users Ex: 1
     *
     * @return $this
     */
    public function setNumberOfUsers($number_of_users)
    {
        $this->container['number_of_users'] = $number_of_users;

        return $this;
    }

    /**
     * Gets raw_cause_measurement_significance
     *
     * @return double
     */
    public function getRawCauseMeasurementSignificance()
    {
        return $this->container['raw_cause_measurement_significance'];
    }

    /**
     * Sets raw_cause_measurement_significance
     *
     * @param double $raw_cause_measurement_significance Ex: 1
     *
     * @return $this
     */
    public function setRawCauseMeasurementSignificance($raw_cause_measurement_significance)
    {
        $this->container['raw_cause_measurement_significance'] = $raw_cause_measurement_significance;

        return $this;
    }

    /**
     * Gets raw_effect_measurement_significance
     *
     * @return double
     */
    public function getRawEffectMeasurementSignificance()
    {
        return $this->container['raw_effect_measurement_significance'];
    }

    /**
     * Sets raw_effect_measurement_significance
     *
     * @param double $raw_effect_measurement_significance Ex: 1
     *
     * @return $this
     */
    public function setRawEffectMeasurementSignificance($raw_effect_measurement_significance)
    {
        $this->container['raw_effect_measurement_significance'] = $raw_effect_measurement_significance;

        return $this;
    }

    /**
     * Gets reverse_pairs_count
     *
     * @return string
     */
    public function getReversePairsCount()
    {
        return $this->container['reverse_pairs_count'];
    }

    /**
     * Sets reverse_pairs_count
     *
     * @param string $reverse_pairs_count Ex: 1
     *
     * @return $this
     */
    public function setReversePairsCount($reverse_pairs_count)
    {
        $this->container['reverse_pairs_count'] = $reverse_pairs_count;

        return $this;
    }

    /**
     * Gets vote_statistical_significance
     *
     * @return int
     */
    public function getVoteStatisticalSignificance()
    {
        return $this->container['vote_statistical_significance'];
    }

    /**
     * Sets vote_statistical_significance
     *
     * @param int $vote_statistical_significance Ex: 1
     *
     * @return $this
     */
    public function setVoteStatisticalSignificance($vote_statistical_significance)
    {
        $this->container['vote_statistical_significance'] = $vote_statistical_significance;

        return $this;
    }

    /**
     * Gets aggregate_qm_score
     *
     * @return double
     */
    public function getAggregateQmScore()
    {
        return $this->container['aggregate_qm_score'];
    }

    /**
     * Sets aggregate_qm_score
     *
     * @param double $aggregate_qm_score Ex: 0.011598441286655
     *
     * @return $this
     */
    public function setAggregateQmScore($aggregate_qm_score)
    {
        $this->container['aggregate_qm_score'] = $aggregate_qm_score;

        return $this;
    }

    /**
     * Gets forward_pearson_correlation_coefficient
     *
     * @return double
     */
    public function getForwardPearsonCorrelationCoefficient()
    {
        return $this->container['forward_pearson_correlation_coefficient'];
    }

    /**
     * Sets forward_pearson_correlation_coefficient
     *
     * @param double $forward_pearson_correlation_coefficient Ex: 0.0333
     *
     * @return $this
     */
    public function setForwardPearsonCorrelationCoefficient($forward_pearson_correlation_coefficient)
    {
        $this->container['forward_pearson_correlation_coefficient'] = $forward_pearson_correlation_coefficient;

        return $this;
    }

    /**
     * Gets number_of_correlations
     *
     * @return int
     */
    public function getNumberOfCorrelations()
    {
        return $this->container['number_of_correlations'];
    }

    /**
     * Sets number_of_correlations
     *
     * @param int $number_of_correlations Ex: 6
     *
     * @return $this
     */
    public function setNumberOfCorrelations($number_of_correlations)
    {
        $this->container['number_of_correlations'] = $number_of_correlations;

        return $this;
    }

    /**
     * Gets vote
     *
     * @return float
     */
    public function getVote()
    {
        return $this->container['vote'];
    }

    /**
     * Sets vote
     *
     * @param float $vote Ex: 1 or 0
     *
     * @return $this
     */
    public function setVote($vote)
    {
        $this->container['vote'] = $vote;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
