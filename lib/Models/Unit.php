<?php
/**
 * Unit
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * Unit Class 
 */
class Unit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Unit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abbreviated_name' => 'string',
        'advanced' => 'int',
        'category' => 'string',
        'category_id' => 'int',
        'category_name' => 'string',
        'conversion_steps' => '\CureDAO\Client\Models\ConversionStep[]',
        'id' => 'int',
        'manual_tracking' => 'int',
        'maximum_allowed_value' => 'double',
        'maximum_value' => 'int',
        'minimum_allowed_value' => 'double',
        'minimum_value' => 'int',
        'name' => 'string',
        'unit_category' => '\CureDAO\Client\Models\UnitCategory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abbreviated_name' => null,
        'advanced' => null,
        'category' => null,
        'category_id' => null,
        'category_name' => null,
        'conversion_steps' => null,
        'id' => null,
        'manual_tracking' => null,
        'maximum_allowed_value' => 'double',
        'maximum_value' => null,
        'minimum_allowed_value' => 'double',
        'minimum_value' => null,
        'name' => null,
        'unit_category' => null
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
        'abbreviated_name' => 'abbreviatedName',
        'advanced' => 'advanced',
        'category' => 'category',
        'category_id' => 'categoryId',
        'category_name' => 'categoryName',
        'conversion_steps' => 'conversionSteps',
        'id' => 'id',
        'manual_tracking' => 'manualTracking',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'maximum_value' => 'maximumValue',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'minimum_value' => 'minimumValue',
        'name' => 'name',
        'unit_category' => 'unitCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abbreviated_name' => 'setAbbreviatedName',
        'advanced' => 'setAdvanced',
        'category' => 'setCategory',
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'conversion_steps' => 'setConversionSteps',
        'id' => 'setId',
        'manual_tracking' => 'setManualTracking',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'maximum_value' => 'setMaximumValue',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'minimum_value' => 'setMinimumValue',
        'name' => 'setName',
        'unit_category' => 'setUnitCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abbreviated_name' => 'getAbbreviatedName',
        'advanced' => 'getAdvanced',
        'category' => 'getCategory',
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'conversion_steps' => 'getConversionSteps',
        'id' => 'getId',
        'manual_tracking' => 'getManualTracking',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'maximum_value' => 'getMaximumValue',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'minimum_value' => 'getMinimumValue',
        'name' => 'getName',
        'unit_category' => 'getUnitCategory'
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

    const CATEGORY_DISTANCE = 'Distance';
    const CATEGORY_DURATION = 'Duration';
    const CATEGORY_ENERGY = 'Energy';
    const CATEGORY_FREQUENCY = 'Frequency';
    const CATEGORY_MISCELLANY = 'Miscellany';
    const CATEGORY_PRESSURE = 'Pressure';
    const CATEGORY_PROPORTION = 'Proportion';
    const CATEGORY_RATING = 'Rating';
    const CATEGORY_TEMPERATURE = 'Temperature';
    const CATEGORY_VOLUME = 'Volume';
    const CATEGORY_WEIGHT = 'Weight';
    const CATEGORY_COUNT = 'Count';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_DISTANCE,
            self::CATEGORY_DURATION,
            self::CATEGORY_ENERGY,
            self::CATEGORY_FREQUENCY,
            self::CATEGORY_MISCELLANY,
            self::CATEGORY_PRESSURE,
            self::CATEGORY_PROPORTION,
            self::CATEGORY_RATING,
            self::CATEGORY_TEMPERATURE,
            self::CATEGORY_VOLUME,
            self::CATEGORY_WEIGHT,
            self::CATEGORY_COUNT,
        ];
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    public $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['abbreviated_name'] = $data['abbreviated_name'] ?? null;
        $this->container['advanced'] = $data['advanced'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['category_name'] = $data['category_name'] ?? null;
        $this->container['conversion_steps'] = $data['conversion_steps'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['manual_tracking'] = $data['manual_tracking'] ?? null;
        $this->container['maximum_allowed_value'] = $data['maximum_allowed_value'] ?? null;
        $this->container['maximum_value'] = $data['maximum_value'] ?? null;
        $this->container['minimum_allowed_value'] = $data['minimum_allowed_value'] ?? null;
        $this->container['minimum_value'] = $data['minimum_value'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['unit_category'] = $data['unit_category'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['abbreviated_name'] === null) {
            $invalidProperties[] = "'abbreviated_name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['conversion_steps'] === null) {
            $invalidProperties[] = "'conversion_steps' can't be null";
        }
        if ($this->container['maximum_value'] === null) {
            $invalidProperties[] = "'maximum_value' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['unit_category'] === null) {
            $invalidProperties[] = "'unit_category' can't be null";
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
     * Gets abbreviated_name
     *
     * @return string
     */
    public function getAbbreviatedName()
    {
        return $this->container['abbreviated_name'];
    }

    /**
     * Sets abbreviated_name
     *
     * @param string $abbreviated_name Unit abbreviation
     *
     * @return $this
     */
    public function setAbbreviatedName($abbreviated_name)
    {
        $this->container['abbreviated_name'] = $abbreviated_name;

        return $this;
    }

    /**
     * Gets advanced
     *
     * @return int
     */
    public function getAdvanced()
    {
        return $this->container['advanced'];
    }

    /**
     * Sets advanced
     *
     * @param int $advanced Ex: 1
     *
     * @return $this
     */
    public function setAdvanced($advanced)
    {
        $this->container['advanced'] = $advanced;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Unit category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id Ex: 6
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name Ex: Miscellany
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets conversion_steps
     *
     * @return \CureDAO\Client\Models\ConversionStep[]
     */
    public function getConversionSteps()
    {
        return $this->container['conversion_steps'];
    }

    /**
     * Sets conversion_steps
     *
     * @param \CureDAO\Client\Models\ConversionStep[] $conversion_steps Conversion steps list
     *
     * @return $this
     */
    public function setConversionSteps($conversion_steps)
    {
        $this->container['conversion_steps'] = $conversion_steps;

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
     * @param int $id Ex: 29
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets manual_tracking
     *
     * @return int
     */
    public function getManualTracking()
    {
        return $this->container['manual_tracking'];
    }

    /**
     * Sets manual_tracking
     *
     * @param int $manual_tracking Ex: 0
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
     * @param double $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis.
     *
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets maximum_value
     *
     * @return int
     */
    public function getMaximumValue()
    {
        return $this->container['maximum_value'];
    }

    /**
     * Sets maximum_value
     *
     * @param int $maximum_value Ex: 4
     *
     * @return $this
     */
    public function setMaximumValue($maximum_value)
    {
        $this->container['maximum_value'] = $maximum_value;

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
     * @param double $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis.
     *
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets minimum_value
     *
     * @return int
     */
    public function getMinimumValue()
    {
        return $this->container['minimum_value'];
    }

    /**
     * Sets minimum_value
     *
     * @param int $minimum_value Ex: 0
     *
     * @return $this
     */
    public function setMinimumValue($minimum_value)
    {
        $this->container['minimum_value'] = $minimum_value;

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
     * @param string $name Unit name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unit_category
     *
     * @return \CureDAO\Client\Models\UnitCategory
     */
    public function getUnitCategory()
    {
        return $this->container['unit_category'];
    }

    /**
     * Sets unit_category
     *
     * @param \CureDAO\Client\Models\UnitCategory $unit_category unit_category
     *
     * @return $this
     */
    public function setUnitCategory($unit_category)
    {
        $this->container['unit_category'] = $unit_category;

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
        return $this->container[$offset] ?? null;
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
