<?php
/**
 * Explanation
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * Explanation Class 
 */
class Explanation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Explanation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'image' => '\CureDAO\Client\Models\Image',
        'ion_icon' => 'string',
        'start_tracking' => '\CureDAO\Client\Models\ExplanationStartTracking',
        'title' => 'string',
        'html' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'image' => null,
        'ion_icon' => null,
        'start_tracking' => null,
        'title' => null,
        'html' => null
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
        'description' => 'description',
        'image' => 'image',
        'ion_icon' => 'ionIcon',
        'start_tracking' => 'startTracking',
        'title' => 'title',
        'html' => 'html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'image' => 'setImage',
        'ion_icon' => 'setIonIcon',
        'start_tracking' => 'setStartTracking',
        'title' => 'setTitle',
        'html' => 'setHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'image' => 'getImage',
        'ion_icon' => 'getIonIcon',
        'start_tracking' => 'getStartTracking',
        'title' => 'getTitle',
        'html' => 'getHtml'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['start_tracking'] = isset($data['start_tracking']) ? $data['start_tracking'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['ion_icon'] === null) {
            $invalidProperties[] = "'ion_icon' can't be null";
        }
        if ($this->container['start_tracking'] === null) {
            $invalidProperties[] = "'start_tracking' can't be null";
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
     * @param string $description Ex: These factors are most predictive of Overall Mood based on your own data.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \CureDAO\Client\Models\Image
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \CureDAO\Client\Models\Image $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * @param string $ion_icon Ex: ion-ios-person
     *
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

        return $this;
    }

    /**
     * Gets start_tracking
     *
     * @return \CureDAO\Client\Models\ExplanationStartTracking
     */
    public function getStartTracking()
    {
        return $this->container['start_tracking'];
    }

    /**
     * Sets start_tracking
     *
     * @param \CureDAO\Client\Models\ExplanationStartTracking $start_tracking start_tracking
     *
     * @return $this
     */
    public function setStartTracking($start_tracking)
    {
        $this->container['start_tracking'] = $start_tracking;

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
     * @param string $title Ex: Top Predictors of Overall Mood
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html Embeddable list of study summaries with explanation at the top
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

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
