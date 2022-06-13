<?php
/**
 * StudyLinks
 *
 */



namespace CureDAO\Client\Model;

use \ArrayAccess;
use \CureDAO\Client\ObjectSerializer;

/**
 * StudyLinks Class Doc Comment
 *
 */
class StudyLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StudyLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'study_join_link' => 'string',
        'study_link_email' => 'string',
        'study_link_facebook' => 'string',
        'study_link_google' => 'string',
        'study_link_static' => 'string',
        'study_link_dynamic' => 'string',
        'study_link_twitter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'study_join_link' => null,
        'study_link_email' => null,
        'study_link_facebook' => null,
        'study_link_google' => null,
        'study_link_static' => null,
        'study_link_dynamic' => null,
        'study_link_twitter' => null
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
        'study_join_link' => 'studyJoinLink',
        'study_link_email' => 'studyLinkEmail',
        'study_link_facebook' => 'studyLinkFacebook',
        'study_link_google' => 'studyLinkGoogle',
        'study_link_static' => 'studyLinkStatic',
        'study_link_dynamic' => 'studyLinkDynamic',
        'study_link_twitter' => 'studyLinkTwitter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'study_join_link' => 'setStudyJoinLink',
        'study_link_email' => 'setStudyLinkEmail',
        'study_link_facebook' => 'setStudyLinkFacebook',
        'study_link_google' => 'setStudyLinkGoogle',
        'study_link_static' => 'setStudyLinkStatic',
        'study_link_dynamic' => 'setStudyLinkDynamic',
        'study_link_twitter' => 'setStudyLinkTwitter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'study_join_link' => 'getStudyJoinLink',
        'study_link_email' => 'getStudyLinkEmail',
        'study_link_facebook' => 'getStudyLinkFacebook',
        'study_link_google' => 'getStudyLinkGoogle',
        'study_link_static' => 'getStudyLinkStatic',
        'study_link_dynamic' => 'getStudyLinkDynamic',
        'study_link_twitter' => 'getStudyLinkTwitter'
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
        $this->container['study_join_link'] = isset($data['study_join_link']) ? $data['study_join_link'] : null;
        $this->container['study_link_email'] = isset($data['study_link_email']) ? $data['study_link_email'] : null;
        $this->container['study_link_facebook'] = isset($data['study_link_facebook']) ? $data['study_link_facebook'] : null;
        $this->container['study_link_google'] = isset($data['study_link_google']) ? $data['study_link_google'] : null;
        $this->container['study_link_static'] = isset($data['study_link_static']) ? $data['study_link_static'] : null;
        $this->container['study_link_dynamic'] = isset($data['study_link_dynamic']) ? $data['study_link_dynamic'] : null;
        $this->container['study_link_twitter'] = isset($data['study_link_twitter']) ? $data['study_link_twitter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['study_link_email'] === null) {
            $invalidProperties[] = "'study_link_email' can't be null";
        }
        if ($this->container['study_link_facebook'] === null) {
            $invalidProperties[] = "'study_link_facebook' can't be null";
        }
        if ($this->container['study_link_google'] === null) {
            $invalidProperties[] = "'study_link_google' can't be null";
        }
        if ($this->container['study_link_static'] === null) {
            $invalidProperties[] = "'study_link_static' can't be null";
        }
        if ($this->container['study_link_dynamic'] === null) {
            $invalidProperties[] = "'study_link_dynamic' can't be null";
        }
        if ($this->container['study_link_twitter'] === null) {
            $invalidProperties[] = "'study_link_twitter' can't be null";
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
     * Gets study_join_link
     *
     * @return string
     */
    public function getStudyJoinLink()
    {
        return $this->container['study_join_link'];
    }

    /**
     * Sets study_join_link
     *
     * @param string $study_join_link Share this link with potential study participants
     *
     * @return $this
     */
    public function setStudyJoinLink($study_join_link)
    {
        $this->container['study_join_link'] = $study_join_link;

        return $this;
    }

    /**
     * Gets study_link_email
     *
     * @return string
     */
    public function getStudyLinkEmail()
    {
        return $this->container['study_link_email'];
    }

    /**
     * Sets study_link_email
     *
     * @param string $study_link_email Ex: mailto:?subject=N1%20Study%3A%20Sleep%20Quality%20Predicts%20Higher%20Overall%20Mood&body=Check%20out%20my%20study%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230%0A%0AHave%20a%20great%20day!
     *
     * @return $this
     */
    public function setStudyLinkEmail($study_link_email)
    {
        $this->container['study_link_email'] = $study_link_email;

        return $this;
    }

    /**
     * Gets study_link_facebook
     *
     * @return string
     */
    public function getStudyLinkFacebook()
    {
        return $this->container['study_link_facebook'];
    }

    /**
     * Sets study_link_facebook
     *
     * @param string $study_link_facebook Ex: https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230
     *
     * @return $this
     */
    public function setStudyLinkFacebook($study_link_facebook)
    {
        $this->container['study_link_facebook'] = $study_link_facebook;

        return $this;
    }

    /**
     * Gets study_link_google
     *
     * @return string
     */
    public function getStudyLinkGoogle()
    {
        return $this->container['study_link_google'];
    }

    /**
     * Sets study_link_google
     *
     * @param string $study_link_google Ex: https://plus.google.com/share?url=https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230
     *
     * @return $this
     */
    public function setStudyLinkGoogle($study_link_google)
    {
        $this->container['study_link_google'] = $study_link_google;

        return $this;
    }

    /**
     * Gets study_link_static
     *
     * @return string
     */
    public function getStudyLinkStatic()
    {
        return $this->container['study_link_static'];
    }

    /**
     * Sets study_link_static
     *
     * @param string $study_link_static Ex: https://local.quantimo.do/api/v2/study?causeVariableName=Sleep%20Quality&effectVariableName=Overall%20Mood&userId=230
     *
     * @return $this
     */
    public function setStudyLinkStatic($study_link_static)
    {
        $this->container['study_link_static'] = $study_link_static;

        return $this;
    }

    /**
     * Gets study_link_dynamic
     *
     * @return string
     */
    public function getStudyLinkDynamic()
    {
        return $this->container['study_link_dynamic'];
    }

    /**
     * Sets study_link_dynamic
     *
     * @param string $study_link_dynamic Ex: https://local.quantimo.do/ionic/Modo/www/index.html#/app/study?causeVariableName=Sleep%20Quality&effectVariableName=Overall%20Mood&userId=230
     *
     * @return $this
     */
    public function setStudyLinkDynamic($study_link_dynamic)
    {
        $this->container['study_link_dynamic'] = $study_link_dynamic;

        return $this;
    }

    /**
     * Gets study_link_twitter
     *
     * @return string
     */
    public function getStudyLinkTwitter()
    {
        return $this->container['study_link_twitter'];
    }

    /**
     * Sets study_link_twitter
     *
     * @param string $study_link_twitter Ex: https://twitter.com/home?status=Sleep%20Quality%20Predicts%20Higher%20Overall%20Mood%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fstudy%3FcauseVariableName%3DSleep%2520Quality%26effectVariableName%3DOverall%2520Mood%26userId%3D230%20%40curedao
     *
     * @return $this
     */
    public function setStudyLinkTwitter($study_link_twitter)
    {
        $this->container['study_link_twitter'] = $study_link_twitter;

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
