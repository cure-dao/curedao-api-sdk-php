<?php
/**
 * Variable
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Variable Class Doc Comment
 *
 */
class Variable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Variable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_array' => '\CureDAO\Client\Model\TrackingReminderNotificationAction[]',
        'alias' => 'string',
        'available_units' => '\CureDAO\Client\Model\Unit[]',
        'best_study_link' => 'string',
        'best_study_card' => '\CureDAO\Client\Model\Card',
        'best_user_study_link' => 'string',
        'best_user_study_card' => '\CureDAO\Client\Model\Card',
        'best_population_study_link' => 'string',
        'best_population_study_card' => '\CureDAO\Client\Model\Card',
        'optimal_value_message' => 'string',
        'common_optimal_value_message' => 'string',
        'user_optimal_value_message' => 'string',
        'card' => '\CureDAO\Client\Model\Card',
        'cause_only' => 'bool',
        'charts' => '\CureDAO\Client\Model\VariableCharts',
        'charts_link_dynamic' => 'string',
        'charts_link_email' => 'string',
        'charts_link_facebook' => 'string',
        'charts_link_google' => 'string',
        'charts_link_static' => 'string',
        'charts_link_twitter' => 'string',
        'child_common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'child_user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'client_id' => 'string',
        'combination_operation' => 'string',
        'common_alias' => 'string',
        'common_tagged_variables' => '\CureDAO\Client\Model\Variable[]',
        'common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'created_at' => 'string',
        'data_source_names' => 'string',
        'data_sources' => '\CureDAO\Client\Model\DataSource[]',
        'description' => 'string',
        'display_name' => 'string',
        'duration_of_action' => 'int',
        'duration_of_action_in_hours' => 'float',
        'earliest_filling_time' => 'int',
        'earliest_measurement_time' => 'int',
        'earliest_source_time' => 'int',
        'error_message' => 'string',
        'experiment_end_time' => 'string',
        'experiment_start_time' => 'string',
        'filling_type' => 'string',
        'filling_value' => 'float',
        'icon_icon' => 'string',
        'id' => 'int',
        'image_url' => 'string',
        'informational_url' => 'string',
        'ingredient_of_common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'ingredient_common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'ingredient_of_user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'ingredient_user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'input_type' => 'string',
        'ion_icon' => 'string',
        'joined_common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'joined_user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'join_with' => 'int',
        'kurtosis' => 'float',
        'last_processed_daily_value' => 'double',
        'last_successful_update_time' => 'string',
        'last_value' => 'float',
        'latest_filling_time' => 'int',
        'latest_measurement_time' => 'int',
        'latest_source_time' => 'int',
        'latest_user_measurement_time' => 'int',
        'latitude' => 'float',
        'location' => 'string',
        'longitude' => 'float',
        'manual_tracking' => 'bool',
        'maximum_allowed_daily_value' => 'float',
        'maximum_allowed_value' => 'float',
        'maximum_recorded_daily_value' => 'float',
        'maximum_recorded_value' => 'double',
        'mean' => 'float',
        'measurements_at_last_analysis' => 'int',
        'median' => 'float',
        'minimum_allowed_value' => 'float',
        'minimum_allowed_daily_value' => 'float',
        'minimum_non_zero_value' => 'float',
        'minimum_recorded_value' => 'float',
        'most_common_connector_id' => 'int',
        'most_common_original_unit_id' => 'int',
        'most_common_unit_id' => 'int',
        'most_common_value' => 'float',
        'name' => 'string',
        'number_of_aggregate_correlations_as_cause' => 'int',
        'number_of_aggregate_correlations_as_effect' => 'int',
        'number_of_changes' => 'int',
        'number_of_correlations' => 'int',
        'number_of_correlations_as_cause' => 'int',
        'number_of_correlations_as_effect' => 'int',
        'number_of_processed_daily_measurements' => 'int',
        'number_of_raw_measurements' => 'int',
        'number_of_tracking_reminders' => 'int',
        'number_of_unique_daily_values' => 'float',
        'number_of_unique_values' => 'int',
        'number_of_user_correlations_as_cause' => 'int',
        'number_of_user_correlations_as_effect' => 'int',
        'number_of_user_variables' => 'int',
        'onset_delay' => 'int',
        'onset_delay_in_hours' => 'double',
        'outcome' => 'bool',
        'outcome_of_interest' => 'bool',
        'parent_common_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'parent_user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'png_path' => 'string',
        'png_url' => 'string',
        'predictor_of_interest' => 'int',
        'price' => 'double',
        'product_url' => 'string',
        'public' => 'bool',
        'question' => 'string',
        'long_question' => 'string',
        'raw_measurements_at_last_analysis' => 'int',
        'second_most_common_value' => 'double',
        'second_to_last_value' => 'double',
        'share_user_measurements' => 'bool',
        'skewness' => 'float',
        'standard_deviation' => 'double',
        'status' => 'string',
        'subtitle' => 'string',
        'svg_url' => 'string',
        'third_most_common_value' => 'double',
        'third_to_last_value' => 'double',
        'tracking_instructions' => 'string',
        'tracking_instructions_card' => '\CureDAO\Client\Model\Card',
        'unit' => '\CureDAO\Client\Model\Unit',
        'unit_abbreviated_name' => 'string',
        'unit_category_id' => 'int',
        'unit_category_name' => 'string',
        'unit_id' => 'int',
        'unit_name' => 'string',
        'upc' => 'string',
        'updated' => 'int',
        'updated_at' => 'string',
        'updated_time' => 'string',
        'user_id' => 'int',
        'user_tagged_variables' => '\CureDAO\Client\Model\Variable[]',
        'user_tag_variables' => '\CureDAO\Client\Model\Variable[]',
        'user_variable_unit_abbreviated_name' => 'string',
        'user_variable_unit_category_id' => 'int',
        'user_variable_unit_category_name' => 'string',
        'user_variable_unit_id' => 'int',
        'user_variable_unit_name' => 'string',
        'variable_category' => '\CureDAO\Client\Model\VariableCategory',
        'joined_variables' => '\CureDAO\Client\Model\Variable[]',
        'valence' => 'string',
        'variable_category_id' => 'int',
        'variable_category_name' => 'string',
        'variable_id' => 'int',
        'variable_name' => 'string',
        'variance' => 'double',
        'wikipedia_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_array' => null,
        'alias' => null,
        'available_units' => null,
        'best_study_link' => null,
        'best_study_card' => null,
        'best_user_study_link' => null,
        'best_user_study_card' => null,
        'best_population_study_link' => null,
        'best_population_study_card' => null,
        'optimal_value_message' => null,
        'common_optimal_value_message' => null,
        'user_optimal_value_message' => null,
        'card' => null,
        'cause_only' => null,
        'charts' => null,
        'charts_link_dynamic' => null,
        'charts_link_email' => null,
        'charts_link_facebook' => null,
        'charts_link_google' => null,
        'charts_link_static' => null,
        'charts_link_twitter' => null,
        'child_common_tag_variables' => null,
        'child_user_tag_variables' => null,
        'client_id' => null,
        'combination_operation' => null,
        'common_alias' => null,
        'common_tagged_variables' => null,
        'common_tag_variables' => null,
        'created_at' => null,
        'data_source_names' => null,
        'data_sources' => null,
        'description' => null,
        'display_name' => null,
        'duration_of_action' => 'int32',
        'duration_of_action_in_hours' => 'float',
        'earliest_filling_time' => 'int32',
        'earliest_measurement_time' => 'int32',
        'earliest_source_time' => 'int32',
        'error_message' => null,
        'experiment_end_time' => null,
        'experiment_start_time' => null,
        'filling_type' => null,
        'filling_value' => 'float',
        'icon_icon' => null,
        'id' => null,
        'image_url' => null,
        'informational_url' => null,
        'ingredient_of_common_tag_variables' => null,
        'ingredient_common_tag_variables' => null,
        'ingredient_of_user_tag_variables' => null,
        'ingredient_user_tag_variables' => null,
        'input_type' => null,
        'ion_icon' => null,
        'joined_common_tag_variables' => null,
        'joined_user_tag_variables' => null,
        'join_with' => 'int32',
        'kurtosis' => 'float',
        'last_processed_daily_value' => 'double',
        'last_successful_update_time' => null,
        'last_value' => 'float',
        'latest_filling_time' => 'int32',
        'latest_measurement_time' => 'int32',
        'latest_source_time' => 'int32',
        'latest_user_measurement_time' => null,
        'latitude' => 'float',
        'location' => null,
        'longitude' => 'float',
        'manual_tracking' => null,
        'maximum_allowed_daily_value' => 'float',
        'maximum_allowed_value' => 'float',
        'maximum_recorded_daily_value' => 'float',
        'maximum_recorded_value' => 'double',
        'mean' => 'float',
        'measurements_at_last_analysis' => 'int32',
        'median' => 'float',
        'minimum_allowed_value' => 'float',
        'minimum_allowed_daily_value' => 'float',
        'minimum_non_zero_value' => 'float',
        'minimum_recorded_value' => 'float',
        'most_common_connector_id' => null,
        'most_common_original_unit_id' => null,
        'most_common_unit_id' => 'int32',
        'most_common_value' => 'float',
        'name' => null,
        'number_of_aggregate_correlations_as_cause' => null,
        'number_of_aggregate_correlations_as_effect' => null,
        'number_of_changes' => 'int32',
        'number_of_correlations' => 'int32',
        'number_of_correlations_as_cause' => null,
        'number_of_correlations_as_effect' => null,
        'number_of_processed_daily_measurements' => 'int32',
        'number_of_raw_measurements' => null,
        'number_of_tracking_reminders' => null,
        'number_of_unique_daily_values' => 'float',
        'number_of_unique_values' => null,
        'number_of_user_correlations_as_cause' => null,
        'number_of_user_correlations_as_effect' => null,
        'number_of_user_variables' => null,
        'onset_delay' => 'int32',
        'onset_delay_in_hours' => 'double',
        'outcome' => null,
        'outcome_of_interest' => null,
        'parent_common_tag_variables' => null,
        'parent_user_tag_variables' => null,
        'png_path' => null,
        'png_url' => null,
        'predictor_of_interest' => null,
        'price' => 'double',
        'product_url' => null,
        'public' => null,
        'question' => null,
        'long_question' => null,
        'raw_measurements_at_last_analysis' => null,
        'second_most_common_value' => 'double',
        'second_to_last_value' => 'double',
        'share_user_measurements' => null,
        'skewness' => 'float',
        'standard_deviation' => 'double',
        'status' => null,
        'subtitle' => null,
        'svg_url' => null,
        'third_most_common_value' => 'double',
        'third_to_last_value' => 'double',
        'tracking_instructions' => null,
        'tracking_instructions_card' => null,
        'unit' => null,
        'unit_abbreviated_name' => null,
        'unit_category_id' => null,
        'unit_category_name' => null,
        'unit_id' => 'int32',
        'unit_name' => null,
        'upc' => null,
        'updated' => 'int32',
        'updated_at' => null,
        'updated_time' => null,
        'user_id' => 'int32',
        'user_tagged_variables' => null,
        'user_tag_variables' => null,
        'user_variable_unit_abbreviated_name' => null,
        'user_variable_unit_category_id' => null,
        'user_variable_unit_category_name' => null,
        'user_variable_unit_id' => null,
        'user_variable_unit_name' => null,
        'variable_category' => null,
        'joined_variables' => null,
        'valence' => null,
        'variable_category_id' => null,
        'variable_category_name' => null,
        'variable_id' => null,
        'variable_name' => null,
        'variance' => 'double',
        'wikipedia_title' => null
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
        'action_array' => 'actionArray',
        'alias' => 'alias',
        'available_units' => 'availableUnits',
        'best_study_link' => 'bestStudyLink',
        'best_study_card' => 'bestStudyCard',
        'best_user_study_link' => 'bestUserStudyLink',
        'best_user_study_card' => 'bestUserStudyCard',
        'best_population_study_link' => 'bestPopulationStudyLink',
        'best_population_study_card' => 'bestPopulationStudyCard',
        'optimal_value_message' => 'optimalValueMessage',
        'common_optimal_value_message' => 'commonOptimalValueMessage',
        'user_optimal_value_message' => 'userOptimalValueMessage',
        'card' => 'card',
        'cause_only' => 'causeOnly',
        'charts' => 'charts',
        'charts_link_dynamic' => 'chartsLinkDynamic',
        'charts_link_email' => 'chartsLinkEmail',
        'charts_link_facebook' => 'chartsLinkFacebook',
        'charts_link_google' => 'chartsLinkGoogle',
        'charts_link_static' => 'chartsLinkStatic',
        'charts_link_twitter' => 'chartsLinkTwitter',
        'child_common_tag_variables' => 'childCommonTagVariables',
        'child_user_tag_variables' => 'childUserTagVariables',
        'client_id' => 'clientId',
        'combination_operation' => 'combinationOperation',
        'common_alias' => 'commonAlias',
        'common_tagged_variables' => 'commonTaggedVariables',
        'common_tag_variables' => 'commonTagVariables',
        'created_at' => 'createdAt',
        'data_source_names' => 'dataSourceNames',
        'data_sources' => 'dataSources',
        'description' => 'description',
        'display_name' => 'displayName',
        'duration_of_action' => 'durationOfAction',
        'duration_of_action_in_hours' => 'durationOfActionInHours',
        'earliest_filling_time' => 'earliestFillingTime',
        'earliest_measurement_time' => 'earliestMeasurementTime',
        'earliest_source_time' => 'earliestSourceTime',
        'error_message' => 'errorMessage',
        'experiment_end_time' => 'experimentEndTime',
        'experiment_start_time' => 'experimentStartTime',
        'filling_type' => 'fillingType',
        'filling_value' => 'fillingValue',
        'icon_icon' => 'iconIcon',
        'id' => 'id',
        'image_url' => 'imageUrl',
        'informational_url' => 'informationalUrl',
        'ingredient_of_common_tag_variables' => 'ingredientOfCommonTagVariables',
        'ingredient_common_tag_variables' => 'ingredientCommonTagVariables',
        'ingredient_of_user_tag_variables' => 'ingredientOfUserTagVariables',
        'ingredient_user_tag_variables' => 'ingredientUserTagVariables',
        'input_type' => 'inputType',
        'ion_icon' => 'ionIcon',
        'joined_common_tag_variables' => 'joinedCommonTagVariables',
        'joined_user_tag_variables' => 'joinedUserTagVariables',
        'join_with' => 'joinWith',
        'kurtosis' => 'kurtosis',
        'last_processed_daily_value' => 'lastProcessedDailyValue',
        'last_successful_update_time' => 'lastSuccessfulUpdateTime',
        'last_value' => 'lastValue',
        'latest_filling_time' => 'latestFillingTime',
        'latest_measurement_time' => 'latestMeasurementTime',
        'latest_source_time' => 'latestSourceTime',
        'latest_user_measurement_time' => 'latestUserMeasurementTime',
        'latitude' => 'latitude',
        'location' => 'location',
        'longitude' => 'longitude',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_daily_value' => 'maximumAllowedDailyValue',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'maximum_recorded_daily_value' => 'maximumRecordedDailyValue',
        'maximum_recorded_value' => 'maximumRecordedValue',
        'mean' => 'mean',
        'measurements_at_last_analysis' => 'measurementsAtLastAnalysis',
        'median' => 'median',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'minimum_allowed_daily_value' => 'minimumAllowedDailyValue',
        'minimum_non_zero_value' => 'minimumNonZeroValue',
        'minimum_recorded_value' => 'minimumRecordedValue',
        'most_common_connector_id' => 'mostCommonConnectorId',
        'most_common_original_unit_id' => 'mostCommonOriginalUnitId',
        'most_common_unit_id' => 'mostCommonUnitId',
        'most_common_value' => 'mostCommonValue',
        'name' => 'name',
        'number_of_aggregate_correlations_as_cause' => 'numberOfAggregateCorrelationsAsCause',
        'number_of_aggregate_correlations_as_effect' => 'numberOfAggregateCorrelationsAsEffect',
        'number_of_changes' => 'numberOfChanges',
        'number_of_correlations' => 'numberOfCorrelations',
        'number_of_correlations_as_cause' => 'numberOfCorrelationsAsCause',
        'number_of_correlations_as_effect' => 'numberOfCorrelationsAsEffect',
        'number_of_processed_daily_measurements' => 'numberOfProcessedDailyMeasurements',
        'number_of_raw_measurements' => 'numberOfRawMeasurements',
        'number_of_tracking_reminders' => 'numberOfTrackingReminders',
        'number_of_unique_daily_values' => 'numberOfUniqueDailyValues',
        'number_of_unique_values' => 'numberOfUniqueValues',
        'number_of_user_correlations_as_cause' => 'numberOfUserCorrelationsAsCause',
        'number_of_user_correlations_as_effect' => 'numberOfUserCorrelationsAsEffect',
        'number_of_user_variables' => 'numberOfUserVariables',
        'onset_delay' => 'onsetDelay',
        'onset_delay_in_hours' => 'onsetDelayInHours',
        'outcome' => 'outcome',
        'outcome_of_interest' => 'outcomeOfInterest',
        'parent_common_tag_variables' => 'parentCommonTagVariables',
        'parent_user_tag_variables' => 'parentUserTagVariables',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'predictor_of_interest' => 'predictorOfInterest',
        'price' => 'price',
        'product_url' => 'productUrl',
        'public' => 'public',
        'question' => 'question',
        'long_question' => 'longQuestion',
        'raw_measurements_at_last_analysis' => 'rawMeasurementsAtLastAnalysis',
        'second_most_common_value' => 'secondMostCommonValue',
        'second_to_last_value' => 'secondToLastValue',
        'share_user_measurements' => 'shareUserMeasurements',
        'skewness' => 'skewness',
        'standard_deviation' => 'standardDeviation',
        'status' => 'status',
        'subtitle' => 'subtitle',
        'svg_url' => 'svgUrl',
        'third_most_common_value' => 'thirdMostCommonValue',
        'third_to_last_value' => 'thirdToLastValue',
        'tracking_instructions' => 'trackingInstructions',
        'tracking_instructions_card' => 'trackingInstructionsCard',
        'unit' => 'unit',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_category_id' => 'unitCategoryId',
        'unit_category_name' => 'unitCategoryName',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'upc' => 'upc',
        'updated' => 'updated',
        'updated_at' => 'updatedAt',
        'updated_time' => 'updatedTime',
        'user_id' => 'userId',
        'user_tagged_variables' => 'userTaggedVariables',
        'user_tag_variables' => 'userTagVariables',
        'user_variable_unit_abbreviated_name' => 'userVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'userVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'userVariableUnitCategoryName',
        'user_variable_unit_id' => 'userVariableUnitId',
        'user_variable_unit_name' => 'userVariableUnitName',
        'variable_category' => 'variableCategory',
        'joined_variables' => 'joinedVariables',
        'valence' => 'valence',
        'variable_category_id' => 'variableCategoryId',
        'variable_category_name' => 'variableCategoryName',
        'variable_id' => 'variableId',
        'variable_name' => 'variableName',
        'variance' => 'variance',
        'wikipedia_title' => 'wikipediaTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_array' => 'setActionArray',
        'alias' => 'setAlias',
        'available_units' => 'setAvailableUnits',
        'best_study_link' => 'setBestStudyLink',
        'best_study_card' => 'setBestStudyCard',
        'best_user_study_link' => 'setBestUserStudyLink',
        'best_user_study_card' => 'setBestUserStudyCard',
        'best_population_study_link' => 'setBestPopulationStudyLink',
        'best_population_study_card' => 'setBestPopulationStudyCard',
        'optimal_value_message' => 'setOptimalValueMessage',
        'common_optimal_value_message' => 'setCommonOptimalValueMessage',
        'user_optimal_value_message' => 'setUserOptimalValueMessage',
        'card' => 'setCard',
        'cause_only' => 'setCauseOnly',
        'charts' => 'setCharts',
        'charts_link_dynamic' => 'setChartsLinkDynamic',
        'charts_link_email' => 'setChartsLinkEmail',
        'charts_link_facebook' => 'setChartsLinkFacebook',
        'charts_link_google' => 'setChartsLinkGoogle',
        'charts_link_static' => 'setChartsLinkStatic',
        'charts_link_twitter' => 'setChartsLinkTwitter',
        'child_common_tag_variables' => 'setChildCommonTagVariables',
        'child_user_tag_variables' => 'setChildUserTagVariables',
        'client_id' => 'setClientId',
        'combination_operation' => 'setCombinationOperation',
        'common_alias' => 'setCommonAlias',
        'common_tagged_variables' => 'setCommonTaggedVariables',
        'common_tag_variables' => 'setCommonTagVariables',
        'created_at' => 'setCreatedAt',
        'data_source_names' => 'setDataSourceNames',
        'data_sources' => 'setDataSources',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'duration_of_action' => 'setDurationOfAction',
        'duration_of_action_in_hours' => 'setDurationOfActionInHours',
        'earliest_filling_time' => 'setEarliestFillingTime',
        'earliest_measurement_time' => 'setEarliestMeasurementTime',
        'earliest_source_time' => 'setEarliestSourceTime',
        'error_message' => 'setErrorMessage',
        'experiment_end_time' => 'setExperimentEndTime',
        'experiment_start_time' => 'setExperimentStartTime',
        'filling_type' => 'setFillingType',
        'filling_value' => 'setFillingValue',
        'icon_icon' => 'setIconIcon',
        'id' => 'setId',
        'image_url' => 'setImageUrl',
        'informational_url' => 'setInformationalUrl',
        'ingredient_of_common_tag_variables' => 'setIngredientOfCommonTagVariables',
        'ingredient_common_tag_variables' => 'setIngredientCommonTagVariables',
        'ingredient_of_user_tag_variables' => 'setIngredientOfUserTagVariables',
        'ingredient_user_tag_variables' => 'setIngredientUserTagVariables',
        'input_type' => 'setInputType',
        'ion_icon' => 'setIonIcon',
        'joined_common_tag_variables' => 'setJoinedCommonTagVariables',
        'joined_user_tag_variables' => 'setJoinedUserTagVariables',
        'join_with' => 'setJoinWith',
        'kurtosis' => 'setKurtosis',
        'last_processed_daily_value' => 'setLastProcessedDailyValue',
        'last_successful_update_time' => 'setLastSuccessfulUpdateTime',
        'last_value' => 'setLastValue',
        'latest_filling_time' => 'setLatestFillingTime',
        'latest_measurement_time' => 'setLatestMeasurementTime',
        'latest_source_time' => 'setLatestSourceTime',
        'latest_user_measurement_time' => 'setLatestUserMeasurementTime',
        'latitude' => 'setLatitude',
        'location' => 'setLocation',
        'longitude' => 'setLongitude',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_daily_value' => 'setMaximumAllowedDailyValue',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'maximum_recorded_daily_value' => 'setMaximumRecordedDailyValue',
        'maximum_recorded_value' => 'setMaximumRecordedValue',
        'mean' => 'setMean',
        'measurements_at_last_analysis' => 'setMeasurementsAtLastAnalysis',
        'median' => 'setMedian',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'minimum_allowed_daily_value' => 'setMinimumAllowedDailyValue',
        'minimum_non_zero_value' => 'setMinimumNonZeroValue',
        'minimum_recorded_value' => 'setMinimumRecordedValue',
        'most_common_connector_id' => 'setMostCommonConnectorId',
        'most_common_original_unit_id' => 'setMostCommonOriginalUnitId',
        'most_common_unit_id' => 'setMostCommonUnitId',
        'most_common_value' => 'setMostCommonValue',
        'name' => 'setName',
        'number_of_aggregate_correlations_as_cause' => 'setNumberOfAggregateCorrelationsAsCause',
        'number_of_aggregate_correlations_as_effect' => 'setNumberOfAggregateCorrelationsAsEffect',
        'number_of_changes' => 'setNumberOfChanges',
        'number_of_correlations' => 'setNumberOfCorrelations',
        'number_of_correlations_as_cause' => 'setNumberOfCorrelationsAsCause',
        'number_of_correlations_as_effect' => 'setNumberOfCorrelationsAsEffect',
        'number_of_processed_daily_measurements' => 'setNumberOfProcessedDailyMeasurements',
        'number_of_raw_measurements' => 'setNumberOfRawMeasurements',
        'number_of_tracking_reminders' => 'setNumberOfTrackingReminders',
        'number_of_unique_daily_values' => 'setNumberOfUniqueDailyValues',
        'number_of_unique_values' => 'setNumberOfUniqueValues',
        'number_of_user_correlations_as_cause' => 'setNumberOfUserCorrelationsAsCause',
        'number_of_user_correlations_as_effect' => 'setNumberOfUserCorrelationsAsEffect',
        'number_of_user_variables' => 'setNumberOfUserVariables',
        'onset_delay' => 'setOnsetDelay',
        'onset_delay_in_hours' => 'setOnsetDelayInHours',
        'outcome' => 'setOutcome',
        'outcome_of_interest' => 'setOutcomeOfInterest',
        'parent_common_tag_variables' => 'setParentCommonTagVariables',
        'parent_user_tag_variables' => 'setParentUserTagVariables',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'predictor_of_interest' => 'setPredictorOfInterest',
        'price' => 'setPrice',
        'product_url' => 'setProductUrl',
        'public' => 'setPublic',
        'question' => 'setQuestion',
        'long_question' => 'setLongQuestion',
        'raw_measurements_at_last_analysis' => 'setRawMeasurementsAtLastAnalysis',
        'second_most_common_value' => 'setSecondMostCommonValue',
        'second_to_last_value' => 'setSecondToLastValue',
        'share_user_measurements' => 'setShareUserMeasurements',
        'skewness' => 'setSkewness',
        'standard_deviation' => 'setStandardDeviation',
        'status' => 'setStatus',
        'subtitle' => 'setSubtitle',
        'svg_url' => 'setSvgUrl',
        'third_most_common_value' => 'setThirdMostCommonValue',
        'third_to_last_value' => 'setThirdToLastValue',
        'tracking_instructions' => 'setTrackingInstructions',
        'tracking_instructions_card' => 'setTrackingInstructionsCard',
        'unit' => 'setUnit',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_category_id' => 'setUnitCategoryId',
        'unit_category_name' => 'setUnitCategoryName',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'upc' => 'setUpc',
        'updated' => 'setUpdated',
        'updated_at' => 'setUpdatedAt',
        'updated_time' => 'setUpdatedTime',
        'user_id' => 'setUserId',
        'user_tagged_variables' => 'setUserTaggedVariables',
        'user_tag_variables' => 'setUserTagVariables',
        'user_variable_unit_abbreviated_name' => 'setUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'setUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'setUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'setUserVariableUnitId',
        'user_variable_unit_name' => 'setUserVariableUnitName',
        'variable_category' => 'setVariableCategory',
        'joined_variables' => 'setJoinedVariables',
        'valence' => 'setValence',
        'variable_category_id' => 'setVariableCategoryId',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_id' => 'setVariableId',
        'variable_name' => 'setVariableName',
        'variance' => 'setVariance',
        'wikipedia_title' => 'setWikipediaTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_array' => 'getActionArray',
        'alias' => 'getAlias',
        'available_units' => 'getAvailableUnits',
        'best_study_link' => 'getBestStudyLink',
        'best_study_card' => 'getBestStudyCard',
        'best_user_study_link' => 'getBestUserStudyLink',
        'best_user_study_card' => 'getBestUserStudyCard',
        'best_population_study_link' => 'getBestPopulationStudyLink',
        'best_population_study_card' => 'getBestPopulationStudyCard',
        'optimal_value_message' => 'getOptimalValueMessage',
        'common_optimal_value_message' => 'getCommonOptimalValueMessage',
        'user_optimal_value_message' => 'getUserOptimalValueMessage',
        'card' => 'getCard',
        'cause_only' => 'getCauseOnly',
        'charts' => 'getCharts',
        'charts_link_dynamic' => 'getChartsLinkDynamic',
        'charts_link_email' => 'getChartsLinkEmail',
        'charts_link_facebook' => 'getChartsLinkFacebook',
        'charts_link_google' => 'getChartsLinkGoogle',
        'charts_link_static' => 'getChartsLinkStatic',
        'charts_link_twitter' => 'getChartsLinkTwitter',
        'child_common_tag_variables' => 'getChildCommonTagVariables',
        'child_user_tag_variables' => 'getChildUserTagVariables',
        'client_id' => 'getClientId',
        'combination_operation' => 'getCombinationOperation',
        'common_alias' => 'getCommonAlias',
        'common_tagged_variables' => 'getCommonTaggedVariables',
        'common_tag_variables' => 'getCommonTagVariables',
        'created_at' => 'getCreatedAt',
        'data_source_names' => 'getDataSourceNames',
        'data_sources' => 'getDataSources',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'duration_of_action' => 'getDurationOfAction',
        'duration_of_action_in_hours' => 'getDurationOfActionInHours',
        'earliest_filling_time' => 'getEarliestFillingTime',
        'earliest_measurement_time' => 'getEarliestMeasurementTime',
        'earliest_source_time' => 'getEarliestSourceTime',
        'error_message' => 'getErrorMessage',
        'experiment_end_time' => 'getExperimentEndTime',
        'experiment_start_time' => 'getExperimentStartTime',
        'filling_type' => 'getFillingType',
        'filling_value' => 'getFillingValue',
        'icon_icon' => 'getIconIcon',
        'id' => 'getId',
        'image_url' => 'getImageUrl',
        'informational_url' => 'getInformationalUrl',
        'ingredient_of_common_tag_variables' => 'getIngredientOfCommonTagVariables',
        'ingredient_common_tag_variables' => 'getIngredientCommonTagVariables',
        'ingredient_of_user_tag_variables' => 'getIngredientOfUserTagVariables',
        'ingredient_user_tag_variables' => 'getIngredientUserTagVariables',
        'input_type' => 'getInputType',
        'ion_icon' => 'getIonIcon',
        'joined_common_tag_variables' => 'getJoinedCommonTagVariables',
        'joined_user_tag_variables' => 'getJoinedUserTagVariables',
        'join_with' => 'getJoinWith',
        'kurtosis' => 'getKurtosis',
        'last_processed_daily_value' => 'getLastProcessedDailyValue',
        'last_successful_update_time' => 'getLastSuccessfulUpdateTime',
        'last_value' => 'getLastValue',
        'latest_filling_time' => 'getLatestFillingTime',
        'latest_measurement_time' => 'getLatestMeasurementTime',
        'latest_source_time' => 'getLatestSourceTime',
        'latest_user_measurement_time' => 'getLatestUserMeasurementTime',
        'latitude' => 'getLatitude',
        'location' => 'getLocation',
        'longitude' => 'getLongitude',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_daily_value' => 'getMaximumAllowedDailyValue',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'maximum_recorded_daily_value' => 'getMaximumRecordedDailyValue',
        'maximum_recorded_value' => 'getMaximumRecordedValue',
        'mean' => 'getMean',
        'measurements_at_last_analysis' => 'getMeasurementsAtLastAnalysis',
        'median' => 'getMedian',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'minimum_allowed_daily_value' => 'getMinimumAllowedDailyValue',
        'minimum_non_zero_value' => 'getMinimumNonZeroValue',
        'minimum_recorded_value' => 'getMinimumRecordedValue',
        'most_common_connector_id' => 'getMostCommonConnectorId',
        'most_common_original_unit_id' => 'getMostCommonOriginalUnitId',
        'most_common_unit_id' => 'getMostCommonUnitId',
        'most_common_value' => 'getMostCommonValue',
        'name' => 'getName',
        'number_of_aggregate_correlations_as_cause' => 'getNumberOfAggregateCorrelationsAsCause',
        'number_of_aggregate_correlations_as_effect' => 'getNumberOfAggregateCorrelationsAsEffect',
        'number_of_changes' => 'getNumberOfChanges',
        'number_of_correlations' => 'getNumberOfCorrelations',
        'number_of_correlations_as_cause' => 'getNumberOfCorrelationsAsCause',
        'number_of_correlations_as_effect' => 'getNumberOfCorrelationsAsEffect',
        'number_of_processed_daily_measurements' => 'getNumberOfProcessedDailyMeasurements',
        'number_of_raw_measurements' => 'getNumberOfRawMeasurements',
        'number_of_tracking_reminders' => 'getNumberOfTrackingReminders',
        'number_of_unique_daily_values' => 'getNumberOfUniqueDailyValues',
        'number_of_unique_values' => 'getNumberOfUniqueValues',
        'number_of_user_correlations_as_cause' => 'getNumberOfUserCorrelationsAsCause',
        'number_of_user_correlations_as_effect' => 'getNumberOfUserCorrelationsAsEffect',
        'number_of_user_variables' => 'getNumberOfUserVariables',
        'onset_delay' => 'getOnsetDelay',
        'onset_delay_in_hours' => 'getOnsetDelayInHours',
        'outcome' => 'getOutcome',
        'outcome_of_interest' => 'getOutcomeOfInterest',
        'parent_common_tag_variables' => 'getParentCommonTagVariables',
        'parent_user_tag_variables' => 'getParentUserTagVariables',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'predictor_of_interest' => 'getPredictorOfInterest',
        'price' => 'getPrice',
        'product_url' => 'getProductUrl',
        'public' => 'getPublic',
        'question' => 'getQuestion',
        'long_question' => 'getLongQuestion',
        'raw_measurements_at_last_analysis' => 'getRawMeasurementsAtLastAnalysis',
        'second_most_common_value' => 'getSecondMostCommonValue',
        'second_to_last_value' => 'getSecondToLastValue',
        'share_user_measurements' => 'getShareUserMeasurements',
        'skewness' => 'getSkewness',
        'standard_deviation' => 'getStandardDeviation',
        'status' => 'getStatus',
        'subtitle' => 'getSubtitle',
        'svg_url' => 'getSvgUrl',
        'third_most_common_value' => 'getThirdMostCommonValue',
        'third_to_last_value' => 'getThirdToLastValue',
        'tracking_instructions' => 'getTrackingInstructions',
        'tracking_instructions_card' => 'getTrackingInstructionsCard',
        'unit' => 'getUnit',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_category_id' => 'getUnitCategoryId',
        'unit_category_name' => 'getUnitCategoryName',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'upc' => 'getUpc',
        'updated' => 'getUpdated',
        'updated_at' => 'getUpdatedAt',
        'updated_time' => 'getUpdatedTime',
        'user_id' => 'getUserId',
        'user_tagged_variables' => 'getUserTaggedVariables',
        'user_tag_variables' => 'getUserTagVariables',
        'user_variable_unit_abbreviated_name' => 'getUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'getUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'getUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'getUserVariableUnitId',
        'user_variable_unit_name' => 'getUserVariableUnitName',
        'variable_category' => 'getVariableCategory',
        'joined_variables' => 'getJoinedVariables',
        'valence' => 'getValence',
        'variable_category_id' => 'getVariableCategoryId',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_id' => 'getVariableId',
        'variable_name' => 'getVariableName',
        'variance' => 'getVariance',
        'wikipedia_title' => 'getWikipediaTitle'
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

    const COMBINATION_OPERATION_MEAN = 'MEAN';
    const COMBINATION_OPERATION_SUM = 'SUM';
    const FILLING_TYPE_NONE = 'none';
    const FILLING_TYPE_ZERO_FILLING = 'zero-filling';
    const FILLING_TYPE_VALUE_FILLING = 'value-filling';
    const VARIABLE_CATEGORY_NAME_ACTIVITY = 'Activity';
    const VARIABLE_CATEGORY_NAME_BOOKS = 'Books';
    const VARIABLE_CATEGORY_NAME_CAUSES_OF_ILLNESS = 'Causes of Illness';
    const VARIABLE_CATEGORY_NAME_COGNITIVE_PERFORMANCE = 'Cognitive Performance';
    const VARIABLE_CATEGORY_NAME_CONDITIONS = 'Conditions';
    const VARIABLE_CATEGORY_NAME_EMOTIONS = 'Emotions';
    const VARIABLE_CATEGORY_NAME_ENVIRONMENT = 'Environment';
    const VARIABLE_CATEGORY_NAME_FOODS = 'Foods';
    const VARIABLE_CATEGORY_NAME_GOALS = 'Goals';
    const VARIABLE_CATEGORY_NAME_LOCATIONS = 'Locations';
    const VARIABLE_CATEGORY_NAME_MISCELLANEOUS = 'Miscellaneous';
    const VARIABLE_CATEGORY_NAME_MOVIES_AND_TV = 'Movies and TV';
    const VARIABLE_CATEGORY_NAME_MUSIC = 'Music';
    const VARIABLE_CATEGORY_NAME_NUTRIENTS = 'Nutrients';
    const VARIABLE_CATEGORY_NAME_PAYMENTS = 'Payments';
    const VARIABLE_CATEGORY_NAME_PHYSICAL_ACTIVITIES = 'Physical Activities';
    const VARIABLE_CATEGORY_NAME_PHYSIQUE = 'Physique';
    const VARIABLE_CATEGORY_NAME_SLEEP = 'Sleep';
    const VARIABLE_CATEGORY_NAME_SOCIAL_INTERACTIONS = 'Social Interactions';
    const VARIABLE_CATEGORY_NAME_SOFTWARE = 'Software';
    const VARIABLE_CATEGORY_NAME_SYMPTOMS = 'Symptoms';
    const VARIABLE_CATEGORY_NAME_TREATMENTS = 'Treatments';
    const VARIABLE_CATEGORY_NAME_VITAL_SIGNS = 'Vital Signs';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCombinationOperationAllowableValues()
    {
        return [
            self::COMBINATION_OPERATION_MEAN,
            self::COMBINATION_OPERATION_SUM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFillingTypeAllowableValues()
    {
        return [
            self::FILLING_TYPE_NONE,
            self::FILLING_TYPE_ZERO_FILLING,
            self::FILLING_TYPE_VALUE_FILLING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariableCategoryNameAllowableValues()
    {
        return [
            self::VARIABLE_CATEGORY_NAME_ACTIVITY,
            self::VARIABLE_CATEGORY_NAME_BOOKS,
            self::VARIABLE_CATEGORY_NAME_CAUSES_OF_ILLNESS,
            self::VARIABLE_CATEGORY_NAME_COGNITIVE_PERFORMANCE,
            self::VARIABLE_CATEGORY_NAME_CONDITIONS,
            self::VARIABLE_CATEGORY_NAME_EMOTIONS,
            self::VARIABLE_CATEGORY_NAME_ENVIRONMENT,
            self::VARIABLE_CATEGORY_NAME_FOODS,
            self::VARIABLE_CATEGORY_NAME_GOALS,
            self::VARIABLE_CATEGORY_NAME_LOCATIONS,
            self::VARIABLE_CATEGORY_NAME_MISCELLANEOUS,
            self::VARIABLE_CATEGORY_NAME_MOVIES_AND_TV,
            self::VARIABLE_CATEGORY_NAME_MUSIC,
            self::VARIABLE_CATEGORY_NAME_NUTRIENTS,
            self::VARIABLE_CATEGORY_NAME_PAYMENTS,
            self::VARIABLE_CATEGORY_NAME_PHYSICAL_ACTIVITIES,
            self::VARIABLE_CATEGORY_NAME_PHYSIQUE,
            self::VARIABLE_CATEGORY_NAME_SLEEP,
            self::VARIABLE_CATEGORY_NAME_SOCIAL_INTERACTIONS,
            self::VARIABLE_CATEGORY_NAME_SOFTWARE,
            self::VARIABLE_CATEGORY_NAME_SYMPTOMS,
            self::VARIABLE_CATEGORY_NAME_TREATMENTS,
            self::VARIABLE_CATEGORY_NAME_VITAL_SIGNS,
        ];
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
        $this->container['action_array'] = isset($data['action_array']) ? $data['action_array'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['available_units'] = isset($data['available_units']) ? $data['available_units'] : null;
        $this->container['best_study_link'] = isset($data['best_study_link']) ? $data['best_study_link'] : null;
        $this->container['best_study_card'] = isset($data['best_study_card']) ? $data['best_study_card'] : null;
        $this->container['best_user_study_link'] = isset($data['best_user_study_link']) ? $data['best_user_study_link'] : null;
        $this->container['best_user_study_card'] = isset($data['best_user_study_card']) ? $data['best_user_study_card'] : null;
        $this->container['best_population_study_link'] = isset($data['best_population_study_link']) ? $data['best_population_study_link'] : null;
        $this->container['best_population_study_card'] = isset($data['best_population_study_card']) ? $data['best_population_study_card'] : null;
        $this->container['optimal_value_message'] = isset($data['optimal_value_message']) ? $data['optimal_value_message'] : null;
        $this->container['common_optimal_value_message'] = isset($data['common_optimal_value_message']) ? $data['common_optimal_value_message'] : null;
        $this->container['user_optimal_value_message'] = isset($data['user_optimal_value_message']) ? $data['user_optimal_value_message'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['cause_only'] = isset($data['cause_only']) ? $data['cause_only'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['charts_link_dynamic'] = isset($data['charts_link_dynamic']) ? $data['charts_link_dynamic'] : null;
        $this->container['charts_link_email'] = isset($data['charts_link_email']) ? $data['charts_link_email'] : null;
        $this->container['charts_link_facebook'] = isset($data['charts_link_facebook']) ? $data['charts_link_facebook'] : null;
        $this->container['charts_link_google'] = isset($data['charts_link_google']) ? $data['charts_link_google'] : null;
        $this->container['charts_link_static'] = isset($data['charts_link_static']) ? $data['charts_link_static'] : null;
        $this->container['charts_link_twitter'] = isset($data['charts_link_twitter']) ? $data['charts_link_twitter'] : null;
        $this->container['child_common_tag_variables'] = isset($data['child_common_tag_variables']) ? $data['child_common_tag_variables'] : null;
        $this->container['child_user_tag_variables'] = isset($data['child_user_tag_variables']) ? $data['child_user_tag_variables'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['combination_operation'] = isset($data['combination_operation']) ? $data['combination_operation'] : null;
        $this->container['common_alias'] = isset($data['common_alias']) ? $data['common_alias'] : null;
        $this->container['common_tagged_variables'] = isset($data['common_tagged_variables']) ? $data['common_tagged_variables'] : null;
        $this->container['common_tag_variables'] = isset($data['common_tag_variables']) ? $data['common_tag_variables'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['data_source_names'] = isset($data['data_source_names']) ? $data['data_source_names'] : null;
        $this->container['data_sources'] = isset($data['data_sources']) ? $data['data_sources'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['duration_of_action_in_hours'] = isset($data['duration_of_action_in_hours']) ? $data['duration_of_action_in_hours'] : null;
        $this->container['earliest_filling_time'] = isset($data['earliest_filling_time']) ? $data['earliest_filling_time'] : null;
        $this->container['earliest_measurement_time'] = isset($data['earliest_measurement_time']) ? $data['earliest_measurement_time'] : null;
        $this->container['earliest_source_time'] = isset($data['earliest_source_time']) ? $data['earliest_source_time'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['experiment_end_time'] = isset($data['experiment_end_time']) ? $data['experiment_end_time'] : null;
        $this->container['experiment_start_time'] = isset($data['experiment_start_time']) ? $data['experiment_start_time'] : null;
        $this->container['filling_type'] = isset($data['filling_type']) ? $data['filling_type'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['icon_icon'] = isset($data['icon_icon']) ? $data['icon_icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['informational_url'] = isset($data['informational_url']) ? $data['informational_url'] : null;
        $this->container['ingredient_of_common_tag_variables'] = isset($data['ingredient_of_common_tag_variables']) ? $data['ingredient_of_common_tag_variables'] : null;
        $this->container['ingredient_common_tag_variables'] = isset($data['ingredient_common_tag_variables']) ? $data['ingredient_common_tag_variables'] : null;
        $this->container['ingredient_of_user_tag_variables'] = isset($data['ingredient_of_user_tag_variables']) ? $data['ingredient_of_user_tag_variables'] : null;
        $this->container['ingredient_user_tag_variables'] = isset($data['ingredient_user_tag_variables']) ? $data['ingredient_user_tag_variables'] : null;
        $this->container['input_type'] = isset($data['input_type']) ? $data['input_type'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['joined_common_tag_variables'] = isset($data['joined_common_tag_variables']) ? $data['joined_common_tag_variables'] : null;
        $this->container['joined_user_tag_variables'] = isset($data['joined_user_tag_variables']) ? $data['joined_user_tag_variables'] : null;
        $this->container['join_with'] = isset($data['join_with']) ? $data['join_with'] : null;
        $this->container['kurtosis'] = isset($data['kurtosis']) ? $data['kurtosis'] : null;
        $this->container['last_processed_daily_value'] = isset($data['last_processed_daily_value']) ? $data['last_processed_daily_value'] : null;
        $this->container['last_successful_update_time'] = isset($data['last_successful_update_time']) ? $data['last_successful_update_time'] : null;
        $this->container['last_value'] = isset($data['last_value']) ? $data['last_value'] : null;
        $this->container['latest_filling_time'] = isset($data['latest_filling_time']) ? $data['latest_filling_time'] : null;
        $this->container['latest_measurement_time'] = isset($data['latest_measurement_time']) ? $data['latest_measurement_time'] : null;
        $this->container['latest_source_time'] = isset($data['latest_source_time']) ? $data['latest_source_time'] : null;
        $this->container['latest_user_measurement_time'] = isset($data['latest_user_measurement_time']) ? $data['latest_user_measurement_time'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_daily_value'] = isset($data['maximum_allowed_daily_value']) ? $data['maximum_allowed_daily_value'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['maximum_recorded_daily_value'] = isset($data['maximum_recorded_daily_value']) ? $data['maximum_recorded_daily_value'] : null;
        $this->container['maximum_recorded_value'] = isset($data['maximum_recorded_value']) ? $data['maximum_recorded_value'] : null;
        $this->container['mean'] = isset($data['mean']) ? $data['mean'] : null;
        $this->container['measurements_at_last_analysis'] = isset($data['measurements_at_last_analysis']) ? $data['measurements_at_last_analysis'] : null;
        $this->container['median'] = isset($data['median']) ? $data['median'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['minimum_allowed_daily_value'] = isset($data['minimum_allowed_daily_value']) ? $data['minimum_allowed_daily_value'] : null;
        $this->container['minimum_non_zero_value'] = isset($data['minimum_non_zero_value']) ? $data['minimum_non_zero_value'] : null;
        $this->container['minimum_recorded_value'] = isset($data['minimum_recorded_value']) ? $data['minimum_recorded_value'] : null;
        $this->container['most_common_connector_id'] = isset($data['most_common_connector_id']) ? $data['most_common_connector_id'] : null;
        $this->container['most_common_original_unit_id'] = isset($data['most_common_original_unit_id']) ? $data['most_common_original_unit_id'] : null;
        $this->container['most_common_unit_id'] = isset($data['most_common_unit_id']) ? $data['most_common_unit_id'] : null;
        $this->container['most_common_value'] = isset($data['most_common_value']) ? $data['most_common_value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number_of_aggregate_correlations_as_cause'] = isset($data['number_of_aggregate_correlations_as_cause']) ? $data['number_of_aggregate_correlations_as_cause'] : null;
        $this->container['number_of_aggregate_correlations_as_effect'] = isset($data['number_of_aggregate_correlations_as_effect']) ? $data['number_of_aggregate_correlations_as_effect'] : null;
        $this->container['number_of_changes'] = isset($data['number_of_changes']) ? $data['number_of_changes'] : null;
        $this->container['number_of_correlations'] = isset($data['number_of_correlations']) ? $data['number_of_correlations'] : null;
        $this->container['number_of_correlations_as_cause'] = isset($data['number_of_correlations_as_cause']) ? $data['number_of_correlations_as_cause'] : null;
        $this->container['number_of_correlations_as_effect'] = isset($data['number_of_correlations_as_effect']) ? $data['number_of_correlations_as_effect'] : null;
        $this->container['number_of_processed_daily_measurements'] = isset($data['number_of_processed_daily_measurements']) ? $data['number_of_processed_daily_measurements'] : null;
        $this->container['number_of_raw_measurements'] = isset($data['number_of_raw_measurements']) ? $data['number_of_raw_measurements'] : null;
        $this->container['number_of_tracking_reminders'] = isset($data['number_of_tracking_reminders']) ? $data['number_of_tracking_reminders'] : null;
        $this->container['number_of_unique_daily_values'] = isset($data['number_of_unique_daily_values']) ? $data['number_of_unique_daily_values'] : null;
        $this->container['number_of_unique_values'] = isset($data['number_of_unique_values']) ? $data['number_of_unique_values'] : null;
        $this->container['number_of_user_correlations_as_cause'] = isset($data['number_of_user_correlations_as_cause']) ? $data['number_of_user_correlations_as_cause'] : null;
        $this->container['number_of_user_correlations_as_effect'] = isset($data['number_of_user_correlations_as_effect']) ? $data['number_of_user_correlations_as_effect'] : null;
        $this->container['number_of_user_variables'] = isset($data['number_of_user_variables']) ? $data['number_of_user_variables'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['onset_delay_in_hours'] = isset($data['onset_delay_in_hours']) ? $data['onset_delay_in_hours'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['outcome_of_interest'] = isset($data['outcome_of_interest']) ? $data['outcome_of_interest'] : null;
        $this->container['parent_common_tag_variables'] = isset($data['parent_common_tag_variables']) ? $data['parent_common_tag_variables'] : null;
        $this->container['parent_user_tag_variables'] = isset($data['parent_user_tag_variables']) ? $data['parent_user_tag_variables'] : null;
        $this->container['png_path'] = isset($data['png_path']) ? $data['png_path'] : null;
        $this->container['png_url'] = isset($data['png_url']) ? $data['png_url'] : null;
        $this->container['predictor_of_interest'] = isset($data['predictor_of_interest']) ? $data['predictor_of_interest'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['long_question'] = isset($data['long_question']) ? $data['long_question'] : null;
        $this->container['raw_measurements_at_last_analysis'] = isset($data['raw_measurements_at_last_analysis']) ? $data['raw_measurements_at_last_analysis'] : null;
        $this->container['second_most_common_value'] = isset($data['second_most_common_value']) ? $data['second_most_common_value'] : null;
        $this->container['second_to_last_value'] = isset($data['second_to_last_value']) ? $data['second_to_last_value'] : null;
        $this->container['share_user_measurements'] = isset($data['share_user_measurements']) ? $data['share_user_measurements'] : null;
        $this->container['skewness'] = isset($data['skewness']) ? $data['skewness'] : null;
        $this->container['standard_deviation'] = isset($data['standard_deviation']) ? $data['standard_deviation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['third_most_common_value'] = isset($data['third_most_common_value']) ? $data['third_most_common_value'] : null;
        $this->container['third_to_last_value'] = isset($data['third_to_last_value']) ? $data['third_to_last_value'] : null;
        $this->container['tracking_instructions'] = isset($data['tracking_instructions']) ? $data['tracking_instructions'] : null;
        $this->container['tracking_instructions_card'] = isset($data['tracking_instructions_card']) ? $data['tracking_instructions_card'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unit_abbreviated_name'] = isset($data['unit_abbreviated_name']) ? $data['unit_abbreviated_name'] : null;
        $this->container['unit_category_id'] = isset($data['unit_category_id']) ? $data['unit_category_id'] : null;
        $this->container['unit_category_name'] = isset($data['unit_category_name']) ? $data['unit_category_name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_tagged_variables'] = isset($data['user_tagged_variables']) ? $data['user_tagged_variables'] : null;
        $this->container['user_tag_variables'] = isset($data['user_tag_variables']) ? $data['user_tag_variables'] : null;
        $this->container['user_variable_unit_abbreviated_name'] = isset($data['user_variable_unit_abbreviated_name']) ? $data['user_variable_unit_abbreviated_name'] : null;
        $this->container['user_variable_unit_category_id'] = isset($data['user_variable_unit_category_id']) ? $data['user_variable_unit_category_id'] : null;
        $this->container['user_variable_unit_category_name'] = isset($data['user_variable_unit_category_name']) ? $data['user_variable_unit_category_name'] : null;
        $this->container['user_variable_unit_id'] = isset($data['user_variable_unit_id']) ? $data['user_variable_unit_id'] : null;
        $this->container['user_variable_unit_name'] = isset($data['user_variable_unit_name']) ? $data['user_variable_unit_name'] : null;
        $this->container['variable_category'] = isset($data['variable_category']) ? $data['variable_category'] : null;
        $this->container['joined_variables'] = isset($data['joined_variables']) ? $data['joined_variables'] : null;
        $this->container['valence'] = isset($data['valence']) ? $data['valence'] : null;
        $this->container['variable_category_id'] = isset($data['variable_category_id']) ? $data['variable_category_id'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['variance'] = isset($data['variance']) ? $data['variance'] : null;
        $this->container['wikipedia_title'] = isset($data['wikipedia_title']) ? $data['wikipedia_title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCombinationOperationAllowableValues();
        if (!is_null($this->container['combination_operation']) && !in_array($this->container['combination_operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'combination_operation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFillingTypeAllowableValues();
        if (!is_null($this->container['filling_type']) && !in_array($this->container['filling_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filling_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($this->container['variable_category_name']) && !in_array($this->container['variable_category_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variable_category_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['variable_id'] === null) {
            $invalidProperties[] = "'variable_id' can't be null";
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
     * Gets action_array
     *
     * @return \CureDAO\Client\Model\TrackingReminderNotificationAction[]
     */
    public function getActionArray()
    {
        return $this->container['action_array'];
    }

    /**
     * Sets action_array
     *
     * @param \CureDAO\Client\Model\TrackingReminderNotificationAction[] $action_array action_array
     *
     * @return $this
     */
    public function setActionArray($action_array)
    {
        $this->container['action_array'] = $action_array;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias User-Defined Variable Setting:  Alternative display name
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets available_units
     *
     * @return \CureDAO\Client\Model\Unit[]
     */
    public function getAvailableUnits()
    {
        return $this->container['available_units'];
    }

    /**
     * Sets available_units
     *
     * @param \CureDAO\Client\Model\Unit[] $available_units available_units
     *
     * @return $this
     */
    public function setAvailableUnits($available_units)
    {
        $this->container['available_units'] = $available_units;

        return $this;
    }

    /**
     * Gets best_study_link
     *
     * @return string
     */
    public function getBestStudyLink()
    {
        return $this->container['best_study_link'];
    }

    /**
     * Sets best_study_link
     *
     * @param string $best_study_link Link to study comparing variable with strongest relationship for user or population
     *
     * @return $this
     */
    public function setBestStudyLink($best_study_link)
    {
        $this->container['best_study_link'] = $best_study_link;

        return $this;
    }

    /**
     * Gets best_study_card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getBestStudyCard()
    {
        return $this->container['best_study_card'];
    }

    /**
     * Sets best_study_card
     *
     * @param \CureDAO\Client\Model\Card $best_study_card Description of relationship with variable with strongest relationship for user or population
     *
     * @return $this
     */
    public function setBestStudyCard($best_study_card)
    {
        $this->container['best_study_card'] = $best_study_card;

        return $this;
    }

    /**
     * Gets best_user_study_link
     *
     * @return string
     */
    public function getBestUserStudyLink()
    {
        return $this->container['best_user_study_link'];
    }

    /**
     * Sets best_user_study_link
     *
     * @param string $best_user_study_link Link to study comparing variable with strongest relationship for user
     *
     * @return $this
     */
    public function setBestUserStudyLink($best_user_study_link)
    {
        $this->container['best_user_study_link'] = $best_user_study_link;

        return $this;
    }

    /**
     * Gets best_user_study_card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getBestUserStudyCard()
    {
        return $this->container['best_user_study_card'];
    }

    /**
     * Sets best_user_study_card
     *
     * @param \CureDAO\Client\Model\Card $best_user_study_card Description of relationship with variable with strongest relationship for user
     *
     * @return $this
     */
    public function setBestUserStudyCard($best_user_study_card)
    {
        $this->container['best_user_study_card'] = $best_user_study_card;

        return $this;
    }

    /**
     * Gets best_population_study_link
     *
     * @return string
     */
    public function getBestPopulationStudyLink()
    {
        return $this->container['best_population_study_link'];
    }

    /**
     * Sets best_population_study_link
     *
     * @param string $best_population_study_link Link to study comparing variable with strongest relationship for population
     *
     * @return $this
     */
    public function setBestPopulationStudyLink($best_population_study_link)
    {
        $this->container['best_population_study_link'] = $best_population_study_link;

        return $this;
    }

    /**
     * Gets best_population_study_card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getBestPopulationStudyCard()
    {
        return $this->container['best_population_study_card'];
    }

    /**
     * Sets best_population_study_card
     *
     * @param \CureDAO\Client\Model\Card $best_population_study_card Description of relationship with variable with strongest relationship for population
     *
     * @return $this
     */
    public function setBestPopulationStudyCard($best_population_study_card)
    {
        $this->container['best_population_study_card'] = $best_population_study_card;

        return $this;
    }

    /**
     * Gets optimal_value_message
     *
     * @return string
     */
    public function getOptimalValueMessage()
    {
        return $this->container['optimal_value_message'];
    }

    /**
     * Sets optimal_value_message
     *
     * @param string $optimal_value_message Description of relationship with variable with strongest relationship for user or population
     *
     * @return $this
     */
    public function setOptimalValueMessage($optimal_value_message)
    {
        $this->container['optimal_value_message'] = $optimal_value_message;

        return $this;
    }

    /**
     * Gets common_optimal_value_message
     *
     * @return string
     */
    public function getCommonOptimalValueMessage()
    {
        return $this->container['common_optimal_value_message'];
    }

    /**
     * Sets common_optimal_value_message
     *
     * @param string $common_optimal_value_message Description of relationship with variable with strongest relationship for population
     *
     * @return $this
     */
    public function setCommonOptimalValueMessage($common_optimal_value_message)
    {
        $this->container['common_optimal_value_message'] = $common_optimal_value_message;

        return $this;
    }

    /**
     * Gets user_optimal_value_message
     *
     * @return string
     */
    public function getUserOptimalValueMessage()
    {
        return $this->container['user_optimal_value_message'];
    }

    /**
     * Sets user_optimal_value_message
     *
     * @param string $user_optimal_value_message Description of relationship with variable with strongest relationship for user
     *
     * @return $this
     */
    public function setUserOptimalValueMessage($user_optimal_value_message)
    {
        $this->container['user_optimal_value_message'] = $user_optimal_value_message;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Model\Card $card Card containing instructions, image, text, link and relevant import buttons
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets cause_only
     *
     * @return bool
     */
    public function getCauseOnly()
    {
        return $this->container['cause_only'];
    }

    /**
     * Sets cause_only
     *
     * @param bool $cause_only User-Defined Variable Setting: True indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user
     *
     * @return $this
     */
    public function setCauseOnly($cause_only)
    {
        $this->container['cause_only'] = $cause_only;

        return $this;
    }

    /**
     * Gets charts
     *
     * @return \CureDAO\Client\Model\VariableCharts
     */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
     * Sets charts
     *
     * @param \CureDAO\Client\Model\VariableCharts $charts charts
     *
     * @return $this
     */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;

        return $this;
    }

    /**
     * Gets charts_link_dynamic
     *
     * @return string
     */
    public function getChartsLinkDynamic()
    {
        return $this->container['charts_link_dynamic'];
    }

    /**
     * Sets charts_link_dynamic
     *
     * @param string $charts_link_dynamic Ex: https://local.quantimo.do/ionic/Modo/www/#/app/charts/Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29?variableName=Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&userId=230&pngUrl=https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png
     *
     * @return $this
     */
    public function setChartsLinkDynamic($charts_link_dynamic)
    {
        $this->container['charts_link_dynamic'] = $charts_link_dynamic;

        return $this;
    }

    /**
     * Gets charts_link_email
     *
     * @return string
     */
    public function getChartsLinkEmail()
    {
        return $this->container['charts_link_email'];
    }

    /**
     * Sets charts_link_email
     *
     * @param string $charts_link_email Ex: mailto:?subject=Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21&body=See%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20history%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%0A%0AHave%20a%20great%20day!
     *
     * @return $this
     */
    public function setChartsLinkEmail($charts_link_email)
    {
        $this->container['charts_link_email'] = $charts_link_email;

        return $this;
    }

    /**
     * Gets charts_link_facebook
     *
     * @return string
     */
    public function getChartsLinkFacebook()
    {
        return $this->container['charts_link_facebook'];
    }

    /**
     * Sets charts_link_facebook
     *
     * @param string $charts_link_facebook Ex: https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png
     *
     * @return $this
     */
    public function setChartsLinkFacebook($charts_link_facebook)
    {
        $this->container['charts_link_facebook'] = $charts_link_facebook;

        return $this;
    }

    /**
     * Gets charts_link_google
     *
     * @return string
     */
    public function getChartsLinkGoogle()
    {
        return $this->container['charts_link_google'];
    }

    /**
     * Sets charts_link_google
     *
     * @param string $charts_link_google Ex: https://plus.google.com/share?url=https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png
     *
     * @return $this
     */
    public function setChartsLinkGoogle($charts_link_google)
    {
        $this->container['charts_link_google'] = $charts_link_google;

        return $this;
    }

    /**
     * Gets charts_link_static
     *
     * @return string
     */
    public function getChartsLinkStatic()
    {
        return $this->container['charts_link_static'];
    }

    /**
     * Sets charts_link_static
     *
     * @param string $charts_link_static Ex: https://local.quantimo.do/api/v2/charts?variableName=Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&userId=230&pngUrl=https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png
     *
     * @return $this
     */
    public function setChartsLinkStatic($charts_link_static)
    {
        $this->container['charts_link_static'] = $charts_link_static;

        return $this;
    }

    /**
     * Gets charts_link_twitter
     *
     * @return string
     */
    public function getChartsLinkTwitter()
    {
        return $this->container['charts_link_twitter'];
    }

    /**
     * Sets charts_link_twitter
     *
     * @param string $charts_link_twitter Ex: https://twitter.com/home?status=Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%20%40curedao
     *
     * @return $this
     */
    public function setChartsLinkTwitter($charts_link_twitter)
    {
        $this->container['charts_link_twitter'] = $charts_link_twitter;

        return $this;
    }

    /**
     * Gets child_common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getChildCommonTagVariables()
    {
        return $this->container['child_common_tag_variables'];
    }

    /**
     * Sets child_common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $child_common_tag_variables Commonly defined for all users. An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake.
     *
     * @return $this
     */
    public function setChildCommonTagVariables($child_common_tag_variables)
    {
        $this->container['child_common_tag_variables'] = $child_common_tag_variables;

        return $this;
    }

    /**
     * Gets child_user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getChildUserTagVariables()
    {
        return $this->container['child_user_tag_variables'];
    }

    /**
     * Sets child_user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $child_user_tag_variables User-Defined Variable Setting: An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake.
     *
     * @return $this
     */
    public function setChildUserTagVariables($child_user_tag_variables)
    {
        $this->container['child_user_tag_variables'] = $child_user_tag_variables;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Your CureDAO client id can be obtained by creating an app at https://builder.curedao.org
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets combination_operation
     *
     * @return string
     */
    public function getCombinationOperation()
    {
        return $this->container['combination_operation'];
    }

    /**
     * Sets combination_operation
     *
     * @param string $combination_operation User-Defined Variable Setting: How to aggregate measurements over time. SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED.
     *
     * @return $this
     */
    public function setCombinationOperation($combination_operation)
    {
        $allowedValues = $this->getCombinationOperationAllowableValues();
        if (!is_null($combination_operation) && !in_array($combination_operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'combination_operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['combination_operation'] = $combination_operation;

        return $this;
    }

    /**
     * Gets common_alias
     *
     * @return string
     */
    public function getCommonAlias()
    {
        return $this->container['common_alias'];
    }

    /**
     * Sets common_alias
     *
     * @param string $common_alias Ex: Anxiety / Nervousness
     *
     * @return $this
     */
    public function setCommonAlias($common_alias)
    {
        $this->container['common_alias'] = $common_alias;

        return $this;
    }

    /**
     * Gets common_tagged_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getCommonTaggedVariables()
    {
        return $this->container['common_tagged_variables'];
    }

    /**
     * Sets common_tagged_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $common_tagged_variables common_tagged_variables
     *
     * @return $this
     */
    public function setCommonTaggedVariables($common_tagged_variables)
    {
        $this->container['common_tagged_variables'] = $common_tagged_variables;

        return $this;
    }

    /**
     * Gets common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getCommonTagVariables()
    {
        return $this->container['common_tag_variables'];
    }

    /**
     * Sets common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $common_tag_variables common_tag_variables
     *
     * @return $this
     */
    public function setCommonTagVariables($common_tag_variables)
    {
        $this->container['common_tag_variables'] = $common_tag_variables;

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
     * @param string $created_at When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets data_source_names
     *
     * @return string
     */
    public function getDataSourceNames()
    {
        return $this->container['data_source_names'];
    }

    /**
     * Sets data_source_names
     *
     * @param string $data_source_names Comma-separated list of source names to limit variables to those sources
     *
     * @return $this
     */
    public function setDataSourceNames($data_source_names)
    {
        $this->container['data_source_names'] = $data_source_names;

        return $this;
    }

    /**
     * Gets data_sources
     *
     * @return \CureDAO\Client\Model\DataSource[]
     */
    public function getDataSources()
    {
        return $this->container['data_sources'];
    }

    /**
     * Sets data_sources
     *
     * @param \CureDAO\Client\Model\DataSource[] $data_sources These are sources of measurements for this variable
     *
     * @return $this
     */
    public function setDataSources($data_sources)
    {
        $this->container['data_sources'] = $data_sources;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description User-Defined Variable Setting: Ex: Summary to be used in studies.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Ex: Trader Joe's Bedtime Tea
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. Unit: Seconds
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
     * Gets earliest_filling_time
     *
     * @return int
     */
    public function getEarliestFillingTime()
    {
        return $this->container['earliest_filling_time'];
    }

    /**
     * Sets earliest_filling_time
     *
     * @param int $earliest_filling_time Earliest filling time
     *
     * @return $this
     */
    public function setEarliestFillingTime($earliest_filling_time)
    {
        $this->container['earliest_filling_time'] = $earliest_filling_time;

        return $this;
    }

    /**
     * Gets earliest_measurement_time
     *
     * @return int
     */
    public function getEarliestMeasurementTime()
    {
        return $this->container['earliest_measurement_time'];
    }

    /**
     * Sets earliest_measurement_time
     *
     * @param int $earliest_measurement_time Earliest measurement time
     *
     * @return $this
     */
    public function setEarliestMeasurementTime($earliest_measurement_time)
    {
        $this->container['earliest_measurement_time'] = $earliest_measurement_time;

        return $this;
    }

    /**
     * Gets earliest_source_time
     *
     * @return int
     */
    public function getEarliestSourceTime()
    {
        return $this->container['earliest_source_time'];
    }

    /**
     * Sets earliest_source_time
     *
     * @param int $earliest_source_time Earliest source time
     *
     * @return $this
     */
    public function setEarliestSourceTime($earliest_source_time)
    {
        $this->container['earliest_source_time'] = $earliest_source_time;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message Error message from last analysis
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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
     * @param string $experiment_end_time User-Defined Variable Setting: Latest measurement time to be used in analysis. Format: UTC ISO 8601 YYYY-MM-DDThh:mm:ss.
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
     * @param string $experiment_start_time User-Defined Variable Setting: Earliest measurement time to be used in analysis. Format: UTC ISO 8601 YYYY-MM-DDThh:mm:ss.
     *
     * @return $this
     */
    public function setExperimentStartTime($experiment_start_time)
    {
        $this->container['experiment_start_time'] = $experiment_start_time;

        return $this;
    }

    /**
     * Gets filling_type
     *
     * @return string
     */
    public function getFillingType()
    {
        return $this->container['filling_type'];
    }

    /**
     * Sets filling_type
     *
     * @param string $filling_type User-Defined Variable Setting: When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven't taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing.
     *
     * @return $this
     */
    public function setFillingType($filling_type)
    {
        $allowedValues = $this->getFillingTypeAllowableValues();
        if (!is_null($filling_type) && !in_array($filling_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filling_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filling_type'] = $filling_type;

        return $this;
    }

    /**
     * Gets filling_value
     *
     * @return float
     */
    public function getFillingValue()
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     *
     * @param float $filling_value User-Defined Variable Setting: When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven't taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing.  Unit: User-specified or common.
     *
     * @return $this
     */
    public function setFillingValue($filling_value)
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets icon_icon
     *
     * @return string
     */
    public function getIconIcon()
    {
        return $this->container['icon_icon'];
    }

    /**
     * Sets icon_icon
     *
     * @param string $icon_icon Ex: ion-sad-outline
     *
     * @return $this
     */
    public function setIconIcon($icon_icon)
    {
        $this->container['icon_icon'] = $icon_icon;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Ex: 95614
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url What do you expect?
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets informational_url
     *
     * @return string
     */
    public function getInformationalUrl()
    {
        return $this->container['informational_url'];
    }

    /**
     * Sets informational_url
     *
     * @param string $informational_url Ex: https://google.com
     *
     * @return $this
     */
    public function setInformationalUrl($informational_url)
    {
        $this->container['informational_url'] = $informational_url;

        return $this;
    }

    /**
     * Gets ingredient_of_common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getIngredientOfCommonTagVariables()
    {
        return $this->container['ingredient_of_common_tag_variables'];
    }

    /**
     * Sets ingredient_of_common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $ingredient_of_common_tag_variables Commonly defined for all users. IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you.
     *
     * @return $this
     */
    public function setIngredientOfCommonTagVariables($ingredient_of_common_tag_variables)
    {
        $this->container['ingredient_of_common_tag_variables'] = $ingredient_of_common_tag_variables;

        return $this;
    }

    /**
     * Gets ingredient_common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getIngredientCommonTagVariables()
    {
        return $this->container['ingredient_common_tag_variables'];
    }

    /**
     * Sets ingredient_common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $ingredient_common_tag_variables Commonly defined for all users. IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you.
     *
     * @return $this
     */
    public function setIngredientCommonTagVariables($ingredient_common_tag_variables)
    {
        $this->container['ingredient_common_tag_variables'] = $ingredient_common_tag_variables;

        return $this;
    }

    /**
     * Gets ingredient_of_user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getIngredientOfUserTagVariables()
    {
        return $this->container['ingredient_of_user_tag_variables'];
    }

    /**
     * Sets ingredient_of_user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $ingredient_of_user_tag_variables User-Defined Variable Setting: IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you.
     *
     * @return $this
     */
    public function setIngredientOfUserTagVariables($ingredient_of_user_tag_variables)
    {
        $this->container['ingredient_of_user_tag_variables'] = $ingredient_of_user_tag_variables;

        return $this;
    }

    /**
     * Gets ingredient_user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getIngredientUserTagVariables()
    {
        return $this->container['ingredient_user_tag_variables'];
    }

    /**
     * Sets ingredient_user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $ingredient_user_tag_variables User-Defined Variable Setting: IngredientOf variable measurements will be included in analysis of the ingredient variable.  For instance, a ingredient of the variable Lollipop could be Sugar.  This way you only have to record Lollipop consumption and we can use this data to see how sugar might be affecting you.
     *
     * @return $this
     */
    public function setIngredientUserTagVariables($ingredient_user_tag_variables)
    {
        $this->container['ingredient_user_tag_variables'] = $ingredient_user_tag_variables;

        return $this;
    }

    /**
     * Gets input_type
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->container['input_type'];
    }

    /**
     * Sets input_type
     *
     * @param string $input_type Type of input field to show for recording measurements
     *
     * @return $this
     */
    public function setInputType($input_type)
    {
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets ion_icon
     *
     * @return string
     */
    public function getIonIcon()
    {
        return $this->container['ion_icon'];
    }

    /**
     * Sets ion_icon
     *
     * @param string $ion_icon What do you expect?
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets joined_common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getJoinedCommonTagVariables()
    {
        return $this->container['joined_common_tag_variables'];
    }

    /**
     * Sets joined_common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $joined_common_tag_variables Commonly defined for all users.  Joining can be used used to merge duplicate variables. For instance, if two variables called Apples (Red Delicious) and Red Delicious Apples are joined, when one of them is analyzed, the measurements for the other will be included as well.
     *
     * @return $this
     */
    public function setJoinedCommonTagVariables($joined_common_tag_variables)
    {
        $this->container['joined_common_tag_variables'] = $joined_common_tag_variables;

        return $this;
    }

    /**
     * Gets joined_user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getJoinedUserTagVariables()
    {
        return $this->container['joined_user_tag_variables'];
    }

    /**
     * Sets joined_user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $joined_user_tag_variables User-Defined Variable Setting: Joining can be used used to merge duplicate variables. For instance, if two variables called Apples (Red Delicious) and Red Delicious Apples are joined, when one of them is analyzed, the measurements for the other will be included as well.
     *
     * @return $this
     */
    public function setJoinedUserTagVariables($joined_user_tag_variables)
    {
        $this->container['joined_user_tag_variables'] = $joined_user_tag_variables;

        return $this;
    }

    /**
     * Gets join_with
     *
     * @return int
     */
    public function getJoinWith()
    {
        return $this->container['join_with'];
    }

    /**
     * Sets join_with
     *
     * @param int $join_with Duplicate variables. If the variable is joined with some other variable then it is not shown to user in the list of variables
     *
     * @return $this
     */
    public function setJoinWith($join_with)
    {
        $this->container['join_with'] = $join_with;

        return $this;
    }

    /**
     * Gets kurtosis
     *
     * @return float
     */
    public function getKurtosis()
    {
        return $this->container['kurtosis'];
    }

    /**
     * Sets kurtosis
     *
     * @param float $kurtosis Kurtosis
     *
     * @return $this
     */
    public function setKurtosis($kurtosis)
    {
        $this->container['kurtosis'] = $kurtosis;

        return $this;
    }

    /**
     * Gets last_processed_daily_value
     *
     * @return double
     */
    public function getLastProcessedDailyValue()
    {
        return $this->container['last_processed_daily_value'];
    }

    /**
     * Sets last_processed_daily_value
     *
     * @param double $last_processed_daily_value Calculated Statistic: Ex: 500. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setLastProcessedDailyValue($last_processed_daily_value)
    {
        $this->container['last_processed_daily_value'] = $last_processed_daily_value;

        return $this;
    }

    /**
     * Gets last_successful_update_time
     *
     * @return string
     */
    public function getLastSuccessfulUpdateTime()
    {
        return $this->container['last_successful_update_time'];
    }

    /**
     * Sets last_successful_update_time
     *
     * @param string $last_successful_update_time When this variable or its settings were last updated UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setLastSuccessfulUpdateTime($last_successful_update_time)
    {
        $this->container['last_successful_update_time'] = $last_successful_update_time;

        return $this;
    }

    /**
     * Gets last_value
     *
     * @return float
     */
    public function getLastValue()
    {
        return $this->container['last_value'];
    }

    /**
     * Sets last_value
     *
     * @param float $last_value Calculated Statistic: Last measurement value in the common unit or user unit if different. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setLastValue($last_value)
    {
        $this->container['last_value'] = $last_value;

        return $this;
    }

    /**
     * Gets latest_filling_time
     *
     * @return int
     */
    public function getLatestFillingTime()
    {
        return $this->container['latest_filling_time'];
    }

    /**
     * Sets latest_filling_time
     *
     * @param int $latest_filling_time Latest filling time
     *
     * @return $this
     */
    public function setLatestFillingTime($latest_filling_time)
    {
        $this->container['latest_filling_time'] = $latest_filling_time;

        return $this;
    }

    /**
     * Gets latest_measurement_time
     *
     * @return int
     */
    public function getLatestMeasurementTime()
    {
        return $this->container['latest_measurement_time'];
    }

    /**
     * Sets latest_measurement_time
     *
     * @param int $latest_measurement_time Latest measurement time. Format: Unix-time epoch seconds.
     *
     * @return $this
     */
    public function setLatestMeasurementTime($latest_measurement_time)
    {
        $this->container['latest_measurement_time'] = $latest_measurement_time;

        return $this;
    }

    /**
     * Gets latest_source_time
     *
     * @return int
     */
    public function getLatestSourceTime()
    {
        return $this->container['latest_source_time'];
    }

    /**
     * Sets latest_source_time
     *
     * @param int $latest_source_time Latest source time. Format: Unix-time epoch seconds.
     *
     * @return $this
     */
    public function setLatestSourceTime($latest_source_time)
    {
        $this->container['latest_source_time'] = $latest_source_time;

        return $this;
    }

    /**
     * Gets latest_user_measurement_time
     *
     * @return int
     */
    public function getLatestUserMeasurementTime()
    {
        return $this->container['latest_user_measurement_time'];
    }

    /**
     * Sets latest_user_measurement_time
     *
     * @param int $latest_user_measurement_time Ex: 1501383600. Format: Unix-time epoch seconds.
     *
     * @return $this
     */
    public function setLatestUserMeasurementTime($latest_user_measurement_time)
    {
        $this->container['latest_user_measurement_time'] = $latest_user_measurement_time;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude Latitude. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude Longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets manual_tracking
     *
     * @return bool
     */
    public function getManualTracking()
    {
        return $this->container['manual_tracking'];
    }

    /**
     * Sets manual_tracking
     *
     * @param bool $manual_tracking True if the variable is an emotion or symptom rating that is not typically automatically collected by a device or app.
     *
     * @return $this
     */
    public function setManualTracking($manual_tracking)
    {
        $this->container['manual_tracking'] = $manual_tracking;

        return $this;
    }

    /**
     * Gets maximum_allowed_daily_value
     *
     * @return float
     */
    public function getMaximumAllowedDailyValue()
    {
        return $this->container['maximum_allowed_daily_value'];
    }

    /**
     * Sets maximum_allowed_daily_value
     *
     * @param float $maximum_allowed_daily_value User-Defined Variable Setting: The maximum allowed value a daily aggregated measurement. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMaximumAllowedDailyValue($maximum_allowed_daily_value)
    {
        $this->container['maximum_allowed_daily_value'] = $maximum_allowed_daily_value;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     *
     * @return float
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     *
     * @param float $maximum_allowed_value User-Defined Variable Setting: The maximum allowed value a single measurement. While you can record a value above this maximum, it will be excluded from the correlation analysis.  Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets maximum_recorded_daily_value
     *
     * @return float
     */
    public function getMaximumRecordedDailyValue()
    {
        return $this->container['maximum_recorded_daily_value'];
    }

    /**
     * Sets maximum_recorded_daily_value
     *
     * @param float $maximum_recorded_daily_value Calculated Statistic: Maximum recorded daily value of this variable. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMaximumRecordedDailyValue($maximum_recorded_daily_value)
    {
        $this->container['maximum_recorded_daily_value'] = $maximum_recorded_daily_value;

        return $this;
    }

    /**
     * Gets maximum_recorded_value
     *
     * @return double
     */
    public function getMaximumRecordedValue()
    {
        return $this->container['maximum_recorded_value'];
    }

    /**
     * Sets maximum_recorded_value
     *
     * @param double $maximum_recorded_value Calculated Statistic: Ex: 1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMaximumRecordedValue($maximum_recorded_value)
    {
        $this->container['maximum_recorded_value'] = $maximum_recorded_value;

        return $this;
    }

    /**
     * Gets mean
     *
     * @return float
     */
    public function getMean()
    {
        return $this->container['mean'];
    }

    /**
     * Sets mean
     *
     * @param float $mean Mean. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMean($mean)
    {
        $this->container['mean'] = $mean;

        return $this;
    }

    /**
     * Gets measurements_at_last_analysis
     *
     * @return int
     */
    public function getMeasurementsAtLastAnalysis()
    {
        return $this->container['measurements_at_last_analysis'];
    }

    /**
     * Sets measurements_at_last_analysis
     *
     * @param int $measurements_at_last_analysis Number of measurements at last analysis
     *
     * @return $this
     */
    public function setMeasurementsAtLastAnalysis($measurements_at_last_analysis)
    {
        $this->container['measurements_at_last_analysis'] = $measurements_at_last_analysis;

        return $this;
    }

    /**
     * Gets median
     *
     * @return float
     */
    public function getMedian()
    {
        return $this->container['median'];
    }

    /**
     * Sets median
     *
     * @param float $median Median
     *
     * @return $this
     */
    public function setMedian($median)
    {
        $this->container['median'] = $median;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     *
     * @return float
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     *
     * @param float $minimum_allowed_value User-Defined Variable Setting: The minimum allowed value a single measurement. While you can record a value below this minimum, it will be excluded from the correlation analysis. Unit: User-specified or common
     *
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets minimum_allowed_daily_value
     *
     * @return float
     */
    public function getMinimumAllowedDailyValue()
    {
        return $this->container['minimum_allowed_daily_value'];
    }

    /**
     * Sets minimum_allowed_daily_value
     *
     * @param float $minimum_allowed_daily_value User-Defined Variable Setting: The minimum allowed value a daily aggregated measurement.  For instance, you might set to 100 for steps to keep erroneous 0 daily steps out of the analysis. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMinimumAllowedDailyValue($minimum_allowed_daily_value)
    {
        $this->container['minimum_allowed_daily_value'] = $minimum_allowed_daily_value;

        return $this;
    }

    /**
     * Gets minimum_non_zero_value
     *
     * @return float
     */
    public function getMinimumNonZeroValue()
    {
        return $this->container['minimum_non_zero_value'];
    }

    /**
     * Sets minimum_non_zero_value
     *
     * @param float $minimum_non_zero_value User-Defined Variable Setting: The minimum allowed non-zero value a single measurement.  For instance, you might set to 100 mL for steps to keep erroneous 0 daily steps out of the analysis. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMinimumNonZeroValue($minimum_non_zero_value)
    {
        $this->container['minimum_non_zero_value'] = $minimum_non_zero_value;

        return $this;
    }

    /**
     * Gets minimum_recorded_value
     *
     * @return float
     */
    public function getMinimumRecordedValue()
    {
        return $this->container['minimum_recorded_value'];
    }

    /**
     * Sets minimum_recorded_value
     *
     * @param float $minimum_recorded_value Minimum recorded value of this variable. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMinimumRecordedValue($minimum_recorded_value)
    {
        $this->container['minimum_recorded_value'] = $minimum_recorded_value;

        return $this;
    }

    /**
     * Gets most_common_connector_id
     *
     * @return int
     */
    public function getMostCommonConnectorId()
    {
        return $this->container['most_common_connector_id'];
    }

    /**
     * Sets most_common_connector_id
     *
     * @param int $most_common_connector_id Ex: 51
     *
     * @return $this
     */
    public function setMostCommonConnectorId($most_common_connector_id)
    {
        $this->container['most_common_connector_id'] = $most_common_connector_id;

        return $this;
    }

    /**
     * Gets most_common_original_unit_id
     *
     * @return int
     */
    public function getMostCommonOriginalUnitId()
    {
        return $this->container['most_common_original_unit_id'];
    }

    /**
     * Sets most_common_original_unit_id
     *
     * @param int $most_common_original_unit_id Ex: 23
     *
     * @return $this
     */
    public function setMostCommonOriginalUnitId($most_common_original_unit_id)
    {
        $this->container['most_common_original_unit_id'] = $most_common_original_unit_id;

        return $this;
    }

    /**
     * Gets most_common_unit_id
     *
     * @return int
     */
    public function getMostCommonUnitId()
    {
        return $this->container['most_common_unit_id'];
    }

    /**
     * Sets most_common_unit_id
     *
     * @param int $most_common_unit_id Most common Unit ID
     *
     * @return $this
     */
    public function setMostCommonUnitId($most_common_unit_id)
    {
        $this->container['most_common_unit_id'] = $most_common_unit_id;

        return $this;
    }

    /**
     * Gets most_common_value
     *
     * @return float
     */
    public function getMostCommonValue()
    {
        return $this->container['most_common_value'];
    }

    /**
     * Sets most_common_value
     *
     * @param float $most_common_value Calculated Statistic: Most common value. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMostCommonValue($most_common_value)
    {
        $this->container['most_common_value'] = $most_common_value;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Ex: Trader Joes Bedtime Tea / Sleepytime Tea (any Brand)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number_of_aggregate_correlations_as_cause
     *
     * @return int
     */
    public function getNumberOfAggregateCorrelationsAsCause()
    {
        return $this->container['number_of_aggregate_correlations_as_cause'];
    }

    /**
     * Sets number_of_aggregate_correlations_as_cause
     *
     * @param int $number_of_aggregate_correlations_as_cause Ex: 1
     *
     * @return $this
     */
    public function setNumberOfAggregateCorrelationsAsCause($number_of_aggregate_correlations_as_cause)
    {
        $this->container['number_of_aggregate_correlations_as_cause'] = $number_of_aggregate_correlations_as_cause;

        return $this;
    }

    /**
     * Gets number_of_aggregate_correlations_as_effect
     *
     * @return int
     */
    public function getNumberOfAggregateCorrelationsAsEffect()
    {
        return $this->container['number_of_aggregate_correlations_as_effect'];
    }

    /**
     * Sets number_of_aggregate_correlations_as_effect
     *
     * @param int $number_of_aggregate_correlations_as_effect Ex: 310
     *
     * @return $this
     */
    public function setNumberOfAggregateCorrelationsAsEffect($number_of_aggregate_correlations_as_effect)
    {
        $this->container['number_of_aggregate_correlations_as_effect'] = $number_of_aggregate_correlations_as_effect;

        return $this;
    }

    /**
     * Gets number_of_changes
     *
     * @return int
     */
    public function getNumberOfChanges()
    {
        return $this->container['number_of_changes'];
    }

    /**
     * Sets number_of_changes
     *
     * @param int $number_of_changes Number of changes
     *
     * @return $this
     */
    public function setNumberOfChanges($number_of_changes)
    {
        $this->container['number_of_changes'] = $number_of_changes;

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
     * @param int $number_of_correlations Number of correlations for this variable
     *
     * @return $this
     */
    public function setNumberOfCorrelations($number_of_correlations)
    {
        $this->container['number_of_correlations'] = $number_of_correlations;

        return $this;
    }

    /**
     * Gets number_of_correlations_as_cause
     *
     * @return int
     */
    public function getNumberOfCorrelationsAsCause()
    {
        return $this->container['number_of_correlations_as_cause'];
    }

    /**
     * Sets number_of_correlations_as_cause
     *
     * @param int $number_of_correlations_as_cause numberOfAggregateCorrelationsAsCause plus numberOfUserCorrelationsAsCause
     *
     * @return $this
     */
    public function setNumberOfCorrelationsAsCause($number_of_correlations_as_cause)
    {
        $this->container['number_of_correlations_as_cause'] = $number_of_correlations_as_cause;

        return $this;
    }

    /**
     * Gets number_of_correlations_as_effect
     *
     * @return int
     */
    public function getNumberOfCorrelationsAsEffect()
    {
        return $this->container['number_of_correlations_as_effect'];
    }

    /**
     * Sets number_of_correlations_as_effect
     *
     * @param int $number_of_correlations_as_effect numberOfAggregateCorrelationsAsEffect plus numberOfUserCorrelationsAsEffect
     *
     * @return $this
     */
    public function setNumberOfCorrelationsAsEffect($number_of_correlations_as_effect)
    {
        $this->container['number_of_correlations_as_effect'] = $number_of_correlations_as_effect;

        return $this;
    }

    /**
     * Gets number_of_processed_daily_measurements
     *
     * @return int
     */
    public function getNumberOfProcessedDailyMeasurements()
    {
        return $this->container['number_of_processed_daily_measurements'];
    }

    /**
     * Sets number_of_processed_daily_measurements
     *
     * @param int $number_of_processed_daily_measurements Number of processed measurements
     *
     * @return $this
     */
    public function setNumberOfProcessedDailyMeasurements($number_of_processed_daily_measurements)
    {
        $this->container['number_of_processed_daily_measurements'] = $number_of_processed_daily_measurements;

        return $this;
    }

    /**
     * Gets number_of_raw_measurements
     *
     * @return int
     */
    public function getNumberOfRawMeasurements()
    {
        return $this->container['number_of_raw_measurements'];
    }

    /**
     * Sets number_of_raw_measurements
     *
     * @param int $number_of_raw_measurements Ex: 295
     *
     * @return $this
     */
    public function setNumberOfRawMeasurements($number_of_raw_measurements)
    {
        $this->container['number_of_raw_measurements'] = $number_of_raw_measurements;

        return $this;
    }

    /**
     * Gets number_of_tracking_reminders
     *
     * @return int
     */
    public function getNumberOfTrackingReminders()
    {
        return $this->container['number_of_tracking_reminders'];
    }

    /**
     * Sets number_of_tracking_reminders
     *
     * @param int $number_of_tracking_reminders Ex: 1
     *
     * @return $this
     */
    public function setNumberOfTrackingReminders($number_of_tracking_reminders)
    {
        $this->container['number_of_tracking_reminders'] = $number_of_tracking_reminders;

        return $this;
    }

    /**
     * Gets number_of_unique_daily_values
     *
     * @return float
     */
    public function getNumberOfUniqueDailyValues()
    {
        return $this->container['number_of_unique_daily_values'];
    }

    /**
     * Sets number_of_unique_daily_values
     *
     * @param float $number_of_unique_daily_values Number of unique daily values
     *
     * @return $this
     */
    public function setNumberOfUniqueDailyValues($number_of_unique_daily_values)
    {
        $this->container['number_of_unique_daily_values'] = $number_of_unique_daily_values;

        return $this;
    }

    /**
     * Gets number_of_unique_values
     *
     * @return int
     */
    public function getNumberOfUniqueValues()
    {
        return $this->container['number_of_unique_values'];
    }

    /**
     * Sets number_of_unique_values
     *
     * @param int $number_of_unique_values Ex: 2
     *
     * @return $this
     */
    public function setNumberOfUniqueValues($number_of_unique_values)
    {
        $this->container['number_of_unique_values'] = $number_of_unique_values;

        return $this;
    }

    /**
     * Gets number_of_user_correlations_as_cause
     *
     * @return int
     */
    public function getNumberOfUserCorrelationsAsCause()
    {
        return $this->container['number_of_user_correlations_as_cause'];
    }

    /**
     * Sets number_of_user_correlations_as_cause
     *
     * @param int $number_of_user_correlations_as_cause Ex: 115
     *
     * @return $this
     */
    public function setNumberOfUserCorrelationsAsCause($number_of_user_correlations_as_cause)
    {
        $this->container['number_of_user_correlations_as_cause'] = $number_of_user_correlations_as_cause;

        return $this;
    }

    /**
     * Gets number_of_user_correlations_as_effect
     *
     * @return int
     */
    public function getNumberOfUserCorrelationsAsEffect()
    {
        return $this->container['number_of_user_correlations_as_effect'];
    }

    /**
     * Sets number_of_user_correlations_as_effect
     *
     * @param int $number_of_user_correlations_as_effect Ex: 29014
     *
     * @return $this
     */
    public function setNumberOfUserCorrelationsAsEffect($number_of_user_correlations_as_effect)
    {
        $this->container['number_of_user_correlations_as_effect'] = $number_of_user_correlations_as_effect;

        return $this;
    }

    /**
     * Gets number_of_user_variables
     *
     * @return int
     */
    public function getNumberOfUserVariables()
    {
        return $this->container['number_of_user_variables'];
    }

    /**
     * Sets number_of_user_variables
     *
     * @param int $number_of_user_variables Ex: 2
     *
     * @return $this
     */
    public function setNumberOfUserVariables($number_of_user_variables)
    {
        $this->container['number_of_user_variables'] = $number_of_user_variables;

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
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
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
     * @return double
     */
    public function getOnsetDelayInHours()
    {
        return $this->container['onset_delay_in_hours'];
    }

    /**
     * Sets onset_delay_in_hours
     *
     * @param double $onset_delay_in_hours User-Defined Variable Setting: The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
     *
     * @return $this
     */
    public function setOnsetDelayInHours($onset_delay_in_hours)
    {
        $this->container['onset_delay_in_hours'] = $onset_delay_in_hours;

        return $this;
    }

    /**
     * Gets outcome
     *
     * @return bool
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param bool $outcome User-Defined Variable Setting: True for variables for which a human would generally want to identify the influencing factors. These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets outcome_of_interest
     *
     * @return bool
     */
    public function getOutcomeOfInterest()
    {
        return $this->container['outcome_of_interest'];
    }

    /**
     * Sets outcome_of_interest
     *
     * @param bool $outcome_of_interest Do you want to receive updates on newly discovered factors influencing this variable?
     *
     * @return $this
     */
    public function setOutcomeOfInterest($outcome_of_interest)
    {
        $this->container['outcome_of_interest'] = $outcome_of_interest;

        return $this;
    }

    /**
     * Gets parent_common_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getParentCommonTagVariables()
    {
        return $this->container['parent_common_tag_variables'];
    }

    /**
     * Sets parent_common_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $parent_common_tag_variables Commonly defined for all users.  An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake.
     *
     * @return $this
     */
    public function setParentCommonTagVariables($parent_common_tag_variables)
    {
        $this->container['parent_common_tag_variables'] = $parent_common_tag_variables;

        return $this;
    }

    /**
     * Gets parent_user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getParentUserTagVariables()
    {
        return $this->container['parent_user_tag_variables'];
    }

    /**
     * Sets parent_user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $parent_user_tag_variables User-defined. An example of a parent category variable would be Fruit when tagged with the child sub-type variables Apple.  Child variable (Apple) measurements will be included when the parent category (Fruit) is analyzed.  This allows us to see how Fruit consumption might be affecting without having to record both Fruit and Apple intake.
     *
     * @return $this
     */
    public function setParentUserTagVariables($parent_user_tag_variables)
    {
        $this->container['parent_user_tag_variables'] = $parent_user_tag_variables;

        return $this;
    }

    /**
     * Gets png_path
     *
     * @return string
     */
    public function getPngPath()
    {
        return $this->container['png_path'];
    }

    /**
     * Sets png_path
     *
     * @param string $png_path Ex: img/variable_categories/treatments.png
     *
     * @return $this
     */
    public function setPngPath($png_path)
    {
        $this->container['png_path'] = $png_path;

        return $this;
    }

    /**
     * Gets png_url
     *
     * @return string
     */
    public function getPngUrl()
    {
        return $this->container['png_url'];
    }

    /**
     * Sets png_url
     *
     * @param string $png_url Ex: https://web.quantimo.do/img/variable_categories/treatments.png
     *
     * @return $this
     */
    public function setPngUrl($png_url)
    {
        $this->container['png_url'] = $png_url;

        return $this;
    }

    /**
     * Gets predictor_of_interest
     *
     * @return int
     */
    public function getPredictorOfInterest()
    {
        return $this->container['predictor_of_interest'];
    }

    /**
     * Sets predictor_of_interest
     *
     * @param int $predictor_of_interest Ex: 0
     *
     * @return $this
     */
    public function setPredictorOfInterest($predictor_of_interest)
    {
        $this->container['predictor_of_interest'] = $predictor_of_interest;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Ex: 95.4
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets product_url
     *
     * @return string
     */
    public function getProductUrl()
    {
        return $this->container['product_url'];
    }

    /**
     * Sets product_url
     *
     * @param string $product_url Link to associated product for purchase
     *
     * @return $this
     */
    public function setProductUrl($product_url)
    {
        $this->container['product_url'] = $product_url;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public Should this variable show up in automcomplete searches for users who do not already have measurements for it?
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     *
     * @param string $question Ex: How is your overall mood?
     *
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets long_question
     *
     * @return string
     */
    public function getLongQuestion()
    {
        return $this->container['long_question'];
    }

    /**
     * Sets long_question
     *
     * @param string $long_question Ex: How is your overall mood on a scale of 1 to 5??
     *
     * @return $this
     */
    public function setLongQuestion($long_question)
    {
        $this->container['long_question'] = $long_question;

        return $this;
    }

    /**
     * Gets raw_measurements_at_last_analysis
     *
     * @return int
     */
    public function getRawMeasurementsAtLastAnalysis()
    {
        return $this->container['raw_measurements_at_last_analysis'];
    }

    /**
     * Sets raw_measurements_at_last_analysis
     *
     * @param int $raw_measurements_at_last_analysis Ex: 131
     *
     * @return $this
     */
    public function setRawMeasurementsAtLastAnalysis($raw_measurements_at_last_analysis)
    {
        $this->container['raw_measurements_at_last_analysis'] = $raw_measurements_at_last_analysis;

        return $this;
    }

    /**
     * Gets second_most_common_value
     *
     * @return double
     */
    public function getSecondMostCommonValue()
    {
        return $this->container['second_most_common_value'];
    }

    /**
     * Sets second_most_common_value
     *
     * @param double $second_most_common_value Calculated Statistic: Ex: 1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setSecondMostCommonValue($second_most_common_value)
    {
        $this->container['second_most_common_value'] = $second_most_common_value;

        return $this;
    }

    /**
     * Gets second_to_last_value
     *
     * @return double
     */
    public function getSecondToLastValue()
    {
        return $this->container['second_to_last_value'];
    }

    /**
     * Sets second_to_last_value
     *
     * @param double $second_to_last_value Calculated Statistic: Ex: 250. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setSecondToLastValue($second_to_last_value)
    {
        $this->container['second_to_last_value'] = $second_to_last_value;

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
     * @param bool $share_user_measurements Would you like to make your measurements publicly visible?
     *
     * @return $this
     */
    public function setShareUserMeasurements($share_user_measurements)
    {
        $this->container['share_user_measurements'] = $share_user_measurements;

        return $this;
    }

    /**
     * Gets skewness
     *
     * @return float
     */
    public function getSkewness()
    {
        return $this->container['skewness'];
    }

    /**
     * Sets skewness
     *
     * @param float $skewness Skewness
     *
     * @return $this
     */
    public function setSkewness($skewness)
    {
        $this->container['skewness'] = $skewness;

        return $this;
    }

    /**
     * Gets standard_deviation
     *
     * @return double
     */
    public function getStandardDeviation()
    {
        return $this->container['standard_deviation'];
    }

    /**
     * Sets standard_deviation
     *
     * @param double $standard_deviation Standard deviation Ex: 0.46483219855434
     *
     * @return $this
     */
    public function setStandardDeviation($standard_deviation)
    {
        $this->container['standard_deviation'] = $standard_deviation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string $subtitle Based on sort filter and can be shown beneath variable name on search list
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets svg_url
     *
     * @return string
     */
    public function getSvgUrl()
    {
        return $this->container['svg_url'];
    }

    /**
     * Sets svg_url
     *
     * @param string $svg_url Ex: https://web.quantimo.do/img/variable_categories/treatments.svg
     *
     * @return $this
     */
    public function setSvgUrl($svg_url)
    {
        $this->container['svg_url'] = $svg_url;

        return $this;
    }

    /**
     * Gets third_most_common_value
     *
     * @return double
     */
    public function getThirdMostCommonValue()
    {
        return $this->container['third_most_common_value'];
    }

    /**
     * Sets third_most_common_value
     *
     * @param double $third_most_common_value Calculated Statistic: Ex: 6. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setThirdMostCommonValue($third_most_common_value)
    {
        $this->container['third_most_common_value'] = $third_most_common_value;

        return $this;
    }

    /**
     * Gets third_to_last_value
     *
     * @return double
     */
    public function getThirdToLastValue()
    {
        return $this->container['third_to_last_value'];
    }

    /**
     * Sets third_to_last_value
     *
     * @param double $third_to_last_value Calculated Statistic: Ex: 250. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setThirdToLastValue($third_to_last_value)
    {
        $this->container['third_to_last_value'] = $third_to_last_value;

        return $this;
    }

    /**
     * Gets tracking_instructions
     *
     * @return string
     */
    public function getTrackingInstructions()
    {
        return $this->container['tracking_instructions'];
    }

    /**
     * Sets tracking_instructions
     *
     * @param string $tracking_instructions HTML instructions for tracking
     *
     * @return $this
     */
    public function setTrackingInstructions($tracking_instructions)
    {
        $this->container['tracking_instructions'] = $tracking_instructions;

        return $this;
    }

    /**
     * Gets tracking_instructions_card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getTrackingInstructionsCard()
    {
        return $this->container['tracking_instructions_card'];
    }

    /**
     * Sets tracking_instructions_card
     *
     * @param \CureDAO\Client\Model\Card $tracking_instructions_card Instructions for tracking with buttons and images
     *
     * @return $this
     */
    public function setTrackingInstructionsCard($tracking_instructions_card)
    {
        $this->container['tracking_instructions_card'] = $tracking_instructions_card;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \CureDAO\Client\Model\Unit
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \CureDAO\Client\Model\Unit $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unit_abbreviated_name
     *
     * @return string
     */
    public function getUnitAbbreviatedName()
    {
        return $this->container['unit_abbreviated_name'];
    }

    /**
     * Sets unit_abbreviated_name
     *
     * @param string $unit_abbreviated_name Ex: count
     *
     * @return $this
     */
    public function setUnitAbbreviatedName($unit_abbreviated_name)
    {
        $this->container['unit_abbreviated_name'] = $unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets unit_category_id
     *
     * @return int
     */
    public function getUnitCategoryId()
    {
        return $this->container['unit_category_id'];
    }

    /**
     * Sets unit_category_id
     *
     * @param int $unit_category_id Ex: 6
     *
     * @return $this
     */
    public function setUnitCategoryId($unit_category_id)
    {
        $this->container['unit_category_id'] = $unit_category_id;

        return $this;
    }

    /**
     * Gets unit_category_name
     *
     * @return string
     */
    public function getUnitCategoryName()
    {
        return $this->container['unit_category_name'];
    }

    /**
     * Sets unit_category_name
     *
     * @param string $unit_category_name Ex: Miscellany
     *
     * @return $this
     */
    public function setUnitCategoryName($unit_category_name)
    {
        $this->container['unit_category_name'] = $unit_category_name;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param int $unit_id ID of unit to use for this variable
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name User-Defined Variable Setting: Count
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string $upc Universal product code or similar
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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
     * @param string $updated_at When the record in the database was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param string $updated_time Ex: 2017-07-30 14:58:26
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

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
     * @param int $user_id User ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_tagged_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getUserTaggedVariables()
    {
        return $this->container['user_tagged_variables'];
    }

    /**
     * Sets user_tagged_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $user_tagged_variables user_tagged_variables
     *
     * @return $this
     */
    public function setUserTaggedVariables($user_tagged_variables)
    {
        $this->container['user_tagged_variables'] = $user_tagged_variables;

        return $this;
    }

    /**
     * Gets user_tag_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getUserTagVariables()
    {
        return $this->container['user_tag_variables'];
    }

    /**
     * Sets user_tag_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $user_tag_variables user_tag_variables
     *
     * @return $this
     */
    public function setUserTagVariables($user_tag_variables)
    {
        $this->container['user_tag_variables'] = $user_tag_variables;

        return $this;
    }

    /**
     * Gets user_variable_unit_abbreviated_name
     *
     * @return string
     */
    public function getUserVariableUnitAbbreviatedName()
    {
        return $this->container['user_variable_unit_abbreviated_name'];
    }

    /**
     * Sets user_variable_unit_abbreviated_name
     *
     * @param string $user_variable_unit_abbreviated_name Ex: count
     *
     * @return $this
     */
    public function setUserVariableUnitAbbreviatedName($user_variable_unit_abbreviated_name)
    {
        $this->container['user_variable_unit_abbreviated_name'] = $user_variable_unit_abbreviated_name;

        return $this;
    }

    /**
     * Gets user_variable_unit_category_id
     *
     * @return int
     */
    public function getUserVariableUnitCategoryId()
    {
        return $this->container['user_variable_unit_category_id'];
    }

    /**
     * Sets user_variable_unit_category_id
     *
     * @param int $user_variable_unit_category_id Ex: 6
     *
     * @return $this
     */
    public function setUserVariableUnitCategoryId($user_variable_unit_category_id)
    {
        $this->container['user_variable_unit_category_id'] = $user_variable_unit_category_id;

        return $this;
    }

    /**
     * Gets user_variable_unit_category_name
     *
     * @return string
     */
    public function getUserVariableUnitCategoryName()
    {
        return $this->container['user_variable_unit_category_name'];
    }

    /**
     * Sets user_variable_unit_category_name
     *
     * @param string $user_variable_unit_category_name Ex: Miscellany
     *
     * @return $this
     */
    public function setUserVariableUnitCategoryName($user_variable_unit_category_name)
    {
        $this->container['user_variable_unit_category_name'] = $user_variable_unit_category_name;

        return $this;
    }

    /**
     * Gets user_variable_unit_id
     *
     * @return int
     */
    public function getUserVariableUnitId()
    {
        return $this->container['user_variable_unit_id'];
    }

    /**
     * Sets user_variable_unit_id
     *
     * @param int $user_variable_unit_id Ex: 23
     *
     * @return $this
     */
    public function setUserVariableUnitId($user_variable_unit_id)
    {
        $this->container['user_variable_unit_id'] = $user_variable_unit_id;

        return $this;
    }

    /**
     * Gets user_variable_unit_name
     *
     * @return string
     */
    public function getUserVariableUnitName()
    {
        return $this->container['user_variable_unit_name'];
    }

    /**
     * Sets user_variable_unit_name
     *
     * @param string $user_variable_unit_name Ex: Count
     *
     * @return $this
     */
    public function setUserVariableUnitName($user_variable_unit_name)
    {
        $this->container['user_variable_unit_name'] = $user_variable_unit_name;

        return $this;
    }

    /**
     * Gets variable_category
     *
     * @return \CureDAO\Client\Model\VariableCategory
     */
    public function getVariableCategory()
    {
        return $this->container['variable_category'];
    }

    /**
     * Sets variable_category
     *
     * @param \CureDAO\Client\Model\VariableCategory $variable_category variable_category
     *
     * @return $this
     */
    public function setVariableCategory($variable_category)
    {
        $this->container['variable_category'] = $variable_category;

        return $this;
    }

    /**
     * Gets joined_variables
     *
     * @return \CureDAO\Client\Model\Variable[]
     */
    public function getJoinedVariables()
    {
        return $this->container['joined_variables'];
    }

    /**
     * Sets joined_variables
     *
     * @param \CureDAO\Client\Model\Variable[] $joined_variables Array of Variables that are joined with this Variable
     *
     * @return $this
     */
    public function setJoinedVariables($joined_variables)
    {
        $this->container['joined_variables'] = $joined_variables;

        return $this;
    }

    /**
     * Gets valence
     *
     * @return string
     */
    public function getValence()
    {
        return $this->container['valence'];
    }

    /**
     * Sets valence
     *
     * @param string $valence Valence indicates what type of buttons should be used when recording measurements for this variable. positive - Face buttons with the happiest face equating to a 5/5 rating where higher is better like Overall Mood. negative - Face buttons with happiest face equating to a 1/5 rating where lower is better like Headache Severity. numeric - Just 1 to 5 numeric buttons for neutral variables.
     *
     * @return $this
     */
    public function setValence($valence)
    {
        $this->container['valence'] = $valence;

        return $this;
    }

    /**
     * Gets variable_category_id
     *
     * @return int
     */
    public function getVariableCategoryId()
    {
        return $this->container['variable_category_id'];
    }

    /**
     * Sets variable_category_id
     *
     * @param int $variable_category_id Ex: 6
     *
     * @return $this
     */
    public function setVariableCategoryId($variable_category_id)
    {
        $this->container['variable_category_id'] = $variable_category_id;

        return $this;
    }

    /**
     * Gets variable_category_name
     *
     * @return string
     */
    public function getVariableCategoryName()
    {
        return $this->container['variable_category_name'];
    }

    /**
     * Sets variable_category_name
     *
     * @param string $variable_category_name User-Defined Variable Setting: Variable category like Emotions, Sleep, Physical Activities, Treatments, Symptoms, etc.
     *
     * @return $this
     */
    public function setVariableCategoryName($variable_category_name)
    {
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($variable_category_name) && !in_array($variable_category_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'variable_category_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variable_category_name'] = $variable_category_name;

        return $this;
    }

    /**
     * Gets variable_id
     *
     * @return int
     */
    public function getVariableId()
    {
        return $this->container['variable_id'];
    }

    /**
     * Sets variable_id
     *
     * @param int $variable_id Ex: 96380
     *
     * @return $this
     */
    public function setVariableId($variable_id)
    {
        $this->container['variable_id'] = $variable_id;

        return $this;
    }

    /**
     * Gets variable_name
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->container['variable_name'];
    }

    /**
     * Sets variable_name
     *
     * @param string $variable_name Ex: Sleep Duration
     *
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets variance
     *
     * @return double
     */
    public function getVariance()
    {
        return $this->container['variance'];
    }

    /**
     * Sets variance
     *
     * @param double $variance Statistic: Ex: 115947037.40816
     *
     * @return $this
     */
    public function setVariance($variance)
    {
        $this->container['variance'] = $variance;

        return $this;
    }

    /**
     * Gets wikipedia_title
     *
     * @return string
     */
    public function getWikipediaTitle()
    {
        return $this->container['wikipedia_title'];
    }

    /**
     * Sets wikipedia_title
     *
     * @param string $wikipedia_title User-Defined Variable Setting: You can help to improve the studies by pasting the title of the most appropriate Wikipedia article for this variable
     *
     * @return $this
     */
    public function setWikipediaTitle($wikipedia_title)
    {
        $this->container['wikipedia_title'] = $wikipedia_title;

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
