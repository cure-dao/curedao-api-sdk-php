<?php
/**
 * Notification

 */

namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * Notification Class Doc Comment
 *
 * @category Class
 * @package  CureDAO\Client
 * @author   Mike P. Sinn
 * @link     https://github.com/cure-dao
 */
class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user_id' => 'int',
        'item_id' => 'int',
        'secondary_item_id' => 'int',
        'component_name' => 'string',
        'component_action' => 'string',
        'date_notified' => 'string',
        'is_new' => 'int',
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
        'item_id' => null,
        'secondary_item_id' => null,
        'component_name' => null,
        'component_action' => null,
        'date_notified' => null,
        'is_new' => null,
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
        'item_id' => 'itemId',
        'secondary_item_id' => 'secondaryItemId',
        'component_name' => 'componentName',
        'component_action' => 'componentAction',
        'date_notified' => 'dateNotified',
        'is_new' => 'isNew',
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
        'item_id' => 'setItemId',
        'secondary_item_id' => 'setSecondaryItemId',
        'component_name' => 'setComponentName',
        'component_action' => 'setComponentAction',
        'date_notified' => 'setDateNotified',
        'is_new' => 'setIsNew',
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
        'item_id' => 'getItemId',
        'secondary_item_id' => 'getSecondaryItemId',
        'component_name' => 'getComponentName',
        'component_action' => 'getComponentAction',
        'date_notified' => 'getDateNotified',
        'is_new' => 'getIsNew',
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['secondary_item_id'] = isset($data['secondary_item_id']) ? $data['secondary_item_id'] : null;
        $this->container['component_name'] = isset($data['component_name']) ? $data['component_name'] : null;
        $this->container['component_action'] = isset($data['component_action']) ? $data['component_action'] : null;
        $this->container['date_notified'] = isset($data['date_notified']) ? $data['date_notified'] : null;
        $this->container['is_new'] = isset($data['is_new']) ? $data['is_new'] : null;
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
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['secondary_item_id'] === null) {
            $invalidProperties[] = "'secondary_item_id' can't be null";
        }
        if ($this->container['component_name'] === null) {
            $invalidProperties[] = "'component_name' can't be null";
        }
        if ($this->container['component_action'] === null) {
            $invalidProperties[] = "'component_action' can't be null";
        }
        if ($this->container['date_notified'] === null) {
            $invalidProperties[] = "'date_notified' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalidProperties[] = "'is_new' can't be null";
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
     * Gets component_name
     *
     * @return string
     */
    public function getComponentName()
    {
        return $this->container['component_name'];
    }

    /**
     * Sets component_name
     *
     * @param string $component_name What do you expect?
     *
     * @return $this
     */
    public function setComponentName($component_name)
    {
        $this->container['component_name'] = $component_name;

        return $this;
    }

    /**
     * Gets component_action
     *
     * @return string
     */
    public function getComponentAction()
    {
        return $this->container['component_action'];
    }

    /**
     * Sets component_action
     *
     * @param string $component_action What do you expect?
     *
     * @return $this
     */
    public function setComponentAction($component_action)
    {
        $this->container['component_action'] = $component_action;

        return $this;
    }

    /**
     * Gets date_notified
     *
     * @return string
     */
    public function getDateNotified()
    {
        return $this->container['date_notified'];
    }

    /**
     * Sets date_notified
     *
     * @param string $date_notified What do you expect?
     *
     * @return $this
     */
    public function setDateNotified($date_notified)
    {
        $this->container['date_notified'] = $date_notified;

        return $this;
    }

    /**
     * Gets is_new
     *
     * @return int
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param int $is_new What do you expect?
     *
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->container['is_new'] = $is_new;

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
     * @param object[] $meta_data_array Additional notification key-value data
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
