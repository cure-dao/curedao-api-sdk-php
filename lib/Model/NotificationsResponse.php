<?php
/**
 * NotificationsResponse

 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * NotificationsResponse Class Doc Comment
 *
 * @category Class
 * @package  CureDAO\Client
 * @author   Mike P. Sinn
 * @link     https://github.com/cure-dao
 */
class NotificationsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notifications' => '\CureDAO\Client\Model\Notification[]',
        'description' => 'string',
        'summary' => 'string',
        'image' => '\CureDAO\Client\Model\Image',
        'avatar' => 'string',
        'ion_icon' => 'string',
        'html' => 'string',
        'errors' => '\CureDAO\Client\Model\Error[]',
        'status' => 'string',
        'success' => 'bool',
        'code' => 'float',
        'link' => 'string',
        'card' => '\CureDAO\Client\Model\Card'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notifications' => null,
        'description' => null,
        'summary' => null,
        'image' => null,
        'avatar' => null,
        'ion_icon' => null,
        'html' => null,
        'errors' => null,
        'status' => null,
        'success' => null,
        'code' => null,
        'link' => null,
        'card' => null
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
        'notifications' => 'notifications',
        'description' => 'description',
        'summary' => 'summary',
        'image' => 'image',
        'avatar' => 'avatar',
        'ion_icon' => 'ionIcon',
        'html' => 'html',
        'errors' => 'errors',
        'status' => 'status',
        'success' => 'success',
        'code' => 'code',
        'link' => 'link',
        'card' => 'card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notifications' => 'setNotifications',
        'description' => 'setDescription',
        'summary' => 'setSummary',
        'image' => 'setImage',
        'avatar' => 'setAvatar',
        'ion_icon' => 'setIonIcon',
        'html' => 'setHtml',
        'errors' => 'setErrors',
        'status' => 'setStatus',
        'success' => 'setSuccess',
        'code' => 'setCode',
        'link' => 'setLink',
        'card' => 'setCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notifications' => 'getNotifications',
        'description' => 'getDescription',
        'summary' => 'getSummary',
        'image' => 'getImage',
        'avatar' => 'getAvatar',
        'ion_icon' => 'getIonIcon',
        'html' => 'getHtml',
        'errors' => 'getErrors',
        'status' => 'getStatus',
        'success' => 'getSuccess',
        'code' => 'getCode',
        'link' => 'getLink',
        'card' => 'getCard'
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
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notifications'] === null) {
            $invalidProperties[] = "'notifications' can't be null";
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
     * Gets notifications
     *
     * @return \CureDAO\Client\Model\Notification[]
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \CureDAO\Client\Model\Notification[] $notifications notifications
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
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
     * @param string $description Notification
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary Notification
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \CureDAO\Client\Model\Image
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \CureDAO\Client\Model\Image $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * @param string $avatar Square icon png url
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

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
     * Gets errors
     *
     * @return \CureDAO\Client\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \CureDAO\Client\Model\Error[] $errors Array of error objects with message property
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status ex. OK or ERROR
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success true or false
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets code
     *
     * @return float
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param float $code Response code such as 200
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link A super neat url you might want to share with your users!
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \CureDAO\Client\Model\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Model\Card $card A super neat card with buttons and HTML that you can use in your app!
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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
