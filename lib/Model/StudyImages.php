<?php
/**
 * StudyImages
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * StudyImages Class Doc Comment
 *
 */
class StudyImages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyImages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cause_variable_image_url' => 'string',
        'cause_variable_ion_icon' => 'string',
        'effect_variable_image_url' => 'string',
        'effect_variable_ion_icon' => 'string',
        'gauge_image' => 'string',
        'gauge_image_square' => 'string',
        'gauge_sharing_image_url' => 'string',
        'image_url' => 'string',
        'robot_sharing_image_url' => 'string',
        'avatar' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cause_variable_image_url' => null,
        'cause_variable_ion_icon' => null,
        'effect_variable_image_url' => null,
        'effect_variable_ion_icon' => null,
        'gauge_image' => null,
        'gauge_image_square' => null,
        'gauge_sharing_image_url' => null,
        'image_url' => null,
        'robot_sharing_image_url' => null,
        'avatar' => null
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
        'cause_variable_image_url' => 'causeVariableImageUrl',
        'cause_variable_ion_icon' => 'causeVariableIonIcon',
        'effect_variable_image_url' => 'effectVariableImageUrl',
        'effect_variable_ion_icon' => 'effectVariableIonIcon',
        'gauge_image' => 'gaugeImage',
        'gauge_image_square' => 'gaugeImageSquare',
        'gauge_sharing_image_url' => 'gaugeSharingImageUrl',
        'image_url' => 'imageUrl',
        'robot_sharing_image_url' => 'robotSharingImageUrl',
        'avatar' => 'avatar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cause_variable_image_url' => 'setCauseVariableImageUrl',
        'cause_variable_ion_icon' => 'setCauseVariableIonIcon',
        'effect_variable_image_url' => 'setEffectVariableImageUrl',
        'effect_variable_ion_icon' => 'setEffectVariableIonIcon',
        'gauge_image' => 'setGaugeImage',
        'gauge_image_square' => 'setGaugeImageSquare',
        'gauge_sharing_image_url' => 'setGaugeSharingImageUrl',
        'image_url' => 'setImageUrl',
        'robot_sharing_image_url' => 'setRobotSharingImageUrl',
        'avatar' => 'setAvatar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cause_variable_image_url' => 'getCauseVariableImageUrl',
        'cause_variable_ion_icon' => 'getCauseVariableIonIcon',
        'effect_variable_image_url' => 'getEffectVariableImageUrl',
        'effect_variable_ion_icon' => 'getEffectVariableIonIcon',
        'gauge_image' => 'getGaugeImage',
        'gauge_image_square' => 'getGaugeImageSquare',
        'gauge_sharing_image_url' => 'getGaugeSharingImageUrl',
        'image_url' => 'getImageUrl',
        'robot_sharing_image_url' => 'getRobotSharingImageUrl',
        'avatar' => 'getAvatar'
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
        $this->container['cause_variable_image_url'] = isset($data['cause_variable_image_url']) ? $data['cause_variable_image_url'] : null;
        $this->container['cause_variable_ion_icon'] = isset($data['cause_variable_ion_icon']) ? $data['cause_variable_ion_icon'] : null;
        $this->container['effect_variable_image_url'] = isset($data['effect_variable_image_url']) ? $data['effect_variable_image_url'] : null;
        $this->container['effect_variable_ion_icon'] = isset($data['effect_variable_ion_icon']) ? $data['effect_variable_ion_icon'] : null;
        $this->container['gauge_image'] = isset($data['gauge_image']) ? $data['gauge_image'] : null;
        $this->container['gauge_image_square'] = isset($data['gauge_image_square']) ? $data['gauge_image_square'] : null;
        $this->container['gauge_sharing_image_url'] = isset($data['gauge_sharing_image_url']) ? $data['gauge_sharing_image_url'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['robot_sharing_image_url'] = isset($data['robot_sharing_image_url']) ? $data['robot_sharing_image_url'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gauge_image'] === null) {
            $invalidProperties[] = "'gauge_image' can't be null";
        }
        if ($this->container['gauge_image_square'] === null) {
            $invalidProperties[] = "'gauge_image_square' can't be null";
        }
        if ($this->container['image_url'] === null) {
            $invalidProperties[] = "'image_url' can't be null";
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
     * Gets cause_variable_image_url
     *
     * @return string
     */
    public function getCauseVariableImageUrl()
    {
        return $this->container['cause_variable_image_url'];
    }

    /**
     * Sets cause_variable_image_url
     *
     * @param string $cause_variable_image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Household/sleeping_in_bed-96.png
     *
     * @return $this
     */
    public function setCauseVariableImageUrl($cause_variable_image_url)
    {
        $this->container['cause_variable_image_url'] = $cause_variable_image_url;

        return $this;
    }

    /**
     * Gets cause_variable_ion_icon
     *
     * @return string
     */
    public function getCauseVariableIonIcon()
    {
        return $this->container['cause_variable_ion_icon'];
    }

    /**
     * Sets cause_variable_ion_icon
     *
     * @param string $cause_variable_ion_icon Ex: ion-ios-cloudy-night-outline
     *
     * @return $this
     */
    public function setCauseVariableIonIcon($cause_variable_ion_icon)
    {
        $this->container['cause_variable_ion_icon'] = $cause_variable_ion_icon;

        return $this;
    }

    /**
     * Gets effect_variable_image_url
     *
     * @return string
     */
    public function getEffectVariableImageUrl()
    {
        return $this->container['effect_variable_image_url'];
    }

    /**
     * Sets effect_variable_image_url
     *
     * @param string $effect_variable_image_url Ex: https://maxcdn.icons8.com/Color/PNG/96/Cinema/theatre_mask-96.png
     *
     * @return $this
     */
    public function setEffectVariableImageUrl($effect_variable_image_url)
    {
        $this->container['effect_variable_image_url'] = $effect_variable_image_url;

        return $this;
    }

    /**
     * Gets effect_variable_ion_icon
     *
     * @return string
     */
    public function getEffectVariableIonIcon()
    {
        return $this->container['effect_variable_ion_icon'];
    }

    /**
     * Sets effect_variable_ion_icon
     *
     * @param string $effect_variable_ion_icon Ex: ion-happy-outline
     *
     * @return $this
     */
    public function setEffectVariableIonIcon($effect_variable_ion_icon)
    {
        $this->container['effect_variable_ion_icon'] = $effect_variable_ion_icon;

        return $this;
    }

    /**
     * Gets gauge_image
     *
     * @return string
     */
    public function getGaugeImage()
    {
        return $this->container['gauge_image'];
    }

    /**
     * Sets gauge_image
     *
     * @param string $gauge_image Ex: https://s3.amazonaws.com/curedao-docs/images/gauge-moderately-positive-relationship.png
     *
     * @return $this
     */
    public function setGaugeImage($gauge_image)
    {
        $this->container['gauge_image'] = $gauge_image;

        return $this;
    }

    /**
     * Gets gauge_image_square
     *
     * @return string
     */
    public function getGaugeImageSquare()
    {
        return $this->container['gauge_image_square'];
    }

    /**
     * Sets gauge_image_square
     *
     * @param string $gauge_image_square Ex: https://s3.amazonaws.com/curedao-docs/images/gauge-moderately-positive-relationship-200-200.png
     *
     * @return $this
     */
    public function setGaugeImageSquare($gauge_image_square)
    {
        $this->container['gauge_image_square'] = $gauge_image_square;

        return $this;
    }

    /**
     * Gets gauge_sharing_image_url
     *
     * @return string
     */
    public function getGaugeSharingImageUrl()
    {
        return $this->container['gauge_sharing_image_url'];
    }

    /**
     * Sets gauge_sharing_image_url
     *
     * @param string $gauge_sharing_image_url Image with gauge and category images
     *
     * @return $this
     */
    public function setGaugeSharingImageUrl($gauge_sharing_image_url)
    {
        $this->container['gauge_sharing_image_url'] = $gauge_sharing_image_url;

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
     * @param string $image_url Ex: https://s3-us-west-1.amazonaws.com/qmimages/variable_categories_gauges_logo_background/gauge-moderately-positive-relationship_sleep_emotions_logo_background.png
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets robot_sharing_image_url
     *
     * @return string
     */
    public function getRobotSharingImageUrl()
    {
        return $this->container['robot_sharing_image_url'];
    }

    /**
     * Sets robot_sharing_image_url
     *
     * @param string $robot_sharing_image_url Image with robot and category images
     *
     * @return $this
     */
    public function setRobotSharingImageUrl($robot_sharing_image_url)
    {
        $this->container['robot_sharing_image_url'] = $robot_sharing_image_url;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar Avatar of the principal investigator
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

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
