<?php
/**
 * Measurement
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * Measurement Class 
 */
class Measurement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Measurement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card' => '\CureDAO\Client\Models\Card',
        'client_id' => 'string',
        'connector_id' => 'int',
        'created_at' => 'string',
        'display_value_and_unit_string' => 'string',
        'icon_icon' => 'string',
        'id' => 'int',
        'input_type' => 'string',
        'ion_icon' => 'string',
        'manual_tracking' => 'bool',
        'maximum_allowed_value' => 'double',
        'minimum_allowed_value' => 'double',
        'note' => 'string',
        'note_object' => 'object',
        'note_html' => 'object',
        'original_unit_id' => 'int',
        'original_value' => 'double',
        'png_path' => 'string',
        'png_url' => 'string',
        'product_url' => 'string',
        'source_name' => 'string',
        'start_date' => 'string',
        'start_time_epoch' => 'int',
        'start_time_string' => 'string',
        'svg_url' => 'string',
        'unit_abbreviated_name' => 'string',
        'unit_category_id' => 'int',
        'unit_category_name' => 'string',
        'unit_id' => 'int',
        'unit_name' => 'string',
        'updated_at' => 'string',
        'url' => 'string',
        'user_variable_unit_abbreviated_name' => 'string',
        'user_variable_unit_category_id' => 'int',
        'user_variable_unit_category_name' => 'string',
        'user_variable_unit_id' => 'int',
        'user_variable_unit_name' => 'string',
        'user_variable_variable_category_id' => 'int',
        'user_variable_variable_category_name' => 'string',
        'valence' => 'string',
        'value' => 'double',
        'variable_category_id' => 'int',
        'variable_category_image_url' => 'string',
        'variable_category_name' => 'string',
        'variable_description' => 'string',
        'variable_id' => 'int',
        'variable_name' => 'string',
        'display_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card' => null,
        'client_id' => null,
        'connector_id' => null,
        'created_at' => null,
        'display_value_and_unit_string' => null,
        'icon_icon' => null,
        'id' => null,
        'input_type' => null,
        'ion_icon' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => 'double',
        'minimum_allowed_value' => 'double',
        'note' => null,
        'note_object' => null,
        'note_html' => null,
        'original_unit_id' => null,
        'original_value' => 'double',
        'png_path' => null,
        'png_url' => null,
        'product_url' => null,
        'source_name' => null,
        'start_date' => null,
        'start_time_epoch' => null,
        'start_time_string' => null,
        'svg_url' => null,
        'unit_abbreviated_name' => null,
        'unit_category_id' => null,
        'unit_category_name' => null,
        'unit_id' => null,
        'unit_name' => null,
        'updated_at' => null,
        'url' => null,
        'user_variable_unit_abbreviated_name' => null,
        'user_variable_unit_category_id' => null,
        'user_variable_unit_category_name' => null,
        'user_variable_unit_id' => null,
        'user_variable_unit_name' => null,
        'user_variable_variable_category_id' => null,
        'user_variable_variable_category_name' => null,
        'valence' => null,
        'value' => 'double',
        'variable_category_id' => null,
        'variable_category_image_url' => null,
        'variable_category_name' => null,
        'variable_description' => null,
        'variable_id' => null,
        'variable_name' => null,
        'display_name' => null
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
        'card' => 'card',
        'client_id' => 'clientId',
        'connector_id' => 'connectorId',
        'created_at' => 'createdAt',
        'display_value_and_unit_string' => 'displayValueAndUnitString',
        'icon_icon' => 'iconIcon',
        'id' => 'id',
        'input_type' => 'inputType',
        'ion_icon' => 'ionIcon',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'note' => 'note',
        'note_object' => 'noteObject',
        'note_html' => 'noteHtml',
        'original_unit_id' => 'originalUnitId',
        'original_value' => 'originalValue',
        'png_path' => 'pngPath',
        'png_url' => 'pngUrl',
        'product_url' => 'productUrl',
        'source_name' => 'sourceName',
        'start_date' => 'startDate',
        'start_time_epoch' => 'startTimeEpoch',
        'start_time_string' => 'startTimeString',
        'svg_url' => 'svgUrl',
        'unit_abbreviated_name' => 'unitAbbreviatedName',
        'unit_category_id' => 'unitCategoryId',
        'unit_category_name' => 'unitCategoryName',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'updated_at' => 'updatedAt',
        'url' => 'url',
        'user_variable_unit_abbreviated_name' => 'userVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'userVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'userVariableUnitCategoryName',
        'user_variable_unit_id' => 'userVariableUnitId',
        'user_variable_unit_name' => 'userVariableUnitName',
        'user_variable_variable_category_id' => 'userVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'userVariableVariableCategoryName',
        'valence' => 'valence',
        'value' => 'value',
        'variable_category_id' => 'variableCategoryId',
        'variable_category_image_url' => 'variableCategoryImageUrl',
        'variable_category_name' => 'variableCategoryName',
        'variable_description' => 'variableDescription',
        'variable_id' => 'variableId',
        'variable_name' => 'variableName',
        'display_name' => 'displayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card' => 'setCard',
        'client_id' => 'setClientId',
        'connector_id' => 'setConnectorId',
        'created_at' => 'setCreatedAt',
        'display_value_and_unit_string' => 'setDisplayValueAndUnitString',
        'icon_icon' => 'setIconIcon',
        'id' => 'setId',
        'input_type' => 'setInputType',
        'ion_icon' => 'setIonIcon',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'note' => 'setNote',
        'note_object' => 'setNoteObject',
        'note_html' => 'setNoteHtml',
        'original_unit_id' => 'setOriginalUnitId',
        'original_value' => 'setOriginalValue',
        'png_path' => 'setPngPath',
        'png_url' => 'setPngUrl',
        'product_url' => 'setProductUrl',
        'source_name' => 'setSourceName',
        'start_date' => 'setStartDate',
        'start_time_epoch' => 'setStartTimeEpoch',
        'start_time_string' => 'setStartTimeString',
        'svg_url' => 'setSvgUrl',
        'unit_abbreviated_name' => 'setUnitAbbreviatedName',
        'unit_category_id' => 'setUnitCategoryId',
        'unit_category_name' => 'setUnitCategoryName',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'updated_at' => 'setUpdatedAt',
        'url' => 'setUrl',
        'user_variable_unit_abbreviated_name' => 'setUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'setUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'setUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'setUserVariableUnitId',
        'user_variable_unit_name' => 'setUserVariableUnitName',
        'user_variable_variable_category_id' => 'setUserVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'setUserVariableVariableCategoryName',
        'valence' => 'setValence',
        'value' => 'setValue',
        'variable_category_id' => 'setVariableCategoryId',
        'variable_category_image_url' => 'setVariableCategoryImageUrl',
        'variable_category_name' => 'setVariableCategoryName',
        'variable_description' => 'setVariableDescription',
        'variable_id' => 'setVariableId',
        'variable_name' => 'setVariableName',
        'display_name' => 'setDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card' => 'getCard',
        'client_id' => 'getClientId',
        'connector_id' => 'getConnectorId',
        'created_at' => 'getCreatedAt',
        'display_value_and_unit_string' => 'getDisplayValueAndUnitString',
        'icon_icon' => 'getIconIcon',
        'id' => 'getId',
        'input_type' => 'getInputType',
        'ion_icon' => 'getIonIcon',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'note' => 'getNote',
        'note_object' => 'getNoteObject',
        'note_html' => 'getNoteHtml',
        'original_unit_id' => 'getOriginalUnitId',
        'original_value' => 'getOriginalValue',
        'png_path' => 'getPngPath',
        'png_url' => 'getPngUrl',
        'product_url' => 'getProductUrl',
        'source_name' => 'getSourceName',
        'start_date' => 'getStartDate',
        'start_time_epoch' => 'getStartTimeEpoch',
        'start_time_string' => 'getStartTimeString',
        'svg_url' => 'getSvgUrl',
        'unit_abbreviated_name' => 'getUnitAbbreviatedName',
        'unit_category_id' => 'getUnitCategoryId',
        'unit_category_name' => 'getUnitCategoryName',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'user_variable_unit_abbreviated_name' => 'getUserVariableUnitAbbreviatedName',
        'user_variable_unit_category_id' => 'getUserVariableUnitCategoryId',
        'user_variable_unit_category_name' => 'getUserVariableUnitCategoryName',
        'user_variable_unit_id' => 'getUserVariableUnitId',
        'user_variable_unit_name' => 'getUserVariableUnitName',
        'user_variable_variable_category_id' => 'getUserVariableVariableCategoryId',
        'user_variable_variable_category_name' => 'getUserVariableVariableCategoryName',
        'valence' => 'getValence',
        'value' => 'getValue',
        'variable_category_id' => 'getVariableCategoryId',
        'variable_category_image_url' => 'getVariableCategoryImageUrl',
        'variable_category_name' => 'getVariableCategoryName',
        'variable_description' => 'getVariableDescription',
        'variable_id' => 'getVariableId',
        'variable_name' => 'getVariableName',
        'display_name' => 'getDisplayName'
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
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['connector_id'] = isset($data['connector_id']) ? $data['connector_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['display_value_and_unit_string'] = isset($data['display_value_and_unit_string']) ? $data['display_value_and_unit_string'] : null;
        $this->container['icon_icon'] = isset($data['icon_icon']) ? $data['icon_icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['input_type'] = isset($data['input_type']) ? $data['input_type'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['manual_tracking'] = isset($data['manual_tracking']) ? $data['manual_tracking'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['note_object'] = isset($data['note_object']) ? $data['note_object'] : null;
        $this->container['note_html'] = isset($data['note_html']) ? $data['note_html'] : null;
        $this->container['original_unit_id'] = isset($data['original_unit_id']) ? $data['original_unit_id'] : null;
        $this->container['original_value'] = isset($data['original_value']) ? $data['original_value'] : null;
        $this->container['png_path'] = isset($data['png_path']) ? $data['png_path'] : null;
        $this->container['png_url'] = isset($data['png_url']) ? $data['png_url'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['source_name'] = isset($data['source_name']) ? $data['source_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['start_time_epoch'] = isset($data['start_time_epoch']) ? $data['start_time_epoch'] : null;
        $this->container['start_time_string'] = isset($data['start_time_string']) ? $data['start_time_string'] : null;
        $this->container['svg_url'] = isset($data['svg_url']) ? $data['svg_url'] : null;
        $this->container['unit_abbreviated_name'] = isset($data['unit_abbreviated_name']) ? $data['unit_abbreviated_name'] : null;
        $this->container['unit_category_id'] = isset($data['unit_category_id']) ? $data['unit_category_id'] : null;
        $this->container['unit_category_name'] = isset($data['unit_category_name']) ? $data['unit_category_name'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['user_variable_unit_abbreviated_name'] = isset($data['user_variable_unit_abbreviated_name']) ? $data['user_variable_unit_abbreviated_name'] : null;
        $this->container['user_variable_unit_category_id'] = isset($data['user_variable_unit_category_id']) ? $data['user_variable_unit_category_id'] : null;
        $this->container['user_variable_unit_category_name'] = isset($data['user_variable_unit_category_name']) ? $data['user_variable_unit_category_name'] : null;
        $this->container['user_variable_unit_id'] = isset($data['user_variable_unit_id']) ? $data['user_variable_unit_id'] : null;
        $this->container['user_variable_unit_name'] = isset($data['user_variable_unit_name']) ? $data['user_variable_unit_name'] : null;
        $this->container['user_variable_variable_category_id'] = isset($data['user_variable_variable_category_id']) ? $data['user_variable_variable_category_id'] : null;
        $this->container['user_variable_variable_category_name'] = isset($data['user_variable_variable_category_name']) ? $data['user_variable_variable_category_name'] : null;
        $this->container['valence'] = isset($data['valence']) ? $data['valence'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['variable_category_id'] = isset($data['variable_category_id']) ? $data['variable_category_id'] : null;
        $this->container['variable_category_image_url'] = isset($data['variable_category_image_url']) ? $data['variable_category_image_url'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['variable_description'] = isset($data['variable_description']) ? $data['variable_description'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['source_name'] === null) {
            $invalidProperties[] = "'source_name' can't be null";
        }
        if ($this->container['start_time_string'] === null) {
            $invalidProperties[] = "'start_time_string' can't be null";
        }
        if ($this->container['unit_abbreviated_name'] === null) {
            $invalidProperties[] = "'unit_abbreviated_name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets card
     *
     * @return \CureDAO\Client\Models\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Models\Card $card Card containing image, text, link and relevant buttons
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
     * @param string $client_id Ex: curedao
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets connector_id
     *
     * @return int
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     *
     * @param int $connector_id Ex: 13
     *
     * @return $this
     */
    public function setConnectorId($connector_id)
    {
        $this->container['connector_id'] = $connector_id;

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
     * @param string $created_at Ex: 2017-07-30 21:08:36
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets display_value_and_unit_string
     *
     * @return string
     */
    public function getDisplayValueAndUnitString()
    {
        return $this->container['display_value_and_unit_string'];
    }

    /**
     * Sets display_value_and_unit_string
     *
     * @param string $display_value_and_unit_string Examples: 3/5, $10, or 1 count
     *
     * @return $this
     */
    public function setDisplayValueAndUnitString($display_value_and_unit_string)
    {
        $this->container['display_value_and_unit_string'] = $display_value_and_unit_string;

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
     * @param int $id Ex: 1051466127
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
     * @param string $input_type Ex: value
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
     * @param string $ion_icon Ex: ion-ios-medkit-outline
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

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
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Note of measurement
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets note_object
     *
     * @return object
     */
    public function getNoteObject()
    {
        return $this->container['note_object'];
    }

    /**
     * Sets note_object
     *
     * @param object $note_object Additional meta data for the measurement
     *
     * @return $this
     */
    public function setNoteObject($note_object)
    {
        $this->container['note_object'] = $note_object;

        return $this;
    }

    /**
     * Gets note_html
     *
     * @return object
     */
    public function getNoteHtml()
    {
        return $this->container['note_html'];
    }

    /**
     * Sets note_html
     *
     * @param object $note_html Embeddable HTML with message hyperlinked with associated url
     *
     * @return $this
     */
    public function setNoteHtml($note_html)
    {
        $this->container['note_html'] = $note_html;

        return $this;
    }

    /**
     * Gets original_unit_id
     *
     * @return int
     */
    public function getOriginalUnitId()
    {
        return $this->container['original_unit_id'];
    }

    /**
     * Sets original_unit_id
     *
     * @param int $original_unit_id Ex: 23
     *
     * @return $this
     */
    public function setOriginalUnitId($original_unit_id)
    {
        $this->container['original_unit_id'] = $original_unit_id;

        return $this;
    }

    /**
     * Gets original_value
     *
     * @return double
     */
    public function getOriginalValue()
    {
        return $this->container['original_value'];
    }

    /**
     * Sets original_value
     *
     * @param double $original_value Original value submitted. Unit: Originally submitted.
     *
     * @return $this
     */
    public function setOriginalValue($original_value)
    {
        $this->container['original_value'] = $original_value;

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
     * Gets source_name
     *
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     *
     * @param string $source_name Application or device used to record the measurement values
     *
     * @return $this
     */
    public function setSourceName($source_name)
    {
        $this->container['source_name'] = $source_name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Ex: 2014-08-27
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets start_time_epoch
     *
     * @return int
     */
    public function getStartTimeEpoch()
    {
        return $this->container['start_time_epoch'];
    }

    /**
     * Sets start_time_epoch
     *
     * @param int $start_time_epoch Seconds between the start of the event measured and 1970 (Unix timestamp)
     *
     * @return $this
     */
    public function setStartTimeEpoch($start_time_epoch)
    {
        $this->container['start_time_epoch'] = $start_time_epoch;

        return $this;
    }

    /**
     * Gets start_time_string
     *
     * @return string
     */
    public function getStartTimeString()
    {
        return $this->container['start_time_string'];
    }

    /**
     * Sets start_time_string
     *
     * @param string $start_time_string Start Time for the measurement event in UTC ISO 8601 YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setStartTimeString($start_time_string)
    {
        $this->container['start_time_string'] = $start_time_string;

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
     * @param string $unit_abbreviated_name Abbreviated name for the unit of measurement
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
     * @param int $unit_id Ex: 23
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
     * @param string $unit_name Ex: Count
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

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
     * @param string $updated_at Ex: 2017-07-30 21:08:36
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Link to associated Facebook like or Github commit, for instance
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param int $user_variable_variable_category_id Ex: 13
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
     * @param string $user_variable_variable_category_name Ex: Treatments
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
     * Gets value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double $value Converted measurement value in requested unit
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param int $variable_category_id Ex: 13
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
     * @param string $variable_category_image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Healthcare/pill-96.png
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
     * @param int $variable_id Ex: 5956846
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
     * @param string $variable_name Name of the variable for which we are creating the measurement records
     *
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

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
