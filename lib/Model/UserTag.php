<?php
/**
 * UserTag
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * UserTag Class Doc Comment
 *
 */
class UserTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserTag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversion_factor' => 'float',
        'tagged_variable_id' => 'int',
        'tag_variable_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversion_factor' => null,
        'tagged_variable_id' => null,
        'tag_variable_id' => null
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
        'conversion_factor' => 'conversionFactor',
        'tagged_variable_id' => 'taggedVariableId',
        'tag_variable_id' => 'tagVariableId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversion_factor' => 'setConversionFactor',
        'tagged_variable_id' => 'setTaggedVariableId',
        'tag_variable_id' => 'setTagVariableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversion_factor' => 'getConversionFactor',
        'tagged_variable_id' => 'getTaggedVariableId',
        'tag_variable_id' => 'getTagVariableId'
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
        $this->container['conversion_factor'] = isset($data['conversion_factor']) ? $data['conversion_factor'] : null;
        $this->container['tagged_variable_id'] = isset($data['tagged_variable_id']) ? $data['tagged_variable_id'] : null;
        $this->container['tag_variable_id'] = isset($data['tag_variable_id']) ? $data['tag_variable_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conversion_factor'] === null) {
            $invalidProperties[] = "'conversion_factor' can't be null";
        }
        if ($this->container['tagged_variable_id'] === null) {
            $invalidProperties[] = "'tagged_variable_id' can't be null";
        }
        if ($this->container['tag_variable_id'] === null) {
            $invalidProperties[] = "'tag_variable_id' can't be null";
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
     * Gets conversion_factor
     *
     * @return float
     */
    public function getConversionFactor()
    {
        return $this->container['conversion_factor'];
    }

    /**
     * Sets conversion_factor
     *
     * @param float $conversion_factor Number by which we multiply the tagged variable value to obtain the tag variable (ingredient) value
     *
     * @return $this
     */
    public function setConversionFactor($conversion_factor)
    {
        $this->container['conversion_factor'] = $conversion_factor;

        return $this;
    }

    /**
     * Gets tagged_variable_id
     *
     * @return int
     */
    public function getTaggedVariableId()
    {
        return $this->container['tagged_variable_id'];
    }

    /**
     * Sets tagged_variable_id
     *
     * @param int $tagged_variable_id This is the id of the variable being tagged with an ingredient or something.
     *
     * @return $this
     */
    public function setTaggedVariableId($tagged_variable_id)
    {
        $this->container['tagged_variable_id'] = $tagged_variable_id;

        return $this;
    }

    /**
     * Gets tag_variable_id
     *
     * @return int
     */
    public function getTagVariableId()
    {
        return $this->container['tag_variable_id'];
    }

    /**
     * Sets tag_variable_id
     *
     * @param int $tag_variable_id This is the id of the ingredient variable whose value is determined based on the value of the tagged variable.
     *
     * @return $this
     */
    public function setTagVariableId($tag_variable_id)
    {
        $this->container['tag_variable_id'] = $tag_variable_id;

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
