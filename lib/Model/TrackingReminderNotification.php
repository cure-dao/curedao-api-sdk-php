<?php
/**
 * TrackingReminderNotification
 *
 */

namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * TrackingReminderNotification Class Doc Comment
 *
 */
class TrackingReminderNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingReminderNotification';

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
        'modified_value' => 'double',
        'unit_abbreviated_name' => 'string',
        'unit_category_id' => 'int',
        'unit_category_name' => 'string',
        'unit_id' => 'int',
        'unit_name' => 'string',
        'default_value' => 'float',
        'description' => 'string',
        'email' => 'bool',
        'filling_value' => 'int',
        'icon_icon' => 'string',
        'id' => 'int',
        'image_url' => 'string',
        'input_type' => 'string',
        'ion_icon' => 'string',
        'last_value' => 'double',
        'manual_tracking' => 'bool',
        'maximum_allowed_value' => 'int',
        'minimum_allowed_value' => 'int',
        'most_common_value' => 'double',
        'notification_bar' => 'bool',
        'notified_at' => 'string',
        'number_of_unique_values' => 'int',
        'outcome' => 'bool',
        'png_path' => 'string',
        'png_url' => 'string',
        'pop_up' => 'bool',
        'product_url' => 'string',
        'question' => 'string',
        'long_question' => 'string',
        'reminder_end_time' => 'string',
        'reminder_frequency' => 'int',
        'reminder_sound' => 'string',
        'reminder_start_time' => 'string',
        'reminder_time' => 'string',
        'second_most_common_value' => 'double',
        'second_to_last_value' => 'double',
        'sms' => 'bool',
        'svg_url' => 'string',
        'third_most_common_value' => 'double',
        'third_to_last_value' => 'double',
        'title' => 'string',
        'total' => 'double',
        'track_all_actions' => '\CureDAO\Client\Model\TrackingReminderNotificationTrackAllAction[]',
        'tracking_reminder_id' => 'int',
        'tracking_reminder_image_url' => 'string',
        'tracking_reminder_notification_id' => 'int',
        'tracking_reminder_notification_time' => 'string',
        'tracking_reminder_notification_time_epoch' => 'int',
        'tracking_reminder_notification_time_local' => 'string',
        'tracking_reminder_notification_time_local_human_string' => 'string',
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
        'variable_category_id' => 'int',
        'variable_category_image_url' => 'string',
        'variable_category_name' => 'string',
        'variable_id' => 'int',
        'variable_image_url' => 'string',
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
        'modified_value' => 'double',
        'unit_abbreviated_name' => null,
        'unit_category_id' => null,
        'unit_category_name' => null,
        'unit_id' => null,
        'unit_name' => null,
        'default_value' => 'float',
        'description' => null,
        'email' => null,
        'filling_value' => null,
        'icon_icon' => null,
        'id' => 'int32',
        'image_url' => null,
        'input_type' => null,
        'ion_icon' => null,
        'last_value' => 'double',
        'manual_tracking' => null,
        'maximum_allowed_value' => null,
        'minimum_allowed_value' => null,
        'most_common_value' => 'double',
        'notification_bar' => null,
        'notified_at' => null,
        'number_of_unique_values' => null,
        'outcome' => null,
        'png_path' => null,
        'png_url' => null,
        'pop_up' => null,
        'product_url' => null,
        'question' => null,
        'long_question' => null,
        'reminder_end_time' => null,
        'reminder_frequency' => null,
        'reminder_sound' => null,
        'reminder_start_time' => null,
        'reminder_time' => null,
        'second_most_common_value' => 'double',
        'second_to_last_value' => 'double',
        'sms' => null,
        'svg_url' => null,
        'third_most_common_value' => 'double',
        'third_to_last_value' => 'double',
        'title' => null,
        'total' => 'double',
        'track_all_actions' => null,
        'tracking_reminder_id' => 'int32',
        'tracking_reminder_image_url' => null,
        'tracking_reminder_notification_id' => null,
        'tracking_reminder_notification_time' => null,
        'tracking_reminder_notification_time_epoch' => null,
        'tracking_reminder_notification_time_local' => null,
        'tracking_reminder_notification_time_local_human_string' => null,
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
        'variable_category_id' => null,
        'variable_category_image_url' => null,
        'variable_category_name' => null,
        'variable_id' => 'int32',
        'variable_image_url' => null,
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
        'modified_value' => 'modifiedValue',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_category_id' => 'unitCategoryId',
        'unit_category_name' => 'unitCategoryName',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'default_value' => 'defaultValue',
        'description' => 'description',
        'email' => 'email',
        'filling_value' => 'fillingValue',
        'icon_icon' => 'iconIcon',
        'id' => 'id',
        'image_url' => 'imageUrl',
        'input_type' => 'inputType',
        'ion_icon' => 'ionIcon',
        'last_value' => 'lastValue',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'most_common_value' => 'mostCommonValue',
        'notification_bar' => 'notificationBar',
        'notified_at' => 'notifiedAt',
        'number_of_unique_values' => 'numberOfUniqueValues',
        'outcome' => 'outcome',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'pop_up' => 'popUp',
        'product_url' => 'productUrl',
        'question' => 'question',
        'long_question' => 'longQuestion',
        'reminder_end_time' => 'reminderEndTime',
        'reminder_frequency' => 'reminderFrequency',
        'reminder_sound' => 'reminderSound',
        'reminder_start_time' => 'reminderStartTime',
        'reminder_time' => 'reminderTime',
        'second_most_common_value' => 'secondMostCommonValue',
        'second_to_last_value' => 'secondToLastValue',
        'sms' => 'sms',
        'svg_url' => 'svgUrl',
        'third_most_common_value' => 'thirdMostCommonValue',
        'third_to_last_value' => 'thirdToLastValue',
        'title' => 'title',
        'total' => 'total',
        'track_all_actions' => 'trackAllActions',
        'tracking_reminder_id' => 'trackingReminderId',
        'tracking_reminder_image_url' => 'trackingReminderImageUrl',
        'tracking_reminder_notification_id' => 'trackingReminderNotificationId',
        'tracking_reminder_notification_time' => 'trackingReminderNotificationTime',
        'tracking_reminder_notification_time_epoch' => 'trackingReminderNotificationTimeEpoch',
        'tracking_reminder_notification_time_local' => 'trackingReminderNotificationTimeLocal',
        'tracking_reminder_notification_time_local_human_string' => 'trackingReminderNotificationTimeLocalHumanString',
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
        'variable_category_id' => 'variableCategoryId',
        'variable_category_image_url' => 'variableCategoryImageUrl',
        'variable_category_name' => 'variableCategoryName',
        'variable_id' => 'variableId',
        'variable_image_url' => 'variableImageUrl',
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
        'modified_value' => 'setModifiedValue',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_category_id' => 'setUnitCategoryId',
        'unit_category_name' => 'setUnitCategoryName',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'default_value' => 'setDefaultValue',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'filling_value' => 'setFillingValue',
        'icon_icon' => 'setIconIcon',
        'id' => 'setId',
        'image_url' => 'setImageUrl',
        'input_type' => 'setInputType',
        'ion_icon' => 'setIonIcon',
        'last_value' => 'setLastValue',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'most_common_value' => 'setMostCommonValue',
        'notification_bar' => 'setNotificationBar',
        'notified_at' => 'setNotifiedAt',
        'number_of_unique_values' => 'setNumberOfUniqueValues',
        'outcome' => 'setOutcome',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'pop_up' => 'setPopUp',
        'product_url' => 'setProductUrl',
        'question' => 'setQuestion',
        'long_question' => 'setLongQuestion',
        'reminder_end_time' => 'setReminderEndTime',
        'reminder_frequency' => 'setReminderFrequency',
        'reminder_sound' => 'setReminderSound',
        'reminder_start_time' => 'setReminderStartTime',
        'reminder_time' => 'setReminderTime',
        'second_most_common_value' => 'setSecondMostCommonValue',
        'second_to_last_value' => 'setSecondToLastValue',
        'sms' => 'setSms',
        'svg_url' => 'setSvgUrl',
        'third_most_common_value' => 'setThirdMostCommonValue',
        'third_to_last_value' => 'setThirdToLastValue',
        'title' => 'setTitle',
        'total' => 'setTotal',
        'track_all_actions' => 'setTrackAllActions',
        'tracking_reminder_id' => 'setTrackingReminderId',
        'tracking_reminder_image_url' => 'setTrackingReminderImageUrl',
        'tracking_reminder_notification_id' => 'setTrackingReminderNotificationId',
        'tracking_reminder_notification_time' => 'setTrackingReminderNotificationTime',
        'tracking_reminder_notification_time_epoch' => 'setTrackingReminderNotificationTimeEpoch',
        'tracking_reminder_notification_time_local' => 'setTrackingReminderNotificationTimeLocal',
        'tracking_reminder_notification_time_local_human_string' => 'setTrackingReminderNotificationTimeLocalHumanString',
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
        'variable_category_id' => 'setVariableCategoryId',
        'variable_category_image_url' => 'setVariableCategoryImageUrl',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_id' => 'setVariableId',
        'variable_image_url' => 'setVariableImageUrl',
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
        'modified_value' => 'getModifiedValue',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_category_id' => 'getUnitCategoryId',
        'unit_category_name' => 'getUnitCategoryName',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'default_value' => 'getDefaultValue',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'filling_value' => 'getFillingValue',
        'icon_icon' => 'getIconIcon',
        'id' => 'getId',
        'image_url' => 'getImageUrl',
        'input_type' => 'getInputType',
        'ion_icon' => 'getIonIcon',
        'last_value' => 'getLastValue',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'most_common_value' => 'getMostCommonValue',
        'notification_bar' => 'getNotificationBar',
        'notified_at' => 'getNotifiedAt',
        'number_of_unique_values' => 'getNumberOfUniqueValues',
        'outcome' => 'getOutcome',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'pop_up' => 'getPopUp',
        'product_url' => 'getProductUrl',
        'question' => 'getQuestion',
        'long_question' => 'getLongQuestion',
        'reminder_end_time' => 'getReminderEndTime',
        'reminder_frequency' => 'getReminderFrequency',
        'reminder_sound' => 'getReminderSound',
        'reminder_start_time' => 'getReminderStartTime',
        'reminder_time' => 'getReminderTime',
        'second_most_common_value' => 'getSecondMostCommonValue',
        'second_to_last_value' => 'getSecondToLastValue',
        'sms' => 'getSms',
        'svg_url' => 'getSvgUrl',
        'third_most_common_value' => 'getThirdMostCommonValue',
        'third_to_last_value' => 'getThirdToLastValue',
        'title' => 'getTitle',
        'total' => 'getTotal',
        'track_all_actions' => 'getTrackAllActions',
        'tracking_reminder_id' => 'getTrackingReminderId',
        'tracking_reminder_image_url' => 'getTrackingReminderImageUrl',
        'tracking_reminder_notification_id' => 'getTrackingReminderNotificationId',
        'tracking_reminder_notification_time' => 'getTrackingReminderNotificationTime',
        'tracking_reminder_notification_time_epoch' => 'getTrackingReminderNotificationTimeEpoch',
        'tracking_reminder_notification_time_local' => 'getTrackingReminderNotificationTimeLocal',
        'tracking_reminder_notification_time_local_human_string' => 'getTrackingReminderNotificationTimeLocalHumanString',
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
        'variable_category_id' => 'getVariableCategoryId',
        'variable_category_image_url' => 'getVariableCategoryImageUrl',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_id' => 'getVariableId',
        'variable_image_url' => 'getVariableImageUrl',
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
        $this->container['modified_value'] = isset($data['modified_value']) ? $data['modified_value'] : null;
        $this->container['unit_abbreviated_name'] = isset($data['unit_abbreviated_name']) ? $data['unit_abbreviated_name'] : null;
        $this->container['unit_category_id'] = isset($data['unit_category_id']) ? $data['unit_category_id'] : null;
        $this->container['unit_category_name'] = isset($data['unit_category_name']) ? $data['unit_category_name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['icon_icon'] = isset($data['icon_icon']) ? $data['icon_icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['input_type'] = isset($data['input_type']) ? $data['input_type'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['last_value'] = isset($data['last_value']) ? $data['last_value'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['most_common_value'] = isset($data['most_common_value']) ? $data['most_common_value'] : null;
        $this->container['notification_bar'] = isset($data['notification_bar']) ? $data['notification_bar'] : null;
        $this->container['notified_at'] = isset($data['notified_at']) ? $data['notified_at'] : null;
        $this->container['number_of_unique_values'] = isset($data['number_of_unique_values']) ? $data['number_of_unique_values'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['png_path'] = isset($data['png_path']) ? $data['png_path'] : null;
        $this->container['png_url'] = isset($data['png_url']) ? $data['png_url'] : null;
        $this->container['pop_up'] = isset($data['pop_up']) ? $data['pop_up'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['long_question'] = isset($data['long_question']) ? $data['long_question'] : null;
        $this->container['reminder_end_time'] = isset($data['reminder_end_time']) ? $data['reminder_end_time'] : null;
        $this->container['reminder_frequency'] = isset($data['reminder_frequency']) ? $data['reminder_frequency'] : null;
        $this->container['reminder_sound'] = isset($data['reminder_sound']) ? $data['reminder_sound'] : null;
        $this->container['reminder_start_time'] = isset($data['reminder_start_time']) ? $data['reminder_start_time'] : null;
        $this->container['reminder_time'] = isset($data['reminder_time']) ? $data['reminder_time'] : null;
        $this->container['second_most_common_value'] = isset($data['second_most_common_value']) ? $data['second_most_common_value'] : null;
        $this->container['second_to_last_value'] = isset($data['second_to_last_value']) ? $data['second_to_last_value'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['third_most_common_value'] = isset($data['third_most_common_value']) ? $data['third_most_common_value'] : null;
        $this->container['third_to_last_value'] = isset($data['third_to_last_value']) ? $data['third_to_last_value'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['track_all_actions'] = isset($data['track_all_actions']) ? $data['track_all_actions'] : null;
        $this->container['tracking_reminder_id'] = isset($data['tracking_reminder_id']) ? $data['tracking_reminder_id'] : null;
        $this->container['tracking_reminder_image_url'] = isset($data['tracking_reminder_image_url']) ? $data['tracking_reminder_image_url'] : null;
        $this->container['tracking_reminder_notification_id'] = isset($data['tracking_reminder_notification_id']) ? $data['tracking_reminder_notification_id'] : null;
        $this->container['tracking_reminder_notification_time'] = isset($data['tracking_reminder_notification_time']) ? $data['tracking_reminder_notification_time'] : null;
        $this->container['tracking_reminder_notification_time_epoch'] = isset($data['tracking_reminder_notification_time_epoch']) ? $data['tracking_reminder_notification_time_epoch'] : null;
        $this->container['tracking_reminder_notification_time_local'] = isset($data['tracking_reminder_notification_time_local']) ? $data['tracking_reminder_notification_time_local'] : null;
        $this->container['tracking_reminder_notification_time_local_human_string'] = isset($data['tracking_reminder_notification_time_local_human_string']) ? $data['tracking_reminder_notification_time_local_human_string'] : null;
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
        $this->container['variable_category_id'] = isset($data['variable_category_id']) ? $data['variable_category_id'] : null;
        $this->container['variable_category_image_url'] = isset($data['variable_category_image_url']) ? $data['variable_category_image_url'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['variable_image_url'] = isset($data['variable_image_url']) ? $data['variable_image_url'] : null;
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

        if ($this->container['action_array'] === null) {
            $invalidProperties[] = "'action_array' can't be null";
        }
        if ($this->container['available_units'] === null) {
            $invalidProperties[] = "'available_units' can't be null";
        }
        $allowedValues = $this->getCombinationOperationAllowableValues();
        if (!is_null($this->container['combination_operation']) && !in_array($this->container['combination_operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'combination_operation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filling_value'] === null) {
            $invalidProperties[] = "'filling_value' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['track_all_actions'] === null) {
            $invalidProperties[] = "'track_all_actions' can't be null";
        }
        $allowedValues = $this->getVariableCategoryNameAllowableValues();
        if (!is_null($this->container['variable_category_name']) && !in_array($this->container['variable_category_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variable_category_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param \CureDAO\Client\Model\Card $card Card with options for tracking.
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
     * @param string $created_at Ex: 2017-07-29 20:49:54 UTC ISO 8601 YYYY-MM-DDThh:mm:ss
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
     * Gets modified_value
     *
     * @return double
     */
    public function getModifiedValue()
    {
        return $this->container['modified_value'];
    }

    /**
     * Sets modified_value
     *
     * @param double $modified_value Is the user specified default value or falls back to the last value in user unit. Good for initializing input fields. Unit: User-specified or common.
     *
     * @return $this
     */
    public function setModifiedValue($modified_value)
    {
        $this->container['modified_value'] = $modified_value;

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
     * @param float $default_value Default value to use for the measurement when tracking
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

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
     * @param string $description Valence indicates what type of buttons should be used when recording measurements for this variable. positive - Face buttons with the happiest face equating to a 5/5 rating where higher is better like Overall Mood. negative - Face buttons with happiest face equating to a 1/5 rating where lower is better like Headache Severity. numeric - Just 1 to 5 numeric buttons for neutral variables.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param int $filling_value Ex: 0
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
     * @param int $id id for the specific PENDING tracking remidner
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
     * @param string $image_url Ex: https://rximage.nlm.nih.gov/image/images/gallery/original/55111-0129-60_RXNAVIMAGE10_B051D81E.jpg
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
     * @param string $input_type Ex: happiestFaceIsFive
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
     * @param string $ion_icon Ex: ion-happy-outline
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

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
     * @param double $last_value Ex: 3
     *
     * @return $this
     */
    public function setLastValue($last_value)
    {
        $this->container['last_value'] = $last_value;

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
     * @param bool $manual_tracking True if this variable is normally tracked via manual user input rather than automatic imports
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
     * @return int
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     *
     * @param int $maximum_allowed_value Ex: 5
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
     * @return int
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     *
     * @param int $minimum_allowed_value Ex: 1
     *
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets most_common_value
     *
     * @return double
     */
    public function getMostCommonValue()
    {
        return $this->container['most_common_value'];
    }

    /**
     * Sets most_common_value
     *
     * @param double $most_common_value Ex: 3
     *
     * @return $this
     */
    public function setMostCommonValue($most_common_value)
    {
        $this->container['most_common_value'] = $most_common_value;

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
     * Gets notified_at
     *
     * @return string
     */
    public function getNotifiedAt()
    {
        return $this->container['notified_at'];
    }

    /**
     * Sets notified_at
     *
     * @param string $notified_at Ex: UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setNotifiedAt($notified_at)
    {
        $this->container['notified_at'] = $notified_at;

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
     * @param int $number_of_unique_values Ex: 5
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
     * @param string $png_path Ex: img/variable_categories/emotions.png
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
     * @param string $png_url Ex: https://web.quantimo.do/img/variable_categories/emotions.png
     *
     * @return $this
     */
    public function setPngUrl($png_url)
    {
        $this->container['png_url'] = $png_url;

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
     * @param string $reminder_end_time Ex: 01-01-2018
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
     * @param int $reminder_frequency How often user should be reminded in seconds. Ex: 86400
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
     * Gets reminder_time
     *
     * @return string
     */
    public function getReminderTime()
    {
        return $this->container['reminder_time'];
    }

    /**
     * Sets reminder_time
     *
     * @param string $reminder_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss timestamp for the specific time the variable should be tracked in UTC.  This will be used for the measurement startTime if the track endpoint is used.
     *
     * @return $this
     */
    public function setReminderTime($reminder_time)
    {
        $this->container['reminder_time'] = $reminder_time;

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
     * @param double $second_most_common_value Ex: 4
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
     * @param double $second_to_last_value Ex: 1
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
     * @param string $svg_url Ex: https://web.quantimo.do/img/variable_categories/emotions.svg
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
     * @param double $third_most_common_value Ex: 2
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
     * @param double $third_to_last_value Ex: 2
     *
     * @return $this
     */
    public function setThirdToLastValue($third_to_last_value)
    {
        $this->container['third_to_last_value'] = $third_to_last_value;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Ex: Rate Overall Mood
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total Ex: 3
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets track_all_actions
     *
     * @return \CureDAO\Client\Model\TrackingReminderNotificationTrackAllAction[]
     */
    public function getTrackAllActions()
    {
        return $this->container['track_all_actions'];
    }

    /**
     * Sets track_all_actions
     *
     * @param \CureDAO\Client\Model\TrackingReminderNotificationTrackAllAction[] $track_all_actions track_all_actions
     *
     * @return $this
     */
    public function setTrackAllActions($track_all_actions)
    {
        $this->container['track_all_actions'] = $track_all_actions;

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
     * @param int $tracking_reminder_id id for the repeating tracking remidner
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
     * @param string $tracking_reminder_image_url Ex: https://rximage.nlm.nih.gov/image/images/gallery/original/55111-0129-60_RXNAVIMAGE10_B051D81E.jpg
     *
     * @return $this
     */
    public function setTrackingReminderImageUrl($tracking_reminder_image_url)
    {
        $this->container['tracking_reminder_image_url'] = $tracking_reminder_image_url;

        return $this;
    }

    /**
     * Gets tracking_reminder_notification_id
     *
     * @return int
     */
    public function getTrackingReminderNotificationId()
    {
        return $this->container['tracking_reminder_notification_id'];
    }

    /**
     * Sets tracking_reminder_notification_id
     *
     * @param int $tracking_reminder_notification_id Ex: 5072482
     *
     * @return $this
     */
    public function setTrackingReminderNotificationId($tracking_reminder_notification_id)
    {
        $this->container['tracking_reminder_notification_id'] = $tracking_reminder_notification_id;

        return $this;
    }

    /**
     * Gets tracking_reminder_notification_time
     *
     * @return string
     */
    public function getTrackingReminderNotificationTime()
    {
        return $this->container['tracking_reminder_notification_time'];
    }

    /**
     * Sets tracking_reminder_notification_time
     *
     * @param string $tracking_reminder_notification_time UTC ISO 8601 YYYY-MM-DDThh:mm:ss timestamp for the specific time the variable should be tracked in UTC.  This will be used for the measurement startTime if the track endpoint is used.
     *
     * @return $this
     */
    public function setTrackingReminderNotificationTime($tracking_reminder_notification_time)
    {
        $this->container['tracking_reminder_notification_time'] = $tracking_reminder_notification_time;

        return $this;
    }

    /**
     * Gets tracking_reminder_notification_time_epoch
     *
     * @return int
     */
    public function getTrackingReminderNotificationTimeEpoch()
    {
        return $this->container['tracking_reminder_notification_time_epoch'];
    }

    /**
     * Sets tracking_reminder_notification_time_epoch
     *
     * @param int $tracking_reminder_notification_time_epoch Ex: 1501534124
     *
     * @return $this
     */
    public function setTrackingReminderNotificationTimeEpoch($tracking_reminder_notification_time_epoch)
    {
        $this->container['tracking_reminder_notification_time_epoch'] = $tracking_reminder_notification_time_epoch;

        return $this;
    }

    /**
     * Gets tracking_reminder_notification_time_local
     *
     * @return string
     */
    public function getTrackingReminderNotificationTimeLocal()
    {
        return $this->container['tracking_reminder_notification_time_local'];
    }

    /**
     * Sets tracking_reminder_notification_time_local
     *
     * @param string $tracking_reminder_notification_time_local Ex: 15:48:44
     *
     * @return $this
     */
    public function setTrackingReminderNotificationTimeLocal($tracking_reminder_notification_time_local)
    {
        $this->container['tracking_reminder_notification_time_local'] = $tracking_reminder_notification_time_local;

        return $this;
    }

    /**
     * Gets tracking_reminder_notification_time_local_human_string
     *
     * @return string
     */
    public function getTrackingReminderNotificationTimeLocalHumanString()
    {
        return $this->container['tracking_reminder_notification_time_local_human_string'];
    }

    /**
     * Sets tracking_reminder_notification_time_local_human_string
     *
     * @param string $tracking_reminder_notification_time_local_human_string Ex: 8PM Sun, May 1
     *
     * @return $this
     */
    public function setTrackingReminderNotificationTimeLocalHumanString($tracking_reminder_notification_time_local_human_string)
    {
        $this->container['tracking_reminder_notification_time_local_human_string'] = $tracking_reminder_notification_time_local_human_string;

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
     * @param int $user_variable_variable_category_id Ex: 1
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
     * @param string $user_variable_variable_category_name Ex: Emotions
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
     * @param int $variable_category_id Ex: 1
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
     * @param string $variable_category_image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Cinema/theatre_mask-96.png
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
     * Gets variable_image_url
     *
     * @return string
     */
    public function getVariableImageUrl()
    {
        return $this->container['variable_image_url'];
    }

    /**
     * Sets variable_image_url
     *
     * @param string $variable_image_url Ex: https://image.png
     *
     * @return $this
     */
    public function setVariableImageUrl($variable_image_url)
    {
        $this->container['variable_image_url'] = $variable_image_url;

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
