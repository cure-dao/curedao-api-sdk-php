<?php
/**
 * StudySharing
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * StudySharing Class
 */
class StudySharing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudySharing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'share_user_measurements' => 'bool',
        'sharing_description' => 'string',
        'sharing_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'share_user_measurements' => null,
        'sharing_description' => null,
        'sharing_title' => null
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
        'share_user_measurements' => 'shareUserMeasurements',
        'sharing_description' => 'sharingDescription',
        'sharing_title' => 'sharingTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'share_user_measurements' => 'setShareUserMeasurements',
        'sharing_description' => 'setSharingDescription',
        'sharing_title' => 'setSharingTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'share_user_measurements' => 'getShareUserMeasurements',
        'sharing_description' => 'getSharingDescription',
        'sharing_title' => 'getSharingTitle'
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
        $this->container['share_user_measurements'] = isset($data['share_user_measurements']) ? $data['share_user_measurements'] : null;
        $this->container['sharing_description'] = isset($data['sharing_description']) ? $data['sharing_description'] : null;
        $this->container['sharing_title'] = isset($data['sharing_title']) ? $data['sharing_title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['share_user_measurements'] === null) {
            $invalidProperties[] = "'share_user_measurements' can't be null";
        }
        if ($this->container['sharing_description'] === null) {
            $invalidProperties[] = "'sharing_description' can't be null";
        }
        if ($this->container['sharing_title'] === null) {
            $invalidProperties[] = "'sharing_title' can't be null";
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
