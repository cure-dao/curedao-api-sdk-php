<?php
/**
 * TrackingReminderNotificationAction
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * TrackingReminderNotificationAction Class Doc Comment
 *
 */
class TrackingReminderNotificationAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingReminderNotificationAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'callback' => 'string',
        'modified_value' => 'int',
        'title' => 'string',
        'long_title' => 'string',
        'short_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'callback' => null,
        'modified_value' => null,
        'title' => null,
        'long_title' => null,
        'short_title' => null
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
        'action' => 'action',
        'callback' => 'callback',
        'modified_value' => 'modifiedValue',
        'title' => 'title',
        'long_title' => 'longTitle',
        'short_title' => 'shortTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'callback' => 'setCallback',
        'modified_value' => 'setModifiedValue',
        'title' => 'setTitle',
        'long_title' => 'setLongTitle',
        'short_title' => 'setShortTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'callback' => 'getCallback',
        'modified_value' => 'getModifiedValue',
        'title' => 'getTitle',
        'long_title' => 'getLongTitle',
        'short_title' => 'getShortTitle'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['modified_value'] = isset($data['modified_value']) ? $data['modified_value'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['long_title'] = isset($data['long_title']) ? $data['long_title'] : null;
        $this->container['short_title'] = isset($data['short_title']) ? $data['short_title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['callback'] === null) {
            $invalidProperties[] = "'callback' can't be null";
        }
        if ($this->container['modified_value'] === null) {
            $invalidProperties[] = "'modified_value' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Ex: track
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets callback
     *
     * @return string
     */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
     * Sets callback
     *
     * @param string $callback Ex: trackThreeRatingAction
     *
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;

        return $this;
    }

    /**
     * Gets modified_value
     *
     * @return int
     */
    public function getModifiedValue()
    {
        return $this->container['modified_value'];
    }

    /**
     * Sets modified_value
     *
     * @param int $modified_value Ex: 3
     *
     * @return $this
     */
    public function setModifiedValue($modified_value)
    {
        $this->container['modified_value'] = $modified_value;

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
     * @param string $title Ex: 3/5
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets long_title
     *
     * @return string
     */
    public function getLongTitle()
    {
        return $this->container['long_title'];
    }

    /**
     * Sets long_title
     *
     * @param string $long_title Ex: Rate 3/5
     *
     * @return $this
     */
    public function setLongTitle($long_title)
    {
        $this->container['long_title'] = $long_title;

        return $this;
    }

    /**
     * Gets short_title
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->container['short_title'];
    }

    /**
     * Sets short_title
     *
     * @param string $short_title Ex: 3
     *
     * @return $this
     */
    public function setShortTitle($short_title)
    {
        $this->container['short_title'] = $short_title;

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
