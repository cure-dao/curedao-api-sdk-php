<?php
/**
 * TrackingReminder
 *
 */

namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * TrackingReminder Class Doc Comment
 *
 */
class TrackingReminder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingReminder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_array' => '\CureDAO\Client\Model\TrackingReminderNotificationAction[]',
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
        'client_id' => 'string',
        'combination_operation' => 'string',
        'created_at' => 'string',
        'display_name' => 'string',
        'unit_abbreviated_name' => 'string',
        'unit_category_id' => 'int',
        'unit_category_name' => 'string',
        'unit_id' => 'int',
        'unit_name' => 'string',
        'default_value' => 'float',
        'enabled' => 'bool',
        'email' => 'bool',
        'error_message' => 'string',
        'filling_value' => 'int',
        'first_daily_reminder_time' => 'string',
        'frequency_text_description' => 'string',
        'frequency_text_description_with_time' => 'string',
        'id' => 'int',
        'input_type' => 'string',
        'instructions' => 'string',
        'ion_icon' => 'string',
        'last_tracked' => 'string',
        'last_value' => 'double',
        'latest_tracking_reminder_notification_reminder_time' => 'string',
        'local_daily_reminder_notification_times' => 'string[]',
        'local_daily_reminder_notification_times_for_all_reminders' => 'string[]',
        'manual_tracking' => 'bool',
        'maximum_allowed_value' => 'double',
        'minimum_allowed_value' => 'double',
        'next_reminder_time_epoch_seconds' => 'int',
        'notification_bar' => 'bool',
        'number_of_raw_measurements' => 'int',
        'number_of_unique_values' => 'int',
        'outcome' => 'bool',
        'png_path' => 'string',
        'png_url' => 'string',
        'product_url' => 'string',
        'pop_up' => 'bool',
        'question' => 'string',
        'long_question' => 'string',
        'reminder_end_time' => 'string',
        'reminder_frequency' => 'int',
        'reminder_sound' => 'string',
        'reminder_start_epoch_seconds' => 'int',
        'reminder_start_time' => 'string',
        'reminder_start_time_local' => 'string',
        'reminder_start_time_local_human_formatted' => 'string',
        'repeating' => 'bool',
        'second_daily_reminder_time' => 'string',
        'second_to_last_value' => 'double',
        'sms' => 'bool',
        'start_tracking_date' => 'string',
        'stop_tracking_date' => 'string',
        'svg_url' => 'string',
        'third_daily_reminder_time' => 'string',
        'third_to_last_value' => 'double',
        'tracking_reminder_id' => 'int',
        'tracking_reminder_image_url' => 'string',
        'upc' => 'string',
        'updated_at' => 'string',
        'user_id' => 'int',
        'user_variable_unit_abbreviated_name' => 'string',
        'user_variable_unit_category_id' => 'int',
        'user_variable_unit_category_name' => 'string',
        'user_variable_unit_id' => 'int',
        'user_variable_unit_name' => 'string',
        'user_variable_variable_category_id' => 'int',
        'user_variable_variable_category_name' => 'string',
        'valence' => 'string',
        'value_and_frequency_text_description' => 'string',
        'value_and_frequency_text_description_with_time' => 'string',
        'variable_category_id' => 'int',
        'variable_category_image_url' => 'string',
        'variable_category_name' => 'string',
        'variable_description' => 'string',
        'variable_id' => 'int',
        'variable_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_array' => null,
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
        'client_id' => null,
        'combination_operation' => null,
        'created_at' => null,
        'display_name' => null,
        'unit_abbreviated_name' => null,
        'unit_category_id' => null,
        'unit_category_name' => null,
        'unit_id' => null,
        'unit_name' => null,
        'default_value' => 'float',
        'enabled' => null,
        'email' => null,
        'error_message' => null,
        'filling_value' => null,
        'first_daily_reminder_time' => null,
        'frequency_text_description' => null,
        'frequency_text_description_with_time' => null,
        'id' => 'int32',
        'input_type' => null,
        'instructions' => null,
        'ion_icon' => null,
        'last_tracked' => null,
        'last_value' => 'double',
        'latest_tracking_reminder_notification_reminder_time' => null,
        'local_daily_reminder_notification_times' => null,
        'local_daily_reminder_notification_times_for_all_reminders' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => 'double',
        'minimum_allowed_value' => 'double',
        'next_reminder_time_epoch_seconds' => null,
        'notification_bar' => null,
        'number_of_raw_measurements' => null,
        'number_of_unique_values' => null,
        'outcome' => null,
        'png_path' => null,
        'png_url' => null,
        'product_url' => null,
        'pop_up' => null,
        'question' => null,
        'long_question' => null,
        'reminder_end_time' => null,
        'reminder_frequency' => 'int32',
        'reminder_sound' => null,
        'reminder_start_epoch_seconds' => null,
        'reminder_start_time' => null,
        'reminder_start_time_local' => 'string',
        'reminder_start_time_local_human_formatted' => null,
        'repeating' => null,
        'second_daily_reminder_time' => null,
        'second_to_last_value' => 'double',
        'sms' => null,
        'start_tracking_date' => 'string',
        'stop_tracking_date' => 'string',
        'svg_url' => null,
        'third_daily_reminder_time' => null,
        'third_to_last_value' => 'double',
        'tracking_reminder_id' => null,
        'tracking_reminder_image_url' => null,
        'upc' => null,
        'updated_at' => null,
        'user_id' => 'int32',
        'user_variable_unit_abbreviated_name' => null,
        'user_variable_unit_category_id' => null,
        'user_variable_unit_category_name' => null,
        'user_variable_unit_id' => null,
        'user_variable_unit_name' => null,
        'user_variable_variable_category_id' => null,
        'user_variable_variable_category_name' => null,
        'valence' => null,
        'value_and_frequency_text_description' => null,
        'value_and_frequency_text_description_with_time' => null,
        'variable_category_id' => null,
        'variable_category_image_url' => null,
        'variable_category_name' => null,
        'variable_description' => null,
        'variable_id' => 'int32',
        'variable_name' => null
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
        'client_id' => 'clientId',
        'combination_operation' => 'combinationOperation',
        'created_at' => 'createdAt',
        'display_name' => 'displayName',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_category_id' => 'unitCategoryId',
        'unit_category_name' => 'unitCategoryName',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'default_value' => 'defaultValue',
        'enabled' => 'enabled',
        'email' => 'email',
        'error_message' => 'errorMessage',
        'filling_value' => 'fillingValue',
        'first_daily_reminder_time' => 'firstDailyReminderTime',
        'frequency_text_description' => 'frequencyTextDescription',
        'frequency_text_description_with_time' => 'frequencyTextDescriptionWithTime',
        'id' => 'id',
        'input_type' => 'inputType',
        'instructions' => 'instructions',
        'ion_icon' => 'ionIcon',
        'last_tracked' => 'lastTracked',
        'last_value' => 'lastValue',
        'latest_tracking_reminder_notification_reminder_time' => 'latestTrackingReminderNotificationReminderTime',
        'local_daily_reminder_notification_times' => 'localDailyReminderNotificationTimes',
        'local_daily_reminder_notification_times_for_all_reminders' => 'localDailyReminderNotificationTimesForAllReminders',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'next_reminder_time_epoch_seconds' => 'nextReminderTimeEpochSeconds',
        'notification_bar' => 'notificationBar',
        'number_of_raw_measurements' => 'numberOfRawMeasurements',
        'number_of_unique_values' => 'numberOfUniqueValues',
        'outcome' => 'outcome',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'product_url' => 'productUrl',
        'pop_up' => 'popUp',
        'question' => 'question',
        'long_question' => 'longQuestion',
        'reminder_end_time' => 'reminderEndTime',
        'reminder_frequency' => 'reminderFrequency',
        'reminder_sound' => 'reminderSound',
        'reminder_start_epoch_seconds' => 'reminderStartEpochSeconds',
        'reminder_start_time' => 'reminderStartTime',
        'reminder_start_time_local' => 'reminderStartTimeLocal',
        'reminder_start_time_local_human_formatted' => 'reminderStartTimeLocalHumanFormatted',
        'repeating' => 'repeating',
        'second_daily_reminder_time' => 'secondDailyReminderTime',
        'second_to_last_value' => 'secondToLastValue',
        'sms' => 'sms',
        'start_tracking_date' => 'startTrackingDate',
        'stop_tracking_date' => 'stopTrackingDate',
        'svg_url' => 'svgUrl',
        'third_daily_reminder_time' => 'thirdDailyReminderTime',
        'third_to_last_value' => 'thirdToLastValue',
        'tracking_reminder_id' => 'trackingReminderId',
        'tracking_reminder_image_url' => 'trackingReminderImageUrl',
        'upc' => 'upc',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId',
        'user_variable_unit_abbreviated_name' => 'userVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'userVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'userVariableUnitCategoryName',
        'user_variable_unit_id' => 'userVariableUnitId',
        'user_variable_unit_name' => 'userVariableUnitName',
        'user_variable_variable_category_id' => 'userVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'userVariableVariableCategoryName',
        'valence' => 'valence',
        'value_and_frequency_text_description' => 'valueAndFrequencyTextDescription',
        'value_and_frequency_text_description_with_time' => 'valueAndFrequencyTextDescriptionWithTime',
        'variable_category_id' => 'variableCategoryId',
        'variable_category_image_url' => 'variableCategoryImageUrl',
        'variable_category_name' => 'variableCategoryName',
        'variable_description' => 'variableDescription',
        'variable_id' => 'variableId',
        'variable_name' => 'variableName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_array' => 'setActionArray',
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
        'client_id' => 'setClientId',
        'combination_operation' => 'setCombinationOperation',
        'created_at' => 'setCreatedAt',
        'display_name' => 'setDisplayName',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_category_id' => 'setUnitCategoryId',
        'unit_category_name' => 'setUnitCategoryName',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'default_value' => 'setDefaultValue',
        'enabled' => 'setEnabled',
        'email' => 'setEmail',
        'error_message' => 'setErrorMessage',
        'filling_value' => 'setFillingValue',
        'first_daily_reminder_time' => 'setFirstDailyReminderTime',
        'frequency_text_description' => 'setFrequencyTextDescription',
        'frequency_text_description_with_time' => 'setFrequencyTextDescriptionWithTime',
        'id' => 'setId',
        'input_type' => 'setInputType',
        'instructions' => 'setInstructions',
        'ion_icon' => 'setIonIcon',
        'last_tracked' => 'setLastTracked',
        'last_value' => 'setLastValue',
        'latest_tracking_reminder_notification_reminder_time' => 'setLatestTrackingReminderNotificationReminderTime',
        'local_daily_reminder_notification_times' => 'setLocalDailyReminderNotificationTimes',
        'local_daily_reminder_notification_times_for_all_reminders' => 'setLocalDailyReminderNotificationTimesForAllReminders',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'next_reminder_time_epoch_seconds' => 'setNextReminderTimeEpochSeconds',
        'notification_bar' => 'setNotificationBar',
        'number_of_raw_measurements' => 'setNumberOfRawMeasurements',
        'number_of_unique_values' => 'setNumberOfUniqueValues',
        'outcome' => 'setOutcome',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'product_url' => 'setProductUrl',
        'pop_up' => 'setPopUp',
        'question' => 'setQuestion',
        'long_question' => 'setLongQuestion',
        'reminder_end_time' => 'setReminderEndTime',
        'reminder_frequency' => 'setReminderFrequency',
        'reminder_sound' => 'setReminderSound',
        'reminder_start_epoch_seconds' => 'setReminderStartEpochSeconds',
        'reminder_start_time' => 'setReminderStartTime',
        'reminder_start_time_local' => 'setReminderStartTimeLocal',
        'reminder_start_time_local_human_formatted' => 'setReminderStartTimeLocalHumanFormatted',
        'repeating' => 'setRepeating',
        'second_daily_reminder_time' => 'setSecondDailyReminderTime',
        'second_to_last_value' => 'setSecondToLastValue',
        'sms' => 'setSms',
        'start_tracking_date' => 'setStartTrackingDate',
        'stop_tracking_date' => 'setStopTrackingDate',
        'svg_url' => 'setSvgUrl',
        'third_daily_reminder_time' => 'setThirdDailyReminderTime',
        'third_to_last_value' => 'setThirdToLastValue',
        'tracking_reminder_id' => 'setTrackingReminderId',
        'tracking_reminder_image_url' => 'setTrackingReminderImageUrl',
        'upc' => 'setUpc',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId',
        'user_variable_unit_abbreviated_name' => 'setUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'setUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'setUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'setUserVariableUnitId',
        'user_variable_unit_name' => 'setUserVariableUnitName',
        'user_variable_variable_category_id' => 'setUserVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'setUserVariableVariableCategoryName',
        'valence' => 'setValence',
        'value_and_frequency_text_description' => 'setValueAndFrequencyTextDescription',
        'value_and_frequency_text_description_with_time' => 'setValueAndFrequencyTextDescriptionWithTime',
        'variable_category_id' => 'setVariableCategoryId',
        'variable_category_image_url' => 'setVariableCategoryImageUrl',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_description' => 'setVariableDescription',
        'variable_id' => 'setVariableId',
        'variable_name' => 'setVariableName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_array' => 'getActionArray',
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
        'client_id' => 'getClientId',
        'combination_operation' => 'getCombinationOperation',
        'created_at' => 'getCreatedAt',
        'display_name' => 'getDisplayName',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_category_id' => 'getUnitCategoryId',
        'unit_category_name' => 'getUnitCategoryName',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'default_value' => 'getDefaultValue',
        'enabled' => 'getEnabled',
        'email' => 'getEmail',
        'error_message' => 'getErrorMessage',
        'filling_value' => 'getFillingValue',
        'first_daily_reminder_time' => 'getFirstDailyReminderTime',
        'frequency_text_description' => 'getFrequencyTextDescription',
        'frequency_text_description_with_time' => 'getFrequencyTextDescriptionWithTime',
        'id' => 'getId',
        'input_type' => 'getInputType',
        'instructions' => 'getInstructions',
        'ion_icon' => 'getIonIcon',
        'last_tracked' => 'getLastTracked',
        'last_value' => 'getLastValue',
        'latest_tracking_reminder_notification_reminder_time' => 'getLatestTrackingReminderNotificationReminderTime',
        'local_daily_reminder_notification_times' => 'getLocalDailyReminderNotificationTimes',
        'local_daily_reminder_notification_times_for_all_reminders' => 'getLocalDailyReminderNotificationTimesForAllReminders',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'next_reminder_time_epoch_seconds' => 'getNextReminderTimeEpochSeconds',
        'notification_bar' => 'getNotificationBar',
        'number_of_raw_measurements' => 'getNumberOfRawMeasurements',
        'number_of_unique_values' => 'getNumberOfUniqueValues',
        'outcome' => 'getOutcome',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'product_url' => 'getProductUrl',
        'pop_up' => 'getPopUp',
        'question' => 'getQuestion',
        'long_question' => 'getLongQuestion',
        'reminder_end_time' => 'getReminderEndTime',
        'reminder_frequency' => 'getReminderFrequency',
        'reminder_sound' => 'getReminderSound',
        'reminder_start_epoch_seconds' => 'getReminderStartEpochSeconds',
        'reminder_start_time' => 'getReminderStartTime',
        'reminder_start_time_local' => 'getReminderStartTimeLocal',
        'reminder_start_time_local_human_formatted' => 'getReminderStartTimeLocalHumanFormatted',
        'repeating' => 'getRepeating',
        'second_daily_reminder_time' => 'getSecondDailyReminderTime',
        'second_to_last_value' => 'getSecondToLastValue',
        'sms' => 'getSms',
        'start_tracking_date' => 'getStartTrackingDate',
        'stop_tracking_date' => 'getStopTrackingDate',
        'svg_url' => 'getSvgUrl',
        'third_daily_reminder_time' => 'getThirdDailyReminderTime',
        'third_to_last_value' => 'getThirdToLastValue',
        'tracking_reminder_id' => 'getTrackingReminderId',
        'tracking_reminder_image_url' => 'getTrackingReminderImageUrl',
        'upc' => 'getUpc',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId',
        'user_variable_unit_abbreviated_name' => 'getUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'getUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'getUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'getUserVariableUnitId',
        'user_variable_unit_name' => 'getUserVariableUnitName',
        'user_variable_variable_category_id' => 'getUserVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'getUserVariableVariableCategoryName',
        'valence' => 'getValence',
        'value_and_frequency_text_description' => 'getValueAndFrequencyTextDescription',
        'value_and_frequency_text_description_with_time' => 'getValueAndFrequencyTextDescriptionWithTime',
        'variable_category_id' => 'getVariableCategoryId',
        'variable_category_image_url' => 'getVariableCategoryImageUrl',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_description' => 'getVariableDescription',
        'variable_id' => 'getVariableId',
        'variable_name' => 'getVariableName'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['combination_operation'] = isset($data['combination_operation']) ? $data['combination_operation'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['unit_abbreviated_name'] = isset($data['unit_abbreviated_name']) ? $data['unit_abbreviated_name'] : null;
        $this->container['unit_category_id'] = isset($data['unit_category_id']) ? $data['unit_category_id'] : null;
        $this->container['unit_category_name'] = isset($data['unit_category_name']) ? $data['unit_category_name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['first_daily_reminder_time'] = isset($data['first_daily_reminder_time']) ? $data['first_daily_reminder_time'] : null;
        $this->container['frequency_text_description'] = isset($data['frequency_text_description']) ? $data['frequency_text_description'] : null;
        $this->container['frequency_text_description_with_time'] = isset($data['frequency_text_description_with_time']) ? $data['frequency_text_description_with_time'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['input_type'] = isset($data['input_type']) ? $data['input_type'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['last_tracked'] = isset($data['last_tracked']) ? $data['last_tracked'] : null;
        $this->container['last_value'] = isset($data['last_value']) ? $data['last_value'] : null;
        $this->container['latest_tracking_reminder_notification_reminder_time'] = isset($data['latest_tracking_reminder_notification_reminder_time']) ? $data['latest_tracking_reminder_notification_reminder_time'] : null;
        $this->container['local_daily_reminder_notification_times'] = isset($data['local_daily_reminder_notification_times']) ? $data['local_daily_reminder_notification_times'] : null;
        $this->container['local_daily_reminder_notification_times_for_all_reminders'] = isset($data['local_daily_reminder_notification_times_for_all_reminders']) ? $data['local_daily_reminder_notification_times_for_all_reminders'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['next_reminder_time_epoch_seconds'] = isset($data['next_reminder_time_epoch_seconds']) ? $data['next_reminder_time_epoch_seconds'] : null;
        $this->container['notification_bar'] = isset($data['notification_bar']) ? $data['notification_bar'] : null;
        $this->container['number_of_raw_measurements'] = isset($data['number_of_raw_measurements']) ? $data['number_of_raw_measurements'] : null;
        $this->container['number_of_unique_values'] = isset($data['number_of_unique_values']) ? $data['number_of_unique_values'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['png_path'] = isset($data['png_path']) ? $data['png_path'] : null;
        $this->container['png_url'] = isset($data['png_url']) ? $data['png_url'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['pop_up'] = isset($data['pop_up']) ? $data['pop_up'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['long_question'] = isset($data['long_question']) ? $data['long_question'] : null;
        $this->container['reminder_end_time'] = isset($data['reminder_end_time']) ? $data['reminder_end_time'] : null;
        $this->container['reminder_frequency'] = isset($data['reminder_frequency']) ? $data['reminder_frequency'] : null;
        $this->container['reminder_sound'] = isset($data['reminder_sound']) ? $data['reminder_sound'] : null;
        $this->container['reminder_start_epoch_seconds'] = isset($data['reminder_start_epoch_seconds']) ? $data['reminder_start_epoch_seconds'] : null;
        $this->container['reminder_start_time'] = isset($data['reminder_start_time']) ? $data['reminder_start_time'] : null;
        $this->container['reminder_start_time_local'] = isset($data['reminder_start_time_local']) ? $data['reminder_start_time_local'] : null;
        $this->container['reminder_start_time_local_human_formatted'] = isset($data['reminder_start_time_local_human_formatted']) ? $data['reminder_start_time_local_human_formatted'] : null;
        $this->container['repeating'] = isset($data['repeating']) ? $data['repeating'] : null;
        $this->container['second_daily_reminder_time'] = isset($data['second_daily_reminder_time']) ? $data['second_daily_reminder_time'] : null;
        $this->container['second_to_last_value'] = isset($data['second_to_last_value']) ? $data['second_to_last_value'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['start_tracking_date'] = isset($data['start_tracking_date']) ? $data['start_tracking_date'] : null;
        $this->container['stop_tracking_date'] = isset($data['stop_tracking_date']) ? $data['stop_tracking_date'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['third_daily_reminder_time'] = isset($data['third_daily_reminder_time']) ? $data['third_daily_reminder_time'] : null;
        $this->container['third_to_last_value'] = isset($data['third_to_last_value']) ? $data['third_to_last_value'] : null;
        $this->container['tracking_reminder_id'] = isset($data['tracking_reminder_id']) ? $data['tracking_reminder_id'] : null;
        $this->container['tracking_reminder_image_url'] = isset($data['tracking_reminder_image_url']) ? $data['tracking_reminder_image_url'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_variable_unit_abbreviated_name'] = isset($data['user_variable_unit_abbreviated_name']) ? $data['user_variable_unit_abbreviated_name'] : null;
        $this->container['user_variable_unit_category_id'] = isset($data['user_variable_unit_category_id']) ? $data['user_variable_unit_category_id'] : null;
        $this->container['user_variable_unit_category_name'] = isset($data['user_variable_unit_category_name']) ? $data['user_variable_unit_category_name'] : null;
        $this->container['user_variable_unit_id'] = isset($data['user_variable_unit_id']) ? $data['user_variable_unit_id'] : null;
        $this->container['user_variable_unit_name'] = isset($data['user_variable_unit_name']) ? $data['user_variable_unit_name'] : null;
        $this->container['user_variable_variable_category_id'] = isset($data['user_variable_variable_category_id']) ? $data['user_variable_variable_category_id'] : null;
        $this->container['user_variable_variable_category_name'] = isset($data['user_variable_variable_category_name']) ? $data['user_variable_variable_category_name'] : null;
        $this->container['valence'] = isset($data['valence']) ? $data['valence'] : null;
        $this->container['value_and_frequency_text_description'] = isset($data['value_and_frequency_text_description']) ? $data['value_and_frequency_text_description'] : null;
        $this->container['value_and_frequency_text_description_with_time'] = isset($data['value_and_frequency_text_description_with_time']) ? $data['value_and_frequency_text_description_with_time'] : null;
        $this->container['variable_category_id'] = isset($data['variable_category_id']) ? $data['variable_category_id'] : null;
        $this->container['variable_category_image_url'] = isset($data['variable_category_image_url']) ? $data['variable_category_image_url'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['variable_description'] = isset($data['variable_description']) ? $data['variable_description'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
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

        if ($this->container['unit_abbreviated_name'] === null) {
            $invalidProperties[] = "'unit_abbreviated_name' can't be null";
        }
        if ($this->container['reminder_frequency'] === null) {
            $invalidProperties[] = "'reminder_frequency' can't be null";
        }
        if ($this->container['variable_category_name'] === null) {
            $invalidProperties[] = "'variable_category_name' can't be null";
        }
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($this->container['variable_category_name']) && !in_array($this->container['variable_category_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variable_category_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['variable_name'] === null) {
            $invalidProperties[] = "'variable_name' can't be null";
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
     * @param string $combination_operation The way multiple measurements are aggregated over time
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
     * @param string $created_at Ex: 2016-05-18 02:24:08 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string $unit_abbreviated_name Ex: /5
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
     * @param int $unit_category_id Ex: 5
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
     * @param string $unit_category_name Ex: Rating
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
     * @param int $unit_id Ex: 10
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
     * @param string $unit_name Ex: 1 to 5 Rating
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param float $default_value Default value to use for the measurement when tracking. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled If a tracking reminder is enabled, tracking reminder notifications will be generated for this variable.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets email
     *
     * @return bool
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param bool $email True if the reminders should be delivered via email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string $error_message Ex: reminderStartTimeLocal is less than $user->earliestReminderTime or greater than  $user->latestReminderTime
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets filling_value
     *
     * @return int
     */
    public function getFillingValue()
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     *
     * @param int $filling_value Ex: 0. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setFillingValue($filling_value)
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets first_daily_reminder_time
     *
     * @return string
     */
    public function getFirstDailyReminderTime()
    {
        return $this->container['first_daily_reminder_time'];
    }

    /**
     * Sets first_daily_reminder_time
     *
     * @param string $first_daily_reminder_time Ex: 02:45:20 in UTC timezone
     *
     * @return $this
     */
    public function setFirstDailyReminderTime($first_daily_reminder_time)
    {
        $this->container['first_daily_reminder_time'] = $first_daily_reminder_time;

        return $this;
    }

    /**
     * Gets frequency_text_description
     *
     * @return string
     */
    public function getFrequencyTextDescription()
    {
        return $this->container['frequency_text_description'];
    }

    /**
     * Sets frequency_text_description
     *
     * @param string $frequency_text_description Ex: Daily
     *
     * @return $this
     */
    public function setFrequencyTextDescription($frequency_text_description)
    {
        $this->container['frequency_text_description'] = $frequency_text_description;

        return $this;
    }

    /**
     * Gets frequency_text_description_with_time
     *
     * @return string
     */
    public function getFrequencyTextDescriptionWithTime()
    {
        return $this->container['frequency_text_description_with_time'];
    }

    /**
     * Sets frequency_text_description_with_time
     *
     * @param string $frequency_text_description_with_time Ex: Daily at 09:45 PM
     *
     * @return $this
     */
    public function setFrequencyTextDescriptionWithTime($frequency_text_description_with_time)
    {
        $this->container['frequency_text_description_with_time'] = $frequency_text_description_with_time;

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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $input_type Ex: saddestFaceIsFive
     *
     * @return $this
     */
    public function setInputType($input_type)
    {
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions Ex: I am an instruction!
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

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
     * @param string $ion_icon Ex: ion-sad-outline
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets last_tracked
     *
     * @return string
     */
    public function getLastTracked()
    {
        return $this->container['last_tracked'];
    }

    /**
     * Sets last_tracked
     *
     * @param string $last_tracked UTC ISO 8601 YYYY-MM-DDThh:mm:ss timestamp for the last time a measurement was received for this user and variable
     *
     * @return $this
     */
    public function setLastTracked($last_tracked)
    {
        $this->container['last_tracked'] = $last_tracked;

        return $this;
    }

    /**
     * Gets last_value
     *
     * @return double
     */
    public function getLastValue()
    {
        return $this->container['last_value'];
    }

    /**
     * Sets last_value
     *
     * @param double $last_value Ex: 2
     *
     * @return $this
     */
    public function setLastValue($last_value)
    {
        $this->container['last_value'] = $last_value;

        return $this;
    }

    /**
     * Gets latest_tracking_reminder_notification_reminder_time
     *
     * @return string
     */
    public function getLatestTrackingReminderNotificationReminderTime()
    {
        return $this->container['latest_tracking_reminder_notification_reminder_time'];
    }

    /**
     * Sets latest_tracking_reminder_notification_reminder_time
     *
     * @param string $latest_tracking_reminder_notification_reminder_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss  timestamp for the reminder time of the latest tracking reminder notification that has been pre-emptively generated in the database
     *
     * @return $this
     */
    public function setLatestTrackingReminderNotificationReminderTime($latest_tracking_reminder_notification_reminder_time)
    {
        $this->container['latest_tracking_reminder_notification_reminder_time'] = $latest_tracking_reminder_notification_reminder_time;

        return $this;
    }

    /**
     * Gets local_daily_reminder_notification_times
     *
     * @return string[]
     */
    public function getLocalDailyReminderNotificationTimes()
    {
        return $this->container['local_daily_reminder_notification_times'];
    }

    /**
     * Sets local_daily_reminder_notification_times
     *
     * @param string[] $local_daily_reminder_notification_times local_daily_reminder_notification_times
     *
     * @return $this
     */
    public function setLocalDailyReminderNotificationTimes($local_daily_reminder_notification_times)
    {
        $this->container['local_daily_reminder_notification_times'] = $local_daily_reminder_notification_times;

        return $this;
    }

    /**
     * Gets local_daily_reminder_notification_times_for_all_reminders
     *
     * @return string[]
     */
    public function getLocalDailyReminderNotificationTimesForAllReminders()
    {
        return $this->container['local_daily_reminder_notification_times_for_all_reminders'];
    }

    /**
     * Sets local_daily_reminder_notification_times_for_all_reminders
     *
     * @param string[] $local_daily_reminder_notification_times_for_all_reminders local_daily_reminder_notification_times_for_all_reminders
     *
     * @return $this
     */
    public function setLocalDailyReminderNotificationTimesForAllReminders($local_daily_reminder_notification_times_for_all_reminders)
    {
        $this->container['local_daily_reminder_notification_times_for_all_reminders'] = $local_daily_reminder_notification_times_for_all_reminders;

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
     * @param bool $manual_tracking Ex: 1
     *
     * @return $this
     */
    public function setManualTracking($manual_tracking)
    {
        $this->container['manual_tracking'] = $manual_tracking;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     *
     * @return double
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     *
     * @param double $maximum_allowed_value Ex: 5. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     *
     * @return double
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     *
     * @param double $minimum_allowed_value Ex: 1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets next_reminder_time_epoch_seconds
     *
     * @return int
     */
    public function getNextReminderTimeEpochSeconds()
    {
        return $this->container['next_reminder_time_epoch_seconds'];
    }

    /**
     * Sets next_reminder_time_epoch_seconds
     *
     * @param int $next_reminder_time_epoch_seconds Ex: 1501555520
     *
     * @return $this
     */
    public function setNextReminderTimeEpochSeconds($next_reminder_time_epoch_seconds)
    {
        $this->container['next_reminder_time_epoch_seconds'] = $next_reminder_time_epoch_seconds;

        return $this;
    }

    /**
     * Gets notification_bar
     *
     * @return bool
     */
    public function getNotificationBar()
    {
        return $this->container['notification_bar'];
    }

    /**
     * Sets notification_bar
     *
     * @param bool $notification_bar True if the reminders should appear in the notification bar
     *
     * @return $this
     */
    public function setNotificationBar($notification_bar)
    {
        $this->container['notification_bar'] = $notification_bar;

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
     * @param int $number_of_raw_measurements Ex: 445
     *
     * @return $this
     */
    public function setNumberOfRawMeasurements($number_of_raw_measurements)
    {
        $this->container['number_of_raw_measurements'] = $number_of_raw_measurements;

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
     * @param int $number_of_unique_values Ex: 1
     *
     * @return $this
     */
    public function setNumberOfUniqueValues($number_of_unique_values)
    {
        $this->container['number_of_unique_values'] = $number_of_unique_values;

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
     * @param bool $outcome Indicates whether or not the variable is usually an outcome of interest such as a symptom or emotion
     *
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

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
     * @param string $png_path Ex: img/variable_categories/symptoms.png
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
     * @param string $png_url Ex: https://web.quantimo.do/img/variable_categories/symptoms.png
     *
     * @return $this
     */
    public function setPngUrl($png_url)
    {
        $this->container['png_url'] = $png_url;

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
     * Gets pop_up
     *
     * @return bool
     */
    public function getPopUp()
    {
        return $this->container['pop_up'];
    }

    /**
     * Sets pop_up
     *
     * @param bool $pop_up True if the reminders should appear as a popup notification
     *
     * @return $this
     */
    public function setPopUp($pop_up)
    {
        $this->container['pop_up'] = $pop_up;

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
     * Gets reminder_end_time
     *
     * @return string
     */
    public function getReminderEndTime()
    {
        return $this->container['reminder_end_time'];
    }

    /**
     * Sets reminder_end_time
     *
     * @param string $reminder_end_time Latest time of day at which reminders should appear in UTC HH:MM:SS format
     *
     * @return $this
     */
    public function setReminderEndTime($reminder_end_time)
    {
        $this->container['reminder_end_time'] = $reminder_end_time;

        return $this;
    }

    /**
     * Gets reminder_frequency
     *
     * @return int
     */
    public function getReminderFrequency()
    {
        return $this->container['reminder_frequency'];
    }

    /**
     * Sets reminder_frequency
     *
     * @param int $reminder_frequency Number of seconds between one reminder and the next
     *
     * @return $this
     */
    public function setReminderFrequency($reminder_frequency)
    {
        $this->container['reminder_frequency'] = $reminder_frequency;

        return $this;
    }

    /**
     * Gets reminder_sound
     *
     * @return string
     */
    public function getReminderSound()
    {
        return $this->container['reminder_sound'];
    }

    /**
     * Sets reminder_sound
     *
     * @param string $reminder_sound String identifier for the sound to accompany the reminder
     *
     * @return $this
     */
    public function setReminderSound($reminder_sound)
    {
        $this->container['reminder_sound'] = $reminder_sound;

        return $this;
    }

    /**
     * Gets reminder_start_epoch_seconds
     *
     * @return int
     */
    public function getReminderStartEpochSeconds()
    {
        return $this->container['reminder_start_epoch_seconds'];
    }

    /**
     * Sets reminder_start_epoch_seconds
     *
     * @param int $reminder_start_epoch_seconds Ex: 1469760320
     *
     * @return $this
     */
    public function setReminderStartEpochSeconds($reminder_start_epoch_seconds)
    {
        $this->container['reminder_start_epoch_seconds'] = $reminder_start_epoch_seconds;

        return $this;
    }

    /**
     * Gets reminder_start_time
     *
     * @return string
     */
    public function getReminderStartTime()
    {
        return $this->container['reminder_start_time'];
    }

    /**
     * Sets reminder_start_time
     *
     * @param string $reminder_start_time Earliest time of day at which reminders should appear in UTC HH:MM:SS format
     *
     * @return $this
     */
    public function setReminderStartTime($reminder_start_time)
    {
        $this->container['reminder_start_time'] = $reminder_start_time;

        return $this;
    }

    /**
     * Gets reminder_start_time_local
     *
     * @return string
     */
    public function getReminderStartTimeLocal()
    {
        return $this->container['reminder_start_time_local'];
    }

    /**
     * Sets reminder_start_time_local
     *
     * @param string $reminder_start_time_local Ex: 21:45:20
     *
     * @return $this
     */
    public function setReminderStartTimeLocal($reminder_start_time_local)
    {
        $this->container['reminder_start_time_local'] = $reminder_start_time_local;

        return $this;
    }

    /**
     * Gets reminder_start_time_local_human_formatted
     *
     * @return string
     */
    public function getReminderStartTimeLocalHumanFormatted()
    {
        return $this->container['reminder_start_time_local_human_formatted'];
    }

    /**
     * Sets reminder_start_time_local_human_formatted
     *
     * @param string $reminder_start_time_local_human_formatted Ex: 09:45 PM
     *
     * @return $this
     */
    public function setReminderStartTimeLocalHumanFormatted($reminder_start_time_local_human_formatted)
    {
        $this->container['reminder_start_time_local_human_formatted'] = $reminder_start_time_local_human_formatted;

        return $this;
    }

    /**
     * Gets repeating
     *
     * @return bool
     */
    public function getRepeating()
    {
        return $this->container['repeating'];
    }

    /**
     * Sets repeating
     *
     * @param bool $repeating Ex: true
     *
     * @return $this
     */
    public function setRepeating($repeating)
    {
        $this->container['repeating'] = $repeating;

        return $this;
    }

    /**
     * Gets second_daily_reminder_time
     *
     * @return string
     */
    public function getSecondDailyReminderTime()
    {
        return $this->container['second_daily_reminder_time'];
    }

    /**
     * Sets second_daily_reminder_time
     *
     * @param string $second_daily_reminder_time Ex: 01:00:00
     *
     * @return $this
     */
    public function setSecondDailyReminderTime($second_daily_reminder_time)
    {
        $this->container['second_daily_reminder_time'] = $second_daily_reminder_time;

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
     * @param double $second_to_last_value Ex: 1. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setSecondToLastValue($second_to_last_value)
    {
        $this->container['second_to_last_value'] = $second_to_last_value;

        return $this;
    }

    /**
     * Gets sms
     *
     * @return bool
     */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
     * Sets sms
     *
     * @param bool $sms True if the reminders should be delivered via SMS
     *
     * @return $this
     */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;

        return $this;
    }

    /**
     * Gets start_tracking_date
     *
     * @return string
     */
    public function getStartTrackingDate()
    {
        return $this->container['start_tracking_date'];
    }

    /**
     * Sets start_tracking_date
     *
     * @param string $start_tracking_date Earliest date on which the user should be reminded to track in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setStartTrackingDate($start_tracking_date)
    {
        $this->container['start_tracking_date'] = $start_tracking_date;

        return $this;
    }

    /**
     * Gets stop_tracking_date
     *
     * @return string
     */
    public function getStopTrackingDate()
    {
        return $this->container['stop_tracking_date'];
    }

    /**
     * Sets stop_tracking_date
     *
     * @param string $stop_tracking_date Latest date on which the user should be reminded to track in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setStopTrackingDate($stop_tracking_date)
    {
        $this->container['stop_tracking_date'] = $stop_tracking_date;

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
     * @param string $svg_url Ex: https://web.quantimo.do/img/variable_categories/symptoms.svg
     *
     * @return $this
     */
    public function setSvgUrl($svg_url)
    {
        $this->container['svg_url'] = $svg_url;

        return $this;
    }

    /**
     * Gets third_daily_reminder_time
     *
     * @return string
     */
    public function getThirdDailyReminderTime()
    {
        return $this->container['third_daily_reminder_time'];
    }

    /**
     * Sets third_daily_reminder_time
     *
     * @param string $third_daily_reminder_time Ex: 20:00:00
     *
     * @return $this
     */
    public function setThirdDailyReminderTime($third_daily_reminder_time)
    {
        $this->container['third_daily_reminder_time'] = $third_daily_reminder_time;

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
     * @param double $third_to_last_value Ex: 3
     *
     * @return $this
     */
    public function setThirdToLastValue($third_to_last_value)
    {
        $this->container['third_to_last_value'] = $third_to_last_value;

        return $this;
    }

    /**
     * Gets tracking_reminder_id
     *
     * @return int
     */
    public function getTrackingReminderId()
    {
        return $this->container['tracking_reminder_id'];
    }

    /**
     * Sets tracking_reminder_id
     *
     * @param int $tracking_reminder_id Ex: 11841
     *
     * @return $this
     */
    public function setTrackingReminderId($tracking_reminder_id)
    {
        $this->container['tracking_reminder_id'] = $tracking_reminder_id;

        return $this;
    }

    /**
     * Gets tracking_reminder_image_url
     *
     * @return string
     */
    public function getTrackingReminderImageUrl()
    {
        return $this->container['tracking_reminder_image_url'];
    }

    /**
     * Sets tracking_reminder_image_url
     *
     * @param string $tracking_reminder_image_url Ex: Not Found
     *
     * @return $this
     */
    public function setTrackingReminderImageUrl($tracking_reminder_image_url)
    {
        $this->container['tracking_reminder_image_url'] = $tracking_reminder_image_url;

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
     * @param string $upc UPC or other barcode scan result
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

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
     * @param string $updated_at When the record in the database was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss  datetime format. Time zone should be UTC and not local.
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
     * @param int $user_id ID of User
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $user_variable_unit_abbreviated_name Ex: /5
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
     * @param int $user_variable_unit_category_id Ex: 5
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
     * @param string $user_variable_unit_category_name Ex: Rating
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
     * @param int $user_variable_unit_id Ex: 10
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
     * @param string $user_variable_unit_name Ex: 1 to 5 Rating
     *
     * @return $this
     */
    public function setUserVariableUnitName($user_variable_unit_name)
    {
        $this->container['user_variable_unit_name'] = $user_variable_unit_name;

        return $this;
    }

    /**
     * Gets user_variable_variable_category_id
     *
     * @return int
     */
    public function getUserVariableVariableCategoryId()
    {
        return $this->container['user_variable_variable_category_id'];
    }

    /**
     * Sets user_variable_variable_category_id
     *
     * @param int $user_variable_variable_category_id Ex: 10
     *
     * @return $this
     */
    public function setUserVariableVariableCategoryId($user_variable_variable_category_id)
    {
        $this->container['user_variable_variable_category_id'] = $user_variable_variable_category_id;

        return $this;
    }

    /**
     * Gets user_variable_variable_category_name
     *
     * @return string
     */
    public function getUserVariableVariableCategoryName()
    {
        return $this->container['user_variable_variable_category_name'];
    }

    /**
     * Sets user_variable_variable_category_name
     *
     * @param string $user_variable_variable_category_name Ex: Symptoms
     *
     * @return $this
     */
    public function setUserVariableVariableCategoryName($user_variable_variable_category_name)
    {
        $this->container['user_variable_variable_category_name'] = $user_variable_variable_category_name;

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
     * Gets value_and_frequency_text_description
     *
     * @return string
     */
    public function getValueAndFrequencyTextDescription()
    {
        return $this->container['value_and_frequency_text_description'];
    }

    /**
     * Sets value_and_frequency_text_description
     *
     * @param string $value_and_frequency_text_description Ex: Rate daily
     *
     * @return $this
     */
    public function setValueAndFrequencyTextDescription($value_and_frequency_text_description)
    {
        $this->container['value_and_frequency_text_description'] = $value_and_frequency_text_description;

        return $this;
    }

    /**
     * Gets value_and_frequency_text_description_with_time
     *
     * @return string
     */
    public function getValueAndFrequencyTextDescriptionWithTime()
    {
        return $this->container['value_and_frequency_text_description_with_time'];
    }

    /**
     * Sets value_and_frequency_text_description_with_time
     *
     * @param string $value_and_frequency_text_description_with_time Ex: Rate daily at 09:45 PM
     *
     * @return $this
     */
    public function setValueAndFrequencyTextDescriptionWithTime($value_and_frequency_text_description_with_time)
    {
        $this->container['value_and_frequency_text_description_with_time'] = $value_and_frequency_text_description_with_time;

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
     * @param int $variable_category_id Ex: 10
     *
     * @return $this
     */
    public function setVariableCategoryId($variable_category_id)
    {
        $this->container['variable_category_id'] = $variable_category_id;

        return $this;
    }

    /**
     * Gets variable_category_image_url
     *
     * @return string
     */
    public function getVariableCategoryImageUrl()
    {
        return $this->container['variable_category_image_url'];
    }

    /**
     * Sets variable_category_image_url
     *
     * @param string $variable_category_image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Messaging/sad-96.png
     *
     * @return $this
     */
    public function setVariableCategoryImageUrl($variable_category_image_url)
    {
        $this->container['variable_category_image_url'] = $variable_category_image_url;

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
     * @param string $variable_category_name Ex: Emotions, Treatments, Symptoms...
     *
     * @return $this
     */
    public function setVariableCategoryName($variable_category_name)
    {
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!in_array($variable_category_name, $allowedValues, true)) {
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
     * Gets variable_description
     *
     * @return string
     */
    public function getVariableDescription()
    {
        return $this->container['variable_description'];
    }

    /**
     * Sets variable_description
     *
     * @param string $variable_description Valence indicates what type of buttons should be used when recording measurements for this variable. positive - Face buttons with the happiest face equating to a 5/5 rating where higher is better like Overall Mood. negative - Face buttons with happiest face equating to a 1/5 rating where lower is better like Headache Severity. numeric - Just 1 to 5 numeric buttons for neutral variables.
     *
     * @return $this
     */
    public function setVariableDescription($variable_description)
    {
        $this->container['variable_description'] = $variable_description;

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
     * @param int $variable_id Id for the variable to be tracked
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
     * @param string $variable_name Name of the variable to be used when sending measurements
     *
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

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
