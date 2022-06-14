<?php
/**
 * AuthorizedClients
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * AuthorizedClients Class 
 */
class AuthorizedClients implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthorizedClients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apps' => '\CureDAO\Client\Models\AppSettings[]',
        'individuals' => '\CureDAO\Client\Models\AppSettings[]',
        'studies' => '\CureDAO\Client\Models\AppSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apps' => null,
        'individuals' => null,
        'studies' => null
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
        'apps' => 'apps',
        'individuals' => 'individuals',
        'studies' => 'studies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apps' => 'setApps',
        'individuals' => 'setIndividuals',
        'studies' => 'setStudies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apps' => 'getApps',
        'individuals' => 'getIndividuals',
        'studies' => 'getStudies'
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
        $this->container['apps'] = isset($data['apps']) ? $data['apps'] : null;
        $this->container['individuals'] = isset($data['individuals']) ? $data['individuals'] : null;
        $this->container['studies'] = isset($data['studies']) ? $data['studies'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['apps'] === null) {
            $invalidProperties[] = "'apps' can't be null";
        }
        if ($this->container['individuals'] === null) {
            $invalidProperties[] = "'individuals' can't be null";
        }
        if ($this->container['studies'] === null) {
            $invalidProperties[] = "'studies' can't be null";
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
     * Gets apps
     *
     * @return \CureDAO\Client\Models\AppSettings[]
     */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
     * Sets apps
     *
     * @param \CureDAO\Client\Models\AppSettings[] $apps Applications with access to user measurements for all variables
     *
     * @return $this
     */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;

        return $this;
    }

    /**
     * Gets individuals
     *
     * @return \CureDAO\Client\Models\AppSettings[]
     */
    public function getIndividuals()
    {
        return $this->container['individuals'];
    }

    /**
     * Sets individuals
     *
     * @param \CureDAO\Client\Models\AppSettings[] $individuals Individuals such as physicians or family members with access to user measurements for all variables
     *
     * @return $this
     */
    public function setIndividuals($individuals)
    {
        $this->container['individuals'] = $individuals;

        return $this;
    }

    /**
     * Gets studies
     *
     * @return \CureDAO\Client\Models\AppSettings[]
     */
    public function getStudies()
    {
        return $this->container['studies'];
    }

    /**
     * Sets studies
     *
     * @param \CureDAO\Client\Models\AppSettings[] $studies Studies with access to generally anonymous user measurements for a specific predictor and outcome variable
     *
     * @return $this
     */
    public function setStudies($studies)
    {
        $this->container['studies'] = $studies;

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
