<?php
/**
 * Activity
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Activity Class Doc Comment
 *
 */
class Activity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Activity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user_id' => 'int',
        'component' => 'string',
        'type' => 'string',
        'action' => 'string',
        'content' => 'string',
        'primary_link' => 'string',
        'item_id' => 'int',
        'secondary_item_id' => 'int',
        'date_recorded' => 'string',
        'hide_sitewide' => 'int',
        'mptt_left' => 'int',
        'mptt_right' => 'int',
        'is_spam' => 'int',
        'meta_data_array' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'user_id' => null,
        'component' => null,
        'type' => null,
        'action' => null,
        'content' => null,
        'primary_link' => null,
        'item_id' => null,
        'secondary_item_id' => null,
        'date_recorded' => null,
        'hide_sitewide' => null,
        'mptt_left' => null,
        'mptt_right' => null,
        'is_spam' => null,
        'meta_data_array' => null
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
        'id' => 'id',
        'user_id' => 'userId',
        'component' => 'component',
        'type' => 'type',
        'action' => 'action',
        'content' => 'content',
        'primary_link' => 'primaryLink',
        'item_id' => 'itemId',
        'secondary_item_id' => 'secondaryItemId',
        'date_recorded' => 'dateRecorded',
        'hide_sitewide' => 'hideSitewide',
        'mptt_left' => 'mpttLeft',
        'mptt_right' => 'mpttRight',
        'is_spam' => 'isSpam',
        'meta_data_array' => 'metaDataArray'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'component' => 'setComponent',
        'type' => 'setType',
        'action' => 'setAction',
        'content' => 'setContent',
        'primary_link' => 'setPrimaryLink',
        'item_id' => 'setItemId',
        'secondary_item_id' => 'setSecondaryItemId',
        'date_recorded' => 'setDateRecorded',
        'hide_sitewide' => 'setHideSitewide',
        'mptt_left' => 'setMpttLeft',
        'mptt_right' => 'setMpttRight',
        'is_spam' => 'setIsSpam',
        'meta_data_array' => 'setMetaDataArray'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'component' => 'getComponent',
        'type' => 'getType',
        'action' => 'getAction',
        'content' => 'getContent',
        'primary_link' => 'getPrimaryLink',
        'item_id' => 'getItemId',
        'secondary_item_id' => 'getSecondaryItemId',
        'date_recorded' => 'getDateRecorded',
        'hide_sitewide' => 'getHideSitewide',
        'mptt_left' => 'getMpttLeft',
        'mptt_right' => 'getMpttRight',
        'is_spam' => 'getIsSpam',
        'meta_data_array' => 'getMetaDataArray'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['primary_link'] = isset($data['primary_link']) ? $data['primary_link'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['secondary_item_id'] = isset($data['secondary_item_id']) ? $data['secondary_item_id'] : null;
        $this->container['date_recorded'] = isset($data['date_recorded']) ? $data['date_recorded'] : null;
        $this->container['hide_sitewide'] = isset($data['hide_sitewide']) ? $data['hide_sitewide'] : null;
        $this->container['mptt_left'] = isset($data['mptt_left']) ? $data['mptt_left'] : null;
        $this->container['mptt_right'] = isset($data['mptt_right']) ? $data['mptt_right'] : null;
        $this->container['is_spam'] = isset($data['is_spam']) ? $data['is_spam'] : null;
        $this->container['meta_data_array'] = isset($data['meta_data_array']) ? $data['meta_data_array'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['component'] === null) {
            $invalidProperties[] = "'component' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['primary_link'] === null) {
            $invalidProperties[] = "'primary_link' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['secondary_item_id'] === null) {
            $invalidProperties[] = "'secondary_item_id' can't be null";
        }
        if ($this->container['date_recorded'] === null) {
            $invalidProperties[] = "'date_recorded' can't be null";
        }
        if ($this->container['hide_sitewide'] === null) {
            $invalidProperties[] = "'hide_sitewide' can't be null";
        }
        if ($this->container['mptt_left'] === null) {
            $invalidProperties[] = "'mptt_left' can't be null";
        }
        if ($this->container['mptt_right'] === null) {
            $invalidProperties[] = "'mptt_right' can't be null";
        }
        if ($this->container['is_spam'] === null) {
            $invalidProperties[] = "'is_spam' can't be null";
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
     * @param int $id What do you expect?
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int $user_id What do you expect?
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets component
     *
     * @return string
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param string $component What do you expect?
     *
     * @return $this
     */
    public function setComponent($component)
    {
        $this->container['component'] = $component;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type What do you expect?
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
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
     * @param string $action What do you expect?
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content What do you expect?
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets primary_link
     *
     * @return string
     */
    public function getPrimaryLink()
    {
        return $this->container['primary_link'];
    }

    /**
     * Sets primary_link
     *
     * @param string $primary_link What do you expect?
     *
     * @return $this
     */
    public function setPrimaryLink($primary_link)
    {
        $this->container['primary_link'] = $primary_link;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id What do you expect?
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets secondary_item_id
     *
     * @return int
     */
    public function getSecondaryItemId()
    {
        return $this->container['secondary_item_id'];
    }

    /**
     * Sets secondary_item_id
     *
     * @param int $secondary_item_id What do you expect?
     *
     * @return $this
     */
    public function setSecondaryItemId($secondary_item_id)
    {
        $this->container['secondary_item_id'] = $secondary_item_id;

        return $this;
    }

    /**
     * Gets date_recorded
     *
     * @return string
     */
    public function getDateRecorded()
    {
        return $this->container['date_recorded'];
    }

    /**
     * Sets date_recorded
     *
     * @param string $date_recorded What do you expect?
     *
     * @return $this
     */
    public function setDateRecorded($date_recorded)
    {
        $this->container['date_recorded'] = $date_recorded;

        return $this;
    }

    /**
     * Gets hide_sitewide
     *
     * @return int
     */
    public function getHideSitewide()
    {
        return $this->container['hide_sitewide'];
    }

    /**
     * Sets hide_sitewide
     *
     * @param int $hide_sitewide What do you expect?
     *
     * @return $this
     */
    public function setHideSitewide($hide_sitewide)
    {
        $this->container['hide_sitewide'] = $hide_sitewide;

        return $this;
    }

    /**
     * Gets mptt_left
     *
     * @return int
     */
    public function getMpttLeft()
    {
        return $this->container['mptt_left'];
    }

    /**
     * Sets mptt_left
     *
     * @param int $mptt_left What do you expect?
     *
     * @return $this
     */
    public function setMpttLeft($mptt_left)
    {
        $this->container['mptt_left'] = $mptt_left;

        return $this;
    }

    /**
     * Gets mptt_right
     *
     * @return int
     */
    public function getMpttRight()
    {
        return $this->container['mptt_right'];
    }

    /**
     * Sets mptt_right
     *
     * @param int $mptt_right What do you expect?
     *
     * @return $this
     */
    public function setMpttRight($mptt_right)
    {
        $this->container['mptt_right'] = $mptt_right;

        return $this;
    }

    /**
     * Gets is_spam
     *
     * @return int
     */
    public function getIsSpam()
    {
        return $this->container['is_spam'];
    }

    /**
     * Sets is_spam
     *
     * @param int $is_spam What do you expect?
     *
     * @return $this
     */
    public function setIsSpam($is_spam)
    {
        $this->container['is_spam'] = $is_spam;

        return $this;
    }

    /**
     * Gets meta_data_array
     *
     * @return object[]
     */
    public function getMetaDataArray()
    {
        return $this->container['meta_data_array'];
    }

    /**
     * Sets meta_data_array
     *
     * @param object[] $meta_data_array Additional activity key-value data
     *
     * @return $this
     */
    public function setMetaDataArray($meta_data_array)
    {
        $this->container['meta_data_array'] = $meta_data_array;

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
