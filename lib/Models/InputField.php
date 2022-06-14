<?php
/**
 * InputField
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * InputField Class
 */
class InputField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_name' => 'string',
        'help_text' => 'string',
        'hint' => 'string',
        'icon' => 'string',
        'id' => 'string',
        'image' => 'string',
        'key' => 'string',
        'label_left' => 'string',
        'label_right' => 'string',
        'link' => 'string',
        'max_length' => 'int',
        'max_value' => 'float',
        'min_length' => 'int',
        'min_value' => 'float',
        'options' => 'string[]',
        'placeholder' => 'string',
        'post_url' => 'string',
        'required' => 'bool',
        'show' => 'bool',
        'submit_button' => '\CureDAO\Client\Models\Button',
        'type' => 'string',
        'validation_pattern' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'display_name' => null,
        'help_text' => null,
        'hint' => null,
        'icon' => null,
        'id' => null,
        'image' => null,
        'key' => null,
        'label_left' => null,
        'label_right' => null,
        'link' => null,
        'max_length' => null,
        'max_value' => null,
        'min_length' => null,
        'min_value' => null,
        'options' => null,
        'placeholder' => null,
        'post_url' => null,
        'required' => null,
        'show' => null,
        'submit_button' => null,
        'type' => null,
        'validation_pattern' => null,
        'value' => null
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
        'display_name' => 'displayName',
        'help_text' => 'helpText',
        'hint' => 'hint',
        'icon' => 'icon',
        'id' => 'id',
        'image' => 'image',
        'key' => 'key',
        'label_left' => 'labelLeft',
        'label_right' => 'labelRight',
        'link' => 'link',
        'max_length' => 'maxLength',
        'max_value' => 'maxValue',
        'min_length' => 'minLength',
        'min_value' => 'minValue',
        'options' => 'options',
        'placeholder' => 'placeholder',
        'post_url' => 'postUrl',
        'required' => 'required',
        'show' => 'show',
        'submit_button' => 'submitButton',
        'type' => 'type',
        'validation_pattern' => 'validationPattern',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'help_text' => 'setHelpText',
        'hint' => 'setHint',
        'icon' => 'setIcon',
        'id' => 'setId',
        'image' => 'setImage',
        'key' => 'setKey',
        'label_left' => 'setLabelLeft',
        'label_right' => 'setLabelRight',
        'link' => 'setLink',
        'max_length' => 'setMaxLength',
        'max_value' => 'setMaxValue',
        'min_length' => 'setMinLength',
        'min_value' => 'setMinValue',
        'options' => 'setOptions',
        'placeholder' => 'setPlaceholder',
        'post_url' => 'setPostUrl',
        'required' => 'setRequired',
        'show' => 'setShow',
        'submit_button' => 'setSubmitButton',
        'type' => 'setType',
        'validation_pattern' => 'setValidationPattern',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'help_text' => 'getHelpText',
        'hint' => 'getHint',
        'icon' => 'getIcon',
        'id' => 'getId',
        'image' => 'getImage',
        'key' => 'getKey',
        'label_left' => 'getLabelLeft',
        'label_right' => 'getLabelRight',
        'link' => 'getLink',
        'max_length' => 'getMaxLength',
        'max_value' => 'getMaxValue',
        'min_length' => 'getMinLength',
        'min_value' => 'getMinValue',
        'options' => 'getOptions',
        'placeholder' => 'getPlaceholder',
        'post_url' => 'getPostUrl',
        'required' => 'getRequired',
        'show' => 'getShow',
        'submit_button' => 'getSubmitButton',
        'type' => 'getType',
        'validation_pattern' => 'getValidationPattern',
        'value' => 'getValue'
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

    const TYPE_CHECK_BOX = 'check_box';
    const TYPE_DATE = 'date';
    const TYPE_EMAIL = 'email';
    const TYPE_NUMBER = 'number';
    const TYPE_POSTAL_CODE = 'postal_code';
    const TYPE_SELECT_OPTION = 'select_option';
    const TYPE_STRING = 'string';
    const TYPE__SWITCH = 'switch';
    const TYPE_TEXT_AREA = 'text_area';
    const TYPE_UNIT = 'unit';
    const TYPE_VARIABLE_CATEGORY = 'variable_category';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHECK_BOX,
            self::TYPE_DATE,
            self::TYPE_EMAIL,
            self::TYPE_NUMBER,
            self::TYPE_POSTAL_CODE,
            self::TYPE_SELECT_OPTION,
            self::TYPE_STRING,
            self::TYPE__SWITCH,
            self::TYPE_TEXT_AREA,
            self::TYPE_UNIT,
            self::TYPE_VARIABLE_CATEGORY,
        ];
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
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['label_left'] = isset($data['label_left']) ? $data['label_left'] : null;
        $this->container['label_right'] = isset($data['label_right']) ? $data['label_right'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['post_url'] = isset($data['post_url']) ? $data['post_url'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['show'] = isset($data['show']) ? $data['show'] : null;
        $this->container['submit_button'] = isset($data['submit_button']) ? $data['submit_button'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['validation_pattern'] = isset($data['validation_pattern']) ? $data['validation_pattern'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name What do you expect?
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string $help_text What do you expect?
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets hint
     *
     * @return string
     */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
     * Sets hint
     *
     * @param string $hint What do you expect?
     *
     * @return $this
     */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon What do you expect?
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id HTML element id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image What do you expect?
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key What do you expect?
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets label_left
     *
     * @return string
     */
    public function getLabelLeft()
    {
        return $this->container['label_left'];
    }

    /**
     * Sets label_left
     *
     * @param string $label_left What do you expect?
     *
     * @return $this
     */
    public function setLabelLeft($label_left)
    {
        $this->container['label_left'] = $label_left;

        return $this;
    }

    /**
     * Gets label_right
     *
     * @return string
     */
    public function getLabelRight()
    {
        return $this->container['label_right'];
    }

    /**
     * Sets label_right
     *
     * @param string $label_right What do you expect?
     *
     * @return $this
     */
    public function setLabelRight($label_right)
    {
        $this->container['label_right'] = $label_right;

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
     * @param string $link What do you expect?
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int $max_length What do you expect?
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float $max_value What do you expect?
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int $min_length What do you expect?
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param float $min_value What do you expect?
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options Selector list options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string $placeholder Ex: Title
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets post_url
     *
     * @return string
     */
    public function getPostUrl()
    {
        return $this->container['post_url'];
    }

    /**
     * Sets post_url
     *
     * @param string $post_url What do you expect?
     *
     * @return $this
     */
    public function setPostUrl($post_url)
    {
        $this->container['post_url'] = $post_url;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required What do you expect?
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets show
     *
     * @return bool
     */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
     * Sets show
     *
     * @param bool $show Ex: Title
     *
     * @return $this
     */
    public function setShow($show)
    {
        $this->container['show'] = $show;

        return $this;
    }

    /**
     * Gets submit_button
     *
     * @return \CureDAO\Client\Models\Button
     */
    public function getSubmitButton()
    {
        return $this->container['submit_button'];
    }

    /**
     * Sets submit_button
     *
     * @param \CureDAO\Client\Models\Button $submit_button submit_button
     *
     * @return $this
     */
    public function setSubmitButton($submit_button)
    {
        $this->container['submit_button'] = $submit_button;

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
     * @param string $type Ex: Title
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validation_pattern
     *
     * @return string
     */
    public function getValidationPattern()
    {
        return $this->container['validation_pattern'];
    }

    /**
     * Sets validation_pattern
     *
     * @param string $validation_pattern See http://html5pattern.com/ for examples
     *
     * @return $this
     */
    public function setValidationPattern($validation_pattern)
    {
        $this->container['validation_pattern'] = $validation_pattern;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value What do you expect?
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
